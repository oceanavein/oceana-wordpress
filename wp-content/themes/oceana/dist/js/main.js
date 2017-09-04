jQuery(document).ready(function($) {

  var mobileNav = function() {
    var mobileNavTrigger = $('.mobile-btn');
    var mobileNavContainer = $('.menu');
    var mobileNavBtnLabel = $('.mobile-btn__label');

    mobileNavTrigger.bind('click', function(e) {
      e.preventDefault();
      $(this).toggleClass('js-is-active');
      mobileNavContainer.toggleClass('js-is-visible');
      mobileNavBtnLabel.toggleClass('js-is-hidden');
    });
  }

  var symptomsNav = function() {
    var navLink = $('.symptoms-nav a');
    var contentSection = $('.symptoms__item');

    navLink.bind('click', function(e) {
      e.preventDefault();
      var navLinkID = $(this).attr('href');

      navLink.removeClass('is-active');
      $(this).addClass('is-active');

      contentSection.removeClass('is-visible');
      $(navLinkID).addClass('is-visible');

    });
  }

  $('.office-slider, .practice-office__slider').slick({
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<button class="slick-arrow slick-prev"><svg class="icon-arrow-prev"><use xlink:href="#icon-arrow-prev"></use></svg></button>',
    nextArrow: '<button class="slick-arrow slick-next"><svg class="icon-arrow-next"><use xlink:href="#icon-arrow-next"></use></svg></button>'
  });

  $(".body-content").fitVids();

  mobileNav();
  symptomsNav();

});
