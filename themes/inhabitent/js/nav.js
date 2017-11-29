(function ($){
    $('#nav-toggle').on('click', function(e) {
      event.preventDefault();
      $('.search-field').animate({width: "230px"}, 300).focus();
    });

    $('.search-field').on('blur', function(e) {
      event.preventDefault();
      $('.search-field').animate({width: "0px"}, 300).focus();
    });

      $('.search-field').animate({width: 0}, 0);
  
  })(jQuery);