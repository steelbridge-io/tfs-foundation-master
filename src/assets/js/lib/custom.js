$(function() {

  $(document).ready(function() {
    $(".primary-nav > ul").addClass('align-center');
  });

  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    
    setTimeout(function(){
    
      if (winTop >= 30) {

        $("body").addClass("sticky-shrinknav-wrapper");
        $(".primary-nav > ul").removeClass('align-center');
        $(".primary-nav > ul").addClass('align-right');

      //} else {

       // $("body").removeClass("sticky-shrinknav-wrapper");

      } 
    }, 800);
  });
  
  $(window).scroll(function(){
    $(".logoimg,.sticky-shrinknav-menu").css("opacity", 1 - $(window).scrollTop() / 150);
    });
  
  // Adds shrinknav on page refresh
  $(window).ready(function() {
    var posTop = $(window).scrollTop();
    if (posTop >= 30) {
    $("body").addClass("sticky-shrinknav-wrapper");
    }
  });
  
  // Add control to ul li dropdown animation speed. Use on navigation.
  $(document).ready(function() {
    $( '.menu-item-has-children' ).hover(
      function(){
        $(this).children('.is-dropdown-submenu').slideDown(250);
      },
      function(){
        $(this).children('.is-dropdown-submenu').slideUp(250);
      }
    );
  }); 
  
  $(document).ready(function() {
    $('.loader').delay(1000).fadeOut(3000);
  });

});
