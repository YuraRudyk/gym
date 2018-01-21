<?php

if (!defined('TYPO3_MODE')) die('Access denied.');

$ll = 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:micro_banner_item';

return [
    'ctrl' => [
        'title'                    => $ll,
        'label'                    => 'title',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS'             => true,
        'origUid'                  => 't3_origuid',
        'dividers2tabs'            => true,
        'hideTable'                => true,
        'thumbnail'                => 'image',
        'delete'                   => 'deleted',
        'enablecolumns'            => [
            'disabled' => 'hidden',
        ],
        'iconfile'  => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('sem_ox_content')
            . 'Resources/Public/Icons/MicroBanners.svg',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,title,image,bodytext,'
    ],
    'columns' => [
        'sys_language_uid' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                ]
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => [
                'type'       => 'select',
                'renderType' => 'selectSingle',
                'items'      => [
                    ['', 0],
                ],
                'foreign_table'       => 'tx_semoxcontent_domain_model_microbanner_item',
                'foreign_table_where' => 'AND tx_semoxcontent_domain_model_microbanner_item.pid=###CURRENT_PID### '
                    . ' AND tx_semoxcontent_domain_model_microbanner_item.sys_language_uid IN (-1,0)',
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'cruser_id' => [
            'label'  => 'cruser_id',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'pid' => [
            'label'  => 'pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'crdate' => [
            'label'  => 'crdate',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'tstamp' => [
            'label'  => 'tstamp',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'starttime' => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
            'config'    => [
                'type'    => 'input',
                'size'    => 16,
                'max'     => 20,
                'eval'    => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
            'config'    => [
                'type'    => 'input',
                'size'    => 16,
                'max'     => 20,
                'eval'    => 'datetime',
                'default' => 0,
            ]
        ],
        'fe_group' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
            'config'  => [
                'type'       => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size'       => 5,
                'maxitems'   => 20,
                'items'      => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
                        -1,
                    ],
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
                        -2,
                    ],
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
                        '--div--',
                    ],
                ],
                'exclusiveKeys'       => '-1,-2',
                'foreign_table'       => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
            ],
        ],
        'hidden' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type'    => 'check',
                'default' => 0
            ]
        ],
        'title' => [
            'label'  => $ll . '.title',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,required',
                'max'  => 255
            ]
        ],
        'bodytext' => [
            'label'  => $ll . '.bodytext',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 6
            ],
            'defaultExtras' => 'richtext[]'
        ],
        'background' => [
            'label'  => $ll . '.background_color',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['OX Blues',            '--div--'],
                    ['OX dark blue',        'bg-dark-blue'],
                    ['OX blue',             'bg-blue'],
                    ['OX medium blue',      'bg-medium-blue'],
                    ['OX light blue',       'bg-light-blue'],
                    ['OX highlight colors', '--div--'],
                    ['OX white',            'bg-white'],
                    ['OX ice blue',         'bg-ice-blue'],
                    ['OX lime green',       'bg-lime-green'],
                    ['OX raspberry red',    'bg-red-raspberry'],
                    ['OX mandarin',         'bg-mandarin'],
                    ['OX mango',            'bg-mango'],
                    ['OX greys',            '--div--'],
                    ['OX silver grey',      'bg-silver-grey'],
                    ['OX grey',             'bg-grey'],
                    ['OX graphite black',   'bg-graphite-black']
                ]
            ]
        ],
        'image' => [
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => $ll . '.image',
            'config'  => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' =>
                            'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                        ],
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'banner' => [
            'label'  => 'Banner',
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],
    'palettes' => [
        'basic' => [
            'showitem' => ' hidden, sys_language_uid, l10n_parent, l10n_diffsource'
        ],
        'customTitle' => [
            'showitem' => 'title, background'
        ]
    ],
    'types' => [
        [
            'showitem' => '--palette--;;basic, image, --palette--;;customTitle, bodytext,'
        ]
    ]
];