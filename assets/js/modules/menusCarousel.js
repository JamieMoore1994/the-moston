// if(window.location.pathname === '/menus.php') {

// const track = document.querySelector('.menus__carouselTrack');
// const slides = Array.from(track.children)
// console.log(slides);
// const nextButton = document.querySelector('.menus__carouselBtn--right');
// const previousButton = document.querySelector('.menus__carouselBtn--left');


// // Getting the size of the slides
// const slideWidth = slides[0].getBoundingClientRect().width;
// console.log(slideWidth);

// // Arrange the slides next to one another
// // Will loop over every slide and push the next image the correct amount to the left
// const setSlidePosition = (slide, index) => {
//     slide.style.left = `${slideWidth * index}px`;
// }
// slides.forEach(setSlidePosition);

// const moveToSlide = (track, currentSlide, targetSlide) => {
//     track.style.transform = `translateX(-${targetSlide.style.left})`;
//     currentSlide.classList.remove('js-current-slide');
//     targetSlide.classList.add('js-current-slide');
// }

// // When i click left, move the slides to the left
// previousButton.addEventListener('click', e => {
//     const currentSlide = track.querySelector('.js-current-slide');
//     const lastElementSibling = track.lastElementChild;
//     const previousSlide = currentSlide.previousElementSibling || track.lastElementChild;

//     // Move to the next slide
//     moveToSlide(track, currentSlide, previousSlide);
// });

// // When i click right, move the slides to the right
// nextButton.addEventListener('click', e => {
//     const currentSlide = track.querySelector('.js-current-slide');
//     const nextSlide = currentSlide.nextElementSibling || track.firstElementChild;

//     // Move to the next slide
//     moveToSlide(track, currentSlide, nextSlide);


// });

// }
