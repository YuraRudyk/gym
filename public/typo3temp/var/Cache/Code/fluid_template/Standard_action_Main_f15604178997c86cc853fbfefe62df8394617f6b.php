<?php

class Standard_action_Main_f15604178997c86cc853fbfefe62df8394617f6b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'cart' => 
  array (
    0 => 'Extcode\\Cart\\ViewHelpers',
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
    <div id="wrapper">
        <div id="main">
            <header id="header">
                <div class="container">
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
$arguments1['typoscriptObjectPath'] = 'lib.logo';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                    <nav id="main-nav">
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
$arguments3['typoscriptObjectPath'] = 'lib.menu';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
                    </nav>
                    <div class="right">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['data'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.cart';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                        <div class="language-list">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments33 = array();

$output32 .= '';

$output32 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};
$arguments35 = array();
$arguments35['if'] = NULL;

$output32 .= '';

$output32 .= '
                                    ';
return $output32;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('data.sys_language_uid', $array30);
$array29['1'] = ' == 1';

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments27['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                                ';
return $output26;
};
$arguments24 = array();

$output23 .= '';

$output23 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return '
                                    <a class="drop-link" href="#">УКР</a>
                                ';
};
$arguments37 = array();
$arguments37['if'] = NULL;

$output23 .= '';

$output23 .= '
                            ';
return $output23;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('data.sys_language_uid', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments16 = array();

$output15 .= '';

$output15 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};
$arguments18 = array();
$arguments18['if'] = NULL;

$output15 .= '';

$output15 .= '
                                    ';
return $output15;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('data.sys_language_uid', $array13);
$array12['1'] = ' == 1';

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
                                ';
return $output9;
};
$arguments7['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                    <a class="drop-link" href="#">УКР</a>
                                ';
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['typoscriptObjectPath'] = NULL;
$arguments39['data'] = NULL;
$arguments39['currentValueKey'] = NULL;
$arguments39['table'] = '';
$arguments39['typoscriptObjectPath'] = 'lib.language';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output0 .= '
                        </div>
                        <a href="#" class="open-menu"><span></span><span></span><span></span>Open Menu</a>
                    </div>
                </div>
            </header>

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['column'] = NULL;
$arguments41['order'] = 'sorting';
$arguments41['sortDirection'] = 'ASC';
$arguments41['pageUid'] = 0;
$arguments41['contentUids'] = NULL;
$arguments41['sectionIndexOnly'] = false;
$arguments41['loadRegister'] = NULL;
$arguments41['render'] = true;
$arguments41['hideUntranslated'] = false;
$arguments41['limit'] = NULL;
$arguments41['slide'] = 0;
$arguments41['slideCollect'] = 0;
$arguments41['slideCollectReverse'] = false;
$arguments41['as'] = NULL;
$array43 = array (
);$arguments41['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array43);
$arguments41['column'] = 0;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['column'] = NULL;
$arguments44['order'] = 'sorting';
$arguments44['sortDirection'] = 'ASC';
$arguments44['pageUid'] = 0;
$arguments44['contentUids'] = NULL;
$arguments44['sectionIndexOnly'] = false;
$arguments44['loadRegister'] = NULL;
$arguments44['render'] = true;
$arguments44['hideUntranslated'] = false;
$arguments44['limit'] = NULL;
$arguments44['slide'] = 0;
$arguments44['slideCollect'] = 0;
$arguments44['slideCollectReverse'] = false;
$arguments44['as'] = NULL;
$arguments44['pageUid'] = 2;
$arguments44['column'] = 0;

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output0 .= '
        </div>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output46 = '';

$output46 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'Page';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output46 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
    <div id="wrapper">
        <div id="main">
            <header id="header">
                <div class="container">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['typoscriptObjectPath'] = NULL;
$arguments52['data'] = NULL;
$arguments52['currentValueKey'] = NULL;
$arguments52['table'] = '';
$arguments52['typoscriptObjectPath'] = 'lib.logo';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                    <nav id="main-nav">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['typoscriptObjectPath'] = NULL;
$arguments54['data'] = NULL;
$arguments54['currentValueKey'] = NULL;
$arguments54['table'] = '';
$arguments54['typoscriptObjectPath'] = 'lib.menu';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output51 .= '
                    </nav>
                    <div class="right">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['typoscriptObjectPath'] = NULL;
$arguments56['data'] = NULL;
$arguments56['currentValueKey'] = NULL;
$arguments56['table'] = '';
$arguments56['typoscriptObjectPath'] = 'lib.cart';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output51 .= '
                        <div class="language-list">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments84 = array();

$output83 .= '';

$output83 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output83 .= '';

$output83 .= '
                                    ';
return $output83;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('data.sys_language_uid', $array81);
$array80['1'] = ' == 1';

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments78['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
                                ';
return $output77;
};
$arguments75 = array();

$output74 .= '';

$output74 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return '
                                    <a class="drop-link" href="#">УКР</a>
                                ';
};
$arguments88 = array();
$arguments88['if'] = NULL;

$output74 .= '';

$output74 .= '
                            ';
return $output74;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('data.sys_language_uid', $array72);

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments67 = array();

$output66 .= '';

$output66 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};
$arguments69 = array();
$arguments69['if'] = NULL;

$output66 .= '';

$output66 .= '
                                    ';
return $output66;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('data.sys_language_uid', $array64);
$array63['1'] = ' == 1';

$expression65 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">ENG</a>
                                        ';
};
$arguments61['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                            <a class="drop-link" href="#">РУС</a>
                                        ';
};

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                                ';
return $output60;
};
$arguments58['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                    <a class="drop-link" href="#">УКР</a>
                                ';
};

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output51 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['typoscriptObjectPath'] = NULL;
$arguments90['data'] = NULL;
$arguments90['currentValueKey'] = NULL;
$arguments90['table'] = '';
$arguments90['typoscriptObjectPath'] = 'lib.language';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output51 .= '
                        </div>
                        <a href="#" class="open-menu"><span></span><span></span><span></span>Open Menu</a>
                    </div>
                </div>
            </header>

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['column'] = NULL;
$arguments92['order'] = 'sorting';
$arguments92['sortDirection'] = 'ASC';
$arguments92['pageUid'] = 0;
$arguments92['contentUids'] = NULL;
$arguments92['sectionIndexOnly'] = false;
$arguments92['loadRegister'] = NULL;
$arguments92['render'] = true;
$arguments92['hideUntranslated'] = false;
$arguments92['limit'] = NULL;
$arguments92['slide'] = 0;
$arguments92['slideCollect'] = 0;
$arguments92['slideCollectReverse'] = false;
$arguments92['as'] = NULL;
$array94 = array (
);$arguments92['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array94);
$arguments92['column'] = 0;

$output51 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output51 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['column'] = NULL;
$arguments95['order'] = 'sorting';
$arguments95['sortDirection'] = 'ASC';
$arguments95['pageUid'] = 0;
$arguments95['contentUids'] = NULL;
$arguments95['sectionIndexOnly'] = false;
$arguments95['loadRegister'] = NULL;
$arguments95['render'] = true;
$arguments95['hideUntranslated'] = false;
$arguments95['limit'] = NULL;
$arguments95['slide'] = 0;
$arguments95['slideCollect'] = 0;
$arguments95['slideCollectReverse'] = false;
$arguments95['as'] = NULL;
$arguments95['pageUid'] = 2;
$arguments95['column'] = 0;

$output51 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output51 .= '
        </div>
    </div>

';
return $output51;
};
$arguments49 = array();
$arguments49['name'] = NULL;
$arguments49['name'] = 'Main';

$output46 .= NULL;

$output46 .= '


';

return $output46;
}


}
#