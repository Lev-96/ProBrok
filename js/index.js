

document.addEventListener("DOMContentLoaded", function () {
// Select all sections with the class 'contentSection'
// Select all sections with the class 'contentSection'
    const sections = document.querySelectorAll('.contentSection');
    let lastScrollTop = 0; // Track the last scroll position

// Function to handle animations on scroll
    function animateOnScroll() {
        // Get the current scroll position
        const currentScrollTop = window.scrollY;

        // Only animate when scrolling down
        if (currentScrollTop > lastScrollTop) {
            sections.forEach((section, index) => {
                const sectionTop = section.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                // Alternate direction and add subtle scaling
                const direction = index % 2 === 0 ? -150 : 150;

                // Check if the section is within the viewport
                if (sectionTop < windowHeight - 100 && !section.classList.contains('animated')) {
                    // Use Anime.js for a more beautiful animation
                    anime({
                        targets: section,
                        translateX: [direction, 0], // Slide from left or right
                        opacity: [0, 1],            // Fade in effect
                        scale: [0.8, 1],             // Slight scaling from 0.8 to 1
                        easing: 'easeOutExpo',
                        duration: 1200,              // Longer duration for a smoother effect
                    });

                    // Mark the section as animated to avoid repeat animations
                    section.classList.add('animated');
                }
            });
        }

        // Update the last scroll position
        lastScrollTop = currentScrollTop;
    }

// Event listener for scrolling to trigger animations
    window.addEventListener('scroll', animateOnScroll);
});


window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > navbar.offsetTop) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }

    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (window.scrollY > 200) { // Show the button after scrolling down 200px
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
});

// Scroll to top smoothly when the button is clicked
    document.getElementById("scrollToTopBtn").addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });


// Close the offcanvas menu when a nav-link is clicked
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link"); // Select all nav-links
    const offcanvas = document.querySelector("#navbarNavAltMarkup"); // Target the offcanvas

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            // Hide the offcanvas menu after clicking a link
            const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
            if (bsOffcanvas) {
                bsOffcanvas.hide();
            }
        });
    });
});
