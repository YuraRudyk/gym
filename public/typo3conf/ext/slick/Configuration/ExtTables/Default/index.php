<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}


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

$extIcon = array(
		'identifier' => 'app-slick-deprecated'
		, 'key' => 'slick-deprecated' // <- Key must be the part behind contain- of the identifier!
		, 'label' => 'Slick'
		, 'source' => 'EXT:slick/ext_icon-deprecated.svg'
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
require( PATH_typo3conf . 'ext/slick/Configuration/ExtTables/Default/TSconfig/index.php' );
