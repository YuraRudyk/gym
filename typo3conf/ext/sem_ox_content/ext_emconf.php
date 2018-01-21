<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Open-Xchange package',
    'description'      => 'An extension which contains custom settings and templates of configuration',
    'category'         => 'distribution',
    'shy'              => 0,
    'version'          => '1.0.0',
    'state'            => 'beta',
    'uploadfolder'     => 0,
    'clearCacheOnLoad' => 1,
    'author'           => 'Dmytro Doronenko',
    'author_company'   => '711media websolutions GmbH',
    'constraints'      => [
        'depends' => [
            'typo3'           => '7.0.0-7.6.99',
            'extbase'         => '7.0.0-8.9.99',
            'fluid'           => '7.0.0-8.9.99',
            'sem_content'     => ''
        ],
        'suggests' => [
            'vhs'        => '2.4.0-3.9.99',
            'cw_twitter' => '1.2.0',
            'felogin'    => '7.6.0-7.9.9',
            'rsaauth'    => '7.6.0-7.9.9',
            'captcha'    => ''
        ],
    ]
];