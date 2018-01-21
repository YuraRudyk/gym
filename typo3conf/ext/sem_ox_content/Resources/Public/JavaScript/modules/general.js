/*
* Magnific-popup init
*/

$('.popup-modal').magnificPopup({
  type: 'inline',
  gallery: {
    enabled: true,
    preload: [
      0, 2
    ],
    navigateByImgClick: true
  },
  mainClass: 'mfp-zoom-in',
  fixedContentPos: true
});

$('.video-popup').magnificPopup({type: 'iframe', fixedContentPos: true});

// $('.img-popup').magnificPopup({
//   type: 'image',
//   fixedContentPos: true
// });

/*
 * Fix column height
 */
function columnFix() {
  var columns = $('.news-column, .jobs-column');
  var parentContainer = $('.home-hub');

  columns.innerHeight('auto');

  if (window.innerWidth > 768) {
    var heightParentContainer = parentContainer.innerHeight();

    columns.innerHeight(heightParentContainer);
  }
}

$(window).on('load resize', function () {
  columnFix();
});

// fix bootstrap accordeon for agenda
var agenda = $('.sem-ox-agenda');
if (agenda.length) {
  agenda.find('.panel-collapse').on('shown.bs.collapse', function () {
    $('html:not(:animated), body:not(:animated)').animate({
      scrollTop: $(this).offset().top - 125
    }, 500);
  });
}

//* *********************************
// Lightbox for Images in Text&Media
//* *********************************
$('.popup-gallery').each(function () { // the containers for all your galleries
  $(this).magnificPopup({
    delegate: '.img-popup', // child items selector, by clicking on it popup will open
    type: 'image',
    mainClass: 'mfp-zoom-in newsroom-mfp text-media-zoom-in',
      // verticalFit: true,
    titleSrc: function (item) {
      return item.el.attr('title');
    },
    gallery:{enabled:true},
    callbacks: {
      open: function () {
        $('.mfp-close').text('');
        if (this.items.length === 1 && this.items[0].el[0].title === '') {
          $('.mfp-bottom-bar').hide();
        }
      }
    }
  });
});