<?php

class Standard_action_Textmedia_9a0a0de2e19ba07cacf5be734682519ec795616d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Header
 */
public function section_31341c6f0c7af677ffb8fadcb92038e8ac2b6193(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<h1>';
$array22 = array (
);
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array22)]);

$output21 .= '</h1>
		';
return $output21;
};
$arguments19 = array();

$output18 .= '';

$output18 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['section'] = NULL;
$arguments32['partial'] = NULL;
$arguments32['delegate'] = NULL;
$arguments32['renderable'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$arguments32['default'] = NULL;
$arguments32['contentAs'] = NULL;
$arguments32['partial'] = 'Header/All';
$arguments32['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
			';
return $output31;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array29);
$array28['1'] = ' != 1';

$expression30 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 1);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
		';
return $output25;
};
$arguments23 = array();
$arguments23['if'] = NULL;

$output18 .= '';

$output18 .= '
	';
return $output18;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('data.header_layout', $array16);
$array15['1'] = ' == 6';

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 6);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			<h1>';
$array4 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array4)]);

$output3 .= '</h1>
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['renderable'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['partial'] = 'Header/All';
$arguments12['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
			';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array9);
$array8['1'] = ' != 1';

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 1);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = $renderChildrenClosure7;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
		';
return $output5;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output35 = '';

$output35 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$array148 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array148);
};
$arguments146 = array();
$arguments146['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output145 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['section'] = NULL;
$arguments149['partial'] = NULL;
$arguments149['delegate'] = NULL;
$arguments149['renderable'] = NULL;
$arguments149['arguments'] = array (
);
$arguments149['optional'] = false;
$arguments149['default'] = NULL;
$arguments149['contentAs'] = NULL;
$arguments149['partial'] = 'Media/Gallery';
$arguments149['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output145 .= '
		';
return $output145;
};
$arguments143 = array();

$output142 .= '';

$output142 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
			<div class="ce-textpic ce-';
$array155 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.horizontal', $array155)]);

$output154 .= ' ce-';
$array156 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array156)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$arguments157['then'] = ' ce-nowrap';

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output154 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['section'] = NULL;
$arguments168['partial'] = NULL;
$arguments168['delegate'] = NULL;
$arguments168['renderable'] = NULL;
$arguments168['arguments'] = array (
);
$arguments168['optional'] = false;
$arguments168['default'] = NULL;
$arguments168['contentAs'] = NULL;
$arguments168['partial'] = 'Media/Gallery';
$arguments168['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
				';
return $output167;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array165);
$array164['1'] = ' != \'below\'';

$expression166 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'below');};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = $renderChildrenClosure163;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output154 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['section'] = NULL;
$arguments215['partial'] = NULL;
$arguments215['delegate'] = NULL;
$arguments215['renderable'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['optional'] = false;
$arguments215['default'] = NULL;
$arguments215['contentAs'] = NULL;
$arguments215['partial'] = 'Header/All';
$arguments215['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output214 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
							';
return $output214;
};
$arguments209 = array();
$arguments209['then'] = NULL;
$arguments209['else'] = NULL;
$arguments209['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array211 = array();
$array212 = array (
);$array211['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array212);

$expression213 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments209['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)
					),
					$renderingContext
				);
$arguments209['__thenClosure'] = $renderChildrenClosure210;

$output208 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$array220 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array220);
};
$arguments218 = array();
$arguments218['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output208 .= '
						</div>
					';
return $output208;
};
$arguments206 = array();

$output205 .= '';

$output205 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['section'] = NULL;
$arguments236['partial'] = NULL;
$arguments236['delegate'] = NULL;
$arguments236['renderable'] = NULL;
$arguments236['arguments'] = array (
);
$arguments236['optional'] = false;
$arguments236['default'] = NULL;
$arguments236['contentAs'] = NULL;
$arguments236['partial'] = 'Header/All';
$arguments236['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output235 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output235 .= '
								</div>
							';
return $output235;
};
$arguments230 = array();
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$arguments230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array233);

$expression234 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments230['__thenClosure'] = $renderChildrenClosure231;

$output229 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output229 .= '
						';
return $output229;
};
$arguments224 = array();
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array227);

$expression228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments224['__thenClosure'] = $renderChildrenClosure225;

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
					';
return $output223;
};
$arguments221 = array();
$arguments221['if'] = NULL;

$output205 .= '';

$output205 .= '
				';
return $output205;
};
$arguments171 = array();
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$arguments171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array203);

$expression204 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments171['__thenClosure'] = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['section'] = NULL;
$arguments180['partial'] = NULL;
$arguments180['delegate'] = NULL;
$arguments180['renderable'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['optional'] = false;
$arguments180['default'] = NULL;
$arguments180['contentAs'] = NULL;
$arguments180['partial'] = 'Header/All';
$arguments180['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
							';
return $output179;
};
$arguments174 = array();
$arguments174['then'] = NULL;
$arguments174['else'] = NULL;
$arguments174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array177);

$expression178 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array176)
					),
					$renderingContext
				);
$arguments174['__thenClosure'] = $renderChildrenClosure175;

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$array185 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array185);
};
$arguments183 = array();
$arguments183['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output173 .= '
						</div>
					';
return $output173;
};
$arguments171['__elseClosures'][] = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['section'] = NULL;
$arguments199['partial'] = NULL;
$arguments199['delegate'] = NULL;
$arguments199['renderable'] = NULL;
$arguments199['arguments'] = array (
);
$arguments199['optional'] = false;
$arguments199['default'] = NULL;
$arguments199['contentAs'] = NULL;
$arguments199['partial'] = 'Header/All';
$arguments199['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output198 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
								</div>
							';
return $output198;
};
$arguments193 = array();
$arguments193['then'] = NULL;
$arguments193['else'] = NULL;
$arguments193['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array196);

$expression197 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments193['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);
$arguments193['__thenClosure'] = $renderChildrenClosure194;

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
						';
return $output192;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array190);

$expression191 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = $renderChildrenClosure188;

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output186 .= '
					';
return $output186;
};

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output154 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['section'] = NULL;
$arguments245['partial'] = NULL;
$arguments245['delegate'] = NULL;
$arguments245['renderable'] = NULL;
$arguments245['arguments'] = array (
);
$arguments245['optional'] = false;
$arguments245['default'] = NULL;
$arguments245['contentAs'] = NULL;
$arguments245['partial'] = 'Media/Gallery';
$arguments245['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output244 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '
				';
return $output244;
};
$arguments239 = array();
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$arguments239['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array241 = array();
$array242 = array (
);$array241['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array242);
$array241['1'] = ' == \'below\'';

$expression243 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'below');};
$arguments239['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression243(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
$arguments239['__thenClosure'] = $renderChildrenClosure240;

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output154 .= '
			</div>
		';
return $output154;
};
$arguments152 = array();
$arguments152['if'] = NULL;

$output142 .= '';

$output142 .= '
	';
return $output142;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('data.header_layout', $array140);
$array139['1'] = ' == 6';

$expression141 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 6);};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments36['__thenClosure'] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array41);
};
$arguments39 = array();
$arguments39['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['partial'] = 'Media/Gallery';
$arguments42['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output38 .= '
		';
return $output38;
};
$arguments36['__elseClosures'][] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
			<div class="ce-textpic ce-';
$array46 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.horizontal', $array46)]);

$output45 .= ' ce-';
$array47 = array (
);
$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array47)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['then'] = ' ce-nowrap';

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output45 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['section'] = NULL;
$arguments59['partial'] = NULL;
$arguments59['delegate'] = NULL;
$arguments59['renderable'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['optional'] = false;
$arguments59['default'] = NULL;
$arguments59['contentAs'] = NULL;
$arguments59['partial'] = 'Media/Gallery';
$arguments59['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
				';
return $output58;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array56);
$array55['1'] = ' != \'below\'';

$expression57 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'below');};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output45 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['partial'] = 'Header/All';
$arguments106['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output105 .= '
							';
return $output105;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array103);

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = $renderChildrenClosure101;

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$array111 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array111);
};
$arguments109 = array();
$arguments109['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output99 .= '
						</div>
					';
return $output99;
};
$arguments97 = array();

$output96 .= '';

$output96 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['section'] = NULL;
$arguments127['partial'] = NULL;
$arguments127['delegate'] = NULL;
$arguments127['renderable'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['optional'] = false;
$arguments127['default'] = NULL;
$arguments127['contentAs'] = NULL;
$arguments127['partial'] = 'Header/All';
$arguments127['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
								</div>
							';
return $output126;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array124);

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
						';
return $output120;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = $renderChildrenClosure116;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
					';
return $output114;
};
$arguments112 = array();
$arguments112['if'] = NULL;

$output96 .= '';

$output96 .= '
				';
return $output96;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['0'] = $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array94);

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['section'] = NULL;
$arguments71['partial'] = NULL;
$arguments71['delegate'] = NULL;
$arguments71['renderable'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['optional'] = false;
$arguments71['default'] = NULL;
$arguments71['contentAs'] = NULL;
$arguments71['partial'] = 'Header/All';
$arguments71['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
							';
return $output70;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = $renderChildrenClosure66;

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array76);
};
$arguments74 = array();
$arguments74['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output64 .= '
						</div>
					';
return $output64;
};
$arguments62['__elseClosures'][] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['renderable'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['partial'] = 'Header/All';
$arguments90['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
								</div>
							';
return $output89;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array87);

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = $renderChildrenClosure85;

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

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
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array81);

$expression82 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
					';
return $output77;
};

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output45 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['renderable'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['partial'] = 'Media/Gallery';
$arguments136['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
				';
return $output135;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array133);
$array132['1'] = ' == \'below\'';

$expression134 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'below');};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output45 .= '
			</div>
		';
return $output45;
};

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
';

return $output35;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output248 = '';

$output248 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['name'] = NULL;
$arguments249['name'] = 'Default';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output248 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
			<h1>';
$array275 = array (
);
$output274 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array275)]);

$output274 .= '</h1>
		';
return $output274;
};
$arguments272 = array();

$output271 .= '';

$output271 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['section'] = NULL;
$arguments285['partial'] = NULL;
$arguments285['delegate'] = NULL;
$arguments285['renderable'] = NULL;
$arguments285['arguments'] = array (
);
$arguments285['optional'] = false;
$arguments285['default'] = NULL;
$arguments285['contentAs'] = NULL;
$arguments285['partial'] = 'Header/All';
$arguments285['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output284 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output284 .= '
			';
return $output284;
};
$arguments279 = array();
$arguments279['then'] = NULL;
$arguments279['else'] = NULL;
$arguments279['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array281 = array();
$array282 = array (
);$array281['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array282);
$array281['1'] = ' != 1';

$expression283 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 1);};
$arguments279['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression283(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array281)
					),
					$renderingContext
				);
$arguments279['__thenClosure'] = $renderChildrenClosure280;

$output278 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output278 .= '
		';
return $output278;
};
$arguments276 = array();
$arguments276['if'] = NULL;

$output271 .= '';

$output271 .= '
	';
return $output271;
};
$arguments254 = array();
$arguments254['then'] = NULL;
$arguments254['else'] = NULL;
$arguments254['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('data.header_layout', $array269);
$array268['1'] = ' == 6';

$expression270 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 6);};
$arguments254['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$arguments254['__thenClosure'] = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
			<h1>';
$array257 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array257)]);

$output256 .= '</h1>
		';
return $output256;
};
$arguments254['__elseClosures'][] = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['section'] = NULL;
$arguments265['partial'] = NULL;
$arguments265['delegate'] = NULL;
$arguments265['renderable'] = NULL;
$arguments265['arguments'] = array (
);
$arguments265['optional'] = false;
$arguments265['default'] = NULL;
$arguments265['contentAs'] = NULL;
$arguments265['partial'] = 'Header/All';
$arguments265['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output264 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
			';
return $output264;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array262);
$array261['1'] = ' != 1';

$expression263 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 1);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
		';
return $output258;
};

$output253 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '

';
return $output253;
};
$arguments251 = array();
$arguments251['name'] = NULL;
$arguments251['name'] = 'Header';

$output248 .= NULL;

$output248 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$array403 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array403);
};
$arguments401 = array();
$arguments401['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output400 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output400 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['section'] = NULL;
$arguments404['partial'] = NULL;
$arguments404['delegate'] = NULL;
$arguments404['renderable'] = NULL;
$arguments404['arguments'] = array (
);
$arguments404['optional'] = false;
$arguments404['default'] = NULL;
$arguments404['contentAs'] = NULL;
$arguments404['partial'] = 'Media/Gallery';
$arguments404['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output400 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output400 .= '
		';
return $output400;
};
$arguments398 = array();

$output397 .= '';

$output397 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
			<div class="ce-textpic ce-';
$array410 = array (
);
$output409 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.horizontal', $array410)]);

$output409 .= ' ce-';
$array411 = array (
);
$output409 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array411)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['then'] = NULL;
$arguments412['else'] = NULL;
$arguments412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array415);

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
$arguments412['then'] = ' ce-nowrap';

$output409 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output409 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
$output422 = '';

$output422 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['section'] = NULL;
$arguments423['partial'] = NULL;
$arguments423['delegate'] = NULL;
$arguments423['renderable'] = NULL;
$arguments423['arguments'] = array (
);
$arguments423['optional'] = false;
$arguments423['default'] = NULL;
$arguments423['contentAs'] = NULL;
$arguments423['partial'] = 'Media/Gallery';
$arguments423['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output422 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output422 .= '
				';
return $output422;
};
$arguments417 = array();
$arguments417['then'] = NULL;
$arguments417['else'] = NULL;
$arguments417['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array419 = array();
$array420 = array (
);$array419['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array420);
$array419['1'] = ' != \'below\'';

$expression421 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'below');};
$arguments417['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array419)
					),
					$renderingContext
				);
$arguments417['__thenClosure'] = $renderChildrenClosure418;

$output409 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output409 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['section'] = NULL;
$arguments470['partial'] = NULL;
$arguments470['delegate'] = NULL;
$arguments470['renderable'] = NULL;
$arguments470['arguments'] = array (
);
$arguments470['optional'] = false;
$arguments470['default'] = NULL;
$arguments470['contentAs'] = NULL;
$arguments470['partial'] = 'Header/All';
$arguments470['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output469 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
							';
return $output469;
};
$arguments464 = array();
$arguments464['then'] = NULL;
$arguments464['else'] = NULL;
$arguments464['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array466 = array();
$array467 = array (
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array467);

$expression468 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments464['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array466)
					),
					$renderingContext
				);
$arguments464['__thenClosure'] = $renderChildrenClosure465;

$output463 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output463 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
$array475 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array475);
};
$arguments473 = array();
$arguments473['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output463 .= '
						</div>
					';
return $output463;
};
$arguments461 = array();

$output460 .= '';

$output460 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['section'] = NULL;
$arguments491['partial'] = NULL;
$arguments491['delegate'] = NULL;
$arguments491['renderable'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['optional'] = false;
$arguments491['default'] = NULL;
$arguments491['contentAs'] = NULL;
$arguments491['partial'] = 'Header/All';
$arguments491['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output490 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output490 .= '
								</div>
							';
return $output490;
};
$arguments485 = array();
$arguments485['then'] = NULL;
$arguments485['else'] = NULL;
$arguments485['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array488);

$expression489 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments485['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression489(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array487)
					),
					$renderingContext
				);
$arguments485['__thenClosure'] = $renderChildrenClosure486;

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output484 .= '
						';
return $output484;
};
$arguments479 = array();
$arguments479['then'] = NULL;
$arguments479['else'] = NULL;
$arguments479['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array481 = array();
$array482 = array (
);$array481['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array482);

$expression483 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments479['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression483(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array481)
					),
					$renderingContext
				);
$arguments479['__thenClosure'] = $renderChildrenClosure480;

$output478 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output478 .= '
					';
return $output478;
};
$arguments476 = array();
$arguments476['if'] = NULL;

$output460 .= '';

$output460 .= '
				';
return $output460;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array457 = array();
$array458 = array (
);$array457['0'] = $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array458);

$expression459 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression459(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array457)
					),
					$renderingContext
				);
$arguments426['__thenClosure'] = function() use ($renderingContext, $self) {
$output428 = '';

$output428 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$output434 = '';

$output434 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments435 = array();
$arguments435['section'] = NULL;
$arguments435['partial'] = NULL;
$arguments435['delegate'] = NULL;
$arguments435['renderable'] = NULL;
$arguments435['arguments'] = array (
);
$arguments435['optional'] = false;
$arguments435['default'] = NULL;
$arguments435['contentAs'] = NULL;
$arguments435['partial'] = 'Header/All';
$arguments435['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output434 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output434 .= '
							';
return $output434;
};
$arguments429 = array();
$arguments429['then'] = NULL;
$arguments429['else'] = NULL;
$arguments429['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array431 = array();
$array432 = array (
);$array431['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array432);

$expression433 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments429['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression433(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array431)
					),
					$renderingContext
				);
$arguments429['__thenClosure'] = $renderChildrenClosure430;

$output428 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output428 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
$array440 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array440);
};
$arguments438 = array();
$arguments438['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output428 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output428 .= '
						</div>
					';
return $output428;
};
$arguments426['__elseClosures'][] = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$arguments454['section'] = NULL;
$arguments454['partial'] = NULL;
$arguments454['delegate'] = NULL;
$arguments454['renderable'] = NULL;
$arguments454['arguments'] = array (
);
$arguments454['optional'] = false;
$arguments454['default'] = NULL;
$arguments454['contentAs'] = NULL;
$arguments454['partial'] = 'Header/All';
$arguments454['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output453 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output453 .= '
								</div>
							';
return $output453;
};
$arguments448 = array();
$arguments448['then'] = NULL;
$arguments448['else'] = NULL;
$arguments448['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array450 = array();
$array451 = array (
);$array450['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array451);

$expression452 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments448['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression452(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array450)
					),
					$renderingContext
				);
$arguments448['__thenClosure'] = $renderChildrenClosure449;

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output447 .= '
						';
return $output447;
};
$arguments442 = array();
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$arguments442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array444 = array();
$array445 = array (
);$array444['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array445);

$expression446 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array444)
					),
					$renderingContext
				);
$arguments442['__thenClosure'] = $renderChildrenClosure443;

$output441 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output441 .= '
					';
return $output441;
};

$output409 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output409 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output499 = '';

$output499 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['section'] = NULL;
$arguments500['partial'] = NULL;
$arguments500['delegate'] = NULL;
$arguments500['renderable'] = NULL;
$arguments500['arguments'] = array (
);
$arguments500['optional'] = false;
$arguments500['default'] = NULL;
$arguments500['contentAs'] = NULL;
$arguments500['partial'] = 'Media/Gallery';
$arguments500['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output499 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output499 .= '
				';
return $output499;
};
$arguments494 = array();
$arguments494['then'] = NULL;
$arguments494['else'] = NULL;
$arguments494['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array496 = array();
$array497 = array (
);$array496['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array497);
$array496['1'] = ' == \'below\'';

$expression498 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'below');};
$arguments494['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression498(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array496)
					),
					$renderingContext
				);
$arguments494['__thenClosure'] = $renderChildrenClosure495;

$output409 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output409 .= '
			</div>
		';
return $output409;
};
$arguments407 = array();
$arguments407['if'] = NULL;

$output397 .= '';

$output397 .= '
	';
return $output397;
};
$arguments291 = array();
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$arguments291['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array394 = array();
$array395 = array (
);$array394['0'] = $renderingContext->getVariableProvider()->getByPath('data.header_layout', $array395);
$array394['1'] = ' == 6';

$expression396 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 6);};
$arguments291['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression396(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array394)
					),
					$renderingContext
				);
$arguments291['__thenClosure'] = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$array296 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array296);
};
$arguments294 = array();
$arguments294['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);

$output293 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['section'] = NULL;
$arguments297['partial'] = NULL;
$arguments297['delegate'] = NULL;
$arguments297['renderable'] = NULL;
$arguments297['arguments'] = array (
);
$arguments297['optional'] = false;
$arguments297['default'] = NULL;
$arguments297['contentAs'] = NULL;
$arguments297['partial'] = 'Media/Gallery';
$arguments297['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output293 .= '
		';
return $output293;
};
$arguments291['__elseClosures'][] = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
			<div class="ce-textpic ce-';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.horizontal', $array301)]);

$output300 .= ' ce-';
$array302 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array302)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['then'] = NULL;
$arguments303['else'] = NULL;
$arguments303['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array305 = array();
$array306 = array (
);$array305['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array306);

$expression307 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments303['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array305)
					),
					$renderingContext
				);
$arguments303['then'] = ' ce-nowrap';

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output300 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['section'] = NULL;
$arguments314['partial'] = NULL;
$arguments314['delegate'] = NULL;
$arguments314['renderable'] = NULL;
$arguments314['arguments'] = array (
);
$arguments314['optional'] = false;
$arguments314['default'] = NULL;
$arguments314['contentAs'] = NULL;
$arguments314['partial'] = 'Media/Gallery';
$arguments314['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output313 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
				';
return $output313;
};
$arguments308 = array();
$arguments308['then'] = NULL;
$arguments308['else'] = NULL;
$arguments308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array311);
$array310['1'] = ' != \'below\'';

$expression312 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'below');};
$arguments308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments308['__thenClosure'] = $renderChildrenClosure309;

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output300 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output351 = '';

$output351 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['section'] = NULL;
$arguments361['partial'] = NULL;
$arguments361['delegate'] = NULL;
$arguments361['renderable'] = NULL;
$arguments361['arguments'] = array (
);
$arguments361['optional'] = false;
$arguments361['default'] = NULL;
$arguments361['contentAs'] = NULL;
$arguments361['partial'] = 'Header/All';
$arguments361['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
							';
return $output360;
};
$arguments355 = array();
$arguments355['then'] = NULL;
$arguments355['else'] = NULL;
$arguments355['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array357 = array();
$array358 = array (
);$array357['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array358);

$expression359 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments355['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression359(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array357)
					),
					$renderingContext
				);
$arguments355['__thenClosure'] = $renderChildrenClosure356;

$output354 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
$array366 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array366);
};
$arguments364 = array();
$arguments364['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output354 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output354 .= '
						</div>
					';
return $output354;
};
$arguments352 = array();

$output351 .= '';

$output351 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['section'] = NULL;
$arguments382['partial'] = NULL;
$arguments382['delegate'] = NULL;
$arguments382['renderable'] = NULL;
$arguments382['arguments'] = array (
);
$arguments382['optional'] = false;
$arguments382['default'] = NULL;
$arguments382['contentAs'] = NULL;
$arguments382['partial'] = 'Header/All';
$arguments382['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
								</div>
							';
return $output381;
};
$arguments376 = array();
$arguments376['then'] = NULL;
$arguments376['else'] = NULL;
$arguments376['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array379);

$expression380 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments376['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments376['__thenClosure'] = $renderChildrenClosure377;

$output375 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '
						';
return $output375;
};
$arguments370 = array();
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$arguments370['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array373 = array (
);$array372['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array373);

$expression374 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments370['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$arguments370['__thenClosure'] = $renderChildrenClosure371;

$output369 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '
					';
return $output369;
};
$arguments367 = array();
$arguments367['if'] = NULL;

$output351 .= '';

$output351 .= '
				';
return $output351;
};
$arguments317 = array();
$arguments317['then'] = NULL;
$arguments317['else'] = NULL;
$arguments317['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array348 = array();
$array349 = array (
);$array348['0'] = $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array349);

$expression350 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments317['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression350(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array348)
					),
					$renderingContext
				);
$arguments317['__thenClosure'] = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
						<div class="ce-bodytext">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['section'] = NULL;
$arguments326['partial'] = NULL;
$arguments326['delegate'] = NULL;
$arguments326['renderable'] = NULL;
$arguments326['arguments'] = array (
);
$arguments326['optional'] = false;
$arguments326['default'] = NULL;
$arguments326['contentAs'] = NULL;
$arguments326['partial'] = 'Header/All';
$arguments326['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output325 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
							';
return $output325;
};
$arguments320 = array();
$arguments320['then'] = NULL;
$arguments320['else'] = NULL;
$arguments320['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array322 = array();
$array323 = array (
);$array322['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array323);

$expression324 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments320['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression324(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array322)
					),
					$renderingContext
				);
$arguments320['__thenClosure'] = $renderChildrenClosure321;

$output319 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$array331 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array331);
};
$arguments329 = array();
$arguments329['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output319 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output319 .= '
						</div>
					';
return $output319;
};
$arguments317['__elseClosures'][] = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
								<div class="ce-bodytext">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['section'] = NULL;
$arguments345['partial'] = NULL;
$arguments345['delegate'] = NULL;
$arguments345['renderable'] = NULL;
$arguments345['arguments'] = array (
);
$arguments345['optional'] = false;
$arguments345['default'] = NULL;
$arguments345['contentAs'] = NULL;
$arguments345['partial'] = 'Header/All';
$arguments345['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output344 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
								</div>
							';
return $output344;
};
$arguments339 = array();
$arguments339['then'] = NULL;
$arguments339['else'] = NULL;
$arguments339['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array341 = array();
$array342 = array (
);$array341['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array342);

$expression343 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments339['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression343(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array341)
					),
					$renderingContext
				);
$arguments339['__thenClosure'] = $renderChildrenClosure340;

$output338 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= '
						';
return $output338;
};
$arguments333 = array();
$arguments333['then'] = NULL;
$arguments333['else'] = NULL;
$arguments333['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array336 = array (
);$array335['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.noWrap', $array336);

$expression337 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments333['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression337(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments333['__thenClosure'] = $renderChildrenClosure334;

$output332 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
					';
return $output332;
};

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output300 .= '

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['section'] = NULL;
$arguments391['partial'] = NULL;
$arguments391['delegate'] = NULL;
$arguments391['renderable'] = NULL;
$arguments391['arguments'] = array (
);
$arguments391['optional'] = false;
$arguments391['default'] = NULL;
$arguments391['contentAs'] = NULL;
$arguments391['partial'] = 'Media/Gallery';
$arguments391['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output390 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output390 .= '
				';
return $output390;
};
$arguments385 = array();
$arguments385['then'] = NULL;
$arguments385['else'] = NULL;
$arguments385['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array387 = array();
$array388 = array (
);$array387['0'] = $renderingContext->getVariableProvider()->getByPath('gallery.position.vertical', $array388);
$array387['1'] = ' == \'below\'';

$expression389 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'below');};
$arguments385['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression389(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);
$arguments385['__thenClosure'] = $renderChildrenClosure386;

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output300 .= '
			</div>
		';
return $output300;
};

$output290 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output290 .= '
';
return $output290;
};
$arguments288 = array();
$arguments288['name'] = NULL;
$arguments288['name'] = 'Main';

$output248 .= NULL;

$output248 .= '

';

return $output248;
}


}
#