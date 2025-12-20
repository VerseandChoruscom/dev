<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | Verse and Chorus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Playfair+Display:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    
    <style>
        /* CSS Variables & Reset */
        :root {
            --burgundy: #800020;
            --orange-active: #f97316;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
        }

        .script-font {
            font-family: 'Playfair Display', serif;
            font-style: italic;
        }

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Song Card Styling */
        .song-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #1f2937; /* Gray-800 */
            border: 1px solid #374151;
            transition: transform 0.2s;
        }

        /* Scratched Border Effect (Simulated) */
        .scratched-border {
            position: relative;
            box-shadow: 0 0 0 1px #4b5563, 0 10px 15px -3px rgba(0, 0, 0, 0.5);
        }

        /* Button Styling */
        .btn-sunset-orange {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            transition: all 0.3s ease;
        }
        .btn-sunset-orange:hover {
            filter: brightness(1.1);
            transform: translateY(-1px);
        }
        
        /* Thematic Filter Cards */
        .thematic-card {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            aspect-ratio: 1 / 1.4;
            display: flex;
            align-items: flex-end;
            padding: 1rem;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9);
            border: 4px solid transparent;
            cursor: pointer;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            background-color: #333; /* Fallback color */
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
            background-color: #4b5563 !important; 
        }
        .sub-filter-option.active-sub {
            background-color: var(--orange-active) !important;
            color: white !important;
            border-color: var(--orange-active) !important;
        }

        /* Legal Box */
        .legal-box {
            background: rgba(31, 41, 55, 0.95);
            border-left: 5px solid var(--burgundy);
            border-radius: 0.5rem;
        }

        /* Modal Scrollbar */
        #modal-lyrics::-webkit-scrollbar {
            width: 8px;
        }
        #modal-lyrics::-webkit-scrollbar-track {
            background: #111827; 
        }
        #modal-lyrics::-webkit-scrollbar-thumb {
            background: #4b5563; 
            border-radius: 4px;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <a id="top" class="absolute -top-20"></a>

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-3 flex justify-between items-center">
            
            <div class="flex items-center space-x-4">
                <a href="#" class="flex items-center space-x-2">
                    <div class="h-8 w-8 bg-white rounded-full flex items-center justify-center text-[var(--burgundy)] font-bold text-xs">V&C</div>
                </a>
            </div>

            <nav id="nav-desktop" class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider">
                    <li><a href="#" class="hover:text-slate-300 transition duration-200">HOME</a></li>
                    <li><a href="#" class="hover:text-slate-300 transition duration-200">BIO</a></li>
                    <li><a href="#" class="text-white border-b border-white">INDUSTRY PROS</a></li>
                    <li><a href="#" class="hover:text-slate-300 transition duration-200">MUSIC</a></li>
                    <li><a href="#" class="hover:text-slate-300 transition duration-200">CONTACT</a></li>
                </ul>
            </nav>

            <button id="hamburger-menu" class="md:hidden text-white focus:outline-none p-2 rounded-md hover:bg-black/20 transition duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden absolute w-full bg-[var(--burgundy)] transition-all duration-300 shadow-lg z-40">
            <ul class="flex flex-col text-center pb-2 text-sm font-semibold tracking-wider">
                <li><a href="#" class="block py-2 text-white hover:bg-slate-700">HOME</a></li>
                <li><a href="#" class="block py-2 text-white hover:bg-slate-700">INDUSTRY PROS</a></li>
                <li><a href="#" class="block py-2 text-white hover:bg-slate-700">CONTACT</a></li>
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
                <div class="page-title-block border-l-4 border-[var(--burgundy)] pl-4">
                    <h2 class="text-4xl font-extrabold tracking-widest text-gray-800">INDUSTRY PRO VAULT</h2>
                    <p class="text-lg mt-2 text-gray-600">Curated catalog for A&R and sync professionals</p>
                </div>
            </div>
            
            <div class="bg-[var(--burgundy)] p-8 mb-12 rounded-xl shadow-2xl text-center border-4 border-gray-300">
                <h3 class="text-2xl font-bold text-white mb-3">Welcome to the Vault</h3>
                <p class="text-gray-100 max-w-3xl mx-auto mb-6">
                    This exclusive section provides fully licensed, pre-cleared assets ready for immediate commercial development. Our system ensures clear IP ownership and royalty-free composition for all placeholder demos.
                </p>
                <button class="inline-block bg-white text-[var(--burgundy)] font-bold py-2 px-6 rounded-full hover:bg-gray-200 transition duration-300 shadow-lg">
                    Explore Licensing Options
                </button>
            </div>

            <div class="legal-box p-6 mb-10 shadow-lg">
                <h4 class="text-xl font-bold text-white mb-4">Rights & Licensing Assurance</h4>
                <ul class="text-sm text-gray-300 space-y-3">
                    <li><strong class="text-white">✅ Royalty-Free Composition:</strong> Instrumental/vocal placeholders by Donna AI covered by Lifetime Royalty-Free License.</li>
                    <li><strong class="text-white">✅ Guaranteed Lyric Ownership:</strong> 100% human-authored lyrics registered via Songbay.</li>
                    <li><strong class="text-white">✅ Simple Path to Full Copyright:</strong> Re-record music to own full master and publishing.</li>
                    <li><strong class="text-white">✅ Immediate Clearance:</strong> Pre-cleared for commercial development.</li>
                </ul>
            </div>
            
            <section class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-[var(--burgundy)] pb-2">Core Thematic Pillars</h2>
                <div id="thematic-card-container" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    </div>
            </section>
            
            <div class="bg-gray-900 p-6 rounded-xl mb-10 text-white shadow-lg border-2 border-gray-700">
                <h3 class="text-xl font-semibold text-white mb-4 border-b border-gray-700 pb-2">Catalog Search & Filter</h3>
                
                <input type="text" id="search-input" placeholder="Search by Title, Lyrics, Mood, or Genre..."
                       class="w-full p-3 border border-gray-600 rounded-lg shadow-sm bg-gray-800 text-white focus:ring-[var(--burgundy)] focus:border-[var(--burgundy)] transition duration-150 mb-4 outline-none">
                
                <div class="flex flex-wrap gap-2 mb-4" id="filter-category-buttons">
                    </div>
                
                <div id="sub-filter-container" class="bg-gray-800 p-4 rounded-lg shadow-inner hidden border border-gray-700">
                    <h4 class="font-semibold text-gray-300 mb-3" id="sub-filter-title">Filter by...</h4>
                    <div id="sub-filter-options" class="flex flex-wrap gap-2 max-h-40 overflow-y-auto">
                        </div>
                </div>
                
                <button id="reset-filter-btn" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200 mt-4 text-sm">Reset All Filters</button>
            </div>

            <div id="card-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                </div>
            
        </div>
    </main>

    <footer class="bg-[var(--burgundy)] py-8 mt-auto text-white border-t-4 border-black">
        <div class="content-container text-center text-sm">
            <h4 class="font-bold text-lg mb-1">Kellie Larson</h4>
            <p class="mb-4 text-gray-300 text-xs uppercase tracking-wide">Cinematic Songwriter and Lyricist</p>
            <p class="mb-2"><a href="mailto:info@verseandchorus.com" class="hover:underline">info@verseandchorus.com</a></p>
            <p class="mt-4 text-xs text-gray-400">&copy; 2025 Verse and Chorus</p>
        </div>
    </footer>

    <button id="back-to-top-btn" 
            class="fixed bottom-5 right-5 z-40 p-3 rounded-full 
                   bg-[var(--burgundy)] text-white shadow-lg hover:bg-red-800 
                   transition-opacity duration-300 opacity-0 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>
    
    <div id="music-player-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden justify-center items-center p-4 backdrop-blur-sm">
        <div id="modal-content" class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto border-2 border-gray-600 transform transition-all duration-300 scale-95 opacity-0">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4 border-b border-gray-700 pb-2">
                    <h2 id="modal-title" class="text-2xl font-extrabold text-white">Song Title</h2>
                    <button id="close-modal-icon" class="text-gray-400 hover:text-white text-2xl">&times;</button>
                </div>

                <div class="mb-6 border border-gray-600 p-4 rounded-lg bg-gray-900">
                    <p class="text-xs font-semibold mb-2 text-gray-400 uppercase tracking-wide">Audio Preview</p>
                    <audio controls class="w-full h-10">
                        <source src="" type="audio/mpeg">
                        Your browser does support the audio element.
                    </audio>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3 text-gray-300">Full Lyrics</h3>
                    <pre id="modal-lyrics" class="whitespace-pre-wrap text-gray-300 font-sans text-sm leading-relaxed bg-gray-900 p-4 rounded-lg border border-gray-700 overflow-x-auto"></pre>
                </div>

                <div class="flex justify-end">
                    <button id="close-modal-btn" class="px-6 py-2 bg-[var(--burgundy)] text-white rounded-lg hover:bg-red-800 transition duration-150 font-bold shadow-lg">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // --- 1. DATA INJECTION (From JSON) ---
        // This simulates the PHP include by hardcoding the JSON data
        const ALL_SONGS_DATA = [
            { "id": 1, "title": "AUTHOR OF A LIE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/author-of-a-lie-cover-art.jpg", "genre1": "Pop", "genre2": "Hip-Hop", "moodTone": "Anthemic, Confident, Determined", "category": "Betrayal / Storytelling", "tempo": "Mid Tempo", "commercialPotential": "High", "shortDescription": "This rhythm-driven Pop/Hip-Hop fusion tracks the dismantling of a partner's false narrative.", "fullLyrics": "[Verse 1]\nYou tell a story, i pick it apart\nYour timeline is whacked, you're playing a part...", "audioUrl": "#" },
            { "id": 2, "title": "BIG HARD NO", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/big-hard-no-cover-art.jpg", "genre1": "Country", "genre2": "Contemporary Country", "moodTone": "Anthemic, Confident, Determined", "category": "Empowerment / Defiance", "tempo": "Mid Tempo", "commercialPotential": "High", "shortDescription": "This compelling pop/country-rock crossover delivers a fierce, definitive response to a past lover.", "fullLyrics": "Verse 1:\nSo sad, heard she had enough\n\"Don't want ya anymore,\" and you're taking it rough...", "audioUrl": "#" },
            { "id": 3, "title": "BOOM BOOM BEAT", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/boom-boom-beat-cover-art.jpg", "genre1": "Pop", "genre2": "General Dance", "moodTone": "Bouncy, Fun, Romantic", "category": "Love / Reunion / Upbeat", "tempo": "Mid Tempo", "commercialPotential": "High", "shortDescription": "An upbeat pop song with a strong, feel-good message centered on the anticipation of reuniting.", "fullLyrics": "(Verse 1)\nEphemeral moment, I should've stretched it out...", "audioUrl": "#" },
            { "id": 4, "title": "BROKEN RECORD", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/broken-record-cover-art.jpg", "genre1": "Rock", "genre2": "Alt-Rock", "moodTone": "Anthemic, Bitter, Confident", "category": "Self-Reclamation / Heartbreak", "tempo": "Mid Tempo", "commercialPotential": "Excellent", "shortDescription": "This track moves from bitter defeat to a defiant turning point where they finally break free.", "fullLyrics": "Yeah, a goddamn mess, that's the headline news...", "audioUrl": "#" },
            { "id": 5, "title": "CEO NOT A BABYSITTING TREE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/ceo-not-babysitting-tree-cover-art.jpg", "genre1": "Pop", "genre2": "R&B", "moodTone": "Confident, Fun, Playful", "category": "Female Empowerment / Dating", "tempo": "Fast", "commercialPotential": "Extremely High", "shortDescription": "This track contrasts the frustrations of dating immature 'boys' with the desire for a sophisticated 'man'.", "fullLyrics": "(Verse 1)\nI don't want no boys, I ain't got time for...", "audioUrl": "#" },
            { "id": 6, "title": "CHILDREN OF WAR", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/children-of-war-cover-art.jpg", "genre1": "Folk", "genre2": "Contemporary Folk", "moodTone": "Anthemic, Dark, Haunting", "category": "Social Commentary / Political", "tempo": "Slow", "commercialPotential": "High", "shortDescription": "This song of social commentary uses raw, vivid imagery to build a heartbreaking narrative.", "fullLyrics": "[Verse 1]\nThe laughter is now replaced by sad sounds you hear...", "audioUrl": "#" },
            { "id": 7, "title": "CONCRETE UNDER THE FEET", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/concrete-under-the-feet-cover-art.jpg", "genre1": "Rock", "genre2": "Alternative", "moodTone": "Introspective, Heavy", "category": "General", "tempo": "Mid Tempo", "commercialPotential": "Medium", "shortDescription": "Placeholder description for CONCRETE UNDER THE FEET.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 8, "title": "DON'T BE JELLY", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/dont-be-jelly-cover-art.jpg", "genre1": "Country", "genre2": "Country-Dance", "moodTone": "Anthemic, Dancing, Fun", "category": "Defiance / Dance / Viral", "tempo": "Fast", "commercialPotential": "Extremely High", "shortDescription": "This high-octane track is a call to action for anyone living life on their own terms.", "fullLyrics": "(Verse 1)\nWait what?\nHold me down?\nNah!...", "audioUrl": "#" },
            { "id": 9, "title": "EPHEMERAL MOMENT", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/ephemeral-moment-cover-art.jpg", "genre1": "Alternative", "genre2": "Alternative Rock", "moodTone": "Dreamy, Romantic", "category": "Love / Longing", "tempo": "Fast", "commercialPotential": "High", "shortDescription": "This upbeat track is a reminder that even when things end, they can be picked up again.", "fullLyrics": "(Verse 1)\nEphemeral moment, I should've stretched it out...", "audioUrl": "#" },
            { "id": 10, "title": "ETCHED IN EVERY SPACE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/etched-in-every-space-cover-art.jpg", "genre1": "Easy Listening", "genre2": "Pop Ballad", "moodTone": "Introspective, Mournful, Sad", "category": "Grief / Heartbreak Ballad", "tempo": "Slow", "commercialPotential": "High", "shortDescription": "This power ballad contrasts unbearable present isolation with intensely personal, sweet
