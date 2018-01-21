<?php
namespace Media711\SemOxContent\ViewHelpers\Content;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class AppearanceClassViewHelper
 * @package Media711\SemOxContent
 */
class AppearanceClassViewHelper extends AbstractViewHelper
{
    /**
     * Render class property based on input of $data array
     *
     * @param array $data
     * @param bool $wrap
     * @return string
     */
    public function render(array $data, $wrap = true) : string
    {
        // Fields which impact on CSS class of content element and their default values
        $classes = [
            'tx_semoxcontent_section_frame'   => '',
            'tx_oxgridelements_paddingtop'    => (in_array($data['CType'], ['list', 'html']) and ($data['list_type'])!='news_pi1') ? '' : 'padding-top-default',
            'tx_oxgridelements_paddingbottom' => (in_array($data['CType'], ['list', 'html']) and ($data['list_type'])!='news_pi1') ? '' : 'padding-bottom-default',
            'tx_oxgridelements_paddingleft'   => '',
            'tx_oxgridelements_paddingright'  => ''
        ];

        // Override field if it's not empty in $data array
        foreach ($classes as $field => $value) {
            if (!empty($data[$field])) {
                $classes[$field] = $data[$field];
            }
        }

        // Concat the CSS classes into one string

        $className = implode(' ', array_filter($classes));

        if (!$className) {
            return '';
        }

        return $wrap ? "class=\"{$className}\"" : " {$className}";
    }
}
