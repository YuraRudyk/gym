<?php

namespace Extcode\CartProducts\ViewHelpers\Product;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * BestSpecialPrice ViewHelper
 *
 * @author Daniel Lorenz <ext.cart@extco.de>
 */
class CategoriesListViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument(
            'product',
            \Extcode\CartProducts\Domain\Model\Product\Product::class,
            'product',
            true
        );
    }

    /**
     * @return float
     */
    public function render()
    {
        $product = $this->arguments['product'];
        $categoriesList = '';

        if ($categories = $product->getCategories()) {
            foreach ($categories as $category) {
                $categoriesList .= ($categoriesList == '' ? $category->getUid() : ',' . $category->getUid());
            }
        }
        return $categoriesList;
    }
}