<?php
namespace Media711\SemOxContent\Domain\Validator;

use In2code\Powermail\Domain\Model\Field;

class CaptchaValidator extends \In2code\Powermail\Domain\Validator\CaptchaValidator
{
    /**
     * @param string $value
     * @param Field $field
     * @return bool
     */
    protected function validateCaptcha($value, Field $field)
    {
        session_start();
        return parent::validateCaptcha($value, $field);
    }
}