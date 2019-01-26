<?php
defined('TYPO3_MODE') or die();

$extKey = 'owl_slider';

$pluginSignature = str_replace('_', '', $extKey) . '_owlslider';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:ls_template/Configuration/FlexForms/flexform_owlslider.xml'
);
?>