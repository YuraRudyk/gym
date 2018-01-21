<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$ll = 'LLL:EXT:sem_content/Resources/Private/Language/locallang_be.xlf:';

// ============================================
// Columns Definition
// ============================================

$columns = [
    'tx_semcontent_slides' => [
        'label'  => $ll . 'tt_content.fields.slides',
        'config' => [
            'type'           => 'inline',
            'foreign_table'  => 'tx_semcontent_domain_model_slide',
            'foreign_field'  => 'slider',
            'foreign_sortby' => 'sorting',
            'appearance'     => [
                'createNewRelationLinkTitle' => $ll . 'tt_content.fields.slides.addSlideReference',
                'useSortable'                => true,
                'enableControls'             => [
                    'dragdrop' => true,
                    'sort'     => false,
                    'hide'     => true,
                    'delete'   => true,
                    'localize' => false
                ],
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords'  => false,
                'showSynchronizationLink'         => false,
                'showAllLocalizationLink'         => false,
            ],
            'behaviour' => [
                'enableCascadingDelete'                => true,
                'allowLanguageSynchronization'         => true,
                'localizeChildrenAtParentLocalization' => true,
            ]
        ]
    ],
    'tx_semcontent_background_color' => [
        'label'     => $ll . 'tt_content.fields.background_color',
        'config'    => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'items'      => [
                [$ll . 'tt_content.fields.background_color.0', '0'],
            ]
        ]
    ],
    'tx_semcontent_background_img' => [
        'label'  => $ll . 'tt_content.fields.background_image',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'tx_semcontent_background_img',
            [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                ],
                'foreign_types' => [
                    'aForeignType' => [
                      'showitem' => 'aChildField',
                    ],
                ],
            ],
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        )
    ],
    'tx_semcontent_link' => [
        'label'     => $ll . 'tt_content.fields.link',
        'config'    => [
            'type'    => 'input',
            'eval'    => 'trim',
            'wizards' => [
                'link' => [
                    'type'   => 'popup',
                    'title'  => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                    'icon'   => 'actions-wizard-link',
                    'module' => [
                        'name' => 'wizard_link',
                    ],
                    'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                ]
            ],
            'softref'    => 'typolink',
            'renderType' => 'inputLink'
        ]
    ],
    'tx_semcontent_linktext' => [
        'label'  => $ll . 'tt_content.fields.link_text',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $columns);


// ============================================
// Add layout palette, which contains all
// the fields which may modify layout of
// content object
// ============================================

$GLOBALS['TCA']['tt_content']['palettes']['layout'] = [
    'showitem' => 'layout, tx_semcontent_background_color, --linebreak--, tx_semcontent_background_img'
];


// ============================================
// Textmedia CType definition
// ============================================

$GLOBALS['TCA']['tt_content']['types']['textmedia']['showitem'] = '
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,subheader,
        bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;layout,
        --palette--;LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,
        --palette--;LLL:EXT:fluid_styled_content/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
    --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
    --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns';


// ============================================
// Slider CType definition
// ============================================

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['semcontent_slider'] = 'semcontent-slider';
$GLOBALS['TCA']['tt_content']['palettes']['slider_header'] = [
    'showitem' => 'header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel, --linebreak--,'
];

// Slider palette
$GLOBALS['TCA']['tt_content']['palettes']['slider'] = [
    'showitem' => 'tx_semcontent_background_color, --linebreak--, tx_semcontent_linktext, --linebreak--, tx_semcontent_slides'
];

// New type "Slider"
$GLOBALS['TCA']['tt_content']['types']['semcontent_slider'] = [
    'columnsOverrides' => [
        'header_layout'          => ['config'  => ['type' => 'passthrough', 'default' => 100,]], // Set header value to "hidden" on frontend
        'tx_semcontent_linktext' => ['label'   => $ll . 'tt_content.fields.button_text']
    ],
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;slider_header,
        --palette--;LLL:EXT:sem_content/Resources/Private/Language/locallang_be.xlf:palette.slider;slider,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,  
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
          tx_gridelements_columns'
];


// ============================================
// Override "gridelements_pi1" CType
// ============================================



if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('gridelements')) {
    // Override gridelements layout fields set
    $GLOBALS['TCA']['tt_content']['palettes']['gridelements_pi1_layout'] = [
        'showitem' => 'tx_gridelements_backend_layout, layout, tx_semcontent_background_color, --linebreak--,
                   tx_semcontent_background_img'
    ];

    // Override columns
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['columnsOverrides'] = [
        'header_layout' => ['config'  => ['type' => 'passthrough', 'default' => 100,]], // Set header value to "hidden" on frontend
        'date'          => ['config'  => ['type' => 'passthrough']],
        'header_link'   => ['config'  => ['type' => 'passthrough']],
        'pi_flexform'   => ['config'  => ['type' => 'passthrough']],
        'layout'        => ['label'   => $ll . 'tt_content.CType.gridelements.layout'],
    ];



    // Make a new view of "gridelements_pi1" CType
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'] = '
        --palette--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general;general,
        --palette--;;header,
        --palette--;;gridelements_pi1_layout,
        pi_flexform,
        tx_gridelements_children,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,
            categories,
        --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,
            tx_gridelements_container, tx_gridelements_columns
    ';
}
