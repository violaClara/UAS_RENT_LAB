const plusBtn = document.getElementById("plusbtn");
const shareBtn = document.getElementById("sharebtn");
const socialPopup = document.getElementById("social-popup");
const toggleOpacity = () => {
  socialPopup.classList.toggle("showicons");
};
plusBtn.addEventListener("click", toggleOpacity);
shareBtn.addEventListener("click", toggleOpacity);

// Loader
var $loader = document.querySelector(".loader");
window.onload = function () {
  // setTimeout(function () {
  //   $loader.classList.remove("loader--active");
  // }, 500);
  $loader.classList.remove("loader--active");
};

// Swiper js

let swiper1 = document.querySelector(".bannerSwiper");
if (swiper1) {
  var mainSwiper = new Swiper(".bannerSwiper", {
    loop: true,
    mousewheel: true,
    speed: 1400,
    effect: "fade",
    pagination: {
      el: ".pagination",
      type: "fraction",
      formatFractionCurrent: function (number) {
        return number < 10 ? "0" + number : number;
      },
      formatFractionTotal: function (number) {
        return number < 10 ? "0" + number : number;
      },
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });
  var pagingSwiper = new Swiper(".bannerSwiper", {
    effect: "fade",
    speed: 1400,
    pagination: {
      el: ".pagination2",
      clickable: true,
    },
  });
  const circles = document.querySelectorAll(".circle");
  mainSwiper.controller.control = pagingSwiper;
  mainSwiper.on("slideChange", function () {
    const cur = document.querySelector(".slide-number");
    let currentIndex = mainSwiper.realIndex + 1;
    cur.innerHTML = currentIndex < 10 ? "0" + currentIndex : currentIndex;
  });
  mainSwiper.on("slideNextTransitionStart", function () {
    circles.forEach(function (item) {
      item.style.transform += "rotate(180deg)";
    });
  });
  mainSwiper.on("slidePrevTransitionStart", function () {
    circles.forEach((item) => {
      item.style.transform += "rotate(-180deg)";
    });
  });
  mainSwiper.on("init", function () {
    const cur = document.querySelector(".slide-number");
    let currentIndex = mainSwiper.realIndex + 1;
    cur.innerHTML = currentIndex < 10 ? "0" + currentIndex : currentIndex;
  });
}

let swiper2 = document.querySelector(".aboutSwiper");
if (swiper2) {
  // about page slider
  var aboutSwiper = new Swiper(".aboutSwiper", {
    pagination: {
      el: ".about-pagination",
      clickable: true,
    },
    loop: true,
  });
}

const swiper3 = document.querySelector(".collectionSwiper");
if (swiper3) {
  // collection swiper
  var mainCollectionSwiper = new Swiper(".collectionSwiper", {
    loop: true,
    speed: 1000,
    spaceBetween: 20,
    pagination: {
      el: ".pagination",
      type: "fraction",
      formatFractionCurrent: function (number) {
        return number < 10 ? "0" + number : number;
      },
      formatFractionTotal: function (number) {
        return number < 10 ? "0" + number : number;
      },
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });
  var paging2Swiper = new Swiper(".collectionSwiper", {
    loop: true,
    speed: 1000,
    pagination: {
      el: ".pagination2",
      clickable: true,
    },
  });

  mainCollectionSwiper.controller.control = paging2Swiper;
}

// result swiper

let swiper4 = document.querySelector(".resultSwiper");
if (swiper4) {
  var resultSwiper = new Swiper(".resultSwiper", {
    loop: true,
    autoplay: true,
    spaceBetween: 24,
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });
}
// cardclick
const collectionCards = document.querySelectorAll(".collection-card");
if (collectionCards) {
  collectionCards.forEach((card) => {
    const plusButton = card.querySelector(".plusbtn");
    const minusButton = card.querySelector(".minusbtn");
    const overlay = card.querySelector(".overlay");
    const titlebar = card.querySelector(".titlebar");

    plusButton.addEventListener("click", function () {
      overlay.classList.add("overlay-show");
      overlay.classList.remove("overlay-hide");
      minusButton.style.display = "block";
      titlebar.style.display = "none";
      card.style.borderColor = "#F7AF21";
    });

    minusButton.addEventListener("click", function () {
      overlay.classList.remove("overlay-show");
      overlay.classList.add("overlay-hide");
      minusButton.style.display = "none";
      titlebar.style.display = "flex";
      card.style.borderColor = "#fefefe6d";
    });
  });
}

const plusButtons = document.querySelectorAll(".plus-btn");
const minusButtons = document.querySelectorAll(".minus-btn");
const productCountElements = document.querySelectorAll(".product-count");

plusButtons.forEach((plusButton, index) => {
  plusButton.addEventListener("click", () => {
    let currentCount = parseInt(productCountElements[index].textContent, 10);
    currentCount++;
    productCountElements[index].textContent =
      currentCount < 10 ? `0${currentCount}` : currentCount;
  });
});

minusButtons.forEach((minusButton, index) => {
  minusButton.addEventListener("click", () => {
    let currentCount = parseInt(productCountElements[index].textContent, 10);
    if (currentCount > 1) {
      currentCount--;
      productCountElements[index].textContent =
        currentCount < 10 ? `0${currentCount}` : currentCount;
    }
  });
});

// payment cards
const paymentCards = document.querySelectorAll(".payment-card");

paymentCards.forEach((card) => {
  console.log(card);
  card.addEventListener("click", () => {
    // Remove active class from all cards
    paymentCards.forEach((otherCard) => {
      otherCard.classList.remove("active");
    });

    // Add active class to the clicked card
    card.classList.add("active");
  });
});

// leaflet map

// contact card flip
let helloBtn = document.querySelector("#hello");
let closeBtn = document.querySelector(".form-close");
let card = document.querySelector(".card");
if (helloBtn) {
  helloBtn.addEventListener("click", function () {
    card.classList.add("is-flipped");
  });
}
if (closeBtn) {
  closeBtn.addEventListener("click", function () {
    card.classList.remove("is-flipped");
  });
}

// Nice select

document.addEventListener("DOMContentLoaded", function (e) {
  // default
  var els = document.querySelectorAll(".selectize");
  els.forEach(function (select) {
    NiceSelect.bind(select);
  });
});

// Data scramble effect
let floatTextMenuLinks = document.querySelectorAll(".float-text");
floatTextMenuLinks.forEach((link) => {
  let letters = link.textContent.split("");
  link.textContent = "";
  letters.forEach((letter, i) => {
    let span = document.createElement("span");
    span.textContent = letter;
    span.style.transitionDelay = `${i / 20}s`;
    span.dataset.text = letter;
    link.append(span);
  });
});

// sidebar
$(".nav__bar").on("click", function () {
  $(this).toggleClass("nav__bar-toggle");
  $(".nav__items-wrapper").toggleClass("nav__items-wrapper-active");
  $(".backdrop").toggleClass("backdrop-active");
  $(".nav__item").toggleClass("nav__item__active");
});

$(".backdrop, .close, .nav__item").on("click", function () {
  $(".backdrop").removeClass("backdrop-active");
  $(".nav__bar").removeClass("nav__bar-toggle");
  $(".nav__items-wrapper").removeClass("nav__items-wrapper-active");
  $(".nav__item").removeClass("nav__item__active");
});

// date
$('input[name="dates"]').daterangepicker({
  drops: "up",
});
