const buttonHomeBanner = document.querySelector('.homeBanner__btn');
const textFillDiv = document.querySelector('.homeBanner__textFill');

function fillText() {
    textFillDiv.classList.add('js-show');
}

function removeFill() {
    textFillDiv.classList.remove('js-show');
}

// Causing issue on other pages other than the homepage
if(document.querySelector('.homeBanner__btn')) {
    buttonHomeBanner.addEventListener('mouseenter', fillText);
    buttonHomeBanner.addEventListener('mouseleave', removeFill);
}
