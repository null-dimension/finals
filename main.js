$(document).ready(function () {
  $('.option').on('click', function () {
    $(this).removeClass('btn-outline-primary');
    $(this).addClass('btn-default');
    var instance = $(this);
    setTimeout(function () {
      instance.removeClass('btn-default');
    }, 1000);
    setTimeout(function () {
      instance.addClass('btn-primary');
    }, 500);
    setTimeout(function () {
      instance.removeClass('btn-primary');
      if (instance.hasClass('answer'))
        instance.addClass('btn-success animated pulse');
      else
        instance.addClass('btn-danger animated shake');
    }, 2000);
  });
});
$(document).on('keydown', function (e) {
  console.log(e.which);
  // Shift & R key together
  // 65 - A
  // 13 - Enter
  // 82 - R - Reveal Answer
  if (e.shiftKey && e.which == 82) {
    $('.option').removeClass('btn-danger');
    $('.option').removeClass('btn-default');
    $('.option').removeClass('btn-primary');
    $('.answer').removeClass('btn-outline-primary');
    $('.answer').addClass('btn-success animated pulse');

    $('#answerModal').modal('show');
  }

  // Option A
  if (e.shiftKey && e.which == 65) {
    
    $('.option-a').trigger('click');
  }
  // Option B
  if (e.shiftKey && e.which == 66) {
    
    $('.option-b').trigger('click');
  }
  // Option C
  if (e.shiftKey && e.which == 67) {
    
    $('.option-c').trigger('click');
  }
  // Option D
  if (e.shiftKey && e.which == 68) {
    
    $('.option-d').trigger('click');
  }

  if (e.which == 13 && $('a').length != 0) {

    window.location = $('a').prop('href');

  }
});