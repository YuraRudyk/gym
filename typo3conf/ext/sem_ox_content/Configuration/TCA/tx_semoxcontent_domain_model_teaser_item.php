<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$ll = 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:teaser_item';

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
            . 'Resources/Public/Icons/Standard.svg',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,title,subtitle,link_text,link,image'
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
                'foreign_table'       => 'tx_semoxcontent_domain_model_teaser_item',
                'foreign_table_where' => 'AND tx_semoxcontent_domain_model_teaser_item.pid=###CURRENT_PID### '
                    . ' AND tx_semoxcontent_domain_model_teaser_item.sys_language_uid IN (-1,0)',
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
        'subtitle' => [
            'label'  => $ll . '.subtitle',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'max'  => 255
            ]
        ],
        'image' => [
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => $ll . '.image',
            'config'    => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                        'headerThumbnail'            => [
                            'field'  => 'uid_local',
                            'width'  => '45',
                            'height' => '45c',
                        ],
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '--palette--;;filePalette'
                        ],
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'link_text' => [
            'label'  => $ll . '.link_text',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ]
        ],
        'link' => [
            'label'  => $ll . '.link',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'wizards' => [
                    'link' => [
                        'type'  => 'popup',
                        'title' => 'EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        'icon'  => 'link_popup.gif',
                        'module' => [
                            'name' => 'wizard_link',
                            'urlParameters' => [
                                'mode' => 'wizard'
                            ]
                        ],
                        'JSopenParams' => 'height=700,width=500,status=0,menubar=0,scrollbars=1'
                    ]
                ],
                'softref' => 'typolink'
            ]
        ],
        'teaser' => [
            'label'  => 'Teaser',
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],
    'palettes' => [
        'subtitle' => [
            'showitem' => 'subtitle, --linebreak--, hidden, sys_language_uid, l10n_parent, l10n_diffsource'
        ],
        'link' => [
            'showitem' => 'link, link_text'
        ],
        'image' => [
            'showitem' => 'image'
        ]
    ],
    'types' => [
        [
            'showitem' => 'title;;subtitle, --palette--;;image, --palette--;;link'
        ]
    ]
];