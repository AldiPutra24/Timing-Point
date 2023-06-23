const menuBar = document.querySelector(".hamburger");
const menuNav = document.querySelector(".navbar");
const menuNavigation = document.querySelector(".menu");

const loginBtn = document.getElementById('loginBtn');
const loginPopup = document.getElementById('loginPopup');
const blurBackground = document.getElementById('blurBackground');
const closePopupButton = document.querySelector(".login-popup-close");

loginBtn.addEventListener('click', function() {
  loginPopup.style.display = 'block';
  blurBackground.style.display = 'block';
  document.body.style.overflow = 'hidden'; // Menghilangkan scroll
});

blurBackground.addEventListener('click', function() {
  loginPopup.style.display = 'none';
  blurBackground.style.display = 'none';
  document.body.style.overflow = 'auto'; // Mengaktifkan scroll kembali
});

closePopupButton.addEventListener("click", function() {
  loginPopup.style.display = 'none';
  blurBackground.style.display = 'none';
  document.body.style.overflow = 'auto'; // Mengaktifkan scroll kembali
});

menuBar.addEventListener("click", () => {
  menuBar.classList.toggle("is-active");
  menuNavigation.classList.toggle("menu-active");
});

window.addEventListener("scroll", () => {
  menuNav.classList.toggle("nav-scroll-active", window.scrollY > 0);

  windowsPosition = window.scrollY > 200;
  menuBar.classList.toggle("btn-active", windowsPosition);
  menuBar.classList.remove("is-active");
  menuNavigation.classList.remove("menu-active");
});

const loader = document.querySelector(".loader");

function loaderActive() {
  loader.classList.add("loader-active");
}

function loaderActiveTime() {
  setInterval(loaderActive, 3000);
}

window.onload = loaderActiveTime();
