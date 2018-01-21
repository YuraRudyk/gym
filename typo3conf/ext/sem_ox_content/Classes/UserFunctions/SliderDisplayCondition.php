<?php
namespace Media711\SemOxContent\UserFunctions;

/**
 * Class SliderDisplayCondition
 * @package Media711\SemOxContent\UserFunctions
 */
class SliderDisplayCondition
{
    /**
     * This method checks inline element fields condition
     *
     * @param  array $parameters : parameters of the field, first param is validation field name, second param is true value,
     *
     * @return  string HTML for the field
     */
    public function checkInline($parameters)
    {
        if (!empty($parameters['record']['slider'])) {
            $sliderRow = $this->getDatabaseConnection()->exec_SELECTgetSingleRow(
                'tx_semoxcontent_slider_layout',
                'tt_content',
                'uid =' . $parameters['record']['slider']
            );
        }
        $sliderLayout = isset($sliderRow) && is_array($sliderRow) ? reset($sliderRow) : 'home-slider';

        return in_array($sliderLayout, $parameters['conditionParameters']);
    }

    /**
     * @return \TYPO3\CMS\Core\Database\DatabaseConnection
     */
     protected function getDatabaseConnection()
     {
         return $GLOBALS['TYPO3_DB'];
     }
}