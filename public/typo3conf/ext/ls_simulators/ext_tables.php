<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Simulators.LsSimulators',
            'Simulators',
            'Simulators'
        );

        $pluginSignature = str_replace('_', '', 'ls_simulators') . '_simulators';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:ls_simulators/Configuration/FlexForms/flexform_simulators.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Simulators.LsSimulators',
            'Subscription',
            'Subscription'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ls_simulators', 'Configuration/TypoScript', 'Simulators');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lssimulators_domain_model_simulators', 'EXT:ls_simulators/Resources/Private/Language/locallang_csh_tx_lssimulators_domain_model_simulators.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lssimulators_domain_model_simulators');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lssimulators_domain_model_subscription', 'EXT:ls_simulators/Resources/Private/Language/locallang_csh_tx_lssimulators_domain_model_subscription.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lssimulators_domain_model_subscription');


        $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'] = 100000;
        $TCA['tt_content']['columns']['sys_file_reference']['config']['max_size'] = 3000000;
    }
);
