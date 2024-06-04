import * as $ from "jquery";
import "slick-carousel";

setTimeout(() => {
  const navigationMenuModal = document.getElementById("modal-navigationMenu");

  const navigationMenuBtn = document.getElementById("header-navigation-menu");
  navigationMenuBtn!.addEventListener("click", (_) => {
    navigationMenuModal!.classList.remove("hide");
  });

  const closeNavigationMenuModalBtn = document.getElementById(
    "modal-contact-navigationMenu"
  );
  closeNavigationMenuModalBtn!.addEventListener("click", (_) => {
    navigationMenuModal!.classList.add("hide");
  });
}, 1);

(<any>$(document)).ready(function () {
  (<any>$(".introduction-slider")).slick({
    slidesToShow: 1,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 1000,
    dots: true,
    arrows: false,
  });
});
