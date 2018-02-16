$(function(){
    $(".menu-toggle").on('click', function() {
      $(this).toggleClass("on");
      $('.fix-top__main-menu').toggleClass("on");
      $("nav ul").toggleClass('hidden');
    });


})