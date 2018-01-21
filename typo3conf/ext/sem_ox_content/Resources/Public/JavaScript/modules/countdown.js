
var countdown = $('.countdown');

var countdownFunc = function (element, time, timezone) {
  var nextSummit = moment.tz(time, timezone);

  $(element).countdown(nextSummit.toDate(), function (event) {
    var el   = $(element);
    var day  = el.find('.day');
    var hour = el.find('.hour');
    var min  = el.find('.min');
    var sec  = el.find('.sec');

    day.html(event.strftime('%D :'));
    hour.html(event.strftime('\xa0%H :'));
    min.html(event.strftime('\xa0%M :'));
    sec.text(event.strftime('\xa0%S'));
  });
};

countdown.each(function (i, e) {
  var time     = $(this).data('summit-start');
  var timezone = $(this).data('summit-timezone');
  countdownFunc(e, time, timezone);
});
