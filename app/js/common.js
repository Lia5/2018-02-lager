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



});   
/*
 $(window).resize(function(){
        var windowWidth = $(window).width();
        if(windowWidth > 992)$(".about__desctop").addClass("about__slider");
        else $(".about__desctop").removeClass("bout__slider");
      });
      */