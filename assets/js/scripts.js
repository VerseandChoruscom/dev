// /assets/js/scripts.js

document.addEventListener('DOMContentLoaded', () => {
    
    // --- HAMBURGER MENU LOGIC (FIX: Hamburger Isn't Working) ---
    const hamburger = document.getElementById('hamburger-icon');
    const navMenu = document.getElementById('nav-menu');

    // Toggle the 'open' class on the nav menu when the hamburger is clicked
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('open');
        });
    }

    // --- SPOTLIGHT CURSOR LOGIC (FIX: Desktop-Only Spotlight) ---
    const spotlightOverlay = document.getElementById('spotlight-overlay');

    // Check if the overlay element exists and if the screen is desktop size (769px+)
    if (spotlightOverlay && window.matchMedia('(min-width: 769px)').matches) {
        
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;
            
            // Updates the center of the radial gradient to follow the cursor
            spotlightOverlay.style.background = `
                radial-gradient(
                    circle 
                    at ${x}px ${y}px,
                    rgba(255, 255, 255, 0) 200px, /* Clear hole size (spotlight) */
                    rgba(0, 0, 0, 0.9) 300px /* Dark background starts here */
                )
            `;
        });
    }
});
