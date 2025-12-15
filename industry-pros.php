<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verse and Chorus - Industry Pros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Open+Sans:wght@400;600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --burgundy: #800020;
            --orange-active: #f97316;
        }
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #1a1a1a;
            color: #e5e5e5;
        }
        h1, h2, h3, h4, .btn-font {
            font-family: 'Montserrat', sans-serif;
        }
        .script-font {
            font-family: 'Dancing Script', cursive;
        }
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .scratched-border {
            border: 1px solid #444;
            position: relative;
        }
        
        /* Custom scrollbar for lyrics */
        .lyrics-scroll::-webkit-scrollbar { width: 8px; }
        .lyrics-scroll::-webkit-scrollbar-track { background: #2d3748; border-radius: 4px; }
        .lyrics-scroll::-webkit-scrollbar-thumb { background: #4a5568; border-radius: 4px; }
        .lyrics-scroll::-webkit-scrollbar-thumb:hover { background: #718096; }

        .btn-sunset-orange {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            transition: all 0.3s ease;
        }
        .btn-sunset-orange:hover {
            background-color: #ff741a;
            transform: translateY(-1px);
        }

        /* Filter buttons active state */
        .filter-btn-active {
            background-color: var(--orange-active) !important;
            color: white !important;
            border-color: var(--orange-active) !important;
        }
        .sub-filter-option:hover { background-color: #262626 !important; }
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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
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
                    This exclusive section provides fully licensed, pre-cleared assets ready for immediate commercial development.
                </p>
            </div>

            <div class="bg-gray-900 p-6 rounded-xl mb-10 text-white shadow-lg border-4 border-gray-700">
                <h3 class="text-xl font-semibold text-white mb-4 border-b border-gray-700 pb-2">Advanced Search & Metadata Filtering</h3>
                
                <input type="text" id="search-input" placeholder="Search Catalog: Title, Category, Mood, or Genre..."
                       class="w-full p-3 border border-gray-600 rounded-lg shadow-sm bg-gray-800 text-white focus:ring-[var(--burgundy)] focus:border-[var(--burgundy)] transition duration-150 mb-4">
                
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
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>
    
    <div id="music-player-modal" class="fixed inset-0 bg-gray-900 bg-opacity-95 z-50 hidden justify-center items-center p-4 backdrop-blur-md">
        <div id="modal-content" class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-6xl max-h-[90vh] overflow-hidden transform transition-all duration-300 scale-95 opacity-0 border border-gray-600 flex flex-col">
            
            <div class="bg-gray-900 px-6 py-4 border-b border-gray-700 flex justify-between items-center">
                <div>
                    <h2 id="modal-title" class="text-2xl md:text-3xl font-extrabold text-[var(--orange-active)] font-serif tracking-wide">Song Title</h2>
                    <p class="text-xs text-gray-400 uppercase tracking-widest mt-1">Verse and Chorus Music Stand</p>
                </div>
                <button id="close-modal-btn" class="text-gray-400 hover:text-white transition duration-200">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <div class="flex-grow overflow-hidden flex flex-col md:flex-row bg-[#1a1a1a]">
                <div class="w-full md:w-5/12 p-6 md:p-8 overflow-y-auto border-b md:border-b-0 md:border-r border-gray-700 bg-gradient-to-br from-gray-800 to-gray-900">
                    <div class="bg-black/30 p-6 rounded-lg border border-gray-700 shadow-inner h-full">
                        <h3 class="text-xl font-bold text-white mb-4 border-b border-gray-600 pb-2">Song Information</h3>
                        <div class="space-y-4 text-sm">
                            <div>
                                <span class="block text-gray-400 text-xs uppercase font-semibold">Artist / Writer</span>
                                <span id="modal-artist" class="text-lg text-white font-medium">Kellie Larson</span>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <span class="block text-gray-400 text-xs uppercase font-semibold">Genre</span>
                                    <span id="modal-genre" class="text-gray-200">Pop</span>
                                </div>
                                <div>
                                    <span class="block text-gray-400 text-xs uppercase font-semibold">Tempo</span>
                                    <span id="modal-tempo" class="text-gray-200">Mid Tempo</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <span class="block text-gray-400 text-xs uppercase font-semibold">Commercial Potential</span>
                                    <span id="modal-potential" class="text-amber-400 font-bold">High</span>
                                </div>
                                <div>
                                    <span class="block text-gray-400 text-xs uppercase font-semibold">Vocal Type</span>
                                    <span id="modal-vocal" class="text-gray-200">Female</span>
                                </div>
                            </div>
                            <div>
                                <span class="block text-gray-400 text-xs uppercase font-semibold">Mood / Tone</span>
                                <span id="modal-mood" class="text-gray-200 italic">Anthemic</span>
                            </div>
                            <div class="pt-4 border-t border-gray-700">
                                <span class="block text-gray-400 text-xs uppercase font-semibold mb-1">About the Track</span>
                                <p id="modal-desc" class="text-gray-300 leading-relaxed italic">Description...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-7/12 p-6 md:p-8 overflow-y-auto bg-[#121212] relative">
                    <div class="absolute top-0 right-0 p-2 opacity-10 pointer-events-none">
                        <span class="text-9xl font-serif text-white">"</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-400 mb-6 text-center uppercase tracking-widest text-xs">Full Lyrics</h3>
                    <pre id="modal-lyrics" class="whitespace-pre-wrap font-sans text-lg text-gray-200 leading-relaxed text-center px-4 pb-10">Lyrics loading...</pre>
                    <div class="text-center mt-8 pt-4 border-t border-gray-800">
                        <p class="text-xs text-gray-500">© 2025 Kellie Larson Music. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-900 p-4 border-t border-gray-700 flex justify-center space-x-4">
                <button id="modal-play-btn" class="px-6 py-2 bg-green-600 hover:bg-green-500 text-white rounded-full font-bold shadow-lg transition flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" /></svg>
                    Play Audio (Songbay)
                </button>
                <button onclick="document.getElementById('close-modal-btn').click()" class="px-6 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-full font-bold shadow-lg transition">
                    Close Book
                </button>
            </div>
        </div>
    </div>


    <script>
        // --- DATA INTEGRATION VIA PHP ---
        // Ensure data_loader.php echoes: const ALL_SONGS_DATA = [...json...];
        <?php include 'data_loader.php'; ?> 

        // --- GLOBAL VARIABLES ---
        const cardContainer = document.getElementById('card-container');
        const searchInput = document.getElementById('search-input');
        const filterCategoryButtons = document.getElementById('filter-category-buttons');
        const subFilterContainer = document.getElementById('sub-filter-container');
        const subFilterTitle = document.getElementById('sub-filter-title');
        const subFilterOptions = document.getElementById('sub-filter-options');
        const resetFilterBtn = document.getElementById('reset-filter-btn');
        const backToTopBtn = document.getElementById('back-to-top-btn');
        const mobileMenuToggle = document.getElementById('hamburger-menu'); 
        const mobileMenu = document.getElementById('mobile-menu');

        // Modal Elements
        const modal = document.getElementById('music-player-modal');
        const modalContent = document.getElementById('modal-content');
        const closeModalBtn = document.getElementById('close-modal-btn');
        // Modal Fields
        const mTitle = document.getElementById('modal-title');
        const mLyrics = document.getElementById('modal-lyrics');
        const mArtist = document.getElementById('modal-artist');
        const mGenre = document.getElementById('modal-genre');
        const mTempo = document.getElementById('modal-tempo');
        const mPotential = document.getElementById('modal-potential');
        const mVocal = document.getElementById('modal-vocal');
        const mMood = document.getElementById('modal-mood');
        const mDesc = document.getElementById('modal-desc');
        const mPlayBtn = document.getElementById('modal-play-btn');

        const FILTER_CATEGORIES = ['Category', 'CommercialPotential', 'VocalType', 'PlacementType', 'MoodTone', 'Tempo', 'Genre1'];
        let currentFilters = { category: null, value: null };

        // --- CORE FUNCTIONS ---

        function getSongById(id) {
            if (typeof ALL_SONGS_DATA === 'undefined') return null;
            return ALL_SONGS_DATA.find(s => s.id === id);
        }

        function getUniqueValues(category) {
            if (typeof ALL_SONGS_DATA === 'undefined') return [];
            const categoryKey = category.toLowerCase().replace('potential', 'potential').replace('type', 'type'); 
            let values = [];
            ALL_SONGS_DATA.forEach(song => {
                let val = song[categoryKey];
                if (val && typeof val === 'string' && (categoryKey === 'moodtone' || categoryKey === 'genre2')) {
                    val.split(',').forEach(item => {
                        let trimmed = item.trim();
                        if (trimmed !== '' && trimmed !== 'Placeholder' && trimmed !== 'N/A') values.push(trimmed);
                    });
                } else if (val && val !== 'Placeholder' && val !== 'N/A') {
                    values.push(val);
                }
            });
            return [...new Set(values)].sort();
        }

        // --- PLAY & VIEW ---
        window.openSongbay = function(url) {
            if (url && url !== 'Placeholder') window.open(url, '_blank');
            else alert("Audio link not available yet.");
        };

        window.openMusicStand = function(songId) {
            const song = getSongById(songId);
            if (!song) return;

            mTitle.textContent = song.title;
            mLyrics.textContent = song.fullLyrics || "Lyrics pending...";
            mArtist.textContent = song.artistWriter;
            
            const genres = [song.genre
