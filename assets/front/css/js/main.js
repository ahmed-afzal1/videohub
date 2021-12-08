(function($) {
  "use strict";
  /*-------------------------------------------
  preloader Start
  --------------------------------------------- */
  $(window).on('load',function () {
    $('#status').fadeOut();
    $('#preloader')
        .delay(350)
        .fadeOut('slow');
    $('body')
        .delay(350)
});
// Preloader End

  /*-------------------------------------------
  Sticky Header
  --------------------------------------------- */
  $(window).on('scroll', function(){
    if( $(window).scrollTop()>80 ){
      $('#sticky').addClass('stick');
    } else {
      $('#sticky').removeClass('stick');
    }
  }); 
  
    /*-------------------------------------------
    js scrollup
    --------------------------------------------- */
    $.scrollUp({
      scrollText: '<i class="fa fa-angle-up"></i>',
      easingType: 'linear',
      scrollSpeed: 300,
      animation: 'fade'
    });
    /*-------------------------------------------
    wow js active
    --------------------------------------------- */ 
    if ($('.wow').length) {
      var wow = new WOW({
        mobile: false
      });
      wow.init();
    }
    /*-------------------------------------------
    hero-banner-slide active
    --------------------------------------------- */ 
    $('.hero-slide-home').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      cssEase: 'linear',
      dots: true,
      arrows: false,
      prevArrow: '<i class="fas fa-chevron-left arrow-prev"></i>',
      nextArrow: '<i class="fas fa-chevron-right arrow-next"></i>',
    });
    /*-------------------------------------------
    hero-banner-slide active
    --------------------------------------------- */ 
    $('.hero-banner-slide').slick({
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      cssEase: 'linear',
      asNavFor: '.hero-banner-thumbnail',
      arrows: false,
      prevArrow: '<i class="fas fa-chevron-left arrow-prev"></i>',
      nextArrow: '<i class="fas fa-chevron-right arrow-next"></i>',
      touchMove: false,
      swipe: false,
    });
    /*-------------------------------------------
    movi-banner-slide active
    --------------------------------------------- */ 
    $('.hero-banner-thumbnail').slick({
      infinite: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.hero-banner-slide',
      focusOnSelect: true,
      arrows: false,
      dots: false,
      touchMove: false,
      swipe: false,
      arrows: true,
      prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
      nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
    });
    /*-------------------------------------------
    movi-banner-slide active
    --------------------------------------------- */ 
    $('.movi-banner-slide').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      cssEase: 'linear',
      prevArrow: '<i class="fas fa-arrow-left arrow-prev"></i>',
      nextArrow: '<i class="fas fa-arrow-right arrow-next"></i>',
    });
    /*-------------------------------------------
    three-items-slide active
    --------------------------------------------- */
    $('.three-items-slide').slick({
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: false,
      arrows: true,
      prevArrow: '<i class="slick-prev fas fa-angle-left"></i> ',
      nextArrow: '<i class="slick-next fas fa-angle-right"></i> ',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
    /*-------------------------------------------
    three-items-slide active
    --------------------------------------------- */
    $('.five-items-slide').slick({
      infinite: true,
      speed: 500,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: false,
      arrows: true,
      prevArrow: '<i class="slick-prev fas fa-angle-left"></i> ',
      nextArrow: '<i class="slick-next fas fa-angle-right"></i> ',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
    /*-------------------------------------------
    scrollbox active
    --------------------------------------------- */
    jQuery(function($) {
      $('.custome-scrollbar').asScrollable();
    });
    /*-------------------------------------------
    category-widget active
    --------------------------------------------- */
    $('.single-widget .category-list li ').on('click', function(e) {
      e.preventDefault();
      $(this).toggleClass('active');
    })
    /*-------------------------------------------
    range slider active
    --------------------------------------------- */
    $("#Imdbrating").slider({
      min: 0,
      max: 10,
      range:true,
      value: 0,
    });

  // Set Pin Popup Modal script Start
  let digitValidate = function(ele){
    console.log(ele.value);
    ele.value = ele.value.replace(/[^0-9]/g,'');
  }
  
  let tabChange = function(val){
      let ele = document.querySelectorAll('input');
      if(ele[val-1].value != ''){
        ele[val].focus()
      }else if(ele[val-1].value == ''){
        ele[val-2].focus()
      }   
   }

  //  Select2 script
  $('.js-example-basic-single').select2();

})(jQuery);