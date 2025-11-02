// /assets/js/landing-scripts.js

// Get the curtain elements
const leftCurtain = document.querySelector('.left-curtain');
const rightCurtain = document.querySelector('.right-curtain');

// Function to open the curtains and redirect
function openCurtains() {
    // 1. Trigger the CSS animation (Works with updated style.css)
    leftCurtain.classList.add('open');
    rightCurtain.classList.add('open');
    
    // Remove the click listener to prevent multiple triggers
    document.body.removeEventListener('click', openCurtains);

    // 2. Wait for the animation to finish (2000ms = 2 seconds, matching CSS transition)
    setTimeout(() => {
        // 3. Redirect to the main stage (Link to index page works)
        window.location.href = '/index.html';
    }, 2000); // 2000 milliseconds (2 seconds)
}

// Add the click event listener to the entire body
document.body.addEventListener('click', openCurtains);

// Optional: Add a subtle loading cue for users who might not click immediately
document.addEventListener('DOMContentLoaded', () => {
    const landingContent = document.getElementById('landing-content');
    if (landingContent) {
        landingContent.innerHTML += `<p style="color: #fff; margin-top: 20px;">(Click anywhere to open the curtains)</p>`;
    }
});
