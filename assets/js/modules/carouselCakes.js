// function cakeCarousel() {
//     new Glider(document.querySelector('.glider') && document.querySelector('.gliderCakes'), {
//         slidesToShow: 1,
//         draggable: false,
//         loop: true,
//         scrollLock: false,
//         slidesToScroll: 1,
//         duration: 5,
//         arrows: {
//             prev: '.glider-prev',
//             next: '.glider-next',
//         },
//         responsive: [
//             {
//                 breakpoint: 960,
//                 settings: {
//                     slidesToShow: 2,
//                 }
//             }
//         ]
//     });
// }


// if(document.querySelector('.cakeImages')) {
//     cakeCarousel();
// }

// // const CakesSlider = function(el) {

// //     this.sliderItems = document.querySelectorAll('.cakesImages__slide');
// //     this.prevBtn = document.querySelector('.cakesImages__btn--left');
// //     this.nextBtn = document.querySelector('.cakesImages__btn--right');

// //     this.sliderSetup();
// // }

// // CakesSlider.prototype.sliderSetup = function(e) {

// //     this.slider = new Siema({
// //         selector: '.cakesImages__slides ',
// //         duration: 400,
// //         easing: 'ease',
// //         perPage: 1,
// //         startIndex: 0,
// //         // draggable: true,
// //         loop: true,
// //     });

// //     this.windowWidth = window.innerWidth;

// //     this.prevBtn.addEventListener('click', (e) => {
// //         e.preventDefault();
// //         this.slider.prev();
// //     });

// //     this.nextBtn.addEventListener('click', (e) => {
// //         e.preventDefault();
// //         this.slider.next();
// //     });

// //     // this.calculatePerPage();
// // }

// // // CakesSlider.prototype.calculatePerPage = function(){

// // //     let perPage = 2;
  
// // //     if ( this.windowWidth <= 750 ) { perPage = 2; }
// // //     if ( this.windowWidth <= 1200 ) { perPage = 3; }
  
// // //     this.perPage = perPage;
  
// // //   }

// // if(document.querySelector('.cakesImages__slides')) {
// //     new CakesSlider;
// // }