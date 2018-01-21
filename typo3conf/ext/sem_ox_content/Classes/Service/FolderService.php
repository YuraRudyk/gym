<?php
namespace Media711\SemOxContent\Service;

use TYPO3\CMS\Core\Resource\Exception\ResourceDoesNotExistException;
use TYPO3\CMS\Core\Resource\Service\UserFileMountService;
use TYPO3\CMS\Core\Resource\StorageRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class FolderService
 * @package Media711\SemOxContent\Service
 */
class FolderService extends UserFileMountService
{
    protected $fileadminStorageUid = 1;

    /**
     * @param array $PA
     */
    public function getFolderOptions(array &$PA)
    {
        $PA['row']['storage'][0] = $this->obtainDefaultResourceStorageUid();

        parent::renderTceformsSelectDropdown($PA);
    }

    /**
     * Obtain default resource storage uid
     *
     * @return int
     * @throws \TYPO3\CMS\Core\Resource\Exception\ResourceDoesNotExistException
     */
    protected function obtainDefaultResourceStorageUid()
    {
        /** @var StorageRepository $storageRepository */
        $storageRepository = GeneralUtility::makeInstance(StorageRepository::class);
        $storageObjects    = $storageRepository->findAll();

        foreach ($storageObjects as $storage) {
            if ($storage->isDefault() && $storage->isBrowsable()) {
                return $storage->getUid();
            }
        }

        throw new ResourceDoesNotExistException('Default resource does not exist');
    }
}