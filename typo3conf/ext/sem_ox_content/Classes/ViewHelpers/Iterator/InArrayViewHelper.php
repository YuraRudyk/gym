<?php
namespace Media711\SemOxContent\ViewHelpers\Iterator;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper;

/**
 * Class InArrayViewHelper
 * @package Media711\SemOxContent\ViewHelpers\Iterator
 */
class InArrayViewHelper extends AbstractConditionViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('needle', 'mixed', 'Needle to search for in haystack');
        $this->registerArgument('haystack', 'mixed', 'Haystack in which to look for needle', true);
    }

    /**
     * This method decides if the condition is TRUE or FALSE.
     *
     * @param array $arguments ViewHelper arguments to evaluate the condition for this ViewHelper, allows for flexiblity in overriding this method.
     * @return bool
     */
    protected static function evaluateCondition($arguments = null)
    {
        $array = GeneralUtility::trimExplode(',', $arguments['haystack']);

        return in_array($arguments['needle'], $array);
    }
}
