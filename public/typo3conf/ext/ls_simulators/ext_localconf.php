<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Simulators.LsSimulators',
            'Simulators',
            [
                'Simulators' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Simulators' => 'list, show'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Simulators.LsSimulators',
            'Subscription',
            [
                'Subscription' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Subscription' => 'list, show'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    simulators {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('ls_simulators') . 'Resources/Public/Icons/user_plugin_simulators.svg
                        title = LLL:EXT:ls_simulators/Resources/Private/Language/locallang_db.xlf:tx_ls_simulators_domain_model_simulators
                        description = LLL:EXT:ls_simulators/Resources/Private/Language/locallang_db.xlf:tx_ls_simulators_domain_model_simulators.description
                        tt_content_defValues {
                            CType = list
                            list_type = lssimulators_simulators
                        }
                    }
                    subscription {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('ls_simulators') . 'Resources/Public/Icons/user_plugin_subscription.svg
                        title = LLL:EXT:ls_simulators/Resources/Private/Language/locallang_db.xlf:tx_ls_simulators_domain_model_subscription
                        description = LLL:EXT:ls_simulators/Resources/Private/Language/locallang_db.xlf:tx_ls_simulators_domain_model_subscription.description
                        tt_content_defValues {
                            CType = list
                            list_type = lssimulators_subscription
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
