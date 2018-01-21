<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Legion Sport package',
    'description'      => 'An extension which contains custom settings and templates of configuration',
    'category'         => 'distribution',
    'shy'              => 0,
    'version'          => '1.0.0',
    'state'            => 'beta',
    'uploadfolder'     => 0,
    'clearCacheOnLoad' => 1,
    'author'           => 'Rudyk Yura',
    'author_company'   => '',
    'constraints'      => [
        'depends' => [
            'typo3'           => '8.0.0-8.9.99',
            'extbase'         => '7.0.0-8.9.99',
            'fluid'           => '7.0.0-8.9.99'
        ],
        'suggests' => [
            'vhs'        => '2.4.0-3.9.99'
        ],
    ]
];