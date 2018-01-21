var win = $(window);
var magnificPopup;

function initializeSlick() {
  $('.mobile-svg-wrapper').slick({dots: false, slidesToShow: 1, infinite: false, initialSlide: 1 });
  slickInitialized = true;
  var addNamesToArrows = function () {
    var activeSlide = $('.mobile-svg-wrapper').find('.slick-active');
    var prevSlide = activeSlide.prev('.slick-slide');
    var nextSlide = activeSlide.next('.slick-slide');
    var prevButton = $('.slick-prev');
    var nextButton = $('.slick-next');

    nextButton.html(nextSlide.attr('data-slide-name'));
    prevButton.html(prevSlide.attr('data-slide-name'));

    var currentSlide = $('.mobile-svg-wrapper').slick('slickCurrentSlide');

    if (currentSlide == 0) {
        var lastSlideText = $('.mobile-svg-wrapper .slick-slide:last-of-type').attr('data-slide-name');

        prevButton.html(lastSlideText);
    } else {
        if (currentSlide == ($('.mobile-svg-wrapper .slick-slide').length - 1)) {
            var firstSlideText = $('.mobile-svg-wrapper  .slick-slide:first-of-type').attr('data-slide-name');

            nextButton.html(firstSlideText);
        }
    }

  };
  addNamesToArrows();

  $('.slick-arrow').click(addNamesToArrows);
}

// initialize popup slider
$('.gallery-link').on('click', function (e) {
  var items = [];
  $($(this).attr('href')).find('.location-detail').each(function () {
    items.push({src: $(this)});
  });
  if (items.length === 0) {
    return false;
  }

  $.magnificPopup.open({
    items: items,
    type: 'inline',
    closeOnBgClick: false,
    gallery: {
      enabled: true
    },
    mainClass: 'locations-mfp mfp-zoom-in',
    disableOn: function () {
      if (win.width() < 768) {
        return false;
      }
      return true;
    },
    callbacks: {
      close: function () {
        $('.locations-back-to-top').addClass('hidden');
      },
      change: function () {
        // add classes to navigation bullets on slider change
        var self = this;
        setTimeout(function () {
          var magnificPopup = $.magnificPopup.instance;
          var slideNum = magnificPopup.index;
          $('.mfp-content .slick-dots li').removeClass('slick-active');
          $('[data-dotnumber="' + slideNum + '"]').addClass('slick-active');
        }, 0);
      }
    }
  });

  magnificPopup = $.magnificPopup.instance;
  // add navigation bullets to the popup slider
  if (magnificPopup.items.length > 1) {
    $('.mfp-content').prepend('<ul class="slick-dots" role="tablist"></ul>');
    for (var i = 0; i < magnificPopup.items.length; i++) {
      if (i === 0) {
        $('.mfp-content .slick-dots').append('<li class="slick-active" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation00" data-dotnumber="' + i + '" id="slick-slide0' + i + '"><button type="button" data-role="none" role="button" tabindex="0">1</button></li>');
      } else {
        $('.mfp-content .slick-dots').append('<li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation00" data-dotnumber="' + i + '" id="slick-slide0' + i + '"><button type="button" data-role="none" role="button" tabindex="0">1</button></li>');
      }
    }
    $('.mfp-content .slick-dots li').click(function (e) {
      magnificPopup.goTo(parseInt(e.currentTarget.dataset.dotnumber));
    });
  }
// initialize without slider if < 1024
  if (win.width() < 1024) {
    destroyPopupSlider();
  }
  e.preventDefault();
  e.stopPropagation();
  return false;
});

magnificPopup = $.magnificPopup.instance;

// destroy popup slider and show all slider items in the popup
function destroyPopupSlider() {
  // if there is no popup return
  if (!magnificPopup.items) {
    return;
  }
  // destroy popup slider only on screens < 1024
  if (win.width() < 1024 && $('.mfp-content .location-detail').length === 1) {
    // iterate over hidden slides and add them to popup
    magnificPopup.items.forEach(function (e) {
      if (e.src.context.className === 'location-detail mfp-hide' && (magnificPopup.items.length - 1) >= $('.mfp-content .location-detail').length) {
        $('.mfp-content').append(e.src.context.outerHTML);
        // show back to top button
        $('.locations-back-to-top').removeClass('hidden');
      }
    });
    $('.mfp-content .mfp-hide').removeClass('mfp-hide');
    // make only first location header visible
    $('.locations-mfp .location-detail .slide-location').css('display', '');
    $('.locations-mfp .location-detail:nth-child(2) .slide-location').css('display', 'block');
  }
  // remove items to make popup look like slider again
  else if (win.width() > 1024) {
    $('.mfp-content .location-detail').slice(1).remove();
    $('.locations-back-to-top').addClass('hidden');
  }
}

// back to top button
$('body').append('<div class="locations-back-to-top arrow-down hidden"></div>');

$('.locations-back-to-top').on('click touchstart', function () {
  $('.locations-mfp').stop().animate({
    scrollTop: 0
  }, 700, 'swing');
  $('body').stop().animate({
    scrollTop: 0
  }, 700, 'swing');
});
$('.mfp-close').click(function () {
  $('.locations-back-to-top').addClass('hidden');
});

win.resize(destroyPopupSlider);

var slickInitialized = false;
if (win.width() <= 768) {
  initializeSlick();
}
if (win.width() > 768 && !slickInitialized) {
  initializeSlick();
}

