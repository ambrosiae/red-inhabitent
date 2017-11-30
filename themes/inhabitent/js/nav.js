(function ($){
    $('#nav-toggle').on('click', function() {
      event.preventDefault();
      $('.search-field').animate({width: "230px"}, 800).focus();
    });

    $('.search-field').on('blur', function() {
      event.preventDefault();
      $('.search-field').animate({width: "0px"}, 800).focus();
    });

      $('.search-field').animate({width: 0}, 0);
  
  })(jQuery);