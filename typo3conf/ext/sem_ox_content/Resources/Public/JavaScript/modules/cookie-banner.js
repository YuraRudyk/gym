  var dropCookie     = true;                     // false disables the Cookie, allowing you to style the banner
  var cookieDuration = 365;                      // Number of days before the cookie expires, and the banner reappears
  var cookieName     = 'complianceCookie';       // Name of our cookie
  var cookieValue    = 'on';                     // Value of cookie
  var win            = $(window);


  function setCookie(name, value, days) {
    var expires = '';

    if (days) {
      var date = new Date();

      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = '; expires=' + date.toGMTString();
    }

    if (dropCookie) {
      document.cookie = name + '=' + value + expires + '; path=/';
    }
  }

  function getCookieValue(name) {
    var nameEQ = name + '=';
    var ca     = document.cookie.split(';');

    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];

      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }

    return null;
  }

  function launchBanner() {
    var banner = $('.cookie-banner');
    var main   = $('main');
    var header = $('header');

    win.resize(function () {
      main.css('padding-top', header.height());
    });

    banner.removeClass('hidden');
    main.css('padding-top', header.height()); // add padding to main because header has become higher
    banner.find('.btn-ice-blue')
      .click(function (e) {
        e.preventDefault();

        setCookie(cookieName, cookieValue, cookieDuration);
        banner.addClass('hidden');
        main.css('padding-top', header.height()); // remove padding to main because header has become shorter
      });
  }

  win.load( function () {
    if (getCookieValue(cookieName) !== cookieValue && $('.cookie-banner').length) {
      launchBanner();
    }
  });
