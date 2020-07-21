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