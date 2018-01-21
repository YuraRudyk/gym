var chart = $('.ox-drive');
if (chart.length) {
  var interval      = chart.data('interval');
  var delay         = 800; // default
  var title         = chart.find('.title');
  var list          = chart.find('.charts');
  var listChild     = list.find('li');
  var timeAnimation = interval / listChild.length;

  setTimeout(function () {
    title.addClass('enable');
  }, delay);

  listChild.each(function (i) {
    var lineHeight = 20 + 20 * i;

    setTimeout(function () {
      listChild.eq(i).addClass('enable').find('.line').css({
        'height': lineHeight + 'px'
      });
    }, delay + 2000);

    delay += timeAnimation;
  });
}
