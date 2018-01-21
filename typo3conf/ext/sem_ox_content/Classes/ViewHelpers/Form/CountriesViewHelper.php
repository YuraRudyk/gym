<?php
namespace Media711\SemOxContent\ViewHelpers\Form;

/**
 * Class CountriesViewHelper
 * @package Media711\SemOxContent\ViewHelpers\Form
 */
class CountriesViewHelper extends \In2code\Powermail\ViewHelpers\Form\CountriesViewHelper
{
    /**
     * Get array with countries
     *
     * @param string $key
     * @param string $value
     * @param string $sortbyField
     * @param string $sorting
     * @param array  $atTop
     * @param string $delimiter
     * @return array
     */
    public function render(
        $key         = 'isoCodeA2',
        $value       = 'shortNameEn',
        $sortbyField = 'shortNameEn',
        $sorting     = 'asc',
        $atTop       = ['DE', 'US'],
        $delimiter   = '---------------'
    ) {
        $countries = parent::render($key, $value, $sortbyField, $sorting);
        $sorted    = [];

        foreach ($atTop as $item) {
            $sorted[$item] = $countries[$item];
            unset($countries[$item]);
        }

        $sorted[''] = $delimiter;

        return array_merge($sorted, $countries);
    }
}

