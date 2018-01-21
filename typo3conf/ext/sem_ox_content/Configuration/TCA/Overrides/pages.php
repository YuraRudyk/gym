<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


// Extend pages table for no_index fields.
$temporaryColumns = [
    'no_index' => [
        'label'   => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:pages.fields.noIndex',
        'exclude' => 0,
        'config'  => [
            'type'  => 'check',
            'items' => [
                [
                    'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:pages.no_index_checkbox_1_formlabel', 
                    1, 
                ]
            ]
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $temporaryColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'miscellaneous',
    'no_index',
    'after:no_search'
);

unset($temporaryColumns);
