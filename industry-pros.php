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
        
        /* Thematic Filter Cards (6 Cards Grid Layout) */
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
        /* Style for displaying more lines of short description */
        .short-description-preview {
            max-height: 4rem; /* Approximate height for 3-4 lines of text */
            overflow: hidden;
            line-height: 1.4;
            text-overflow: ellipsis; /* For cut-off text */
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Limit to 4 lines */
            -webkit-box-orient: vertical;
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
                
                <input type="text" id="search-input" placeholder="Search Catalog: Filter by Title, Category, PlacementType, MoodTone, or Hashtags..."
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
            
            <!-- START OF INDUSTRY LINKS & RESOURCES SECTION (Placed before Footer) -->
            <div class="mt-12 border-t border-gray-700 pt-8 pb-4 text-center">
                <h4 class="text-xl font-semibold mb-3 text-white">Industry Links & Resources</h4>
                <p class="text-sm text-gray-400 max-w-lg mx-auto mb-6">
                    These resources are provided to assist A&R and Sync Professionals with vetting, licensing, and collaboration needs.
                </p>
                <div class="flex flex-wrap justify-center space-x-4 text-sm font-semibold">
                    <a href="/bio.html" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Kellie Larson Bio</a>
                    <span class="text-gray-500 mx-1">|</span>
                    <a href="/lyric-critque.html" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Lyric Critique (A&R $499 Critique)</a>
                    <span class="text-gray-500 mx-1">|</span>
                    <a href="/legal.html" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Terms & Licensing</a>
                    <span class="text-gray-500 mx-1">|</span>
                    <a href="https://songbay.co/view-music/235611415/" target="_blank" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Songbay Portfolio</a> 
                </div>
            </div>
            <!-- END OF INDUSTRY LINKS & RESOURCES SECTION -->

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
        // RESTORED: Simple include, relying on data-loader.php to output the const ALL_SONGS_DATA array.
        <?php include 'data-loader.php'; ?>
        
        // Ensure ALL_SONGS_DATA is initialized as an array if PHP failed to load it, preventing fatal JS errors.
        if (typeof ALL_SONGS_DATA === 'undefined' || !Array.isArray(ALL_SONGS_DATA)) {
            const ALL_SONGS_DATA = [];
        }


        // Thematic Cards Data (Kept in JS as it's static UI data)
        function getAssetUrl(filenameWithHash) {
            const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';
            // As        }

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
        
        /* Thematic Filter Cards (6 Cards Grid Layout) */
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
        /* Style for displaying more lines of short description */
        .short-description-preview {
            max-height: 4rem; /* Approximate height for 3-4 lines of text */
            overflow: hidden;
            line-height: 1.4;
            text-overflow: ellipsis; /* For cut-off text */
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Limit to 4 lines */
            -webkit-box-orient: vertical;
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
            
            <!-- START OF INDUSTRY LINKS & RESOURCES SECTION (Placed before Footer) -->
            <div class="mt-12 border-t border-gray-700 pt-8 pb-4 text-center">
                <h4 class="text-xl font-semibold mb-3 text-white">Industry Links & Resources</h4>
                <p class="text-sm text-gray-400 max-w-lg mx-auto mb-6">
                    These resources are provided to assist A&R and Sync Professionals with vetting, licensing, and collaboration needs.
                </p>
                <div class="flex flex-wrap justify-center space-x-4 text-sm font-semibold">
                    <a href="/bio.html" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Kellie Larson Bio</a>
                    <span class="text-gray-500 mx-1">|</span>
                    <a href="/lyric-critque.html" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Lyric Critique (A&R $499 Critique)</a>
                    <span class="text-gray-500 mx-1">|</span>
                    <a href="/legal.html" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Terms & Licensing</a>
                    <span class="text-gray-500 mx-1">|</span>
                    <a href="https://songbay.co/view-music/235611415/" target="_blank" class="text-gray-300 hover:text-amber-400 transition duration-200 py-1">Songbay Portfolio</a> 
                </div>
            </div>
            <!-- END OF INDUSTRY LINKS & RESOURCES SECTION -->

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
        // RESTORED: Simple include, relying on data-loader.php to output the const ALL_SONGS_DATA array.
        <?php include 'data-loader.php'; ?>
        
        // Thematic Cards Data (Kept in JS as it's static UI data)
        function getAssetUrl(filenameWithHash) {
            const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';
            // Assuming this is used for the static assets provided in the prompt's array
            return `/assets/covers/${filenameWithHash}`; 
        }
        
        const PLACEHOLDER_IMAGE = 'https://placehold.co/250x350/800020/ffffff?text=THEME+CARD';

        const THEMATIC_CARDS_DATA = [
            // Reduced to 6 unique thematic cards as requested.
            { theme: "Dark / Narrative", image: '/assets/covers/disenchantment-lyrics-photo.jpg' }, 
            { theme: "Fun / Party / Nostalgia", image: '/assets/covers/social-world-lyrics-photo.jpg' }, 
            { theme: "Introspection / Faith", image: '/assets/covers/mutual-value-lyrics-photo.jpg' }, 
            { theme: "Love / Loss / Longing", image: '/assets/covers/loss-of-market-share-lyrics-photo.jpg' }, 
            { theme: "Vengeance / Empowerment", image: '/assets/covers/empowerment-arc-lyrics-photo.jpg' },
            { theme: "Cinematic / Rock Jams", image: PLACEHOLDER_IMAGE } 
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

        // UPDATED FILTER CATEGORIES based on request
        const FILTER_CATEGORIES = [
            'genre1', // By Genre
            'vocalType', // By Vocal Type
            'tempo', // By Tempo
            'genre2', // By Subgenre
            'placementType', // By Placement
            'commercialPotential' // Rated by Commercial Potential
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
            // Check for the dynamic data object, just in case
            if (typeof ALL_SONGS_DATA === 'undefined' || !Array.isArray(ALL_SONGS_DATA)) {
                return null;
            }
            return ALL_SONGS_DATA.find(s => s.id === parseInt(id));
        }

        function getUniqueValues(category) {
            // Check if ALL_SONGS_DATA is available (if the PHP import succeeded)
            if (typeof ALL_SONGS_DATA === 'undefined' || !Array.isArray(ALL_SONGS_DATA)) {
                return [];
            }
            
            const categoryKey = category; 
            
            // Handle multiple values separated by commas/spaces/slashes (MoodTone, Genre2, Category, Hashtags)
            let values = [];
            ALL_SONGS_DATA.forEach(song => {
                let val = song[categoryKey];
                
                if (Array.isArray(val)) {
                    // For hashtag arrays
                    val.forEach(item => {
                        let trimmed = item.replace('#', '').trim();
                         if (trimmed !== '' && trimmed !== 'Placeholder' && trimmed !== 'N/A') {
                            values.push(trimmed);
                        }
                    });
                } else if (val && typeof val === 'string' && (categoryKey === 'moodTone' || categoryKey === 'genre2' || categoryKey === 'category')) {
                    // Split comma-separated string and trim
                    val.split(/[,\s/]+/).forEach(item => {
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
                    <img src="${song.coverImageUrl}" onerror="this.onerror=null;this.src='https://placehold.co/200x200/505050/ffffff?text=COVER';" alt="${song.title} cover art" class="mx-auto mb-4 w-full max-w-[200px] h-auto rounded-lg">
                    <h3 class="text-xl font-bold text-slate-200 mb-1 flex items-center justify-between">
                        ${song.title}
                    </h3>
                    <p class="text-xs text-gray-400 mb-1">Artist: ${song.artistWriter} | Key: ${song.keySignature || 'N/A'}</p>
                    <p class="text-xs text-gray-400 mb-3">Genre: ${genres} | Potential: ${song.commercialPotential || 'N/A'}</p>
                    
                    <!-- SHORT DESCRIPTION PREVIEW: Increased height to show more lines -->
                    <p class="text-sm italic text-gray-300 short-description-preview">
                        ${song.shortDescription || 'Placeholder'}
                    </p>
                    
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
            // NOTE: Thematic cards map to the JSON's 'category' field.
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
                 cardContainer.innerHTML = '<p class="no-results lg:col-span-3">No songs found matching your search criteria. Try clearing your filters or search bar.</p>';
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
            // Only render the reduced 6 thematic cards
            const cardsToShow = THEMATIC_CARDS_DATA.slice(0, 6);
            cardsToShow.forEach(cardData => {
                thematicCardContainer.insertAdjacentHTML('beforeend', createThematicCardHtml(cardData));
            });
        }
        
        function renderFilterCategoryButtons() {
            filterCategoryButtons.innerHTML = '';
            FILTER_CATEGORIES.forEach(category => {
                const button = document.createElement('button');
                button.className = 'px-4 py-2 bg-gray-600 text-white font-medium rounded-lg hover:bg-gray-500 transition duration-150 shadow-md border border-gray-600';
                
                // Clean up button text for display
                let buttonText = category
                    .replace('genre1', 'By Genre')
                    .replace('vocalType', 'By Vocal Type')
                    .replace('tempo', 'By Tempo')
                    .replace('genre2', 'By Subgenre')
                    .replace('placementType', 'By Placement')
                    .replace('commercialPotential', 'Rated by Commercial Potential'); 
                
                button.textContent = buttonText;
                button.setAttribute('data-category', category);
                button.onclick = () => toggleSubFilter(category);
                filterCategoryButtons.appendChild(button);
            });
        }


        // --- FILTERING LOGIC ---

        function applyFilter(category, value) {
            if (category) {
                currentFilters.category = category;
                currentFilters.value = value;
            }
            
            // Thematic cards often map to the 'category' field, so we clear text search when a new category filter is selected.
            if (category === 'category' && value !== null) {
                currentFilters.text = '';
                searchInput.value = '';
                subFilterContainer.classList.add('hidden'); 
            }

            updateFilterButtons();
            updateThematicCardBorders();
            updateSubFilterOptions();
            applyMasterFilter();
        }

        function applyMasterFilter() {
            // Check if ALL_SONGS_DATA is available 
            if (typeof ALL_SONGS_DATA === 'undefined' || !Array.isArray(ALL_SONGS_DATA)) {
                return;
            }

            const textFilter = searchInput.value.toLowerCase().trim();
            currentFilters.text = textFilter;

            const filteredSongs = ALL_SONGS_DATA.filter(song => {
                let matchesCategory = true;
                let matchesText = true;

                // 1. Text Search Filter (Checking ALL relevant fields including hashtags)
                if (textFilter.length > 0) {
                    const searchableFields = [
                        song.title, song.artistWriter, song.genre1, song.genre2, 
                        song.category, song.placementType, song.moodTone, song.tempo, 
                        song.commercialPotential, song.vocalType, song.seoSnippet, song.shortDescription, song.longDescription, 
                        // Include keywords and relatedSearchTerms for comprehensive searching
                        ...(song.keywords || []),
                        ...(song.relatedSearchTerms || []),
                        // CRITICAL: Include hashtags for search functionality
                        ...(song.hashtags || []).map(tag => tag.replace('#', '')) // Remove '#' for easier searching
                    ].filter(field => field && typeof field === 'string');
                    
                    matchesText = searchableFields.some(field => 
                        field.toLowerCase().includes(textFilter)
                    );
                }

                // 2. Categorical/Value Filter
                const categoryKey = currentFilters.category;
                const filterValue = currentFilters.value;
                
                if (filterValue !== null && categoryKey) {
                    const songValue = song[categoryKey];
                    const lowerFilterValue = filterValue.toLowerCase();

                    // Handle fields that might contain multiple values (MoodTone, Genre2, Genre1, Category)
                    if (categoryKey === 'moodTone' || categoryKey === 'genre2' || categoryKey === 'genre1' || categoryKey === 'category') {
                        matchesCategory = (songValue && songValue.toLowerCase().split(/[,\s/]+/).some(item => item.trim().toLowerCase() === lowerFilterValue));
                    } else {
                        // Handle single-value fields (VocalType, Tempo, PlacementType, CommercialPotential, etc.)
                        matchesCategory = (songValue && songValue.toLowerCase() === lowerFilterValue);
                    }
                } else if (currentFilters.category && filterValue === null) {
                    // If a category button is active but no value is selected (i.e., 'All' is selected)
                    matchesCategory = true;
                } else if (textFilter === '' && filterValue === null) {
                    // Default state: show all
                    matchesCategory = true;
                }

                return matchesCategory && matchesText;
            });
            
            renderCatalogCards(filteredSongs);
        }

        function toggleSubFilter(category) {
            if (currentFilters.category === category && subFilterContainer.classList.contains('flex')) {
                currentFilters.category = null;
                currentFilters.value = null;
                subFilterContainer.classList.remove('flex');
                subFilterContainer.classList.add('hidden');
                updateFilterButtons();
                updateThematicCardBorders();
                applyMasterFilter(); 
                return;
            }
            
            currentFilters.category = category;
            
            const values = getUniqueValues(category);

            // Clean up title for display
            let filterTitle = category
                .replace('genre1', 'Genre')
                .replace('vocalType', 'Vocal Type')
                .replace('tempo', 'Tempo')
                .replace('genre2', 'Subgenre')
                .replace('placementType', 'Placement')
                .replace('commercialPotential', 'Commercial Potential');
            
            subFilterTitle.textContent = `Select ${filterTitle}:`;
            
            subFilterOptions.innerHTML = '';
            
            const clearBtn = document.createElement('button');
            clearBtn.className = 'sub-filter-option px-3 py-1 bg-gray-700 text-sm font-medium rounded-full shadow-md transition duration-150 border border-gray-600';
            clearBtn.textContent = 'All';
            clearBtn.onclick = () => applyFilter(category, null);
            subFilterOptions.appendChild(clearBtn);

            values.forEach(value => {
                const btn = document.createElement('button');
                btn.className = 'sub-filter-option px-3 py-1 bg-gray-800 text-sm font-medium rounded-full border border-gray-700 shadow-sm text-gray-300';
                btn.textContent = value;
                btn.onclick = () => applyFilter(category, value);
                subFilterOptions.appendChild(btn);
            });

            subFilterContainer.classList.remove('hidden');
            subFilterContainer.classList.add('flex'); // Show container
            
            if (currentFilters.category) {
                currentFilters.value = null; 
            }
            
            updateFilterButtons();
            updateThematicCardBorders();
            updateSubFilterOptions();
            applyMasterFilter(); 
        }

        function resetAllFilters() {
            currentFilters = { category: null, value: null, text: '' };
            searchInput.value = '';
            subFilterContainer.classList.remove('flex');
            subFilterContainer.classList.add('hidden');
            updateFilterButtons();
            updateThematicCardBorders();
            applyMasterFilter();
        }

        function updateFilterButtons() {
            document.querySelectorAll('#filter-category-buttons button').forEach(btn => {
                btn.classList.remove('filter-btn-active');
                if (btn.getAttribute('data-category') === currentFilters.category) {
                    btn.classList.add('filter-btn-active');
                }
            });
        }
        
        function updateSubFilterOptions() {
            document.querySelectorAll('#sub-filter-options button').forEach(btn => {
                btn.classList.remove('active-sub');
                if (btn.textContent === currentFilters.value) {
                    btn.classList.add('active-sub');
                }
            });
        }
        
        function updateThematicCardBorders() {
            document.querySelectorAll('.thematic-card').forEach(card => {
                card.classList.remove('active-filter');
                // Thematic cards map to the 'Category' field
                if (currentFilters.value && card.getAttribute('data-theme-value').toLowerCase().includes(currentFilters.value.toLowerCase())) {
                    card.classList.add('active-filter');
                }
            });
        }

        // --- MODAL & AUDIO LOGIC (LYRIC LINE BREAK FIX APPLIED) ---

        window.openMusicPlayer = function(songId) {
            const song = getSongById(songId);
            if (!song) return;
            
            if (currentAudio) {
                currentAudio.pause();
            }

            modalTitle.textContent = song.title;
            
            let lyricsText = song.fullLyrics && song.fullLyrics.trim() !== '' ? song.fullLyrics : "Placeholder Lyrics.";
            
            // CRITICAL FIX: Replace literal newline characters with <br> tags 
            // and use innerHTML to guarantee line breaks in the modal content.
            lyricsText = lyricsText.replace(/\r?\n/g, '<br>');
            
            modalLyrics.innerHTML = lyricsText; // Use innerHTML to render <br> tags

            const audioPlayer = modalContent.querySelector('audio');
            // Using exact JSON field: audioUrl
            audioPlayer.src = song.audioUrl;
            audioPlayer.load();
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeMusicPlayer() {
            const audioPlayer = modalContent.querySelector('audio');
            if (audioPlayer) {
                audioPlayer.pause();
                audioPlayer.currentTime = 0;
            }

            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300);
        }

        // Handle print functionality - UPDATED FOR ISOLATED PRINTING (using exact JSON fields)
        window.handlePrint = function(songId) {
            const song = getSongById(songId);
            if (!song) {
                console.error("Error: Song data not found for printing.");
                return;
            }

            // Use Placeholder if lyrics field is empty or undefined (using exact JSON field: fullLyrics)
            const printLyrics = song.fullLyrics && song.fullLyrics.trim() !== '' ? song.fullLyrics : "Placeholder Lyrics.";
            const genres = [song.genre1, song.genre2].filter(g => g && g !== 'Placeholder' && g !== 'N/A').join(' / ');

            const printContent = `
                <html>
                <head>
                    <title>Lyrics - ${song.title}</title>
                    <style>
                        body { font-family: 'Inter', sans-serif; color: #000; margin: 20px; }
                        h1 { color: #800020; font-size: 24px; margin-bottom: 5px; }
                        p { font-size: 14px; color: #555; margin-bottom: 15px; }
                        /* Use pre-wrap to handle large text, which respects existing newlines */
                        pre { white-space: pre-wrap; font-size: 16px; border: 1px solid #ccc; padding: 15px; background: #f9f9f9; }
                        .meta { border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 15px; }
                        strong { font-weight: 700; }
                    </style>
                </head>
                <body>
                    <div class="meta">
                        <h1>${song.title}</h1>
                        <p><strong>Artist/Writer:</strong> ${song.artistWriter} | <strong>Genres:</strong> ${genres} | <strong>Category:</strong> ${song.category || 'N/A'}</p>
                        <p><strong>Vocal Type:</strong> ${song.vocalType || 'N/A'} | <strong>Tempo:</strong> ${song.tempo || 'N/A'} | <strong>Key/Scale:</strong> ${song.keySignature || 'N/A'}</p>
                        <p><strong>Commercial Potential:</strong> ${song.commercialPotential || 'N/A'} | <strong>Placement Type:</strong> ${song.placementType || 'N/A'}</p>
                    </div>
                    <h2>Full Lyrics:</h2>
                    <pre>${printLyrics}</pre>
                    <p style="font-size: 10px; margin-top: 30px;">[Confidential: For Industry Review Only - Verse and Chorus]</p>
                </body>
                </html>
            `;

            const printWindow = window.open('', '_blank', 'width=800,height=600');
            if (!printWindow) {
                console.error("The print window could not be opened. Please check your browser's pop-up blockers.");
                return;
            }
            
            printWindow.document.write(printContent);
            printWindow.document.close();
            printWindow.focus();
            
            // Use a small delay to ensure content is rendered before printing
            setTimeout(() => {
                printWindow.print();
            }, 500); 
        };

        // --- INITIALIZATION AND EVENT BINDING ---
        document.addEventListener('DOMContentLoaded', () => {
            renderThematicCards();
            renderFilterCategoryButtons();
            
            // Check if data loaded successfully before applying filter
            if (typeof ALL_SONGS_DATA !== 'undefined' && Array.isArray(ALL_SONGS_DATA) && ALL_SONGS_DATA.length > 0) {
                applyMasterFilter(); 
            } else {
                console.error("CRITICAL ERROR: ALL_SONGS_DATA is undefined, not an array, or empty. Check data_loader.php and lyrics.json.");
                // Display user-visible error message
                cardContainer.innerHTML = '<p class="no-results lg:col-span-3" style="color:red; font-size: 1.5em; border: 2px solid red; padding: 20px;">CRITICAL ERROR: Song data could not be loaded. Please ensure **lyrics.json** and **data_loader.php** are correctly located and configured on the server.</p>';
            }
            
            closeModalBtn.addEventListener('click', closeMusicPlayer);
            modal.addEventListener('click', (e) => {
                if (e.target === modal) { closeMusicPlayer(); }
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) { closeMusicPlayer(); }
            });
            
            searchInput.addEventListener('input', applyMasterFilter);
            resetFilterBtn.addEventListener('click', resetAllFilters);

            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTopBtn.classList.remove('opacity-0');
                    backToTopBtn.classList.add('opacity-100');
                } else {
                    backToTopBtn.classList.remove('opacity-100');
                    backToTopBtn.classList.add('opacity-0');
                }
            });
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            modalContent.classList.add('scale-95', 'opacity-0');
        });
    </script>

</body>
</html>
