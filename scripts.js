function toggleMenu() {
  const menu = document.getElementById('nav-menu');
  menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
}

function applyFilters() {
  const genre = document.getElementById('genreFilter').value;
  const mood = document.getElementById('moodFilter').value;
  const theme = document.getElementById('themeFilter').value;
  const cards = document.querySelectorAll('.song-card');

  cards.forEach(card => {
    const matchGenre = !genre || card.dataset.genre === genre;
    const matchMood = !mood || card.dataset.mood === mood;
    const matchTheme = !theme || card.dataset.theme === theme;
    card.style.display = (matchGenre && matchMood && matchTheme) ? 'block' : 'none';
  });
}

function filterBySetlist(setlist) {
  const cards = document.querySelectorAll('.song-card');
  cards.forEach(card => {
    card.style.display = card.dataset.setlist === setlist ? 'block' : 'none';
  });

  // Reset filters
  document.getElementById('genreFilter').value = '';
  document.getElementById('moodFilter').value = '';
  document.getElementById('themeFilter').value = '';
}

/**
 * scripts.js
 * * Contains all necessary JavaScript for the Industry Pro Vault (Filtering Logic)
 * and general site UI functionality (Hamburger Menu).
 */

// --- CORE FILTERING LOGIC ---

/**
 * Reads the selected values from the Genre, Mood, and Theme dropdowns
 * and filters the song catalog accordingly.
 */
function applyFilters() {
    // 1. Get selected filter values (or empty string if 'All' is selected)
    const genre = document.getElementById('genreFilter').value;
    const mood = document.getElementById('moodFilter').value;
    const theme = document.getElementById('themeFilter').value;

    // 2. Get all song cards from the catalog
    const songCards = document.querySelectorAll('.song-grid .song-card');

    // 3. Loop through each song card and determine visibility
    songCards.forEach(card => {
        // Get the card's properties from the data-attributes
        const cardGenre = card.getAttribute('data-genre');
        const cardMood = card.getAttribute('data-mood');
        const cardTheme = card.getAttribute('data-theme');

        // Check if the card matches all active filters.
        // If a filter is empty (''), it means 'All' is selected, and it always matches.
        const matchesGenre = !genre || cardGenre.includes(genre);
        const matchesMood = !mood || cardMood.includes(mood);
        const matchesTheme = !theme || cardTheme.includes(theme);

        // If all conditions are true, show the card; otherwise, hide it.
        if (matchesGenre && matchesMood && matchesTheme) {
            card.style.display = 'block'; // Show card
        } else {
            card.style.display = 'none';  // Hide card
        }
    });

    // Optional: Add a message if no songs are visible
    // For simplicity now, we rely on filtering, but this is a good future feature.
}

// --- MOBILE UI LOGIC ---

/**
 * Toggles the visibility of the main navigation menu for mobile screens.
 */
function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    const hamburger = document.querySelector('.hamburger');

    if (navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        hamburger.classList.remove('open');
    } else {
        navMenu.classList.add('active');
        hamburger.classList.add('open');
    }
}
/**
 * * CORE FUNCTION: Applies all filters (Genre, Mood, Theme) to the song cards.
 * */
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
            card.style.display = 'flex'; // Show the card (assuming flex layout)
        } else {
            card.style.display = 'none'; // Hide the card
        }
    });
}

/**
 * * SETLIST BUTTON FUNCTION: Applies a filter directly from a setlist button click.
 * */
function filterBySetlist(setlistValue) {
    // 1. Get the theme dropdown element
    const themeFilter = document.getElementById('themeFilter');
    
    // 2. Clear other filters (optional but recommended for clear user experience)
    document.getElementById('genreFilter').value = '';
    document.getElementById('moodFilter').value = '';

    // 3. Set the theme filter to the value passed by the button
    // (e.g., 'empowerment' from the setlist button)
    themeFilter.value = setlistValue;

    // 4. Run the main filter function to update the display
    applyFilters();
}

/**
 * * INITIALIZATION: Run the filters once on page load to set the initial view.
 * */
document.addEventListener('DOMContentLoaded', applyFilters);

// Note: You may also want to add a function to reset all filters.
function resetFilters() {
    document.getElementById('genreFilter').value = '';
    document.getElementById('moodFilter').value = '';
    document.getElementById('themeFilter').value = '';
    applyFilters();
}


// --- INITIALIZATION ---

// Wait until the DOM is fully loaded to run initial setup
document.addEventListener('DOMContentLoaded', () => {
    // This function ensures filters are applied when the page first loads 
    // (though initially all will be visible).
    applyFilters(); 
});

