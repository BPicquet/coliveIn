(() => {
  // assets/js/index.js
  document.addEventListener("DOMContentLoaded", function() {
    function toggleMenu() {
      const navbar = document.querySelector(".header__container__menu");
      const burger = document.querySelector(".header__container__burger");
      burger.addEventListener("click", () => {
        navbar.classList.toggle("show-nav");
      });
    }
    toggleMenu();
  });
})();
