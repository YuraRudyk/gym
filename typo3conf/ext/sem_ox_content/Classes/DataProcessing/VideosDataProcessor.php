<?php
namespace Media711\SemOxContent\DataProcessing;

use Media711\SemContent\DataProcessing\AbstractDataProcessor;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageService;
use TYPO3\CMS\Core\Resource\Exception\InsufficientFolderAccessPermissionsException;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Resource\ResourceFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Class VideosDataProcessor
 * @package Media711\SemOxContent\DataProcessor
 */
class VideosDataProcessor extends AbstractDataProcessor
{
    /**
     * @param \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {
        $processedData['videos'] = !$cObj->data['assets'] ? $this->getVideoFilesFromFolder($cObj->data)
                                                          : $this->getRelatedVideoFiles($cObj->data);

        return $processedData;
    }

    /**
     * @param array $data
     * @return array
     */
    protected function getVideoFilesFromFolder($data)
    {
        $resourceStorage = ResourceFactory::getInstance()->getDefaultStorage();
        $parentFolder    = $resourceStorage->getFolder($data['tx_semoxcontent_assets_folder']);
        $files           = [];

        if (!$parentFolder) {
            return $files;
        }

        try {
            $files = $resourceStorage->getFilesInFolder($parentFolder, 0, 0, true, true);
        } catch (InsufficientFolderAccessPermissionsException $e) {
            $flashMessage = GeneralUtility::makeInstance(FlashMessage::class);
            $flashMessage->setMessage($e->getMessage());

            GeneralUtility::makeInstance(FlashMessageService::class)->getMessageQueueByIdentifier()
                                                                    ->addMessage($flashMessage);
        }

        return $files;
    }

    /**
     * @param array $data
     * @return array
     */
    protected function getRelatedVideoFiles($data)
    {
        return GeneralUtility::makeInstance(FileRepository::class)->findByRelation('tt_content', 'assets', $data['uid']);
    }
}