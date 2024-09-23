function showContent(el) {
  var windowHeight = jQuery( window ).height();
  $(el).each(function(){
    var thisPos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
    if (topOfWindow + windowHeight - 100 > thisPos ) {
      $(this).addClass("fadeIn");
    }
  });
}
$(document).ready(function(){
  showContent('.fade');
});

// if the image in the window of browser when scrolling the page, show that image
$(window).scroll(function() {
  showContent('.fade');
});