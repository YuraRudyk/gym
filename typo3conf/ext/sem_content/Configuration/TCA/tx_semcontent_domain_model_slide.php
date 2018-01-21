<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$ll = 'LLL:EXT:sem_content/Resources/Private/Language/locallang_be.xlf:';

return [
    'ctrl' => [
        'title'                    => $ll . 'tx_semcontent_slide',
        'label'                    => 'header',
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
        'editlock'                 => 'editlock',
        'delete'                   => 'deleted',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
            'fe_group'  => 'fe_group'
        ],
        'iconfile' => 'EXT:sem_content/Resources/Public/Icons/Standard.svg',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,header,subheader,bodytext,link_text,link,image'
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
                'foreign_table'       => 'tx_semcontent_domain_model_slide',
                'foreign_table_where' => 'AND tx_semcontent_domain_model_slide.pid=###CURRENT_PID### '
                    . ' AND tx_semcontent_domain_model_slide.sys_language_uid IN (-1,0)',
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
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
            'config'    => [
                'type'       => 'input',
                'renderType' => 'inputDateTime',
                'size'       => 13,
                'eval'       => 'datetime',
                'default'    => 0,
            ]
        ],
        'endtime' => [
            'exclude'   => 1,
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
            'config'    => [
                'type'       => 'input',
                'renderType' => 'inputDateTime',
                'size'       => 13,
                'eval'       => 'datetime',
                'default'    => 0,
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
        'image' => [
            'label'  => $ll . 'tx_semcontent_slide.fields.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' =>
                            'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                    ],
                    'foreign_types' => $GLOBALS['TCA']['tt_content']['columns']['image']['config']['foreign_types'],
                    'maxitems'      => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'header' => [
            'label'  => $ll . 'tx_semcontent_slide.fields.header',
            'config' => [
                'type' => 'input',
                'eval' => 'trim,required',
                'max'  => 255
            ]
        ],
        'subheader' => [
            'label'  => $ll . 'tx_semcontent_slide.fields.subheader',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'max'  => 255
            ]
        ],
        'bodytext' => [
            'label'  => $ll . 'tx_semcontent_slide.fields.bodytext',
            'config' => [
                'type'           => 'text',
                'cols'           => 80,
                'rows'           => 15,
                'eval'           => 'trim',
                'softref'        => 'typolink_tag,images,email[subst],url',
                'enableRichtext' => true
            ]
        ],
        'link_text' => [
            'label'  => $ll . 'tx_semcontent_slide.fields.link_text',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'max'  => 100
            ]
        ],
        'link' => [
            'label'  => $ll . 'tx_semcontent_slide.fields.link',
            'config' => [
                'type'    => 'input',
                'max'     => 255,
                'eval'    => 'trim',
                'wizards' => [
                    'link' => [
                        'type'   => 'popup',
                        'title'  => 'EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        'icon'   => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                        'module' => [
                            'name'          => 'wizard_link',
                            'urlParameters' => [
                                'mode' => 'wizard'
                            ]
                        ],
                        'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                    ]
                ],
                'softref' => 'typolink'
            ]
        ],
        'slider' => [
            'label'  => $ll . 'tx_semcontent_slide.fields.slider',
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],
    'palettes' => [
        'subheader' => [
            'showitem' => 'subheader, --linebreak--, hidden, sys_language_uid, l10n_parent, l10n_diffsource'
        ],
        'link'  => ['showitem' => 'link, link_text'],
        'image' => ['showitem' => 'image']
    ],
    'types' => [
        [
            'showitem' => 'header, --palette--;;subheader, bodytext, --palette--;;link, --palette--;;image'
        ]
    ]
];