$('header .off-navigation .new-menu li').on('mouseover', function () {
    var height = $(this).find('.Inset').height();
    if (height > 0) {
        $('header .submenu').addClass('blured');
        $('header .submenu .whitepart').height(height + 60 );
        $('.jobs-dropdown').hide();
    }

    $('.submenu').css('top', Math.max($('header').height(), 65));
});

$('header .new-menu li').on('mouseleave', function () {
    $('header .submenu').removeClass('blured');
    $('header .submenu  .whitepart').height(0);
    $('.jobs-dropdown').show();
});

if ($('.new-menu .Inset li ul').length > 0) {
    $('.new-menu .Inset li ul').parent('li').addClass('parent');

    $('.new-menu .Inset li ul').parent('li').prev().addClass('beforeCat');
}

$('.nav-icon-mobile').click(function () {
    $(this).toggleClass('open');

    //global close menu in any lvl
    $('header .mobmenu').toggleClass('blured');
    $('.mobmenu .new-menu').css('transform', 'translateX(0)');
    $('.mobmenu .Inset').css('transform', 'translateX(-100vw)');

    //close search panel
    $('.search-toggler').removeClass('open-form');
});


function createMobileMenu() {
    if ($('.mobmenu .new-menu li ul').length > 0) {
        $('.mobmenu .new-menu li ul').parent('li').addClass('parent').each(function () {
            $(this).children('a').addClass('pan-trigger');
            $(this).children('span').addClass('pan-trigger');


            var backText = $(this).children('.pan-trigger').text();
            var link = $(this).children('.pan-trigger').attr('href');
            var activeClass = $(this).children('.pan-trigger').is('.active');

            if (activeClass == true) {
                var classname = 'active';
            } else {
                var classname = '';
            }

            if (typeof(link) != "undefined") {
                $(this).find('> .Inset').prepend('<li><a href="' + link + '" class="' + classname + '"><span>' + backText + ' overview</span></a></li>');
            }

            $(this).find('> .Inset').prepend('<a href="#" class="back">' + backText + '</a>');
        });
    }
}

createMobileMenu();

$('.pan-trigger').click(function() {


    var lvl = $(this).parents('ul').length;

    if (lvl > 1) {
        var back = lvl - 1;
    } else {
        var back = lvl;
    }

    $(this).closest('ul').css('transform', 'translateX(-' + back*100 + 'vw)');
    $(this).closest('li').children('ul').css('transform', 'translateX(' + lvl*100 + 'vw)');
});



$('.pan-trigger').click(function(e) {
    e.preventDefault();
});

$('.mobmenu .new-menu .back').click(function(e) {
    e.preventDefault();
    var lvl = $(this).parents('ul').length;

    if (lvl > 1) {
        var back = lvl - 2;
    } else {
        var back = lvl;
    }

    $(this).closest('ul').css('transform', 'translateX(-' + lvl*100 + 'vw)');
    $(this).closest('li').closest('ul').css('transform', 'translateX(' + back*100 + 'vw)');

});


$('.new-menu .tx-solr input').focus(function () {
    $('.new-menu li.search').addClass('active');
    $('.new-menu').addClass('active');
    $('.new-menu .search').css('width', $('.new-menu').width() + 130);
});
$('.new-menu .tx-solr input').focusout(function () {
    $('.new-menu li.search').removeClass('active');
    $('.new-menu').removeClass('active');
    $('.new-menu .search').css('width', '');
});

$('.search-toggler').click(function() {

    $('.search-toggler .tx-solr').css('top', Math.max($('header').height(), 65));

    $(this).toggleClass('open-form');
    $('.tx-solr input').focus();

    //hard close menu when search is open
    $('.nav-icon-mobile').removeClass('open');
    $('header .mobmenu').removeClass('blured');
    $('.parent').removeClass('activated');
    $('.Inset').removeClass('opened');
});

$('.cookie-banner .btn-ice-blue').click(function() {
    $('.search-toggler .tx-solr').css('top', 65);
});
