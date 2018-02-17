$(function(){
    $(".menu-toggle").on('click', function() {
      $(this).toggleClass("on");
      $('.fix-top').toggleClass("on");
      $("nav ul").toggleClass('hidden');
      $(".main-menu__item--desctop").toggleClass('hidden');
      $(".main-menu__item--mobile").toggleClass('hidden');
    });


})