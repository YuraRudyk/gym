<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied');
}

$columns = [
    'layout' => [
        'label'  => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_be.xlf:sys_file_reference.layout',
        'config' => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'items'      => [
                ['LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_be.xlf:sys_file_reference.layout.0', 0]
            ]
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_file_reference', 'layout',
    \TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN . ',' . \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE
);