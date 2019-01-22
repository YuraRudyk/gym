<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Rudyk.LsTemplate',
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
                    subscription {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('ls_template') . 'Resources/Public/Icons/user_plugin_subscription.svg
                        title = LLL:EXT:ls_template/Resources/Private/Language/locallang_db.xlf:tx_ls_template_domain_model_subscription
                        description = LLL:EXT:ls_template/Resources/Private/Language/locallang_db.xlf:tx_ls_template_domain_model_subscription.description
                        tt_content_defValues {
                            CType = list
                            list_type = lstemplate_subscription
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
