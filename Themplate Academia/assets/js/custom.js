// JS

jQuery(document).ready(function ($) {

  /**
   * Форма "Появились вопросы?"
   */
  var $boxQuestion = $('#question');
  var $formQuestion = $('form', $boxQuestion);
  $formQuestion.submit(function (event) {
      event.preventDefault();

      $('button', $formQuestion).prop("disabled", true);

      // AJAX запрос
      ajaxs(
          'form_question',
          {
              name_client: $formQuestion.find('.question-form__input--name').val(),
              tel_client: $formQuestion.find('.question-form__input--tel').val()
          }
      ).done(function (response) {
          if (response.ok) {
              jQuery(".question-thanks", $boxQuestion).show(200);
          }
      }).always(function () {
          $('button', $formQuestion).prop("disabled", false);
      });
  });

  /**
   * Форма "Остались вопросы?"
   */
  var $boxQuestion1 = $('#question1');
  var $formQuestion1 = $('form', $boxQuestion1);
  $formQuestion1.submit(function (event) {
      event.preventDefault();

      $('button', $formQuestion1).prop("disabled", true);

      // AJAX запрос
      ajaxs(
          'form_question1',
          {
              name_client: $formQuestion1.find('.question-form__input--name').val(),
              tel_client: $formQuestion1.find('.question-form__input--tel').val()
          }
      ).done(function (response) {
          if (response.ok) {
              jQuery(".question-thanks", $boxQuestion1).show(200);
          }
      }).always(function () {
          $('button', $formQuestion1).prop("disabled", false);
      });
  });


  /**
   * Форма "Методичка"
   */
  var $boxManuals = $('#manuals');
  var $formManuals = $('form', $boxManuals);
  $formManuals.submit(function (event) {
      event.preventDefault();

      // AJAX запрос
      ajaxs(
          'form_manuals',
          {
              name_client: $formManuals.find('[type="text"]').val(),
              tel_client: $formManuals.find('[type="tel"]').val(),
              email_client: $formManuals.find('[type="email"]').val()
          }
      ).done(function (response) {
          if (response.ok) {
              jQuery(".manuals-form", $boxManuals).hide(200);
              jQuery(".manuals-answer", $boxManuals).show(200);
          }
      }).always(function () {
          $('button', $formManuals).prop("disabled", false);
      });

  });

});

