const navBehind = document.querySelector(".nav-behind");

window.addEventListener("scroll", () => {
    
    const scrollPosition = window.scrollY;

    const opacity = scrollPosition / 200; 

    navBehind.style.opacity = opacity.toFixed(2);
});

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  }