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
            { "id": 10, "title": "ETCHED IN EVERY SPACE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/etched-in-every-space-cover-art.jpg", "genre1": "Easy Listening", "genre2": "Pop Ballad", "moodTone": "Introspective, Mournful, Sad", "category": "Grief / Heartbreak Ballad", "tempo": "Slow", "commercialPotential": "High", "shortDescription": "This power ballad contrasts unbearable present isolation with intensely personal, sweet memories.", "fullLyrics": "[Verse 1]\nWhere did you go\nWhy did you leave me here...", "audioUrl": "#" },
            { "id": 11, "title": "TAKE THAT FIRST STEP", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/take-that-first-step-cover-art.jpg", "genre1": "Pop", "genre2": "R&B", "moodTone": "Determined, Anthemic", "category": "General", "tempo": "Fast", "commercialPotential": "Medium", "shortDescription": "Placeholder description for TAKE THAT FIRST STEP.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 12, "title": "FURY (I'M THE MONSTER)", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/fury-i-m-the-monster-cover-art.jpg", "genre1": "Alternative", "genre2": "Pop-Punk", "moodTone": "Angry, Dramatic, Heavy", "category": "Abuse / Escape / Revenge", "tempo": "Fast", "commercialPotential": "High", "shortDescription": "The lyrics vividly depict physical and emotional torment, leading to a turning point.", "fullLyrics": "[Verse 1]\nYour fists, a never-ending show...", "audioUrl": "#" },
            { "id": 13, "title": "GENX 80S ANTHEM", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/genx-80s-anthem-cover-art.jpg", "genre1": "Rock", "genre2": "Pop", "moodTone": "Playful, Proud", "category": "General", "tempo": "Fast", "commercialPotential": "Medium", "shortDescription": "Placeholder description for GENX 80S ANTHEM.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 14, "title": "HEARTBREAK AND TROUBLE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/heartbreak-and-trouble-cover-art.jpg", "genre1": "Pop", "genre2": "R&B", "moodTone": "Anthemic, Introspective", "category": "Toxic Relationship", "tempo": "Mid Tempo", "commercialPotential": "Good", "shortDescription": "The lyrics use the central metaphor of a transient, unreliable partner likened to chewing gum.", "fullLyrics": "You pop in and out like Hubba Bubba...", "audioUrl": "#" },
            { "id": 15, "title": "HIT THE ROAD", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/hit-the-road-cover-art.jpg", "genre1": "Pop", "genre2": "R&B", "moodTone": "Anthemic, Confident, Revenge", "category": "Breakup / Self-Liberation", "tempo": "Mid Tempo", "commercialPotential": "Excellent", "shortDescription": "This cathartic track details the narrator's journey from being manipulated to walking away.", "fullLyrics": "(Verse 1)\nAll those nights you laid in my bed...", "audioUrl": "#" },
            { "id": 16, "title": "HOW'S IT FEEL, BRO?", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/how-s-it-feel-bro-cover-art.jpg", "genre1": "Pop", "genre2": "Hip-Hop", "moodTone": "Confident, Revenge", "category": "General", "tempo": "Mid Tempo", "commercialPotential": "Medium", "shortDescription": "Placeholder description for HOW'S IT FEEL, BRO?.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 17, "title": "I KNOW YOUR DAMN PIN CODE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/i-know-your-damn-pin-code-cover-art.jpg", "genre1": "Rock", "genre2": "Alternative Rock", "moodTone": "Bitter, Confident, Revenge", "category": "Vengeful Anthem / Betrayal", "tempo": "Fast", "commercialPotential": "High", "shortDescription": "Driven by a heavy, distorted guitar intro, the track features uncompromising, direct lyrics.", "fullLyrics": "[Heavy, distorted guitar intro]\nThink you're clever? I've been through this...", "audioUrl": "#" },
            { "id": 18, "title": "IN MY DREAMS (WHEN I WAKE)", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/in-my-dreams-when-i-wake-cover-art.jpg", "genre1": "Easy Listening", "genre2": "Pop Ballad", "moodTone": "Anthemic, Dreamy, Melancholic", "category": "Grief / Loss / Pop Ballad", "tempo": "Slow", "commercialPotential": "Excellent", "shortDescription": "The lyrics paint a vivid picture of a deep love that continues to exist in the subconscious.", "fullLyrics": "(Verse 1)\nIn my dreams, you are here, and you kiss my cheek...", "audioUrl": "#" },
            { "id": 19, "title": "JUST TOO MUCH", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/its-just-too-much-cover-art.jpg", "genre1": "Easy Listening", "genre2": "Mood Music", "moodTone": "Anthemic, Bitter, Melancholic", "category": "Breakup / Emotional Toll", "tempo": "Slow", "commercialPotential": "High", "shortDescription": "The storytelling focuses on the futility of trying to salvage a relationship that's too far gone.", "fullLyrics": "The ties that bound us, they've come undone...", "audioUrl": "#" },
            { "id": 20, "title": "JUST A LITTLE LONELY", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/just-a-little-lonely-cover-art.jpg", "genre1": "Easy Listening", "genre2": "Pop Ballad", "moodTone": "Anthemic, Dramatic, Melancholic", "category": "Heartache / Aftermath", "tempo": "Slow", "commercialPotential": "High", "shortDescription": "The song contrasts the narrator's pain with the ex-partner's attempts to return.", "fullLyrics": "(Verse 1)\nStreetlights paint a lonely picture on my wall...", "audioUrl": "#" },
            { "id": 21, "title": "LITTLE THINGS", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/little-things-cover-art.jpg", "genre1": "Pop", "genre2": "Easy Listening", "moodTone": "Romantic, Soft", "category": "General", "tempo": "Slow", "commercialPotential": "Medium", "shortDescription": "Placeholder description for LITTLE THINGS.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 22, "title": "MURDERERS HEART", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/murderers-heart-cover-art.jpg", "genre1": "Country", "genre2": "Narrative Country", "moodTone": "Anthemic, Introspective", "category": "Betrayal / Revenge", "tempo": "Mid Tempo", "commercialPotential": "Excellent", "shortDescription": "The song tells the story of Mary and Dan, whose marriage crumbles when Mary discovers Dan in a bar.", "fullLyrics": "(Verse 1)\nMary and Dan in therapy sat, their marriage they tried to mend...", "audioUrl": "#" },
            { "id": 23, "title": "MY GIRL KARMA", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/my-girl-karma-cover-art.jpg", "genre1": "R&B", "genre2": "Pop", "moodTone": "Cool, Revenge", "category": "General", "tempo": "Mid Tempo", "commercialPotential": "Medium", "shortDescription": "Placeholder description for MY GIRL KARMA.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 24, "title": "MY WORDS MATTER", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/my-words-matter-cover-art.jpg", "genre1": "Pop", "genre2": "Anthemic", "moodTone": "Confident, Proud", "category": "General", "tempo": "Fast", "commercialPotential": "Medium", "shortDescription": "Placeholder description for MY WORDS MATTER.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 25, "title": "NOT THAT GIRL ANYMORE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/not-that-girl-anymore-cover-art.jpg", "genre1": "Country", "genre2": "Pop", "moodTone": "Determined, Introspective", "category": "General", "tempo": "Mid Tempo", "commercialPotential": "Medium", "shortDescription": "Placeholder description for NOT THAT GIRL ANYMORE.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 26, "title": "ONE SMALL WRONG", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/one-small-wrong-cover-art.jpg", "genre1": "Hip-hop/Rap", "genre2": "General Hip Hop", "moodTone": "Bitter, Introspective, Sad", "category": "Dating / Confrontation Duet", "tempo": "Mid Tempo", "commercialPotential": "Strong", "shortDescription": "This raw, emotional push-and-pull captures a moment of intense confrontation.", "fullLyrics": "[Female Vocal]\nSunrise through the blinds, another empty day...", "audioUrl": "#" },
            { "id": 27, "title": "THE REAL DREAM TEAM", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/the-real-dream-team-cover-art.jpg", "genre1": "Easy Listening", "genre2": "Soft Rock", "moodTone": "Anthemic, Positive, Romantic", "category": "Love / Loyalty", "tempo": "Slow", "commercialPotential": "Ideal", "shortDescription": "This song captures the essence of finding immense courage and strength in a partner.", "fullLyrics": "(Verse 1)\nYou love me and I love you too...", "audioUrl": "#" },
            { "id": 28, "title": "SHOT BY CUPIDS DART", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/shot-by-cupids-dart-cover-art.jpg", "genre1": "Pop", "genre2": "Bedroom Pop", "moodTone": "Romantic, Dreamy", "category": "General", "tempo": "Slow", "commercialPotential": "Medium", "shortDescription": "Placeholder description for SHOT BY CUPIDS DART.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 29, "title": "SHOWDOWN AT MY DOOR", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/showdown-at-my-door-cover-art.jpg", "genre1": "Rock", "genre2": "Blues", "moodTone": "Dramatic, Determined", "category": "General", "tempo": "Mid Tempo", "commercialPotential": "Medium", "shortDescription": "Placeholder description for SHOWDOWN AT MY DOOR.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 30, "title": "SICK ONE (S1C)", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/sick-one-s1c-cover-art.jpg", "genre1": "Rock", "genre2": "Alternative", "moodTone": "Bitter, Confident, Cool", "category": "Toxic Relationship", "tempo": "Fast", "commercialPotential": "Good", "shortDescription": "This raw, unflinching exploration captures the painful realization of being undervalued.", "fullLyrics": "Our love [our love. our love.] is on a sick one...", "audioUrl": "#" },
            { "id": 31, "title": "SOLID SHIFTING GROUND", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/solid-shifting-ground-cover-art.jpg", "genre1": "Easy Listening", "genre2": "Folk", "moodTone": "Anthemic, Introspective", "category": "Inspirational", "tempo": "Slow", "commercialPotential": "Ideal", "shortDescription": "The song uses imagery of shattered hearts and fading flowers to convey life's duality.", "fullLyrics": "(Verse 1)\nA heart can be heavy, weighted down by dreams...", "audioUrl": "#" },
            { "id": 32, "title": "STOOD BY MY SIDE", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/stood-by-my-side-cover-art.jpg", "genre1": "Gospel", "genre2": "Christian", "moodTone": "Anthemic, Dramatic, Peaceful", "category": "Faith / Hope", "tempo": "Slow", "commercialPotential": "Ideal", "shortDescription": "The song contrasts feeling abandoned with the steadfast presence of divine love.", "fullLyrics": "(Verse 1)\nShadows falling, cold and deep...", "audioUrl": "#" },
            { "id": 33, "title": "THE AFTERMATH", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/the-aftermath-cover-art.jpg", "genre1": "Alternative", "genre2": "Indie Pop", "moodTone": "Anthemic, Anxious, Dramatic", "category": "Emotional Turmoil", "tempo": "Slow", "commercialPotential": "Perfect", "shortDescription": "This emotionally charged track describes a narrator who is not used to the post-breakup silence.", "fullLyrics": "(Verse 1)\nCan't breathe in this quiet...", "audioUrl": "#" },
            { "id": 34, "title": "THE BACK OF ME", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/the-back-of-me-cover-art.jpg", "genre1": "Country", "genre2": "Americana", "moodTone": "Determined, Introspective", "category": "General", "tempo": "Mid Tempo", "commercialPotential": "Medium", "shortDescription": "Placeholder description for THE BACK OF ME.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 35, "title": "THE SHOW IS THROUGH", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/the-show-is-through-cover-art.jpg", "genre1": "R&B", "genre2": "Soul", "moodTone": "Anthemic, Dramatic, Melancholic", "category": "Closure / Breakup", "tempo": "Mid Tempo", "commercialPotential": "Perfect", "shortDescription": "The narrator, feeling like an 'actor, playing a part,' declares the show is over.", "fullLyrics": "You're an actor, playing a part...", "audioUrl": "#" },
            { "id": 36, "title": "THOUGHT YOU SHOULD KNOW", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/thought-you-should-know-cover-art.jpg", "genre1": "Pop", "genre2": "General Pop", "moodTone": "Anthemic, Confident, Dancing", "category": "Moving On / Celebration", "tempo": "Fast", "commercialPotential": "Broad", "shortDescription": "Built on a foundation of shimmering synths and a confident vocal, the track celebrates breaking free.", "fullLyrics": "[Verse 1]\nSun in my eyes, new day takes hold...", "audioUrl": "#" },
            { "id": 37, "title": "TOP SHELF QUEEN", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/top-shelf-queen-cover-art.jpg", "genre1": "Reggae", "genre2": "Dancehall", "moodTone": "Peaceful, Positive, Romantic", "category": "Ode / Relaxation", "tempo": "Mid Tempo", "commercialPotential": "Good", "shortDescription": "The song narrates the post-work ritual of connecting with their favorite strain.", "fullLyrics": "[Intro]\nYeah, Jah bless...", "audioUrl": "#" },
            { "id": 38, "title": "WELCOME TO JUKES", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/welcome-to-juke-cover-art.jpg", "genre1": "Blues", "genre2": "Blues Rock", "moodTone": "Anthemic, Dark, Disturbing", "category": "Horror / Narrative", "tempo": "Mid Tempo", "commercialPotential": "High", "shortDescription": "The song shifts from a lively atmosphere to a foreboding horror, revealing the 'Welcome to Jukes' sign is a trap.", "fullLyrics": "(Verse 1)\nShe belts out a tune, a voice both harsh and sweet...", "audioUrl": "#" },
            { "id": 39, "title": "WILDFLOWER", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/wildflower-cover-art.jpg", "genre1": "Country", "genre2": "Folk", "moodTone": "Calm, Confident, Optimistic", "category": "Inspirational / Independence", "tempo": "Slow", "commercialPotential": "High", "shortDescription": "The 'Wildflower' metaphor embodies an untamed spirit thriving despite hardship.", "fullLyrics": "Oh, she's Wildflower, dancing in the wind...", "audioUrl": "#" },
            { "id": 40, "title": "YEAR IN THE REARVIEW", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/year-in-the-rearview-cover-art.jpg", "genre1": "Pop", "genre2": "Contemporary", "moodTone": "Introspective, Determined", "category": "General", "tempo": "Mid Tempo", "commercialPotential": "Medium", "shortDescription": "Placeholder description for YEAR IN THE REARVIEW.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 41, "title": "YOUR FOREVER MAN", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/your-forever-man-cover-art.jpg", "genre1": "Country", "genre2": "Alternative Country", "moodTone": "Confident, Mellow, Proud", "category": "Love / Healing", "tempo": "Mid Tempo", "commercialPotential": "High", "shortDescription": "This song features a dynamic emotional arc from pain to freedom, using the theme of 'When Misty Cries'.", "fullLyrics": "(Verse 1)\nWhen Misty cries, the tears fall like rain from her eyes...", "audioUrl": "#" },
            { "id": 42, "title": "YOUR MASK", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/your-mask-cover-art.jpg", "genre1": "Placeholder", "genre2": "Placeholder", "moodTone": "Placeholder", "category": "General", "tempo": "Placeholder", "commercialPotential": "Medium", "shortDescription": "Placeholder description for YOUR MASK.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 43, "title": "CRAVING THOSE CRUMBS", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/craving-those-crumbs-cover-art.jpg", "genre1": "R&B", "genre2": "Pop", "moodTone": "Sad, Melancholic", "category": "General", "tempo": "Slow", "commercialPotential": "Medium", "shortDescription": "Placeholder description for CRAVING THOSE CRUMBS.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" },
            { "id": 44, "title": "MARRIED TO THE DRUG", "artistWriter": "Kellie Larson", "coverImageUrl": "/assets/covers/married-to-the-drug-cover-art.jpg", "genre1": "Rock", "genre2": "Metal", "moodTone": "Heavy, Bitter", "category": "General", "tempo": "Fast", "commercialPotential": "Medium", "shortDescription": "Placeholder description for MARRIED TO THE DRUG.", "fullLyrics": "Placeholder Lyrics", "audioUrl": "#" }
        ];

        // --- 2. CONFIGURATION ---
        const PLACEHOLDER_IMAGE = 'https://placehold.co/250x250/111/444?text=V%26C+Music';
        
        const THEMATIC_CARDS_DATA = [
            { theme: "Dark / Narrative", image: 'https://placehold.co/300x400/1e293b/fff?text=Dark+Narrative' }, 
            { theme: "Fun / Party", image: 'https://placehold.co/300x400/9d174d/fff?text=Fun+Party' }, 
            { theme: "Introspection / Faith", image: 'https://placehold.co/300x400/0f766e/fff?text=Faith' }, 
            { theme: "Love / Loss", image: 'https://placehold.co/300x400/4338ca/fff?text=Love+Loss' }, 
            { theme: "Vengeance / Power", image: 'https://placehold.co/300x400/b91c1c/fff?text=Vengeance' },
            { theme: "Rock / Alt Jams", image: 'https://placehold.co/300x400/000/fff?text=Rock+Alt' }
        ];

        const FILTER_CATEGORIES = [
            'Category', 'CommercialPotential', 'VocalType', 'PlacementType', 'MoodTone', 'Tempo', 'Genre1'
        ];
        
        // --- 3. STATE & DOM ELEMENTS ---
        let currentFilters = { category: null, value: null, text: '' };
        
        const cardContainer = document.getElementById('card-container');
        const thematicCardContainer = document.getElementById('thematic-card-container');
        const searchInput = document.getElementById('search-input');
        const filterCategoryButtons = document.getElementById('filter-category-buttons');
        const subFilterContainer = document.getElementById('sub-filter-container');
        const subFilterOptions = document.getElementById('sub-filter-options');
        const resetFilterBtn = document.getElementById('reset-filter-btn');
        const backToTopBtn = document.getElementById('back-to-top-btn');
        const mobileMenuToggle = document.getElementById('hamburger-menu'); 
        const mobileMenu = document.getElementById('mobile-menu');

        const modal = document.getElementById('music-player-modal');
        const modalTitle = document.getElementById('modal-title');
        const modalLyrics = document.getElementById('modal-lyrics');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const closeModalIcon = document.getElementById('close-modal-icon');

        // --- 4. RENDER LOGIC ---

        function createStandardCardHtml(song) {
            const genres = [song.genre1, song.genre2].filter(g => g && g !== 'Placeholder' && g !== 'N/A').join(' / ');
            
            return `
                <div class="song-card p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
                    <img src="${song.coverImageUrl}" 
                         onerror="this.src='${PLACEHOLDER_IMAGE}'" 
                         alt="${song.title}" 
                         class="mx-auto mb-4 w-full aspect-square object-cover rounded-lg bg-gray-900">
                    
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-slate-200 mb-1 leading-tight">${song.title}</h3>
                        <p class="text-xs text-gray-400 mb-1">Artist: ${song.artistWriter}</p>
                        <div class="flex flex-wrap gap-2 text-xs text-gray-400 mb-3">
                            <span class="bg-gray-700 px-2 py-0.5 rounded">${genres}</span>
                            <span class="bg-gray-700 px-2 py-0.5 rounded">${song.commercialPotential || 'N/A'}</span>
                        </div>
                        <p class="text-sm italic text-gray-300 line-clamp-2 mb-4">${song.shortDescription || 'Placeholder description.'}</p>
                    </div>
                    
                    <div class="mt-2 flex gap-2">
                        <button onclick="openMusicPlayer(${song.id})" class="flex-1 px-3 py-2 text-white font-semibold rounded-lg btn-sunset-orange text-sm shadow-md">
                            Read Now
                        </button>
                        <button onclick="handlePrint(${song.id})" class="flex-1 px-3 py-2 text-white font-semibold rounded-lg btn-sunset-orange text-sm shadow-md">
                            Print
                        </button>
                    </div>
                </div>
            `;
        }

        function createThematicCardHtml(cardData) {
            return `
                <div class="thematic-card rounded-xl shadow-lg hover:shadow-2xl transition duration-300 transform"
                     style="background-image: url('${cardData.image}');"
                     onclick="applyFilter('Category', '${cardData.theme.split('/')[0].trim()}')">
                    <div class="bg-black bg-opacity-60 p-2 rounded-lg w-full text-center backdrop-blur-sm">
                        <h3 class="text-sm font-extrabold tracking-wide uppercase">${cardData.theme}</h3>
                    </div>
                </div>
            `;
        }

        function renderCatalogCards(filteredSongs) {
            cardContainer.innerHTML = '';
            if (filteredSongs.length === 0) {
                 cardContainer.innerHTML = '<p class="text-gray-400 text-center col-span-full py-10">No songs found matching your search criteria.</p>';
                 return;
            }
            filteredSongs.forEach(song => {
                cardContainer.insertAdjacentHTML('beforeend', createStandardCardHtml(song));
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
                button.className = 'px-3 py-1.5 bg-gray-700 text-white text-sm font-medium rounded-lg hover:bg-gray-600 transition duration-150 border border-gray-600';
                button.textContent = category.replace('Potential', '').replace('Type', '').replace('1', '');
                button.setAttribute('data-category', category);
                button.onclick = () => toggleSubFilter(category);
                filterCategoryButtons.appendChild(button);
            });
        }

        // --- 5. FILTER LOGIC ---
        function getUniqueValues(category) {
            const categoryKey = category.charAt(0).toLowerCase() + category.slice(1);
            let values = [];
            ALL_SONGS_DATA.forEach(song => {
                let val = song[categoryKey];
                if (val && typeof val === 'string' && (categoryKey === 'moodTone')) {
                    val.split(',').forEach(item => {
                        let trimmed = item.trim();
                        if (trimmed && trimmed !== 'Placeholder') values.push(trimmed);
                    });
                } else if (val && val !== 'Placeholder' && val !== 'N/A') {
                    values.push(val);
                }
            });
            return [...new Set(values)].sort();
        }

        function applyFilter(category, value) {
            if (category) { currentFilters.category = category; currentFilters.value = value; }
            updateFilterButtons();
            
            const textFilter = searchInput.value.toLowerCase().trim();
            const filteredSongs = ALL_SONGS_DATA.filter(song => {
                // Text Match
                const searchable = [song.title, song.category, song.genre1, song.moodTone].join(' ').toLowerCase();
                const matchesText = searchable.includes(textFilter);

                // Category Match
                let matchesCategory = true;
                if (currentFilters.category && currentFilters.value) {
                    const key = currentFilters.category.charAt(0).toLowerCase() + currentFilters.category.slice(1);
                    const val = song[key];
                    if (!val) matchesCategory = false;
                    else matchesCategory = val.toLowerCase().includes(currentFilters.value.toLowerCase());
                }

                return matchesText && matchesCategory;
            });
            
            renderCatalogCards(filteredSongs);
        }

        function toggleSubFilter(category) {
            if (currentFilters.category === category && !subFilterContainer.classList.contains('hidden')) {
                subFilterContainer.classList.add('hidden');
                currentFilters.category = null;
                currentFilters.value = null;
                applyFilter(null, null);
                return;
            }
            
            currentFilters.category = category;
            const values = getUniqueValues(category);
            
            subFilterOptions.innerHTML = '';
            const allBtn = document.createElement('button');
            allBtn.className = 'sub-filter-option px-3 py-1 bg-gray-700 text-xs font-medium rounded-full border border-gray-600';
            allBtn.textContent = 'All';
            allBtn.onclick = () => applyFilter(category, null);
            subFilterOptions.appendChild(allBtn);

            values.forEach(value => {
                const btn = document.createElement('button');
                btn.className = 'sub-filter-option px-3 py-1 bg-gray-800 text-xs font-medium rounded-full border border-gray-700 text-gray-300';
                btn.textContent = value;
                btn.onclick = () => {
                    document.querySelectorAll('.sub-filter-option').forEach(b => b.classList.remove('active-sub'));
                    btn.classList.add('active-sub');
                    applyFilter(category, value);
                };
                subFilterOptions.appendChild(btn);
            });
            
            document.getElementById('sub-filter-title').textContent = `Filter by ${category}:`;
            subFilterContainer.classList.remove('hidden');
            updateFilterButtons();
        }

        function updateFilterButtons() {
            document.querySelectorAll('#filter-category-buttons button').forEach(btn => {
                btn.classList.remove('filter-btn-active');
                if (btn.getAttribute('data-category') === currentFilters.category) {
                    btn.classList.add('filter-btn-active');
                }
            });
        }

        function resetAllFilters() {
            currentFilters = { category: null, value: null, text: '' };
            searchInput.value = '';
            subFilterContainer.classList.add('hidden');
            updateFilterButtons();
            renderCatalogCards(ALL_SONGS_DATA);
        }

        // --- 6. MODAL & PRINT LOGIC ---
        window.openMusicPlayer = function(songId) {
            const song = ALL_SONGS_DATA.find(s => s.id === songId);
            if (!song) return;
            
            modalTitle.textContent = song.title;
            modalLyrics.textContent = song.fullLyrics || "Lyrics placeholder.";
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => {
                document.getElementById('modal-content').classList.remove('scale-95', 'opacity-0');
            }, 10);
        }

        function closeMusicPlayer() {
            document.getElementById('modal-content').classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
                modal.querySelector('audio').pause();
            }, 300);
        }

        window.handlePrint = function(songId) {
            const song = ALL_SONGS_DATA.find(s => s.id === songId);
            const printContent = `
                <html><head><title>${song.title}</title></head>
                <body style="font-family: sans-serif; padding: 40px;">
                    <h1 style="border-bottom: 2px solid #800020; padding-bottom:10px;">${song.title}</h1>
                    <p><strong>Artist:</strong> ${song.artistWriter}</p>
                    <p><strong>Description:</strong> ${song.shortDescription}</p>
                    <pre style="background:#f4f4f4; padding:20px; white-space: pre-wrap;">${song.fullLyrics}</pre>
                    <p style="font-size:12px; color:gray; margin-top:50px;">Verse & Chorus Industry Vault - Confidential</p>
                </body></html>
            `;
            const win = window.open('', '', 'width=800,height=600');
            win.document.write(printContent);
            win.document.close();
            win.print();
        }

        // --- 7. INITIALIZATION ---
        document.addEventListener('DOMContentLoaded', () => {
            renderThematicCards();
            renderFilterCategoryButtons();
            renderCatalogCards(ALL_SONGS_DATA);

            // Events
            closeModalBtn.addEventListener('click', closeMusicPlayer);
            closeModalIcon.addEventListener('click', closeMusicPlayer);
            modal.addEventListener('click', (e) => { if (e.target === modal) closeMusicPlayer(); });
            searchInput.addEventListener('input', () => applyFilter(currentFilters.category, currentFilters.value));
            resetFilterBtn.addEventListener('click', resetAllFilters);
            mobileMenuToggle.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
            
            // Scroll to top
            window.addEventListener('scroll', () => {
                backToTopBtn.style.opacity = window.scrollY > 300 ? '1' : '0';
            });
            backToTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
        });
    </script>
</body>
</html>
