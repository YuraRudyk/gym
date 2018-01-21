$('.file').each(function () {
  var item     = $(this);
  var input    = item.find('input[type="file"]');
  var fileName = item.find('.file-name');
  var fileBtn  = item.find('.file-btn');

  fileName.add(fileBtn).click(function () {
    input.click().change(function () {
      var name = $(this).val().split('/').pop().split('\\').pop();
      fileName.text(name);
    });
  });
});
