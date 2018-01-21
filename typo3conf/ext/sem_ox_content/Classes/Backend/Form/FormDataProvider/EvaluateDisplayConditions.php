<?php
namespace Media711\SemOxContent\Backend\Form\FormDataProvider;

use TYPO3\CMS\Core\Utility\MathUtility;

/**
 * Class EvaluateDisplayConditions implements the TCA 'displayCond' option.
 * The display condition is a colon separated string which describes
 * the condition to decide whether a form field should be displayed.
 */
class EvaluateDisplayConditions extends \TYPO3\CMS\Backend\Form\FormDataProvider\EvaluateDisplayConditions
{
    /**
     * Remove fields from processedTca columns that should not be displayed.
     *
     * @param array $result
     *
     * @return array
     */
    public function addData(array $result)
    {
        //only for slide init, in use in ajax create of inline element
        if ($result['tableName'] == 'tx_semcontent_domain_model_slideritem') {
            if (MathUtility::canBeInterpretedAsInteger($result['databaseRow']['uid']) ||
                MathUtility::canBeInterpretedAsInteger($result['inlineParentUid'])
            ) {
                $result['databaseRow']['slider'] = $result['inlineParentUid'];
            }
        }

        $result = $this->removeFlexformFields($result);
        $result = $this->removeFlexformSheets($result);
        $result = $this->removeTcaColumns($result);

        return $result;
    }
}