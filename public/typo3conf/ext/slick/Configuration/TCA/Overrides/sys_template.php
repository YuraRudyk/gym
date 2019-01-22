<?php


/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

// #t1683, 171012, ~
list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$typo3Version = ( ( int ) $main ) * 1000000;
$typo3Version = $typo3Version + ( ( int ) $sub ) * 1000;
$typo3Version = $typo3Version + ( ( int ) $bugfix ) * 1;

switch( TRUE )
{
	case($typo3Version < 7006000):
	case($typo3Version < 8007000):
		//require( PATH_typo3conf . 'ext/slick/Configuration/TCA/Overrides/7.6/sys_template.php' );
		break;
	case($typo3Version >= 8007000):
	default:
		require( PATH_typo3conf . 'ext/slick/Configuration/TCA/Overrides/Default/sys_template.php' );
		break;
}
