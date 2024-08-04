document.addEventListener("DOMContentLoaded", function() {
  // Initialize Swiper
  var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      grabCursor: true,
      loop: true,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
      autoplay: {
          delay: 5000, // Delay between slides in milliseconds
          disableOnInteraction: false, // Prevents autoplay from stopping on user interaction
      },
  });
});
