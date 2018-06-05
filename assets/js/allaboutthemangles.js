;(function(){
    let isDev = true;//Enable development mode in javascript.
    window.aata = window.aata || {isDev:isDev};
    const menuHamburger = document.querySelector("button.hamburger");
    const navMenu = document.querySelector(".navigation");
    const animateHamburger = h => {
        let movement = "100vw";
        h.target.closest("button").classList.toggle("is-active");
        if (h.target.closest("button").classList.contains("is-active"))
            movement = "0";
        navMenu.style.transform = `translateX(${movement})`;
    };
    menuHamburger.addEventListener("click", animateHamburger);
}());