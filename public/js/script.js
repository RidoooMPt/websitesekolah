// Mobile menu toggle
const hamburger = document.getElementById("hamburger");
const navbarMenu = document.getElementById("navbar-menu");

hamburger.addEventListener("click", function () {
    navbarMenu.classList.toggle("active");

    // Change hamburger icon
    const icon = hamburger.querySelector("i");
    if (navbarMenu.classList.contains("active")) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");
    } else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
    }
});

// Close menu when clicking outside
document.addEventListener("click", function (event) {
    if (
        !hamburger.contains(event.target) &&
        !navbarMenu.contains(event.target)
    ) {
        navbarMenu.classList.remove("active");
        const icon = hamburger.querySelector("i");
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
    }
});

// Add smooth scrolling and interactive effects
document.querySelectorAll(".menu-card").forEach((card) => {
    card.addEventListener("mouseenter", function () {
        this.style.background = "rgba(255, 255, 255, 1)";
    });

    card.addEventListener("mouseleave", function () {
        this.style.background = "rgba(255, 255, 255, 0.95)";
    });
});
