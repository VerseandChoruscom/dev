document.addEventListener('DOMContentLoaded', () => {
    // Check if songData is available (linked via data.js)
    if (typeof songData === 'undefined' || songData.length === 0) {
        console.error("songData not found. Ensure data.js is linked before lyrics.js.");
        return;
    }

    const jukeboxList = document.getElementById('jukebox-song-list');
    const songSearchInput = document.getElementById('song-search');
    const searchButton = document.getElementById('search-button');
    const categoryButtons = document.querySelectorAll('.whiteboard-btn');
    const metadataSearchForm = document.getElementById('metadata-search-form');
    const genreFilter = document.getElementById('genre-filter');
    const moodFilter = document.getElementById('mood-filter');
    const useFilter = document.getElementById('use-filter');
    const searchResultsDisplay = document.getElementById('search-results-display');
    
    let activeFilter = 'all';

    // --- Helper Function: Get Unique Filter Values ---
    const getUniqueValues = (key) => {
        const values = songData.map(song => song[key].split('/').map(s => s.trim())).flat();
        return [...new Set(values)].sort();
    };

    // --- Step 1: Initialize Filters ---
    const populateFilters = () => {
        // Populate Metadata Filters
        getUniqueValues('genre').forEach(value => {
            if (value) genreFilter.add(new Option(value, value));
        });
        getUniqueValues('mood').forEach(value => {
            if (value) moodFilter.add(new Option(value, value));
        });
        getUniqueValues('use').forEach(value => {
            if (value) useFilter.add(new Option(value, value));
        });
    };

    // --- Step 2: Render Jukebox (Main Display Function) ---
    const renderJukebox = (songsToRender = songData) => {
        jukeboxList.innerHTML = '';
        if (songsToRender.length === 0) {
            jukeboxList.innerHTML = `<p style="text-align:center; color: var(--color-red);">No songs found matching your criteria. Try adjusting your search.</p>`;
            return;
        }

        songsToRender.forEach(song => {
            const card = document.createElement('div');
            card.classList.add('jukebox-card');
            
            // Generate a simple, unique ID for the applause meter for state tracking
            const applauseId = `applause-${song.id}`;
            let applauseCount = localStorage.getItem(applauseId) || 0;

            card.innerHTML = `
                <h4 class="script-text">${song.title}</h4>
                <p class="snippet">"${song.lyric_snippet}"</p>
                <div class="audio-player-controls">
                    <audio controls src="${song.url}" title="${song.title} Demo">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="card-footer">
                    <button class="applause-btn" data-id="${song.id}">
                        👏 Applause Meter (<span id="${applauseId}">${applauseCount}</span>)
                    </button>
                    <button class="details-btn" data-id="${song.id}">
                        View Details (Vault)
                    </button>
                </div>
            `;
            jukeboxList.appendChild(card);
        });
    };
    
    // --- Step 3: Implement Jukebox Search & Category Filtering ---

    // Text Search Functionality
    const filterSongsByText = (query) => {
        const lowerCaseQuery = query.toLowerCase().trim();
        const filteredSongs = songData.filter(song => 
            song.title.toLowerCase().includes(lowerCaseQuery) ||
            song.lyric_snippet.toLowerCase().includes(lowerCaseQuery) ||
            song.category.toLowerCase().includes(lowerCaseQuery)
        );
        renderJukebox(filteredSongs);
    };

    searchButton.addEventListener('click', () => filterSongsByText(songSearchInput.value));
    songSearchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            filterSongsByText(songSearchInput.value);
        }
    });

    // Whiteboard Category Filtering
    categoryButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const category = e.target.getAttribute('data-category');
            
            // Clear text search and reset active button styling
            songSearchInput.value = '';
            categoryButtons.forEach(btn => btn.classList.remove('active-whiteboard'));
            e.target.classList.add('active-whiteboard');

            if (category === activeFilter) {
                // If clicking the same button, deactivate it
                activeFilter = 'all';
                e.target.classList.remove('active-whiteboard');
            } else {
                activeFilter = category;
            }

            const filtered = songData.filter(song => activeFilter === 'all' || song.category === activeFilter);
            renderJukebox(filtered);
        });
    });

    // --- Step 4: Implement Industry Vault Metadata Search ---
    metadataSearchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const genre = genreFilter.value;
        const mood = moodFilter.value;
        const use = useFilter.value;
        
        let filteredVaultSongs = songData.filter(song => {
            // Check if genre matches (handle multiple genres in data field)
            const genreMatch = !genre || song.genre.includes(genre);
            // Check if mood matches (handle multiple moods in data field)
            const moodMatch = !mood || song.mood.includes(mood);
            // Check if use matches (handle multiple uses in data field)
            const useMatch = !use || song.use.includes(use);

            return genreMatch && moodMatch && useMatch;
        });

        // Render results in the dedicated Industry Vault section
        displayVaultResults(filteredVaultSongs);
    });

    const displayVaultResults = (songs) => {
        searchResultsDisplay.classList.remove('clean-results-area');
        if (songs.length === 0) {
            searchResultsDisplay.innerHTML = `<p style="color: var(--color-red);">No songs found matching all criteria in the Industry Vault.</p>`;
            return;
        }
        
        searchResultsDisplay.innerHTML = `
            <h3>${songs.length} Matching Sync-Ready Assets Found:</h3>
            <ul>
                ${songs.map(song => `
                    <li>
                        <strong>${song.title}</strong> 
                        <span class="metadata-tags">(${song.genre} | ${song.mood} | Use: ${song.use})</span>
                        <p class="vault-snippet">${song.description.substring(0, 150)}...</p>
                    </li>
                `).join('')}
            </ul>
        `;
    };
    
    // --- Step 5: Implement Applause Meter (using Event Delegation) ---
    jukeboxList.addEventListener('click', (e) => {
        if (e.target.classList.contains('applause-btn')) {
            const songId = e.target.getAttribute('data-id');
            const applauseId = `applause-${songId}`;
            let currentCount = parseInt(localStorage.getItem(applauseId) || 0);
            
            currentCount++;
            localStorage.setItem(applauseId, currentCount);
            document.getElementById(applauseId).textContent = currentCount;
            
            e.target.classList.add('applauded');
            setTimeout(() => e.target.classList.remove('applauded'), 500);
        }
    });

    // --- Step 6: Initialize ---
    populateFilters();
    renderJukebox(songData); // Load all songs initially

    // BONUS: Implement Print All Setlists (Simple for now)
    document.getElementById('print-all-setlists-btn').addEventListener('click', () => {
        const categories = getUniqueValues('category');
        let printContent = '<h1>Kellie Larson Songwriter Setlists</h1>';
        
        categories.forEach(category => {
            const list = songData.filter(song => song.category === category);
            if (list.length > 0) {
                printContent += `<h2>ACT: ${category}</h2><ul>`;
                list.forEach(song => {
                    printContent += `<li><strong>${song.title}</strong> (${song.genre} - ${song.mood})</li>`;
                });
                printContent += `</ul>`;
            }
        });

        const newWindow = window.open('', '_blank');
        newWindow.document.write(printContent);
        newWindow.document.close();
        newWindow.print();
    });
});
