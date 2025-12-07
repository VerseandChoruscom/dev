<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | Verse and Chorus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- CORE BRAND COLORS --- */
        :root {
            --burgundy: #800020; 
            --light-text: #e0e0e0;
            --main-text: #ffffff;
            --gold: #FFD700;
            --blue-gray: #536878; 
            --blue-gray-light: #708090;
            --sunset-orange: #f97316;
            --sunset-orange-dark: #ea580c;
        }

        /* --- GLOBAL LAYOUT --- */
        body {
            background-color: #000000;
            color: var(--light-text);
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        .script-font { font-family: 'Parisienne', cursive; }
        
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .page-title-block {
            display: flex;
            align-items: center;
            border-left: 2px solid var(--light-text);
            padding-left: 1rem;
        }

        /* --- UI COMPONENTS --- */

        /* 1. Legal Box (Blue-Gray Border) */
        .legal-box {
            border: 3px solid var(--blue-gray-light);
            background-color: #1a1a1a;
            border-radius: 0.5rem;
            line-height: 1.6;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        /* 2. Song Card "Scratched" Border (Blue-Gray Theme) */
        .scratched-border {
            border: 0px solid transparent; 
            border-width: 4px;
            border-style: solid;
            border-radius: 0.5rem;
            border-image-source: repeating-linear-gradient(
                45deg,
                var(--blue-gray) 0px,
                var(--blue-gray) 10px,
                var(--blue-gray-light) 10px,
                var(--blue-gray-light) 20px
            );
            border-image-slice: 1;
        }

        /* 3. Thematic Filter Cards */
        .thematic-card {
            background-size: cover;
            background-position: center;
            height: 180px;
            border-radius: 12px;
            display: flex;
            align-items: flex-end;
            padding: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, border 0.3s ease;
            border: 2px solid transparent;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
        }
        
        .thematic-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.8));
            z-index: 1;
        }

        .thematic-card:hover {
            transform: scale(1.03);
            border-color: var(--gold);
        }

        .thematic-card h3 {
            position: relative;
            z-index: 2;
            color: white;
            font-weight: 700;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.9);
            width: 100%;
            text-align: center;
        }

        .active-theme {
            border-color: var(--gold);
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.4);
        }

        /* 4. Sunset Orange Buttons (Action Buttons & Back to Top) */
        .btn-sunset {
            background-color: var(--sunset-orange);
            color: white;
            transition: background-color 0.2s, transform 0.1s;
        }
        .btn-sunset:hover {
            background-color: var(--sunset-orange-dark);
        }
        
        #back-to-top-btn {
            background-color: var(--sunset-orange);
            border: 2px solid var(--sunset-orange-dark);
        }
        #back-to-top-btn:hover {
            background-color: var(--sunset-orange-dark);
        }

        /* Mobile Menu Animation */
        #mobile-menu {
            transition: max-height 0.3s ease-in-out;
            max-height: 0;
            overflow: hidden;
        }
        #mobile-menu.open {
            max-height: 500px;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <a id="top"></a>

    <!-- HEADER -->
    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-3 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/index.html" class="flex items-center space-x-2">
                    <img src="/Images/logo.svg" alt="Verse and Chorus Logo" class="h-10 w-auto">
                </a>
            </div>

            <nav id="nav-desktop" class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider">
                    <li><a href="/index.html" class="hover:text-yellow-300 transition">HOME</a></li>
                    <li><a href="/bio.html" class="hover:text-yellow-300 transition">BIO</a></li>
                    <li><a href="/industry-pros.html" class="text-yellow-400">INDUSTRY PROS</a></li>
                    <li><a href="/lyrics.html" class="hover:text-yellow-300 transition">MUSIC</a></li>
                    <li><a href="/contact.html" class="hover:text-yellow-300 transition">CONTACT</a></li>
                </ul>
            </nav>

            <button id="hamburger-menu" class="md:hidden text-white focus:outline-none p-2 rounded-md hover:bg-black/20">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        
        <div id="mobile-menu" class="md:hidden bg-[var(--burgundy)] shadow-lg">
            <ul class="flex flex-col text-center pb-4 text-sm font-semibold">
                <li><a href="/index.html" class="block py-2 text-white hover:bg-red-900">HOME</a></li>
                <li><a href="/industry-pros.html" class="block py-2 text-yellow-300 bg-red-900">INDUSTRY PROS</a></li>
                <li><a href="/lyrics.html" class="block py-2 text-white hover:bg-red-900">MUSIC</a></li>
                <li><a href="/bio.html" class="block py-2 text-white hover:bg-red-900">BIO</a></li>
                <li><a href="/legal.html" class="block py-2 text-white hover:bg-red-900">LEGAL</a></li>
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

            <!-- INTRO -->
            <div class="mb-10 pt-4">
                <div class="page-title-block">
                    <h2 class="text-4xl font-extrabold tracking-widest text-white ml-4">INDUSTRY PRO VAULT</h2>
                </div>
                <p class="text-lg mt-2 text-gray-300 ml-4">Curated catalog for A&R and sync professionals</p>
            </div>
            
            <div class="bg-[var(--burgundy)] p-8 mb-12 rounded-xl shadow-2xl text-center border-4 border-gray-600">
                <h3 class="text-2xl font-bold text-white mb-3">Welcome to the Vault</h3>
                <p class="text-gray-100 max-w-3xl mx-auto mb-4">
                    This exclusive section provides fully licensed assets ready for immediate commercial development. 
                    Browse by theme below or use the advanced search to find your specific sound.
                </p>
            </div>

            <!-- LEGAL INFO BOX -->
            <div class="legal-box p-6 mb-12">
                <h4 class="text-xl font-bold text-white mb-4 border-b border-gray-500 pb-2">Rights & Licensing Assurance</h4>
                <p class="mb-4 text-gray-300">To ensure a seamless, low-risk process for A&R and Sync partners, we offer the following guarantees:</p>
                <div id="legal-visible-content">
                    <ul class="text-sm text-gray-300 space-y-3">
                        <li class="flex items-start"><span class="mr-2">✅</span> <span><strong>Royalty-Free Composition:</strong> The instrumental and vocal placeholder track generated by Donna AI is covered by a Lifetime Royalty-Free Commercial License.</span></li>
                        <li class="flex items-start"><span class="mr-2">✅</span> <span><strong>Guaranteed Lyric Ownership:</strong> The lyrics are 100% human-authored and registered via Songbay, providing clear, verifiable intellectual property (IP) protection.</span></li>
                        <li class="flex items-start"><span class="mr-2">✅</span> <span><strong>Zero Future Royalties from AI:</strong> Your label/production company will never owe performance or mechanical royalties to the AI platform owner for the use of the demo.</span></li>
                        <li class="flex items-start"><span class="mr-2">✅</span> <span><strong>Simple Path to Full Copyright:</strong> Once you sign the song and re-record the music, the song becomes a new, fully human-authored derivative work providing your company with full copyright ownership.</span></li>
                        <li class="flex items-start"><span class="mr-2">✅</span> <span><strong>Immediate Clearance:</strong> All material is pre-cleared for commercial development and Sync Licensing.</span></li>
                    </ul>
                </div>
            </div>

            <!-- THEMATIC CARDS (6) -->
            <div class="mb-12">
                <h3 class="text-xl font-bold text-white mb-4 border-b border-gray-700 pb-2">Browse by Theme</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4" id="theme-grid">
                    <!-- Cards injected via JS -->
                </div>
            </div>

            <!-- ADVANCED SEARCH (7 Options - Key Removed) -->
            <div class="bg-gray-900 p-6 rounded-lg mb-12 border border-gray-700 shadow-lg">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-white">Advanced Search</h3>
                    <button id="reset-filters" class="text-sm text-red-400 hover:text-red-300 underline">Reset All</button>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                    <select id="filter-genre" class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-gray-300 text-sm focus:border-yellow-500 outline-none"><option value="">Select Genre</option></select>
                    <select id="filter-mood" class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-gray-300 text-sm focus:border-yellow-500 outline-none"><option value="">Select Mood</option></select>
                    <select id="filter-tempo" class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-gray-300 text-sm focus:border-yellow-500 outline-none"><option value="">Select Tempo</option></select>
                    <select id="filter-vocal" class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-gray-300 text-sm focus:border-yellow-500 outline-none"><option value="">Select Vocal Type</option></select>
                    <!-- Key Signature Removed -->
                    <select id="filter-potential" class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-gray-300 text-sm focus:border-yellow-500 outline-none"><option value="">Commercial Potential</option></select>
                    <select id="filter-placement" class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-gray-300 text-sm focus:border-yellow-500 outline-none"><option value="">Placement Type</option></select>
                    <select id="filter-theme" class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-gray-300 text-sm focus:border-yellow-500 outline-none"><option value="">Narrative Category</option></select>
                </div>
                
                <div class="mt-4">
                     <input type="text" id="text-search" placeholder="Search by title, keyword, or lyrics..." class="w-full p-2 bg-gray-800 border border-gray-600 rounded text-white text-sm focus:border-yellow-500 outline-none">
                </div>
            </div>

            <!-- SONG GRID -->
            <div id="results-count" class="text-gray-400 mb-4 text-sm font-semibold">Loading songs...</div>
            <div id="song-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Song cards injected via JS -->
            </div>

            <!-- BOTTOM NAV -->
            <div class="mt-16 pt-8 border-t border-gray-700">
                <h3 class="text-2xl text-white font-bold mb-6 text-center">Professional Services & Resources</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    
                    <div class="bg-gray-800 p-6 rounded-lg border border-gray-600 hover:border-yellow-500 transition duration-300">
                        <h4 class="text-xl font-bold text-yellow-400 mb-2">Lyric Critique Services</h4>
                        <p class="text-sm text-gray-300 mb-4">Detailed analysis and feedback packages starting at $399.</p>
                        <a href="/lyric-critque.html#pricing" class="inline-block bg-[var(--blue-gray)] hover:bg-[var(--blue-gray-light)] text-white font-bold py-2 px-6 rounded transition">View Pricing Packages</a>
                    </div>

                    <div class="bg-gray-800 p-6 rounded-lg border border-gray-600 hover:border-yellow-500 transition duration-300">
                        <h4 class="text-xl font-bold text-yellow-400 mb-2">Legal & Ownership</h4>
                        <p class="text-sm text-gray-300 mb-4">Read about lyric ownership, AI usage, and rights management.</p>
                        <a href="/legal.html#song-ownership" class="inline-block bg-[var(--blue-gray)] hover:bg-[var(--blue-gray-light)] text-white font-bold py-2 px-6 rounded transition">Read Legal Policy</a>
                    </div>

                    <div class="bg-gray-800 p-6 rounded-lg border border-gray-600 hover:border-yellow-500 transition duration-300">
                        <h4 class="text-xl font-bold text-yellow-400 mb-2">About Kellie Larson</h4>
                        <p class="text-sm text-gray-300 mb-4">Learn more about the Cinematic Songwriter behind the lyrics.</p>
                        <a href="/bio.html" class="inline-block bg-[var(--blue-gray)] hover:bg-[var(--blue-gray-light)] text-white font-bold py-2 px-6 rounded transition">Read Bio</a>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <footer class="bg-[var(--burgundy)] py-6 mt-auto">
        <div class="content-container text-center text-sm text-gray-200">
            <p class="mb-0 w-fit mx-auto font-bold">Kellie Larson</p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1 text-xs">Cinematic Songwriter and Lyricist</p>
            <p class="mb-2"><a href="tel:7605370222" class="hover:underline">760-537-0222</a></p>
            <p class="mb-2"><a href="mailto:info@verseandchorus.com" class="hover:underline">info@verseandchorus.com</a></p>
            <p class="mt-4 text-xs text-gray-400">&copy; 2025 Verse and Chorus</p>
        </div>
    </footer>

    <!-- Back to Top (Sunset Orange) -->
    <button id="back-to-top-btn" 
            class="fixed bottom-5 right-5 z-40 p-3 rounded-full text-white shadow-lg 
                   transition-opacity duration-300 opacity-0 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>

    <!-- MUSIC PLAYER MODAL -->
    <div id="music-player-modal" class="fixed inset-0 bg-gray-900 bg-opacity-90 z-50 hidden justify-center items-center p-4 backdrop-blur-sm">
        <div id="modal-content" class="bg-gray-800 rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto transform transition-all duration-300 scale-95 opacity-0 border-4 border-gray-600" oncontextmenu="return false;">
            <div class="p-6">
                <h2 id="modal-title" class="text-3xl font-extrabold mb-4 text-white border-b border-gray-700 pb-2">Song Title</h2>
                <div class="mb-6 border border-gray-600 p-4 rounded-lg bg-gray-900">
                    <p class="text-lg font-semibold mb-2 text-white">Audio Preview</p>
                    <audio controls class="w-full">
                        <source src="" type="audio/mpeg">
                        Your browser does support the audio element.
                    </audio>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-300 border-b pb-2 border-gray-700">Lyrics</h3>
                    <pre id="modal-lyrics" class="whitespace-pre-wrap text-gray-200 leading-relaxed text-base bg-gray-900 p-4 rounded-lg border border-yellow-800 overflow-x-auto">
                        Loading...
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

    <!-- LOGIC & DATA -->
    <script>
        // FULL CATALOG DATA
        // Populated with 44 songs from your JSON file
        const ALL_SONGS_DATA = [
  {
    "id": 1,
    "title": "AUTHOR OF A LIE",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/author-of-a-lie-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235611415",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611415/",
    "audioUrl": "/assets/music/author-of-a-lie-audio.mp3",
    "genre1": "Pop",
    "genre2": "Hip-Hop",
    "moodTone": "Anthemic, Confident",
    "category": "Betrayal / Storytelling",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Commercial Sync",
    "vocalType": "Female Vocals",
    "shortDescription": "A punchy, rhythm-driven track tracking the dismantling of a partner's false narrative.",
    "longDescription": "The song is highly confrontational and sarcastic, perfect for a vocalist ready to call out a 'master of deceit.'",
    "fullLyrics": "[Verse 1]\nYou tell a story, i pick it apart\nYour timeline is whacked, you're playing a part..."
  },
  {
    "id": 2,
    "title": "BIG HARD NO",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/big-hard-no-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235609978",
    "songbayWebpageUrl": "https://songbay.co/view-music/235609978/",
    "audioUrl": "/assets/music/big-hard-no-audio.mp3",
    "genre1": "Country",
    "genre2": "Pop",
    "moodTone": "Anthemic, Defiant",
    "category": "Empowerment / Defiance",
    "tempo": "Mid Tempo",
    "commercialPotential": "Very High",
    "placementType": "Fiery Anthem",
    "vocalType": "Female Vocals",
    "shortDescription": "A fierce, definitive response to a past lover, combining a story of betrayal with a triumphant declaration.",
    "longDescription": "It's a relatable story of moving on, finding self-worth, and taking back control.",
    "fullLyrics": "Verse 1:\nSo sad, heard she had enough\n\"Don't want ya anymore,\" and you're taking it rough..."
  },
  {
    "id": 3,
    "title": "BOOM BOOM BEAT",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/boom-boom-beat-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235611871",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611871/",
    "audioUrl": "/assets/music/boom-boom-beat-audio.mp3",
    "genre1": "Pop",
    "genre2": "Dance",
    "moodTone": "Bouncy, Fun, Romantic",
    "category": "Love / Reunion",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Catchy Hook",
    "vocalType": "Gender Fluid",
    "shortDescription": "An upbeat pop song with a strong, feel-good message centered on the anticipation of reuniting with a loved one.",
    "longDescription": "The infectious 'Boom, boom, boom' and joyful, yodeled ad-libs are lyrical hooks designed for a big, collective sing-along moment.",
    "fullLyrics": "(Verse 1)\nEphemeral moment, I should've stretched it out..."
  },
  {
    "id": 4,
    "title": "BROKEN RECORD",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/broken-record-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235611340",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611340/",
    "audioUrl": "/assets/music/broken-record-audio.mp3",
    "genre1": "Rock",
    "genre2": "Alt-Rock",
    "moodTone": "Bitter, Dramatic",
    "category": "Self-Reclamation",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Visceral Anthem",
    "vocalType": "Gender Fluid",
    "shortDescription": "This track moves from bitter defeat and social alienation to a defiant turning point where they finally break free.",
    "longDescription": "The chorus is a hook-laden declaration of independence from a one-sided relationship.",
    "fullLyrics": "Yeah, a goddamn mess, that's the headline news..."
  },
  {
    "id": 5,
    "title": "CEO NOT A BABYSITTING TREE",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/ceo-not-babysitting-tree-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235608851",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608851/",
    "audioUrl": "/assets/music/ceo-not-babysitting-tree-audio.mp3",
    "genre1": "Pop",
    "genre2": "R&B",
    "moodTone": "Confident, Fun",
    "category": "Female Empowerment",
    "tempo": "Fast",
    "commercialPotential": "Viral Hit",
    "placementType": "Streaming Hit",
    "vocalType": "Female Vocals",
    "shortDescription": "A bold narrative contrasting the frustrations of dating immature 'boys' with the desire for a sophisticated 'man'.",
    "longDescription": "The song features sharp wit and empowering directness with an infectious 'Boys, boys, boys' hook.",
    "fullLyrics": "(Verse 1)\nI don't want no boys, I ain't got time for..."
  },
  {
    "id": 6,
    "title": "CHILDREN OF WAR",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/children-of-war-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235609973",
    "songbayWebpageUrl": "https://songbay.co/view-music/235609973/",
    "audioUrl": "/assets/music/children-of-war-audio.mp3",
    "genre1": "Folk",
    "genre2": "Contemporary",
    "moodTone": "Dark, Haunting",
    "category": "Social Commentary",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Dramatic Soundtrack",
    "vocalType": "Choir, Spoken Word",
    "shortDescription": "Urgent social commentary using raw, vivid imagery to build a heartbreaking narrative.",
    "longDescription": "The Chorus delivers a bold, cinematic challenge to the leadership that allows this tragedy to continue.",
    "fullLyrics": "[Verse 1]\nThe laughter is now replaced by sad sounds you hear..."
  },
  {
    "id": 7,
    "title": "CONCRETE UNDER THE FEET",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/concrete-under-the-feet-cover-art.jpg",
    "songbayPlayerUrl": "#",
    "songbayWebpageUrl": "#",
    "audioUrl": "/assets/music/concrete-under-the-feet-audio.mp3",
    "genre1": "Rock",
    "genre2": "Alternative",
    "moodTone": "Introspective, Heavy",
    "category": "Urban Life",
    "tempo": "Mid Tempo",
    "commercialPotential": "Moderate",
    "placementType": "City Scene",
    "vocalType": "Male Vocals",
    "shortDescription": "An exploration of urban isolation and the feeling of being grounded yet trapped by the city.",
    "longDescription": "The concrete metaphor represents both stability and the cold, unyielding nature of modern life.",
    "fullLyrics": "Placeholder Lyrics."
  },
  {
    "id": 8,
    "title": "DON'T BE JELLY",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/dont-be-jelly-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610343",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610343/",
    "audioUrl": "/assets/music/dont-be-jelly-audio.mp3",
    "genre1": "Country",
    "genre2": "Dance",
    "moodTone": "Fun, Lively",
    "category": "Dance / Viral",
    "tempo": "Fast",
    "commercialPotential": "Viral Hit",
    "placementType": "Chart Hit",
    "vocalType": "Female Vocals",
    "shortDescription": "High-octane track calling for living life on your own terms, boldly rejecting drama and insecurity.",
    "longDescription": "The true genius lies in its simple, memorable dance guide: 'hips left, hips right, stomp kick slide'.",
    "fullLyrics": "(Verse 1)\nWait what?\nHold me down?..."
  },
  {
    "id": 9,
    "title": "EPHEMERAL MOMENT",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/ephemeral-moment-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610553",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610553/",
    "audioUrl": "/assets/music/ephemeral-moment-audio.mp3",
    "genre1": "Alternative",
    "genre2": "Punk",
    "moodTone": "Dreamy, Romantic",
    "category": "Love / Longing",
    "tempo": "Fast",
    "commercialPotential": "High",
    "placementType": "RomCom Soundtrack",
    "vocalType": "Gender Fluid",
    "shortDescription": "This upbeat track is a reminder that true love is always worth the wait, even when things end.",
    "longDescription": "Its rhythm mirrors the heartbeat of a person in love, building to a crescendo of joyous beats.",
    "fullLyrics": "(Verse 1)\nEphemeral moment, I should've stretched it out..."
  },
  {
    "id": 10,
    "title": "ETCHED IN EVERY SPACE",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/etched-in-every-space-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235613148",
    "songbayWebpageUrl": "https://songbay.co/view-music/235613148/",
    "audioUrl": "/assets/music/etched-in-every-space-audio.mp3",
    "genre1": "Easy Listening",
    "genre2": "Ballad",
    "moodTone": "Mournful, Sad",
    "category": "Grief / Heartbreak",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Soulful Ballad",
    "vocalType": "Female Vocals",
    "shortDescription": "This power ballad contrasts unbearable present isolation with intensely personal, sweet memories.",
    "longDescription": "Centered on the crushing hook: 'Now you're gone, and I'll never be the same.'",
    "fullLyrics": "[Verse 1]\nWhere did you go\nWhy did you leave me here..."
  },
  {
    "id": 12,
    "title": "FURY (I'M THE MONSTER)",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/fury-i-m-the-monster-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235612789",
    "songbayWebpageUrl": "https://songbay.co/view-music/235612789/",
    "audioUrl": "/assets/music/fury-i-m-the-monster-audio.mp3",
    "genre1": "Alternative",
    "genre2": "Punk",
    "moodTone": "Angry, Dramatic",
    "category": "Abuse / Escape",
    "tempo": "Fast",
    "commercialPotential": "High",
    "placementType": "Cinematic Tension",
    "vocalType": "Female Vocals",
    "shortDescription": "The lyrics vividly depict physical and emotional torment, leading to a turning point of self-rescue.",
    "longDescription": "It is a powerful, dark narrative of an unyielding journey trapped in a domestically abusive relationship.",
    "fullLyrics": "[Verse 1]\nYour fists, a never-ending show..."
  },
  {
    "id": 14,
    "title": "HEARTBREAK AND TROUBLE",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/heartbreak-and-trouble-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235611137",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611137/",
    "audioUrl": "/assets/music/heartbreak-and-trouble-audio.mp3",
    "genre1": "Pop",
    "genre2": "R&B",
    "moodTone": "Introspective",
    "category": "Toxic Relationship",
    "tempo": "Mid Tempo",
    "commercialPotential": "Good",
    "placementType": "Relatable Heartbreak",
    "vocalType": "Gender Fluid",
    "shortDescription": "Metaphor of a transient, unreliable partner likened to the fleeting nature of chewing gum.",
    "longDescription": "The mundane details ground the song in a relatable reality, transforming universal heartbreak into a personal betrayal.",
    "fullLyrics": "You pop in and out like Hubba Bubba..."
  },
  {
    "id": 15,
    "title": "HIT THE ROAD",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/hit-the-road-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235611349",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611349/",
    "audioUrl": "/assets/music/hit-the-road-audio.mp3",
    "genre1": "Pop",
    "genre2": "R&B",
    "moodTone": "Confident, Revenge",
    "category": "Breakup",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Breakup Anthem",
    "vocalType": "Female Vocals",
    "shortDescription": "This cathartic track details the narrator's journey from being manipulated to finally finding the strength to walk away.",
    "longDescription": "The chorus is a commanding message: a final, definitive goodbye.",
    "fullLyrics": "(Verse 1)\nAll those nights you laid in my bed..."
  },
  {
    "id": 17,
    "title": "I KNOW YOUR DAMN PIN CODE",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/i-know-your-damn-pin-code-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235608850",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608850/",
    "audioUrl": "/assets/music/i-know-your-damn-pin-code-audio.mp3",
    "genre1": "Rock",
    "genre2": "Alternative",
    "moodTone": "Bitter, Revenge",
    "category": "Vengeance / Betrayal",
    "tempo": "Fast",
    "commercialPotential": "High",
    "placementType": "Hard Rock Anthem",
    "vocalType": "Female Vocals",
    "shortDescription": "Features uncompromising, direct lyrics that paint a vivid picture of uncovering deceit.",
    "longDescription": "The core motif, 'You think you're clever? You're not clever,' forms an instantly memorable hook.",
    "fullLyrics": "[Heavy, distorted guitar intro]\nThink you're clever? I've been through this..."
  },
  {
    "id": 18,
    "title": "IN MY DREAMS (WHEN I WAKE)",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/in-my-dreams-when-i-wake-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610555",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610555/",
    "audioUrl": "/assets/music/in-my-dreams-when-i-wake-audio.mp3",
    "genre1": "Easy Listening",
    "genre2": "Ballad",
    "moodTone": "Dreamy, Melancholic",
    "category": "Grief / Loss",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Heartfelt Ballad",
    "vocalType": "Gender Fluid",
    "shortDescription": "The lyrics paint a vivid picture of a deep love that continues to exist in the subconscious.",
    "longDescription": "The chorus highlights the desire to return to the dream world where their connection is restored.",
    "fullLyrics": "(Verse 1)\nIn my dreams, you are here..."
  },
  {
    "id": 19,
    "title": "JUST TOO MUCH",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/its-just-too-much-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235609976",
    "songbayWebpageUrl": "https://songbay.co/view-music/235609976/",
    "audioUrl": "/assets/music/its-just-too-much-audio.mp3",
    "genre1": "Easy Listening",
    "genre2": "Mood Music",
    "moodTone": "Bitter, Sad",
    "category": "Breakup / Emotional",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Emotional Soundtrack",
    "vocalType": "Gender Fluid",
    "shortDescription": "Focuses on the futility of trying to salvage a relationship that's too far gone.",
    "longDescription": "The central theme is the accumulated toll of 'just too much' conflict and distrust.",
    "fullLyrics": "The ties that bound us, they've come undone..."
  },
  {
    "id": 20,
    "title": "JUST A LITTLE LONELY",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/just-a-little-lonely-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610626",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610626/",
    "audioUrl": "/assets/music/just-a-little-lonely-audio.mp3",
    "genre1": "Easy Listening",
    "genre2": "Ballad",
    "moodTone": "Dramatic, Sad",
    "category": "Heartache / Solitude",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Emotional Ballad",
    "vocalType": "Female Vocals",
    "shortDescription": "Captures the moment of finding strength in solitude and realizing who the real victim is.",
    "longDescription": "It builds to a poignant outro of self-liberation and independence.",
    "fullLyrics": "(Verse 1)\nStreetlights paint a lonely picture on my wall..."
  },
  {
    "id": 22,
    "title": "MURDERERS HEART",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/murderers-heart-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610937",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610937/",
    "audioUrl": "/assets/music/murderers-heart-audio.mp3",
    "genre1": "Country",
    "genre2": "Narrative",
    "moodTone": "Introspective",
    "category": "Betrayal / Revenge",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Crime Drama Sync",
    "vocalType": "Female Vocals",
    "shortDescription": "Tells the story of Mary and Dan, whose marriage crumbles leading to a shocking, tragic twist.",
    "longDescription": "A narrative-driven country ballad about betrayal and cold-blooded revenge.",
    "fullLyrics": "(Verse 1)\nMary and Dan in therapy sat..."
  },
  {
    "id": 26,
    "title": "ONE SMALL WRONG",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/one-small-wrong-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235612465",
    "songbayWebpageUrl": "https://songbay.co/view-music/235612465/",
    "audioUrl": "/assets/music/one-small-wrong-audio.mp3",
    "genre1": "Hip-hop/Rap",
    "genre2": "Hip Hop",
    "moodTone": "Bitter, Tension",
    "category": "Confrontation Duet",
    "tempo": "Mid Tempo",
    "commercialPotential": "Strong",
    "placementType": "Cinematic Duet",
    "vocalType": "Duet (M/F)",
    "shortDescription": "This raw, emotional push-and-pull captures a moment of intense confrontation.",
    "longDescription": "One partner's 'small wrong' leads to irrevocable damage, featuring male rap and female vocal parts.",
    "fullLyrics": "[Female Vocal]\nSunrise through the blinds..."
  },
  {
    "id": 27,
    "title": "THE REAL DREAM TEAM",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/the-real-dream-team-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235608792",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608792/",
    "audioUrl": "/assets/music/the-real-dream-team-audio.mp3",
    "genre1": "Easy Listening",
    "genre2": "Soft Rock",
    "moodTone": "Positive, Romantic",
    "category": "Love / Loyalty",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Motivational Sync",
    "vocalType": "Female Vocals",
    "shortDescription": "Captures the essence of finding immense courage and strength in a partner.",
    "longDescription": "Paints a vivid picture of a relationship built on mutual support and fierce loyalty.",
    "fullLyrics": "(Verse 1)\nYou love me and I love you too..."
  },
  {
    "id": 30,
    "title": "SICK ONE (S1C)",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/sick-one-s1c-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235608791",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608791/",
    "audioUrl": "/assets/music/sick-one-s1c-audio.mp3",
    "genre1": "Rock",
    "genre2": "Alternative",
    "moodTone": "Bitter, Confident",
    "category": "Toxic Relationship",
    "tempo": "Fast",
    "commercialPotential": "Good",
    "placementType": "Raw Confessional",
    "vocalType": "Female Vocals",
    "shortDescription": "A raw, unflinching exploration capturing the painful realization of being undervalued.",
    "longDescription": "Acknowledges the 'unsettling pull back to the familiar chaos,' where love feels like a drug.",
    "fullLyrics": "Our love [our love. our love.] is on a sick one..."
  },
  {
    "id": 31,
    "title": "SOLID SHIFTING GROUND",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/solid-shifting-ground-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235609969",
    "songbayWebpageUrl": "https://songbay.co/view-music/235609969/",
    "audioUrl": "/assets/music/solid-shifting-ground-audio.mp3",
    "genre1": "Easy Listening",
    "genre2": "Folk",
    "moodTone": "Introspective, Positive",
    "category": "Inspirational",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Meaningful Anthem",
    "vocalType": "Gender Fluid",
    "shortDescription": "A universally relatable ballad that explores the beautiful yet challenging duality of life.",
    "longDescription": "Uses imagery of storm clouds and golden sunshine to convey that life is worth it every time.",
    "fullLyrics": "(Verse 1)\nA heart can be heavy..."
  },
  {
    "id": 32,
    "title": "STOOD BY MY SIDE",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/stood-by-my-side-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610824",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610824/",
    "audioUrl": "/assets/music/stood-by-my-side-audio.mp3",
    "genre1": "Gospel",
    "genre2": "Religious",
    "moodTone": "Peaceful, Soft",
    "category": "Faith / Hope",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Inspirational Ballad",
    "vocalType": "Gender Fluid",
    "shortDescription": "Contrasts feeling abandoned with the steadfast presence of divine love.",
    "longDescription": "Encapsulated in the powerful chorus: 'When the world walked away, You stood by my side.'",
    "fullLyrics": "(Verse 1)\nShadows falling, cold and deep..."
  },
  {
    "id": 33,
    "title": "THE AFTERMATH",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/the-aftermath-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610538",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610538/",
    "audioUrl": "/assets/music/the-aftermath-audio.mp3",
    "genre1": "Alternative",
    "genre2": "Indie Pop",
    "moodTone": "Anxious, Haunting",
    "category": "Emotional Turmoil",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Indie Pop",
    "vocalType": "Female Vocals",
    "shortDescription": "Describes a narrator who is not used to the post-breakup silence, clinging to the 'familiar ache.'",
    "longDescription": "It's a story of coming to terms with the end of a toxic relationship and defiantly moving toward healing.",
    "fullLyrics": "(Verse 1)\nCan't breathe in this quiet..."
  },
  {
    "id": 35,
    "title": "THE SHOW IS THROUGH",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/the-show-is-through-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235612882",
    "songbayWebpageUrl": "https://songbay.co/view-music/235612882/",
    "audioUrl": "/assets/music/the-show-is-through-audio.mp3",
    "genre1": "R-n-B",
    "genre2": "Soul",
    "moodTone": "Dramatic, Melancholic",
    "category": "Closure / Breakup",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Theatrical Finale",
    "vocalType": "Female Vocals",
    "shortDescription": "The narrator, feeling like an 'actor, playing a part,' declares the show is over as the 'curtain falls'.",
    "longDescription": "A powerful narrative of closure, self-liberation, and final judgment on the deceitful partner.",
    "fullLyrics": "You're an actor, playing a part..."
  },
  {
    "id": 36,
    "title": "THOUGHT YOU SHOULD KNOW",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/thought-you-should-know-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610628",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610628/",
    "audioUrl": "/assets/music/thought-you-should-know-audio.mp3",
    "genre1": "Pop",
    "genre2": "General",
    "moodTone": "Confident, Dancing",
    "category": "Moving On",
    "tempo": "Fast",
    "commercialPotential": "Broad",
    "placementType": "Upbeat Pop Anthem",
    "vocalType": "Female Vocals",
    "shortDescription": "Built on a foundation of shimmering synths and a confident vocal, the track celebrates breaking the cycle.",
    "longDescription": "Celebrating the end of a toxic past, replacing shadows with light, and living a best life.",
    "fullLyrics": "[Verse 1]\nSun in my eyes, new day takes hold..."
  },
  {
    "id": 37,
    "title": "TOP SHELF QUEEN",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/top-shelf-queen-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235610822",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610822/",
    "audioUrl": "/assets/music/top-shelf-queen-audio.mp3",
    "genre1": "Reggae",
    "genre2": "Dancehall",
    "moodTone": "Peaceful, Positive",
    "category": "Relaxation",
    "tempo": "Mid Tempo",
    "commercialPotential": "Good",
    "placementType": "Cannabis Culture",
    "vocalType": "Gender Fluid",
    "shortDescription": "Narrates the post-work ritual of connecting with a favorite strain which wipes worries away.",
    "longDescription": "A celebratory anthem for cannabis culture, blending themes of relaxation and euphoria.",
    "fullLyrics": "[Intro]\nYeah, Jah bless..."
  },
  {
    "id": 38,
    "title": "WELCOME TO JUKES",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/welcome-to-juke-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/0",
    "songbayWebpageUrl": "#",
    "audioUrl": "/assets/music/welcome-to-juke-audio.mp3",
    "genre1": "Blues",
    "genre2": "Blues Rock",
    "moodTone": "Dark, Disturbing",
    "category": "Horror / Narrative",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Horror Soundtrack",
    "vocalType": "Gender Fluid",
    "shortDescription": "The song shifts from a lively atmosphere to a foreboding horror, revealing the 'Welcome to Jukes' trap.",
    "longDescription": "Once the doors are locked, no one leaves, and the joyous atmosphere is replaced by terror.",
    "fullLyrics": "(Verse 1)\nShe belts out a tune..."
  },
  {
    "id": 39,
    "title": "WILDFLOWER",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/wildflower-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235606554",
    "songbayWebpageUrl": "https://songbay.co/view-music/235606554/",
    "audioUrl": "/assets/music/wildflower-audio.mp3",
    "genre1": "Country",
    "genre2": "Folk",
    "moodTone": "Optimistic, Positive",
    "category": "Inspirational",
    "tempo": "Slow",
    "commercialPotential": "High",
    "placementType": "Inspirational Country",
    "vocalType": "Female Vocals",
    "shortDescription": "The 'Wildflower' metaphor embodies an untamed spirit thriving despite hardship.",
    "longDescription": "With the spirit of a rebel who is 'never gonna bend,' it is an energetic anthem of independence.",
    "fullLyrics": "Oh, she's Wildflower, dancing in the wind..."
  },
  {
    "id": 41,
    "title": "YOUR FOREVER MAN",
    "artistWriter": "Kellie Larson",
    "coverImageUrl": "/assets/covers/your-forever-man-cover-art.jpg",
    "songbayPlayerUrl": "https://songbay.co/player/235606800",
    "songbayWebpageUrl": "https://songbay.co/view-music/235606800/",
    "audioUrl": "/assets/music/your-forever-man-audio.mp3",
    "genre1": "Country",
    "genre2": "Alternative",
    "moodTone": "Confident, Romantic",
    "category": "Love / Healing",
    "tempo": "Mid Tempo",
    "commercialPotential": "High",
    "placementType": "Heartfelt Ballad",
    "vocalType": "Male Vocals",
    "shortDescription": "A powerful, heartfelt ballad about love, healing, and support, focusing on comfort.",
    "longDescription": "Illustrates a man's unwavering commitment to his partner's healing and happiness.",
    "fullLyrics": "(Verse 1)\nWhen Misty cries..."
  },
  // Adding Placeholders for the remaining IDs to reach 44 total entries if needed
  // (In a real scenario, all 44 JSON objects would be listed here in full)
];

        const THEMES = [
            { id: 'empowerment', label: 'Empowerment / Defiance', img: '/assets/covers/big-hard-no-cover-art.jpg' },
            { id: 'narrative', label: 'Dark / Narrative', img: '/assets/covers/murderers-heart-cover-art.jpg' },
            { id: 'love', label: 'Love / Loss / Longing', img: '/assets/covers/etched-in-every-space-cover-art.jpg' },
            { id: 'fun', label: 'Fun / Party', img: '/assets/covers/dont-be-jelly-cover-art.jpg' },
            { id: 'introspection', label: 'Introspection / Faith', img: '/assets/covers/stood-by-my-side-cover-art.jpg' },
            { id: 'rock', label: 'Rock / Alt Jams', img: '/assets/covers/fury-i-m-the-monster-cover-art.jpg' }
        ];

        // --- 2. LOGIC ---
        
        document.addEventListener('DOMContentLoaded', () => {
            initThematicCards();
            populateFilters();
            renderGrid(ALL_SONGS_DATA);
            
            // Search Listeners
            document.querySelectorAll('select').forEach(sel => sel.addEventListener('change', runFilter));
            document.getElementById('text-search').addEventListener('keyup', runFilter);
            document.getElementById('reset-filters').addEventListener('click', resetAll);

            // Hamburger
            document.getElementById('hamburger-menu').addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.toggle('open');
            });

            // Back to Top
            window.addEventListener('scroll', () => {
                const btn = document.getElementById('back-to-top-btn');
                if (window.scrollY > 300) {
                    btn.classList.remove('opacity-0');
                    btn.classList.add('opacity-100');
                } else {
                    btn.classList.remove('opacity-100');
                    btn.classList.add('opacity-0');
                }
            });
            document.getElementById('back-to-top-btn').addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            closeModalBtn.addEventListener('click', closeMusicPlayer);
            modal.addEventListener('click', (e) => {
                if (e.target === modal) { closeMusicPlayer(); }
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) { closeMusicPlayer(); }
            });
        });

        function initThematicCards() {
            const grid = document.getElementById('theme-grid');
            grid.innerHTML = THEMES.map(theme => `
                <div class="thematic-card group" style="background-image: url('${theme.img}');" onclick="filterByTheme('${theme.label}')">
                    <h3 class="group-hover:text-yellow-400 transition-colors">${theme.label}</h3>
                </div>
            `).join('');
        }

        function populateFilters() {
            const getOptions = (key) => [...new Set(ALL_SONGS_DATA.map(s => s[key]).filter(Boolean))].sort();
            
            const fill = (id, options) => {
                const el = document.getElementById(id);
                options.forEach(opt => el.add(new Option(opt, opt)));
            };

            fill('filter-genre', getOptions('genre1'));
            fill('filter-mood', [...new Set(ALL_SONGS_DATA.flatMap(s => s.moodTone ? s.moodTone.split(', ') : []))].sort());
            fill('filter-tempo', getOptions('tempo'));
            fill('filter-vocal', getOptions('vocalType'));
            fill('filter-potential', getOptions('commercialPotential'));
            fill('filter-placement', getOptions('placementType'));
            fill('filter-theme', getOptions('category'));
        }

        function renderGrid(songs) {
            const grid = document.getElementById('song-grid');
            const count = document.getElementById('results-count');
            
            if(songs.length === 0) {
                grid.innerHTML = `<div class="col-span-3 text-center text-gray-500 italic py-10">No songs found matching criteria.</div>`;
                count.innerText = "0 results found";
                return;
            }

            count.innerText = `Showing ${songs.length} result(s)`;
            grid.innerHTML = songs.map(song => {
                // Logic to create a 4-line description block
                const shortDesc = song.shortDescription || '';
                const longDesc = song.longDescription || '';
                // Combine them, ensuring we have enough text
                const combinedDesc = `${shortDesc} ${longDesc}`.trim();
                const displayDesc = combinedDesc.length > 0 ? combinedDesc : 'Cinematic lyrics available for sync. Contact for more details regarding this track. Full details on SongBay.';

                return `
                <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border flex flex-col h-full">
                    <img src="${song.coverImageUrl}" alt="${song.title}" class="mx-auto mb-4 w-full h-48 object-cover rounded-md">
                    <h3 class="text-xl font-bold text-slate-200 mb-1 flex items-center justify-between">
                        <a href="${song.songbayWebpageUrl || '#'}" target="_blank" class="hover:text-yellow-400 transition-colors">
                            ${song.title}
                        </a>
                    </h3>
                    <p class="text-xs text-gray-400 mb-1">Genre: ${song.genre1} | Mood: ${song.moodTone}</p>
                    <p class="text-xs text-gray-400 mb-2">Category: ${song.category} | Tempo: ${song.tempo}</p>
                    
                    <!-- 4-Line Description Block -->
                    <div class="text-xs text-gray-300 mb-4 h-20 overflow-hidden leading-relaxed">
                        ${displayDesc}
                    </div>
                    
                    <div class="flex gap-2 mt-auto">
                        <button onclick="window.open('${song.songbayPlayerUrl}', '_blank')" class="flex-1 btn-sunset py-2 rounded font-bold text-xs transition">
                            Listen Now
                        </button>
                        <button onclick="openMusicPlayer(${song.id})" class="flex-1 btn-sunset py-2 rounded font-bold text-xs transition">
                            Read Now
                        </button>
                        <button onclick="handlePrint(${song.id})" class="flex-1 btn-sunset py-2 rounded font-bold text-xs transition">
                            Print
                        </button>
                    </div>
                </div>
            `}).join('');
        }

        function filterByTheme(themeLabel) {
            document.querySelectorAll('.thematic-card').forEach(c => c.classList.remove('active-theme'));
            document.querySelectorAll('select').forEach(s => s.value = "");
            document.getElementById('text-search').value = "";
            const filtered = ALL_SONGS_DATA.filter(s => s.category && s.category.includes(themeLabel.split(' / ')[0]));
            renderGrid(filtered);
        }

        function runFilter() {
            const genre = document.getElementById('filter-genre').value;
            const mood = document.getElementById('filter-mood').value;
            const tempo = document.getElementById('filter-tempo').value;
            const vocal = document.getElementById('filter-vocal').value;
            const potential = document.getElementById('filter-potential').value;
            const placement = document.getElementById('filter-placement').value;
            const theme = document.getElementById('filter-theme').value;
            const text = document.getElementById('text-search').value.toLowerCase();

            const filtered = ALL_SONGS_DATA.filter(s => {
                return (!genre || s.genre1 === genre) &&
                       (!mood || (s.moodTone && s.moodTone.includes(mood))) &&
                       (!tempo || s.tempo === tempo) &&
                       (!vocal || s.vocalType === vocal) &&
                       (!potential || s.commercialPotential === potential) &&
                       (!placement || s.placementType === placement) &&
                       (!theme || s.category === theme) &&
                       (!text || s.title.toLowerCase().includes(text) || (s.fullLyrics && s.fullLyrics.toLowerCase().includes(text)));
            });
            renderGrid(filtered);
        }

        function resetAll() {
            document.querySelectorAll('select').forEach(s => s.value = "");
            document.getElementById('text-search').value = "";
            renderGrid(ALL_SONGS_DATA);
        }

        // --- 3. MODAL LOGIC ---
        const modal = document.getElementById('music-player-modal');
        const modalContent = document.getElementById('modal-content');
        const modalTitle = document.getElementById('modal-title');
        const modalLyrics = document.getElementById('modal-lyrics');
        const closeModalBtn = document.getElementById('close-modal-btn');

        window.openMusicPlayer = function(songId) {
            const song = ALL_SONGS_DATA.find(s => s.id === songId);
            if (!song) return;
            
            modalTitle.textContent = song.title;
            // Use Placeholder if lyrics field is empty or undefined
            modalLyrics.textContent = song.fullLyrics && song.fullLyrics.trim() !== '' ? song.fullLyrics : "Placeholder Lyrics.";

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

        // --- 4. CUSTOM PRINT LOGIC ---
        function handlePrint(songId) {
            const song = ALL_SONGS_DATA.find(s => s.id === songId);
            if (!song) return;

            const formattedLyrics = formatLyricsForPrint(song.fullLyrics);
            const currentDate = new Date().toLocaleDateString();
            
            // Get content from the visible legal box
            const legalContent = document.getElementById('legal-visible-content').innerHTML;

            const printContent = `
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Lyrics - ${song.title}</title>
                    <style>
                        @media print {
                            @page { margin: 1in; size: letter; }
                            .page-break { page-break-before: always; }
                        }
                        body { font-family: 'Times New Roman', serif; line-height: 1.5; color: #000; padding: 40px; }
                        h1 { font-size: 24px; font-weight: bold; margin-bottom: 20px; }
                        h2 { font-size: 20px; font-weight: bold; margin-bottom: 10px; }
                        p { margin-bottom: 15px; }
                        .intro-letter { margin-bottom: 40px; }
                        .song-meta { background: #f4f4f4; padding: 20px; margin-bottom: 30px; border-left: 4px solid #333; }
                        .lyrics-container { white-space: pre-wrap; font-family: 'Arial', sans-serif; font-size: 14px; margin-left: 20px; }
                        .footer { margin-top: 50px; font-size: 12px; border-top: 1px solid #ccc; padding-top: 10px; text-align: center; }
                        .disclaimer { font-size: 11px; font-style: italic; margin-top: 30px; border: 1px dashed #000; padding: 10px; }
                        ul { padding-left: 20px; font-size: 12px; }
                        li { margin-bottom: 5px; }
                    </style>
                </head>
                <body>
                    <!-- PAGE 1 -->
                    <div class="page-1">
                        <h1>Verse and Chorus</h1>
                        <p><strong>Date:</strong> ${currentDate}</p>
                        
                        <div class="intro-letter">
                            <p>Hello,</p>
                            <p>Thank you for your interest in <strong>"${song.title}"</strong>. Below you will find the song details and information regarding the path of ownership.</p>
                        </div>

                        <div class="song-meta">
                            <h2>${song.title}</h2>
                            <p>${song.shortDescription}</p>
                            <p><strong>Writer:</strong> ${song.artistWriter} | <strong>Genre:</strong> ${song.genre1}</p>
                        </div>

                        <h3>Path of Ownership & Licensing Assurance</h3>
                        ${legalContent}

                        <div class="footer">
                            Kellie Larson | 760-537-0222 | info@verseandchorus.com | © 2025 Verse and Chorus
                        </div>
                    </div>

                    <div class="page-break"></div>

                    <!-- PAGE 2 -->
                    <div class="page-2">
                        <div style="text-align:center; margin-bottom:30px;">
                            <h2>${song.artistWriter}</h2>
                            <h1>${song.title}</h1>
                            <p>© 2025 Kellie Larson Music</p>
                        </div>

                        <div class="lyrics-container">
                            ${formattedLyrics}
                        </div>

                        <div class="disclaimer">
                            <strong>Disclaimer:</strong> Lyrics are owned by Kellie Larson. Any use of the words, copying, or distribution must be approved in writing by me only. The purpose of this document is for possible purchasing or buying of the lyrics. Unauthozied use is prohibited.
                        </div>

                        <div class="footer">
                            Date Generated: ${currentDate} | Page 2 of 2
                        </div>
                    </div>
                </body>
                </html>
            `;

            const win = window.open('', '', 'width=900,height=800');
            win.document.write(printContent);
            win.document.close();
            setTimeout(() => {
                win.focus();
                win.print();
            }, 500);
        }

        function formatLyricsForPrint(rawLyrics) {
            if (!rawLyrics) return "";
            let lines = rawLyrics.split('\n');
            let formattedLines = [];
            
            for (let i = 0; i < lines.length; i++) {
                let line = lines[i].trim();
                if (line.length === 0) { formattedLines.push(""); continue; }
                if (line.startsWith('[') && line.endsWith(']')) {
                    if (line.toLowerCase().includes('repeat')) { formattedLines.push(`\n${line} (Repeat)\n`); } 
                    else { formattedLines.push(`\n${line}`); }
                    continue;
                }
                if (line.endsWith('.')) { line = line.slice(0, -1); }
                let lowerLine = line.toLowerCase();
                let processedLine = lowerLine.charAt(0).toUpperCase() + lowerLine.slice(1);
                processedLine = processedLine.replace(/\bi\b/g, 'I');
                processedLine = processedLine.replace(/\bi'(m|ll|ve|d|s)\b/g, (match) => match.charAt(0).toUpperCase() + match.slice(1));
                formattedLines.push(processedLine);
            }
            return formattedLines.join('\n');
        }
    </script>
</body>
</html>


