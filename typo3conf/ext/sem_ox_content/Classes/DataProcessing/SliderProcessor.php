<?php
namespace Media711\SemOxContent\DataProcessing;

use Media711\SemContent\DataProcessing\AbstractDataProcessor;
use Media711\SemOxContent\Domain\Model\Record;
use Media711\SemOxContent\Domain\Repository\RecordRepository;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Overridden Data processor for content element "Slider"
 *
 * @package Media711\SemContent\DataProcessing
 */
class SliderProcessor extends AbstractDataProcessor
{
    /**
     * Process data for the content element "Slider"
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {
        /** @var Record $record */
        $record = $this->objectManager->get(RecordRepository::class)->findByUid($cObj->data['uid']);

        $processedData['slider']          = $record ? $record->getSlider() : null;
        $processedData['globalLinkText']  = $record ? $record->getLinkText() : null;
        $processedData['backgroundColor'] = $record ? $record->getBackgroundColor() : null;

        return $processedData;
    }
}