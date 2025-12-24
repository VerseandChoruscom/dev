<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault - Kellie Larson</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        :root { --burgundy: #800020; --orange-active: #f97316; }
        body { font-family: 'Inter', sans-serif; background-color: #0f172a; color: #f1f5f9; }
        .script-font { font-family: 'Dancing Script', cursive; }
        .content-container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; }
        .song-card { border: 1px solid rgba(255, 255, 255, 0.1); background: #1e293b; transition: all 0.3s ease; }
        .song-card:hover { transform: translateY(-5px); border-color: var(--orange-active); }
        .btn-sunset-orange { background-color: var(--orange-active); transition: background 0.2s; }
        .btn-sunset-orange:hover { background-color: #ea580c; }
        .thematic-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; }
        .thematic-card { background: #1e293b; padding: 1.5rem; border-radius: 0.75rem; border: 2px solid transparent; cursor: pointer; transition: 0.3s; }
        .thematic-card:hover { border-color: var(--orange-active); background: #334155; }
        .active-pillar { border-color: var(--orange-active); background: #334155; box-shadow: 0 0 15px rgba(249, 115, 22, 0.3); }
    </style>
</head>
<body>

    <header class="bg-[#800020] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-4 flex justify-between items-center">
            <h1 class="script-font text-3xl text-amber-400">Verse and Chorus</h1>
            <nav class="hidden md:block">
                <ul class="flex space-x-6 text-xs font-bold tracking-widest">
                    <li><a href="#" class="hover:text-amber-400">HOME</a></li>
                    <li><a href="#" class="hover:text-amber-400">BIO</a></li>
                    <li><a href="#" class="hover:text-amber-400">MUSIC</a></li>
                    <li><a href="#" class="hover:text-amber-400">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="content-container py-10">
        <div class="mb-10">
            <h2 class="text-4xl font-extrabold tracking-tighter text-white">INDUSTRY PRO VAULT</h2>
            <p class="text-gray-400 text-lg">Curated catalog categorized by Narrative & Social Frameworks</p>
        </div>

        <section class="mb-12">
            <h3 class="text-2xl font-bold text-amber-400 mb-6 border-b border-gray-700 pb-2">Narrative Frameworks</h3>
            <div id="thematic-container" class="thematic-grid">
                </div>
        </section>

        <div class="bg-gray-800 p-6 rounded-xl mb-10 border border-gray-700">
            <input type="text" id="search-input" placeholder="Search title or keywords..." 
                   class="w-full p-4 bg-gray-900 border border-gray-700 rounded-lg text-white mb-4 focus:outline-none focus:border-orange-500">
            <div class="flex justify-between items-center">
                <p id="filter-status" class="text-sm text-gray-400">Showing all songs</p>
                <button onclick="resetFilters()" class="text-sm text-orange-500 hover:underline">Clear All Filters</button>
            </div>
        </div>

        <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            </div>
    </main>

    <div id="lyric-modal" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-gray-800 rounded-xl max-w-3xl w-full max-h-[90vh] overflow-hidden flex flex-col border border-gray-600">
            <div class="p-6 border-b border-gray-700 flex justify-between items-center bg-[#800020]">
                <h2 id="modal-title" class="text-2xl font-bold text-white">Song Title</h2>
                <button onclick="closeModal()" class="text-white hover:text-amber-400 text-3xl">&times;</button>
            </div>
            <div class="p-8 overflow-y-auto bg-gray-900">
                <div class="mb-6">
                    <p class="text-amber-400 font-bold mb-2">Audio Preview</p>
                    <audio id="modal-audio" controls class="w-full"></audio>
                </div>
                <hr class="border-gray-700 mb-6">
                <div id="modal-lyrics" class="whitespace-pre-wrap text-gray-200 leading-relaxed font-serif text-lg"></div>
            </div>
            <div class="p-4 border-t border-gray-700 flex justify-end bg-gray-800">
                <button onclick="closeModal()" class="px-8 py-2 bg-gray-600 text-white rounded font-bold hover:bg-gray-500">Close Vault</button>
            </div>
        </div>
    </div>

    <script>
        // Full Dataset Mapped to Pillars
        const ALL_SONGS = [
            // 1. Social Commentary
            { id: 6, title: "CHILDREN OF WAR", pillar: "Social Commentary", fullLyrics: `[Verse 1]\nThe laughter is now replaced by sad sounds you hear...`, audioUrl: "/assets/music/children-of-war-audio.mp3", mood: "Patriotic, Haunting" },
            { id: 38, title: "WELCOME TO JUKE", pillar: "Social Commentary", fullLyrics: `(Verse 1)\nShe belts out a tune, a voice both harsh and sweet...`, audioUrl: "/assets/music/welcome-to-juke-audio.mp3", mood: "Dark, Haunted" },
            { id: 31, title: "SOLID SHIFTING GROUND", pillar: "Social Commentary", fullLyrics: `(Verse 1)\nA heart can be heavy, weighted down by dreams...`, audioUrl: "/assets/music/solid-shifting-ground-audio.mp3", mood: "Inspirational" },
            { id: 1, title: "AUTHOR OF A LIE", pillar: "Social Commentary", fullLyrics: `[Verse 1]\nYou tell a story, i pick it apart...`, audioUrl: "/assets/music/author-of-a-lie-audio.mp3", mood: "Confrontational" },
            
            // 2. Empowerment Arc
            { id: 39, title: "WILDFLOWER", pillar: "The Empowerment Arc", fullLyrics: `Oh, she's Wildflower, dancing in the wind...`, audioUrl: "/assets/music/wildflower-audio.mp3", mood: "Confident, Optimistic" },
            { id: 12, title: "FURY (I'M THE MONSTER)", pillar: "The Empowerment Arc", fullLyrics: `[Verse 1]\nYour fists, a never-ending show...`, audioUrl: "/assets/music/fury-i-m-the-monster-audio.mp3", mood: "Angry, Defiant" },
            { id: 2, title: "BIG HARD NO", pillar: "The Empowerment Arc", fullLyrics: `Verse 1:\nSo sad, heard she had enough...`, audioUrl: "/assets/music/big-hard-no-audio.mp3", mood: "Triumphant" },
            { id: 36, title: "THOUGHT YOU SHOULD KNOW", pillar: "The Empowerment Arc", fullLyrics: `[Verse 1]\nSun in my eyes, new day takes hold...`, audioUrl: "/assets/music/thought-you-should-know-audio.mp3", mood: "Celebratory" },

            // 3. Narrative of Disenchantment
            { id: 30, title: "SICK ONE (S1C)", pillar: "Narrative of Disenchantment", fullLyrics: `Our love is on a sick one...`, audioUrl: "/assets/music/sick-one-s1c-audio.mp3", mood: "Toxic, Bitter" },
            { id: 35, title: "THE SHOW IS THROUGH", pillar: "Narrative of Disenchantment", fullLyrics: `You're an actor, playing a part...`, audioUrl: "/assets/music/the-show-is-through-audio.mp3", mood: "Theatrical, Final" },
            { id: 33, title: "THE AFTERMATH", pillar: "Narrative of Disenchantment", fullLyrics: `(Verse 1)\nCan't breathe in this quiet...`, audioUrl: "/assets/music/the-aftermath-audio.mp3", mood: "Anxious, Haunting" },
            { id: 14, title: "HEARTBREAK AND TROUBLE", pillar: "Narrative of Disenchantment", fullLyrics: `You pop in and out like Hubba Bubba...`, audioUrl: "/assets/music/heartbreak-and-trouble-audio.mp3", mood: "Toxic, Fleeting" },

            // 4. Mutual Value Proposition
            { id: 27, title: "THE REAL DREAM TEAM", pillar: "Mutual Value Proposition", fullLyrics: `(Verse 1)\nYou love me and I love you too...`, audioUrl: "/assets/music/the-real-dream-team-audio.mp3", mood: "Loyalty, Positive" },
            { id: 26, title: "ONE SMALL WRONG", pillar: "Mutual Value Proposition", fullLyrics: `[Female Vocal]\nSunrise through the blinds...`, audioUrl: "/assets/music/one-small-wrong-audio.mp3", mood: "Tension, Duet" },
            { id: 32, title: "STOOD BY MY SIDE", pillar: "Mutual Value Proposition", fullLyrics: `(Verse 1)\nShadows falling, cold and deep...`, audioUrl: "/assets/music/stood-by-my-side-audio.mp3", mood: "Faith, Healing" },
            { id: 5, title: "CEO NOT A BABYSITTING TREE", pillar: "Mutual Value Proposition", fullLyrics: `(Verse 1)\nI don't want no boys...`, audioUrl: "/assets/music/ceo-not-a-babysitting-tree-audio.mp3", mood: "Bold, Sassy" },

            // 5. Loss of Market Share
            { id: 17, title: "I KNOW YOUR DAMN PIN CODE", pillar: "Loss of Market Share", fullLyrics: `[Heavy, distorted guitar intro]\nThink you're clever?...`, audioUrl: "/assets/music/i-know-your-damn-pin-code-audio.mp3", mood: "Vengeful, Reclaiming" },
            { id: 15, title: "HIT THE ROAD", pillar: "Loss of Market Share", fullLyrics: `(Verse 1)\nAll those nights you laid in my bed...`, audioUrl: "/assets/music/hit-the-road-audio.mp3", mood: "Confident, Final" },
            { id: 19, title: "JUST TOO MUCH", pillar: "Loss of Market Share", fullLyrics: `The ties that bound us, they've come undone...`, audioUrl: "/assets/music/its-just-too-much-audio.mp3", mood: "Distrust, Loss" },
            { id: 4, title: "BROKEN RECORD", pillar: "Loss of Market Share", fullLyrics: `Yeah, a goddamn mess, that's the headline news...`, audioUrl: "/assets/music/broken-record-audio.mp3", mood: "Alienated, Bitter" },

            // 6. The Iterative Protagonist
            { id: 10, title: "ETCHED IN EVERY SPACE", pillar: "The Iterative Protagonist", fullLyrics: `[Verse 1]\nWhere did you go\nWhy did you leave me here...`, audioUrl: "/assets/music/etched-in-every-space-audio.mp3", mood: "Mournful, Loop" },
            { id: 18, title: "IN MY DREAMS (WHEN I WAKE)", pillar: "The Iterative Protagonist", fullLyrics: `(Verse 1)\nIn my dreams, you are here...`, audioUrl: "/assets/music/in-my-dreams-when-i-wake-audio.mp3", mood: "Dreamy, Recurring" },
            { id: 9, title: "EPHEMERAL MOMENT", pillar: "The Iterative Protagonist", fullLyrics: `(Verse 1)\nEphemeral moment, I should've stretched it out...`, audioUrl: "/assets/music/ephemeral-moment-audio.mp3", mood: "Waiting, Heartbeat" },
            { id: 20, title: "JUST A LITTLE LONELY", pillar: "The Iterative Protagonist", fullLyrics: `(Verse 1)\nStreetlights paint a lonely picture on my wall...`, audioUrl: "/assets/music/just-a-little-lonely-audio.mp3", mood: "Reflection, Growth" }
        ];

        const PILLAR_CONFIG = [
            { id: "Social Commentary", icon: "🌍", label: "Social Commentary", sub: "Critiques & World Building" },
            { id: "The Empowerment Arc", icon: "🔥", label: "The Empowerment Arc", sub: "Resilience & Liberation" },
            { id: "Narrative of Disenchantment", icon: "💔", label: "Disenchantment", sub: "Bitter Truths & Realities" },
            { id: "Mutual Value Proposition", icon: "⚖️", label: "Value Proposition", sub: "Loyalty & Exchange" },
            { id: "Loss of Market Share", icon: "📉", label: "Loss of Market Share", sub: "Reclaiming Assets & Control" },
            { id: "The Iterative Protagonist", icon: "🔄", label: "Iterative Protagonist", sub: "Cycles & Story Revision" }
        ];

        let activePillar = null;

        function renderPillars() {
            const container = document.getElementById('thematic-container');
            container.innerHTML = PILLAR_CONFIG.map(p => `
                <div class="thematic-card ${activePillar === p.id ? 'active-pillar' : ''}" onclick="setFilter('${p.id}')">
                    <span class="text-3xl mb-2 block">${p.icon}</span>
                    <h4 class="text-white font-bold text-lg">${p.label}</h4>
                    <p class="text-xs text-gray-400 mt-1">${p.sub}</p>
                </div>
            `).join('');
        }

        function setFilter(pillarId) {
            activePillar = (activePillar === pillarId) ? null : pillarId;
            renderPillars();
            applyFilters();
        }

        function applyFilters() {
            const searchText = document.getElementById('search-input').value.toLowerCase();
            const filtered = ALL_SONGS.filter(s => {
                const matchesPillar = !activePillar || s.pillar === activePillar;
                const matchesSearch = s.title.toLowerCase().includes(searchText) || s.mood.toLowerCase().includes(searchText);
                return matchesPillar && matchesSearch;
            });

            document.getElementById('filter-status').innerText = activePillar ? `Category: ${activePillar}` : "Showing all songs";
            renderCatalog(filtered);
        }

        function renderCatalog(songs) {
            const grid = document.getElementById('catalog-grid');
            grid.innerHTML = songs.map(s => `
                <div class="song-card p-6 rounded-lg">
                    <p class="text-[10px] text-orange-500 font-bold uppercase tracking-widest mb-2">${s.pillar}</p>
                    <h3 class="text-xl font-bold text-white mb-2">${s.title}</h3>
                    <p class="text-xs text-gray-400 italic mb-6">Mood: ${s.mood}</p>
                    <div class="flex gap-2">
                        <button onclick="viewLyrics(${s.id})" class="flex-1 py-2 btn-sunset-orange text-white text-sm font-bold rounded">Read Now</button>
                        <button onclick="printLyrics(${s.id})" class="flex-1 py-2 bg-gray-700 text-white text-sm font-bold rounded">Print</button>
                    </div>
                </div>
            `).join('');
        }

        function viewLyrics(id) {
            const song = ALL_SONGS.find(s => s.id === id);
            document.getElementById('modal-title').innerText = song.title;
            document.getElementById('modal-lyrics').innerText = song.fullLyrics; // Full text injection
            document.getElementById('modal-audio').src = song.audioUrl;
            document.getElementById('lyric-modal').classList.remove('hidden');
            document.getElementById('lyric-modal').classList.add('flex');
        }

        function printLyrics(id) {
            const song = ALL_SONGS.find(s => s.id === id);
            const printWin = window.open('', '', 'width=800,height=800');
            printWin.document.write(`
                <html><body style="font-family:serif; padding:50px; line-height:1.6;">
                    <h1 style="color:#800020; text-align:center;">${song.title}</h1>
                    <p style="text-align:center; font-style:italic;">By Kellie Larson | Framework: ${song.pillar}</p>
                    <hr style="margin:30px 0;">
                    <div style="white-space:pre-wrap; font-size:18px;">${song.fullLyrics}</div>
                </body></html>
            `);
            printWin.document.close();
            setTimeout(() => { printWin.print(); }, 500);
        }

        function closeModal() {
            document.getElementById('lyric-modal').classList.add('hidden');
            document.getElementById('lyric-modal').classList.remove('flex');
            document.getElementById('modal-audio').pause();
        }

        function resetFilters() {
            activePillar = null;
            document.getElementById('search-input').value = "";
            renderPillars();
            applyFilters();
        }

        // Initialize Page
        document.getElementById('search-input').addEventListener('input', applyFilters);
        renderPillars();
        renderCatalog(ALL_SONGS);
    </script>
</body>
</html>
