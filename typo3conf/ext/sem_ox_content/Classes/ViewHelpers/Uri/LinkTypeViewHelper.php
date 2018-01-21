<?php
namespace Media711\SemOxContent\ViewHelpers\Uri;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper;

/**
 * ViewHelper class checks if link type is "internal" - true or "external" - false
 *
 * Class LinkTypeViewHelper
 * @package Media711\SemOxContent\ViewHelpers
 */
class LinkTypeViewHelper extends AbstractConditionViewHelper
{
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('linkData', 'string', 'Link data to check');
    }

    /**
     * render method parse link data and return "internal" - then or "external" - else or  for AbstractConditionViewHelper
     *
     * @return bool
     */
    public function render()
    {
        if (empty($this->arguments['linkData'])) $this->renderElseChild();

        $link = reset(explode(' ', $this->arguments['linkData']));

        return is_numeric($link) ? $this->renderThenChild() : $this->renderElseChild();
    }
}