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

// --- INITIALIZATION ---

// Wait until the DOM is fully loaded to run initial setup
document.addEventListener('DOMContentLoaded', () => {
    // This function ensures filters are applied when the page first loads 
    // (though initially all will be visible).
    applyFilters(); 
});

