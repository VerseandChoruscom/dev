document.addEventListener('DOMContentLoaded', () => {
    // Check if songData is available (linked via data.js)
    if (typeof songData === 'undefined' || songData.length === 0) {
        console.error("songData not found. Ensure data.js is linked before lyrics.js.");
        return;
    }

    const jukeboxList = document.getElementById('jukebox-song-list');
    const songSearchInput = document.getElementById('song-search');
    const categoryButtons = document.querySelectorAll('.whiteboard-btn');
    const metadataSearchForm = document.getElementById('metadata-search-form');
    const genreFilter = document.getElementById('genre-filter');
    const moodFilter = document.getElementById('mood-filter');
    const useFilter = document.getElementById('use-filter');
    const searchResultsDisplay = document.getElementById('search-results-display');
    const fullLyricView = document.getElementById('full-lyric-view');
    const industryColumn = document.getElementById('industry-column');

    // --- Helper Function: Get Unique Filter Values ---
    const getUniqueValues = (key) => {
        const values = songData.map(song => song[key].split('/').map(s => s.trim())).flat();
        return [...new Set(values)].sort();
    };

    // --- Step 1: Initialize Filters (Populate Selects) ---
    const populateFilters = () => {
        // Populate Metadata Filters (Genre, Mood, Use)
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

    // --- Step 2: Render Jukebox Song List (Fan View) ---
    const renderJukebox = (songs) => {
        jukeboxList.innerHTML = '';
        if (songs.length === 0) {
            jukeboxList.innerHTML = '<p style="text-align: center; color: var(--color-red);">No songs match your search.</p>';
            return;
        }
        
        songs.sort((a, b) => a.title.localeCompare(b.title));
        
        songs.forEach(song => {
            const card = document.createElement('div');
            card.className = 'jukebox-card link-light-blue';
            card.dataset.songId = song.id;
            card.innerHTML = `
                <strong>${song.title}</strong>
                <span style="float: right; font-size: 0.9em;">(${song.category})</span>
                <p style="font-size: 0.8em; margin-top: 5px;">"${song.lyric_snippet}"</p>
            `;
            jukeboxList.appendChild(card);
        });
    };
    
    // --- Step 3: Handle Search and Filtering ---
    songSearchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();
        const filteredSongs = songData.filter(song => 
            song.title.toLowerCase().includes(query) || 
            song.lyric_snippet.toLowerCase().includes(query)
        );
        renderJukebox(filteredSongs);
    });
    
    // Category/Whiteboard Button Filtering
    categoryButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const category = e.target.textContent;
            const filteredSongs = songData.filter(song => song.category.toLowerCase() === category.toLowerCase());
            renderSearchResults(filteredSongs);
        });
    });

    // Metadata Form Submission (Industry Pro Search)
    metadataSearchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const genre = genreFilter.value;
        const mood = moodFilter.value;
        const use = useFilter.value;
        
        const filteredSongs = songData.filter(song => {
            const genreMatch = !genre || song.genre.includes(genre);
            const moodMatch = !mood || song.mood.includes(mood);
            const useMatch = !use || song.use.includes(use);
            return genreMatch && moodMatch && useMatch;
        });
        renderSearchResults(filteredSongs);
    });
    
    // --- Step 4: Render Industry Search Results ---
    const renderSearchResults = (songs) => {
        searchResultsDisplay.innerHTML = '';
        if (songs.length === 0) {
            searchResultsDisplay.innerHTML = '<p style="text-align: center; color: var(--color-black);">No results matched your precise criteria.</p>';
            return;
        }
        
        songs.forEach(song => {
            const resultDiv = document.createElement('div');
            resultDiv.className = 'clean-result-item';
            resultDiv.style = "padding: 10px 0; border-bottom: 1px dashed var(--color-gray); cursor: pointer; color: var(--color-black);"
            resultDiv.innerHTML = `
                <strong>${song.title}</strong> (${song.genre} / ${song.mood})<br>
                <span style="font-size: 0.9em;">Use Case: ${song.use}</span>
            `;
            resultDiv.addEventListener('click', () => showFullLyric(song.id));
            searchResultsDisplay.appendChild(resultDiv);
        });
        
        // Ensure Industry column is set to the correct styling when results are shown
        document.body.classList.add('industry-style');
    };
    
    // --- Step 5: Show Full Lyric View (Jukebox/Click) ---
    jukeboxList.addEventListener('click', (e) => {
        const card = e.target.closest('.jukebox-card');
        if (card) {
            showFullLyric(parseInt(card.dataset.songId));
        }
    });

    const showFullLyric = (songId) => {
        const song = songData.find(s => s.id === songId);
        if (!song) return;

        // Populate the Full Lyric View
        document.getElementById('lyric-view-title').textContent = song.title;
        document.getElementById('lyric-view-act').textContent = `ACT: ${song.category} (${song.genre})`;
        document.getElementById('lyric-view-description').textContent = song.description;
        document.getElementById('lyric-view-text').textContent = song.full_lyric;
        
        // Update URL/Audio Link
        document.getElementById('play-now-button').onclick = () => {
            window.open(song.url, '_blank');
        };
        
        // Handle Applause Meter (using localStorage for persistent counts)
        const applauseId = `applause-${song.id}`;
        let currentCount = parseInt(localStorage.getItem(applauseId) || 0);
        document.getElementById('applause-count').textContent = currentCount;
        
        const applauseBtn = document.getElementById('applause-button');
        applauseBtn.onclick = () => {
            currentCount++;
            localStorage.setItem(applauseId, currentCount);
            document.getElementById('applause-count').textContent = currentCount;
        };

        // Show the view
        fullLyricView.style.display = 'block';
        fullLyricView.scrollIntoView({ behavior: 'smooth' });
    };

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
                printContent += `<h2 style="color:#000; margin-top: 15px;">ACT: ${category}</h2><ul style="color:#333;">`;
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
      
