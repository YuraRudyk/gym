<?php
namespace Media711\SemOxContent\DataProcessing;

use Media711\SemContent\DataProcessing\AbstractDataProcessor;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Service\FlexFormService;

/**
 * Class FlexFormDataProcessor
 * @package Media711\SemOxContent\DataProcessing
 */
class FlexFormDataProcessor extends AbstractDataProcessor
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
        $flexformService = GeneralUtility::makeInstance(FlexFormService::class);
        $ffContent = $flexformService->convertFlexFormContentToArray($processedData['data']['pi_flexform']);

        $processedData['ffContent'] = $ffContent['settings'] ?? null;

        return $processedData;
    }
}