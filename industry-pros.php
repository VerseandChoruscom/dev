<?php
// industry-pros.php

// 1. Load song data safely
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
    
    <link rel="stylesheet" href="/assets/css/style.css" />
    
    <style>
        /* --- BRANDING COLORS --- */
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
        }

        /* --- HEADER & NAV (From index.html) --- */
        #main-header {
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 10px 20px; 
            background: var(--black);
            position: relative;
            flex-wrap: wrap; 
            border-bottom: 1px solid var(--metallic-gold);
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

        /* --- PAGE CONTENT --- */
        .content-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 40px 1rem;
        }

        .script-font {
            font-family: 'Brush Script MT', 'Cursive', cursive;
        }

        /* Buttons & Interactive Elements */
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

        /* Round Terms Button */
        .btn-round-terms {
            background-color: var(--sunset-orange);
            color: white;
            border-radius: 9999px;
            padding: 12px 30px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 6px rgba(234, 88, 12, 0.3);
        }
        .btn-round-terms:hover {
            background-color: var(--sunset-orange-hover);
            transform: scale(1.05);
        }

        /* Back to Top Arrow */
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

        /* Cards & Filters */
        .song-card {
            background-color: #1F2937;
            border: 1px solid #374151;
            transition: transform 0.2s;
        }
        .song-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.4);
        }

        .filter-btn {
            background-color: #374151;
            color: white;
            border: 1px solid #4B5563;
        }
        .filter-btn.active {
            background-color: var(--sunset-orange);
            border-color: var(--sunset-orange);
        }

        /* --- FOOTER (From index.html) --- */
        .site-footer {
            background-color: var(--black);
            color: var(--white);
            text-align: center; 
            padding: 40px 20px;
            margin-top: 50px;
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
            <p class="text-gray-400 mb-8 text-lg">Curated A&R Catalog | Sync-Ready Lyrics | Commercial Demos</p>
            
            <a href="/legal.html" class="btn-round-terms">
                View Licensing Terms
            </a>
        </div>

        <div class="bg-gray-900 p-8 rounded-xl mb-12 border border-gray-700 shadow-2xl">
            <h3 class="text-2xl font-bold text-white mb-6">Search Catalog</h3>
            
            <input type="text" id="search-input" 
                   placeholder="Search by Title, Mood, Hashtags (#Empowerment), Genre, or Keywords..."
                   class="w-full p-4 mb-6 rounded-lg bg-gray-800 text-white border border-gray-600 focus:outline-none focus:border-[var(--sunset-orange)] text-lg placeholder-gray-500 transition">
            
            <div class="flex flex-wrap gap-3 mb-6" id="filter-categories">
                </div>

            <div id="sub-filters" class="hidden bg-gray-800 p-6 rounded-lg mt-4 border border-gray-700 animate-fade-in">
                <h4 id="sub-filter-title" class="text-[var(--metallic-gold)] mb-4 font-bold uppercase text-sm tracking-widest">Select Option:</h4>
                <div id="sub-filter-options" class="flex flex-wrap gap-3 max-h-48 overflow-y-auto">
                    </div>
            </div>

            <button onclick="resetFilters()" class="mt-6 text-sm text-gray-400 hover:text-[var(--sunset-orange)] underline transition">Reset All Filters</button>
        </div>

        <div id="card-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            </div>

        <div class="p-10 bg-gray-900 rounded-xl border-t-4 border-[var(--metallic-gold)] text-center shadow-2xl">
            <h2 class="script-font text-4xl text-[var(--metallic-gold)] mb-4">Elevate Your Songwriting</h2>
            <p class="text-gray-300 mb-8 max-w-3xl mx-auto text-lg leading-relaxed">
                Need professional feedback before pitching? Our 
                <a href="/lyric-critque.html" class="text-[var(--sunset-orange)] font-bold hover:text-white transition">Lyric Critique Services</a> 
                provide a comprehensive <strong>$499 Industry Report</strong> to polish your songs for the market. 
                Discover more about our lead writer in the <a href="/bio.html" class="text-[var(--sunset-orange)] font-bold hover:text-white transition">Spotlight Section</a>.
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                <a href="/lyric-critque.html" class="btn-round-terms text-sm">Get the $499 Report</a>
                <a href="/bio.html" class="btn-round-terms bg-gray-700 hover:bg-gray-600 text-sm">View Artist Spotlight</a>
            </div>
        </div>

    </main>

    <button onclick="topFunction()" id="scroll-to-top-btn" title="Go to top">⬆️</button>

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

    <div id="modal-overlay" class="fixed inset-0 bg-black bg-opacity-95 z-50 hidden flex justify-center items-center p-4 backdrop-blur-sm">
        <div class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto border border-gray-600 relative">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-3xl font-bold">&times;</button>
            
            <div class="p-8">
                <h2 id="modal-title" class="text-3xl font-bold text-[var(--metallic-gold)] mb-2">Song Title</h2>
                <p id="modal-artist" class="text-gray-400 text-sm mb-6">Artist Name</p>

                <div id="player-wrapper" class="mb-8 bg-black rounded-lg p-4 min-h-[150px] flex items-center justify-center border border-gray-700 shadow-inner">
                    <p class="text-gray-500 animate-pulse">Loading Player...</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-[var(--sunset-orange)] font-bold mb-3 uppercase text-xs tracking-wider">Full Lyrics</h4>
                        <div id="modal-lyrics" class="bg-gray-900 p-6 rounded-lg text-gray-300 text-sm whitespace-pre-wrap h-80 overflow-y-auto border border-gray-700 font-mono leading-relaxed shadow-inner"></div>
                    </div>
                    <div class="space-y-6 text-sm text-gray-300">
                        <div><h4 class="text-[var(--sunset-orange)] font-bold uppercase text-xs mb-1">Mood & Tone</h4><p id="modal-mood">Placeholder</p></div>
                        <div><h4 class="text-[var(--sunset-orange)] font-bold uppercase text-xs mb-1">Placement Type</h4><p id="modal-placement">Placeholder</p></div>
                        <div><h4 class="text-[var(--sunset-orange)] font-bold uppercase text-xs mb-1">Description</h4><p id="modal-desc" class="italic leading-relaxed">Placeholder</p></div>
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
        const SONGS_DATA = <?php echo $json_content; ?>;

        // Elements
        const cardGrid = document.getElementById('card-grid');
        const searchInput = document.getElementById('search-input');
        const filterContainer = document.getElementById('filter-categories');
        const subFilterContainer = document.getElementById('sub-filters');
        const subFilterOptions = document.getElementById('sub-filter-options');
        const subFilterTitle = document.getElementById('sub-filter-title');
        
        // Modal
        const modal = document.getElementById('modal-overlay');
        const playerWrapper = document.getElementById('player-wrapper');

        // State
        let activeCategoryKey = null;
        let activeFilterValue = null;

        const CATEGORY_MAP = [
            { label: 'Genre', key: 'genre1' },
            { label: 'Mood', key: 'moodTone' },
            { label: 'Theme', key: 'category' },
            { label: 'Tempo', key: 'tempo' },
            { label: 'Vocals', key: 'vocalType' },
            { label: 'Placement', key: 'placementType' }
        ];

        // --- INITIALIZATION ---
        document.addEventListener('DOMContentLoaded', () => {
            renderFilterButtons();
            renderCards(SONGS_DATA);
        });

        // --- NAVIGATION ---
        function toggleMenu() {
            document.getElementById('nav-menu').classList.toggle('active');
        }

        window.onscroll = function() { scrollFunction() };
        function scrollFunction() {
            const btn = document.getElementById("scroll-to-top-btn");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        }
        function topFunction() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // --- CARD RENDERING ---
        function renderCards(data) {
            cardGrid.innerHTML = '';
            if (data.length === 0) {
                cardGrid.innerHTML = '<p class="text-gray-400 col-span-full text-center py-10 text-xl">No songs found matching your criteria.</p>';
                return;
            }
            data.forEach(song => {
                const genres = [song.genre1, song.genre2].filter(g => g && g !== 'Placeholder').join(' / ');
                const safeImg = song.coverImageUrl || 'https://placehold.co/400x400?text=No+Image';
                
                const card = `
                    <div class="song-card p-6 rounded-xl shadow-lg flex flex-col h-full hover:border-[var(--sunset-orange)] transition duration-300">
                        <div class="relative mb-6 group">
                            <img src="${safeImg}" class="w-full h-64 object-cover rounded-lg shadow-md group-hover:opacity-80 transition" alt="${song.title}">
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                <button onclick="openModal(${song.id})" class="bg-black bg-opacity-70 text-white rounded-full p-4 hover:bg-[var(--sunset-orange)]">
                                    ▶ Play
                                </button>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white mb-2 leading-tight">${song.title}</h3>
                        <p class="text-sm text-[var(--metallic-gold)] mb-4 font-bold uppercase tracking-wider">${song.artistWriter}</p>
                        
                        <div class="mb-6 flex-grow space-y-2">
                            <p class="text-xs text-gray-400 uppercase font-bold">Genre</p>
                            <p class="text-sm text-white">${genres}</p>
                            <div class="h-px bg-gray-700 my-2"></div>
                            <p class="text-sm text-gray-300 line-clamp-3 italic leading-relaxed">${song.shortDescription || 'No description available.'}</p>
                        </div>

                        <div class="flex gap-3 mt-auto">
                            <button onclick="openModal(${song.id})" 
                                    class="flex-1 btn-sunset font-bold py-3 px-4 rounded-lg text-sm shadow-lg uppercase tracking-wide">
                                Play / View
                            </button>
                            <button onclick="printSong(${song.id})" 
                                    class="btn-sunset font-bold py-3 px-6 rounded-lg text-sm shadow-lg uppercase tracking-wide">
                                🖨️ Print
                            </button>
                        </div>
                    </div>
                `;
                cardGrid.insertAdjacentHTML('beforeend', card);
            });
        }

        // --- FILTERING ---
        function renderFilterButtons() {
            filterContainer.innerHTML = '';
            CATEGORY_MAP.forEach(cat => {
                const btn = document.createElement('button');
                btn.className = `filter-btn px-5 py-2 rounded-full text-sm font-bold transition uppercase tracking-wider shadow-sm`;
                btn.innerText = cat.label;
                btn.onclick = () => activateCategory(cat.key, cat.label, btn);
                filterContainer.appendChild(btn);
            });
        }

        function activateCategory(jsonKey, displayLabel, btnElement) {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btnElement.classList.add('active');
            
            activeCategoryKey = jsonKey;
            activeFilterValue = null;
            
            const values = new Set();
            SONGS_DATA.forEach(song => {
                const rawVal = song[jsonKey];
                if (rawVal && rawVal !== 'Placeholder') {
                    rawVal.split(',').forEach(v => { const t = v.trim(); if(t) values.add(t); });
                }
            });

            subFilterTitle.innerText = `Filter by ${displayLabel}:`;
            subFilterOptions.innerHTML = '';
            
            const allBtn = createSubOption('All', () => applyFilter(null));
            subFilterOptions.appendChild(allBtn);

            Array.from(values).sort().forEach(val => {
                const optBtn = createSubOption(val, () => applyFilter(val));
                subFilterOptions.appendChild(optBtn);
            });
            subFilterContainer.classList.remove('hidden');
        }

        function createSubOption(text, onClick) {
            const btn = document.createElement('button');
            btn.className = "px-4 py-2 bg-gray-700 hover:bg-[var(--sunset-orange)] text-xs rounded-full border border-gray-600 text-gray-200 transition font-medium shadow-sm mb-2";
            btn.innerText = text;
            btn.onclick = (e) => {
                document.querySelectorAll('#sub-filter-options button').forEach(b => {
                    b.classList.remove('bg-[var(--sunset-orange)]', 'text-white', 'border-transparent');
                    b.classList.add('bg-gray-700', 'text-gray-200');
                });
                e.target.classList.remove('bg-gray-700', 'text-gray-200');
                e.target.classList.add('bg-[var(--sunset-orange)]', 'text-white', 'border-transparent');
                onClick();
            };
            return btn;
        }

        function applyFilter(value) {
            activeFilterValue = value;
            runMasterSearch();
        }

        searchInput.addEventListener('input', runMasterSearch);

        function runMasterSearch() {
            const query = searchInput.value.toLowerCase().trim();
            const filtered = SONGS_DATA.filter(song => {
                let textMatch = true;
                if (query) {
                    const searchable = [
                        song.title, song.artistWriter, song.shortDescription, song.longDescription,
                        song.moodTone, song.category, (song.keywords || []).join(' '), (song.hashtags || []).join(' ')
                    ].join(' ').toLowerCase();
                    textMatch = searchable.includes(query);
                }
                let catMatch = true;
                if (activeCategoryKey && activeFilterValue) {
                    const songVal = song[activeCategoryKey];
                    catMatch = songVal ? songVal.toLowerCase().includes(activeFilterValue.toLowerCase()) : false;
                }
                return textMatch && catMatch;
            });
            renderCards(filtered);
        }

        function resetFilters() {
            activeCategoryKey = null;
            activeFilterValue = null;
            searchInput.value = '';
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            subFilterContainer.classList.add('hidden');
            renderCards(SONGS_DATA);
        }

        // --- MODAL / PLAYER ---
        function openModal(songId) {
            const song = SONGS_DATA.find(s => s.id === songId);
            if (!song) return;

            document.getElementById('modal-title').innerText = song.title;
            document.getElementById('modal-artist').innerText = song.artistWriter;
            document.getElementById('modal-lyrics').innerText = song.fullLyrics || 'Lyrics not available.';
            document.getElementById('modal-mood').innerText = song.moodTone || 'N/A';
            document.getElementById('modal-placement').innerText = song.placementType || 'N/A';
            document.getElementById('modal-desc').innerText = song.longDescription || 'N/A';
            document.getElementById('modal-tags').innerText = (song.hashtags || []).join(' ');

            if (song.songbayPlayerUrl && song.songbayPlayerUrl !== 'Placeholder') {
                playerWrapper.innerHTML = `<iframe src="${song.songbayPlayerUrl}" style="width:100%; height:150px; border:none; border-radius:4px;" scrolling="no"></iframe>`;
            } else {
                playerWrapper.innerHTML = '<p class="text-gray-500 italic">No audio player available for this track.</p>';
            }
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; 
        }

        function closeModal() {
            modal.classList.add('hidden');
            playerWrapper.innerHTML = ''; 
            document.body.style.overflow = 'auto';
        }
        modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });

        // --- 4. ADVANCED PRINT FUNCTION (2 PAGES) ---
        function printSong(songId) {
            const song = SONGS_DATA.find(s => s.id === songId);
            if (!song) return;

            const date = new Date().toLocaleDateString();
            const headerHTML = document.getElementById('main-header').outerHTML;
            const footerHTML = document.querySelector('.site-footer').outerHTML;
            const safeImg = song.coverImageUrl || 'https://placehold.co/400x400?text=No+Cover';

            const printWindow = window.open('', '', 'width=900,height=800');
            printWindow.document.write(`
                <html>
                <head>
                    <title>${song.title} - Industry One Sheet</title>
                    <link rel="stylesheet" href="/assets/css/style.css" />
                    <style>
                        body { font-family: 'Helvetica Neue', Arial, sans-serif; color: #000; margin: 0; background: #fff; }
                        #main-header, .site-footer { background: #000 !important; color: #fff !important; -webkit-print-color-adjust: exact; }
                        #main-header a, .site-footer a { color: #fff !important; text-decoration: none; }
                        #nav-menu, .hamburger { display: none !important; } /* Hide nav on print */
                        
                        .container { max-width: 800px; margin: 0 auto; padding: 40px; }
                        .page-break { page-break-before: always; }
                        
                        h1 { font-size: 36px; color: #800020; margin-bottom: 5px; text-transform: uppercase; letter-spacing: 1px; text-align: center; }
                        h2 { font-size: 24px; color: #D4AF37; margin-bottom: 20px; text-align: center; font-weight: normal; font-family: 'Brush Script MT', cursive; }
                        
                        .cover-art { width: 300px; height: 300px; object-fit: cover; border-radius: 8px; margin: 20px auto; display: block; box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
                        
                        .meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 30px 0; border-top: 2px solid #D4AF37; border-bottom: 2px solid #D4AF37; padding: 20px 0; }
                        .meta-item strong { display: block; color: #ea580c; text-transform: uppercase; font-size: 11px; margin-bottom: 3px; }
                        .meta-item span { font-size: 14px; color: #333; }
                        
                        .desc-box { background: #f4f4f4; padding: 20px; border-left: 5px solid #800020; margin-bottom: 20px; font-size: 14px; line-height: 1.6; }
                        
                        .blurb { font-style: italic; color: #555; font-size: 13px; text-align: center; margin-top: 30px; border: 1px dashed #ccc; padding: 10px; }
                        
                        .lyrics-col { column-count: 2; column-gap: 40px; font-size: 13px; line-height: 1.5; white-space: pre-wrap; font-family: inherit; }
                    </style>
                </head>
                <body>
                    ${headerHTML}
                    <div class="container">
                        <h1>${song.title}</h1>
                        <h2>Written by ${song.artistWriter} | ${date}</h2>
                        
                        <img src="${safeImg}" class="cover-art" />
                        
                        <div class="meta-grid">
                            <div class="meta-item"><strong>Mood</strong> <span>${song.moodTone || 'N/A'}</span></div>
                            <div class="meta-item"><strong>Licensing</strong> <span>${song.license || 'Standard Sync'}</span></div>
                            <div class="meta-item"><strong>Copyright</strong> <span>${song.copyright}</span></div>
                            <div class="meta-item"><strong>Legal</strong> <span>Standard Terms (Placeholder)</span></div>
                        </div>

                        <div class="desc-box">
                            <strong style="color:#000;">Song Description:</strong><br>
                            ${song.longDescription || 'No description available.'}
                        </div>

                        <div class="blurb">
                            <strong>Artist Note:</strong> My best lyrics focus on authentic storytelling and raw emotion, ensuring every word resonates with the visual narrative.<br><br>
                            <strong>Audio Formats:</strong> High-quality MP3, WAV, M4A, and Stems available upon request.
                        </div>
                    </div>
                    ${footerHTML}

                    <div class="page-break"></div>
                    ${headerHTML}
                    <div class="container">
                        <h1>${song.title}</h1>
                        <p style="text-align:center; color:#666; margin-bottom: 30px;">${song.copyright}</p>
                        
                        <h3 style="color:#ea580c; border-bottom:1px solid #ddd; padding-bottom:5px; margin-bottom:20px;">Full Lyrics</h3>
                        <pre class="lyrics-col">${song.fullLyrics || 'Lyrics unavailable.'}</pre>
                    </div>
                    ${footerHTML}
                </body>
                </html>
            `);
            printWindow.document.close();
            printWindow.focus();
            setTimeout(() => { printWindow.print(); }, 800);
        }
    </script>
</body>
</html>
