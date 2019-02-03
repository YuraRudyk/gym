<?php

class Frontend_action_contentelement_5b4bb209ff9d49a0b4d62824e55ba31c983bb22c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
  <div class="slider-holder bg-img">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['alt'] = NULL;
$arguments6['ismap'] = NULL;
$arguments6['longdesc'] = NULL;
$arguments6['usemap'] = NULL;
$arguments6['src'] = NULL;
$arguments6['treatIdAsReference'] = NULL;
$arguments6['image'] = NULL;
$arguments6['crop'] = NULL;
$arguments6['cropVariant'] = 'default';
$arguments6['width'] = NULL;
$arguments6['height'] = NULL;
$arguments6['minWidth'] = NULL;
$arguments6['minHeight'] = NULL;
$arguments6['maxWidth'] = NULL;
$arguments6['maxHeight'] = NULL;
$arguments6['absolute'] = false;
$array8 = array (
);$arguments6['image'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_backgroun.0', $array8);
$array9 = array (
);$arguments6['alt'] = $renderingContext->getVariableProvider()->getByPath('data.0.alternative', $array9);
$array10 = array (
);$arguments6['title'] = $renderingContext->getVariableProvider()->getByPath('data.0.title', $array10);

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
    <div class="container">
      <div class="slider-02">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
          <div>
            <div class="bg-img">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['alt'] = NULL;
$arguments15['ismap'] = NULL;
$arguments15['longdesc'] = NULL;
$arguments15['usemap'] = NULL;
$arguments15['src'] = NULL;
$arguments15['treatIdAsReference'] = NULL;
$arguments15['image'] = NULL;
$arguments15['crop'] = NULL;
$arguments15['cropVariant'] = 'default';
$arguments15['width'] = NULL;
$arguments15['height'] = NULL;
$arguments15['minWidth'] = NULL;
$arguments15['minHeight'] = NULL;
$arguments15['maxWidth'] = NULL;
$arguments15['maxHeight'] = NULL;
$arguments15['absolute'] = false;
$array17 = array (
);$arguments15['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array17);
$array18 = array (
);$arguments15['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array18);
$array19 = array (
);$arguments15['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array19);

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
            </div>
          </div>
        ';
return $output14;
};
$arguments11 = array();
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$array13 = array (
);$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_images', $array13);
$arguments11['as'] = 'file';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output5 .= '
      </div>
    </div>
  </div>
  <!-- /slider-holder -->
';
return $output5;
};
$arguments0 = array();
$arguments0['then'] = NULL;
$arguments0['else'] = NULL;
$arguments0['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2 = array();
$array3 = array (
);$array2['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_images', $array3);

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments0['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)
					),
					$renderingContext
				);
$arguments0['__thenClosure'] = $renderChildrenClosure1;

return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#