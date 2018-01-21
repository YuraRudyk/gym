var chart = $('.ox-mobile-apps');
if (chart.length) {
  var delay    = 800; // default

  setTimeout(function () {
    chart.addClass('enable').find('#phone-half').delay(1000).fadeIn(10);
  }, delay);
}
