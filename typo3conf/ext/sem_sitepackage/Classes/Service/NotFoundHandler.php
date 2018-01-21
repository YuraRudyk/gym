<?php
namespace Media711\SemSitepackage\Service;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Schema\Parser\AST\DataType\VarBinaryDataType;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\Exception\NoSuchOptionException;
use TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extensionmanager\Utility\ConfigurationUtility;

/**
 * Class NotFoundHandler
 * $GLOBALS['TYPO3_CONF_VARS']['FE']['pageNotFound_handling'] hook for 404 page handling
 *
 * @package Media711\SemSitepackage\Service
 * @author Andrii Valkiv
 */
class NotFoundHandler
{
    /**
     * @var array
     */
    protected $extConf = [];

    /**
     * @var integer
     */
    protected $notFoundPageId;

    /**
     * @var array
     */
    protected $params;

    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * NotFoundHandler constructor.
     */
    public function __construct()
    {
        $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->extConf = $this->getExtensionConfiguration();
        $this->notFoundPageId = $this->getNotFoundPageFromDatabaseForCurrentDomain();
    }

    /**
     * Process 404 error and prints its result according to selected language and current domain
     *
     * Usage:
     * $GLOBALS['TYPO3_CONF_VARS']['FE']['pageNotFound_handling'] = 'USER_FUNCTION:Media711\SemSitepackage\Service\NotFoundHandler->handle'
     *
     * @param array $params
     * @param $pObj
     *
     * @return NULL|string
     */
    public function handle($params, $pObj)
    {
        $this->params = $params;
        $languageVar = !empty($this->extConf['languageVar']) ? $this->extConf['languageVar'] : 'L';
        $query = http_build_query([
            'id' => $this->notFoundPageId ?? $this->extConf['pages404'],
            $languageVar => $_GET[$languageVar] ?? 0
        ]);

        $url404 = GeneralUtility::getIndpEnv('TYPO3_REQUEST_HOST') . '/' . 'index.php?' . $query;

        if (!$this->isStaticFile() && array_key_exists('allow_404', $_GET)) {
            return $this->callUrl($url404)['content'];
        }

        try {
            $params = $_GET;
            $params['allow_404'] = '1';
            /** @var UriBuilder $builder */
            $builder = $this->objectManager->get(UriBuilder::class);
            $query = $builder->reset()->setArguments($params)->buildFrontendUri();
            $host = GeneralUtility::getIndpEnv('TYPO3_REQUEST_HOST');
            $realUrl = $host . $query;
            $response = $this->callUrl($realUrl);
            http_response_code($response['code']);
            return $response['content'];
        } catch (\Throwable $e) {
            return $this->callUrl($url404)['content'];
        }
    }

    /**
     * Gets extension configuration from extension manager
     *
     * @return array
     * @throws NoSuchOptionException
     */
    protected function getExtensionConfiguration()
    {
        $tempConf = $this->objectManager->get(ConfigurationUtility::class)->getCurrentConfiguration('sem_sitepackage');
        $config = [];

        if (!is_array($tempConf)) {
            throw new NoSuchOptionException('The 404 handling conf is not defined or could not be fetched');
        }

        foreach ($tempConf as $param => $item) {
            if (isset($item['value'])) {
                $config[$param] = $item['value'];
            }
        }

        return $config;
    }

    /**
     * Get 404 page id for current domain
     *
     * @return integer
     */
    protected function getNotFoundPageFromDatabaseForCurrentDomain()
    {
        $domain = GeneralUtility::getIndpEnv('HTTP_HOST');
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tx_semsitepackage_not_found_pages');

        return $queryBuilder->select('not_found_page_id')
            ->from('tx_semsitepackage_not_found_pages')
            ->where(
                $queryBuilder->expr()->eq(
                    'domain',
                    $queryBuilder->createNamedParameter($domain)
                )
            )
            ->setMaxResults(1)
            ->execute()
            ->fetchColumn();
    }

    /**
     * Check if the url is for static file.
     *
     * @return bool
     */
    protected function isStaticFile()
    {
        $isStatic = false;

        if (!empty($this->extConf['staticFiles'])) {
            $staticFileExtensions = explode(',', $this->extConf['staticFiles']);

            foreach ($staticFileExtensions as $extension) {
                if (stristr(GeneralUtility::getIndpEnv('TYPO3_REQUEST_URL'), '.' . $extension) !== false) {
                    $isStatic = true;
                    break;
                }
            }
        }

        return $isStatic;
    }

    /**
     * @param string $url
     * @return array
     */
    private function callUrl($url): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
            curl_setopt(
                $ch, CURLOPT_HTTPHEADER,
                [
                    'Authorization: Basic ' . base64_encode("{$_SERVER['PHP_AUTH_USER']}:{$_SERVER['PHP_AUTH_PW']}")
                ]
            );
        }
        $content = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return [
            'content' => $content,
            'code' => $code
        ];
    }
}
