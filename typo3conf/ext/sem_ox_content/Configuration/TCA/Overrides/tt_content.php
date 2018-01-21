<?php

$columns = [
    'tx_semoxcontent_assets_folder' => [
        'label'  => 'Folder',
        'config' => [
            'type'          => 'select',
            'renderType'    => 'selectSingle',
            'items'         => [],
            'itemsProcFunc' => Media711\SemOxContent\Service\FolderService::class . '->getFolderOptions',
        ]
    ],
    'tx_semoxcontent_teaser' => [
        'label'  => 'Teaser Items',
        'config' => [
            'type'           => 'inline',
            'foreign_table'  => 'tx_semoxcontent_domain_model_teaser_item',
            'foreign_field'  => 'teaser',
            'foreign_sortby' => 'sorting',
            'appearance'     => [
                'useSortable'     => true,
                'enabledControls' => [
                    'dragdrop' => true,
                    'sort'     => true,
                    'hide'     => true,
                    'delete'   => true,
                    'localize' => true,
                ]
            ]
        ],
    ],
    'tx_semoxcontent_slider_speed' => [
        'label'  => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:customSlider.speed',
        'config' => [
            'type'    => 'input',
            'size'    => 4,
            'default' => 6000,
            'eval'    => 'num'
        ]
    ],
    'tx_semoxcontent_section_frame' => [
        'l10n_mode' => 'exclude',
        'label'     => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:section_frame',
        'config'    => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'items'      => [
                ['None',  ''],
                ['Indent Both',  'indent-left-right'],
                ['Block Centering', 'text-center'],

            ]
        ]
    ],
    'tx_semoxcontent_banner' => [
        'label'  => 'Micro Banner Items',
        'config' => [
            'type'           => 'inline',
            'foreign_table'  => 'tx_semoxcontent_domain_model_microbanner_item',
            'foreign_field'  => 'banner',
            'foreign_sortby' => 'sorting',
            'maxitems'       => 4,
            'appearance'     => [
                'collapseAll'     => 1,
                'useSortable'     => true,
                'enabledControls' => [
                    'dragdrop' => true,
                    'sort'     => true,
                    'hide'     => true,
                    'delete'   => true,
                    'localize' => true,
                ]
            ]
        ],
    ],
    'tx_semoxcontent_slider_layout' => [
        'label'     => 'Layout',
        'config'    => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'default'    => 'home-slider',
            'items'      => [
                ['Banner',       'home-slider'],
                ['Testimonials', 'testimonials'],
                ['Image Slider', 'image-slider'],
                ['Text Slider',  'text-slider'],
            ]
        ]
    ],
    'tx_semoxcontent_text' => [
        'label'  => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:background_video.text',
        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]',
        'config' => [
            'type' => 'text'
        ]
    ],
    'tx_semoxcontent_autoplay' => [
        'label'   => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:background_video.autoplay',
        'exclude' => 0,
        'config'  => [
            'type'    => 'check',
            'default' => '0'
        ]
    ],
    'tx_semoxcontent_height' => [
        'label'     => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:background_video.height',
        'config'    => [
            'type'       => 'select',
            'renderType' => 'selectSingle',
            'default'    => '500',
            'items'      => [
                ['300 px', '300'],
                ['500 px', '500'],
                ['Full Screen', 'full'],
            ]
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $columns);

/** Override header for plugins */
$GLOBALS['TCA']['tt_content']['types']['list']['columnsOverrides'] = [
    'header' => [
        'defaultExtras' => 'richtext[]',
        'config'        => [
            'type' => 'text',
            'eval' => 'trim',
            'cols' => 20,
            'rows' => 2
        ]
    ]
];

/** Override header for plugins */
$GLOBALS['TCA']['tt_content']['types']['semoxcontent_background_video'] = [
    'columnsOverrides' => [
        'image' => [
            'label' => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_tca.xlf:tx_oxcontent.alternative_image',
        ],
        'assets' => [
            'label'  => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_tca.xlf:tx_oxcontent.video',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('assets', [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_tca.xlf:tx_oxcontent.add_media_file'
                ],
                'foreign_types' => $GLOBALS['TCA']['tt_content']['columns']['image']['config']['foreign_types']
            ], 'mp4,webm,youtube,vimeo')
        ],
    ],
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        tx_semoxcontent_text,
        pi_flexform,
        --palette--;;video_background_text,
        assets, image,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];

$GLOBALS['TCA']['tt_content']['palettes']['video_background_text'] =  [
    'showitem' => 'tx_semoxcontent_autoplay, tx_semoxcontent_height'
];


/** Add videos CType definition */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:videos',
        'semoxcontent_videos',
        'EXT:sem_ox_content/Resources/Public/Icons/Videos.svg'
    ],
    'CType',
    'sem_ox_content'
);

/** Add product teaser CType definition */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:product_teaser',
        'semoxcontent_product_teaser',
        'EXT:sem_ox_content/Resources/Public/Icons/Standard.svg'
    ],
    'CType',
    'sem_ox_content'
);

/** Add custom slider CType definition */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:customSlider.label',
        'semoxcontent_custom_slider',
        'EXT:sem_ox_content/Resources/Public/Icons/CustomSlider.svg'
    ],
    'CType',
    'sem_ox_content'
);

/** Add custom sponsors CType definition */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:sponsors.label',
        'semoxcontent_sponsors',
        'EXT:sem_ox_content/Resources/Public/Icons/Sponsors.svg'
    ],
    'CType',
    'sem_ox_content'
);

/** Add micro banners CType definition */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:micro_banner.label',
        'semoxcontent_micro_banners',
        'EXT:sem_ox_content/Resources/Public/Icons/MicroBanners.svg'
    ],
    'CType',
    'sem_ox_content'
);
/** Add mood image CType definition */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:mood_image.label',
        'semoxcontent_mood_image',
        'EXT:sem_ox_content/Resources/Public/Icons/MoodImage.svg'
    ],
    'CType',
    'sem_ox_content'
);
/** Add mood image CType definition */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:background_video',
        'semoxcontent_background_video',
        'EXT:sem_ox_content/Resources/Public/Icons/BackgroundVideo.svg'
    ],
    'CType',
    'sem_ox_content'
);


/** Define TCA of "videos" CType */
$GLOBALS['TCA']['tt_content']['types']['semoxcontent_videos'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,
            assets, tx_semoxcontent_assets_folder,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
         layout, pi_flexform,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];

/** CType product teaser definition */
$GLOBALS['TCA']['tt_content']['types']['semoxcontent_product_teaser'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,
            tx_semoxcontent_teaser,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];

/** CType custom slider definition */
$GLOBALS['TCA']['tt_content']['types']['semoxcontent_custom_slider'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,
            assets, tx_semoxcontent_slider_speed, pi_flexform,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];


/** CType product teaser definition */
$GLOBALS['TCA']['tt_content']['types']['semoxcontent_micro_banners'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;header,
            tx_semoxcontent_banner,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];

/** CType mood image teaser definition */
$GLOBALS['TCA']['tt_content']['types']['semoxcontent_mood_image'] = [
    'columnsOverrides' => [
        'image' => [
            'config' => [
                'maxitems' => 1
            ]
        ]
    ],
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
       header,image,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];


/** CType custom sponsors definition */
$GLOBALS['TCA']['tt_content']['types']['semoxcontent_sponsors'] = [
    'columnsOverrides' => [
        'header' => [
            'defaultExtras' => 'richtext[]',
            'config'        => [
                'type' => 'text',
                'eval' => 'trim',
                'cols' => 20,
                'rows' => 2
            ]
        ],
        'image' => [
            'label' => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:sponsors.gold'
        ],
        'assets' => [
            'label' => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang.xlf:sponsors.other',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'assets', [
            ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'])
        ]
    ],
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
        header,image, assets,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];

// override videoOverlayPalette palette with link field
$GLOBALS['TCA']['sys_file_reference']['palettes']['videoOverlayPalette']['showitem'] =
    'title,description,--linebreak--,link, autoplay';

/** CType custom header definition */
$GLOBALS['TCA']['tt_content']['palettes']['customHeaders'] = [
    'showitem' => '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
        --linebreak--,
        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
        layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
        date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
        --linebreak--,
        header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
        --linebreak--,
        subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel',
];

$GLOBALS['TCA']['tt_content']['types']['header'] = [
    'showitem' => '
      	--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;customHeaders,rowDescription,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
     --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
        tx_gridelements_columns'
];

/** Add custom general palettes */
$GLOBALS['TCA']['tt_content']['palettes']['standardSliderGeneral']= [
    'showitem' => 'CType, tx_semoxcontent_slider_layout, colPos, sys_language_uid, --linebreak--, l18n_parent,',
];

/** Rewrite slider TCA */
$GLOBALS['TCA']['tt_content']['types']['tx_semcontent_slider'] = [
    'columnsOverrides' => [
        'tx_semcontent_linktext' => [
            'label' => 'Buttons text'
        ]
    ],
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;standardSliderGeneral,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;slider_header,
        pi_flexform,
        --palette--;Slider;slider,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
        hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
      --div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,
      --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,
          tx_gridelements_columns'
];


/** Added tx_semoxcontent_section_frame field to appearance tab */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'appearanceLinks',
    'tx_semoxcontent_section_frame',
    'sectionIndex'
);

/** Appended layout field */
$GLOBALS['TCA']['tt_content']['columns']['assets']['config']['foreign_types'][\TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN]['showitem'] =
    $GLOBALS['TCA']['tt_content']['columns']['assets']['config']['foreign_types'][\TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN]['showitem'] . ', layout';

$GLOBALS['TCA']['tt_content']['columns']['assets']['config']['foreign_types'][\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE]['showitem'] =
    $GLOBALS['TCA']['tt_content']['columns']['assets']['config']['foreign_types'][\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE]['showitem'] . ', layout';

$GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] .= ',tx_semoxcontent_slider_layout';

/** Appended flexform fields */
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',tx_semcontent_slider']          = 'FILE:EXT:sem_ox_content/Configuration/FlexForms/slider_pi1.xml';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',semoxcontent_custom_slider']    = 'FILE:EXT:sem_ox_content/Configuration/FlexForms/video_information_pi1.xml';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',semoxcontent_videos']           = 'FILE:EXT:sem_ox_content/Configuration/FlexForms/video_information_pi1.xml';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',semoxcontent_background_video'] = 'FILE:EXT:sem_ox_content/Configuration/FlexForms/video_background_pi1.xml';

