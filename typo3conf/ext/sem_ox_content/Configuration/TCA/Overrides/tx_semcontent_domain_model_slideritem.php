<?php

if (!defined('TYPO3_MODE')) die('Access denied.');

$columns = [
    'author' => [
        'label'       => 'Author',
        'displayCond' => 'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:testimonials',
        'config'      => [
            'type' => 'input',
            'eval' => 'trim',
            'max'  => 100
        ]
    ],
    'posture' => [
        'label'       => 'Position',
        'displayCond' => 'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:testimonials',
        'config'      => [
            'type' => 'input',
            'eval' => 'trim',
            'max'  => 100
        ]
    ],
    'bodytext' => [
        'label'       => 'LLL:EXT:sem_ox_content/Resources/Private/Language/locallang_be.xlf:tx_semcontent_domain_model_slideritem.bodytext',
        'displayCond' => 'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:text-slider',
        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]',
        'config'        => [
            'type' => 'text',
            'eval' => 'trim',
            'cols' => 20,
            'rows' => 2
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_semcontent_domain_model_slideritem', $columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_semcontent_domain_model_slideritem',
    'author, posture, bodytext',
    '',
    'after:text'
);

/** Added displayCond for sliderItem columns */
$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['title']['displayCond'] =
    'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:home-slider';

$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['subtitle']['displayCond'] =
    'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:home-slider';

$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['link_label']['displayCond'] =
    'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:home-slider';

$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['link']['displayCond'] =
    'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:home-slider';

$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['image_pos']['displayCond'] =
    'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:home-slider';

$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['text']['displayCond'] =
    'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:home-slider:testimonials';

$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['image']['displayCond'] =
    'USER:Media711\\SemOxContent\\UserFunctions\\SliderDisplayCondition->checkInline:home-slider:testimonials:image-slider';

$GLOBALS['TCA']['tx_semcontent_domain_model_slideritem']['columns']['image_pos']['config']['default'] = 'left';