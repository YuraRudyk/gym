<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


// ============================================
// Allow tables on page records
// ============================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_semcontent_domain_model_slide');


// ============================================
// Register slider content element
// ============================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_content/Resources/Private/Language/locallang_be.xlf:tt_content.CType.semcontent_slider',
        'semcontent_slider',
        'EXT:sem_content/Resources/Public/Icons/Slider.svg'
    ],
    'CType'
);


// ============================================
// Replace layout field with layout palette
// of registered CTypes.
// ============================================

foreach (['bullets', 'header', 'list', 'menu', 'login', 'shortcut', 'table', 'uploads'] as $cType) {
    $GLOBALS['TCA']['tt_content']['types'][$cType]['showitem'] = str_replace(
        '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
          . 'layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel',
        '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;;layout',
        $GLOBALS['TCA']['tt_content']['types'][$cType]['showitem']
    );
}


// ============================================
// Register icons
// ============================================

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon('semcontent-slider', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, [
    'source' => 'EXT:sem_content/Resources/Public/Icons/Slider.svg'
]);


// ============================================
// Override icon of gridelements plugin
// ============================================

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('gridelements')) {
    foreach ($GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'] as $key => $config) {
        if ($config[1] == 'gridelements_pi1') {
            $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][$key][2] = 'EXT:gridelements/ext_icon.svg';
            break;
        }
    }
}
