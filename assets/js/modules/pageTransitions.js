barba.init({
    views: [
        {
            namespace: 'home',
            beforeEnter() {
                homeFillText();
            },
            beforeLeave() {
                homeFillText.destroy();
            }
        },
        {
            namespace: 'about',
        },
        {
            namespace: 'menus',
            beforeEnter() {
                new FoodSlider();
            },
            beforeLeave() {
                FoodSlider.destroy();
            }
        },
        {
            namespace: 'mealPrep',
        },
        {
            namespace: 'cakes',
            beforeEnter() {
                new CakesSlider();
            },
            beforeLeave() {
                CakesSlider.destroy();
            }
        },
        {
            namespace: 'contact',
        },
    ],
    transitions: [
        {
            leave({current, next}) {
                let done = this.async();
                
                const tl = gsap.timeline({defaults: {ease: 'power2.inOut'}});
                tl.fromTo(current.container, 1, {opacity: 1}, {opacity: 0});
                tl.fromTo('.pageTransition', 1, {y: '100%', opacity: '0'}, {y: '0', opacity: '1', onComplete: done}, "<");
                tl.to(burger, 1, {y: 0});
                tl.to('.line1', 1, {rotate: "0", y: 0, background: '#f2f2f2'}, "<");
                tl.to('.line2', 1, {rotate: "0", y: 0, background: '#f2f2f2', width: '80%'}, "<");
                tl.to('.line3', 1, {opacity: '1'}, "<");
                tl.to('.siteHeader__nav', 1, {x: '100%'}, "<");
                tl.to('.logoColor', 1, {fill: '#f2f2f2'}, "<");
                tl.to('.siteHeader__socialIcon', 1, {y: 0, fill: '#f2f2f2', clearProps: 'all'}, "<");
                body.classList.remove('scrollHidden');
            },
            enter({current, next}) {
                let done = this.async();
                window.scrollTo(0,0);
                const tl = gsap.timeline({defaults: {ease: 'power2.inOut'}}, "<");
                document.querySelector('.siteHeader__burgerButton').classList.remove('active');
                tl.fromTo('.pageTransition', 1.4, {y: '0'}, {y: '-100%'});
                tl.fromTo(next.container, 0.5, {opacity: 0}, {opacity: 1, onComplete: done}, "-=0.5");
            }
        }
    ]
});