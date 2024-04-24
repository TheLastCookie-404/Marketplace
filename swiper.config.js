// core version + navigation, pagination modules:
// import Swiper from 'swiper';
// import { Navigation, Pagination } from 'swiper/modules';
// // import Swiper and modules styles
// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

// // init Swiper:
// const swiper = new Swiper('.swiper', {
//   // configure Swiper to use modules
//   modules: [Navigation, Pagination],

//   Navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  // autoplay: {
  //   delay: 5000,
  // },
  navigation: {
    nextEl: ".btn-next",
    prevEl: ".btn-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {

    // when window width is >= 450px / xs
    450: {
      slidesPerView: 1,
    },
    // when window width is >= 640px / sm
    640: {
      slidesPerView: 2,
    },
    // when window width is >= 768px / md
    768: {
      slidesPerView: 3,
    }
  }
});