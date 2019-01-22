<?php

/**
 * slickcontent
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'slickcontent' ] = 'app-slick';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcontent' ][ 'showitem' ] = ''
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '  records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.slider,'
				. '  pi_flexform;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.pi_flexform,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,'
				. '  --palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,'
				. '  --palette--;;language,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,'
				. '  --palette--;;hidden,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,'
				. '--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,'
				. '  categories,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,'
				. '  rowDescription,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
				. ''
;

$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ ',slickcontent' ] = 'FILE:EXT:slick/Configuration/FlexForms/Default/Slickcontent/flexform.xml';

/**
 * slickimage
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'ctrl' ][ 'typeicon_classes' ][ 'slickimage' ] = 'app-slick';
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickimage' ][ 'showitem' ] = ''
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,'
				. '  image,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,'
				. '--div--;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.div.slider,'
				. '  pi_flexform;LLL:EXT:slick/Resources/Private/Language/Backend.xlf:tca.tt_content.pi_flexform,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,'
				. '  --palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,'
				. '  --palette--;;language,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,'
				. '  --palette--;;hidden,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,'
				. '--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,'
				. '  categories,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,'
				. '  rowDescription,'
				. '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
				. ''
;
$x = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,'
				. '  --palette--;LLL:EXT:start/Configuration/TCA/Overrides/Default/tt_content.xlf:tx_start_palettecss;tx_start_palettecss,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,'
				. '  image,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,'
				. '  --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,'
				. '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--palette--;LLL:EXT:t3foundation/Resources/Private/Language/locallang_db.xlf:tt_content.tx_t3foundation_visibility;tx_t3foundation_visibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns'
;
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'pi_flexform' ][ 'config' ][ 'ds' ][ ',slickimage' ] = 'FILE:EXT:slick/Configuration/FlexForms/Default/Slickcontent/flexform.xml';

// #i0024, 171205, -
// 
///**
// * slickitem
// */
//$cmsLL = 'frontend/Resources/Private/Language/locallang_ttc.xlf';
//$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'showitem' ] = ''
//				. '  --palette--;LLL:EXT:' . $cmsLL . ':palette.general;general,'
//				. '    hidden,'
//				. '    header,'
//				. '    header_link,'
//				. '    bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],'
//				. '    rte_enabled;LLL:EXT:' . $cmsLL . ':rte_enabled_formlabel,'
//				. '--div--;LLL:EXT:' . $cmsLL . ':tabs.images,'
//				. '	 --palette--;LLL:EXT:' . $cmsLL . ':palette.image_settings;slickgallery,'
//				. '	 image,'
//;

/**
 * slickitem
 */
$cmsLL = 'frontend/Resources/Private/Language/locallang_ttc.xlf';
// #i0024, 171205, 4+
$GLOBALS[ 'TCA' ][ 'tt_content' ]['types']['slickitem']['columnsOverrides']['bodytext']['config'] = array(
		'enableRichtext' => '1',
		'richtextConfiguration' => 'default',
);
// #i0024, 171205, +
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickitem' ][ 'showitem' ] = ''
				. '  --palette--;LLL:EXT:' . $cmsLL . ':palette.general;general,'
				. '    hidden,'
				. '    header,'
				. '    header_link,'
				. '    bodytext,'
				. '    rte_enabled;LLL:EXT:' . $cmsLL . ':rte_enabled_formlabel,'
				. '--div--;LLL:EXT:' . $cmsLL . ':tabs.images,'
				. '	 --palette--;LLL:EXT:' . $cmsLL . ':palette.image_settings;slickgallery,'
				. '	 image,'
;

/**
 * DEPRECATED
 */
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel2' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickcarousel3' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'shortcut' ][ 'showitem' ];

// #i0022
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];
// #i0018, 17-03-02, dwildt, 2+
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery2' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];
$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'slickgallery3' ][ 'showitem' ] = $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'types' ][ 'image' ][ 'showitem' ];

