<?php

if (!defined('TYPO3_MODE')) {
    exit('Access denied.');
}

$ll = 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf';

############################## Add PageTS config ##############################

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
   '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:sem_ox_content/Configuration/TsConfig/Page/" extensions="ts">'
);


############################## Add PageTs config of gridelements ##################################

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:sem_ox_content/Resources/Private/GridElements/" extensions="ts">'
);


############################## Custom translations #############################

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:powermail/Resources/Private/Language/locallang.xlf'][] = $ll;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:felogin/Resources/Private/Language/locallang.xlf'][]   = $ll;


############################## Hooks #################################

// Login RSA script hook
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['loginFormOnSubmitFuncs']['rsaauth'] = \Media711\SemOxContent\Hook\RsaFrontendSetupHook::class
                                                                                       . '->loginFormHook';

############################# Captcha #############################

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['captcha'] = 'EXT:sem_ox_content/Resources/Public/Scripts/captcha.php';


############################# New pageOverlayFields #############################

$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',no_index';


############################# Enhancing powermail form controller #############################

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\ObjectManager::class)
    ->get(\TYPO3\CMS\Extbase\Object\Container\Container::class)
    ->registerImplementation(
        \In2code\Powermail\Controller\FormController::class, \Media711\SemOxContent\Controller\FormController::class
    );

############################# GalleryProcessor overriding #############################

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Frontend\\DataProcessing\\GalleryProcessor'] = [
    'className' => 'Media711\\SemOxContent\\DataProcessing\\GalleryProcessor'
];

############################# SliderProcessor overriding #############################

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['Media711\\SemContent\\DataProcessing\\SliderProcessor'] = [
    'className' => 'Media711\\SemOxContent\\DataProcessing\\SliderProcessor'
];

############################# EvaluateDisplayConditions overriding #############################

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Backend\\Form\\FormDataProvider\\EvaluateDisplayConditions'] = [
    'className' => Media711\SemOxContent\Backend\Form\FormDataProvider\EvaluateDisplayConditions::class
];

/** -------------------------- Register eID handlers -------------------------- */
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['send_mail'] =
    \Media711\SemOxContent\Eid\SendMailEid::class . '::processRequest';
