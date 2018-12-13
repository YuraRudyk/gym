<?php

class Frontend_action_contentelement_3c8577009afc63ecd9ed7f1cbf6f392e83380b93 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="footer-outer" style=\'background-image: url("';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_footer_background.0.publicUrl', $array1)]);

$output0 .= '"); background-size: cover\'>
    <div>
        <div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['additionalAttributes'] = NULL;
$arguments2['data'] = NULL;
$arguments2['class'] = NULL;
$arguments2['dir'] = NULL;
$arguments2['id'] = NULL;
$arguments2['lang'] = NULL;
$arguments2['style'] = NULL;
$arguments2['title'] = NULL;
$arguments2['accesskey'] = NULL;
$arguments2['tabindex'] = NULL;
$arguments2['onclick'] = NULL;
$arguments2['alt'] = NULL;
$arguments2['ismap'] = NULL;
$arguments2['longdesc'] = NULL;
$arguments2['usemap'] = NULL;
$arguments2['src'] = NULL;
$arguments2['treatIdAsReference'] = NULL;
$arguments2['image'] = NULL;
$arguments2['crop'] = NULL;
$arguments2['cropVariant'] = 'default';
$arguments2['width'] = NULL;
$arguments2['height'] = NULL;
$arguments2['minWidth'] = NULL;
$arguments2['minHeight'] = NULL;
$arguments2['maxWidth'] = NULL;
$arguments2['maxHeight'] = NULL;
$arguments2['absolute'] = false;
$array4 = array (
);$arguments2['image'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_logo.0', $array4);
$array5 = array (
);$arguments2['alt'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_logo.0.alternative', $array5);
$array6 = array (
);$arguments2['title'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_logo.0.title', $array6);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                <p>';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_newtworkstitle', $array13)]);

$output12 .= '</p>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['alt'] = NULL;
$arguments22['ismap'] = NULL;
$arguments22['longdesc'] = NULL;
$arguments22['usemap'] = NULL;
$arguments22['src'] = NULL;
$arguments22['treatIdAsReference'] = NULL;
$arguments22['image'] = NULL;
$arguments22['crop'] = NULL;
$arguments22['cropVariant'] = 'default';
$arguments22['width'] = NULL;
$arguments22['height'] = NULL;
$arguments22['minWidth'] = NULL;
$arguments22['minHeight'] = NULL;
$arguments22['maxWidth'] = NULL;
$arguments22['maxHeight'] = NULL;
$arguments22['absolute'] = false;
$array24 = array (
);$arguments22['image'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_icon.0', $array24);
$array25 = array (
);$arguments22['alt'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_icon.0.alternative', $array25);
$array26 = array (
);$arguments22['title'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_icon.0.title', $array26);

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
                    ';
return $output21;
};
$arguments18 = array();
$arguments18['parameter'] = NULL;
$arguments18['target'] = '';
$arguments18['class'] = '';
$arguments18['title'] = '';
$arguments18['additionalParams'] = '';
$arguments18['additionalAttributes'] = array (
);
$arguments18['useCacheHash'] = false;
$array20 = array (
);$arguments18['parameter'] = $renderingContext->getVariableProvider()->getByPath('network.tx_mask_link', $array20);
$arguments18['target'] = '_blank';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                ';
return $output17;
};
$arguments14 = array();
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$array16 = array (
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_networks', $array16);
$arguments14['as'] = 'network';

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output12 .= '
            ';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_networks', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        </div>
        <div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array35 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.tx_mask_work_time', $array35);
};
$arguments33 = array();
$arguments33['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments33['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '<br />
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
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_work_time', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = $renderChildrenClosure28;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output0 .= '
        </div>
        <div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array44 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.tx_mask_footer_contacts', $array44);
};
$arguments42 = array();
$arguments42['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments42['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '<br />
            ';
return $output41;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_footer_contacts', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments36['__thenClosure'] = $renderChildrenClosure37;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '
        </div>
    </div>

    <div>';
$array45 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.tx_mask_copyright', $array45)]);

$output0 .= '</div>
</div>';

return $output0;
}


}
#