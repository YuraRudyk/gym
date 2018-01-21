$('[role="captcha-reload"]').on('click', function(e) {
  var captchaOuter = $($(this).data('target'));

  if (captchaOuter.length) {
    captchaOuter.find('img').attr('src', '/index.php?eID=captcha');
  }

  e.preventDefault();
});
