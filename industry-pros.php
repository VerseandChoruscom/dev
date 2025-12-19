<?php
// industry-pros.php

// 1. Load song data
$json_file = 'lyrics.json';
$json_content = file_exists($json_file) ? file_get_contents($json_file) : "[]";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pros | Verse and Chorus</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* --- BRANDING --- */
        :root {
            --metallic-gold: #D4AF37;
            --burgundy: #800020;
            --white: #FFFFFF;
            --black: #000000;
            --blue-gray-elegant: #5D6D7E;
            --sunset-orange: #ea580c;
            --sunset-orange-hover: #ff741a;
        }

        body {
            background-color: var(--black);
            color: var(--white);
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* --- HEADER (From index.html) --- */
        #main-header {
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 10px 20px; 
            background: var(--black);
            position: relative;
            flex-wrap: wrap; 
            border-bottom: 1px solid var(--metallic-gold);
            z-index: 50;
        }

        .logo-top-left {
            width: 90%; 
            max-width: 300px; 
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        #nav-menu {
            display: flex;
            gap: 20px;
        }

        #nav-menu a {
            color: var(--white) !important;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: var(--white);
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .hamburger { display: flex; }
            #nav-menu {
                display: none; 
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 100%; 
                left: 0;
                background-color: var(--black);
                padding: 20px 0;
                z-index: 1000;
                border-bottom: 2px solid var(--metallic-gold);
            }
            #nav-menu.active { display: flex; }
            #nav-menu a {
                padding: 15px 0;
                text-align: center;
                width: 100%;
                border-bottom: 1px solid #333;
            }
        }

        /* --- CONTENT STYLES --- */
        .content-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 40px 1rem;
            flex-grow: 1;
        }

        .script-font {
            font-family: 'Brush Script MT', 'Cursive', cursive;
        }

        /* Interactive Elements */
        .btn-sunset {
            background-color: var(--sunset-orange);
            color: white;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-sunset:hover {
            background-color: var(--sunset-orange-hover);
            transform: translateY(-2px);
        }

        .btn-round {
            background-color: var(--sunset-orange);
            color: white;
            border-radius: 9999px;
            padding: 10px 24px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s, transform 0.2s;
        }
        .btn-round:hover {
            background-color: var(--sunset-orange-hover);
            transform: scale(1.05);
        }

        /* Cards */
        .song-card {
            background-color: #1F2937;
            border: 1px solid #374151;
            transition: transform 0.2s;
        }
        .song-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(234, 88, 12, 0.2); /* Sunset glow */
            border-color: var(--sunset-orange);
        }

        /* Filter Controls */
        .filter-group-btn {
            background-color: #374151;
            color: #d1d5db;
            border: 1px solid #4b5563;
            transition: all 0.2s;
        }
        .filter-group-btn:hover {
            background-color: #4b5563;
            color: white;
        }
        .filter-group-btn.active {
            background-color: var(--sunset-orange);
            border-color: var(--sunset-orange);
            color: white;
        }

        .filter-pill {
            background-color: #111827;
            color: #9ca3af;
            border: 1px solid #374151;
            cursor: pointer;
            transition: all 0.2s;
        }
        .filter-pill:hover {
            border-color: var(--sunset-orange);
            color: white;
        }
        .filter-pill.active {
            background-color: var(--sunset-orange);
            color: white;
            border-color: var(--sunset-orange);
        }

        /* Back to Top */
        #scroll-to-top-btn {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            background-color: var(--sunset-orange);
            color: white;
            border: none;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
            font-size: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
            transition: transform 0.3s;
        }
        #scroll-to-top-btn:hover {
            background-color: var(--sunset-orange-hover);
            transform: scale(1.15);
        }

        /* Hidden Utility */
        .hidden { display: none !important; }

        /* --- FOOTER (From index.html) --- */
        .site-footer {
            background-color: var(--black);
            color: var(--white);
            text-align: center; 
            padding: 40px 20px;
            margin-top: auto;
            border-top: 5px solid var(--metallic-gold);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .site-footer p { margin: 5px 0; width: 100%; text-align: center; }
        .footer-line {
            border: 0;
            height: 1px;
            background: var(--metallic-gold);
            margin: 20px auto;
            width: 100%;
            max-width: 300px;
        }
        .footer-links { margin-top: 10px; text-align: center; width: 100%; }
        .footer-links a {
            color: var(--white);
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header id="main-header">
        <a href="/index.html">
            <img src="/images/logo/verseandchorus-logo-med-photo.jpg" alt="Verse and Chorus Logo" class="logo-top-left" />
        </a>
        
        <div class="hamburger" onclick="toggleMenu()">
            <div></div><div></div><div></div>
        </div>

        <nav id="nav-menu">
            <a href="/bio.html">Bio</a>
            <a href="/industry-pros.php" style="color: var(--metallic-gold) !important;">Industry Pro</a>
            <a href="/lyrics.html">Lyrics</a>
            <a href="/articles.html">Articles</a>
            <a href="/reports.html">Reports</a>
            <a href="/collab.html">Collab</a>
            <a href="/contact.html">Contact</a>
            <a href="/legal.html">Legal</a>
        </nav>
    </header>

    <main class="content-container">
        
        <div class="text-center mb-12">
            <h1 class="script-font text-5xl text-[var(--metallic-gold)] mb-4">Industry Pro Vault</h1>
            <p class="text-gray-400 text-lg mb-6">Curated A&R Catalog | Sync-Ready Lyrics | Commercial Demos</p>
            <a href="/legal.html" class="btn-round text-sm">View Licensing Terms</a>
        </div>

        <div class="bg-gray-900 rounded-xl border border-gray-700 shadow-2xl overflow-hidden mb-12">
            <div class="p-6 border-b border-gray-700 bg-gray-800">
                <h3 class="text-xl font-bold text-white mb-4"><i class="fa fa-search mr-2 text-[var(--metallic-gold)]"></i> Search Catalog</h3>
                
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow">
                        <input type="text" id="search-input" 
                               placeholder="Search Titles, Lyrics, Hashtags (#Empowerment), Keywords..." 
                               class="w-full p-3 rounded bg-gray-900 text-white border border-gray-600 focus:outline-none focus:border-[var(--sunset-orange)]">
                    </div>
                    
                    <div class="w-full md:w-48">
                        <select id="sort-select" onchange="applyFilters()" 
                                class="w-full p-3 rounded bg-gray-900 text-white border border-gray-600 focus:outline-none focus:border-[var(--sunset-orange)]">
                            <option value="title_asc">Sort: A-Z</option>
                            <option value="title_desc">Sort: Z-A</option>
                            <option value="artist_asc">Artist: A-Z</option>
                            <option value="tempo_slow">Tempo: Slow to Fast</option>
                            <option value="tempo_fast">Tempo: Fast to Slow</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <p class="text-gray-400 text-xs uppercase font-bold mb-3 tracking-widest">Filter By Category:</p>
                <div class="flex flex-wrap gap-2 mb-6" id="category-buttons">
                    <button class="filter-group-btn px-4 py-2 rounded text-sm font-bold" onclick="selectFilterGroup('genre', this)">Genre</button>
                    <button class="filter-group-btn px-4 py-2 rounded text-sm font-bold" onclick="selectFilterGroup('mood', this)">Mood</button>
                    <button class="filter-group-btn px-4 py-2 rounded text-sm font-bold" onclick="selectFilterGroup('theme', this)">Theme</button>
                    <button class="filter-group-btn px-4 py-2 rounded text-sm font-bold" onclick="selectFilterGroup('vocals', this)">Vocals</button>
                    <button class="filter-group-btn px-4 py-2 rounded text-sm font-bold" onclick="selectFilterGroup('tempo', this)">Tempo</button>
                </div>

                <div id="sub-options-container" class="hidden animate-fade-in p-4 bg-gray-800 rounded border border-gray-700">
                    <div class="flex justify-between items-center mb-3">
                        <h4 id="sub-options-title" class="text-[var(--sunset-orange)] font-bold text-sm uppercase">Select Options</h4>
                        <button onclick="clearActiveFilter()" class="text-xs text-gray-400 hover:text-white underline">Clear</button>
                    </div>
                    <div id="sub-options-grid" class="flex flex-wrap gap-2 max-h-40 overflow-y-auto"></div>
                </div>
                
                <div class="mt-4 flex justify-between items-center">
                    <span id="result-count" class="text-xs text-gray-500 italic">Loading...</span>
                    <button onclick="resetAll()" class="text-sm text-gray-400 hover:text-[var(--sunset-orange)] underline">Reset All Filters</button>
                </div>
            </div>
        </div>

        <div id="card-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            </div>

        <div class="bg-gray-900 border-t-4 border-[var(--metallic-gold)] rounded-xl p-10 text-center shadow-2xl mt-auto">
            <h2 class="script-font text-4xl text-[var(--metallic-gold)] mb-4">Professional Songwriting Services</h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Before you pitch, get your lyrics polished. We offer a comprehensive 
                <a href="/lyric-critque.html" class="text-[var(--sunset-orange)] font-bold hover:underline">Lyric Critique Service</a> 
                that includes a <strong>$499 Industry Report</strong>. 
                Learn more about our lead writer in the <a href="/bio.html" class="text-[var(--sunset-orange)] font-bold hover:underline">Spotlight Section</a>.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/lyric-critque.html" class="btn-round text-sm">Get Critique Report</a>
                <a href="/bio.html" class="btn-round bg-gray-700 hover:bg-gray-600 text-sm">View Spotlight</a>
            </div>
        </div>

    </main>

    <button onclick="topFunction()" id="scroll-to-top-btn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

    <footer class="site-footer">
        <p>♥️ Kellie Larson ♥️</p>
        <p>✍️ Cinematic Songwriter & Lyricist 🎹</p>
        <p>🧑‍🎤 www.VerseandChorus.com 🎙️</p>
        <p>© 2025 Kellie Larson. All Rights Reserved.</p>
        <p>✉️ info@verseandchorus.com 📨</p>
        <p>☎️ 760-537-0222 📲</p>
        <hr class="footer-line">
        <div class="footer-links">
            <a href="contact.html">Contact</a> | <a href="legal.html">Legal</a>
        </div>
    </footer>

    <div id="modal-overlay" class="fixed inset-0 bg-black bg-opacity-95 z-[100] hidden flex justify-center items-center p-4 backdrop-blur-sm">
        <div class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto border border-gray-600 relative flex flex-col">
            
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-3xl z-10">&times;</button>
            
            <div class="p-8 flex-grow">
                <h2 id="modal-title" class="text-3xl font-bold text-[var(--metallic-gold)] mb-1">Song Title</h2>
                <p id="modal-artist" class="text-gray-400 text-sm mb-6 uppercase tracking-wider">Artist Name</p>

                <div id="player-container" class="mb-8 bg-black rounded-lg p-2 min-h-[150px] flex items-center justify-center border border-gray-700 shadow-inner">
                    <p class="text-gray-500 animate-pulse">Loading Player...</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gray-900 p-6 rounded-lg border border-gray-700 shadow-inner h-80 overflow-y-auto">
                        <h4 class="text-[var(--sunset-orange)] font-bold mb-3 uppercase text-xs sticky top-0 bg-gray-900 pb-2 border-b border-gray-700">Full Lyrics</h4>
                        <pre id="modal-lyrics" class="text-gray-300 text-sm whitespace-pre-wrap font-sans leading-relaxed"></pre>
                    </div>
                    
                    <div class="space-y-6 text-sm text-gray-300">
                        <div><h4 class="text-[var(--sunset-orange)] font-bold uppercase text-xs mb-1">Mood & Tone</h4><p id="modal-mood">Placeholder</p></div>
                        <div><h4 class="text-[var(--sunset-orange)] font-bold uppercase text-xs mb-1">Placement</h4><p id="modal-placement">Placeholder</p></div>
                        <div><h4 class="text-[var(--sunset-orange)] font-bold uppercase text-xs mb-1">Description</h4><p id="modal-desc" class="italic">Placeholder</p></div>
                        <div><h4 class="text-[var(--sunset-orange)] font-bold uppercase text-xs mb-1">Tags</h4><p id="modal-tags" class="text-blue-300">#Placeholder</p></div>
                    </div>
                </div>
            </div>
            
            <div class="p-6 border-t border-gray-700 text-center bg-gray-900 rounded-b-xl">
                <button onclick="closeModal()" class="btn-sunset px-8 py-3 rounded-full font-bold shadow-lg">Close Vault</button>
            </div>
        </div>
    </div>

    <script>
        // Data Injection
        const SONGS = <?php echo $json_content; ?>;

        // Globals
        let currentFilterGroup = null;
        let activeFilterValue = null;
        const cardGrid = document.getElementById('card-grid');
        const searchInput = document.getElementById('search-input');
        const resultCount = document.getElementById('result-count');
        const subOptionsContainer = document.getElementById('sub-options-container');
        const subOptionsGrid = document.getElementById('sub-options-grid');
        const subOptionsTitle = document.getElementById('sub-options-title');

        // --- INIT ---
        document.addEventListener('DOMContentLoaded', () => {
            renderCards(SONGS);
            searchInput.addEventListener('input', applyFilters);
        });

        // --- RENDER CARDS ---
        function renderCards(data) {
            cardGrid.innerHTML = '';
            if (data.length === 0) {
                cardGrid.innerHTML = '<div class="col-span-full text-center py-20"><p class="text-2xl text-gray-500 mb-2">No matches found.</p><button onclick="resetAll()" class="text-[var(--sunset-orange)] underline">Clear Filters</button></div>';
                resultCount.innerText = '0 Songs Found';
                return;
            }
            
            resultCount.innerText = `${data.length} Songs Found`;

            data.forEach(song => {
                const genres = [song.genre1, song.genre2].filter(g => g && g !== 'Placeholder').join(' / ');
                const safeImg = song.coverImageUrl || 'https://placehold.co/400x400?text=No+Cover';
                
                const card = `
                    <div class="song-card p-6 rounded-xl shadow-lg flex flex-col h-full relative group">
                        <div class="relative mb-4 overflow-hidden rounded-lg">
                            <img src="${safeImg}" class="w-full h-56 object-cover transform group-hover:scale-105 transition duration-500" alt="${song.title}">
                            <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                <button onclick="openModal(${song.id})" class="bg-[var(--sunset-orange)] text-white px-6 py-2 rounded-full font-bold shadow-lg transform hover:scale-110 transition">View Details</button>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white mb-1 leading-tight">${song.title}</h3>
                        <p class="text-xs text-[var(--metallic-gold)] font-bold uppercase mb-3">${song.artistWriter}</p>
                        
                        <div class="flex-grow">
                            <p class="text-xs text-gray-400 mb-2"><span class="text-gray-500 uppercase font-bold mr-2">Genre:</span> ${genres}</p>
                            <p class="text-sm text-gray-300 line-clamp-3 leading-relaxed italic">${song.shortDescription || 'No description available.'}</p>
                        </div>

                        <div class="mt-6 flex gap-3">
                            <button onclick="openModal(${song.id})" class="flex-1 btn-sunset py-3 px-4 rounded-lg font-bold text-sm shadow-md uppercase tracking-wide">
                                <i class="fa fa-play mr-2"></i> Play / View
                            </button>
                            <button onclick="printSong(${song.id})" class="btn-sunset py-3 px-4 rounded-lg font-bold text-sm shadow-md uppercase tracking-wide">
                                <i class="fa fa-print"></i>
                            </button>
                        </div>
                    </div>
                `;
                cardGrid.insertAdjacentHTML('beforeend', card);
            });
        }

        // --- FILTERING LOGIC ---
        function selectFilterGroup(group, btn) {
            // UI Toggle
            document.querySelectorAll('.filter-group-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentFilterGroup = group;
            activeFilterValue = null; // Reset value when switching group

            // Collect unique values
            const values = new Set();
            SONGS.forEach(song => {
                let val = '';
                if(group === 'genre') val = [song.genre1, song.genre2].join(',');
                if(group === 'mood') val = song.moodTone;
                if(group === 'theme') val = song.category;
                if(group === 'vocals') val = song.vocalType;
                if(group === 'tempo') val = song.tempo;

                if (val && val !== 'Placeholder') {
                    val.split(',').forEach(v => {
                        const t = v.trim();
                        if (t && t !== 'N/A') values.add(t);
                    });
                }
            });

            // Render Pills
            subOptionsTitle.innerText = `Select ${group}:`;
            subOptionsGrid.innerHTML = '';
            Array.from(values).sort().forEach(val => {
                const pill = document.createElement('button');
                pill.className = 'filter-pill px-3 py-1 rounded-full text-xs font-medium';
                pill.innerText = val;
                pill.onclick = () => {
                    document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
                    pill.classList.add('active');
                    activeFilterValue = val;
                    applyFilters();
                };
                subOptionsGrid.appendChild(pill);
            });
            subOptionsContainer.classList.remove('hidden');
        }

        function clearActiveFilter() {
            activeFilterValue = null;
            document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
            applyFilters();
        }

        function resetAll() {
            currentFilterGroup = null;
            activeFilterValue = null;
            searchInput.value = '';
            subOptionsContainer.classList.add('hidden');
            document.querySelectorAll('.filter-group-btn').forEach(b => b.classList.remove('active'));
            document.getElementById('sort-select').selectedIndex = 0;
            applyFilters();
        }

        function applyFilters() {
            const query = searchInput.value.toLowerCase().trim();
            const sortMode = document.getElementById('sort-select').value;

            // 1. Filter
            let results = SONGS.filter(song => {
                // Text Search
                let textMatch = true;
                if (query) {
                    const haystack = [
                        song.title, song.artistWriter, song.shortDescription, 
                        song.moodTone, song.category, 
                        (song.hashtags || []).join(' '), (song.keywords || []).join(' ')
                    ].join(' ').toLowerCase();
                    textMatch = haystack.includes(query);
                }

                // Category Filter
                let catMatch = true;
                if (activeFilterValue) {
                    let targetVal = '';
                    if(currentFilterGroup === 'genre') targetVal = [song.genre1, song.genre2].join(',');
                    if(currentFilterGroup === 'mood') targetVal = song.moodTone;
                    if(currentFilterGroup === 'theme') targetVal = song.category;
                    if(currentFilterGroup === 'vocals') targetVal = song.vocalType;
                    if(currentFilterGroup === 'tempo') targetVal = song.tempo;
                    
                    catMatch = targetVal && targetVal.toLowerCase().includes(activeFilterValue.toLowerCase());
                }

                return textMatch && catMatch;
            });

            // 2. Sort
            results.sort((a, b) => {
                if (sortMode === 'title_asc') return a.title.localeCompare(b.title);
                if (sortMode === 'title_desc') return b.title.localeCompare(a.title);
                if (sortMode === 'artist_asc') return a.artistWriter.localeCompare(b.artistWriter);
                if (sortMode === 'tempo_slow') return (a.tempo || '').localeCompare(b.tempo || '');
                return 0;
            });

            renderCards(results);
        }

        // --- MODAL LOGIC ---
        function openModal(id) {
            const song = SONGS.find(s => s.id === id);
            if(!song) return;

            document.getElementById('modal-title').innerText = song.title;
            document.getElementById('modal-artist').innerText = song.artistWriter;
            document.getElementById('modal-lyrics').innerText = song.fullLyrics || "Lyrics unavailable.";
            document.getElementById('modal-mood').innerText = song.moodTone || "N/A";
            document.getElementById('modal-placement').innerText = song.placementType || "N/A";
            document.getElementById('modal-desc').innerText = song.longDescription || "N/A";
            document.getElementById('modal-tags').innerText = (song.hashtags || []).join(', ');

            const player = document.getElementById('player-container');
            if(song.songbayPlayerUrl && song.songbayPlayerUrl !== 'Placeholder') {
                player.innerHTML = `<iframe src="${song.songbayPlayerUrl}" style="width:100%; height:150px; border:none; border-radius:8px;" scrolling="no"></iframe>`;
            } else {
                player.innerHTML = `<p class="text-gray-500 italic text-sm">Audio player not available.</p>`;
            }

            document.getElementById('modal-overlay').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('modal-overlay').classList.add('hidden');
            document.getElementById('player-container').innerHTML = ''; // Stop audio
            document.body.style.overflow = 'auto';
        }

        document.getElementById('modal-overlay').addEventListener('click', (e) => {
            if(e.target.id === 'modal-overlay') closeModal();
        });

        // --- PRINT LOGIC (2 PAGES) ---
        function printSong(id) {
            const song = SONGS.find(s => s.id === id);
            if(!song) return;

            const date = new Date().toLocaleDateString();
            const headerHTML = document.getElementById('main-header').outerHTML;
            const footerHTML = document.querySelector('.site-footer').outerHTML;
            const genres = [song.genre1, song.genre2].filter(g => g && g !== 'Placeholder').join(' / ');
            const imgUrl = song.coverImageUrl || 'https://placehold.co/300';

            const win = window.open('', '', 'width=900,height=800');
            win.document.write(`
                <html>
                <head>
                    <title>${song.title} - One Sheet</title>
                    <link rel="stylesheet" href="/assets/css/style.css">
                    <style>
                        body { font-family: Arial, sans-serif; color: #000; margin: 0; background: #fff; }
                        #main-header, .site-footer { background: #000 !important; color: #fff !important; -webkit-print-color-adjust: exact; }
                        #nav-menu, .hamburger { display: none !important; }
                        .print-wrap { max-width: 800px; margin: 40px auto; padding: 0 20px; }
                        .page-break { page-break-before: always; display: block; height: 1px; margin: 20px 0; }
                        h1 { color: #800020; font-size: 36px; text-transform: uppercase; margin-bottom: 5px; text-align: center; }
                        .meta-box { border: 2px solid #D4AF37; padding: 20px; margin: 20px 0; display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
                        .meta-box strong { color: #ea580c; text-transform: uppercase; font-size: 11px; display: block; }
                        .cover-art { display: block; margin: 20px auto; width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.2); }
                        .blurb { background: #f9f9f9; padding: 15px; border-left: 4px solid #ea580c; font-size: 14px; margin-top: 20px; }
                        .lyrics-col { column-count: 2; column-gap: 40px; font-size: 13px; line-height: 1.6; white-space: pre-wrap; font-family: inherit; }
                    </style>
                </head>
                <body>
                    ${headerHTML}
                    <div class="print-wrap">
                        <h1>${song.title}</h1>
                        <p style="text-align: center; color: #666; margin-bottom: 20px;">Written by ${song.artistWriter} | ${date}</p>
                        
                        <img src="${imgUrl}" class="cover-art" />
                        
                        <div class="meta-box">
                            <div><strong>Genre</strong> ${genres}</div>
                            <div><strong>Mood</strong> ${song.moodTone}</div>
                            <div><strong>Licensing</strong> ${song.license || 'Contact for Licensing'}</div>
                            <div><strong>Copyright</strong> ${song.copyright}</div>
                        </div>

                        <div class="blurb">
                            <strong>Description:</strong><br>
                            ${song.longDescription || 'No description available.'}
                        </div>

                        <div class="blurb">
                            <strong>Artist Note:</strong> "My best lyrics focus on authentic storytelling and raw emotion, ensuring every word resonates with the visual narrative."<br><br>
                            <strong>Formats:</strong> High-quality MP3, WAV, M4A, and Stems available upon request.
                        </div>
                    </div>
                    ${footerHTML}

                    <div class="page-break"></div>
                    
                    ${headerHTML}
                    <div class="print-wrap">
                        <h1>${song.title}</h1>
                        <p style="text-align: center; margin-bottom: 30px;">${song.copyright}</p>
                        <h3 style="border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 20px; color: #ea580c;">Full Lyrics</h3>
                        <pre class="lyrics-col">${song.fullLyrics || 'Lyrics unavailable.'}</pre>
                    </div>
                    ${footerHTML}
                </body>
                </html>
            `);
            win.document.close();
            win.focus();
            setTimeout(() => win.print(), 1000);
        }

        // --- NAV ---
        function toggleMenu() { document.getElementById('nav-menu').classList.toggle('active'); }
        function topFunction() { window.scrollTo({ top: 0, behavior: 'smooth' }); }
        window.onscroll = () => {
            const btn = document.getElementById("scroll-to-top-btn");
            btn.style.display = (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) ? "block" : "none";
        };
    </script>
</body>
</html>
