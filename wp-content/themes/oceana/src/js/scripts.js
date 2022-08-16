jQuery(document).ready(function($) {

  var mobileNav = function() {
    var body = $('body');
    var mobileNavTrigger = $('.mobile-btn');
    var mobileNavContainer = $('.menu');
    var mobileNavBtnLabel = $('.mobile-btn__label');
    var languageNav = $('.language-nav');

    mobileNavTrigger.bind('click', function(e) {
      e.preventDefault();
      $(this).toggleClass('js-is-active');
      body.toggleClass('js-no-scroll');
      mobileNavContainer.toggleClass('js-is-visible');
      mobileNavBtnLabel.toggleClass('js-is-hidden');
      languageNav.toggleClass('js-is-visible');
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

  var treatmentsScroll = function() {
    var scrollBtn = $('#treatments-scroll');
    var treatmentsList = $('#treatments-list');

    scrollBtn.bind('click', function(e) {
      e.preventDefault();
      $("html, body").animate({
        scrollTop: treatmentsList.offset().top
      }, "slow");
      return false;
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

  $('.reviews-list').slick({
    prevArrow: '<button class="slick-arrow slick-prev"><svg class="icon-arrow-prev"><use xlink:href="#icon-arrow-prev"></use></svg></button>',
    nextArrow: '<button class="slick-arrow slick-next"><svg class="icon-arrow-next"><use xlink:href="#icon-arrow-next"></use></svg></button>',

    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,

    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerPadding: '120px',
        }
      }
    ]


  });

  $(".body-content").fitVids();

  mobileNav();
  symptomsNav();
  treatmentsScroll();

});
