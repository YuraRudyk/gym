<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


/**
 * Include TypoScript
 */
ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/7.6/', 'Slick [1] (based on css_styled_content)' );
//ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Default', 'Slick [1] (based on fluid_styled_content)' );
//ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Base', 'Slick [1] Base' );
//ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Carousel', 'Slick [2] Carousel' );
//ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/Item', 'Slick [3] Carousel Item' );
//ExtensionManagementUtility::addStaticFile( $_EXTKEY, 'Configuration/TypoScript/RemoveLLATag', 'Slick [9] +Optimise Localisation' );


/**
 * Register Plugins
 */
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel 1',
  'slickcarousel'
        ), 'CType'
);
// #i0018, 17-03-02, dwildt, 6+
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel 2',
  'slickcarousel2'
        ), 'CType'
);
// #i0018, 17-03-02, dwildt, 6+
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel 3',
  'slickcarousel3'
        ), 'CType'
);
ExtensionManagementUtility::addPlugin(
        array(
  'Slick: Carousel Item',
  'slickitem'
        ), 'CType'
);


/**
 * Page tree icons
 */

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

$extIcon = array(
		'identifier' => 'app-slick'
		, 'key' => 'slick' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Slick'
		, 'source' => 'EXT:slick/ext_icon.svg'
);
$iconRegistry->registerIcon(
				$extIcon[ 'identifier' ]
				, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
				, [ 'source' => $extIcon[ 'source' ] ]
);
$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
		$extIcon[ 'label' ]
		, $extIcon[ 'key' ]
		, $extIcon[ 'identifier' ]
);
$TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];

/**
 * Page TSConfig
 */
require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/7.6/TSconfig/index.php' );