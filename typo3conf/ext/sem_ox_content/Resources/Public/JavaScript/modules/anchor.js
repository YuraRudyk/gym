$("a[href*='#c']:not(a[href*='#coll']):not(a[href*='#colo'])").click(function (event) {
  var href     = $(this).attr('href');
  var index    = href.indexOf('#');
  var id       = href.substring(index);
  var block    = $(id);

  if (block.length) {
    event.preventDefault();
    $("html:not(:animated), body:not(:animated)")
    .animate({scrollTop: block.offset().top - $('header').outerHeight()}, 1500);
  }
})

// anchor animation
var hash  = window.location.hash;

if (hash.length) {
  var block = $(hash);
  $('.jobs-dropdown .active').removeClass('active');
  $('[data-id="' + hash.substr(1) + '"]').addClass('active');
  if (block.length) {
    $("html:not(:animated), body:not(:animated)")
    .animate({scrollTop: block.offset().top - $('header').outerHeight()}, 1500);
  }
}
