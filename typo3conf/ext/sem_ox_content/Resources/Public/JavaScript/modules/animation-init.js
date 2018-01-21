// slide-right slide-left animation

$(window).on('scroll load resize', function () {
    if ($(window).width() > 768) {
        var docViewTop = window.pageYOffset + window.innerHeight;
        $('.slide-left, .slide-right, .slide-up').each(function (i, e) {
            var elemTop = $(this).offset().top + 200;
            elemTop < docViewTop && $(this).addClass('animated');
        });
    }
});