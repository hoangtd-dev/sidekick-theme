import * as $ from "jquery";
import "slick-carousel";
import * as Hammer from "hammerjs";
import "select2";

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

  const navItems = document.querySelectorAll(".navMenu-item");
  navItems.forEach(function (navItem) {
    navItem.addEventListener("click", function () {
      navigationMenuModal!.classList.add("hide");
    });
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

// smooth scroll
document.addEventListener("DOMContentLoaded", function () {
  const navigationMenuModal = document.getElementById("modal-navigationMenu");
  var buttons = document.querySelectorAll(".toForm");
  buttons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var targetId = btn.getAttribute("data-target");
      var targetElement = document.getElementById("form-section");
      if (targetElement) {
        smoothScroll(targetElement, 500);
        navigationMenuModal!.classList.add("hide");
      }
    });
  });
});

function smoothScroll(target: HTMLElement, duration: number) {
  const targetPosition = target.getBoundingClientRect().top + window.scrollY;
  const startPosition = window.scrollY;
  const distance = targetPosition - startPosition;
  let startTime: number | null = null;

  function animation(currentTime: number) {
    if (startTime === null) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t: number, b: number, c: number, d: number) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}
// end smooth srcroll

// skills slider

document.addEventListener("DOMContentLoaded", () => {
  const btns = document.querySelectorAll(".slider-btn");
  const items = document.querySelectorAll(".skills-item");
  const skillSliderContainer = document.getElementById("skills-slider");
  if (!skillSliderContainer) return;

  btns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetId = btn.getAttribute("data-target");
      if (!targetId) return;
      const targetItem = document.getElementById(targetId);
      if (!targetItem) return;
      items.forEach((item) => item.classList.remove("active"));
      btns.forEach((btn) => btn.classList.remove("active"));

      targetItem.classList.add("active");
      btn.classList.add("active");

      const targetIndex = Array.from(items).indexOf(targetItem);

      skillSliderContainer.scroll({
        left:
          targetItem.offsetLeft -
          (skillSliderContainer.clientWidth - targetItem.clientWidth) / 2,
        behavior: "smooth",
      });
    });
  });

  // Highlight the btn when item is scrolled into view
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          items.forEach((item) => item.classList.remove("active"));
          btns.forEach((btn) => btn.classList.remove("active"));

          entry.target.classList.add("active");
          const activeButton = Array.from(btns).find(
            (btn) => btn.getAttribute("data-target") === entry.target.id
          );
          if (!activeButton) return;
          activeButton.classList.add("active");
        }
      });
    },
    {
      threshold: 0.5,
    }
  );

  items.forEach((item) => observer.observe(item));

  const hammer = new Hammer(skillSliderContainer);
  if (!hammer) return;
  hammer.on("swipeleft", () => {
    const activeItem = document.querySelector(
      ".skills-item.active"
    ) as HTMLElement;
    if (!activeItem) return;
    const nextItem = (activeItem.nextElementSibling as HTMLElement) || items[0];
    nextItem.scrollIntoView({
      behavior: "smooth",
      block: "nearest",
      inline: "center",
    });
    updateActiveState(nextItem);
  });

  hammer.on("swiperight", () => {
    const activeItem = document.querySelector(".skills-item.active");
    if (!activeItem) return;
    const prevItem =
      (activeItem.previousElementSibling as HTMLElement) ||
      items[items.length - 1];
    prevItem.scrollIntoView({
      behavior: "smooth",
      block: "nearest",
      inline: "center",
    });

    updateActiveState(prevItem);
  });

  function updateActiveState(targetItem: HTMLElement) {
    items.forEach((item) => item.classList.remove("active"));
    btns.forEach((btn) => btn.classList.remove("active"));

    targetItem.classList.add("active");
    const activeButton = Array.from(btns).find(
      (btn) => btn.getAttribute("data-target") === targetItem.id
    );

    if (activeButton) {
      activeButton.classList.add("active");
    }
  }
});

// end skills slider

// member slider
document.addEventListener("DOMContentLoaded", () => {
  const members = document.querySelectorAll(".member-slider-btn");
  const items = document.querySelectorAll(".member-item");
  const memberSliderContainer = document.getElementById("member-slider");
  if (!memberSliderContainer) return;

  members.forEach((member) => {
    member.addEventListener("click", () => {
      const targetId = member.getAttribute("data-target");
      if (!targetId) return;
      const targetItem = document.getElementById(targetId);
      if (!targetItem) return;
      items.forEach((item) => item.classList.remove("active"));
      members.forEach((member) => member.classList.remove("active"));

      targetItem.classList.add("active");
      member.classList.add("active");

      const targetIndex = Array.from(items).indexOf(targetItem);

      memberSliderContainer.scroll({
        left:
          targetItem.offsetLeft -
          (memberSliderContainer.clientWidth - targetItem.clientWidth) / 2,
        behavior: "smooth",
      });
    });
  });

  // Highlight the btn when item is scrolled into view
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          items.forEach((item) => item.classList.remove("active"));
          members.forEach((member) => member.classList.remove("active"));

          entry.target.classList.add("active");
          const activeMember = Array.from(members).find(
            (member) => member.getAttribute("data-target") === entry.target.id
          );
          if (!activeMember) return;
          activeMember.classList.add("active");
        }
      });
    },
    {
      threshold: 0.5,
    }
  );

  items.forEach((item) => observer.observe(item));

  // swift hammer.js

  const hammer = new Hammer(memberSliderContainer);
  if (!hammer) return;
  hammer.on("swipeleft", () => {
    const activeItem = document.querySelector(
      ".member-item.active"
    ) as HTMLElement;
    if (!activeItem) return;
    const nextItem = (activeItem.nextElementSibling as HTMLElement) || items[0];
    nextItem.scrollIntoView({
      behavior: "smooth",
      block: "nearest",
      inline: "center",
    });
    updateActiveState(nextItem);
  });

  hammer.on("swiperight", () => {
    const activeItem = document.querySelector(".member-item.active");
    if (!activeItem) return;
    const prevItem =
      (activeItem.previousElementSibling as HTMLElement) ||
      items[items.length - 1];
    prevItem.scrollIntoView({
      behavior: "smooth",
      block: "nearest",
      inline: "center",
    });

    updateActiveState(prevItem);
  });

  function updateActiveState(targetItem: HTMLElement) {
    items.forEach((item) => item.classList.remove("active"));
    members.forEach((member) => member.classList.remove("active"));

    targetItem.classList.add("active");
    const activeButton = Array.from(members).find(
      (member) => member.getAttribute("data-target") === targetItem.id
    );

    if (activeButton) {
      activeButton.classList.add("active");
    }
  }
});

// end member slider

// multiple choice select

$(document).ready(function () {
  $("#finterest").select2({
    placeholder: "Select services",
    allowClear: true,
    closeOnSelect: false, // Keep the dropdown open after selecting an item
    width: "100%",
  });
});
// end multiple choice select
