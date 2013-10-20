function IsMobile() {
  return $(window).width() <= 480;
}
function NotMobile() {
  return $(window).width() > 480;
}

//Handle scrollto
function handleScroll(top) {
  // what the y position of the scroll is
  var y = $(this).scrollTop();
  // whether that's below the form
  if (y >= top && NotMobile()) {
      // if so, ad the fixed class
      $('header.header').addClass('fixed');
  } else if (y >= top && IsMobile()) {
      //do nothing
  } else {
      // otherwise remove it
      $('header.header').removeClass('fixed');
  }
}

$(document).ready(function () {
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  if (!msie6) {
    var top = 25;
    $(window).scroll(function (event) {
        handleScroll(top);
    });
    handleScroll(top);
  }

	$( ".contact-article" ).load( "contact" );





});
