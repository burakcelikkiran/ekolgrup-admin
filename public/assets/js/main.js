
(function ($) {
  'use strict';

jQuery(document).ready(function($) {
  

  //OWL CAROUSEL VARIABLES

  var carousel_post_type3  = $('.carousel_post_type3');
  var carousel_post2_type3 = $('.carousel_post2_type3');
  var widget4_carousel     = $('.widget4_carousel');
  var carousel_posts1      = $('.carousel_posts1');
  var gicarousel           = $('.gicarousel');
  var feature_carousel     = $('.feature_carousel');
  var post_type2_carousel  = $('.post_type2_carousel');
  var single_mix_carousel  = $('.single_mix_carousel');
  var popular_carousel     = $('.popular_carousel');
  var sports_carousel      = $('.sports_carousel');
  var feature3_carousel    = $('.feature3_carousel');
  var business_carousel    = $('.business_carousel');
  var image_carousel       = $('.image_carousel');
  var science_carousel     = $('.science_carousel');
  var gallary_carousel     = $('.gallary_carousel');
  var top_carousel         = $('.top_carousel');
  var trancarousel         = $('.trancarousel');



    var stellarnav = $('.stellarnav');
    
    stellarnav.stellarNav({
      theme: 'light',
      breakpoint: 960,
      position: 'right',

    });


  trancarousel.owlCarousel({
    loop:true,
    nav:true,
    items:1,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    
  })

  top_carousel.owlCarousel({
    loop:true,
    nav:true,
    items:1,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
  })



  if ($('.slider_demo2').length > 0) {
    var slider_demo2 = $('.slider_demo2');
    var slider_demo1 = $('.slider_demo1');
    slider_demo2.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider_demo1'
    });
    slider_demo1.slick({
      slidesToShow:7,
      slidesToScroll: 1,
      asNavFor: '.slider_demo2',
      dots: false,
      prevArrow:"<div class='slider_arrow arrow_left'><i class='fal fa-angle-left'></i></div>",
      nextArrow:"<div class='slider_arrow arrow_right'><i class='fal fa-angle-right'></i></div>",
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 10000,
          settings: {
            slidesToShow: 7,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 7,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

  
  if ($('.wlc_slider_demo2').length > 0) {
    
    var wlc_slider_demo2 = $('.wlc_slider_demo2');
    var wlc_slide_demo1  = $('.wlc_slide_demo1');

    wlc_slider_demo2.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.wlc_slide_demo1'
    });

    wlc_slide_demo1.slick({
      asNavFor: '.wlc_slider_demo2',
      dots: false,
      prevArrow:"<div class='slider_arrow4 arrow_left'><i class='fal fa-angle-left'></i></div>",
      nextArrow:"<div class='slider_arrow4 arrow_right'><i class='fal fa-angle-right'></i></div>",
      centerMode: true,
      focusOnSelect: true,
      dots: false,
      responsive: [
        {
          breakpoint: 10000,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
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
        }
      ]
    });
  }


  gallary_carousel.owlCarousel({
    loop:true,
    nav:false,
    dots:true,
    margin:30,
    items:1,
  })

  science_carousel.owlCarousel({
    loop:true,
    nav:true,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:1
      },
      700:{
        items:2
      }
    }
  })


  image_carousel.owlCarousel({
    loop:true,
    nav:true,
    margin:30,
    items:1,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
  })


  business_carousel.owlCarousel({
    loop:true,
    nav:true,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1200:{
        items:2
      }
    }
  })

  feature3_carousel.owlCarousel({
    loop:true,
    nav:true,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1200:{
        items:3
      }
    }
  })

  sports_carousel.owlCarousel({
    items:1,
    loop:true,
    nav:true,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
  })


  popular_carousel.owlCarousel({
    items:1,
    loop:true,
    nav:true,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"]
  })

  single_mix_carousel.owlCarousel({
    loop:true,
    nav:true,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:1,
      },
      1000:{
        items:1
      }
    }
  })


  carousel_post_type3.owlCarousel({
    items:1,
    loop:true,
    nav:true,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"]
  })

  post_type2_carousel.owlCarousel({
    items:1,
    loop:true,
    nav:true,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"]
  })

  carousel_post2_type3.owlCarousel({

    loop:true,
    margin:30,
    nav:true,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:1
      },
      800:{
        items:2
      }
    }
  })
  
  widget4_carousel.owlCarousel({
    items:1,
    loop:true,
    nav:true,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"]
  })

  carousel_posts1.owlCarousel({
    loop:true,
    nav:true,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:3
      }
    }
  })

  gicarousel.owlCarousel({
    loop:true,
    nav:true,
    margin:2,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:3
      },
      600:{
        items:5
      },
      1000:{
        items:7

      }
    }
  })

  feature_carousel.owlCarousel({
    loop:true,
    nav:true,
    margin:2,
    margin:30,
    navText:["<span class='icon-left'></span>", "<span class='icon-right'></span>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:3

      },
      1300:{
        items:4

      }
    }
  })

 });






}(jQuery));
