// =========================================================
// VERSEANDCHORUS.COM - SCRIPT.JS
// Handles all site-wide functions, animations, and feature toggles.
// =========================================================

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initial State Setup
    // Ensures the main content is hidden until the user clicks 'Enter'.
    const mainContent = document.getElementById('main-stage-content');
    if (mainContent) {
        mainContent.style.opacity = '0';
    }
});

// 2. Curtain Opening Animation
function openCurtains() {
    const curtainContainer = document.getElementById('curtain-container');
    const curtainLeft = document.getElementById('curtain-left');
    const curtainRight = document.getElementById('curtain-right');
    const welcomeMessage = document.getElementById('welcome-message');
    const mainContent = document.getElementById('main-stage-content');

    // Start the curtain animation
    if (curtainLeft && curtainRight && welcomeMessage && mainContent) {
        curtainLeft.classList.add('open-left');
        curtainRight.classList.add('open-right');
        welcomeMessage.style.opacity = '0';

        // Wait for the animation to mostly complete before revealing content
        setTimeout(() => {
            curtainContainer.style.pointerEvents = 'none'; // Disable clicking through the curtain area
            mainContent.style.opacity = '1';              // Reveal the main content
            curtainContainer.style.opacity = '0';         // Fully hide the curtain layer
        }, 1000); // Timing matches the CSS transition of 1.5s
    }
}

// 3. Embedded Music Player Control
function playSong(songTitle) {
    const playerBar = document.getElementById('music-player-bar');

    if (playerBar) {
        // Update the music player bar status
        playerBar.innerHTML = `<strong>EMBEDDED MUSIC PLAYER</strong><br>*NOW PLAYING: ${songTitle}*`;
        console.log(`Loading song: ${songTitle}`);

        // In a real application, you'd insert the iframe/widget code or use an HTML5 audio element here.
        // Example: loadAudioSource(songTitle);
    } else {
        alert(`Now playing: ${songTitle}. (Music player placeholder not found.)`);
    }
}

// 4. Song Description Modal (Placeholder for a visual pop-up)
function showDescription(songTitle) {
    alert(`Placeholder: The detailed description for "${songTitle}" would appear here in a stylish modal window.`);
}

// 5. Lyrics Page: Industry View Toggle
function toggleIndustryView() {
    const fullLyricsContainer = document.getElementById('full-lyrics-content');
    const toggleButton = document.getElementById('industry-toggle');

    if (fullLyricsContainer) {
        fullLyricsContainer.classList.toggle('industry-view-active');
        
        // Update the button text based on the new state
        if (fullLyricsContainer.classList.contains('industry-view-active')) {
            toggleButton.textContent = 'Standard View';
            alert('Toggled to High-Contrast, Monospace Industry View for Printing/Review.');
        } else {
            toggleButton.textContent = 'Industry View';
        }
    }
}

// 6. Lyrics Page: Teleprompter Effect (Requires content and CSS animation defined in styles.css)
// This function is for dynamic content loading, not just the initial placeholder.
function loadLyricsForTeleprompter(songTitle, lyricsText) {
    const lyricsDisplay = document.getElementById('lyrics-text');
    const fullContainer = document.getElementById('full-lyrics-content');

    if (lyricsDisplay && fullContainer) {
        lyricsDisplay.innerHTML = lyricsText;
        fullContainer.scrollTop = fullContainer.scrollHeight; // Start scroll at the bottom
        // Note: For true smooth scrolling, a dedicated animation library or advanced CSS @keyframes is better. 
        // The styles.css includes a basic animation placeholder (`scrollUp`).
    }
}
