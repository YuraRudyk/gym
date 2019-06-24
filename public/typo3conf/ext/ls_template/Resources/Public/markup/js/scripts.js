$(window).on("load", function() {
	initMatchHeight();
});

var minPrice = 0;
var maxPrice = 100000;

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
	videoPlay();
    filterProducts();
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
	$('.slider-06').slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
			{
			breakpoint: 991,
				settings: {
					arrows: true,
					dots: false,
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
			breakpoint: 768,
				settings: {
					arrows: false,
					dots: true,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
		]
	});
}
// initMatchHeight
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
		max: 100000,
		values: [ 0, 100000 ],
		slide: function( event, ui ) {
			$( "#amount-1" ).text(ui.values[ 0 ]);
			$( "#amount-2" ).text(ui.values[ 1 ]);

            minPrice = ui.values[ 0 ];
            maxPrice = ui.values[ 1 ];

            runFilter();
		}
	});
	$( "#amount-1" ).text( $( "#slider-range" ).slider( "values", 0 ) );
	$( "#amount-2" ).text( $( "#slider-range" ).slider( "values", 1 ) );
};
//video-play
function videoPlay() {
	$('.btn-play, .embed-responsive').on('click', function() {
		var $movie = $(this).closest('.control').find('video');
		var movie = $movie.get(0);
		if ($(this).closest('.control').is('.video-play')) {
			movie.pause();
			// movie.removeAttribute("controls");
			$(this).closest('.control').removeClass('video-play');
			$('body').removeClass('video-play');
		}else{
			movie.play();
			// movie.setAttribute("controls","controls");
			$(this).closest('.control').addClass('video-play');
			$('body').addClass('video-play');
		}
		return false;
	});
}

//filter by category
function filterProducts() {
    $('.category-checkbox').on('click', function() {
		runFilter();
    });
}

//run Filter
function runFilter() {
    var selectedCategories = [];

    $("input:checked").each(function() {
        selectedCategories.push($(this).data( "category" ))
    });

    $('.product-item').each(function() {
        $(this).removeClass('hidden');

        var categoriesArray = $(this).data("category").split(',').map(Number);
        var show = [];

        $(selectedCategories).each(function(index) {
            show.push(categoriesArray.includes(selectedCategories[index]));
        });

        var currentPrice = $(this).data("price");

        if (show.length > 0 && !(show.includes(true)) || !(currentPrice >= minPrice && currentPrice <= maxPrice)) {
            $(this).addClass('hidden');
        }
    });
}