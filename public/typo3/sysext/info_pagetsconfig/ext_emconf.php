<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Web>Info, Page TSconfig',
    'description' => 'Displays the compiled Page TSconfig values relative to a page.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '8.7.16',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.2.99',
            'typo3' => '8.7.16',
            'info' => '8.7.16',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
