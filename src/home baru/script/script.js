const menubar = document.querySelector(".hamburger");
const menunav = document.querySelector(".navbar");
const menumuncul = document.querySelector(".menu");
const loader = document.querySelector(".loader");


menubar.addEventListener("click",() => {
    menubar.classList.toggle("is-active");
    menumuncul.classList.toggle("menu-active");
});

window.addEventListener("scroll",() => {
    menunav.classList.toggle("nav-scroll-active", window.scrollY > 0);

    windowPosition = window.scrollY > 200;
    menubar.classList.toggle("btn-active", windowPosition);
    menubar.classList.remove("is-active");
    menumuncul.classList.remove("menu-active");
});


function loaderActive() {
    loader.classList.add("loader-active");
}
  
function loaderActiveTime() {
    setInterval(loaderActive, 3000);
}
  
window.onload = loaderActiveTime();