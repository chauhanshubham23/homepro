$(window).scroll(function() {
    if ($(document).scrollTop()) {
      $('nav').addClass('shrink');
    } else {
      $('nav').removeClass('shrink');
    }
  });

 
  