const hamburgerMenu = document.getElementById("hamburger-menu");
const listsMobile = document.getElementById("lists-mobile");
hamburgerMenu.addEventListener("click", () => {
    listsMobile.classList.toggle("active");
});
