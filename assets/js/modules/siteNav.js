const burger = document.querySelector('.siteHeader__burgerButton');
const body = document.querySelector('body');

function toggleNavBurger(e) {
    e.preventDefault();
    if(!e.target.classList.contains('active')) {
        e.target.classList.add('active');
        gsap.to(burger, 0.5, {y: '5'});
        gsap.to('.line1', 0.5, {rotate: "45", y: 4, background: 'black'});
        gsap.to('.line2', 0.5, {rotate: "-45", y: -4, background: 'black', width: '100%'});
        gsap.to('.line3', 0.5, {opacity: '0'}, "<");
        gsap.to('.siteHeader__nav', 1, {clipPath: "circle(2500px at 100% -10%)"});
        gsap.to('.logoColor', 1, {fill: 'black'}, "<");
        gsap.to('.siteHeader__socialIcon', 0.1, {fill: 'black'}, "-=1");
        body.classList.add('scrollHidden');
    } else {
        e.target.classList.remove('active');
        gsap.to(burger, 0.5, {y: 0});
        gsap.to('.line1', 0.5, {rotate: "0", y: 0, background: '#f2f2f2'});
        gsap.to('.line2', 0.5, {rotate: "0", y: 0, background: '#f2f2f2', width: '80%'});
        gsap.to('.line3', 0.5, {opacity: '1'}, "<");
        gsap.to('.siteHeader__nav', 1, {clipPath: "circle(50px at 100% -10%)"});
        gsap.to('.logoColor', 1, {fill: '#f2f2f2'});
        gsap.to('.siteHeader__socialIcon', 1, {y: 0, fill: '#f2f2f2', clearProps: 'all'}, "<");
        body.classList.remove('scrollHidden');
    }
}

// Event Listeners
burger.addEventListener('click', toggleNavBurger);