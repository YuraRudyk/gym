// check checkboxes on text input change
$('.survey-group input[type="text"]').on('change keyup', function () {
  var textInput = $(this);
  var text      = textInput.val();
  var checkBox  = textInput.siblings('input.form-check-input');

  if ( !text ) {
    checkBox.prop('checked', false);
  } else {
    checkBox.prop('checked', true);
  }
});

// add event listeners to every checkbox and validate every question
var submit          = $('form[name="survey"] input[type="submit"]');
var mandatoryFields = $('.survey-group .mandatory');

mandatoryFields.each(function () {
  var self     = $(this);
  var question = self.find('.question');

  self.find('input[type=checkbox]').on('change', function () {
    /*
     * Mandatory field must have at least one checked field
     * because the survey wont submit
    */
    var checkBoxChecked = self.find('input[type=checkbox]:checked').length;

    if (checkBoxChecked) {
      question.removeClass('survey-error');
      submit.prop('disabled', false);
    } else {
      question.addClass('survey-error');
      submit.prop('disabled', true);
    }
  });
});

// add event listener to submit button and validate on submit
submit.on('click', function (event) {
  event.preventDefault();
  var mandatory = 0;

  mandatoryFields.each(function () {
    var self               = $(this);
    var questionGroup      = self.find('.question');
    var checkBoxChecked    = self.find('input[type=checkbox]:checked').length;
    var otherQuestionField = self.find('input[type=checkbox]:checked').siblings('.other');

    if (otherQuestionField.length === 1 && !otherQuestionField.val()) {
      questionGroup.addClass('survey-error');
      submit.prop('disabled', true);
      // enable submit button when text input is not empty
      otherQuestionField.on('keyup change', function () {
        submit.prop('disabled', false);
      });
    } else if (checkBoxChecked) {
      questionGroup.removeClass('survey-error');
      mandatory += 1; // count the number of answered mandatory questions
    } else {
      questionGroup.addClass('survey-error');
      submit.prop('disabled', true);
    }

    // submit only if all mandatory questions are answered
    if ($('.mandatory').length === mandatory) {
      $('form[name="survey"]').submit();
      submit.prop('disabled', false);
    }
  });
});
