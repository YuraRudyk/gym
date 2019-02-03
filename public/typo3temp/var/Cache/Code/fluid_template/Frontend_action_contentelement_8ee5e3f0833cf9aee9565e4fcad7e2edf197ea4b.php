<?php

class Frontend_action_contentelement_8ee5e3f0833cf9aee9565e4fcad7e2edf197ea4b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<footer id="footer" class="bg-img filter-01">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['alt'] = NULL;
$arguments1['ismap'] = NULL;
$arguments1['longdesc'] = NULL;
$arguments1['usemap'] = NULL;
$arguments1['src'] = NULL;
$arguments1['treatIdAsReference'] = NULL;
$arguments1['image'] = NULL;
$arguments1['crop'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['minWidth'] = NULL;
$arguments1['minHeight'] = NULL;
$arguments1['maxWidth'] = NULL;
$arguments1['maxHeight'] = NULL;
$arguments1['absolute'] = false;
$array3 = array (
);$arguments1['image'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_footer_background.0', $array3);
$array4 = array (
);$arguments1['alt'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_footer_background.0.alternative', $array4);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <a href="#" class="brand-footer">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['alt'] = NULL;
$arguments5['ismap'] = NULL;
$arguments5['longdesc'] = NULL;
$arguments5['usemap'] = NULL;
$arguments5['src'] = NULL;
$arguments5['treatIdAsReference'] = NULL;
$arguments5['image'] = NULL;
$arguments5['crop'] = NULL;
$arguments5['cropVariant'] = 'default';
$arguments5['width'] = NULL;
$arguments5['height'] = NULL;
$arguments5['minWidth'] = NULL;
$arguments5['minHeight'] = NULL;
$arguments5['maxWidth'] = NULL;
$arguments5['maxHeight'] = NULL;
$arguments5['absolute'] = false;
$array7 = array (
);$arguments5['image'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_logo.0', $array7);
$array8 = array (
);$arguments5['alt'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_logo.0.alternative', $array8);
$array9 = array (
);$arguments5['title'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_logo.0.title', $array9);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                    </a>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                        <div class="holder">
                            <h6>Наші соцмережі:</h6>
                            <ul class="social-list">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                                    <li>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['alt'] = NULL;
$arguments24['ismap'] = NULL;
$arguments24['longdesc'] = NULL;
$arguments24['usemap'] = NULL;
$arguments24['src'] = NULL;
$arguments24['treatIdAsReference'] = NULL;
$arguments24['image'] = NULL;
$arguments24['crop'] = NULL;
$arguments24['cropVariant'] = 'default';
$arguments24['width'] = NULL;
$arguments24['height'] = NULL;
$arguments24['minWidth'] = NULL;
$arguments24['minHeight'] = NULL;
$arguments24['maxWidth'] = NULL;
$arguments24['maxHeight'] = NULL;
$arguments24['absolute'] = false;
$array26 = array (
);$arguments24['image'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_icon.0', $array26);
$arguments24['class'] = 'ico-svg';
$array27 = array (
);$arguments24['alt'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_icon.0.alternative', $array27);
$array28 = array (
);$arguments24['title'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_icon.0.title', $array28);

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                                        ';
return $output23;
};
$arguments20 = array();
$arguments20['parameter'] = NULL;
$arguments20['target'] = '';
$arguments20['class'] = '';
$arguments20['title'] = '';
$arguments20['additionalParams'] = '';
$arguments20['additionalAttributes'] = array (
);
$arguments20['useCacheHash'] = false;
$array22 = array (
);$arguments20['parameter'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_link', $array22);
$arguments20['target'] = '_blank';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                                    </li>
                                ';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_networks', $array18);
$arguments16['as'] = 'network';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                            </ul>
                        </div>
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
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_networks', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
                </div>
                <!-- /col -->
                <div class="col-12 col-sm-6 col-md-4">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.tx_mask_work_time', $array37);
};
$arguments35 = array();
$arguments35['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments35['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                    ';
return $output34;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_work_time', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '
                </div>
                <!-- /col -->
                <div class="col-12 col-sm-6 col-md-4">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.tx_mask_footer_contacts', $array46);
};
$arguments44 = array();
$arguments44['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments44['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                    ';
return $output43;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_footer_contacts', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = $renderChildrenClosure39;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /footer-top -->
    <div class="footer-bottom">
        <div class="container"><p class="copy">';
$array47 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_copyright', $array47)]);

$output0 .= '</p></div>
    </div>
    <!-- /bottom -->
</footer><!-- / footer -->';

return $output0;
}


}
#