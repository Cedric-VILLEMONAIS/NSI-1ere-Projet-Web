// Quand tout le site web est chargé on exécute :
document.addEventListener('DOMContentLoaded', () => {
    // On importe le bouton mobile et les ul
    const mobile_button = document.querySelector(".mobile-button");
    const navbar_ul = document.querySelector("header>ul")

    // Quand on clique sur le bouton mobile on change l'état de la class active
    mobile_button.addEventListener('click', () => {
        mobile_button.classList.toggle("active");
        navbar_ul.classList.toggle("active")
    });
});