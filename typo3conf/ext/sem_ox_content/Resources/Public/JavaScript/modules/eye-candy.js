var tempLG = 0;
var tempMD = 0;
var tempSM = 0;

var lineArrayLG = $('.paper-lg .bottom-line');
var lineArrayMD = $('.paper-md .bottom-line');
var lineArraySM = $('.paper-sm .bottom-line');

setTimeout(function () {
  $('.odometer .digit-one').toggleClass('digit-one-animated');
  $('.odometer .digit-ten').toggleClass('digit-ten-animated');
  $('.odometer .digit-hundred').toggleClass('digit-hundred-animated');
  $('.sun').toggleClass('sun-animated');
  $('.eye-candy').toggleClass('eye-candy-animated');
}, 1000);

setTimeout(function () {
  setInterval(function () {
    $(lineArrayLG[tempLG]).removeClass('hidden');
    tempLG++;
  }, 110);

  $('.paper-lg').animate({
    top: 20
  }, 2000, function () {
    setInterval(function () {
      $(lineArrayMD[tempMD]).removeClass('hidden');
      tempMD++;
    }, 110);

    $('.paper-md').animate({
      top: 14
    }, 2000, function () {
      setInterval(function () {
        $(lineArraySM[tempSM]).removeClass('hidden');
        tempSM++;
      }, 150);

      $('.paper-sm').animate({
        top: 106
      }, 1000, function () {
        // Animation complete.
      });
    });
  });
}, 800);


// Power DNS start
$('.eye-candy-clock.pink.circle').toggleClass('triggered');
$('.eye-candy-clock.eye-candy-green.circle').toggleClass('triggered');
// Power DNS end
