<?php
namespace Media711\SemSitepackage\Hooks;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Frontend\Page\PageRepository;

/**
 * Class DataHandler
 * @package Media711\SemSitepackage\Hooks
 * @author Andrii Valkiv
 */
class DataHandler
{
    /**
     * @var array
     */
    protected $tableNames = [
        'pages'      => 'pages',
        'sys_domain' => 'sys_domain',
        'not_found'  => 'tx_semsitepackage_not_found_pages',
    ];

    /**
     * @var array
     */
    protected $statusesToCheck = [
        'new',
        'update'
    ];

    /**
     * @var \TYPO3\CMS\Core\Database\Query\QueryBuilder
     */
    protected $pagesTableQueryBuilder;

    /**
     * @var \TYPO3\CMS\Core\Database\Query\QueryBuilder
     */
    protected $sysDomainQueryBuilder;

    /**
     * @var \TYPO3\CMS\Core\Database\Query\QueryBuilder
     */
    protected $notFoundPagesQueryBuilder;

    /**
     * DataHandler constructor.
     */
    public function __construct()
    {
        $connectionPool               = GeneralUtility::makeInstance(ConnectionPool::class);
        $this->pagesTableQueryBuilder = $connectionPool->getQueryBuilderForTable($this->tableNames['pages']);
        $this->sysDomainQueryBuilder  = $connectionPool->getQueryBuilderForTable($this->tableNames['sys_domain']);

        // Table does not contain hidden and deleted fields so remove default frontend restrictions
        $this->notFoundPagesQueryBuilder = $connectionPool->getQueryBuilderForTable($this->tableNames['not_found']);
        $this->notFoundPagesQueryBuilder->getRestrictions()->removeAll();
    }

    /**
     * Process datamap after database operations
     *
     * @param string $status Status
     * @param string $table Table name
     * @param integer $recordUid The uid of the record
     * @param array $fields Fields array
     * @param \TYPO3\CMS\Core\DataHandling\DataHandler $parentObject Parent object
     */
    public function processDatamap_afterDatabaseOperations(
        $status,
        $table,
        $recordUid,
        array $fields,
        \TYPO3\CMS\Core\DataHandling\DataHandler $parentObject
    ) {
        if (in_array($status, $this->statusesToCheck) && $table == $this->tableNames['pages']) {
            // Check if field `tx_semsitepackage_is_not_found` was changed no matter if checkbox is checked or not
            if (array_key_exists('tx_semsitepackage_is_not_found', $fields)) {
                $rootLinePageUid = $this->getRootLinePageUid($recordUid);
                $domains = $this->sysDomainQueryBuilder->select('domainName')
                    ->from($this->tableNames['sys_domain'])
                    ->where(
                        $this->sysDomainQueryBuilder->expr()->eq(
                            'pid',
                            $this->sysDomainQueryBuilder->createNamedParameter($rootLinePageUid, \PDO::PARAM_INT)
                        )
                    )
                    ->execute()
                    ->fetchAll(\PDO::FETCH_COLUMN);

                // If checkbox was unset then remove all not found entries to domains.
                if (empty($fields['tx_semsitepackage_is_not_found'])) {
                    $this->notFoundPagesQueryBuilder->delete($this->tableNames['not_found'])
                        ->where(
                            $this->notFoundPagesQueryBuilder->expr()->eq(
                                'not_found_page_id',
                                $this->notFoundPagesQueryBuilder->createNamedParameter($recordUid, \PDO::PARAM_INT)
                            )
                        )
                        ->execute();

                    return;
                }

                // Go through each domain at root page of editing page
                foreach ($domains as $domain) {
                    $notFoundRecord = $this->notFoundPagesQueryBuilder->select('*')
                        ->from($this->tableNames['not_found'])
                        ->where(
                            $this->notFoundPagesQueryBuilder->expr()->eq(
                                'domain', $this->notFoundPagesQueryBuilder->createNamedParameter($domain, \PDO::PARAM_STR)
                            )
                        )
                        ->setMaxResults(1)
                        ->execute()
                        ->fetch();

                    if (!$notFoundRecord) {
                        $this->notFoundPagesQueryBuilder->insert($this->tableNames['not_found'])
                            ->values([
                                'domain'            => $domain,
                                'not_found_page_id' => (int) $recordUid
                            ])
                            ->execute();
                    } else {
                        // Disable checkbox of previous page if it's not the same
                        // as $recordUid (the page uid of what user is updating at the moment)
                        if ($recordUid !== $notFoundRecord['not_found_page_id']) {
                            $this->pagesTableQueryBuilder->resetQueryParts()
                                ->update($this->tableNames['pages'])
                                ->set('tx_semsitepackage_is_not_found', 0)
                                ->where(
                                    $this->pagesTableQueryBuilder->expr()->eq(
                                        'uid',
                                        $this->pagesTableQueryBuilder->createNamedParameter(
                                            $notFoundRecord['not_found_page_id'],
                                            \PDO::PARAM_INT
                                        )
                                    )
                                )
                                ->execute();
                        }

                        $this->notFoundPagesQueryBuilder->update($this->tableNames['not_found'])
                            ->set('not_found_page_id', (int) $recordUid)
                            ->where(
                                $this->notFoundPagesQueryBuilder->expr()->eq(
                                    'uid',
                                    $this->notFoundPagesQueryBuilder->createNamedParameter($notFoundRecord['uid'], \PDO::PARAM_INT)
                                )
                            )
                            ->execute();
                    }

                    $this->notFoundPagesQueryBuilder->resetQueryParts();
                }
            }
        }
    }

    /**
     * Handle delete cmd
     *
     * @param string $table
     * @param int $id
     * @param array $recordToDelete
     * @param bool $recordWasDeleted
     * @param \TYPO3\CMS\Core\DataHandling\DataHandler $parentObject
     */
    public function processCmdmap_deleteAction($table, $id, $recordToDelete, $recordWasDeleted, $parentObject)
    {
        if ($table == $this->tableNames['pages'] && isset($recordToDelete['tx_semsitepackage_is_not_found'])) {
            $this->notFoundPagesQueryBuilder->resetQueryParts()
                ->delete($this->tableNames['not_found'])
                ->where(
                    $this->notFoundPagesQueryBuilder->expr()->eq(
                        'not_found_page_id',
                        $this->notFoundPagesQueryBuilder->createNamedParameter($id, \PDO::PARAM_INT)
                    )
                )
                ->execute();
        }
    }

    /**
     * Return rootline page uid
     *
     * @param $pageUid
     * @return int
     */
    protected function getRootLinePageUid($pageUid)
    {
        $rootPageUid    = 0;
        $pageRepository = GeneralUtility::makeInstance(PageRepository::class);

        try {
            $rootLine = $pageRepository->getRootLine($pageUid);

            if ($domainStartPage = end($rootLine)) {
                $rootPageUid = (int) $domainStartPage['uid'];
            }
        } catch (\Exception $e) {
            $flashMessageService = GeneralUtility::makeInstance(ObjectManager::class)->get(FlashMessageService::class);
            $flashMessageService->getMessageQueueByIdentifier()->addMessage(
                GeneralUtility::makeInstance(
                    FlashMessage::class,
                    $e->getMessage(),
                    $e->getFile(),
                    FlashMessage::ERROR,
                    true
                )
            );

            if (TYPO3_DLOG) {
                GeneralUtility::devLog($e->getMessage(), 'sem_sitepackage', 3);
            }
        }

        return $rootPageUid;
    }
}