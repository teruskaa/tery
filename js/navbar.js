document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const mobileNav = document.getElementById("mobileNav");

    hamburger.addEventListener("click", function () {
        const isMobileNavVisible = mobileNav.style.display === "flex";
        mobileNav.style.display = isMobileNavVisible ? "none" : "flex";
    });

    document.addEventListener("click", function (event) {
        if (!hamburger.contains(event.target) && !mobileNav.contains(event.target)) {
            mobileNav.style.display = "none";
        }
    });
});