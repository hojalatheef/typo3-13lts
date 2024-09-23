jQuery(document).ready(function ($) {
//search input slide mobile
  $(".search-hide-btn").click(function () {
    $(this).toggleClass('active');
    $('.wrapper-search').toggleClass('visible');
    $('.search input').focus();
  });

//Scroll to top button
  var scrollTopBarTrue = false;
  //Check to see if the window is top if not then display button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
      if (scrollTopBarTrue == false) {
        scrollTopBarTrue = true;
      }
    } else {
      $('.scrollToTop').fadeOut();
      if (scrollTopBarTrue == true) {
        scrollTopBarTrue = false;
      }
    }
  });
  //Click event to scroll to top
  $('.scrollToTop').click(function () {
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
  });

  $(window).scroll(function () {
    $('.header-fixed').toggleClass('scroll-fixed', $(document).scrollTop() >= 120)
  });
});
