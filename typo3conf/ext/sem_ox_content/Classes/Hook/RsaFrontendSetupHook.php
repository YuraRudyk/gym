<?php
namespace Media711\SemOxContent\Hook;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Rsaauth\Hook\FrontendLoginHook;

/**
 * This class provides a hook to the login form to add extra javascript code
 * and supply a proper form tag.
 *
 * @package Media711\SemOxContent\Hook
 */
class RsaFrontendSetupHook extends FrontendLoginHook
{
    /**
     * Hooks to the felogin extension to provide additional code for FE login
     *
     * @return array 0 => onSubmit function, 1 => extra fields and required files
     */
    public function loginFormHook()
    {
        /** @var RsaEncryptionEncoder $rsaEncryptionEncoder */
        $rsaEncryptionEncoder = GeneralUtility::makeInstance(RsaEncryptionEncoder::class);
        if ($rsaEncryptionEncoder->isAvailable()) {
            $rsaEncryptionEncoder->enableRsaEncryption();
        }

        return array(0 => '', 1 => '');
    }
}