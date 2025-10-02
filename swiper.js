$(document).ready(function () {
  // Phones slider
  var phoneSwiper = new Swiper(".phone-swiper", {
    slidesPerView: "auto", // show as many as fit
    spaceBetween: 20,
    navigation: {
      nextEl: ".phone-swiper .swiper-button-next",
      prevEl: ".phone-swiper .swiper-button-prev",
    },
  });

  // Accessories slider
  var accsSwiper = new Swiper(".accs-swiper", {
    slidesPerView: "auto",
    spaceBetween: 20,
    navigation: {
      nextEl: ".accs-swiper .swiper-button-next",
      prevEl: ".accs-swiper .swiper-button-prev",
    },
  });
});
