(function ($){
    $('#nav-toggle').on('click', function() {
      event.preventDefault();
      $('.search-field').animate({width: "180px"}, 500).focus();
    });

    $('.search-field').on('blur', function() {
      event.preventDefault();
      $(this).animate({width: "0px"}, 500).focus();
      $(this).css('background', 'rgba(255,255,255,0.3)');
    });

      $('.search-field').animate({width: 0}, 0);
  
  })(jQuery);