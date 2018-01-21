if ($('body').find('#video-section').length > 0) {

    var imgBg = $('#image-src').data('image');
    var videoBg = $('#video-src').data('video');
    var height = $('#height').data('height');


    if (height == 'full') {
        $('#video-section').addClass('fullheight');
    } else {
        $('#video-section').addClass('height' + height);
        height = height + 'px';
    }

    if (videoBg.search('https://vimeo.com/') >= 0 ) {
        var videoId = videoBg.split('.com/').pop();
        var options = {
            videoId: videoId,
            width: $(window).width(),
            wrapperZIndex: 1,
            parameters: {
                /* Vimeo API Options Here */
                background: 1
            }
        };
        $('#video-section').vimelar(options);

    } else if (videoBg.search('youtube.com') >= 0 ) {
        var videoId = videoBg.split('watch?v=').pop();
        var video = '<iframe class="videobg" src="https://www.youtube.com/embed/' + videoId + '?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $('#video-section').prepend(video);
    } else {
        var video = '<video class="videobg internal" width="100%"  autoplay="" loop="" preload="metadata" ><source src="' + window.location.origin + videoBg + '"></video>';
        $('#video-section').prepend(video);
    }



    function videoFhSize() {
        var proportion = ($('#video-section.fullheight').width()) / ($('#video-section.fullheight').height());
        var videoProp = ($('#video-section.fullheight .videobg').width()) / ($('#video-section.fullheight .videobg').height());

        if (proportion < videoProp) {
            $('#video-section.fullheight .videobg').width('auto');
            $('#video-section.fullheight .videobg').height($('#video-section.fullheight').height());
        } else {
            $('#video-section.fullheight .videobg').width($('#video-section.fullheight').width());
            $('#video-section.fullheight .videobg').height('auto');
        }
    }

    function setHeight() {
        var videoProp = ($('#video-section .videobg').width()) / ($('#video-section .videobg').height());
        var width = $('#video-section').width();
        var heightN = width/videoProp;

        $('#video-section .videobg').height(heightN + 'px');
        $('#video-section .videobg').width(width);

    }

    setTimeout(function() {
        $('#video-section').css('background-image', 'url("' + imgBg + '")');
        $('#video-section').css('height', height);
        videoFhSize();
        setHeight();
    }, 1200);

    $(window).resize(function() {
        if ($('#video-section').is('.fullheight')) {
            videoFhSize();
        } else {
            setHeight();
        }
    });

}