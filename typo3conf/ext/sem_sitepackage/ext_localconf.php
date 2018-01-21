<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// ====================================================
// Add UserTS config
// ====================================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:sem_sitepackage/Configuration/TsConfig/User/" extensions="ts">'
);

// ====================================================
// Register hook to save into special table data about
// 404 page handling
// ====================================================
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] =
    Media711\SemSitepackage\Hooks\DataHandler::class;