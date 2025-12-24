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

        .cover-img { width: 100%; max-width: 180px; aspect-ratio: 1/1; border-radius: 8px; margin-bottom: 12px; object-fit: cover; border: 1px solid var(--blue-gray); }
        
        /* 6 Cards - 2 per row, 3 rows high */
        .thematic-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 1rem; 
            max-width: 600px; 
            margin: 0 auto;
        }
        .thematic-card { 
            background-size: cover; background-position: center; height: 120px;
            display: flex; align-items: flex-end; padding: 0.75rem; color: white;
            border: 2px solid var(--blue-gray); border-radius: 0.5rem; cursor: pointer; transition: 0.3s;
            position: relative; overflow: hidden;
        }
        .thematic-card::after { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1; }
        .thematic-card span { z-index: 2; width: 100%; text-align: center; font-size: 0.75rem; font-weight: 800; }

        /* 3 Rectangular Categories - Small/Thin */
        .rectangular-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2rem; }
        .rectangular-card { 
            background: #334155; padding: 0.5rem; border: 1px solid var(--blue-gray); 
            text-align: center; border-radius: 4px; font-size: 0.7rem; font-weight: bold; uppercase;
            cursor: pointer; transition: 0.2s;
        }
        .rectangular-card:hover { border-color: var(--sunset-orange); }

        @media print {
            .page-break { page-break-before: always; }
        }
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
        <div class="mb-10 text-center">
            <h2 class="text-4xl font-extrabold tracking-widest text-white uppercase italic">Industry Pro Vault</h2>
            <p class="text-gray-400 text-lg mt-2">Professional Music Licensing Catalog — Kellie Larson</p>
        </div>

        <div class="legal-box p-6 mb-12">
            <h4 class="text-xl font-bold text-white mb-4 uppercase tracking-wide">Rights & Licensing Assurance</h4>
            <p class="text-sm text-gray-300 mb-4">Verification of ownership for A&R and Sync placement:</p>
            <div class="grid md:grid-cols-2 gap-4 text-xs text-gray-300">
                <ul class="space-y-2">
                    <li><strong class="text-amber-400">✅ Human-Authored Lyrics:</strong> 100% human-authored and registered IP via Songbay.</li>
                    <li><strong class="text-amber-400">✅ Royalty-Free Demos:</strong> Lifetime Royalty-Free license for underlying placeholder compositions.</li>
                </ul>
                <ul class="space-y-2">
                    <li><strong class="text-amber-400">✅ Clean Copyright Path:</strong> Streamlined conversion to full traditional copyright upon re-recording.</li>
                    <li><strong class="text-amber-400">✅ Zero AI Liability:</strong> No backend royalties owed to generative platforms.</li>
                </ul>
            </div>
        </div>

        <div class="rectangular-grid">
            <div class="rectangular-card" onclick="setMasterFilter('PlacementType', 'Commercial Sync')">Commercial Sync Assets</div>
            <div class="rectangular-card" onclick="setMasterFilter('CommercialPotential', 'High')">High Potential Tracks</div>
            <div class="rectangular-card" onclick="setMasterFilter('Genre1', 'Pop')">Pop / Modern Radio</div>
        </div>

        <section class="mb-12">
            <h3 class="text-center text-lg font-bold text-amber-400 mb-6 uppercase tracking-widest">Narrative Frameworks</h3>
            <div id="thematic-container" class="thematic-grid">
                </div>
        </section>

        <div class="bg-slate-900 p-6 rounded-xl mb-12 border-2 border-slate-700">
            <input type="text" id="search-input" placeholder="Search Keywords, SEO, Hashtags, Mood, Tempo, Placement..." 
                   class="w-full p-4 bg-black border-2 border-slate-700 rounded-lg text-white focus:outline-none focus:border-[var(--sunset-orange)] uppercase tracking-widest text-sm">
            <div class="flex justify-between mt-4">
                <p id="filter-status" class="text-xs font-bold text-slate-500 uppercase">Viewing Full Catalog</p>
                <button onclick="resetAll()" class="text-xs font-black uppercase text-[var(--sunset-orange)] hover:underline">Clear Search</button>
            </div>
        </div>

        <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            </div>
    </main>

    <div id="lyric-modal" class="fixed inset-0 bg-black/98 z-50 hidden items-center justify-center p-4 backdrop-blur-md">
        <div class="bg-slate-900 rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-hidden flex flex-col border-2 border-slate-700">
            <div class="p-6 border-b border-slate-800 flex justify-between items-center bg-[var(--burgundy)]">
                <h2 id="modal-title" class="text-2xl font-black text-white uppercase tracking-widest"></h2>
                <button onclick="closeModal()" class="text-white hover:text-amber-400 text-4xl">&times;</button>
            </div>
            <div class="p-8 overflow-y-auto text-slate-100">
                <div class="mb-8 bg-black/50 p-6 rounded-xl border border-slate-800">
                    <p class="text-amber-400 font-bold uppercase text-[10px] mb-2 tracking-widest">Audio Preview</p>
                    <audio id="modal-audio" controls class="w-full"></audio>
                </div>
                <div id="modal-lyrics" class="whitespace-pre-wrap font-serif text-lg leading-relaxed"></div>
            </div>
        </div>
    </div>

    <footer class="bg-[var(--burgundy)] py-10 mt-auto border-t-4 border-gray-400">
        <div class="content-container text-center text-gray-200">
            <p class="font-bold text-lg uppercase tracking-widest">Kellie Larson</p>
            <p class="text-xs text-amber-400 mb-4">Cinematic Songwriter & Lyricist</p>
            <div class="flex justify-center space-x-6 text-sm mb-6">
                <a href="tel:7605370222" class="hover:underline">760.537.0222</a>
                <a href="mailto:info@verseandchorus.com" class="hover:underline">info@verseandchorus.com</a>
            </div>
            <p class="text-[10px] text-gray-400">&copy; 2025 Verse and Chorus. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Integrated Song Data (Titles linked to Songbay URL from JSON)
        const SONGS = [
            { 
                id: 1, title: "AUTHOR OF A LIE", songbay: "https://songbay.co/view-music/235611415/", pillar: "Social Commentary", 
                genre1: "Pop", genre2: "Hip-Hop", mood: "Anthemic", theme: "Deceit", snippet: "You're the author of a lie, a master of deceit. And I'm tired of this story on repeat.", 
                img: "/assets/covers/author-of-a-lie-cover-art.jpg", slug: "author-of-a-lie",
                fullLyrics: `[Verse 1]\nYou tell a story, i pick it apart...`,
                tags: "deceit lies gaslighting storytelling sarcastic confrontational" 
            },
            { 
                id: 2, title: "BIG HARD NO", songbay: "https://songbay.co/view-music/235609978/", pillar: "Empowerment Arc", 
                genre1: "Rock", genre2: "Alternative", mood: "Determined", theme: "Boundaries", snippet: "That's a big hard NO, not playing your game!", 
                img: "/assets/covers/big-hard-no-cover-art.jpg", slug: "big-hard-no",
                fullLyrics: `Verse 1:\nSo sad, heard she had enough...`,
                tags: "empowerment defiance breakup rejected fierce female vocal"
            },
            { 
                id: 3, title: "BOOM BOOM BEAT", songbay: "https://songbay.co/view-music/235611871/", pillar: "Iterative Protagonist", 
                genre1: "Alternative", genre2: "Rock", mood: "Playful", theme: "Yodeling Love", snippet: "Boom boom boom da boom boom boom, Ah-yo-delay-ee-hoo!", 
                img: "/assets/covers/boom-boom-beat-cover-art.jpg", slug: "boom-boom-beat",
                fullLyrics: `(Verse 1)\nEphemeral moment...`,
                tags: "fun romantic reunion yodel bouncy euphoric heartbeat"
            }
            // Logic continues for all 44 songs...
        ];

        const PILLARS = [
            { id: "Social Commentary", label: "Social Commentary", img: "/assets/covers/social-world-lyrics-photo.jpg" },
            { id: "Empowerment Arc", label: "Empowerment Arc", img: "/assets/covers/empowerment-arc-lyrics-photo.jpg" },
            { id: "Narrative of Disenchantment", label: "Disenchantment", img: "/assets/covers/disenchantment-lyrics-photo.jpg" },
            { id: "Mutual Value Proposition", label: "Value Proposition", img: "/assets/covers/mutual-value-lyrics-photo.jpg" },
            { id: "Loss of Market Share", label: "Loss of Market Share", img: "/assets/covers/loss-of-market-share-lyrics-photo.jpg" },
            { id: "Iterative Protagonist", label: "Iterative Protagonist", img: "/assets/covers/iterative-photo.jpg" }
        ];

        function renderCatalog(filteredSongs) {
            const grid = document.getElementById('catalog-grid');
            grid.innerHTML = filteredSongs.map(s => `
                <div class="song-card p-6 rounded-xl shadow-2xl">
                    <img src="${s.img}" class="cover-img">
                    <div class="mb-2">
                        <a href="${s.songbay}" target="_blank" class="metallic-gold-title text-xl hover:underline">${s.title}</a>
                    </div>
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider mb-1">
                        Genre: ${s.genre1}, ${s.genre2} | Mood: ${s.mood}
                    </p>
                    <p class="text-[10px] text-slate-300 font-bold uppercase mb-4">Theme: ${s.theme}</p>
                    <p class="text-sm text-slate-200 italic mb-6 leading-relaxed">"${s.snippet}"</p>
                    
                    <div class="grid grid-cols-2 gap-2 w-full mt-auto">
                        <button onclick="openPlayer(${s.id})" class="py-2 btn-sunset-orange font-black text-[10px] uppercase tracking-tighter rounded-md">READ / PLAY</button>
                        <button onclick="generate2PagePrint(${s.id})" class="py-2 bg-slate-700 hover:bg-slate-600 font-black text-[10px] uppercase tracking-tighter rounded-md">🖨️ PRINT</button>
                    </div>
                </div>
            `).join('');
        }

        // Print Logic: Creates a specific 2-page document layout
        function generate2PagePrint(id) {
            const s = SONGS.find(song => song.id === id);
            const win = window.open('', '_blank');
            win.document.write(`
                <html>
                <head>
                    <style>
                        body { font-family: sans-serif; padding: 40px; line-height: 1.6; }
                        h1 { color: #800020; text-transform: uppercase; border-bottom: 2px solid #ccc; padding-bottom: 10px; }
                        .meta-block { margin-bottom: 30px; }
                        .page-break { page-break-before: always; }
                        pre { white-space: pre-wrap; font-size: 18px; font-family: serif; }
                        .header { text-align: center; font-size: 10px; color: #666; margin-bottom: 40px; }
                    </style>
                </head>
                <body>
                    <div class="header">INDUSTRY PRO VAULT — SYNC READY ASSETS</div>
                    <h1>${s.title}</h1>
                    <div class="meta-block">
                        <p><strong>GENRE:</strong> ${s.genre1} / ${s.genre2}</p>
                        <p><strong>MOOD:</strong> ${s.mood}</p>
                        <p><strong>THEME:</strong> ${s.theme}</p>
                        <p><strong>ARTIST/WRITER:</strong> Kellie Larson</p>
                    </div>
                    <div class="page-break"></div>
                    <h1>Lyrics: ${s.title}</h1>
                    <pre>${s.fullLyrics}</pre>
                </body></html>
            `);
            win.document.close();
            win.print();
        }

        // Search Box Logic: Pulls from metadata and SEO tags
        document.getElementById('search-input').addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase();
            const filtered = SONGS.filter(s => 
                s.title.toLowerCase().includes(query) || 
                s.tags.toLowerCase().includes(query) ||
                s.theme.toLowerCase().includes(query) ||
                s.mood.toLowerCase().includes(query)
            );
            renderCatalog(filtered);
        });

        function renderPillars() {
            const container = document.getElementById('thematic-container');
            container.innerHTML = PILLARS.map(p => `
                <div class="thematic-card" style="background-image: url('${p.img}')" onclick="filterByPillar('${p.id}')">
                    <span>${p.label}</span>
                </div>
            `).join('');
        }

        function filterByPillar(id) {
            const filtered = SONGS.filter(s => s.pillar === id);
            renderCatalog(filtered);
            document.getElementById('filter-status').innerText = `Framework: ${id}`;
        }

        function openPlayer(id) {
            const s = SONGS.find(song => song.id === id);
            document.getElementById('modal-title').innerText = s.title;
            document.getElementById('modal-lyrics').innerText = s.fullLyrics;
            document.getElementById('modal-audio').src = `/assets/music/${s.slug}-audio.mp3`;
            document.getElementById('lyric-modal').classList.replace('hidden', 'flex');
        }

        function closeModal() { document.getElementById('lyric-modal').classList.replace('flex', 'hidden'); document.getElementById('modal-audio').pause(); }
        function resetAll() { renderCatalog(SONGS); document.getElementById('filter-status').innerText = "Viewing Full Catalog"; document.getElementById('search-input').value = ''; }

        // Initial Initialization
        renderPillars();
        renderCatalog(SONGS);
    </script>
</body>
</html>
