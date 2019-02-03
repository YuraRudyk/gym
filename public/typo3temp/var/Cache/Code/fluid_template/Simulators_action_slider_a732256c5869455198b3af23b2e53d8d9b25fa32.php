<?php

class Simulators_action_slider_a732256c5869455198b3af23b2e53d8d9b25fa32 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
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
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
  <div class="relative-item bg-img">
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
$arguments1['src'] = 'EXT:ls_template/Resources/Public/markup/images/bg-sales.png';
$arguments1['alt'] = 'alt text';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <div class="container">
      <div class="holder">
        <h2 class="ttl">';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.header', $array3)]);

$output0 .= '</h2>
        <div class="slider-03">
          <!-- /item -->
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
            <div>
              <div class="thumbnail">
                <div class="main-img">
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['alt'] = NULL;
$arguments8['ismap'] = NULL;
$arguments8['longdesc'] = NULL;
$arguments8['usemap'] = NULL;
$arguments8['src'] = NULL;
$arguments8['treatIdAsReference'] = NULL;
$arguments8['image'] = NULL;
$arguments8['crop'] = NULL;
$arguments8['cropVariant'] = 'default';
$arguments8['width'] = NULL;
$arguments8['height'] = NULL;
$arguments8['minWidth'] = NULL;
$arguments8['minHeight'] = NULL;
$arguments8['maxWidth'] = NULL;
$arguments8['maxHeight'] = NULL;
$arguments8['absolute'] = false;
$array10 = array (
);$arguments8['image'] = $renderingContext->getVariableProvider()->getByPath('slide.images.0', $array10);
$array11 = array (
);$arguments8['alt'] = $renderingContext->getVariableProvider()->getByPath('slide.images.0.alternative', $array11);
$array12 = array (
);$arguments8['title'] = $renderingContext->getVariableProvider()->getByPath('slide.images.0.title', $array12);

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
                </div>
                <div class="text">
                  <h4>';
$array13 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slide.title', $array13)]);

$output7 .= '</h4>
                  <small class="price">';
$array14 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slide.price', $array14)]);

$output7 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['key'] = 'tx_lssimulators_domain_model_subscription.currency';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output7 .= '</small>
                </div>
                <div class="hover-box">
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array20 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.linkTitle', $array20)]);
};
$arguments17 = array();
$arguments17['pageUid'] = NULL;
$arguments17['additionalParams'] = array (
);
$arguments17['pageType'] = 0;
$arguments17['noCache'] = false;
$arguments17['noCacheHash'] = false;
$arguments17['section'] = '';
$arguments17['linkAccessRestrictedPages'] = false;
$arguments17['absolute'] = false;
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['addQueryStringMethod'] = NULL;
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['target'] = NULL;
$arguments17['rel'] = NULL;
$array19 = array (
);$arguments17['pageUid'] = $renderingContext->getVariableProvider()->getByPath('slide.detailPid', $array19);
$arguments17['class'] = 'btn btn-red';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output7 .= '
                </div>
              </div>
            </div>
          ';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('simulators', $array6);
$arguments4['as'] = 'slide';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
          <!-- /item -->
        </div>
        <!-- /slider-03 -->
      </div>
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
$output21 = '';

$output21 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['name'] = NULL;
$arguments22['name'] = 'Default';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output21 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
  <div class="relative-item bg-img">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['alt'] = NULL;
$arguments27['ismap'] = NULL;
$arguments27['longdesc'] = NULL;
$arguments27['usemap'] = NULL;
$arguments27['src'] = NULL;
$arguments27['treatIdAsReference'] = NULL;
$arguments27['image'] = NULL;
$arguments27['crop'] = NULL;
$arguments27['cropVariant'] = 'default';
$arguments27['width'] = NULL;
$arguments27['height'] = NULL;
$arguments27['minWidth'] = NULL;
$arguments27['minHeight'] = NULL;
$arguments27['maxWidth'] = NULL;
$arguments27['maxHeight'] = NULL;
$arguments27['absolute'] = false;
$arguments27['src'] = 'EXT:ls_template/Resources/Public/markup/images/bg-sales.png';
$arguments27['alt'] = 'alt text';

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
    <div class="container">
      <div class="holder">
        <h2 class="ttl">';
$array29 = array (
);
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.header', $array29)]);

$output26 .= '</h2>
        <div class="slider-03">
          <!-- /item -->
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            <div>
              <div class="thumbnail">
                <div class="main-img">
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['alt'] = NULL;
$arguments34['ismap'] = NULL;
$arguments34['longdesc'] = NULL;
$arguments34['usemap'] = NULL;
$arguments34['src'] = NULL;
$arguments34['treatIdAsReference'] = NULL;
$arguments34['image'] = NULL;
$arguments34['crop'] = NULL;
$arguments34['cropVariant'] = 'default';
$arguments34['width'] = NULL;
$arguments34['height'] = NULL;
$arguments34['minWidth'] = NULL;
$arguments34['minHeight'] = NULL;
$arguments34['maxWidth'] = NULL;
$arguments34['maxHeight'] = NULL;
$arguments34['absolute'] = false;
$array36 = array (
);$arguments34['image'] = $renderingContext->getVariableProvider()->getByPath('slide.images.0', $array36);
$array37 = array (
);$arguments34['alt'] = $renderingContext->getVariableProvider()->getByPath('slide.images.0.alternative', $array37);
$array38 = array (
);$arguments34['title'] = $renderingContext->getVariableProvider()->getByPath('slide.images.0.title', $array38);

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                </div>
                <div class="text">
                  <h4>';
$array39 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slide.title', $array39)]);

$output33 .= '</h4>
                  <small class="price">';
$array40 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('slide.price', $array40)]);

$output33 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['key'] = 'tx_lssimulators_domain_model_subscription.currency';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output33 .= '</small>
                </div>
                <div class="hover-box">
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array46 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.linkTitle', $array46)]);
};
$arguments43 = array();
$arguments43['pageUid'] = NULL;
$arguments43['additionalParams'] = array (
);
$arguments43['pageType'] = 0;
$arguments43['noCache'] = false;
$arguments43['noCacheHash'] = false;
$arguments43['section'] = '';
$arguments43['linkAccessRestrictedPages'] = false;
$arguments43['absolute'] = false;
$arguments43['addQueryString'] = false;
$arguments43['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['target'] = NULL;
$arguments43['rel'] = NULL;
$array45 = array (
);$arguments43['pageUid'] = $renderingContext->getVariableProvider()->getByPath('slide.detailPid', $array45);
$arguments43['class'] = 'btn btn-red';

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output33 .= '
                </div>
              </div>
            </div>
          ';
return $output33;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$array32 = array (
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('simulators', $array32);
$arguments30['as'] = 'slide';

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output26 .= '
          <!-- /item -->
        </div>
        <!-- /slider-03 -->
      </div>
    </div>
  </div>
';
return $output26;
};
$arguments24 = array();
$arguments24['name'] = NULL;
$arguments24['name'] = 'main';

$output21 .= NULL;

$output21 .= '
';

return $output21;
}


}
#