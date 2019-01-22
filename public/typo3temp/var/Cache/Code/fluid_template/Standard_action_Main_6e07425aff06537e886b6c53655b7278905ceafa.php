<?php

class Standard_action_Main_6e07425aff06537e886b6c53655b7278905ceafa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['typoscriptObjectPath'] = NULL;
$arguments3['data'] = NULL;
$arguments3['currentValueKey'] = NULL;
$arguments3['table'] = '';
$arguments3['typoscriptObjectPath'] = 'lib.language';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['column'] = NULL;
$arguments5['order'] = 'sorting';
$arguments5['sortDirection'] = 'ASC';
$arguments5['pageUid'] = 0;
$arguments5['contentUids'] = NULL;
$arguments5['sectionIndexOnly'] = false;
$arguments5['loadRegister'] = NULL;
$arguments5['render'] = true;
$arguments5['hideUntranslated'] = false;
$arguments5['limit'] = NULL;
$arguments5['slide'] = 0;
$arguments5['slideCollect'] = 0;
$arguments5['slideCollectReverse'] = false;
$arguments5['as'] = NULL;
$array7 = array (
);$arguments5['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array7);
$arguments5['column'] = 0;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['column'] = NULL;
$arguments8['order'] = 'sorting';
$arguments8['sortDirection'] = 'ASC';
$arguments8['pageUid'] = 0;
$arguments8['contentUids'] = NULL;
$arguments8['sectionIndexOnly'] = false;
$arguments8['loadRegister'] = NULL;
$arguments8['render'] = true;
$arguments8['hideUntranslated'] = false;
$arguments8['limit'] = NULL;
$arguments8['slide'] = 0;
$arguments8['slideCollect'] = 0;
$arguments8['slideCollectReverse'] = false;
$arguments8['as'] = NULL;
$arguments8['pageUid'] = 2;
$arguments8['column'] = 0;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

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
$output10 = '';

$output10 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['name'] = NULL;
$arguments11['name'] = 'Page';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output10 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
    <main>
        <div class="out_block">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['typoscriptObjectPath'] = NULL;
$arguments16['data'] = NULL;
$arguments16['currentValueKey'] = NULL;
$arguments16['table'] = '';
$arguments16['typoscriptObjectPath'] = 'lib.menu';

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['typoscriptObjectPath'] = NULL;
$arguments18['data'] = NULL;
$arguments18['currentValueKey'] = NULL;
$arguments18['table'] = '';
$arguments18['typoscriptObjectPath'] = 'lib.language';

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output15 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['column'] = NULL;
$arguments20['order'] = 'sorting';
$arguments20['sortDirection'] = 'ASC';
$arguments20['pageUid'] = 0;
$arguments20['contentUids'] = NULL;
$arguments20['sectionIndexOnly'] = false;
$arguments20['loadRegister'] = NULL;
$arguments20['render'] = true;
$arguments20['hideUntranslated'] = false;
$arguments20['limit'] = NULL;
$arguments20['slide'] = 0;
$arguments20['slideCollect'] = 0;
$arguments20['slideCollectReverse'] = false;
$arguments20['as'] = NULL;
$array22 = array (
);$arguments20['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array22);
$arguments20['column'] = 0;

$output15 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output15 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['column'] = NULL;
$arguments23['order'] = 'sorting';
$arguments23['sortDirection'] = 'ASC';
$arguments23['pageUid'] = 0;
$arguments23['contentUids'] = NULL;
$arguments23['sectionIndexOnly'] = false;
$arguments23['loadRegister'] = NULL;
$arguments23['render'] = true;
$arguments23['hideUntranslated'] = false;
$arguments23['limit'] = NULL;
$arguments23['slide'] = 0;
$arguments23['slideCollect'] = 0;
$arguments23['slideCollectReverse'] = false;
$arguments23['as'] = NULL;
$arguments23['pageUid'] = 2;
$arguments23['column'] = 0;

$output15 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output15 .= '
        </div>
    </main>
';
return $output15;
};
$arguments13 = array();
$arguments13['name'] = NULL;
$arguments13['name'] = 'Main';

$output10 .= NULL;

$output10 .= '


';

return $output10;
}


}
#