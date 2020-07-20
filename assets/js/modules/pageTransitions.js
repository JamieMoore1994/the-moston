barba.init({
    views: [
        {
            namespace: 'home',
            beforeEnter() {
                homeFillText();
                addInView();
            },
            beforeLeave() {
                homeFillText.destroy();
                addInView.destroy();
            }
        },
        {
            namespace: 'about',
            beforeEnter() {
                addInView();
            },
            beforeLeave() {
                addInView.destroy();
            }
        },
        {
            namespace: 'menus',
            beforeEnter() {
               menuCarousel();
               addInView();     
            },
            beforeLeave() {
                menuCarousel.destroy();
                addInView.destroy();
            }
        },
        {
            namespace: 'mealPrep',
            beforeEnter() {
                addInView();     
             },
             beforeLeave() {
                addInView.destroy();
             }
        },
        {
            namespace: 'cakes',
            beforeEnter() {
                cakeCarousel();
                addInView();
            },
            beforeLeave() {
                cakeCarousel.destroy();
                addInView.destroy();
            }
        },
        {
            namespace: 'contact',
            beforeEnter() {
                addInView();
            },
            beforeLeave() {
                addInView.destroy();
            }
        },
    ],
    transitions: [
        {
            leave({current, next}) {
                let done = this.async();
    
                const tl = gsap.timeline({defaults: {ease: 'power2.inOut'}});
                tl.fromTo(current.container, 1, {opacity: 1}, {opacity: 0});
                tl.fromTo('.pageTransition', 1, {y: '100%', opacity: '0'}, {y: '0', opacity: '1'}, "<");
                tl.to(burger, 0.5, {y: 0});
                tl.to('.line1', 1, {rotate: "0", y: 0, background: '#f2f2f2'}, "<");
                tl.to('.line2', 1, {rotate: "0", y: 0, background: '#f2f2f2', width: '80%'}, "<");
                tl.to('.line3', 1, {opacity: '1'}, "<");
                tl.to('.siteHeader__nav', 0.2, {x: '100%'}, "<");
                tl.to('.logoColor', 1, {fill: '#f2f2f2'}, "<");
                tl.to('.siteHeader__socialIcon', 1, {y: 0, fill: '#f2f2f2', clearProps: 'all'}, "<");
                tl.to(window, 0.1, {scrollTo: 0, onComplete: done}, "<");
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