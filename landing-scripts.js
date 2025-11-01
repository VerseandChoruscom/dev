// Get the curtain elements
const leftCurtain = document.querySelector('.left-curtain');
const rightCurtain = document.querySelector('.right-curtain');
const curtainContainer = document.getElementById('curtain-container');

// Function to open the curtains
function openCurtains() {
    // Add the 'open' class to both curtains to trigger the CSS transition
    leftCurtain.classList.add('open');
    rightCurtain.classList.add('open');
    
    // Optional: After a delay, remove the click listener to prevent repeated actions
    document.body.removeEventListener('click', openCurtains);
}

// Add the click event listener to the entire body
// The curtains will open whenever the user clicks on the page
document.body.addEventListener('click', openCurtains);

// Optional: You could also remove the black background of the body after the 
// curtains have opened to reveal a new main page background color, 
// but for now, we just open them.
