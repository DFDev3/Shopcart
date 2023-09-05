window.addEventListener('scroll', function() {
    const secondNavbar = document.querySelector('.second-navbar');
    const navbar = document.querySelector('.navbar');
    const navbarHeight = navbar.offsetHeight;

    if (window.scrollY >= navbarHeight) {
        secondNavbar.style.transform = `translateY(${navbarHeight}px)`;
    } else {
        secondNavbar.style.transform = 'translateY(0)';
    }
});
const secondNavbar = document.querySelector('.second-navbar');
const navbar = document.querySelector('.navbar');
const navbarHeight = navbar.offsetHeight;

window.addEventListener('scroll', function() {
    if (window.scrollY >= navbarHeight) {
        secondNavbar.style.zIndex = 3; // Poner la segunda barra por encima de la principal
    } else {
        secondNavbar.style.zIndex = 1; // Poner la segunda barra por debajo de la principal
    }
});
