<?php

class Subscription_action_list_1de73db36f2b1feef6bf2bc3a84a6c5fd3c2fff7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '
	<div class="plans-column bg-img">
		<div class="container">
			<h2 class="ttl">Абонементи</h2>
		</div>
		<div class="plans-holder bg-img">
			<img src="images/bg-plans.png" alt="image description">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="thumbnail-plans white">
							<div class="head">
								<span class="price">80грн</span>
								<small>Разовий</small>
							</div>
							<ul class="list">
								<li>Одне заняття</li>
								<li>Консультація у тренера</li>
								<li>Фітнес/Бокс</li>
								<li>Басейн</li>
							</ul>
							<a href="#" class="btn btn-black">Замовити</a>
						</div>
					</div>
					<!-- /col -->
					<div class="col-6 col-md-3">
						<div class="thumbnail-plans black">
							<div class="head">
								<span class="price">320грн</span>
								<small>Місячний</small>
							</div>
							<ul class="list">
								<li>8 занятть</li>
								<li>Заняття з тренером</li>
								<li>Фітнес/Бокс</li>
								<li>Басейн</li>
							</ul>
							<a href="#" class="btn btn-white">Замовити</a>
						</div>
					</div>
					<!-- /col -->
					<div class="col-6 col-md-3">
						<div class="thumbnail-plans white">
							<div class="head">
								<span class="price">2000грн</span>
								<small>Річний</small>
							</div>
							<ul class="list">
								<li>Безліміт занять</li>
								<li>Заняття з тренером</li>
								<li>Фітнес/Бокс</li>
								<li>Басейн</li>
							</ul>
							<a href="#" class="btn btn-black">Замовити</a>
						</div>
					</div>
					<!-- /col -->
				</div>
			</div>
		</div>
	</div>

	<div class="message">
		<div class="container">
			<h2>Маєш питання? Замов Консультацію</h2>
			<a href="#modal-01" class="btn btn-white" data-toggle="modal">Замовити</a>
		</div>
	</div>

	<div class="modal fade" id="modal-01" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content thumbnail-plans black">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Введіть ваш номер телефону</h5>
					<a href="#" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="row">
							<div class="col-6"><input type="tel" placeholder="+380 95 00 00 000" class="form-control"></div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<input type="submit" value="Замовити" class="btn btn-white" data-dismiss="modal">
				</div>
			</div>
		</div>
	</div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['name'] = NULL;
$arguments1['name'] = 'Default';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return '
	<div class="plans-column bg-img">
		<div class="container">
			<h2 class="ttl">Абонементи</h2>
		</div>
		<div class="plans-holder bg-img">
			<img src="images/bg-plans.png" alt="image description">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="thumbnail-plans white">
							<div class="head">
								<span class="price">80грн</span>
								<small>Разовий</small>
							</div>
							<ul class="list">
								<li>Одне заняття</li>
								<li>Консультація у тренера</li>
								<li>Фітнес/Бокс</li>
								<li>Басейн</li>
							</ul>
							<a href="#" class="btn btn-black">Замовити</a>
						</div>
					</div>
					<!-- /col -->
					<div class="col-6 col-md-3">
						<div class="thumbnail-plans black">
							<div class="head">
								<span class="price">320грн</span>
								<small>Місячний</small>
							</div>
							<ul class="list">
								<li>8 занятть</li>
								<li>Заняття з тренером</li>
								<li>Фітнес/Бокс</li>
								<li>Басейн</li>
							</ul>
							<a href="#" class="btn btn-white">Замовити</a>
						</div>
					</div>
					<!-- /col -->
					<div class="col-6 col-md-3">
						<div class="thumbnail-plans white">
							<div class="head">
								<span class="price">2000грн</span>
								<small>Річний</small>
							</div>
							<ul class="list">
								<li>Безліміт занять</li>
								<li>Заняття з тренером</li>
								<li>Фітнес/Бокс</li>
								<li>Басейн</li>
							</ul>
							<a href="#" class="btn btn-black">Замовити</a>
						</div>
					</div>
					<!-- /col -->
				</div>
			</div>
		</div>
	</div>

	<div class="message">
		<div class="container">
			<h2>Маєш питання? Замов Консультацію</h2>
			<a href="#modal-01" class="btn btn-white" data-toggle="modal">Замовити</a>
		</div>
	</div>

	<div class="modal fade" id="modal-01" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content thumbnail-plans black">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Введіть ваш номер телефону</h5>
					<a href="#" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="row">
							<div class="col-6"><input type="tel" placeholder="+380 95 00 00 000" class="form-control"></div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<input type="submit" value="Замовити" class="btn btn-white" data-dismiss="modal">
				</div>
			</div>
		</div>
	</div>
';
};
$arguments3 = array();
$arguments3['name'] = NULL;
$arguments3['name'] = 'main';

$output0 .= NULL;

$output0 .= '
';

return $output0;
}


}
#