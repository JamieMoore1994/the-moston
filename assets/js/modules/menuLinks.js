const menuLinks = Array.from(document.querySelectorAll('.menuLinks'));

function menuClickedLinks() {
    menuLinks.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            console.log('Clicked');
        });
    })
}

if(document.querySelector('.menus')) {
    menuClickedLinks();
}