function addInView() {
    gsap.registerPlugin(ScrollTrigger);

    // const inView = document.querySelectorAll('.js-inview');

    gsap.utils.toArray('.js-inview').forEach(item => {
        gsap.fromTo(item, 1, {opacity: 0}, {opacity: 1, scrollTrigger: {
            trigger: item,
            start: 'top 50%',
        }});
    })
}

if(document.querySelector('.mainHome') || document.querySelector('.mainAbout') || document.querySelector('.mainContact') || document.querySelector('.mainMenus') || document.querySelector('.mainMealPrep') || document.querySelector('.mainCakes') || document.querySelector('.mainContact')) {
    addInView();
}

