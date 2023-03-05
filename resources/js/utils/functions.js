import $ from "jquery";

export const checkDevice = () => {
  let screenWidth = $(window).width();
  if (screenWidth <= 576) return "sm";
  if (screenWidth <= 960) return "md";
  if (screenWidth <= 1440) return "lg";
};

export const contentAutoPadding = () => {
  if (checkDevice() === "lg") {
    $("main").css({
      paddingTop: $("#nav").innerHeight() + "px",
      paddingLeft: $("#sidenav").innerWidth() + "px"
    });
  }
};