$(window).load(function () {
  var body = $('body');
  var grid = $('.grid');

  $('.grid').masonry({
    columnWidth: '.grid-sizer',
    itemSelector: '.grid-item',
    stamp: '.stamp'
  });


  $('.img-responsive').on('load', function () {
    grid.masonry('layout');
  });

  $('.img-responsive').on('load', function () {
    grid.masonry('layout');
  });

  grid.imagesLoaded().progress( function () {
    grid.masonry('layout');
  });

  // get images for flickr gallery
  function getImagesFromFlickr() {
    $('div.grid div.flickr-album').click(function () {
      // add loader
      body.append('<div class="mfp-bg"><div class="mfp-preloader">Loading...</div></div>');

      var self               = $(this);
      var flikrAjaxFinished  = true;
      var dataAlbum          = { type: 5545 };
      var windowWidth        = $(window).width();

      dataAlbum.tx_oxnewsroom_pi1 = {
        controller: 'Newsroom',
        action: 'ajaxFlickrAlbumPhotos',
        id: $(this).attr('data-id'),
        windowWidth: windowWidth
      };

      if (flikrAjaxFinished) {
        flikrAjaxFinished = false;

        $.ajax({
          method: 'get',
          url: 'index.php?',
          dataType: 'json',
          data: dataAlbum,
          success: function (data) {
            if (!data) return;

            var zIndex = 2; // add z-index to make only first item clickable
            for (var item in data.items) {
              if (Object.prototype.hasOwnProperty.call(data.items, item)) {
                zIndex -= 1;
                self.append('<a href="' + data.items[item].url + '" class="gallery-hidden" style="z-index:' + zIndex + ';"></a>');
              }
            }

            self.find('.gallery-hidden').magnificPopup({
              type: 'image',
              gallery: {
                enabled: true,
                preload: [0, 2],
                navigateByImgClick: true
              },
              mainClass: 'mfp-zoom-in newsroom-mfp',
              fixedContentPos: true,
              callbacks: {
                open: function () {
                  $('.mfp-bottom-bar').append();
                  self.closest('.grid-item').find('.news-footer').clone().appendTo('.mfp-bottom-bar');
                  $('.mfp-close').empty();
                }
              }
            });

            self.children('.gallery-hidden:nth-child(2)').triggerHandler('click');
          },
          complete: function () {
            // disable future ajax requsts
            self.off('click');
            $('.mfp-bg:last-child').remove();
          }
        });
      }
    });
  }

  getImagesFromFlickr();

  // back to top button
  $('.back-to-top').click(function () {
    var offset  = $(this).closest('.newsroom-wrapper').offset().top - 50;
    $('html, body').stop().animate({
      scrollTop: offset
    }, 700, 'swing');
  });

  // load more items
  $('.newsroom-load-more').click(function () {
    var config = { type: 5544 };
    config.tx_oxnewsroom_pi1 = {
      controller: 'Newsroom',
      action: 'ajaxShowMore',
      page: grid.attr('data-page'),
      filterBy: grid.attr('data-filter'),
      sortBy: grid.attr('data-sort'),
      recordUid: grid.attr('data-uid')
    };

    $.ajax({
      method: 'get',
      url: 'index.php',
      dataType: 'json',
      data: config,
      success: function (data) {
        var $data = $(data.html);
        grid.append($data).masonry('appended', $data);
        grid.attr('data-page', data.page);
        // refresh masonry
        $('.img-responsive').on('load', function () {
          grid.masonry('layout');
        });
        // init video popup
        $('.video-popup').magnificPopup({
          type: 'iframe',
          fixedContentPos: true
        });
        // init img popup
        $('.img-popup').magnificPopup({
          type: 'image',
          fixedContentPos: true
        });

        getImagesFromFlickr();

        if (data.isLast) {
          $('div.load-more').hide();
        }
      }
    });
  });

  // count clicks
  $('div.grid a.news-footer, .video-popup, a.increase-reviews').click(function () {
    var data = {
      id: $(this).attr('data-id')
    };

    $.ajax({
      method: 'post',
      url: 'index.php?eID=mark_viewed',
      dataType: 'json',
      data: data,
      success: function () {
      }
    });
  });
});
