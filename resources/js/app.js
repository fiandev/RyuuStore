import $ from "jquery";

$(document).ready(function(){
  $(".container").css({
    marginTop: $("nav").innerHeight() + "px"
  });
  
  /* dropdown event */
  $(".dropdown-toggle").on("click", function(){
    if ( !$(this).parent().hasClass("active") ) {
      $(".container").append(
          $("<div>", {
            class: "toggle-shadow"
          }).on("click", () => {
            $(this).click();
            $(".toggle-shadow").remove();
          })
        );
    }
    $(this).parent().toggleClass("active");
  });
  
  $("#toggle-sidenav").on("click", function(){
    $(".sidenav").toggleClass("active");
    $(".container").append(
        $("<div>", {
          class: "toggle-shadow"
        }).on("click", () => {
          $(this).click();
          $(".toggle-shadow").remove();
        })
      );
  });
});
