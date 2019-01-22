<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Rudyk.LsTemplate',
            'Subscription',
            'Subscription'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ls_template', 'Configuration/TypoScript', 'LS Template');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lstemplate_domain_model_subscription', 'EXT:ls_template/Resources/Private/Language/locallang_csh_tx_lstemplate_domain_model_subscription.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lstemplate_domain_model_subscription');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lstemplate_domain_model_simulators', 'EXT:ls_template/Resources/Private/Language/locallang_csh_tx_lstemplate_domain_model_simulators.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lstemplate_domain_model_simulators');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            'ls_template',
            'sys_category'
        );

    }
);
