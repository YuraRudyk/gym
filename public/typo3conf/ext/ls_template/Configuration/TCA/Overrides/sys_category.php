<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['sys_category']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['sys_category']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_lstemplate_sys_category = [];
    $tempColumnstx_lstemplate_sys_category[$GLOBALS['TCA']['sys_category']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:ls_template/Resources/Private/Language/locallang_db.xlf:tx_lstemplate.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['',''],
                ['Category','Tx_LsTemplate_Category']
            ],
            'default' => 'Tx_LsTemplate_Category',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $tempColumnstx_lstemplate_sys_category);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_category',
    $GLOBALS['TCA']['sys_category']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['sys_category']['ctrl']['label']
);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['sys_category']['types']['1']['showitem'])) {
    $GLOBALS['TCA']['sys_category']['types']['Tx_LsTemplate_Category']['showitem'] = $GLOBALS['TCA']['sys_category']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['sys_category']['types'])) {
    // use first entry in types array
    $sys_category_type_definition = reset($GLOBALS['TCA']['sys_category']['types']);
    $GLOBALS['TCA']['sys_category']['types']['Tx_LsTemplate_Category']['showitem'] = $sys_category_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['sys_category']['types']['Tx_LsTemplate_Category']['showitem'] = '';
}
$GLOBALS['TCA']['sys_category']['types']['Tx_LsTemplate_Category']['showitem'] .= ',--div--;LLL:EXT:ls_template/Resources/Private/Language/locallang_db.xlf:tx_lstemplate_domain_model_category,';
$GLOBALS['TCA']['sys_category']['types']['Tx_LsTemplate_Category']['showitem'] .= '';

$GLOBALS['TCA']['sys_category']['columns'][$GLOBALS['TCA']['sys_category']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:ls_template/Resources/Private/Language/locallang_db.xlf:sys_category.tx_extbase_type.Tx_LsTemplate_Category','Tx_LsTemplate_Category'];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    '',
    'EXT:/Resources/Private/Language/locallang_csh_.xlf'
);
