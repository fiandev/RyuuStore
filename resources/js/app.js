import $ from "jquery";

$(document).ready(function(){
  $("#container").css({
    marginTop: $("nav").innerHeight() + "px"
  });
  
  /* dropdown event */
  $(".dropdown-toggle").on("click", function(){
    if ( !$(this).parent().hasClass("active") ) {
      $("#container").append(
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
  
  /* sidenav show event */
  $("#toggle-sidenav").on("click", function(){
    $(".sidenav").toggleClass("active");
    $("#container").append(
        $("<div>", {
          class: "toggle-shadow"
        }).on("click", () => {
          $(this).click();
          $(".toggle-shadow").remove();
        })
      );
  });
  
  if ( $("#carousel").length ) {
    let carouselIndex = 0;
    let carouselItem = $(".carousel-item").length - 1;
    
    $(".carousel-item").map(function(i, e) {
      
    });
    
    for (let i = 0; i < carouselItem + 1; i++) {
      $("#line-controller").append(`
        <button data-slide-to=${ i } type="button" class="item" aria-current="true" aria-label="Slide 1"></button>
      `);
    }
    
    function setCarouselIndex(index) {
      $(".carousel-item, #line-controller button").removeClass("active");
      $(".carousel-item").eq(index).toggleClass("active");
      $("#line-controller button").eq(index).toggleClass("active");
    }
    
    $("#carousel-previous").on("click", function () {
      carouselIndex = carouselIndex > 0 ? carouselIndex - 1 : carouselItem;
      setCarouselIndex(carouselIndex);
    });
    $("#carousel-next").on("click", function () {
      carouselIndex = carouselIndex < carouselItem ? carouselIndex + 1 : 0;
      setCarouselIndex(carouselIndex);
    });
    $("#line-controller button").on("click", function () {
      carouselIndex = $(this).attr("data-slide-to");
      setCarouselIndex(carouselIndex);
    });
    
    setCarouselIndex(carouselIndex);
    
    setInterval(() => {
      $("#carousel-next").click();
    }, 3000);
  }
});
