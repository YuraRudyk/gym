<?php
namespace Media711\SemContent\DataProcessing;

use Media711\SemContent\Domain\Repository\RowRepository;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

/**
 * Class SliderDataProcessor implements data processing for
 * slider content element
 *
 * @package sem_content
 * @subpackage Media711\SemContent\DataProcessing
 * @author Andrii Valkiv
 */
class SliderDataProcessor extends AbstractDataProcessor
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
        /** @var \Media711\SemContent\Domain\Model\Row $row */
        $row                     = $this->objectManager->get(RowRepository::class)->findOneByRow($cObj->data);
        $processedData['slides'] = $row ? $row->getSlides() : [];

        return $processedData;
    }
}
