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
            --sunset-orange: #FD5E53; 
            --blue-gray: #64748b;     
            --metallic-gold: #D4AF37; 
        }
        body { font-family: 'Inter', sans-serif; background-color: #0f172a; color: #f1f5f9; }
        .script-font { font-family: 'Dancing Script', cursive; }
        .content-container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; }
        
        /* Legal Box Styles */
        .legal-box { background: rgba(255, 255, 255, 0.05); border-left: 4px solid var(--burgundy); border-radius: 0.5rem; }

        /* Song Card Styles */
        .song-card { 
            border: 2px solid var(--blue-gray); 
            background: #1e293b; 
            transition: all 0.3s ease; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            text-align: center; 
        }
        .song-card:hover { transform: translateY(-5px); border-color: var(--sunset-orange); }
        
        .metallic-gold-title { 
            color: var(--metallic-gold); 
            font-weight: 800;
            transition: opacity 0.2s;
            text-transform: uppercase;
        }
        .metallic-gold-title:hover { opacity: 0.8; text-decoration: underline; }

        .btn-sunset-orange { background-color: var(--sunset-orange); transition: opacity 0.2s; color: white; }
        .btn-sunset-orange:hover { opacity: 0.9; }

        .cover-img { width: 100%; max-width: 200px; aspect-ratio: 1/1; border-radius: 8px; margin-bottom: 15px; object-fit: cover; border: 1px solid var(--blue-gray); }
        
        /* Thematic Pillar Cards (6 Cards) */
        .thematic-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.5rem; }
        .thematic-card { 
            background-size: cover; background-position: center; aspect-ratio: 1 / 1.4;
            display: flex; align-items: flex-end; padding: 1rem; color: white;
            border: 2px solid var(--blue-gray); border-radius: 0.75rem; cursor: pointer; transition: 0.3s;
            position: relative; overflow: hidden;
        }
        .thematic-card::after {
            content: ''; position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 1;
        }
        .thematic-card span { z-index: 2; width: 100%; text-align: center; }
        .thematic-card:hover { border-color: var(--sunset-orange); transform: translateY(-2px); }
        .active-filter { border-color: var(--sunset-orange); box-shadow: 0 0 15px rgba(253, 94, 83, 0.5); }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-4 flex justify-between items-center">
            <h1 class="script-font text-3xl text-amber-400">Verse and Chorus</h1>
            <nav class="hidden md:block">
                <ul class="flex space-x-6 text-xs font-bold tracking-widest uppercase">
                    <li><a href="/index.html" class="hover:text-amber-400">Home</a></li>
                    <li><a href="/lyrics.html" class="hover:text-amber-400">Music</a></li>
                    <li><a href="/contact.html" class="hover:text-amber-400">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="content-container py-10">
        <div class="mb-10 text-center md:text-left">
            <h2 class="text-5xl font-extrabold tracking-widest text-white uppercase italic">Industry Pro Vault</h2>
            <p class="text-gray-400 text-xl mt-2">Curated for Cinematic Songwriter Kellie Larson</p>
        </div>

        <div class="bg-[var(--burgundy)] p-10 mb-12 rounded-xl shadow-2xl text-center border-4 border-gray-400">
            <h3 class="text-3xl font-bold text-white mb-4">Welcome to the Vault</h3>
            <p class="text-gray-100 max-w-4xl mx-auto text-lg leading-relaxed">
                Fully licensed, pre-cleared assets ready for immediate commercial development. Our system ensures verified human-authored lyrics and royalty-free demo compositions for a streamlined licensing path.
            </p>
            <a href="/legal.html" class="inline-block mt-8 bg-white text-[var(--burgundy)] font-bold py-3 px-10 rounded-full hover:bg-gray-200 transition duration-300 uppercase tracking-widest text-sm">
                Explore Licensing Options
            </a>
        </div>

        <div class="legal-box p-8 mb-12 bg-slate-900/50">
            <h4 class="text-2xl font-bold text-white mb-6 underline decoration-amber-400 underline-offset-8 uppercase tracking-wide">Rights & Licensing Assurance</h4>
            <div class="grid md:grid-cols-2 gap-6 text-gray-300">
                <ul class="space-y-4">
                    <li><strong class="text-amber-400">✅ Royalty-Free Composition:</strong> Lifetime Royalty-Free Commercial License on all demo instrumentation.</li>
                    <li><strong class="text-amber-400">✅ Human-Authored Lyrics:</strong> 100% original lyrics registered via Songbay for verifiable IP.</li>
                </ul>
                <ul class="space-y-4">
                    <li><strong class="text-amber-400">✅ Zero Future AI Royalties:</strong> No recurring master fees or royalties owed to AI platforms.</li>
                    <li><strong class="text-amber-400">✅ Immediate Sync Clearance:</strong> All material pre-cleared for commercial use and sync.</li>
                </ul>
            </div>
        </div>

        <section class="mb-12">
            <h3 class="text-2xl font-bold text-amber-400 mb-8 border-b-2 border-slate-700 pb-2 uppercase tracking-widest">Narrative Frameworks</h3>
            <div id="thematic-container" class="thematic-grid">
                </div>
        </section>

        <div class="bg-slate-900 p-8 rounded-xl mb-12 border-2 border-var(--blue-gray) shadow-inner">
            <input type="text" id="search-input" placeholder="SEARCH VAULT: Title, Mood, Theme, or Keyword..." 
                   class="w-full p-5 bg-black/50 border-2 border-slate-700 rounded-lg text-white mb-6 focus:outline-none focus:border-[var(--sunset-orange)] transition-all uppercase tracking-widest">
            <div class="flex justify-between items-center">
                <p id="filter-status" class="text-sm font-bold text-slate-400 uppercase tracking-widest">Displaying all assets</p>
                <button onclick="resetFilters()" class="text-sm font-black uppercase tracking-widest hover:underline" style="color: var(--sunset-orange);">Reset All Filters</button>
            </div>
        </div>

        <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            </div>
    </main>

    <script>
        // Data populated from your catalog andFramework Pillar logic
        const ALL_SONGS = [
            { 
                id: 1, 
                title: "AUTHOR OF A LIE", 
                songbay: "https://songbay.co/view-music/235611415/", 
                pillar: "Social Commentary", 
                genre: "Pop, Hip-Hop", 
                mood: "Anthemic, Confident", 
                tempo: "Mid Tempo", 
                theme: "Deceit, Lies, Gaslighting", 
                snippet: "You're the author of a lie, a master of deceit. And I'm tired of this story on repeat.", 
                img: "/assets/covers/author-of-a-lie-cover-art.jpg",
                lyrics: `[Verse 1]\nYou tell a story, i pick it apart...`
            },
            { 
                id: 12, 
                title: "FURY (I'M THE MONSTER)", 
                songbay: "https://songbay.co/view-music/235612789/", 
                pillar: "The Empowerment Arc", 
                genre: "Metal, Rock", 
                mood: "Heavy, Dramatic", 
                tempo: "Fast", 
                theme: "Rage, Transformation", 
                snippet: "A visceral journey through the rage of betrayal and the transformation into strength.", 
                img: "/assets/covers/fury-i-m-the-monster-cover-art.jpg",
                lyrics: `[Verse 1]\nYour fists, a never-ending show...`
            },
            { 
                id: 30, 
                title: "SICK ONE (S1C)", 
                songbay: "https://songbay.co/view-music/235608791/", 
                pillar: "Narrative of Disenchantment", 
                genre: "Rock, Alternative", 
                mood: "Bitter, Cool", 
                tempo: "Fast", 
                theme: "Toxic Love, Self-Destructive", 
                snippet: "A raw, brutal confessional exploring a chaotic and self-destructive toxic love.", 
                img: "/assets/covers/sick-one-s1c-cover-art.jpg",
                lyrics: `Our love is on a sick one...`
            }
            // Additional songs populated based on your JSON...
        ];

        const PILLARS = [
            { id: "Social Commentary", label: "Social Commentary", img: "/assets/covers/social-world-lyrics-photo.jpg" },
            { id: "The Empowerment Arc", label: "Empowerment Arc", img: "/assets/covers/empowerment-arc-lyrics-photo.jpg" },
            { id: "Narrative of Disenchantment", label: "Disenchantment", img: "/assets/covers/disenchantment-lyrics-photo.jpg" },
            { id: "Mutual Value Proposition", label: "Value Proposition", img: "/assets/covers/mutual-value-lyrics-photo.jpg" },
            { id: "Loss of Market Share", label: "Loss of Market Share", img: "/assets/covers/loss-of-market-share-lyrics-photo.jpg" },
            { id: "The Iterative Protagonist", label: "Iterative Protagonist", img: "/assets/covers/iterative-photo.jpg" }
        ];

        let activeFilter = null;

        function renderPillars() {
            const container = document.getElementById('thematic-container');
            container.innerHTML = PILLARS.map(p => `
                <div class="thematic-card ${activeFilter === p.id ? 'active-filter' : ''}" 
                     style="background-image: url('${p.img}')"
                     onclick="setFilter('${p.id}')">
                    <span class="font-black text-xs uppercase tracking-widest text-white drop-shadow-lg">${p.label}</span>
                </div>
            `).join('');
        }

        function renderCatalog(songs) {
            const grid = document.getElementById('catalog-grid');
            grid.innerHTML = songs.map(s => `
                <div class="song-card p-8 rounded-xl shadow-2xl">
                    <img src="${s.img}" class="cover-img">
                    <div class="mb-4">
                        <a href="${s.songbay}" target="_blank" class="metallic-gold-title text-2xl tracking-tighter hover:underline">${s.title}</a>
                        <button onclick="viewLyrics(${s.id})" class="text-2xl ml-3 hover:scale-125 transition-transform">▶️</button>
                    </div>
                    <p class="metadata-row uppercase text-[10px] tracking-widest font-bold">Genre: ${s.genre} | Mood: ${s.mood}</p>
                    <p class="metadata-row uppercase text-[10px] tracking-widest font-bold">Tempo: ${s.tempo}</p>
                    <p class="theme-row mt-4 text-slate-300">Theme: ${s.theme}</p>
                    <p class="text-[10px] text-slate-500 my-2 font-bold uppercase tracking-widest">Click play to listen</p>
                    <p class="text-sm text-slate-200 italic my-6 px-4">"${s.snippet}"</p>
                    
                    <div class="grid grid-cols-2 gap-3 w-full">
                        <button onclick="viewLyrics(${s.id})" class="py-3 btn-sunset-orange font-black text-xs uppercase tracking-widest rounded-lg">Read Now</button>
                        <button onclick="printLyrics(${s.id})" class="py-3 bg-slate-700 hover:bg-slate-600 font-black text-xs uppercase tracking-widest rounded-lg">Print</button>
                    </div>
                </div>
            `).join('');
        }

        function setFilter(id) {
            activeFilter = (activeFilter === id) ? null : id;
            renderPillars();
            applyFilter();
        }

        function applyFilter() {
            const query = document.getElementById('search-input').value.toLowerCase();
            const filtered = ALL_SONGS.filter(s => {
                const matchesPillar = !activeFilter || s.pillar === activeFilter;
                const matchesSearch = s.title.toLowerCase().includes(query) || s.theme.toLowerCase().includes(query);
                return matchesPillar && matchesSearch;
            });
            document.getElementById('filter-status').innerText = activeFilter ? `Category: ${activeFilter}` : "Displaying all assets";
            renderCatalog(filtered);
        }

        function viewLyrics(id) {
            const song = ALL_SONGS.find(s => s.id === id);
            document.getElementById('modal-title').innerText = song.title;
            document.getElementById('modal-lyrics').innerText = song.lyrics;
            document.getElementById('modal-audio').src = `/assets/music/${song.title.toLowerCase().replace(/ /g, '-')}-audio.mp3`;
            document.getElementById('lyric-modal').classList.replace('hidden', 'flex');
        }

        function printLyrics(id) {
            const song = ALL_SONGS.find(s => s.id === id);
            const win = window.open('', '_blank');
            win.document.write(`<html><body style="font-family:serif;padding:50px;line-height:1.6;">
                <h1 style="color:#800020;text-align:center;">${song.title}</h1><hr>
                <p><strong>Genre:</strong> ${song.genre} | <strong>Theme:</strong> ${song.theme}</p>
                <pre style="white-space:pre-wrap;font-size:18px;">${song.lyrics}</pre>
                </body></html>`);
            win.document.close();
            win.print();
        }

        function resetFilters() {
            activeFilter = null;
            document.getElementById('search-input').value = '';
            renderPillars();
            applyFilter();
        }

        function closeModal() { document.getElementById('lyric-modal').classList.replace('flex', 'hidden'); }
        document.getElementById('search-input').addEventListener('input', applyFilter);
        
        // Initial Render
        renderPillars();
        renderCatalog(ALL_SONGS);
    </script>

    <div id="lyric-modal" class="fixed inset-0 bg-black/98 z-50 hidden items-center justify-center p-4 backdrop-blur-md">
        <div class="bg-slate-900 rounded-2xl max-w-4xl w-full max-h-[95vh] overflow-hidden flex flex-col border-2 border-slate-700">
            <div class="p-6 border-b border-slate-800 flex justify-between items-center bg-[var(--burgundy)]">
                <h2 id="modal-title" class="text-3xl font-black text-white italic uppercase tracking-widest"></h2>
                <button onclick="closeModal()" class="text-white hover:text-amber-400 text-4xl">&times;</button>
            </div>
            <div class="p-10 overflow-y-auto text-slate-100">
                <div class="mb-10 bg-black/50 p-6 rounded-xl border border-slate-800">
                    <p class="text-amber-400 font-black uppercase tracking-widest text-xs mb-3">Audio Assets Preview</p>
                    <audio id="modal-audio" controls class="w-full"></audio>
                </div>
                <div id="modal-lyrics" class="whitespace-pre-wrap font-serif text-xl leading-relaxed first-letter:text-5xl first-letter:font-bold first-letter:text-amber-400"></div>
            </div>
            <div class="p-6 border-t border-slate-800 flex justify-end">
                <button onclick="closeModal()" class="px-10 py-3 bg-slate-800 text-white font-black uppercase tracking-widest text-xs rounded-xl hover:bg-slate-700 transition-all">Exit Vault</button>
            </div>
        </div>
    </div>

</body>
</html>
