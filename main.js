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
  // Shift & A key together
  // 65 - A
  // 13 - Enter
  // 82 - R 
  if (e.shiftKey && e.which == 82) {
    $('.option').removeClass('btn-danger');
    $('.option').removeClass('btn-default');
    $('.option').removeClass('btn-primary');
    $('.answer').removeClass('btn-outline-primary');
    $('.answer').addClass('btn-success animated pulse');
  }
  if (e.which == 13) {

    window.location = $('a').prop('href');

  }
});