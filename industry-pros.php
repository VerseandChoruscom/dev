<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault - Kellie Larson</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        :root { 
            --burgundy: #800020; 
            --sunset-orange: #FD5E53; /* Updated to Sunset Orange */
            --blue-gray: #64748b;     /* Blue-Gray for borders */
            --metallic-gold: #D4AF37; /* Metallic Gold for titles */
        }
        body { font-family: 'Inter', sans-serif; background-color: #0f172a; color: #f1f5f9; }
        .script-font { font-family: 'Dancing Script', cursive; }
        .content-container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; }
        
        /* Updated Card and Border Styles */
        .song-card { 
            border: 2px solid var(--blue-gray); /* Blue-Gray borders */
            background: #1e293b; 
            transition: all 0.3s ease; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            text-align: center; 
        }
        .song-card:hover { transform: translateY(-5px); border-color: var(--sunset-orange); }
        
        /* Metallic Gold Song Titles */
        .metallic-gold-title { 
            color: var(--metallic-gold); 
            font-weight: 800;
            transition: opacity 0.2s;
        }
        .metallic-gold-title:hover { opacity: 0.8; text-decoration: underline; }

        .play-btn { background: none; border: none; font-size: 1.5rem; cursor: pointer; transition: transform 0.2s; }
        .play-btn:hover { transform: scale(1.2); }
        
        .metadata-row { font-size: 0.85rem; color: #94a3b8; margin-bottom: 4px; }
        .theme-row { font-size: 0.85rem; color: #cbd5e1; font-weight: 600; margin-bottom: 12px; }
        
        /* Sunset Orange Buttons/Accents */
        .btn-sunset-orange { background-color: var(--sunset-orange); transition: opacity 0.2s; color: white; }
        .btn-sunset-orange:hover { opacity: 0.9; }
        
        .print-btn { display: flex; align-items: center; gap: 8px; font-weight: bold; color: #f1f5f9; background: none; border: none; cursor: pointer; }
        .print-btn:hover { color: var(--sunset-orange); }
        
        .cover-img { width: 100%; max-width: 200px; aspect-ratio: 1/1; border-radius: 8px; margin-bottom: 15px; object-fit: cover; border: 1px solid var(--blue-gray); }
        
        .thematic-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; }
        .thematic-card { background: #1e293b; padding: 1.5rem; border-radius: 0.75rem; border: 2px solid var(--blue-gray); cursor: pointer; transition: 0.3s; }
        .active-pillar { border-color: var(--sunset-orange); background: #334155; box-shadow: 0 0 15px rgba(253, 94, 83, 0.3); }
        
        /* Search Bar Highlighting */
        .focus-sunset:focus { border-color: var(--sunset-orange); outline: none; }
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
            <p class="text-gray-400 text-lg">Curated catalog for cinematic songwriter Kellie Larson</p>
        </div>

        <section class="mb-12">
            <h3 class="text-2xl font-bold text-amber-400 mb-6 border-b border-gray-700 pb-2">Narrative Frameworks</h3>
            <div id="thematic-container" class="thematic-grid"></div>
        </section>

        <div class="bg-gray-800 p-6 rounded-xl mb-10 border border-gray-700">
            <input type="text" id="search-input" placeholder="Search title, genre, or keywords..." 
                   class="w-full p-4 bg-gray-900 border border-gray-700 rounded-lg text-white mb-4 focus-sunset">
            <div class="flex justify-between items-center">
                <p id="filter-status" class="text-sm text-gray-400">Showing all songs</p>
                <button onclick="resetFilters()" class="text-sm font-bold" style="color: var(--sunset-orange);">Clear All Filters</button>
            </div>
        </div>

        <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
    </main>

    <div id="lyric-modal" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-gray-800 rounded-xl max-w-3xl w-full max-h-[90vh] overflow-hidden flex flex-col border border-gray-600">
            <div class="p-6 border-b border-gray-700 flex justify-between items-center bg-[#800020]">
                <h2 id="modal-title" class="text-2xl font-bold text-white"></h2>
                <button onclick="closeModal()" class="text-white hover:text-amber-400 text-3xl">&times;</button>
            </div>
            <div class="p-8 overflow-y-auto bg-gray-900 text-white">
                <div class="mb-6">
                    <p class="font-bold mb-2" style="color: var(--sunset-orange);">Audio Preview</p>
                    <audio id="modal-audio" controls class="w-full"></audio>
                </div>
                <hr class="border-gray-700 mb-6">
                <div id="modal-lyrics" class="whitespace-pre-wrap leading-relaxed font-serif text-lg"></div>
            </div>
            <div class="p-4 border-t border-gray-700 flex justify-end bg-gray-800">
                <button onclick="closeModal()" class="px-8 py-2 bg-gray-600 text-white rounded font-bold">Close Vault</button>
            </div>
        </div>
    </div>

    <script>
        // Data populated from lyrics.json
        const ALL_SONGS = [
            // Mapping titles to songbay links and thematic snippets
            { id: 1, title: "AUTHOR OF A LIE", songbay: "https://songbay.co/view-music/235611415/", slug: "author-of-a-lie", pillar: "Social Commentary", genre: "Pop, Hip-Hop", mood: "Anthemic, Confident", tempo: "Mid Tempo", theme: "Deceit, Lies, Gaslighting", snippet: "\"You're the author of a lie, a master of deceit. And I'm tired of this story on repeat.\"", img: "/assets/covers/author-of-a-lie-cover-art.jpg", fullLyrics: "" },
            { id: 2, title: "BIG HARD NO", songbay: "https://songbay.co/view-music/235609978/", slug: "big-hard-no", pillar: "The Empowerment Arc", genre: "Rock, Alternative", mood: "Determined", tempo: "Fast", theme: "Setting Boundaries, Rejection", snippet: "Triumphant declaration of setting boundaries and moving on with self-worth.", img: "/assets/covers/big-hard-no-cover-art.jpg", fullLyrics: "" },
            // ... (rest of the songs mapped similarly)
        ];

        function renderCatalog(songs) {
            const grid = document.getElementById('catalog-grid');
            grid.innerHTML = songs.map(s => `
                <div class="song-card p-6 rounded-lg shadow-xl">
                    <img src="${s.img}" alt="${s.title}" class="cover-img">
                    <div class="song-title-row">
                        <a href="${s.songbay}" target="_blank" class="metallic-gold-title text-xl uppercase">
                            ${s.title}
                        </a>
                        <button onclick="viewLyrics(${s.id})" class="play-btn">▶️</button>
                    </div>
                    <p class="metadata-row">Genre: ${s.genre} | Mood: ${s.mood} | Tempo: ${s.tempo}</p>
                    <p class="theme-row">Theme: ${s.theme}</p>
                    <p class="instruction-text" style="color: var(--blue-gray);">Click the play button to listen</p>
                    <p class="snippet-text italic px-2 my-4 text-gray-200">${s.snippet}</p>
                    <button onclick="printLyrics(${s.id})" class="print-btn">🖨️ Print Lyric</button>
                </div>
            `).join('');
        }

        // Standard functionality for filtering and modals
        function viewLyrics(id) {
            const song = ALL_SONGS.find(s => s.id === id);
            document.getElementById('modal-title').innerText = song.title;
            document.getElementById('modal-lyrics').innerText = song.fullLyrics;
            document.getElementById('modal-audio').src = `/assets/music/${song.slug}-audio.mp3`;
            document.getElementById('lyric-modal').classList.replace('hidden', 'flex');
        }

        // Initialize display
        renderCatalog(ALL_SONGS);
    </script>
</body>
</html>
