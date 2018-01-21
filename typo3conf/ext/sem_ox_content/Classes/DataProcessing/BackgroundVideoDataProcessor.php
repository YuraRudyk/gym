<?php
namespace Media711\SemOxContent\DataProcessing;

use Media711\SemContent\DataProcessing\AbstractDataProcessor;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Core\Resource\FileRepository;

/**
 * Class BackgroundVideoDataProcessor
 * @package Media711\SemOxContent\DataProcessing
 */
class BackgroundVideoDataProcessor extends AbstractDataProcessor
{
    /**
     * @param ContentObjectRenderer $cObj
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
    )
    {
        $videos = $this->objectManager->get(FileRepository::class)->findByRelation('tt_content','assets' , $cObj->data['uid']);
        $images = $this->objectManager->get(FileRepository::class)->findByRelation('tt_content','image' , $cObj->data['uid']);

        $processedData['media'] = $videos ? $videos[0]: null;
        $processedData['image'] = $images ? $images[0]: null;

        return $processedData;
    }
}