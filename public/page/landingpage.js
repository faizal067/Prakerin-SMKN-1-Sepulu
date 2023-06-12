const menuBar = document.querySelector(".menu-bar");
const menuNav = document.querySelector(".menu");

menuBar.addEventListener("click", () => {
    menuNav.classList.toggle("menu-active");
    console.log("ok");
});

const navBar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    const windowPosition = window.scrollY > 0;
    navBar.classList.toggle("scrolling.active", windowPosition);
});
let start = 1;
var url = window.location.pathname+'#slide-'
console.log(url)
otomatis();
function otomatis()
{
    window.location = url+start
    start = start + 1
    if (start == 9){
        start = 1;
    }
    setTimeout(otomatis, 5000)
}