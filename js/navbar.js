document.addEventListener('DOMContentLoaded', () => {
    const mobile_button = document.querySelector(".mobile-button");
    const navbar_ul = document.querySelector("header>ul")

    mobile_button.addEventListener('click', () => {
        mobile_button.classList.toggle("active");
        navbar_ul.classList.toggle("active")
    });
});