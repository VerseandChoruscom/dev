<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | Verse and Chorus</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --burgundy: #800020; --light-text: #e0e0e0; --main-text: #ffffff; }
        body { background-color: rgb(0, 0, 0); color: var(--light-text); font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        .script-font { font-family: 'Parisienne', cursive; }
        .page-title-block { display: flex; align-items: center; border-left: 2px solid var(--light-text); padding-left: 1rem; }
        .content-container { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
        .legal-box { border: 1px solid rgb(75, 85, 99); background-color: rgb(31, 41, 55); border-radius: 0.5rem; }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #1a1a1a; }
        ::-webkit-scrollbar-thumb { background: #800020; border-radius: 4px; }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-3 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="index.html" class="flex items-center space-x-2">
                    <img src="/Images/logo.svg" alt="Verse and Chorus Logo" class="h-8 w-8"> 
                </a>
            </div>
            <nav id="nav-desktop" class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider">
                    <li><a href="index.html" class="hover:text-slate-300 transition duration-200">HOME</a></li>
                    <li><a href="bio.html" class="hover:text-slate-300 transition duration-200">BIO</a></li>
                    <li><a href="industry-pros.html" class="text-white border-b-2 border-white">INDUSTRY PROS</a></li>
                    <li><a href="lyrics.html" class="hover:text-slate-300 transition duration-200">MUSIC</a></li>
                    <li><a href="green-room.html" class="hover:text-slate-300 transition duration-200">GREEN ROOM</a></li>
                    <li><a href="articles.html" class="hover:text-slate-300 transition duration-200">ARTICLES</a></li>
                    <li><a href="lyric-critque.html" class="hover:text-slate-300 transition duration-200">LYRIC CRITIQUE</a></li>
                    <li><a href="collab.html" class="hover:text-slate-300 transition duration-200">COLLAB/CONSULT</a></li>
                    <li><a href="contact.html" class="hover:text-slate-300 transition duration-200">CONTACT</a></li>
                    <li><a href="legal.html" class="hover:text-slate-300 transition duration-200">LEGAL</a></li>
                </ul>
            </nav>
            <button id="hamburger-menu" class="md:hidden text-white focus:outline-none p-2 rounded-md hover:bg-black/20 transition duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
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
                <p class="text-lg mt-2 text-gray-300 ml-4">Curated catalog for A&R and Sync Professionals.</p>
            </div>
           
            <div class="bg-[var(--burgundy)] p-8 mb-12 rounded-xl shadow-2xl text-center border-2 border-gray-600">
                <h3 class="text-2xl font-bold text-white mb-3">Welcome to the Vault</h3>
                <p class="text-gray-100 max-w-3xl mx-auto">
                    This exclusive section provides fully licensed, pre-cleared assets ready for immediate commercial development. Our system ensures clear IP ownership and royalty-free composition for all placeholder demos, streamlining your path to full copyright.
                </p>
                <button onclick="document.getElementById('filter-section').scrollIntoView({behavior: 'smooth'})" class="mt-5 bg-white text-[var(--burgundy)] font-bold py-2 px-6 rounded-full hover:bg-gray-200 transition duration-300 shadow-lg">
                    Start Searching Catalog
                </button>
            </div>

            <div class="legal-box p-6 mb-10">
                <h4 class="text-xl font-bold text-white mb-4">Rights & Licensing Assurance (For Industry Use)</h4>
                <p class="mb-6 text-gray-300">To ensure a seamless, low-risk process for A&R and Sync partners, we offer the following guarantees for all placeholder demos:</p>
                <ul class="text-sm text-gray-300 space-y-2">
                    <li><strong class="text-white">✅ Royalty-Free Composition:</strong> The instrumental/vocal placeholder tracks are covered by a Lifetime Royalty-Free Commercial License.</li>
                    <li><strong class="text-white">✅ Guaranteed Lyric Ownership:</strong> The lyrics are 100% human-authored and registered via Songbay.</li>
                    <li><strong class="text-white">✅ Simple Path to Full Copyright:</strong> Once re-recorded, the song becomes a new derivative work based on our copyrighted lyrics.</li>
                </ul>
            </div>
       
            <div id="filter-section" class="bg-gray-900 p-6 rounded-lg mb-10 text-white shadow-lg border border-gray-700 sticky top-20 z-40">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                    <div class="text-xl font-bold text-amber-400">Catalog Search Engine</div>
                    
                    <div class="w-full md:w-1/2">
                        <div class="relative">
                            <input type="text" id="searchInput" placeholder="Search titles, lyrics, keywords..." 
                                class="w-full p-3 pl-10 bg-gray-800 border border-gray-600 rounded-full text-white focus:ring-2 focus:ring-[var(--burgundy)] focus:outline-none transition placeholder-gray-500">
                            <span class="absolute left-3 top-3.5 text-gray-400">🔍</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                    
                    <select id="genreFilter" class="p-2.5 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-1 focus:ring-[var(--burgundy)] w-full cursor-pointer hover:bg-gray-700 transition">
                        <option value="">All Genres</option>
                    </select>

                    <select id="moodFilter" class="p-2.5 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-1 focus:ring-[var(--burgundy)] w-full cursor-pointer hover:bg-gray-700 transition">
                        <option value="">All Moods</option>
                    </select>

                    <select id="tempoFilter" class="p-2.5 bg-gray-800 border border-gray-600 rounded-md text-white focus:ring-1 focus:ring-[var(--burgundy)] w-full cursor-pointer hover:bg-gray-700 transition">
                        <option value="">All Tempos</option>
                    </select>
           
                    <div class="flex gap-2">
                        <button id="resetBtn" class="w-full bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200 shadow">
                            Reset
                        </button>
                        <div id="resultCount" class="w-full flex items-center justify-center text-gray-400 text-xs bg-gray-800 rounded border border-gray-700">
                            Loading...
                        </div>
                    </div>
                </div>
            </div>

            <div id="song-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pb-20">
                </div>
    
        </div>
    </main>

    <footer class="bg-[var(--burgundy)] py-6 mt-auto">
        <div class="content-container text-center text-sm text-gray-200">
            <p class="mb-0 w-fit mx-auto text-lg font-semibold">Kellie Larson</p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1 text-xs opacity-80">Cinematic Songwriter and Lyricist</p>
            <p class="mt-4 text-xs text-gray-400">© 2025 Verse and Chorus</p>
        </div>
    </footer>

    <script>
        // ==========================================
        // 1. THE JSON DATA (Complete Catalog)
        // ==========================================
        const songData = [
            {
                "id": 1,
                "title": "AUTHOR OF A LIE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/author-of-a-lie-photo.jpg",
                "genre": "Pop",
                "genre2": "Indie",
                "moodTone": "Anthemic, Confident",
                "tempo": "Mid Tempo",
                "Hit Potential": "5/5",
                "shortDescription": "A punchy, rhythm-driven track focused on deceit, gaslighting, and the process of moving on.",
                "snippetA": "You're the author of a lie, a master of deceit",
                "keywords": ["Deceit", "Lies", "Gaslighting", "Storytelling"],
                "fullLyrics": "[Verse 1]\nYou tell a story, i pick it apart..."
            },
            {
                "id": 2,
                "title": "FURY (I'M THE MONSTER)",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/fury-im-the-monster.jpg",
                "genre": "Pop-Rock",
                "genre2": "Power Anthem",
                "moodTone": "Defiant, Empowered Rage",
                "tempo": "Fast / Driving Beat (140-155 BPM)",
                "Hit Potential": "Rank 1",
                "shortDescription": "Elite Tier Asset. The theme of inner monster activation is universally marketable as an empowerment anthem.",
                "snippetA": "The scratch in your voice, the static in your heart",
                "keywords": ["Monster", "Fury", "Empowerment", "Rage"],
                "fullLyrics": "The scratch in your voice, the static in your heart..."
            },
            {
                "id": 3,
                "title": "CEO, NOT BABYSITTING TREE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/ceo-not-babysitting-tree.jpg",
                "genre": "Pop",
                "genre2": "Hip-Hop Crossover",
                "moodTone": "Witty, Defiant, Comedic",
                "tempo": "Mid-to-Fast (120-135 BPM)",
                "Hit Potential": "Rank 2",
                "shortDescription": "Elite Tier Asset. High-concept, instantly relatable social critique of modern dating.",
                "snippetA": "Honey, I'm a CEO, not a babysitting tree",
                "keywords": ["CEO", "Dating", "Boys", "Maturity", "Humor"],
                "fullLyrics": "[Verse 1] I don't want no boys, I ain't got time for..."
            },
            {
                "id": 4,
                "title": "SICK ONE (S1C)",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/sick-one.jpg",
                "genre": "Alt-Pop",
                "genre2": "Pop-Rock",
                "moodTone": "Toxic Addiction, Self-Awareness",
                "tempo": "Mid-Tempo (95-115 BPM)",
                "Hit Potential": "Rank 3",
                "shortDescription": "Elite Tier Asset. Masterful use of contemporary language defining a toxic relationship cycle.",
                "snippetA": "You apologize to get between my thighs. Sick one.",
                "keywords": ["Sick One", "Toxic", "Addiction", "Pop-Rock"],
                "fullLyrics": "[Chorus 1] Your Love [your love. your love] is on a sick one..."
            },
            {
                "id": 5,
                "title": "I KNOW YOUR DAMN PIN CODE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/i-know-your-damn-pin-code.jpg",
                "genre": "Pop-Rock",
                "genre2": "Aggressive Pop",
                "moodTone": "Vengeance, Exposure",
                "tempo": "Fast / Aggressive (130-150 BPM)",
                "Hit Potential": "Rank 4",
                "shortDescription": "Elite Tier Asset. Aggressive Pop-Rock track with a high-concept hook about exposure and vengeance.",
                "snippetA": "You're not clever. I know your damn pin code.",
                "keywords": ["Pin Code", "Clever", "Vengeance", "Exposure"],
                "fullLyrics": "[Chorus 1] You think you're clever? And I can't get in your phone..."
            },
            {
                "id": 6,
                "title": "HIT THE ROAD",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/hit-the-road.jpg",
                "genre": "Pop-Rock",
                "genre2": "Pop",
                "moodTone": "Final Dismissal, Release",
                "tempo": "Mid-Tempo (115-135 BPM)",
                "Hit Potential": "Rank 6",
                "shortDescription": "High-energy, confident dismissal using modern digital vernacular (DM, blocked).",
                "snippetA": "You wanna send a DM? Haha, I blocked you on all that stuff.",
                "keywords": ["Blocked", "DM", "Dismissal", "Breakup"],
                "fullLyrics": "Let's get this straight now, it's all because of how you treated me..."
            },
            {
                "id": 7,
                "title": "FINAL RELEASE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/final-release.jpg",
                "genre": "Pop-Country",
                "genre2": "Indie Pop",
                "moodTone": "Decisive, Triumphant Breakup",
                "tempo": "Mid-Tempo (90-110 BPM)",
                "Hit Potential": "Rank 5",
                "shortDescription": "Decisive and triumphant breakup anthem with strong narrative drive.",
                "snippetA": "Re-read all your promises, then burned what was next",
                "keywords": ["Breakup", "Triumphant", "Release", "Moving On"],
                "fullLyrics": "[Verse 1] You thought I'd fold, thought I'd break and cry..."
            },
            {
                "id": 8,
                "title": "GETTING SMARTER NOW",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/getting-smarter-now.jpg",
                "genre": "Pop-Country",
                "genre2": "Pop",
                "moodTone": "Realization, Self-Recrimination",
                "tempo": "Mid-Tempo (100-115 BPM)",
                "Hit Potential": "Rank 7",
                "shortDescription": "A song of realization and self-recrimination, seeing the truth after being fooled.",
                "snippetA": "The fog is lifting, the scales fall from my eyes",
                "keywords": ["Smart", "Realization", "Red Flags", "Truth"],
                "fullLyrics": "The fog is lifting, the scales fall from my eyes..."
            },
            {
                "id": 9,
                "title": "WILDFLOWER",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/wildflower.jpg",
                "genre": "Pop-Country",
                "genre2": "Folk-Pop",
                "moodTone": "Inspirational, Escapism",
                "tempo": "Mid-Tempo (85-100 BPM)",
                "Hit Potential": "Rank 8",
                "shortDescription": "Strong, positive character anthem. Ideal for sync placement focusing on female resilience.",
                "snippetA": "She holds her head high with a big ole smile",
                "keywords": ["Wildflower", "Resilience", "Country", "Inspirational"],
                "fullLyrics": "[Verse 2] Her Momma's light dimmed when she turned just eight..."
            },
            {
                "id": 10,
                "title": "STOOD BY MY SIDE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/stood-by-my-side.jpg",
                "genre": "Inspirational",
                "genre2": "Country Gospel",
                "moodTone": "Faith, Recovery, Spiritual",
                "tempo": "Slow / Anthem (70-90 BPM)",
                "Hit Potential": "Rank 9",
                "shortDescription": "Powerful, unambiguous inspirational theme focusing on mental health and faith.",
                "snippetA": "When the world walked away, You stood by my side",
                "keywords": ["Faith", "Gospel", "Recovery", "God"],
                "fullLyrics": "[Chorus] When the world walked away, You stood by my side..."
            },
            {
                "id": 11,
                "title": "DON'T BE JELLY",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/dont-be-jelly.jpg",
                "genre": "Dance-Pop",
                "genre2": "Assertive Pop",
                "moodTone": "Confident, Boundary-Setting",
                "tempo": "Fast / Driving Beat (130-145 BPM)",
                "Hit Potential": "Rank 10",
                "shortDescription": "High-energy, sassy confrontation. The bridge elevates the theme to self-worth.",
                "snippetA": "No chains on this body, baby, just pure energy.",
                "keywords": ["Jelly", "Jealousy", "Confidence", "Dance"],
                "fullLyrics": "You and me create synergy..."
            },
            {
                "id": 12,
                "title": "YOUR FOREVER MAN",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/your-forever-man.jpg",
                "genre": "Country Ballad",
                "genre2": "Adult Contemporary",
                "moodTone": "Dedication, Healing, Support",
                "tempo": "Slow / Ballad (60-75 BPM)",
                "Hit Potential": "Rank 11",
                "shortDescription": "A beautiful, unconditional commitment song with a high-impact final statement.",
                "snippetA": "She's my future, I'm her forever man",
                "keywords": ["Forever Man", "Love", "Commitment", "Country"],
                "fullLyrics": "[Outro] I'm the anchor, her helping hand..."
            },
            {
                "id": 13,
                "title": "SCREAM THE TRUTH",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/scream-the-truth.jpg",
                "genre": "Inspirational Pop",
                "genre2": "Pop-Rock",
                "moodTone": "Healing, Openness",
                "tempo": "Mid-Tempo (90-110 BPM)",
                "Hit Potential": "Rank 12",
                "shortDescription": "Inspirational Pop track about breaking silence and sharing one's story.",
                "snippetA": "Now I'm taking the microphone, stepping up tall",
                "keywords": ["Truth", "Silence", "Healing", "Voice"],
                "fullLyrics": "[Verse 2] You told me to keep it secret, told me to play it cool..."
            },
            {
                "id": 14,
                "title": "TAKE THAT FIRST STEP",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/take-that-first-step.jpg",
                "genre": "Inspirational Pop",
                "genre2": "Ballad",
                "moodTone": "Addiction, Recovery, Support",
                "tempo": "Slow / Emotional (75-90 BPM)",
                "Hit Potential": "Rank 13",
                "shortDescription": "A powerful, empathetic narrative directed at someone struggling with addiction.",
                "snippetA": "Don't let the sickness win, don't let it take hold",
                "keywords": ["First Step", "Addiction", "Recovery", "Support"],
                "fullLyrics": "[Verse 2] I know the anger, the guilt and the shame..."
            },
            {
                "id": 15,
                "title": "THE SHOW IS THROUGH",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/the-show-is-through.jpg",
                "genre": "Indie Ballad",
                "genre2": "Pop",
                "moodTone": "Theatrical, Confrontational",
                "tempo": "Slow / Dramatic (70-85 BPM)",
                "Hit Potential": "Rank 14",
                "shortDescription": "Effective use of 'theater' metaphor for deception and emotional chaos.",
                "snippetA": "You're an actor, playing a part",
                "keywords": ["Show", "Actor", "Theater", "Deception"],
                "fullLyrics": "[Verse 1] You're an actor, playing a part..."
            },
            {
                "id": 16,
                "title": "BIG HARD NO",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/big-hard-no.jpg",
                "genre": "Pop",
                "genre2": "Boundaries",
                "moodTone": "Assertive, Confident",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium-High",
                "shortDescription": "A track focusing on the power of 'No'. Strong professional potential.",
                "snippetA": "[Placeholder]",
                "keywords": ["No", "Boundaries", "Respect", "Assertive"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 17,
                "title": "BOOM BOOM BEAT",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/boom-boom-beat.jpg",
                "genre": "Dance-Pop",
                "genre2": "Club",
                "moodTone": "Energetic, Fun",
                "tempo": "Fast / Driving",
                "Hit Potential": "High (Club)",
                "shortDescription": "Aligned with the 'Dance-Pop Hooks' trend. Strong rhythmic quality suitable for sync.",
                "snippetA": "[Placeholder]",
                "keywords": ["Dance", "Beat", "Club", "Energy"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 18,
                "title": "BROKEN RECORD",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/broken-record.jpg",
                "genre": "Pop-Rock",
                "genre2": "Relationship",
                "moodTone": "Frustrated, Repetitive",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Leverages the 'Pop-Country Crossover' narrative style. Strong concept.",
                "snippetA": "[Placeholder]",
                "keywords": ["Broken Record", "Arguments", "Repetition", "Frustration"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 19,
                "title": "CHILDREN OF WAR",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/children-of-war.jpg",
                "genre": "Ballad",
                "genre2": "Social Commentary",
                "moodTone": "Somber, Reflective, Hopeful",
                "tempo": "Slow",
                "Hit Potential": "Niche",
                "shortDescription": "A 'Conceptual Asset' suitable for specific sync opportunities in documentary or dramatic film.",
                "snippetA": "[Placeholder]",
                "keywords": ["War", "Children", "Peace", "Social Justice"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 20,
                "title": "CONCRETE UNDER THE FEET",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/concrete-under-the-feet.jpg",
                "genre": "Pop-Rock",
                "genre2": "Urban",
                "moodTone": "Gritty, Determined",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Strong imagery and melodic potential. Resilience narrative.",
                "snippetA": "[Placeholder]",
                "keywords": ["City", "Concrete", "Determination", "Life"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 21,
                "title": "EPHEMERAL MOMENT",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/ephemeral-moment.jpg",
                "genre": "Indie Ballad",
                "genre2": "Atmospheric",
                "moodTone": "Dreamy, Fleeting",
                "tempo": "Slow",
                "Hit Potential": "Medium (Sync)",
                "shortDescription": "Atmospheric Indie Ballad perfect for vlogs and montages. Warmth and longing.",
                "snippetA": "[Placeholder]",
                "keywords": ["Time", "Moment", "Dreamy", "Indie"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 22,
                "title": "ETCHED IN EVERY SPACE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/etched-in-every-space.jpg",
                "genre": "Pop-Country",
                "genre2": "Ballad",
                "moodTone": "Nostalgic, Longing",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Strong melodic potential and emotional resonance. Fits the 'Pop-Country Crossover' market.",
                "snippetA": "[Placeholder]",
                "keywords": ["Memory", "Love", "Nostalgia", "Space"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 23,
                "title": "GENX 80s ANTHEM",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/genx-80s-anthem.jpg",
                "genre": "Pop-Rock",
                "genre2": "Retro",
                "moodTone": "Nostalgic, Energetic",
                "tempo": "Up-Tempo",
                "Hit Potential": "High (Niche)",
                "shortDescription": "Tap into the nostalgia market. Strong commercial concept.",
                "snippetA": "[Placeholder]",
                "keywords": ["80s", "GenX", "Retro", "Anthem"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 24,
                "title": "HEARTBREAK AND TROUBLE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/heartbreak-and-trouble.jpg",
                "genre": "Pop-Country",
                "genre2": "Blues",
                "moodTone": "Melancholy, Resilient",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Authentic emotional resonance. A story-driven track fitting Pop-Country.",
                "snippetA": "[Placeholder]",
                "keywords": ["Heartbreak", "Trouble", "Country", "Blues"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 25,
                "title": "HOW'S IT FEEL, BRO?",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/hows-it-feel-bro.jpg",
                "genre": "Pop-Rock",
                "genre2": "Sarcastic Pop",
                "moodTone": "Sarcastic, Confrontational",
                "tempo": "Up-Tempo",
                "Hit Potential": "High",
                "shortDescription": "High melodic potential and modern relational language. Sarcastic and confrontational.",
                "snippetA": "[Placeholder]",
                "keywords": ["Bro", "Revenge", "Karma", "Sarcasm"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 26,
                "title": "IN MY DREAMS (WHEN I WAKE)",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/in-my-dreams-when-i-wake.jpg",
                "genre": "Ballad",
                "genre2": "Pop",
                "moodTone": "Romantic, Dreamy",
                "tempo": "Slow",
                "Hit Potential": "Medium",
                "shortDescription": "Solid emotional core. Classic love ballad.",
                "snippetA": "[Placeholder]",
                "keywords": ["Dreams", "Love", "Wake", "Romance"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 27,
                "title": "IT'S JUST TOO MUCH",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/its-just-too-much.jpg",
                "genre": "Pop",
                "genre2": "Indie",
                "moodTone": "Overwhelmed, Emotional",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Themes of mental health and overwhelm. Good for portfolio depth.",
                "snippetA": "[Placeholder]",
                "keywords": ["Overwhelmed", "Anxiety", "TooMuch", "Life"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 28,
                "title": "JUST A LITTLE LONELY",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/just-a-little-lonely.jpg",
                "genre": "Pop-Country",
                "genre2": "Ballad",
                "moodTone": "Melancholy, Hopeful",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Fits the 'Pop-Country' trend. Addresses universal feeling of loneliness.",
                "snippetA": "[Placeholder]",
                "keywords": ["Lonely", "Country", "Hope", "Solitude"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 29,
                "title": "LITTLE THINGS",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/little-things.jpg",
                "genre": "Folk-Pop",
                "genre2": "Acoustic",
                "moodTone": "Appreciative, Sweet",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium (Sync)",
                "shortDescription": "Uplifting Folk-Pop track celebrating the little things. Ideal for 'feel good' ads.",
                "snippetA": "[Placeholder]",
                "keywords": ["Gratitude", "LittleThings", "Happy", "Life"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 30,
                "title": "MURDERERS HEART",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/murderers-heart.jpg",
                "genre": "Indie Rock",
                "genre2": "Alternative",
                "moodTone": "Dark, Intense",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Niche",
                "shortDescription": "Dark and intense Indie Rock track with a gripping narrative. Suited for dramatic syncs.",
                "snippetA": "[Placeholder]",
                "keywords": ["Dark", "Heart", "Mystery", "Thriller"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 31,
                "title": "MY GIRL KARMA",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/my-girl-karma.jpg",
                "genre": "Pop",
                "genre2": "Upbeat",
                "moodTone": "Sassy, Confident",
                "tempo": "Up-Tempo",
                "Hit Potential": "High",
                "shortDescription": "Sassy and confident Pop track. Strong 'Pop-Country' or 'Dance-Pop' crossover potential.",
                "snippetA": "[Placeholder]",
                "keywords": ["Karma", "Revenge", "Sassy", "Justice"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 32,
                "title": "MY WORDS MATTER",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/my-words-matter.jpg",
                "genre": "Inspirational Pop",
                "genre2": "Anthem",
                "moodTone": "Empowered, Serious",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Inspirational anthem about the power of one's voice. Good for 'Empowerment' themes.",
                "snippetA": "[Placeholder]",
                "keywords": ["Voice", "Matter", "Empowerment", "SpeakUp"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 33,
                "title": "NOT THAT GIRL ANYMORE",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/not-that-girl-anymore.jpg",
                "genre": "Country-Pop",
                "genre2": "Pop",
                "moodTone": "Growth, Triumphant",
                "tempo": "Mid-Tempo",
                "Hit Potential": "High",
                "shortDescription": "Triumphant track about personal growth. Classic 'Country-Pop' crossover theme.",
                "snippetA": "[Placeholder]",
                "keywords": ["Growth", "Change", "NotThatGirl", "Strength"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 34,
                "title": "ONE SMALL WRONG",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/one-small-wrong.jpg",
                "genre": "Pop",
                "genre2": "Drama",
                "moodTone": "Tense, Regretful",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Dramatic track exploring the consequences of a single mistake.",
                "snippetA": "[Placeholder]",
                "keywords": ["Mistake", "Wrong", "Regret", "Drama"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 35,
                "title": "THE REAL DREAM TEAM",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/the-real-dream-team.jpg",
                "genre": "Pop",
                "genre2": "Anthem",
                "moodTone": "Supportive, Teamwork",
                "tempo": "Up-Tempo",
                "Hit Potential": "Medium-High (Sync)",
                "shortDescription": "Energetic anthem celebrating teamwork. Perfect for 'Sports Sync'.",
                "snippetA": "[Placeholder]",
                "keywords": ["Team", "DreamTeam", "Win", "Success"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 36,
                "title": "SHOT BY CUPIDS DART",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/shot-by-cupids-dart.jpg",
                "genre": "Pop",
                "genre2": "Bubblegum",
                "moodTone": "Fun, Romantic",
                "tempo": "Up-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Fun and upbeat Pop track about falling in love. Bubblegum pop feel.",
                "snippetA": "[Placeholder]",
                "keywords": ["Cupid", "Love", "Fun", "Dart"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 37,
                "title": "SHOWDOWN AT MY DOOR",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/showdown-at-my-door.jpg",
                "genre": "Country-Rock",
                "genre2": "Dramatic",
                "moodTone": "Tense, Dramatic",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Dramatic Country-Rock track about a confrontation. Strong narrative tension.",
                "snippetA": "[Placeholder]",
                "keywords": ["Showdown", "Conflict", "Confrontation", "Drama"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 38,
                "title": "SOLID SHIFTING GROUND",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/solid-shifting-ground.jpg",
                "genre": "Alt-Rock",
                "genre2": "Indie",
                "moodTone": "Uncertain, Unstable",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Low-Medium",
                "shortDescription": "Alternative track about the uncertainty of life. Explores instability and change.",
                "snippetA": "[Placeholder]",
                "keywords": ["Uncertainty", "Ground", "Shift", "Life"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 39,
                "title": "THE AFTERMATH",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/the-aftermath.jpg",
                "genre": "Ballad",
                "genre2": "Pop",
                "moodTone": "Sad, Reflective",
                "tempo": "Slow",
                "Hit Potential": "Medium",
                "shortDescription": "Emotional ballad dealing with the fallout of a breakup. Classic breakup theme.",
                "snippetA": "[Placeholder]",
                "keywords": ["Aftermath", "Breakup", "Sad", "Reflective"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 40,
                "title": "THE BACK OF ME",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/the-back-of-me.jpg",
                "genre": "Pop-Country",
                "genre2": "Empowerment",
                "moodTone": "Decisive, Strong",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium-High",
                "shortDescription": "Empowering track about walking away. Strong visual title.",
                "snippetA": "[Placeholder]",
                "keywords": ["WalkingAway", "Back", "Empowerment", "MovingOn"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 41,
                "title": "THOUGHT YOU SHOULD KNOW",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/thought-you-should-know.jpg",
                "genre": "Pop",
                "genre2": "Confessional",
                "moodTone": "Honest, Vulnerable",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Confessional Pop track delivering a message of truth. Good for intimate syncs.",
                "snippetA": "[Placeholder]",
                "keywords": ["Know", "Truth", "Confession", "Message"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 42,
                "title": "TOP SHELF QUEEN",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/top-shelf-queen.jpg",
                "genre": "Dance-Pop",
                "genre2": "Anthem",
                "moodTone": "Confident, High-Class",
                "tempo": "Up-Tempo",
                "Hit Potential": "High",
                "shortDescription": "High-class confidence anthem. Strong potential for fashion/lifestyle sync.",
                "snippetA": "[Placeholder]",
                "keywords": ["Queen", "TopShelf", "Confidence", "Luxury"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 43,
                "title": "WELCOME TO JUKES",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/welcome-to-jukes.jpg",
                "genre": "Country-Rock",
                "genre2": "Bar",
                "moodTone": "Fun, Rowdy",
                "tempo": "Up-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Rowdy Country-Rock track welcoming you to the party. Good for location-based sync.",
                "snippetA": "[Placeholder]",
                "keywords": ["Jukes", "Party", "Welcome", "Fun"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 44,
                "title": "YEAR IN THE REARVIEW",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/year-in-the-rearview.jpg",
                "genre": "Country-Pop",
                "genre2": "Reflection",
                "moodTone": "Reflective, Hopeful",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium (Seasonal)",
                "shortDescription": "Reflective Country-Pop track about looking back. Seasonal appeal.",
                "snippetA": "[Placeholder]",
                "keywords": ["Year", "Rearview", "Reflection", "NewYear"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 45,
                "title": "YOUR MASK",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/your-mask.jpg",
                "genre": "Pop-Rock",
                "genre2": "Drama",
                "moodTone": "Accusatory, Revealing",
                "tempo": "Mid-Tempo",
                "Hit Potential": "Medium",
                "shortDescription": "Dramatic track about unmasking a deceiver. Theme of deceit and revelation.",
                "snippetA": "[Placeholder]",
                "keywords": ["Mask", "Deceit", "Truth", "Lies"],
                "fullLyrics": "[Placeholder]"
            },
            {
                "id": 46,
                "title": "CRAVING THOSE CRUMBS",
                "artistWriter": "Kellie Larson",
                "year": 2025,
                "coverImageUrl": "/Images/covers/craving-those-crumbs.jpg",
                "genre": "Crunkpunk",
                "genre2": "Pop",
                "moodTone": "Angry, Confident, Defiant",
                "tempo": "Fast / Rhythmic",
                "Hit Potential": "High-Priority Target",
                "shortDescription": "Vulnerable yet defiant concept providing a strong hook. Perfect for Angry, Confident Crunkpunk.",
                "snippetA": "It's so obvious that you want to sleep with me",
                "keywords": ["Crumbs", "Toxic", "Ex", "Crunkpunk", "Self-Respect"],
                "fullLyrics": "[Verse 1]\nWe're not even dating anymore..."
            }
        ];

        // ==========================================
        // 2. THE ENGINE (Logic)
        // ==========================================
        
        const gridContainer = document.getElementById('song-grid');
        const searchInput = document.getElementById('searchInput');
        const genreFilter = document.getElementById('genreFilter');
        const moodFilter = document.getElementById('moodFilter');
        const tempoFilter = document.getElementById('tempoFilter');
        const resetBtn = document.getElementById('resetBtn');
        const resultCount = document.getElementById('resultCount');

        // 1. Populate Filters Dynamically
        function populateFilters() {
            const genres = new Set();
            const moods = new Set();
            const tempos = new Set();

            songData.forEach(song => {
                if(song.genre) song.genre.split(',').forEach(g => genres.add(g.trim()));
                if(song.genre2) song.genre2.split(',').forEach(g => genres.add(g.trim()));
                if(song.moodTone) song.moodTone.split(',').forEach(m => moods.add(m.trim()));
                if(song.tempo) tempos.add(song.tempo.trim());
            });

            Array.from(genres).sort().forEach(g => genreFilter.innerHTML += `<option value="${g}">${g}</option>`);
            Array.from(moods).sort().forEach(m => moodFilter.innerHTML += `<option value="${m}">${m}</option>`);
            Array.from(tempos).sort().forEach(t => tempoFilter.innerHTML += `<option value="${t}">${t}</option>`);
        }

        // 2. Render Cards
        function renderCards(songs) {
            gridContainer.innerHTML = ''; // Clear current
            
            if(songs.length === 0) {
                gridContainer.innerHTML = '<div class="col-span-full text-center text-gray-500 py-10">No songs found matching your criteria.</div>';
                resultCount.innerText = '0 results';
                return;
            }

            resultCount.innerText = `${songs.length} result${songs.length !== 1 ? 's' : ''}`;

            songs.forEach(song => {
                // Fallback for images/audio
                const imageSrc = song.coverImageUrl ? song.coverImageUrl : 'assets/covers/default-cover.jpg';
                // const snippet = song.snippetA !== '[Placeholder]' ? `"${song.snippetA}"` : song.shortDescription;
                const snippet = song.snippetA && song.snippetA !== '[Placeholder]' ? `"${song.snippetA}"` : song.shortDescription;

                const cardHTML = `
                <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 border border-gray-700 hover:border-[var(--burgundy)] flex flex-col h-full">
                    <div class="relative group">
                        <img src="${imageSrc}" alt="${song.title} cover" class="w-full aspect-square object-cover rounded-md mb-4 shadow-md">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 rounded-md flex items-center justify-center opacity-0 group-hover:opacity-100">
                             <span class="text-white text-3xl cursor-pointer" onclick="playAudio('${song.title}')">▶️</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-slate-100 leading-tight pr-2">${song.title}</h3>
                    </div>

                    <div class="text-xs text-gray-400 mb-3 space-y-1">
                        ${song.genre ? `<p><span class="text-gray-500">Genre:</span> ${song.genre}${song.genre2 ? ', '+song.genre2 : ''}</p>` : ''}
                        ${song.moodTone ? `<p><span class="text-gray-500">Mood:</span> ${song.moodTone}</p>` : ''}
                        ${song.tempo ? `<p><span class="text-gray-500">Tempo:</span> ${song.tempo}</p>` : ''}
                    </div>

                    <div class="mb-4 flex-grow">
                        <p class="text-sm italic text-gray-300 leading-relaxed border-l-2 border-[var(--burgundy)] pl-3">
                            ${snippet}
                        </p>
                    </div>

                    <div class="mt-auto pt-3 border-t border-gray-700 flex justify-between items-center text-xs text-gray-500">
                        <span class="text-amber-500">${song['Hit Potential'] ? `⭐ ${song['Hit Potential']}` : ''}</span>
                        <button class="text-gray-300 hover:text-white hover:underline transition flex items-center gap-1">
                            📄 View Lyric
                        </button>
                    </div>
                </div>
                `;
                gridContainer.innerHTML += cardHTML;
            });
        }

        // 3. Search & Filter Logic
        function filterSongs() {
            const term = searchInput.value.toLowerCase();
            const selectedGenre = genreFilter.value.toLowerCase();
            const selectedMood = moodFilter.value.toLowerCase();
            const selectedTempo = tempoFilter.value.toLowerCase();

            const filtered = songData.filter(song => {
                // Text Search
                const inTitle = song.title && song.title.toLowerCase().includes(term);
                const inDesc = song.shortDescription && song.shortDescription.toLowerCase().includes(term);
                const inKeywords = song.keywords && song.keywords.some(k => k.toLowerCase().includes(term));
                const matchesText = !term || inTitle || inDesc || inKeywords;

                // Dropdown Search
                const matchesGenre = !selectedGenre || (song.genre && song.genre.toLowerCase().includes(selectedGenre)) || (song.genre2 && song.genre2.toLowerCase().includes(selectedGenre));
                const matchesMood = !selectedMood || (song.moodTone && song.moodTone.toLowerCase().includes(selectedMood));
                const matchesTempo = !selectedTempo || (song.tempo && song.tempo.toLowerCase().includes(selectedTempo));

                return matchesText && matchesGenre && matchesMood && matchesTempo;
            });

            renderCards(filtered);
        }

        // 4. Audio Player Placeholder
        function playAudio(title) {
            alert("Playing demo for: " + title + "\n(Audio integration would go here)");
        }

        // Event Listeners
        searchInput.addEventListener('input', filterSongs);
        genreFilter.addEventListener('change', filterSongs);
        moodFilter.addEventListener('change', filterSongs);
        tempoFilter.addEventListener('change', filterSongs);
        
        resetBtn.addEventListener('click', () => {
            searchInput.value = '';
            genreFilter.value = '';
            moodFilter.value = '';
            tempoFilter.value = '';
            filterSongs();
        });

        // Initialize
        populateFilters();
        renderCards(songData);

    </script>
</body>
</html>
