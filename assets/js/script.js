 $(window).bind("load resize", function()
    { 
      if($(this).width() <768 )
      {
        $('div.navbar-collapse').addClass('collapse')
      }
      else
      {
        $('div.navbar-collapse').removeClass('collapse') 
      }
    });

