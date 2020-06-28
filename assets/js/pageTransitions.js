barba.init({
    views: [
        {
            namespace: 'home',
            beforeEnter() {
                fillText();
                removeFill();
            },
            beforeLeave() {
                fillText.destroy();
                removeFill.destroy();
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
                tl.to(burger, 1, {y: 0});
                tl.to('.line1', 1, {rotate: "0", y: 0, background: '#f2f2f2'}, "<");
                tl.to('.line2', 1, {rotate: "0", y: 0, background: '#f2f2f2', width: '80%'}, "<");
                tl.to('.line3', 1, {opacity: '1'}, "<");
                tl.to('.siteHeader__nav', 1.2, {clipPath: "circle(50px at 100% -10%)"}, "<");
                tl.to('.logoColor', 1, {fill: '#f2f2f2'}, "<");
                tl.to('.siteHeader__socialIcon', 1, {y: 0, fill: '#f2f2f2', clearProps: 'all'}, "<");
                body.classList.remove('scrollHidden'), "<";
                tl.fromTo(current.container, 1, {opacity: 1}, {opacity: 0, onComplete: done}, "<");

            },
            enter({current, next}) {
                let done = this.async();
                window.scrollTo(0,0);
                const tl = gsap.timeline({defaults: {ease: 'power2.inOut'}}, "<");
                document.querySelector('.siteHeader__burgerButton').classList.remove('active');
                tl.fromTo(next.container, 1, {opacity: 0}, {opacity: 1, onComplete: done}, "<");

            }
        }
    ]
});