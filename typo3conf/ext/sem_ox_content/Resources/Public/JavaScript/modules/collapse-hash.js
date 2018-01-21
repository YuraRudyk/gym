var hash  = window.location.hash;

if(hash && $('.panel').length) {
  $('a[href="' + hash + '"]')
    .removeClass('collapsed')
    .closest('.panel')
    .find('.panel-collapse')
    .addClass('in');
}
