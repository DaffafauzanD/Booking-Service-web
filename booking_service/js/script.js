let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");
const eyeIcons = document.querySelectorAll(".show-hide");
const validationPass = document.querySelector(".v-password");
let showMenu = document.querySelector(".aktif");
let showlist = document.querySelector(".aktiflist");
let inTable = document.querySelector(".test1");
let intable = document.querySelector(".list");


function showa() {
    const cInput = showlist;
    if (cInput.classList.contains("fa-angle-right")) {
        intable.classList.replace("off", "invoice-box");
        showlist.classList.replace("fa-angle-right", "fa-angle-down");
        console.log("true")
    } else {
        console.log("false")
        showlist.classList.replace("fa-angle-down", "fa-angle-right");
        intable.classList.replace("invoice-box", "off");

    }

}

function showd() {
    const cInput = showMenu;
    if (cInput.classList.contains("fa-angle-right")) {
        inTable.classList.replace("off", "invoice-box");
        showMenu.classList.replace("fa-angle-right", "fa-angle-down");
        console.log("true")
    } else {
        console.log("false")
        showMenu.classList.replace("fa-angle-down", "fa-angle-right");
        inTable.classList.replace("invoice-box", "off");

    }

}



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
var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 30,
    mousewheel: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});