$(function(){
    $(".menu-toggle").on('click', function() {
      $(this).toggleClass("on");
      $('.fix-top').toggleClass("on");
      $("nav ul").toggleClass('hidden');
      $(".main-menu__item--desctop").toggleClass('hidden');
      $(".main-menu__item--mobile").toggleClass('hidden');
    });


    $('.about__slider').slick({
      settings: "unslick",
      slidesToShow: 3,
      responsive: [
    {
      breakpoint: 980,
      settings: {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: "slider--my-dots",
        arrows: false
      }
    }
    ]
    });
    $('.how__slider').slick({
      settings: "unslick",
      slidesToShow: 3,
      responsive: [
    {
      breakpoint: 980,
      settings: {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: "slider--my-dots",
        arrows: false
      }
    }
    ]
    });
    $('.mk__slider').slick({
      settings: "unslick",
      slidesToShow: 4,
      responsive: [
    {
      breakpoint: 980,
      settings: {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: "slider--my-dots",
        arrows: false
      }
    }
    ]
    });
    $('.team__slider').slick({
      infinite: false,
      slidesToShow: 6,
      slidesToScroll: 2,
      dots: true,
      dotsClass: "slider--my-dots",
      arrows: true,
      responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
        arrows: false
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false
      }
    }
    ]
    });
    $('.conditions__slider').slick({
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      infinite: true,
      responsive: [
    {
      breakpoint: 980,
      settings: {
        
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: "slider--my-dots",
        arrows: false
      }
    }
    ]
    });
    
    $('.tour__slider').slick({
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      infinite: true/*,,
      centerMode: true,
      centerPadding: '150px' 
      responsive: [
    {
      breakpoint: 980,
      settings: {
        centerMode: true,
        centerPadding: '10px',

      }
    }
    ]*/
    });
    $(".phone-mask").mask("+7(999) 999-9999");
    /*
   $('.slick-active').prev().toggleClass('mur');
   $('.slick-active').next().toggleClass('mur2');*/
   $('.sales__slider').slick({
      settings: "unslick",
      slidesToShow: 3,
      responsive: [
    {
      breakpoint: 980,
      settings: {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: "slider--my-dots",
        arrows: false
      }
    }
    ]
    });
    $('.qa__slider').slick({
      settings: "unslick",
      slidesToShow: 3,
      rows: 3,
      slidesPerRow: 1,
      arrows: false,
      responsive: [
      
    {
      breakpoint: 980,
      settings: {
        rows: 2,
        slidesPerRow: 1,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: "slider--my-dots",
              
        
      }
    }
    ]
    });

    $(".qa__item__btn__answer").on('click', function() {
      $(this).next().removeClass("hidden");
      $(this).addClass("hidden");
    });
    $(".qa__item__btn__roll").on('click', function() {
      $('.qa__item__answer').addClass("hidden");
     // $('.qa__item__btn__answer').removeClass("hidden");
      $(this).parent().prev().removeClass("hidden");
    });

});   
/*
     
 $(window).resize(function(){
        var windowWidth = $(window).width();
        if(windowWidth > 992)$(".about__desctop").addClass("about__slider");
        else $(".about__desctop").removeClass("bout__slider");
      });
      */