<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'Slick Slider',
		'--div--'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.header'
		, 'slickcontent'
		, 'app-slick'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content'
				, 'CType'
				, [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.header'
		, 'slickimage'
		, 'app-slick'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.item.header'
		, 'slickitem'
		, 'app-slick'
				]
);

/**
 * DEPRECTAED
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.1.header'
		, 'slickcarousel'
		, 'app-slick-deprecated'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.2.header'
		, 'slickcarousel2'
		, 'app-slick-deprecated'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.carousel.3.header'
		, 'slickcarousel3'
		, 'app-slick-deprecated'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.1.header'
		, 'slickgallery'
		, 'app-slick-deprecated'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.2.header'
		, 'slickgallery2'
		, 'app-slick-deprecated'
				]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
				'tt_content', 'CType', [
		'LLL:EXT:slick/Resources/Private/Language/Backend.xlf:wizardItems.gallery.3.header'
		, 'slickgallery3'
		, 'app-slick-deprecated'
				]
);
