let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");
const eyeIcons = document.querySelectorAll(".show-hide");
const validationPass = document.querySelector(".v-password");

eyeIcons.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
        const pInput = eyeIcon.parentElement.querySelector("input");
        if (pInput.type === "password") {
            eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
            return (pInput.type = "text");
        }
        eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
        pInput.type = "password";
    });
});

function adminu() {
    let x = document.forms["myform"]["user_usertype"].value;
    var a = "admin";
    if (x === a) {
        validationPass.classList.replace("v-password", "s-password");
    } else {
        validationPass.classList.replace("s-password", "v-password");
    }
}
menu.onclick = () => {
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
};

window.onscroll = () => {
    menu.classList.remove("fa-times");
    navbar.classList.remove("active");
};

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});