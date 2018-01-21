<?php

if (!defined('TYPO3_MODE')) {
    exit('Access denied.');
}

############################## Add static TypoScript configuration for sitepackage ##############################

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Sport-Legion Content Package'
);
