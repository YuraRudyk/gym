<?php
namespace Media711\SemOxContent\DataProcessing;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\Exception\ContentRenderingException;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class GalleryProcessor
 * @package Media711\SemOxContent\DataProcessing
 */
class GalleryProcessor extends \TYPO3\CMS\Frontend\DataProcessing\GalleryProcessor
{
    /**
     * Matching the tt_content field towards the imageOrient option
     *
     * @var array
     */
    protected $availableGalleryPositions = [
        'horizontal' => [
            'center'    => [0, 8, 51],
            'right'     => [1, 9, 17, 25, 53],
            'left'      => [2, 10, 18, 26, 52],
            'with-coin' => [50]
        ],
        'vertical' => [
            'above'  => [0, 1, 2],
            'intext' => [17, 18, 25, 26],
            'below'  => [8, 9, 10],
            'top'    => [50],
            'bottom' => [51, 52, 53],
        ]
    ];

    /**
     * Process data for a gallery, for instance the CType "textmedia"
     *
     * @param ContentObjectRenderer $cObj The content object renderer, which contains data of the content element
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     * @throws ContentRenderingException
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {
        $this->prepareAnimated($processedData);

        return parent::process($cObj, $contentObjectConfiguration, $processorConfiguration, $processedData);
    }

    /**
     * Prepare the animated
     *
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return void
     */
    protected function prepareAnimated(array $processedData)
    {
        $flexformService = GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Service\FlexFormService');
        $ffContent = $flexformService->convertFlexFormContentToArray($processedData['data']['pi_flexform']);

        $this->galleryData['animated'] = $ffContent['settings']['animated'];
    }
}