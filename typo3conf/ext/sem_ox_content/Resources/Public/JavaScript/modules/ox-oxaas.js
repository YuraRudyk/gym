var chart = $('.ox-oxaas');
if (chart.length) {
  var bc          = chart.find('.billion-content');
  var numbers     = chart.data('number').split(';');
  var year        = chart.data('year');
  var numberList  = bc.find('span');
  var current     = 9;
  var delay       = 800;
  var date        = new Date();
  var currentYear = date.getFullYear();
  var clock       = chart.find('.oxaas-year').FlipClock(year, {
    clockFace: 'Counter'
  });
  clock.increment();

  setTimeout(function () {
    var interval = setInterval(function () {
      year++;
      chart.find('.oxaas-year').addClass('enable');
      clock.setValue(year);
      if (year === currentYear) {
        window.clearInterval(interval);
      }
    }, 550);

    chart.find('.soplia').parent('#svg-soplia-wrapper').addClass('animated');
    bc.find('p').addClass('enable');
    setTimeout(count, 1000);
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
      var shadow = chart.find('#cut-shadow rect').attr('width', 0);
      var path = chart.find('#cut-path rect').attr('width', 0).attr('x', 0);

      var pInterval = setInterval(function () {
        var pWidth = parseInt(shadow.attr('width'));
        if (pWidth === 344) {
          window.clearInterval(pInterval);
        }
        shadow.attr('width', pWidth + 1);
        path.attr('width', pWidth + 1);
      }, 8);
    }
  }, delay);

  function count() {
    if (current >= 0) {
      var num      = numberList.eq(current).addClass('enable');
      var start    = 0;
      var interval = setInterval(function () {
        var eq = Number(numbers[current]);

        if (start === eq || isNaN(eq)) {
          window.clearInterval(interval);
          current--;
          count();
        } else {
          ++start;
          num.text(start);
        }
      }, 80);
    }
  }

}
