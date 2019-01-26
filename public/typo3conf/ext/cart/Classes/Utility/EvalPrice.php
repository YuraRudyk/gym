<?php

namespace Extcode\Cart\Utility;

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

/**
 * Eval Price
 *
 * @author Daniel Lorenz <ext.cart@extco.de>
 */
class EvalPrice
{

    /**
     * Returns Field JS
     *
     * @return string
     */
    public function returnFieldJs()
    {
        $js = '
            var re = new RegExp("^[0-9]{1,}[.,]{0,1}[0-9]{0,2}$");

            if(value == "" || !value.match(re)) {
                alert("please enter a price");
                return "";
            }

            return value;';

        return $js;
    }

    /**
     * Evaluate Field Value
     *
     * @param $value
     * @param $is_in
     * @param $set
     *
     * @return string
     */
    public function evaluateFieldValue($value, $is_in, &$set)
    {
        if ($value == ''
            || $value == 'please enter a price'
            || !preg_match('/^[0-9]{1,}[.,]{0,1}[0-9]{0,2}$/', $value)
        ) {
            return 'please enter a price';
        }

        return $value;
    }
}
