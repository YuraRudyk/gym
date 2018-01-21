<?php
namespace Media711\SemOxContent\ViewHelpers\Slider;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class DelayViewHelper
 * @package Media711\SemOxContent
 */
class DelayViewHelper extends AbstractViewHelper
{
    /**
     * Render class property based on input of $data array
     *
     * @param bool $autoplay
     * @param string $delay
     * @return string
     */
    public function render($autoplay = null, $delay = null) : string
    {
        if ($autoplay) {
            return $delay ? $delay : '5000';
        }

        return '0';
    }
}
