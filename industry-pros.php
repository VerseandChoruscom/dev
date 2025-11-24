<?php
// FILE: industry.pros.php
// The Cinematic Songwriter and Lyricist Kellie Larson
// Note: Changed navigation from /industry-pros.html to /industry.pros.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | Verse and Chorus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        /* Define Custom Colors & Fonts */
        :root {
            --burgundy: #800020; /* Deep Burgundy */
            --light-text: #e0e0e0;
            --main-text: #ffffff;
            --sunset-orange: #ff8c42; /* Sunset Orange */
            --orange-active: #f97316; /* Tailwind orange-500 */
        }

        /* Apply global styles */
        body {
            background-color: #000000;
            color: var(--light-text);
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        /* Script font for the main site title */
        .script-font {
            font-family: 'Parisienne', cursive;
        }

        /* The unique page title block style */
        .page-title-block {
            display: flex;
            align-items: center;
            border-left: 2px solid var(--light-text);
            padding-left: 1rem;
        }
        
        /* General content wrapper for centering */
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Legal Box Styling */
        .legal-box {
            border: 4px solid #9ca3af;
            background-color: #1a1a1a;
            border-radius: 0.5rem;
            line-height: 1.6;
        }

        /* Custom Scratched/Distressed Border Effect for Song Cards */
        .scratched-border {
            border: 0px solid transparent; 
            border-width: 5px;
            border-style: solid;
            border-radius: 0.5rem;
            border-image-source: repeating-linear-gradient(
                90deg,
                #000000 0px,
                #000000 3px,
                #ffffff 3px,
                #ffffff 5px,
                #000000 5px
            );
            border-image-slice: 1;
            border-image-repeat: repeat;
        }

        /* --- Custom Styles for New Functionality --- */
        .btn-sunset-orange {
            background-color: var(--sunset-orange);
            transition: background-color 0.15s ease-in-out;
            white-space: nowrap;
        }
        .btn-sunset-orange:hover {
            background-color: #ff741a;
        }
        
        /* Thematic Filter Cards (12 Cards - New Grid Layout) */
        .thematic-card {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            aspect-ratio: 1 / 1.4;
            display: flex;
            align-items: flex-end;
            padding: 1rem;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            border: 4px solid transparent;
            cursor: pointer;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
        }
        .thematic-card:hover {
            opacity: 0.95;
            transform: translateY(-2px);
        }
        .thematic-card.active-filter {
            border-color: var(--orange-active);
            box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.5);
        }

        /* Filter buttons */
        .filter-btn-active {
            background-color: var(--orange-active) !important;
            color: white !important;
            border-color: var(--orange-active) !important;
        }
        .sub-filter-option {
            transition: all 0.1s;
        }
        .sub-filter-option:hover {
            background-color: #262626 !important; /* Darker gray background */
        }
        .sub-filter-option.active-sub {
            background-color: var(--orange-active) !important;
            color: white !important;
            border-color: var(--orange-active) !important;
        }

    </style>
</head>
<body class="min-h-screen flex flex-col">

    <a id="top" class="absolute -top-20"></a>

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-3 flex justify-between items-center">
            
            <div class="flex items-center space-x-4">
                <a href="/index.html" class="flex items-center space-x-2">
                    <div class="h-8 w-8 bg-white rounded-full flex items-center justify-center text-[var(--burgundy)] font-bold text-xs">V&C</div>
                </a>
            </div>

            <nav id="nav-desktop" class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider">
                    <li><a href="/index.html" class="hover:text-slate-300 transition duration-200">HOME</a></li>
                    <li><a href="/bio.html" class="hover:text-slate-300 transition duration-200">BIO</a></li>
                    <li><a href="/industry.pros.php" class="hover:text-slate-300 transition duration-200">INDUSTRY PROS</a></li>
                    <li><a href="/lyrics.html" class="hover:text-slate-300 transition duration-200">MUSIC</a></li>
                    <li><a href="/green-room.html" class="hover:text-slate-300 transition duration-200">GREEN ROOM</a></li>
                    <li><a href="/articles.html" class="hover:text-slate-300 transition duration-200">ARTICLES</a></li>
                    <li><a href="/lyric-critque.html" class="hover:text-slate-300 transition duration-200">LYRIC CRITIQUE</a></li>
                    <li><a href="/collab.html" class="hover:text-slate-300 transition duration-200">COLLAB/CONSULT</a></li>
                    <li><a href="/contact.html" class="hover:text-slate-300 transition duration-200">CONTACT</a></li>
                    <li><a href="/legal.html" class="hover:text-slate-300 transition duration-200">LEGAL</a></li>
                </ul>
            </nav>

            <button id="hamburger-menu" class="md:hidden text-white focus:outline-none p-2 rounded-md hover:bg-black/20 transition duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden absolute w-full bg-[var(--burgundy)] transition-all duration-300 shadow-lg">
            <ul class="flex flex-col text-center pb-2 text-sm font-semibold tracking-wider">
                <li><a href="/index.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">HOME</a></li>
                <li><a href="/bio.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">BIO</a></li>
                <li><a href="/industry.pros.php" class="block py-2 text-white hover:bg-slate-700 transition duration-200">INDUSTRY PROS</a></li>
                <li><a href="/lyrics.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">MUSIC</a></li>
                <li><a href="/green-room.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">GREEN ROOM</a></li>
                <li><a href="/articles.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">ARTICLES</a></li>
                <li><a href="/lyric-critque.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">LYRIC CRITIQUE</a></li>
                <li><a href="/collab.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">COLLAB/CONSULT</a></li>
                <li><a href="/contact.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">CONTACT</a></li>
                <li><a href="/legal.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">LEGAL</a></li>
            </ul>
        </div>
    </header>

    <div class="bg-black py-4 border-b border-gray-800 shadow-lg">
        <div class="content-container text-center">
            <h1 class="script-font text-5xl sm:text-6xl font-bold tracking-wider text-amber-400">Verse and Chorus</h1>
        </div>
    </div>

    <main class="flex-grow py-10">
        <div class="content-container">

            <div class="mb-10 pt-4">
                <div class="page-title-block">
                    <h2 class="text-4xl font-extrabold tracking-widest text-white ml-4">INDUSTRY PRO VAULT</h2>
                </div>
                <p class="text-lg mt-2 text-gray-300 ml-4">Curated catalog for A&R and sync professionals</p>
            </div>
            
            <div class="bg-[var(--burgundy)] p-8 mb-12 rounded-xl shadow-2xl text-center border-6 border-gray-400">
                <h3 class="text-2xl font-bold text-white mb-3">Welcome to the Vault</h3>
                <p class="text-gray-100 max-w-3xl mx-auto">
                    This exclusive section provides fully licensed, pre-cleared assets ready for immediate commercial development. Our system ensures clear IP ownership and royalty-free composition for all placeholder demos, streamlining your path to full copyright.
                </p>
                <a href="/legal.html" class="inline-block mt-5 bg-white text-[var(--burgundy)] font-bold py-2 px-6 rounded-full hover:bg-gray-200 transition duration-300">
                    Explore Licensing Options
                </a>
            </div>


            <div class="legal-box p-6 mb-10">
                <h4 class="text-xl font-bold text-white mb-4">Rights & Licensing Assurance (For Industry Use)</h4>
                
                <p class="mb-6 text-gray-300">To ensure a seamless, low-risk process for A&R and Sync partners, we offer the following guarantees for all placeholder demos:</p>

                <ul class="text-sm text-gray-300">
                    <li><strong class="text-white">✅ Royalty-Free Composition:</strong> The instrumental and vocal placeholder track generated by Donna AI is covered by a Lifetime Royalty-Free Commercial License. This eliminates all recurring sync or master use fees for the underlying AI composition.</li>
                    
                    <li><strong class="text-white">✅ Guaranteed Lyric Ownership:</strong> The lyrics are 100% human-authored and registered via Songbay, providing clear, verifiable intellectual property (IP) protection and ownership before any further development.</li>
                    
                    <li><strong class="text-white">✅ Zero Future Royalties from AI:</strong> Your label/production company will never owe performance or mechanical royalties to the AI platform owner (Mobiversite/Donna AI) for the use of the demo.</li>
                    
                    <li><strong class="text-white">✅ Simple Path to Full Copyright:</strong> Once you sign the song and re-record the music (replacing the AI vocals/instruments), the song becomes a new, fully human-authored derivative work based on our copyrighted lyrics, providing your company with full, traditional copyright ownership over the final master and publishing.</li>
                    
                    <li><strong class="text-white">✅ Immediate Clearance:</strong> All material is pre-cleared for commercial development and Sync Licensing under the terms of our active PRO subscription. Proof of License (PoC) available instantly upon request.</li>
                </ul>
            </div>
            
            <section class="mb-12">
                <h2 class="text-2xl font-bold text-white mb-6 border-b-2 border-indigo-500 pb-2">Core Thematic Pillars (SEO Rich)</h2>
                <p class="text-gray-400 mb-6">Click a thematic card to quickly filter the catalog by core narrative. These themes are SEO-rich categories used for placement and sync targeting.</p>

                <div id="thematic-card-container" class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-4">
                    </div>
            </section>
            
            <div class="bg-gray-900 p-6 rounded-xl mb-10 text-white shadow-lg border-4 border-gray-700">
                <h3 class="text-xl font-semibold text-white mb-4 border-b border-gray-700 pb-2">Advanced Search & Metadata Filtering (SEO Rich)</h3>
                
                <input type="text" id="search-input" placeholder="Search Catalog: Filter by Title, Category, PlacementType, MoodTone, or Genre..."
                       class="w-full p-3 border border-gray-600 rounded-lg shadow-sm bg-gray-800 text-white focus:ring-[var(--burgundy)] focus:border-[var(--burgundy)] transition duration-150 mb-4"
                       onkeyup="applyMasterFilter()">
                
                <div class="flex flex-wrap gap-2 mb-4" id="filter-category-buttons">
                    </div>
                
                <div id="sub-filter-container" class="bg-gray-800 p-4 rounded-lg shadow-inner hidden border border-gray-700">
                    <h4 class="font-semibold text-gray-300 mb-3" id="sub-filter-title">Filter by...</h4>
                    <div id="sub-filter-options" class="flex flex-wrap gap-2 max-h-40 overflow-y-auto">
                        </div>
                </div>
                
                <button id="reset-filter-btn" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200 mt-4">Reset All Filters</button>
            </div>


            <div id="card-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                </div>
            
        </div>
    </main>

    <footer class="bg-[var(--burgundy)] py-6 mt-auto">
        <div class="content-container text-center text-sm text-gray-200">
            
            <p class="mb-0 w-fit mx-auto">Kellie Larson</p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1 text-xs">Cinematic songwriter and Lyricist</p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1">
                <a href="tel:7605370222" class="hover:underline">760-537-0222</a>
            </p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1">
                <a href="mailto:info@verseandchorus.com" class="hover:underline">info@verseandchorus.com</a>
            </p>
            
            <p class="pt-2">
                <a href="/contact.html" class="hover:underline mx-2">Contact</a>
                <span class="mx-1">|</span>
                <a href="/legal.html" class="hover:underline mx-2">Terms</a>
            </p>

            <p class="mt-4 text-xs text-gray-400">&copy; 2025 Verse and Chorus</p>
        </div>
    </footer>

    <button id="back-to-top-btn" 
            class="fixed bottom-5 right-5 z-40 p-3 rounded-full 
                   bg-[var(--burgundy)] text-white shadow-lg hover:bg-red-800 
                   transition-opacity duration-300 opacity-0 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>
    
    <div id="music-player-modal" class="fixed inset-0 bg-gray-900 bg-opacity-90 z-50 hidden justify-center items-center p-4 backdrop-blur-sm">
        
        <div id="modal-content" class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto transform transition-all duration-300 scale-95 opacity-0 border-4 border-gray-600"
             oncontextmenu="return false;">
            
            <div class="p-6">
                <h2 id="modal-title" class="text-3xl font-extrabold mb-4 text-white border-b border-gray-700 pb-2">Song Title</h2>
                <p class="text-sm text-gray-400 mb-6">Full Lyrics and Audio Player</p>

                <div class="mb-6 border border-gray-600 p-4 rounded-lg bg-gray-900">
                    <p class="text-lg font-semibold mb-2 text-white">Audio Preview (Placeholder)</p>
                    <audio controls class="w-full">
                        <source src="" type="audio/mpeg">
                        Your browser does support the audio element.
                    </audio>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-300 border-b pb-2 border-gray-700">Lyrics</h3>
                    <pre id="modal-lyrics" class="whitespace-pre-wrap text-gray-200 leading-relaxed text-base bg-gray-900 p-4 rounded-lg border border-yellow-800 overflow-x-auto">
                        Placeholder Lyrics. Full lyrics would appear here.
                    </pre>
                </div>

                <div class="flex justify-end">
                    <button id="close-modal-btn" class="px-6 py-2 bg-[var(--burgundy)] text-white rounded-lg hover:bg-red-800 transition duration-150 font-bold shadow-lg">
                        Close Vault
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // --- DATA INTEGRATION VIA PHP ---
        // This PHP code outputs the ALL_SONGS_DATA array directly from lyrics.json
        <?php include 'data_loader.php'; ?> 
        // The constant ALL_SONGS_DATA is now populated from the JSON file

        // Thematic Cards Data (Kept in JS as it's static UI data)
        function getAssetUrl(filenameWithHash) {
            const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';
            // Assuming this is used for the static assets provided in the prompt's array
            return `/assets/covers/${filenameWithHash}`; 
        }
        
        const PLACEHOLDER_IMAGE = 'https://placehold.co/250x350/800020/ffffff?text=THEME+CARD';

        const THEMATIC_CARDS_DATA = [
            // Using placeholder image paths from original JS, these are static UI elements
            { theme: "Dark / Narrative", image: '/assets/covers/disenchantment-lyrics-photo.jpg' }, 
            { theme: "Fun / Party / Nostalgia", image: '/assets/covers/social-world-lyrics-photo.jpg' }, 
            { theme: "Introspection / Faith", image: '/assets/covers/mutual-value-lyrics-photo.jpg' }, 
            { theme: "Love / Loss / Longing", image: '/assets/covers/loss-of-market-share-lyrics-photo.jpg' }, 
            { theme: "Vengeance / Empowerment", image: '/assets/covers/empowerment-arc-lyrics-photo.jpg' },
            { theme: "Rock / Alternative Jams", image: PLACEHOLDER_IMAGE }, 

            // Row 2 (6 cards - duplicate themes for visual density)
            { theme: "Dark / Narrative", image: PLACEHOLDER_IMAGE }, 
            { theme: "Fun / Party / Nostalgia", image: PLACEHOLDER_IMAGE }, 
            { theme: "Introspection / Faith", image: PLACEHOLDER_IMAGE }, 
            { theme: "Love / Loss / Longing", image: PLACEHOLDER_IMAGE }, 
            { theme: "Vengeance / Empowerment", image: PLACEHOLDER_IMAGE },
            { theme: "Rock / Alternative Jams", image: PLACEHOLDER_IMAGE } 
        ];

        // --- GLOBAL VARIABLES ---
        const cardContainer = document.getElementById('card-container');
        const thematicCardContainer = document.getElementById('thematic-card-container');
        const searchInput = document.getElementById('search-input');
        const filterCategoryButtons = document.getElementById('filter-category-buttons');
        const subFilterContainer = document.getElementById('sub-filter-container');
        const subFilterTitle = document.getElementById('sub-filter-title');
        const subFilterOptions = document.getElementById('sub-filter-options');
        const resetFilterBtn = document.getElementById('reset-filter-btn');
        const backToTopBtn = document.getElementById('back-to-top-btn');
        const mobileMenuToggle = document.getElementById('hamburger-menu'); 
        const mobileMenu = document.getElementById('mobile-menu');

        const modal = document.getElementById('music-player-modal');
        const modalContent = document.getElementById('modal-content');
        const modalTitle = document.getElementById('modal-title');
        const modalLyrics = document.getElementById('modal-lyrics');
        const closeModalBtn = document.getElementById('close-modal-btn');

        // Filter categories: Using exact JSON field names where possible
        // NOTE: 'Theme' corresponds to JSON's 'category'. 'Licensing' is not a single field, so 'CommercialPotential' is used.
        const FILTER_CATEGORIES = [
            'Category', 'CommercialPotential', 'VocalType', 'PlacementType', 'MoodTone', 
            'Tempo', 'Genre1', 'Genre2'
        ];
        
        // State for managing current active filters
        let currentFilters = {
            category: null,
            value: null,
            text: ''
        };
        
        // Audio control state
        let currentAudio = null;
        let currentPlayButton = null;

        // --- HELPER FUNCTIONS ---
        function getSongById(id) {
            return ALL_SONGS_DATA.find(s => s.id === id);
        }

        function getUniqueValues(category) {
            // Converts category string (e.g., 'VocalType') to the exact JSON key
            const categoryKey = category.toLowerCase().replace('potential', 'Potential').replace('type', 'Type'); 
            
            // Special handling for MoodTone and Genre2 which might be comma-separated strings
            let values = [];
            ALL_SONGS_DATA.forEach(song => {
                let val = song[categoryKey];
                if (val && typeof val === 'string' && (categoryKey === 'moodTone' || categoryKey === 'genre2')) {
                    // Split comma-separated string and trim
                    val.split(',').forEach(item => {
                        let trimmed = item.trim();
                        if (trimmed !== '' && trimmed !== 'Placeholder' && trimmed !== 'N/A') {
                            values.push(trimmed);
                        }
                    });
                } else if (val && val !== 'Placeholder' && val !== 'N/A') {
                    values.push(val);
                }
            });
            
            return [...new Set(values)].sort();
        }

        // --- RENDERING FUNCTIONS ---

        function createStandardCardHtml(song) {
            // Using exact JSON fields: coverImageUrl, title, artistWriter, genre1, genre2, keySignature, shortDescription
            const genres = [song.genre1, song.genre2].filter(g => g && g !== 'Placeholder' && g !== 'N/A').join(' / ');
            
            return `
                <div id="song-${song.id}" data-song-id="${song.id}" class="song-card p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
                    <img src="${song.coverImageUrl}" alt="${song.title} cover art" class="mx-auto mb-4 w-full max-w-[200px] h-auto rounded-lg">
                    <h3 class="text-xl font-bold text-slate-200 mb-1 flex items-center justify-between">
                        ${song.title}
                    </h3>
                    <p class="text-xs text-gray-400 mb-1">Artist: ${song.artistWriter} | Key: ${song.keySignature || 'N/A'}</p>
                    <p class="text-xs text-gray-400 mb-3">Genre: ${genres} | Potential: ${song.commercialPotential || 'N/A'}</p>
                    <p class="text-sm italic text-gray-300 h-10 overflow-hidden text-ellipsis">${song.shortDescription || 'Placeholder'}</p>
                    
                    <div class="mt-4 flex gap-2">
                        <button onclick="openMusicPlayer(${song.id})" class="flex-1 px-4 py-2 text-white font-semibold rounded-lg btn-sunset-orange shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            Read Now
                        </button>
                        <button onclick="handlePrint(${song.id})" class="flex-1 px-4 py-2 text-white font-semibold rounded-lg btn-sunset-orange shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            Print
                        </button>
                    </div>
                </div>
            `;
        }

        function createThematicCardHtml(cardData) {
            // NOTE: Thematic cards rely on the custom 'theme' field defined in the local JS array, 
            // but the filtering will target the JSON's 'category' field.
            return `
                <div id="theme-card-${cardData.theme.replace(/\s/g, '-')}-${Math.random().toString(36).substring(2, 7)}" 
                     data-theme-value="${cardData.theme}"
                     class="thematic-card rounded-xl shadow-lg hover:shadow-2xl transition duration-300 transform"
                     style="background-image: url('${cardData.image}');"
                     onclick="applyFilter('category', '${cardData.theme.split(' / ')[0].trim()}')">
                    <div class="bg-black bg-opacity-40 p-2 rounded-lg w-full text-center">
                        <h3 class="text-lg font-extrabold">${cardData.theme}</h3>
                    </div>
                </div>
            `;
        }
        
        function createBackToTopHtml() {
            return `
                <div class="lg:col-span-3 col-span-1 flex justify-center my-6">
                    <button class="back-to-top-btn px-6 py-3 bg-gray-700 text-gray-200 font-medium rounded-full shadow-lg hover:bg-gray-600 transition duration-300">
                        Back to Top &uarr;
                    </button>
                </div>
            `;
        }

        function renderCatalogCards(filteredSongs) {
            cardContainer.innerHTML = '';
            
            if (filteredSongs.length === 0) {
                 cardContainer.innerHTML = '<p class="no-results lg:col-span-3">No songs found matching your search criteria.</p>';
            }

            filteredSongs.forEach((song, index) => {
                const cardHtml = createStandardCardHtml(song);
                cardContainer.insertAdjacentHTML('beforeend', cardHtml);

                // Insert Back to Top button after every 3 rows (9 cards)
                if ((index + 1) % 9 === 0) {
                    cardContainer.insertAdjacentHTML('beforeend', createBackToTopHtml());
                }
            });
            
            // Add final Back to Top button if needed
            if (filteredSongs.length > 0) {
                 cardContainer.insertAdjacentHTML('beforeend', createBackToTopHtml());
            }

            // Re-bind back to top handlers (since content was replaced)
            document.querySelectorAll('.back-to-top-btn').forEach(button => {
                button.addEventListener('click', function() {
                    document.getElementById('top').scrollIntoView({ behavior: 'smooth' });
                });
            });
        }
        
        function renderThematicCards() {
            thematicCardContainer.innerHTML = '';
            THEMATIC_CARDS_DATA.forEach(cardData => {
                thematicCardContainer.insertAdjacentHTML('beforeend', createThematicCardHtml(cardData));
