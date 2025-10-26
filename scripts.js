document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. Curtain Entrance and Stage Activation ---
    const curtainOverlay = document.getElementById('curtain-overlay');
    const openCurtainBtn = document.getElementById('open-curtain-btn');
    const stage = document.getElementById('stage');

    openCurtainBtn.addEventListener('click', () => {
        // Hide the welcome message immediately for a clean transition
        document.querySelector('.welcome-message').style.opacity = '0';

        // Start the curtain animation
        curtainOverlay.classList.remove('closed');
        
        // Wait for the animation (2 seconds) to finish before removing the overlay
        setTimeout(() => {
            curtainOverlay.classList.add('hidden');
            stage.classList.remove('hidden');
            // Allow scrolling on the body once the stage is visible
            document.body.style.overflow = 'auto'; 
        }, 2000); 
    });

    // --- 2. Custom Spotlight Cursor ---
    const customCursor = document.getElementById('custom-cursor');

    document.addEventListener('mousemove', (e) => {
        // Move the custom cursor to follow the mouse position
        customCursor.style.left = `${e.clientX}px`;
        customCursor.style.top = `${e.clientY}px`;
    });

    // --- 3. Simple Page Navigation ---
    const navLinks = document.querySelectorAll('.nav-link');
    const contentPages = document.querySelectorAll('.content-page');

    const showPage = (targetId) => {
        // Hide all pages
        contentPages.forEach(page => {
            page.classList.add('hidden');
            page.classList.remove('active');
        });

        // Show the targeted page
        const targetPage = document.getElementById(targetId);
        if (targetPage) {
            targetPage.classList.remove('hidden');
            targetPage.classList.add('active');
            
            // Optional: Scroll to the top of the content area
            document.getElementById('content-area').scrollIntoView({ behavior: 'smooth' });
        }
    };

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = e.target.getAttribute('href').substring(1);
            showPage(targetId);
        });
    });

    // --- 4. Contact Form Placeholder Logic ---
    const form = document.getElementById('licensing-form');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            // This alert serves as a placeholder for a server-side submission process
            alert('Inquiry sent! We will be in touch shortly regarding your licensing interest.');
            form.reset();
        });
    }

});

// Note: Future development will include dynamic population of the lyric list and 
// the full Teleprompter functionality for individual lyric pages.
