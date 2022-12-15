$(window).on("load",function(){
$(".loading-animation-wrapper").fadeOut("slow");
});

$(document).ready(function() {



  var search = document.getElementById("search");
  search.addEventListener("focus", (event) => {
   document.getElementById("navbar-search").style.border = '1px solid '+ $('#nav-search-btn').css('backgroundColor');
  });

  search.addEventListener("focusout", (event) => {
    document.getElementById("navbar-search").style.border =
      "none";
  });

});