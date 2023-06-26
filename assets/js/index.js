import SimpleLightbox from "simplelightbox";

document.addEventListener("DOMContentLoaded", function() {

    /* Menu Burger */
    function toggleMenu () {  
        const navbar = document.querySelector('.header__container__menu');
        const burger = document.querySelector('.header__container__burger');
        
        burger.addEventListener('click', () => {    
          navbar.classList.toggle('show-nav');
        });    
         
    }
    toggleMenu();

    /* Simple Lightbox */
    (function() {
        var $gallery = new SimpleLightbox('.frontpage-offers__container__gallery a', {});
    })();
});
