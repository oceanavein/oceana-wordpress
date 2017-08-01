jQuery(document).ready(function($) {

  var stickyHeader = function() {
    var body = $('body');
    var header = $('.header');
    var headerPos = header.offset();
    var headerTopPos = headerPos.top;

    $(window).on('scroll', function(e) {
      var topPos = $(window).scrollTop();
      if(topPos >= headerTopPos) {
        header.addClass('js-is-sticky');
        body.addClass('js-sticky-header');
      } else {
        header.removeClass('js-is-sticky');
        body.removeClass('js-sticky-header');
      }
    });
  };

  var mobileNav = function() {
    var body = $('body');
    var windowWidth = $(window).width();
    var header = $('.header');
    var mobileNavTrigger = $('.hamburger');
    var mobileNavContainer = $('.menu');
    var mobileNavParentItem = $('.main-nav .menu > li > a');

    mobileNavTrigger.bind('click', function(e){
      e.preventDefault();
      $(this).toggleClass('js-is-active');
      body.toggleClass('js-no-scroll');
      header.toggleClass('js-is-sticky');
      mobileNavContainer.toggleClass('js-is-visible');
    });

    if(windowWidth < 1000) {
      mobileNavParentItem.bind('click', function(e){
        e.preventDefault();
        $(this).parent().find('.sub-menu').slideToggle();
        $(this).parent().toggleClass('js-is-active');
      });
    }
  }

  // stickyHeader();
  // mobileNav();

});
