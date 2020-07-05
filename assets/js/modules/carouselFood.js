function menuCarousel() {
    new Glider(document.querySelector('.gliderMenus'), {
        slidesToShow: 1,
        draggable: false,
        loop: true,
        scrollLock: false,
        slidesToScroll: 1,
        duration: 2,
        arrows: {
            prev: '.glider-prevMenus',
            next: '.glider-nextMenus'
        },
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });
}

// if(document.querySelector('.menusContent')) {
//     menuCarousel();
// }

// // const FoodSlider = function(el) {

// //     this.sliderItems = document.querySelectorAll('.menus__carouselSlide');
// //     this.prevBtn = document.querySelector('.menus__carouselBtn--left');
// //     this.nextBtn = document.querySelector('.menus__carouselBtn--right');

// //     this.sliderSetup();
// // }

// // FoodSlider.prototype.sliderSetup = function(e) {

// //     this.slider = new Siema({
// //         selector: '.menus__carouselTrack',
// //         duration: 400,
// //         easing: 'ease',
// //         perPage: 1,
// //         startIndex: 0,
// //         draggable: true,
// //         loop: true,
// //     });

// //     this.prevBtn.addEventListener('click', (e) => {
// //         e.preventDefault();
// //         this.slider.prev();
// //     });

// //     this.nextBtn.addEventListener('click', (e) => {
// //         e.preventDefault();
// //         this.slider.next();
// //     });
// // }

// // if(document.querySelector('.menus__carouselTrack')) {
// //     new FoodSlider;
// // }