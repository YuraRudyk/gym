<?php

class Standard_action_Main_222682e0660a3620c9f1eaebed570a4274d089cb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Page';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <main>
        <div class="out_block">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.menu';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['column'] = NULL;
$arguments3['order'] = 'sorting';
$arguments3['sortDirection'] = 'ASC';
$arguments3['pageUid'] = 0;
$arguments3['contentUids'] = NULL;
$arguments3['sectionIndexOnly'] = false;
$arguments3['loadRegister'] = NULL;
$arguments3['render'] = true;
$arguments3['hideUntranslated'] = false;
$arguments3['limit'] = NULL;
$arguments3['slide'] = 0;
$arguments3['slideCollect'] = 0;
$arguments3['slideCollectReverse'] = false;
$arguments3['as'] = NULL;
$array5 = array (
);$arguments3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array5);
$arguments3['column'] = 0;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['column'] = NULL;
$arguments6['order'] = 'sorting';
$arguments6['sortDirection'] = 'ASC';
$arguments6['pageUid'] = 0;
$arguments6['contentUids'] = NULL;
$arguments6['sectionIndexOnly'] = false;
$arguments6['loadRegister'] = NULL;
$arguments6['render'] = true;
$arguments6['hideUntranslated'] = false;
$arguments6['limit'] = NULL;
$arguments6['slide'] = 0;
$arguments6['slideCollect'] = 0;
$arguments6['slideCollectReverse'] = false;
$arguments6['as'] = NULL;
$arguments6['pageUid'] = 2;
$arguments6['column'] = 0;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
        </div>
    </main>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output8 = '';

$output8 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['name'] = NULL;
$arguments9['name'] = 'Page';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output8 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
    <main>
        <div class="out_block">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['typoscriptObjectPath'] = NULL;
$arguments14['data'] = NULL;
$arguments14['currentValueKey'] = NULL;
$arguments14['table'] = '';
$arguments14['typoscriptObjectPath'] = 'lib.menu';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['column'] = NULL;
$arguments16['order'] = 'sorting';
$arguments16['sortDirection'] = 'ASC';
$arguments16['pageUid'] = 0;
$arguments16['contentUids'] = NULL;
$arguments16['sectionIndexOnly'] = false;
$arguments16['loadRegister'] = NULL;
$arguments16['render'] = true;
$arguments16['hideUntranslated'] = false;
$arguments16['limit'] = NULL;
$arguments16['slide'] = 0;
$arguments16['slideCollect'] = 0;
$arguments16['slideCollectReverse'] = false;
$arguments16['as'] = NULL;
$array18 = array (
);$arguments16['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array18);
$arguments16['column'] = 0;

$output13 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['column'] = NULL;
$arguments19['order'] = 'sorting';
$arguments19['sortDirection'] = 'ASC';
$arguments19['pageUid'] = 0;
$arguments19['contentUids'] = NULL;
$arguments19['sectionIndexOnly'] = false;
$arguments19['loadRegister'] = NULL;
$arguments19['render'] = true;
$arguments19['hideUntranslated'] = false;
$arguments19['limit'] = NULL;
$arguments19['slide'] = 0;
$arguments19['slideCollect'] = 0;
$arguments19['slideCollectReverse'] = false;
$arguments19['as'] = NULL;
$arguments19['pageUid'] = 2;
$arguments19['column'] = 0;

$output13 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '
        </div>
    </main>
';
return $output13;
};
$arguments11 = array();
$arguments11['name'] = NULL;
$arguments11['name'] = 'Main';

$output8 .= NULL;

$output8 .= '


';

return $output8;
}


}
#