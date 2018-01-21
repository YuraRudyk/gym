<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Site package',
    'description'      => 'An extension which contains general settings and templates of configuration',
    'category'         => 'distribution',
    'shy'              => 0,
    'version'          => '2.0.6',
    'state'            => 'stable',
    'uploadfolder'     => 0,
    'clearCacheOnLoad' => 1,
    'author'           => 'Andrii Valkiv',
    'author_company'   => '711media websolutions GmbH',
    'constraints'      => [
        'depends' => [
            'typo3'   => '',
            'extbase' => '',
            'fluid'   => '',
        ],
    ]
];
