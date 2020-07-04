const menuLinks = Array.from(document.querySelectorAll('.menuLinks'));

function menuClickedLinks() {
    for(let i = 0; i < menuLinks.length; i++) {
        menuLinks[i].addEventListener('click', function(e) {
            e.preventDefault();
            console.log('clicked');
        });
    }
}

if(document.querySelector('.menus')) {
    menuClickedLinks();
}