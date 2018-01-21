// SVG fixing for Safari ---------------------------
if (navigator.userAgent.toLowerCase().indexOf('safari/') > -1) {
  var href = window.location.href;
  $('svg [clip-path*="url"]').each(function () {
    var item = $(this);
    var attr = item.attr('clip-path');
    var id   = attr.slice(4,-1);
    item.attr('clip-path', 'url(' + href + id + ')');
  });
  $('svg [fill*="url"]').each(function () {
    var item = $(this);
    var attr = item.attr('fill');
    var id   = attr.slice(4,-1);
    item.attr('fill', 'url(' + href + id + ')');
  });
  $('svg [mask*="url"]').each(function () {
    var item = $(this);
    var attr = item.attr('mask');
    var id   = attr.slice(4,-1);
    item.attr('mask', 'url(' + href + id + ')');
  });
}
// END SVG ---------------------------------------------
