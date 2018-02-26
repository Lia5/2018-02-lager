$(function(){
    $(".menu-toggle").on('click', function() {
      $(this).toggleClass("on");
      $('.fix-top').toggleClass("on");
      $("nav ul").toggleClass('hidden');
      $(".main-menu__item--desctop").toggleClass('hidden');
      $(".main-menu__item--mobile").toggleClass('hidden');
    });
/*fix-menu*/
$(document).ready(function() {
    
  var navPos, navPosEnd, winPos, navHeight;
    
  function refreshVar() {
    try {
      navPos = $('.about').offset().top;
      navPosEnd = $('.qa').offset().top;
    } catch (e){}
    navHeight = $('.fix-menu').outerHeight(true);
  }
  refreshVar();
  $(window).resize(refreshVar);

  $('<div class="clone-fix-menu"></div>').insertBefore('.about').css('height', navHeight).hide();
    $(window).scroll(function() {
      winPos = $(window).scrollTop();
      
      if ((winPos >= navPos)&&(winPos <= navPosEnd) ) {
        $('.fix-menu').addClass('fixed shadow');  
        $('.clone-fix-menu').show();
      } else {
        $('.fix-menu').removeClass('fixed shadow');
        $('.clone-fix-menu').hide();
      }
    });
  
  });

/*end fix-menu*/

    $('.about__slider').slick({
      settings: "unslick",
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
      arrows: false,
      dots: false,
      responsive: [
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        dotsClass: "slider--my-dots",
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
      slidesToShow: 6,
      slidesToScroll: 1,
      asNavFor: '.team__slider-for',
      dots: true,
      dotsClass: "slider--my-dots",
      arrows: true,
      focusOnSelect: true,
      responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.team__slider-for',
        arrows: false
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.team__slider-for',
        arrows: false
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.team__slider-for',
        arrows: false
      }
    }
    ]
    });
      $('.team__slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.team__slider',
      });
    $(".team__slider .team__item").on('click', function() {
      $('.team__slider-for-visible').removeClass("hidden");
   /*   $('.team__slider-for').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
     
  /*    $('.team__slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.team__slider',
      }); /* Initialize the slick again */
 /*      $(".team__slider-for").slick('reinit');
*/
    
  
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
      infinite: true,
      responsive: [
    {
      breakpoint: 980,
      settings: {
        centerMode: true,
        centerPadding: '10px'
      }
    }
    ]
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
      $(this).parent().addClass("hidden");
     // $('.qa__item__btn__answer').removeClass("hidden");
      $(this).parent().prev().removeClass("hidden");
    });

    $('.reviews__slider').slick({
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
    $('.reviews-video__slider').slick({
      rows: 2,
      slidesToShow: 1,
      slidesToScroll: 1,
      slidesPerRow: 2,
      arrows: false,
      infinite: true,
      dots: true,
      dotsClass: "slider--my-dots",
      responsive: [
    {
      breakpoint: 980,
      settings: {
        rows: 2,
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
    }); 
    // MAP
    
 ymaps.ready(init);
 function init(){     
    var myMap = new ymaps.Map("map", {
         center: [55.729012, 37.629215],
         zoom: 15
     }),
     
     // Создаем метку с помощью вспомогательного класса.
     myPlacemark1 = new ymaps.Placemark([55.729012, 37.629215], {
      // Свойства.
      // Содержимое иконки, балуна и хинта.
      balloonContentBody: 'Академия Героев',
     balloonContentFooter: 'Москва, ул.Зацепа 41, офис 107',
     hintContent: 'Академия Героев'
  }, {
      // Опции.
      // Своё изображение иконки метки.
      iconLayout: 'default#imageWithContent',
      iconImageHref: 'img/icons/marker.png',
      // Размеры метки.
      iconImageSize: [66, 100]
  });

// Добавляем все метки на карту.
myMap.geoObjects.add(myPlacemark1);
myMap.behaviors.disable('scrollZoom');

 };
  // MAP
/*
  function initMap() {
    var centerLatLng = new google.maps.LatLng(55.729012, 37.629215);
    var mapOptions = {
        center: centerLatLng,
        zoom: 15,               // Зум по умолчанию. Возможные значения от 0 до 21
        navigationControlOptions: {
          style: google.maps.NavigationControlStyle.SMALL
        },
         mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    map.scrollwheel=true;
  map.setOptions({ mapTypeControl:true});

  var locations = [
	{
		title: 'Академия Героев',
		position: {lat: 55.729012, lng: 37.629215},
		icon: {
			url: "img/icons/marker.png",
			scaledSize: new google.maps.Size(66, 100)
		}
	}
];
locations.forEach( function( element ) {
	var marker = new google.maps.Marker({
			position: element.position,
			map: map,
			title: element.title,
			icon: element.icon,
		});
	});	
}
google.maps.event.addDomListener(window, "load", initMap);
*/



/*popup*/
//----- OPEN
$('[data-popup-open]').on('click', function(e)  {
  var targeted_popup_class = jQuery(this).attr('data-popup-open');
  $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

  e.preventDefault();
});

//----- CLOSE
$('[data-popup-close]').on('click', function(e)  {
  var targeted_popup_class = jQuery(this).attr('data-popup-close');
  $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

  e.preventDefault();
  
});
$(document).mouseup(function (e){ // событие клика по веб-документу
  var div = $(".typical__popup"); // тут указываем ID элемента
  if (!div.is(e.target) // если клик был не по нашему блоку
      && div.has(e.target).length === 0) { // и не по его дочерним элементам
    div.parent().hide(); // скрываем его
  }
});
/*tabs*/

(function($) {
  $(function() {
   
    $('ul.tabs__caption').on('click', 'li:not(.active-tab)', function() {
      $(this)
        .addClass('active-tab').siblings().removeClass('active-tab')
        .closest('div.tabs').find('div.tabs__content').removeClass('active-tab').eq($(this).index()).addClass('active-tab');

        $('.reviews__slider').slick('unslick'); 
        $('.reviews-video__slider').slick('unslick'); 
       

        $('.reviews__slider').slick({
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
        $('.reviews-video__slider').slick({
          rows: 2,
          slidesToShow: 1,
          slidesToScroll: 1,
          slidesPerRow: 2,
          arrows: false,
          infinite: true,
          dots: true,
          dotsClass: "slider--my-dots",
          responsive: [
        {
          breakpoint: 980,
          settings: {
            rows: 2,
            slidesPerRow: 1,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        ]
        }); 
    

    });
   
  });
  })(jQuery);






});   


/*
     
 $(window).resize(function(){
        var windowWidth = $(window).width();
        if(windowWidth > 992)$(".about__desctop").addClass("about__slider");
        else $(".about__desctop").removeClass("bout__slider");
      });
      */