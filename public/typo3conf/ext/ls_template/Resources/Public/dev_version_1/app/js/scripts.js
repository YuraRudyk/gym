$(window).on("load", function() {
	initMatchHeight();
});
$(document).ready(function() {
	"use strict";
	//modile-menu
	$('.open-menu').on('click', function() {
	$('body').toggleClass('menu-opened');
		return false;
	});

	imgToBg();
	objectsSlider();
	svgReplace();
	rangeSlider();
}); // ready

// bg-image
function imgToBg() {
	$('.bg-img').each(function() {
		var $this = $(this);
		if ($this.find('> img').length && $this.find('> img').attr('src')) {
			$this.css('background-image', 'url(' + $this.find('> img').attr('src') + ')');
		};

	});
}

//objects-slider
function objectsSlider() {
	$('.slider-01').slick({
		arrows: true,
		dots: false,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		responsive: [
			{
			breakpoint: 768,
				settings: {
					arrows: false,
					dots: false,
				}
			}
		]
	});
	$('.slider-02').slick({
		arrows: true,
		dots: false,
		responsive: [{
			breakpoint: 767,
				settings: {
					arrows: false,
					dots: true
				}
			}
		]
	});
	$('.slider-03').slick({
		arrows: false,
		dots: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
			{
			breakpoint: 768,
				settings: {
					arrows: false,
					dots: true,
					slidesToShow: 1,
				}
			}
		]
	});
	$('.slider-04').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-04',
		dots: false,
		arrows: false,
		focusOnSelect: true
	});
	$('.slider-05').slick({
		arrows: false,
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
			{
			breakpoint: 768,
				settings: {
					arrows: false,
					dots: false,
					slidesToShow: 2,
				}
			},
		]
	});
}

function initMatchHeight() {
	var headerHeight = $('#header').outerHeight();
	$('.visual').css('margin-top', - (40 + headerHeight));
	
	$('.slider-01 .slick-slide').matchHeight();
	$('.slider-03 .slick-slide').matchHeight();
	$('.thumbnail-plans').matchHeight();
	$('.shop .thumbnail .main-img').matchHeight();
}

//Replace all SVG images with inline SVG
function svgReplace() {
	$('img.ico-svg').each(function() {
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		jQuery.get(imgURL, function(data) {
			var $svg = jQuery(data).find('svg');
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}
			$svg = $svg.removeAttr('xmlns:a');
			$img.replaceWith($svg);
		}, 'xml');

	});
}

// range
function rangeSlider() {
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 15000,
		values: [ 0, 15000 ],
		slide: function( event, ui ) {
			$( "#amount-1" ).text(ui.values[ 0 ]);
			$( "#amount-2" ).text(ui.values[ 1 ]);
		}
	});
	$( "#amount-1" ).text( $( "#slider-range" ).slider( "values", 0 ) );
	$( "#amount-2" ).text( $( "#slider-range" ).slider( "values", 1 ) );
};