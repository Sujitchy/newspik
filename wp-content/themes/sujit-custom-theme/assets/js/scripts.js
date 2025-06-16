
document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".site-header");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 60) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
});

