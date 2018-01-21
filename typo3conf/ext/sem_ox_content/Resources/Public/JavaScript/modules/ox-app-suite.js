var chart = $('.app-suite');
if (chart.length) {
  var delay = 800;
  
  setTimeout(function () {
    chart.addClass('triggered');

    if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
      var circleSvg1 = $('#mask-hole-1');
      circleSvg1.attr("r",0);
      setTimeout(function(){
        setInterval(function(){
          if(circleSvg1.attr('r') < 175){
            circleSvg1.attr("r", parseInt(circleSvg1.attr("r"))+1);
          }
        }, 1);
      }, 2000);

      var circleSvg = $('#mask-hole-2');
      circleSvg.attr("r",0);
      setTimeout(function(){
        setInterval(function(){
          if(circleSvg.attr('r') < 130){
            circleSvg.attr("r", parseInt(circleSvg.attr("r"))+1);
          }
        }, 1);
      }, 4000);
      circleSvg.attr("r",1);
    }
  }, delay);
}
