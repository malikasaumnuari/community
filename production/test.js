//Pagination
  pageSize = 8;

  showPage = function(page) {
      $(".line-content").hide();
      $(".line-content").each(function(n) {
          if (n >= pageSize * (page - 1) && n < pageSize * page)
              $(this).show();
      });        
  }
    
  showPage(1);

  $("#pagin li a").click(function() {
      $("#pagin li a").removeClass("current");
      $(this).addClass("current");
      showPage(parseInt($(this).text())) 
  });