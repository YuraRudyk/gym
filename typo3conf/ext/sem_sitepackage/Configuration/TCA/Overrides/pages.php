<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$ll = 'LLL:EXT:sem_sitepackage/Resources/Private/Language/locallang_be.xlf:';

// ============================================
// Columns Definition
// ============================================

$columns = [
    'tx_semsitepackage_is_not_found' => [
        'exclude' => 1,
        'label'   => $ll . 'pages.fields.is_not_found',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ]
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'miscellaneous',
    'tx_semsitepackage_is_not_found',
    'after:is_siteroot'
);
