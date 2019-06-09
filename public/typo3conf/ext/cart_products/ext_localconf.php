<?php

defined('TYPO3_MODE') or die();

$_LLL_be = 'LLL:EXT:cart_products/Resources/Private/Language/locallang_be.xlf:';

// configure plugins

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.cart_products',
    'Products',
    [
        'Product' => 'show, list, teaser, showForm',
    ],
    [
        'Product' => 'showForm',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.cart_products',
    'TeaserProducts',
    [
        'Product' => 'teaser, showForm',
    ],
    [
        'Product' => 'showForm',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.cart_products',
    'SingleProduct',
    [
        'Product' => 'show, showForm',
    ],
    [
        'Product' => 'showForm',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.cart_products',
    'ProductPartial',
    [
        'Product' => 'showForm',
    ],
    [
        'Product' => 'showForm',
    ]
);

// Icon Registry

if (TYPO3_MODE === 'BE') {
    $icons = [
        'apps-pagetree-folder-cartproducts-products' => 'apps_pagetree_folder_cartproducts_products.svg',
        'apps-pagetree-page-cartproducts-products' => 'apps_pagetree_page_cartproducts_products.svg',
        'ext-cartproducts-wizard-icon' => 'cartproducts_plugin_wizard.svg',
    ];

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );

    foreach ($icons as $identifier => $fileName) {
        $iconRegistry->registerIcon(
            $identifier,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            [
                'source' => 'EXT:cart_products/Resources/Public/Icons/' . $fileName,
            ]
        );
    }
}

// TSconfig

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:cart_products/Configuration/TSconfig/ContentElementWizard.tsconfig">
');

// Cart Hooks

if (TYPO3_MODE === 'FE') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['cart']['CartProducts']['Cart']['AddToCartFinisher'] =
        \Extcode\CartProducts\Domain\Finisher\Cart\AddToCartFinisher::class;
}

// realurl Hook

if (TYPO3_MODE === 'FE') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['ConfigurationReader_postProc'][1499067085] =
        'EXT:cart_products/Classes/Hooks/RealUrlHook.php:Extcode\CartProducts\Hooks\RealUrlHook->postProcessConfiguration';
}

// ke_search Hook

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] = 'EXT:cart_products/Classes/Hooks/KeSearchIndexer.php:Extcode\CartProducts\Hooks\KeSearchIndexer';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] = 'EXT:cart_products/Classes/Hooks/KeSearchIndexer.php:Extcode\CartProducts\Hooks\KeSearchIndexer';

// processDatamapClass Hook

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['cartproducts_allowed'] =
    \Extcode\CartProducts\Hooks\DatamapDataHandlerHook::class;

// clearCachePostProc Hook

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['cartproducts_clearcache'] =
    \Extcode\CartProducts\Hooks\DataHandler::class . '->clearCachePostProc';

// Signal Slots

$dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class
);

$dispatcher->connect(
    \Extcode\Cart\Utility\StockUtility::class,
    'handleStock',
    \Extcode\CartProducts\Utility\StockUtility::class,
    'handleStock'
);

// register "cartproducts:" namespace
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['cartproducts'][]
    = 'Extcode\\CartProducts\\ViewHelpers';

// register listTemplateLayouts
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['products'][] = [$_LLL_be . 'flexforms_template.templateLayout.products.table', 'table'];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['products'][] = [$_LLL_be . 'flexforms_template.templateLayout.products.grid', 'grid'];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['teaser_products'][] = [$_LLL_be . 'flexforms_template.templateLayout.products.table', 'table'];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['cart_products']['templateLayouts']['teaser_products'][] = [$_LLL_be . 'flexforms_template.templateLayout.products.grid', 'grid'];
