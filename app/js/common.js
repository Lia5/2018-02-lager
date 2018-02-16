$(function(){
    $(".menu-toggle").on('click', function() {
      $(this).toggleClass("on");
      $('.fix-top').toggleClass("on");
      $("nav ul").toggleClass('hidden');
    });


})