$(function() {

  $("#nav-more").click(function() {
    var x = document.getElementById("top-menu");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  });

});
