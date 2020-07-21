function cakeCarousel() {
    new Glider(document.querySelector('.gliderCakes'), {
        slidesToShow: 1,
        draggable: false,
        loop: true,
        scrollLock: false,
        slidesToScroll: 1,
        duration: 2,
        arrows: {
            prev: '.glider-prevCakes',
            next: '.glider-nextCakes',
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


if(document.querySelector('.cakeImages')) {
    cakeCarousel();
}