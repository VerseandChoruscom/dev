// --- MOBILE UI LOGIC ---

/**
 * Toggles the visibility of the main navigation menu for mobile screens.
 * NOTE: Requires CSS rules for #nav-menu.active to handle visibility.
 */
function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    // Using a class toggle for better control via CSS
    navMenu.classList.toggle('active'); 
}

// --- CORE FILTERING LOGIC ---

/**
 * Reads the selected values from the Genre, Mood, and Theme dropdowns
 * and filters the song catalog accordingly.
 */
function applyFilters() {
    // 1. Get the current selected values from the dropdowns
    const genre = document.getElementById('genreFilter').value;
    const mood = document.getElementById('moodFilter').value;
    const theme = document.getElementById('themeFilter').value;

    // 2. Get all song cards
    const songCards = document.querySelectorAll('.song-grid .song-card');

    // 3. Iterate over each card and check if it matches all criteria
    songCards.forEach(card => {
        // Get the metadata from the card's data attributes
        const cardGenre = card.getAttribute('data-genre');
        const cardMood = card.getAttribute('data-mood');
        const cardTheme = card.getAttribute('data-theme');
        
        // Check for matches:
        // A card matches if the filter value is empty (meaning "show all") OR 
        // if the card's attribute value matches the selected filter value.
        const genreMatch = !genre || genre === cardGenre;
        const moodMatch = !mood || mood === cardMood;
        const themeMatch = !theme || theme === cardTheme;

        // Determine if the card should be visible
        if (genreMatch && moodMatch && themeMatch) {
            // Show the card (using 'flex' as specified in song-card CSS)
            card.style.display = 'flex'; 
        } else {
            card.style.display = 'none'; // Hide the card
        }
    });
}

/**
 * SETLIST BUTTON FUNCTION: Applies a filter directly from a setlist button click.
 * It resets Genre/Mood and sets the Theme filter before running the main logic.
 * @param {string} setlistValue - The value to filter by (e.g., 'empowerment').
 */
function filterBySetlist(setlistValue) {
    // 1. Clear non-theme filters for a clean new view
    document.getElementById('genreFilter').value = '';
    document.getElementById('moodFilter').value = '';

    // 2. Set the theme filter to the value passed by the button
    document.getElementById('themeFilter').value = setlistValue;

    // 3. Run the main filter function to update the display
    applyFilters();
}

// --- INITIALIZATION ---

// Wait until the DOM is fully loaded to run initial setup
document.addEventListener('DOMContentLoaded', () => {
    // Run filters once on page load to ensure the initial state is correct.
    applyFilters(); 
});
