<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/Default/'
				, 'Slick [1] (based on fluid_css_templates)'
);
ExtensionManagementUtility::addStaticFile(
				'slick'
				, 'Configuration/TypoScript/7.6/'
				, 'Slick [1] - DEPRECATED (based on css_styled_contents)'
);
