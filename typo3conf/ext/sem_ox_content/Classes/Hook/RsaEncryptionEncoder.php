<?php
namespace Media711\SemOxContent\Hook;

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * This class adds necessary Javascript code to encrypt fields in a form
 */
class RsaEncryptionEncoder extends \TYPO3\CMS\Rsaauth\RsaEncryptionEncoder
{
    /**
     * Load all necessary Javascript files
     *
     * @param bool $useRequireJsModule
     */
    public function enableRsaEncryption($useRequireJsModule = false)
    {
        if ($this->moduleLoaded || !$this->isAvailable()) {
            return;
        }

        $this->moduleLoaded = true;
        $pageRenderer       = GeneralUtility::makeInstance(PageRenderer::class);

        // Include necessary javascript files
        if ($useRequireJsModule) {
            $pageRenderer->loadRequireJsModule('TYPO3/CMS/Rsaauth/RsaEncryptionModule');
        } else {
            // Register ajax handler url
            $code = 'var TYPO3RsaEncryptionPublicKeyUrl = ' . GeneralUtility::quoteJSvalue(
                GeneralUtility::getIndpEnv('TYPO3_SITE_URL') . 'index.php?eID=RsaPublicKeyGenerationController') . ';';

            $filePath = 'typo3temp/TYPO3RsaEncryptionPublicKeyUrl.js';

            if (!file_exists(PATH_site . $filePath)) {
                // writeFileToTypo3tempDir() returns NULL on success.
                $error = GeneralUtility::writeFileToTypo3tempDir(PATH_site . $filePath, $code);
                if ($error !== null) {
                    throw new \RuntimeException('RsaEncryptionPublicKeyUrl JS file could not be written to ' . $filePath . '. Reason: ' . $error, 1295193026);
                }
            }
            $pageRenderer->addJsFile($filePath, 'text/javascript', true, true, '', true);
            $javascriptPath = ExtensionManagementUtility::siteRelPath('rsaauth') . 'Resources/Public/JavaScript/';
            if (!$GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['debug']) {
                $files = ['RsaEncryptionWithLib.min.js'];
            } else {
                $files = [
                    'RsaLibrary.js',
                    'RsaEncryption.js',
                ];
            }
            foreach ($files as $file) {
                $pageRenderer->addJsFile($javascriptPath . $file);
            }
        }
    }
}