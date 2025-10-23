document.addEventListener('DOMContentLoaded', () => {
    const jukeboxList = document.getElementById('jukebox-song-list');
    const searchInput = document.getElementById('song-search');
    const searchButton = document.getElementById('search-button');
    const searchForm = document.getElementById('metadata-search-form');
    const searchResultsDisplay = document.getElementById('search-results-display');
    
    // --- 1. Populate Filter Dropdowns (from data.js) ---
    const populateFilters = () => {
        const genreFilter = document.getElementById('genre-filter');
        const moodFilter = document.getElementById('mood-filter');
        const useFilter = document.getElementById('use-filter');

        // Function to fill a single select element
        const fillSelect = (selectElement, options) => {
            options.forEach(option => {
                const opt = document.createElement('option');
                opt.value = option;
                opt.textContent = option;
                selectElement.appendChild(opt);
            });
        };

        fillSelect(genreFilter, filterOptions.genre);
        fillSelect(moodFilter, filterOptions.mood);
        fillSelect(useFilter, filterOptions.use);
    };

    // --- 2. Jukebox Display Renderer ---
    const renderSongCard = (song) => {
        return `
            <div class="jukebox-song-card" data-song-id="${song.id}" data-genre="${song.genre}" data-mood="${song.mood}" data-use="${song.use}">
                <img src="${song.cover}" alt="Cover art for the song ${song.title}." class="song-cover-art">
                <div class="song-info">
                    <h3 class="song-title">${song.title}</h3>
                    <p class="song-genre">${song.genre}</p>
                    <a href="${song.songbayLink}" class="play-demo-btn">View on Songbay 🎧</a>
                </div>
            </div>
        `;
    };

    const renderJukebox = (songsToDisplay) => {
        jukeboxList.innerHTML = songsToDisplay.map(renderSongCard).join('');
    };

    // --- 3. Simple Search/Filter Logic ---
    const filterSongs = (query, genre, mood, use) => {
        return songCatalog.filter(song => {
            const matchesQuery = !query || song.title.toLowerCase().includes(query) || song.genre.toLowerCase().includes(query) || song.mood.toLowerCase().includes(query);
            const matchesGenre = !genre || song.genre === genre;
            const matchesMood = !mood || song.mood === mood;
            const matchesUse = !use || song.use === use;
            
            return matchesQuery && matchesGenre && matchesMood && matchesUse;
        });
    };

    // --- 4. Event Listeners ---
    
    // Handle main search bar
    searchButton.addEventListener('click', (e) => {
        const query = searchInput.value.toLowerCase().trim();
        const filtered = filterSongs(query, null, null, null);
        renderJukebox(filtered);

        if (filtered.length > 0) {
            searchResultsDisplay.innerHTML = `<p style="text-align:center; color: var(--color-gold);">Showing ${filtered.length} song(s) matching your search query.</p>`;
        } else {
             searchResultsDisplay.innerHTML = `<p style="text-align:center; color: var(--color-red);">No songs found for "${searchInput.value}".</p>`;
        }
    });
    
    // Handle metadata vault form submission
    searchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(searchForm);
        const genre = formData.get('genre');
        const mood = formData.get('mood');
        const use = formData.get('use');
        
        const filtered = filterSongs(null, genre, mood, use);
        renderJukebox(filtered);
        
        // Update search results display
        if (filtered.length > 0) {
            searchResultsDisplay.innerHTML = `<p style="text-align:center; color: var(--color-gold);">Showing ${filtered.length} song(s) matching the professional filters.</p>`;
        } else {
             searchResultsDisplay.innerHTML = `<p style="text-align:center; color: var(--color-red);">No songs found matching the selected criteria.</p>`;
        }
    });

    // --- 5. Initial Load ---
    if (typeof songCatalog !== 'undefined' && typeof filterOptions !== 'undefined') {
        populateFilters();
        renderJukebox(songCatalog); // Display all songs initially
    }
});
