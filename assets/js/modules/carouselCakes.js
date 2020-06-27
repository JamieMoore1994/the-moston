const CakesSlider = function(el) {

    this.sliderItems = document.querySelectorAll('.cakesImages__slide');
    this.prevBtn = document.querySelector('.cakesImages__btn--left');
    this.nextBtn = document.querySelector('.cakesImages__btn--right');

    this.sliderSetup();
}

CakesSlider.prototype.sliderSetup = function(e) {

    this.slider = new Siema({
        selector: '.cakesImages__slides ',
        duration: 400,
        easing: 'ease',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        loop: true,
    });

    this.prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        this.slider.prev();
    });

    this.nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        this.slider.next();
    });
}

if(document.querySelector('.cakesImages__slides')) {
    new CakesSlider;
}