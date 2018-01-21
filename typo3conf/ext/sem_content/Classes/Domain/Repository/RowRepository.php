<?php
namespace Media711\SemContent\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class RowRepository
 *
 * @package sem_content
 * @subpackage Media711\SemContent\Domain\Repository
 * @author Andrii Valkiv
 */
class RowRepository extends Repository
{
    /**
     * Find row by uid. Do not respect storage page.
     *
     * @param int $uid
     * @return \Media711\SemContent\Domain\Model\Row
     */
    public function findByUid($uid)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);

        return $query->setLimit(1)->matching($query->equals('uid', (int) $uid))->execute()->getFirst();
    }

    /**
     * Find model object by row array. Do not respect storage page, don't check if record is hidden
     * and respects language uid
     *
     * @param array $row
     * @param bool $ignoreEnableFields
     * @return \Media711\SemContent\Domain\Model\Row
     */
    public function findOneByRow($row, $ignoreEnableFields = false)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->getQuerySettings()->setIgnoreEnableFields($ignoreEnableFields);
        $query->getQuerySettings()->setLanguageUid((int) $row['sys_language_uid']);

        return $query->setLimit(1)->matching($query->equals('uid', (int) $row['uid']))->execute()->getFirst();
    }

    /**
     * Find row by uid. Do not respect storage page and if record is hidden
     *
     * @param int $uid
     * @return \Media711\SemContent\Domain\Model\Row
     * @deprecated
     * @see $this->findOneByRow()
     */
    public function findByUidIncludeHidden($uid)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->getQuerySettings()->setIgnoreEnableFields(true);

        return $query->setLimit(1)->matching($query->equals('uid', (int) $uid))->execute()->getFirst();
    }
}
