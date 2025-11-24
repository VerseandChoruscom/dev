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
                    <!-- Placeholder Logo -->
                    <div class="h-8 w-8 bg-white rounded-full flex items-center justify-center text-[var(--burgundy)] font-bold text-xs">V&C</div>
                </a>
            </div>

            <nav id="nav-desktop" class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider">
                    <li><a href="/index.html" class="hover:text-slate-300 transition duration-200">HOME</a></li>
                    <li><a href="/bio.html" class="hover:text-slate-300 transition duration-200">BIO</a></li>
                    <li><a href="/industry-pros.html" class="hover:text-slate-300 transition duration-200">INDUSTRY PROS</a></li>
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
                <li><a href="/industry-pros.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">INDUSTRY PROS</a></li>
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
                <!-- UPDATED: Added link to legal.html and inline-block for styling -->
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
            
            <!-- --- THEMATIC FILTER CARDS SECTION --- -->
            <section class="mb-12">
                <h2 class="text-2xl font-bold text-white mb-6 border-b-2 border-indigo-500 pb-2">Core Thematic Pillars (SEO Rich)</h2>
                <!-- UPDATED: SEO-rich description -->
                <p class="text-gray-400 mb-6">Click a thematic card to quickly filter the catalog by core narrative. These themes are SEO-rich categories used for placement and sync targeting.</p>

                <!-- 12 Cards Grid -->
                <div id="thematic-card-container" class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-4">
                    <!-- Thematic Cards will be injected here by JavaScript -->
                </div>
            </section>
            
            <!-- --- ADVANCED FILTER SECTION --- -->
            <div class="bg-gray-900 p-6 rounded-xl mb-10 text-white shadow-lg border-4 border-gray-700">
                <!-- UPDATED: SEO-rich title -->
                <h3 class="text-xl font-semibold text-white mb-4 border-b border-gray-700 pb-2">Advanced Search & Metadata Filtering (SEO Rich)</h3>
                
                <!-- Text Search Input -->
                <!-- UPDATED: SEO-rich placeholder -->
                <input type="text" id="search-input" placeholder="Search Catalog: Filter by Title, Theme, Licensing, Vocals, Placement, Mood, or Genre..."
                       class="w-full p-3 border border-gray-600 rounded-lg shadow-sm bg-gray-800 text-white focus:ring-[var(--burgundy)] focus:border-[var(--burgundy)] transition duration-150 mb-4">
                
                <!-- Advanced Filter Buttons (8 Categories) -->
                <div class="flex flex-wrap gap-2 mb-4" id="filter-category-buttons">
                    <!-- Buttons injected by JS: Theme, Licensing, Vocals, Placement, Mood, Tempo, Commercial Potential, Target Demographic -->
                </div>
                
                <!-- Dropdown/Sub-Filter Container -->
                <div id="sub-filter-container" class="bg-gray-800 p-4 rounded-lg shadow-inner hidden border border-gray-700">
                    <h4 class="font-semibold text-gray-300 mb-3" id="sub-filter-title">Filter by...</h4>
                    <div id="sub-filter-options" class="flex flex-wrap gap-2 max-h-40 overflow-y-auto">
                        <!-- Filter options will be injected here -->
                    </div>
                </div>
                
                <!-- Reset Button -->
                <button id="reset-filter-btn" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200 mt-4">Reset All Filters</button>
            </div>


            <!-- --- DYNAMIC SONG CARD GRID --- -->
            <div id="card-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dynamic song cards will be injected here by JavaScript -->
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

    <!-- Back to Top Button -->
    <button id="back-to-top-btn" 
            class="fixed bottom-5 right-5 z-40 p-3 rounded-full 
                   bg-[var(--burgundy)] text-white shadow-lg hover:bg-red-800 
                   transition-opacity duration-300 opacity-0 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>
    
    <!-- Music Player Modal -->
    <div id="music-player-modal" class="fixed inset-0 bg-gray-900 bg-opacity-90 z-50 hidden justify-center items-center p-4 backdrop-blur-sm">
        
        <!-- Modal Content - Right-click disabled on this element -->
        <div id="modal-content" class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto transform transition-all duration-300 scale-95 opacity-0 border-4 border-gray-600"
             oncontextmenu="return false;">
            
            <div class="p-6">
                <h2 id="modal-title" class="text-3xl font-extrabold mb-4 text-white border-b border-gray-700 pb-2">Song Title</h2>
                <p class="text-sm text-gray-400 mb-6">Full Lyrics and Audio Player</p>

                <!-- Audio Player -->
                <div class="mb-6 border border-gray-600 p-4 rounded-lg bg-gray-900">
                    <p class="text-lg font-semibold mb-2 text-white">Audio Preview (Placeholder)</p>
                    <audio controls class="w-full">
                        <source src="" type="audio/mpeg">
                        Your browser does support the audio element.
                    </audio>
                </div>
                
                <!-- Lyrics Display -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-300 border-b pb-2 border-gray-700">Lyrics</h3>
                    <!-- Using pre for formatting lyrics -->
                    <pre id="modal-lyrics" class="whitespace-pre-wrap text-gray-200 leading-relaxed text-base bg-gray-900 p-4 rounded-lg border border-yellow-800 overflow-x-auto">
                        Placeholder Lyrics. Full lyrics would appear here.
                    </pre>
                </div>

                <!-- Footer and Close Button -->
                <div class="flex justify-end">
                    <button id="close-modal-btn" class="px-6 py-2 bg-[var(--burgundy)] text-white rounded-lg hover:bg-red-800 transition duration-150 font-bold shadow-lg">
                        Close Vault
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // --- DATA SIMULATION (lyrics.json content) ---
        // Helper function to get the correct asset URL path
        function getAssetUrl(filenameWithHash) {
            const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';
            return `https://canvas-static-assets.s3.amazonaws.com/collaborator-assets/${appId}/uploaded%3A${filenameWithHash}`;
        }
        
        const ALL_SONGS_DATA = [
            // Note: Data structure expanded to include Tempo, Key_Scale, Commercial_Potential, and Target_Demographic
            // IDs 1-43 are from previous versions
            { id: 1, title: "AUTHOR OF A LIE", artist: "Kellie Larson", genre: "Pop, Hip-Hop", mood: "Confident", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Exclusive", vocals: "Male Lead", placement: "TV Series Opener", key_scale: "C Major", commercial_potential: "High", target_demographic: "Gen Z/Millennial", cover: "/assets/covers/author-of-a-lie-cover-art.jpg", audio: "/assets/music/author-of-a-lie-audio.mp3", description: "You're the author of a lie, a master of deceit. And I'm tired of this story on repeat.", lyrics: "Placeholder lyrics for AUTHOR OF A LIE." },
            { id: 2, title: "BIG HARD NO", artist: "Kellie Larson", genre: "Rock, Alternative", mood: "Determined", tempo: "Fast", theme: "Vengeance & Empowerment", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "Movie Trailer", key_scale: "G Minor", commercial_potential: "Medium", target_demographic: "Millennial/Gen X", cover: "/assets/covers/big-hard-no-cover-art.jpg", audio: "/assets/music/big-hard-no-audio.mp3", description: "Placeholder description for BIG HARD NO.", lyrics: "Placeholder lyrics for BIG HARD NO." },
            { id: 3, title: "BOOM BOOM BEAT", artist: "Kellie Larson", genre: "Alternative, Rock", mood: "Playful", tempo: "Fast", theme: "Fun, Party & Nostalgia", licensing: "Exclusive", vocals: "Duet (M/F)", placement: "Commercial Spot", key_scale: "D Major", commercial_potential: "High", target_demographic: "Family/All Ages", cover: "/assets/covers/boom-boom-beat-cover-art.jpg", audio: "/assets/music/boom-boom-beat-audio.mp3", description: "Boom boom boom da boom boom boom, Ah-yo-delay-ee-hoo!", lyrics: "Placeholder lyrics for BOOM BOOM BEAT." },
            { id: 4, title: "BROKEN RECORD", artist: "Kellie Larson", genre: "Pop, Blues", mood: "Melancholic", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "TV Drama Scene", key_scale: "F Minor", commercial_potential: "Medium", target_demographic: "Millennial/Gen X", cover: "/assets/covers/broken-record-cover-art.jpg", audio: "/assets/music/broken-record-audio.mp3", description: "Placeholder description for BROKEN RECORD.", lyrics: "Placeholder lyrics for BROKEN RECORD." },
            { id: 5, title: "CEO NOT A BABYSITTING TREE", artist: "Kellie Larson", genre: "Hip-Hop, Pop", mood: "Confident", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Exclusive", vocals: "Male Lead", placement: "Video Game Soundtrack", key_scale: "A Minor", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/ceo-not-a-babysitting-tree-cover-art.jpg", audio: "/assets/music/ceo-not-a-babysitting-tree-audio.mp3", description: "Placeholder description for CEO NOT A BABYSITTING TREE.", lyrics: "Placeholder lyrics for CEO NOT A BABYSITTING TREE." },
            { id: 6, title: "CHILDREN OF WAR", artist: "Kellie Larson", genre: "World, Gospel", mood: "Dramatic", tempo: "Slow", theme: "Introspection & Faith", licensing: "Exclusive", vocals: "Choir/Group", placement: "Film Score", key_scale: "B Minor", commercial_potential: "Niche", target_demographic: "All Ages", cover: "/assets/covers/children-of-war-cover-art.jpg", audio: "/assets/music/children-of-war-audio.mp3", description: "Placeholder description for CHILDREN OF WAR.", lyrics: "Placeholder lyrics for CHILDREN OF WAR." },
            { id: 7, title: "CONCRETE UNDER THE FEET", artist: "Kellie Larson", genre: "Rock, Alternative", mood: "Introspective", tempo: "Mid Tempo", theme: "Dark & Narrative", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "Commercial Spot", key_scale: "E Minor", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/concrete-under-the-feet-cover-art.jpg", audio: "/assets/music/concrete-under-the-feet-audio.mp3", description: "Placeholder description for CONCRETE UNDER THE FEET.", lyrics: "Placeholder lyrics for CONCRETE UNDER THE FEET." },
            { id: 8, title: "CRAVING THOSE CRUMBS", artist: "Kellie Larson", genre: "R&B, Pop", mood: "Sad", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Exclusive", vocals: "Female Lead", placement: "TV Drama Scene", key_scale: "Db Major", commercial_potential: "Medium", target_demographic: "Millennial", cover: "/assets/covers/craving-those-crumbs-cover-art.jpg", audio: "/assets/music/craving-those-crumbs-audio.mp3", description: "Placeholder description for CRAVING THOSE CRUMBS.", lyrics: "Placeholder lyrics for CRAVING THOSE CRUMBS." },
            { id: 9, title: "DON'T BE JELLY", artist: "Kellie Larson", genre: "Pop, R&B", mood: "Playful", tempo: "Fast", theme: "Fun, Party & Nostalgia", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "Movie Trailer", key_scale: "Bb Major", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/dont-be-jelly-cover-art.jpg", audio: "/assets/music/dont-be-jelly-audio.mp3", description: "Placeholder description for DON'T BE JELLY.", lyrics: "Placeholder lyrics for DON'T BE JELLY." },
            { id: 10, title: "EPHEMERAL MOMENT", artist: "Kellie Larson", genre: "Easy Listening, Pop", mood: "Dreamy", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Exclusive", vocals: "Female Lead", placement: "Film Score", key_scale: "E Major", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/ephemeral-moment-cover-art.jpg", audio: "/assets/music/ephemeral-moment-audio.mp3", description: "Placeholder description for EPHEMERAL MOMENT.", lyrics: "Placeholder lyrics for EPHEMERAL MOMENT." },
            { id: 11, title: "ETCHED IN EVERY SPACE", artist: "Kellie Larson", genre: "Country, Ballad", mood: "Romantic", tempo: "Mid Tempo", theme: "Love, Loss, & Longing", licensing: "Exclusive", vocals: "Male Lead", placement: "Commercial Spot", key_scale: "C# Minor", commercial_potential: "High", target_demographic: "Millennial/Gen X", cover: "/assets/covers/etched-in-every-space-cover-art.jpg", audio: "/assets/music/etched-in-every-space-audio.mp3", description: "Placeholder description for ETCHED IN EVERY SPACE.", lyrics: "Placeholder lyrics for ETCHED IN EVERY SPACE." },
            { id: 12, title: "FIRST STEP", artist: "Kellie Larson", genre: "Pop, R&B", mood: "Determined", tempo: "Fast", theme: "Vengeance & Empowerment", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "TV Series Opener", key_scale: "A Major", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/first-step-cover-art.jpg", audio: "/assets/music/first-step-audio.mp3", description: "Placeholder description for TAKE THAT FIRST STEP.", lyrics: "Placeholder lyrics for FIRST STEP." },
            { id: 13, title: "FURY (I'M THE MONSTER)", artist: "Kellie Larson", genre: "Metal, Rock", mood: "Heavy", tempo: "Fast", theme: "Rock & Alternative Jams", licensing: "Exclusive", vocals: "Male Lead", placement: "Movie Trailer", key_scale: "F# Minor", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/fury-im-the-monster-cover-art.jpg", audio: "/assets/music/fury-im-the-monster-audio.mp3", description: "Placeholder description for FURY (I'M THE MONSTER).", lyrics: "Placeholder lyrics for FURY (I'M THE MONSTER)." },
            { id: 14, title: "GENX 80S ANTHEM", artist: "Kellie Larson", genre: "Rock, Pop", mood: "Proud", tempo: "Fast", theme: "Fun, Party & Nostalgia", licensing: "Non-Exclusive", vocals: "Group/Chorus", placement: "Commercial Spot", key_scale: "C Major", commercial_potential: "High", target_demographic: "Gen X", cover: "/assets/covers/genx-80s-anthem-cover-art.jpg", audio: "/assets/music/genx-80s-anthem-audio.mp3", description: "Placeholder description for GENX 80S ANTHEM.", lyrics: "Placeholder lyrics for GENX 80S ANTHEM." },
            { id: 15, title: "HEARTBREAK AND TROUBLE", artist: "Kellie Larson", genre: "Pop, R&B", mood: "Melancholic", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Exclusive", vocals: "Female Lead", placement: "TV Drama Scene", key_scale: "B Major", commercial_potential: "Medium", target_demographic: "Millennial", cover: "/assets/covers/heartbreak-and-trouble-cover-art.jpg", audio: "/assets/music/heartbreak-and-trouble-audio.mp3", description: "Placeholder description for HEARTBREAK AND TROUBLE.", lyrics: "Placeholder lyrics for HEARTBREAK AND TROUBLE." },
            { id: 16, title: "HIT THE ROAD", artist: "Kellie Larson", genre: "Pop, Dancehall", mood: "Revenge", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Exclusive", vocals: "Female Lead", placement: "Video Game Soundtrack", key_scale: "Eb Major", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/hit-the-road-cover-art.jpg", audio: "/assets/music/hit-the-road-audio.mp3", description: "Vengeful anthem about moving on from a toxic relationship. Empowerment-focused pop.", lyrics: "Placeholder lyrics for HIT THE ROAD." },
            { id: 17, title: "HOW'S IT FEEL, BRO?", artist: "Kellie Larson", genre: "Pop, Hip-Hop", mood: "Revenge", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "Film Score", key_scale: "G Major", commercial_potential: "Medium", target_demographic: "Millennial", cover: "/assets/covers/hows--it-feel-bro-cover-art.jpg", audio: "/assets/music/hows-it-feel-bro-audio.mp3", description: "Placeholder description for HOW'S IT FEEL, BRO?.", lyrics: "Placeholder lyrics for HOW'S IT FEEL, BRO?." },
            { id: 18, title: "I KNOW YOUR DAMN PIN CODE", artist: "Kellie Larson", genre: "Rock, Alt Country", mood: "Bitter", tempo: "Fast", theme: "Dark & Narrative", licensing: "Exclusive", vocals: "Female Lead", placement: "Movie Trailer", key_scale: "B Minor", commercial_potential: "Medium", target_demographic: "Millennial/Gen X", cover: "/assets/covers/i-know-your-damn-pin-code-cover-art.jpg", audio: "/assets/music/i-know-your-damn-pin-code-audio.mp3", description: "Breakup anthem of uncovering a partner's deceit and finding empowerment.", lyrics: "Placeholder lyrics for I KNOW YOUR DAMN PIN CODE." },
            { id: 19, title: "IN MY DREAMS", artist: "Kellie Larson", genre: "Easy Listening, Pop", mood: "Melancholic", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "Commercial Spot", key_scale: "Ab Major", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/in-my-dreams-cover-art.jpg", audio: "/assets/music/in-my-dreams-audio.mp3", description: "A haunting, heartfelt pop-ballad dealing with the grief of loss.", lyrics: "Placeholder lyrics for IN MY DREAMS." },
            { id: 20, title: "JUST TOO MUCH", artist: "Kellie Larson", genre: "Rock, Punk", mood: "Bitter", tempo: "Fast", theme: "Rock & Alternative Jams", licensing: "Exclusive", vocals: "Male Lead", placement: "Video Game Soundtrack", key_scale: "E Minor", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/just-too-much-cover-art.jpg", audio: "/assets/music/just-too-much-audio.mp3", description: "Placeholder description for JUST TOO MUCH.", lyrics: "Placeholder lyrics for JUST TOO MUCH." },
            { id: 21, title: "JUST A LITTLE LONELY", artist: "Kellie Larson", genre: "Country, Ballad", mood: "Sad", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "TV Drama Scene", key_scale: "G Major", commercial_potential: "High", target_demographic: "Millennial/Gen X", cover: "/assets/covers/just-a-little-lonely-cover-art.jpg", audio: "/assets/music/just-a-little-lonELY-audio.mp3", description: "Placeholder description for JUST A LITTLE LONELY.", lyrics: "Placeholder lyrics for JUST A LITTLE LONELY." },
            { id: 22, title: "LITTLE THINGS", artist: "Kellie Larson", genre: "Pop, Easy Listening", mood: "Romantic", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Exclusive", vocals: "Female Lead", placement: "Film Score", key_scale: "D Major", commercial_potential: "Medium", target_demographic: "Family/All Ages", cover: "/assets/covers/little-things-cover-art.jpg", audio: "/assets/music/little-things-audio.mp3", description: "Placeholder description for LITTLE THINGS.", lyrics: "Placeholder lyrics for LITTLE THINGS." },
            { id: 23, title: "MARRIED TO THE DRUG", artist: "Kellie Larson", genre: "Rock, Metal", mood: "Heavy", tempo: "Fast", theme: "Rock & Alternative Jams", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "Commercial Spot", key_scale: "C# Minor", commercial_potential: "Niche", target_demographic: "Gen X", cover: "/assets/covers/married-to-the-drug-cover-art.jpg", audio: "/assets/music/married-to-the-drug-audio.mp3", description: "Placeholder description for MARRIED TO THE DRUG.", lyrics: "Placeholder lyrics for MARRIED TO THE DRUG." },
            { id: 24, title: "MURDERERS HEART", artist: "Kellie Larson", genre: "Metal, Horror", mood: "Dramatic", tempo: "Fast", theme: "Dark & Narrative", licensing: "Exclusive", vocals: "Female Lead", placement: "TV Series Opener", key_scale: "F Minor", commercial_potential: "Medium", target_demographic: "Millennial", cover: "/assets/covers/murderers-heart-cover-art.jpg", audio: "/assets/music/murderers-heart-audio.mp3", description: "Placeholder description for MURDERERS HEART.", lyrics: "Placeholder lyrics for MURDERERS HEART." },
            { id: 25, title: "MY GIRL KARMA", artist: "Kellie Larson", genre: "R&B, Pop", mood: "Revenge", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "Movie Trailer", key_scale: "Bb Minor", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/my-girl-karma-cover-art.jpg", audio: "/assets/music/my-girl-karma-audio.mp3", description: "Placeholder description for MY GIRL KARMA.", lyrics: "Placeholder lyrics for MY GIRL KARMA." },
            { id: 26, title: "MY WORDS MATTER", artist: "Kellie Larson", genre: "Pop, Anthemic", mood: "Confident", tempo: "Fast", theme: "Vengeance & Empowerment", licensing: "Exclusive", vocals: "Female Lead", placement: "Video Game Soundtrack", key_scale: "D Major", commercial_potential: "High", target_demographic: "Millennial", cover: "/assets/covers/my-words-matter-cover-art.jpg", audio: "/assets/music/my-words-matter-audio.mp3", description: "Placeholder description for MY WORDS MATTER.", lyrics: "Placeholder lyrics for MY WORDS MATTER." },
            { id: 27, title: "NOT THAT GIRL ANYMORE", artist: "Kellie Larson", genre: "Country, Pop", mood: "Introspective", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Exclusive", vocals: "Female Lead", placement: "Film Score", key_scale: "C Major", commercial_potential: "Medium", target_demographic: "Millennial/Gen X", cover: "/assets/covers/not-that-girl-anymore-cover-art.jpg", audio: "/assets/music/not-that-girl-anymore-audio.mp3", description: "Placeholder description for NOT THAT GIRL ANYMORE.", lyrics: "Placeholder lyrics for NOT THAT GIRL ANYMORE." },
            { id: 28, title: "ONE SMALL WRONG", artist: "Kellie Larson", genre: "Rock, Alternative", mood: "Bitter", tempo: "Mid Tempo", theme: "Dark & Narrative", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "TV Drama Scene", key_scale: "E Minor", commercial_potential: "Niche", target_demographic: "Gen X", cover: "/assets/covers/one-small-wrong-cover-art.jpg", audio: "/assets/music/one-small-wrong-audio.mp3", description: "Placeholder description for ONE SMALL WRONG.", lyrics: "Placeholder lyrics for ONE SMALL WRONG." },
            { id: 29, title: "REAL DREAM TEAM", artist: "Kellie Larson", genre: "Pop, Dancehall", mood: "Confident", tempo: "Fast", theme: "Fun, Party & Nostalgia", licensing: "Exclusive", vocals: "Female Lead", placement: "Commercial Spot", key_scale: "F Major", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/real-dream-team-cover-art.jpg", audio: "/assets/music/real-dream-team-audio.mp3", description: "Placeholder description for REAL DREAM TEAM.", lyrics: "Placeholder lyrics for REAL DREAM TEAM." },
            { id: 30, title: "SHOT BY CUPIDS DART", artist: "Kellie Larson", genre: "Pop, Bedroom Pop", mood: "Romantic", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Non-Exclusive", vocals: "Duet (M/F)", placement: "TV Series Opener", key_scale: "Ab Major", commercial_potential: "Medium", target_demographic: "Gen Z", cover: "/assets/covers/shot-by-cupids-dart-cover-art.jpg", audio: "/assets/music/shot-by-cupids-dart-audio.mp3", description: "Placeholder description for SHOT BY CUPIDS DART.", lyrics: "Placeholder lyrics for SHOT BY CUPIDS DART." },
            { id: 31, title: "SHOWDOWN AT MY DOOR", artist: "Kellie Larson", genre: "Rock, Blues", mood: "Determined", tempo: "Mid Tempo", theme: "Rock & Alternative Jams", licensing: "Exclusive", vocals: "Male Lead", placement: "Movie Trailer", key_scale: "A Minor", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/showdown-at-my-door-cover-art.jpg", audio: "/assets/music/showdown-at-my-door-audio.mp3", description: "Placeholder description for SHOWDOWN AT MY DOOR.", lyrics: "Placeholder lyrics for SHOWDOWN AT MY DOOR." },
            { id: 32, title: "SICK ONE (S1C)", artist: "Kellie Larson", genre: "Rock, Alternative", mood: "Bitter", tempo: "Fast", theme: "Rock & Alternative Jams", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "Video Game Soundtrack", key_scale: "C# Minor", commercial_potential: "Niche", target_demographic: "Gen Z", cover: "/assets/covers/sick-one-s1c-cover-art.jpg", audio: "/assets/music/sick-one-s1c-audio.mp3", description: "A raw, brutal confessional exploring a chaotic and self-destructive toxic love.", lyrics: "Placeholder lyrics for SICK ONE (S1C)." },
            { id: 33, title: "SOLID SHIFTING GROUND", artist: "Kellie Larson", genre: "Country, Rock", mood: "Introspective", tempo: "Slow", theme: "Introspection & Faith", licensing: "Exclusive", vocals: "Male Lead", placement: "Film Score", key_scale: "G Major", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/solid-shifting-ground-cover-art.jpg", audio: "/assets/music/solid-shifting-ground-audio.mp3", description: "Placeholder description for SOLID SHIFTING GROUND.", lyrics: "Placeholder lyrics for SOLID SHIFTING GROUND." },
            { id: 34, title: "STOOD BY MY SIDE", artist: "Kellie Larson", genre: "Gospel, Religious", mood: "Peaceful", tempo: "Slow", theme: "Introspection & Faith", licensing: "Exclusive", vocals: "Choir/Group", placement: "Commercial Spot", key_scale: "Eb Major", commercial_potential: "Niche", target_demographic: "All Ages", cover: "/assets/covers/stood-by-my-side-cover-art.jpg", audio: "/assets/music/stood-by-my-side-audio.mp3", description: "An emotional Christian ballad about finding peace and healing through faith.", lyrics: "Placeholder lyrics for STOOD BY MY SIDE." },
            { id: 35, title: "THE AFTERMATH", artist: "Kellie Larson", genre: "Pop, Ballad", mood: "Sad", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "TV Drama Scene", key_scale: "E Major", commercial_potential: "Medium", target_demographic: "Millennial", cover: "/assets/covers/the-aftermath-cover-art.jpg", audio: "/assets/music/the-aftermath-audio.mp3", description: "Placeholder description for THE AFTERMATH.", lyrics: "Placeholder lyrics for THE AFTERMATH." },
            { id: 36, title: "THE BACK OF ME", artist: "Kellie Larson", genre: "Country, Americana", mood: "Determined", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Exclusive", vocals: "Male Lead", placement: "TV Series Opener", key_scale: "D Minor", commercial_potential: "Medium", target_demographic: "Millennial/Gen X", cover: "/assets/covers/the-back-of-me-cover-art.jpg", audio: "/assets/music/the-back-of-me-audio.mp3", description: "Placeholder description for THE BACK OF ME.", lyrics: "Placeholder lyrics for THE BACK OF ME." },
            { id: 37, title: "THE SHOW IS THROUGH", artist: "Kellie Larson", genre: "Jazz, Blues", mood: "Bitter", tempo: "Slow", theme: "Dark & Narrative", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "Movie Trailer", key_scale: "A Major", commercial_potential: "Niche", target_demographic: "Gen X", cover: "/assets/covers/the-show-is-through-cover-art.jpg", audio: "/assets/music/the-show-is-through-audio.mp3", description: "Placeholder description for THE SHOW IS THROUGH.", lyrics: "Placeholder lyrics for THE SHOW IS THROUGH." },
            { id: 38, title: "THOUGHT YOU SHOULD KNOW", artist: "Kellie Larson", genre: "Pop, R&B", mood: "Confident", tempo: "Mid Tempo", theme: "Vengeance & Empowerment", licensing: "Exclusive", vocals: "Female Lead", placement: "Video Game Soundtrack", key_scale: "F Major", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/thought-you-should-know-cover-art.jpg", audio: "/assets/music/thought-you-should-know-audio.mp3", description: "Placeholder description for THOUGHT YOU SHOULD KNOW.", lyrics: "Placeholder lyrics for THOUGHT YOU SHOULD KNOW." },
            { id: 39, title: "TOP SHELF QUEEN", artist: "Kellie Larson", genre: "Reggae, World", mood: "Mellow", tempo: "Slow", theme: "Fun, Party & Nostalgia", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "Film Score", key_scale: "Db Major", commercial_potential: "Medium", target_demographic: "Millennial/Gen X", cover: "/assets/covers/top-shelf-queen-cover-art.jpg", audio: "/assets/music/top-shelf-queen-audio.mp3", description: "Placeholder description for TOP SHELF QUEEN.", lyrics: "Placeholder lyrics for TOP SHELF QUEEN." },
            { id: 40, title: "WELCOME TO JUKES", artist: "Kellie Larson", genre: "Country, Blues", mood: "Mellow", tempo: "Mid Tempo", theme: "Dark & Narrative", licensing: "Exclusive", vocals: "Male Lead", placement: "Commercial Spot", key_scale: "E Major", commercial_potential: "Niche", target_demographic: "Gen X", cover: "/assets/covers/welcome-to-jukes-cover-art.jpg", audio: "/assets/music/welcome-to-jukes-audio.mp3", description: "Placeholder description for WELCOME TO JUKES.", lyrics: "Placeholder lyrics for WELCOME TO JUKES." },
            { id: 41, title: "WILDFLOWER", artist: "Kellie Larson", genre: "Folk, Americana", mood: "Peaceful", tempo: "Slow", theme: "Introspection & Faith", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "TV Drama Scene", key_scale: "G Major", commercial_potential: "Medium", target_demographic: "Millennial/Gen X", cover: "/assets/covers/wildflower-cover-art.jpg", audio: "/assets/music/wildflower-audio.mp3", description: "Placeholder description for WILDFLOWER.", lyrics: "Placeholder lyrics for WILDFLOWER." },
            { id: 42, title: "YEAR IN THE REARVIEW", artist: "Kellie Larson", genre: "Pop, Contemporary", mood: "Introspective", tempo: "Mid Tempo", theme: "Introspection & Faith", licensing: "Exclusive", vocals: "Female Lead", placement: "TV Series Opener", key_scale: "B Major", commercial_potential: "High", target_demographic: "Millennial", cover: "/assets/covers/year-in-the-rearview-cover-art.jpg", audio: "/assets/music/year-in-the-rearview-audio.mp3", description: "Placeholder description for YEAR IN THE REARVIEW.", lyrics: "Placeholder lyrics for YEAR IN THE REARVIEW." },
            { id: 43, title: "YOUR FOREVER MAN", artist: "Kellie Larson", genre: "Country", mood: "Romantic", tempo: "Mid Tempo", theme: "Love, Loss, & Longing", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "Movie Trailer", key_scale: "C Major", commercial_potential: "High", target_demographic: "Family/All Ages", cover: "/assets/covers/your-forever-man-cover-art.jpg", audio: "/assets/music/your-forever-man-audio.mp3", description: "Contemporary folk-pop country song about unconditional love and support.", lyrics: "Placeholder lyrics for YOUR FOREVER MAN." },
            
            // --- NEW SONGS ADDED (44-50) ---
            { id: 44, title: "SUNSET HIGHWAY", artist: "Kellie Larson", genre: "Pop, Electro", mood: "Energetic", tempo: "Fast", theme: "Fun, Party & Nostalgia", licensing: "Exclusive", vocals: "Female Lead", placement: "Road Trip Movie Soundtrack", key_scale: "D Major", commercial_potential: "High", target_demographic: "Gen Z", cover: "/assets/covers/sunset-highway-cover-art.jpg", audio: "/assets/music/sunset-highway-audio.mp3", description: "Driving, feel-good electro-pop anthem about freedom and chasing the horizon.", lyrics: "Placeholder lyrics for SUNSET HIGHWAY." },
            { id: 45, title: "THE KING'S FALL", artist: "Kellie Larson", genre: "Metal, Epic", mood: "Dramatic", tempo: "Slow", theme: "Dark & Narrative", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "Fantasy Video Game Cinematic", key_scale: "E Minor", commercial_potential: "Niche", target_demographic: "Millennial/Gen Z", cover: "/assets/covers/the-kings-fall-cover-art.jpg", audio: "/assets/music/the-kings-fall-audio.mp3", description: "Epic, dark track detailing the betrayal and downfall of a powerful ruler.", lyrics: "Placeholder lyrics for THE KING'S FALL." },
            { id: 46, title: "FOG ON THE LAKE", artist: "Kellie Larson", genre: "Acoustic, Folk", mood: "Peaceful", tempo: "Slow", theme: "Introspection & Faith", licensing: "Exclusive", vocals: "Female Lead", placement: "Nature Documentary Score", key_scale: "G Major", commercial_potential: "Medium", target_demographic: "Gen X", cover: "/assets/covers/fog-on-the-lake-cover-art.jpg", audio: "/assets/music/fog-on-the-lake-audio.mp3", description: "Gentle, reflective song about finding peace and stillness in isolation.", lyrics: "Placeholder lyrics for FOG ON THE LAKE." },
            { id: 47, title: "GHOST OF YOU", artist: "Kellie Larson", genre: "Ballad, Pop", mood: "Sad", tempo: "Slow", theme: "Love, Loss, & Longing", licensing: "Non-Exclusive", vocals: "Male Lead", placement: "Breakup Scene (TV)", key_scale: "B Minor", commercial_potential: "Medium", target_demographic: "Millennial", cover: "/assets/covers/ghost-of-you-cover-art.jpg", audio: "/assets/music/ghost-of-you-audio.mp3", description: "Heartbreaking ballad about being haunted by the memory of a past love.", lyrics: "Placeholder lyrics for GHOST OF YOU." },
            { id: 48, title: "BROKEN MACHINE", artist: "Kellie Larson", genre: "Industrial, Rock", mood: "Bitter", tempo: "Fast", theme: "Rock & Alternative Jams", licensing: "Exclusive", vocals: "Male Lead", placement: "Action Movie Montage", key_scale: "D Minor", commercial_potential: "Niche", target_demographic: "Gen X", cover: "/assets/covers/broken-machine-cover-art.jpg", audio: "/assets/music/broken-machine-audio.mp3", description: "Gritty, high-energy rock track about societal pressure and mechanical failure.", lyrics: "Placeholder lyrics for BROKEN MACHINE." },
            { id: 49, title: "RISE UP (THE ANTHEM)", artist: "Kellie Larson", genre: "Pop, Anthemic", mood: "Proud", tempo: "Fast", theme: "Vengeance & Empowerment", licensing: "Non-Exclusive", vocals: "Female Lead", placement: "Sports Commercial", key_scale: "C Major", commercial_potential: "High", target_demographic: "All Ages", cover: "/assets/covers/rise-up-the-anthem-cover-art.jpg", audio: "/assets/music/rise-up-the-anthem-audio.mp3", description: "Motivational, uplifting pop track designed for triumphant moments.", lyrics: "Placeholder lyrics for RISE UP (THE ANTHEM)." },
            { id: 50, title: "MIDNIGHT RENDEZVOUS", artist: "Kellie Larson", genre: "R&B, Jazz", mood: "Sultry", tempo: "Mid Tempo", theme: "Love, Loss, & Longing", licensing: "Exclusive", vocals: "Female Lead", placement: "Romantic Comedy Scene", key_scale: "F Minor", commercial_potential: "Medium", target_demographic: "Millennial", cover: "/assets/covers/midnight-rendezvous-cover-art.jpg", audio: "/assets/music/midnight-rendezvous-audio.mp3", description: "Smooth R&B track about a secret, passionate late-night meeting.", lyrics: "Placeholder lyrics for MIDNIGHT RENDEZVOUS." }
        ];

        // Thematic Cards (12 cards, using the 6 themes twice)
        const PLACEHOLDER_IMAGE = 'https://placehold.co/250x350/800020/ffffff?text=THEME+CARD';

        const THEMATIC_CARDS_DATA = [
            // Row 1 (6 cards)
            { theme: "Dark & Narrative", image: getAssetUrl('disenchantment-lyrics-photo.jpg-e52363635-6d0e-4ded-8e44-8b2a44c92aaf') }, 
            { theme: "Fun, Party & Nostalgia", image: getAssetUrl('social-world-lyrics-photo.jpg-b9089d42-671e-4855-a807-adc5c23e4a14') }, 
            { theme: "Introspection & Faith", image: getAssetUrl('mutual-value-lyrics-photo.jpg-fe9018a1-3569-4343-82e6-db431d692026') }, 
            { theme: "Love, Loss, & Longing", image: getAssetUrl('loss-of-market-share-lyrics-photo.jpg-32cea1ef-0da3-494b-85ec-ace4d088fd6c') }, 
            { theme: "Vengeance & Empowerment", image: getAssetUrl('empowerment-arc-lyrics-photo.jpg-49f7b450-59a6-4f52-ba38-78b345acc792') },
            { theme: "Rock & Alternative Jams", image: PLACEHOLDER_IMAGE }, 

            // Row 2 (6 cards - duplicate themes for visual density)
            { theme: "Dark & Narrative", image: PLACEHOLDER_IMAGE }, 
            { theme: "Fun, Party & Nostalgia", image: PLACEHOLDER_IMAGE }, 
            { theme: "Introspection & Faith", image: PLACEHOLDER_IMAGE }, 
            { theme: "Love, Loss, & Longing", image: PLACEHOLDER_IMAGE }, 
            { theme: "Vengeance & Empowerment", image: PLACEHOLDER_IMAGE },
            { theme: "Rock & Alternative Jams", image: PLACEHOLDER_IMAGE } 
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

        // Filter categories: 8 unique, highly relevant A&R filters
        const FILTER_CATEGORIES = [
            'Theme', 'Licensing', 'Vocals', 'Placement', 'Mood', 
            'Tempo', 'Commercial Potential', 'Target Demographic'
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
            // Converts 'Commercial Potential' to 'commercial_potential'
            const categoryKey = category.toLowerCase().replace(/\s/g, '_').replace('/', '_');
            return [...new Set(ALL_SONGS_DATA.map(song => song[categoryKey]))].sort();
        }

        // --- RENDERING FUNCTIONS ---

        function createStandardCardHtml(song) {
            // Note: Key/Scale and Commercial Potential are added to description for visibility
            return `
                <div id="song-${song.id}" data-song-id="${song.id}" class="song-card p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
                    <img src="${song.cover}" alt="${song.title} cover art" class="mx-auto mb-4 w-full max-w-[200px] h-auto rounded-lg">
                    <h3 class="text-xl font-bold text-slate-200 mb-1 flex items-center justify-between">
                        ${song.title}
                    </h3>
                    <p class="text-xs text-gray-400 mb-1">Genre: ${song.genre} | Key: ${song.key_scale}</p>
                    <p class="text-xs text-gray-400 mb-3">Theme: ${song.theme} | Potential: ${song.commercial_potential}</p>
                    <p class="text-sm italic text-gray-300 h-10 overflow-hidden text-ellipsis">${song.description}</p>
                    
                    <div class="mt-4 flex gap-2">
                        <!-- Read Now (opens player/lyrics) -->
                        <button onclick="openMusicPlayer(${song.id})" class="flex-1 px-4 py-2 text-white font-semibold rounded-lg btn-sunset-orange shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            Read Now
                        </button>
                        <!-- Print Button -->
                        <button onclick="handlePrint(${song.id})" class="flex-1 px-4 py-2 text-white font-semibold rounded-lg btn-sunset-orange shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">
                            Print
                        </button>
                    </div>
                </div>
            `;
        }

        function createThematicCardHtml(cardData) {
            return `
                <div id="theme-card-${cardData.theme.replace(/\s/g, '-')}-${Math.random().toString(36).substring(2, 7)}" 
                     data-theme-value="${cardData.theme}"
                     class="thematic-card rounded-xl shadow-lg hover:shadow-2xl transition duration-300 transform"
                     style="background-image: url('${cardData.image}');"
                     onclick="applyFilter('Theme', '${cardData.theme}')">
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
            });
        }
        
        function renderFilterCategoryButtons() {
            filterCategoryButtons.innerHTML = '';
            FILTER_CATEGORIES.forEach(category => {
                const button = document.createElement('button');
                button.className = 'px-4 py-2 bg-gray-600 text-white font-medium rounded-lg hover:bg-gray-500 transition duration-150 shadow-md border border-gray-600';
                button.textContent = category;
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
            
            if (category === 'Theme' && value !== null) {
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
            const textFilter = searchInput.value.toLowerCase().trim();
            currentFilters.text = textFilter;

            const filteredSongs = ALL_SONGS_DATA.filter(song => {
                let matchesCategory = true;
                let matchesText = true;

                // 1. Text Search Filter (Checking ALL fields, including new ones)
                if (textFilter.length > 0) {
                    const searchableFields = [
                        song.title, song.artist, song.genre, song.theme, 
                        song.licensing, song.vocals, song.placement, song.mood, 
                        song.tempo, song.key_scale, song.commercial_potential, song.target_demographic
                    ];
                    
                    matchesText = searchableFields.some(field => 
                        field && field.toLowerCase().includes(textFilter)
                    );
                }

                // 2. Categorical/Value Filter
                let categoryKey = currentFilters.category ? currentFilters.category.toLowerCase().replace(/\s/g, '_').replace('/', '_') : null;
                const filterValue = currentFilters.value;
                
                if (filterValue !== null) {
                    // Check if the song property matches the selected filter value
                    matchesCategory = (song[categoryKey || 'theme'] === filterValue);
                } else if (currentFilters.category) {
                    // If a category button is active but no value is selected (e.g., just clicked the button)
                    matchesCategory = true;
                } else if (textFilter === '' && filterValue === null) {
                    // Reset case: show all
                    matchesCategory = true;
                }

                return matchesCategory && matchesText;
            });
            
            renderCatalogCards(filteredSongs);
        }

        function toggleSubFilter(category) {
            if (currentFilters.category === category) {
                currentFilters.category = null;
                currentFilters.value = null;
                subFilterContainer.classList.add('hidden');
                updateFilterButtons();
                updateThematicCardBorders();
                applyMasterFilter(); 
                return;
            }
            
            currentFilters.category = category;
            
            const values = getUniqueValues(category);

            subFilterTitle.textContent = `Select ${category}:`;
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
                if (card.getAttribute('data-theme-value') === currentFilters.value) {
                    card.classList.add('active-filter');
                }
            });
        }

        // --- MODAL & AUDIO LOGIC ---

        window.openMusicPlayer = function(songId) {
            const song = getSongById(songId);
            if (!song) return;
            
            if (currentAudio) {
                currentAudio.pause();
            }

            modalTitle.textContent = song.title;
            modalLyrics.textContent = song.lyrics || "Placeholder Lyrics. Full lyrics coming soon.";

            const audioPlayer = modalContent.querySelector('audio');
            audioPlayer.src = song.audio;
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

        // Handle print functionality - UPDATED FOR ISOLATED PRINTING
        window.handlePrint = function(songId) {
            const song = getSongById(songId);
            if (!song) {
                alert("Error: Song data not found for printing.");
                return;
            }

            const printContent = `
                <html>
                <head>
                    <title>Lyrics - ${song.title}</title>
                    <style>
                        body { font-family: 'Inter', sans-serif; color: #000; margin: 20px; }
                        h1 { color: #800020; font-size: 24px; margin-bottom: 5px; }
                        p { font-size: 14px; color: #555; margin-bottom: 15px; }
                        pre { white-space: pre-wrap; font-size: 16px; border: 1px solid #ccc; padding: 15px; background: #f9f9f9; }
                        .meta { border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 15px; }
                        strong { font-weight: 700; }
                    </style>
                </head>
                <body>
                    <div class="meta">
                        <h1>${song.title}</h1>
                        <p><strong>Artist:</strong> ${song.artist} | <strong>Genre:</strong> ${song.genre} | <strong>Theme:</strong> ${song.theme}</p>
                        <p><strong>Vocals:</strong> ${song.vocals} | <strong>Tempo:</strong> ${song.tempo} | <strong>Key/Scale:</strong> ${song.key_scale}</p>
                        <p><strong>Commercial Potential:</strong> ${song.commercial_potential} | <strong>Target Demo:</strong> ${song.target_demographic} | <strong>Placement:</strong> ${song.placement}</p>
                    </div>
                    <h2>Full Lyrics:</h2>
                    <pre>${song.lyrics || "Placeholder Lyrics."}</pre>
                    <p style="font-size: 10px; margin-top: 30px;">[Confidential: For Industry Review Only - Verse and Chorus]</p>
                </body>
                </html>
            `;

            const printWindow = window.open('', '_blank', 'width=800,height=600');
            if (!printWindow) {
                alert("The print window could not be opened. Please check your browser's pop-up blockers.");
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
            applyMasterFilter(); // Initial render of all 50 songs
            
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
