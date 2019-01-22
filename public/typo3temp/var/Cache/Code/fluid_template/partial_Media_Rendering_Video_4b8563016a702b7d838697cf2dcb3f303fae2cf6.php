<?php

class partial_Media_Rendering_Video_4b8563016a702b7d838697cf2dcb3f303fae2cf6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
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
$arguments1['file'] = NULL;
$arguments1['additionalConfig'] = array (
);
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['cropVariant'] = 'default';
$arguments1['class'] = 'video-embed-item';
$array3 = array (
);$arguments1['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array3);
$array4 = array (
);$arguments1['width'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array4);
$array5 = array (
);$arguments1['height'] = $renderingContext->getVariableProvider()->getByPath('dimensions.height', $array5);
$array6 = array (
);$arguments1['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array6);
$array7 = array (
);$arguments1['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array7);
$array8 = array (
);$arguments1['additionalConfig'] = $renderingContext->getVariableProvider()->getByPath('settings.media.additionalConfig', $array8);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#