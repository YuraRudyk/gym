<?php

if (!defined('TYPO3_MODE')) {
    exit('Access denied.');
}

############################## Add static TypoScript configuration for sitepackage ##############################

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Open-Xchange Content Package'
);

// Allow tables on page records
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_semoxcontent_domain_model_teaser_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_semoxcontent_domain_model_microbanner_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_oxcontent_domain_model_accordion_item');
