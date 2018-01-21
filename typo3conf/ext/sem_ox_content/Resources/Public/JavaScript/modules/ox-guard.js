var chart = $('.ox-guard');
if (chart.length) {
  var time          = chart.data('time').split(';');
  var interval      = chart.data('interval');
  var r             = chart.find('circle').attr('r');
  var circleLength  = Math.PI * (r * 2);
  var startPosition = 271; // start with top point
  var delay         = 250; // default
  var list          = chart.find('.list');
  var listBlock     = chart.find('ul');
  var listChild     = listBlock.find('li');
  var title         = chart.find('.title');
  var words = document.getElementsByClassName('word');
  var wordArray = [];
  var currentWord = 0;
  var letterList = 0;

  setTimeout(function () {
    title.addClass('show');
  }, delay);

  chart.find('circle').each(function (i) {
    var num           = parseFloat(time[i]);
    var sectorLength  = circleLength - circleLength / 100 * num;
    var timeAnimation = interval / 100 * num + 200 * i;

    delay += timeAnimation;
    startPosition += 3.6 * num;

    if (i === time.length - 1) {
      setTimeout(function () {
        chart.find('svg').css({
          '-webkit-transform': 'scale(1.5, 1.5)',
          '-moz-transform': 'scale(1.5, 1.5)',
          'transform': 'scale(1.5, 1.5)'
        });

        title.addClass('changed');
      }, delay);
    }

    setTimeout(function () {
      if (i === time.length - 1) {
        setTimeout(function () {
          listChild.removeClass('current');
          list.addClass('all');
          listBlock.css({
            '-webkit-transform': 'translate(-50%, -50%)',
            '-moz-transform': 'translate(-50%, -50%)',
            'transform': 'translate(-50%, -50%)'
          });
          listChild.find('.letter').removeClass('in enable');

          setTimeout(function () {
            listChild.addClass('current');
            for (var b = 0; b < wordArray.length; b++) {
              for (var k = 0; k < wordArray[b].length; k++) {
                animateLetterIn(wordArray[b], k);
              }
            }
          }, 100);
        }, timeAnimation + 1000);
      }

      listChild.removeClass('current').eq(i).addClass('current');
      for (var k = 0; k < wordArray[i].length; k++) {
        animateLetterIn(wordArray[i], k);
      }
    }, delay - timeAnimation);

    splitLetters(words[i]);
  });

  function animateLetterIn(arr, k) {
    setTimeout(function () {
      arr[k].className = 'letter in enable';
    }, k * 25);
  }

  function splitLetters(word) {
    var letters = [];
    var currnetSpan = '';
    var content = word.innerHTML;

    word.innerHTML = '';
    for (var i = 0; i < content.length; i++) {
      if (content.charAt(i) === ' ' || i === 0) {
        currnetSpan = document.createElement('span');
        word.appendChild(currnetSpan);
      }
      var letter = document.createElement('span');
      letter.className = 'letter';
      letter.innerHTML = content.charAt(i);
      currnetSpan.appendChild(letter);
      letters.push(letter);
    }
    wordArray.push(letters);
  }
}
