window.onload = function () {
  function speed(container, param) {
    var speed       = container.data('speed');
    var changeSpeed = container.data('change-speed');
    var autoplay    = true;
    var time        = 6000;
    var speedChange = 300;

    if (speed > 0) {
      time = speed;
    }

    if (speed == 0) {
      autoplay = false;
    }

    if (changeSpeed > 0) {
      speedChange = changeSpeed;
    }

    $.extend(true, param, {
      autoplay: autoplay,
      autoplaySpeed: time,
      speed: speedChange
    });
  }

  // Main slider -----------------------------
  $('.owl-carousel').each(function (index) {
    var container = $(this);
    var adaptiveHeight = $('.owl-carousel').closest('.testimonials').length > 0;

    param         = {
      slidesToShow: 1,
      dots: true,
      adaptiveHeight: adaptiveHeight,
      prevArrow: '<div class="slick-prev"></div>',
      nextArrow: '<div class="slick-next"></div>'
    };

    speed(container, param);
    container
      .on('init', function () {
        if (index + 1 == $('.owl-carousel').length) window.ALL_SLIDERS_FIRED = true;
      })
      .slick(param);
  });
  // End main slider -------------------------

  // Cover flow slider -----------------------
  $('.cover-flow-wraper').each(function () {
    var container     = $(this);
    var slider        = container.find('.slider-cover-flow');
    var current       = container.find('.current');
    var array         = container.find('.array').text(slider.find('.item').length);
    var isSimpleClick = false;
    var param         = {
      slidesToShow: 1,
      centerMode: true,
      centerPadding: '20%',
      prevArrow: '<div class="slick-prev"></div>',
      nextArrow: '<div class="slick-next"></div>'
    };

    speed(slider, param);

    slider
      .on('init', function (slick) {
        var itemHeight = slider.find('.slick-slide:not(.slick-center) img').height();
        slider.find('.slick-arrow').css('top', itemHeight * 0.6);
        container.find('.counter').css('top', itemHeight + 35);
      })
      .slick(param)
      .on('afterChange', function (event, slick, currentSlide) {
        current.text(currentSlide + 1);
      });
  });
};

$('.slider-cover-flow .video-popup')
  .mousedown(function () {
    isSimpleClick = true;
  })
  .mousemove(function () {
    isSimpleClick = false;
  })
  .click(function (event) {
    event.preventDefault();
    if (!isSimpleClick) {
      event.stopImmediatePropagation();
      event.stopPropagation();
    }
  });
