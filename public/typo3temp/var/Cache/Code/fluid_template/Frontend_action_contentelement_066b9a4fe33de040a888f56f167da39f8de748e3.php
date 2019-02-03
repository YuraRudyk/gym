<?php

class Frontend_action_contentelement_066b9a4fe33de040a888f56f167da39f8de748e3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="visual">
  <div class="slider-01">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
      <div class="bg-img filter-01">
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
);$arguments5['image'] = $renderingContext->getVariableProvider()->getByPath('slide.tx_mask_image.0', $array7);
$array8 = array (
);$arguments5['alt'] = $renderingContext->getVariableProvider()->getByPath('slide.tx_mask_image.0.alternative', $array8);
$array9 = array (
);$arguments5['title'] = $renderingContext->getVariableProvider()->getByPath('slide.tx_mask_image.0.title', $array9);

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <h1>';
$array10 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slide.tx_mask_title', $array10)]);

$output4 .= '</h1>
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('slide.tx_mask_description', $array13);
};
$arguments11 = array();
$arguments11['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output4 .= '
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
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('button.tx_mask_link_title', $array22)]);

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
);$arguments18['parameter'] = $renderingContext->getVariableProvider()->getByPath('button.tx_mask_link', $array20);
$arguments18['class'] = 'btn btn-red';

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
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('slide.tx_mask_buttons', $array16);
$arguments14['as'] = 'button';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output4 .= '
            </div>
          </div>
        </div>
    </div>
    <!-- /slide -->
  ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_slide', $array3);
$arguments1['as'] = 'slide';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
  </div>
    <!-- /slider-01 -->
</div>';

return $output0;
}


}
#