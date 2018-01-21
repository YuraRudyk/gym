if ($('.premise-eye-candy').length === 1) {
  var circleArray = $('.first-circle.premise-circle'); // get all circles
  var animationDuration = 6;
  circleArray.each(function (idx, el) { // go through each circle
    var animationDurationString = animationDuration + 's';
    var cx = $(el).context.cx.baseVal.value;
    var cy = $(el).context.cy.baseVal.value;
    var origin = cx + 'px ' + cy + 'px';
    $(el).css({'transform-origin': origin, 'animation-duration': animationDurationString, '-webkit-animation-name': 'pulsate', 'animation-name': 'pulsate'});
    animationDuration += 0.3;
  });
}
