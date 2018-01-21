<?php
namespace Media711\SemOxContent\DataProcessing;

use Media711\SemContent\DataProcessing\AbstractDataProcessor;
use Media711\SemOxContent\Domain\Model\Record;
use Media711\SemOxContent\Domain\Repository\RecordRepository;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Class ProductTeaserDataProcessor
 * @package Media711\SemOxContent\DataProcessing
 */
class ProductTeaserDataProcessor extends AbstractDataProcessor
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
        /** @var Record $record */
        $record = $this->objectManager->get(RecordRepository::class)->findByUid($cObj->data['uid']);

        $processedData['items'] = $record ? $record->getProductTeaser() : null;

        return $processedData;
    }
}