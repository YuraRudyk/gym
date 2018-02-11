<?php

if (!defined('TYPO3_MODE')) {
    exit('Access denied.');
}

$ll = 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:general/Configuration/TsConfig/Page/" extensions="ts">'
);

############################## Add PageTS config ##############################


