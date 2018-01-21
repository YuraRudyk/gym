<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// ====================================================
// Add PageTS config
// ====================================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:sem_content/Configuration/TsConfig/Page/" extensions="ts">'
);


// ====================================================
// Add UserTS config
// ====================================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:sem_content/Configuration/TsConfig/User/" extensions="ts">'
);


// ====================================================
// Register CKEditor configurations
// ====================================================

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:sem_content/Configuration/RTE/Default.yaml';


// ====================================================
// Register hook to show preview of tt_content
// element of CType="semcontent_slider" in page module
// based on it's type
// ====================================================

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['semcontent_slider'] =
    \Media711\SemContent\Hooks\PageLayoutView\SliderPreviewRenderer::class;
