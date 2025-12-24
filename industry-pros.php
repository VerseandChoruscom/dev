<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | Music Licensing | Kellie Larson</title>
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
        
        /* 2-Page Print Logic */
        @media print {
            .no-print { display: none !important; }
            .page-break { page-break-before: always; }
            body { background: white; color: black; }
        }

        /* Song Card Styles */
        .song-card { border: 2px solid var(--blue-gray); background: #1e293b; text-align: center; }
        .song-card:hover { border-color: var(--sunset-orange); transform: translateY(-5px); transition: 0.3s; }
        .metallic-gold-title { color: var(--metallic-gold); font-weight: 800; text-transform: uppercase; }
        .btn-sunset-orange { background-color: var(--sunset-orange); }

        /* Thematic Grid: 2 per row, 3 rows */
        .thematic-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 1rem; 
            max-width: 500px; 
            margin: 0 auto 3rem;
        }
        .thematic-card { 
            height: 80px; border: 2px solid var(--blue-gray); border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            background-size: cover; background-position: center; position: relative;
            cursor: pointer; overflow: hidden;
        }
        .thematic-card::after { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.5); }
        .thematic-card span { z-index: 2; font-weight: 800; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; }

        /* Rectangular Category Cards */
        .rect-card { 
            background: #334155; border: 1px solid var(--blue-gray); padding: 8px;
            border-radius: 4px; font-size: 0.7rem; font-weight: bold; text-align: center; cursor: pointer;
        }

        /* Dropdown Styling */
        .vault-select {
            background-color: #0f172a; border: 2px solid var(--blue-gray);
            color: white; padding: 10px; border-radius: 6px; width: 100%;
            appearance: none; cursor: pointer; font-size: 0.8rem;
        }
    </style>
</head>
<body>

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-4 flex justify-between items-center">
            <h1 class="script-font text-3xl text-amber-400">Verse and Chorus</h1>
            <nav class="hidden md:block">
                <ul class="flex space-x-6 text-xs font-bold tracking-widest uppercase">
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/industry.pros.php">Industry Pros</a></li>
                    <li><a href="/lyrics.html">Music</a></li>
                    <li><a href="/contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="content-container py-10">
        <div class="mb-10 text-center">
            <h2 class="text-4xl font-extrabold tracking-widest text-white uppercase italic">Industry Pro Vault</h2>
            <p class="text-gray-400 text-lg mt-2">Verified Licensing Assets for A&R and Sync Professionals</p>
        </div>

        <div class="bg-slate-900/50 p-6 mb-12 border-l-4 border-[var(--burgundy)] rounded">
            <h4 class="text-xl font-bold text-white mb-4 uppercase">Rights & Licensing Assurance</h4>
            <div class="grid md:grid-cols-2 gap-4 text-xs text-gray-300">
                <ul class="space-y-2">
                    <li><strong class="text-amber-400">✅ Verifiable IP:</strong> 100% human-authored lyrics registered with Songbay.</li>
                    <li><strong class="text-amber-400">✅ Royalty-Free Demos:</strong> Lifetime Commercial License for underlying placeholder arrangements.</li>
                </ul>
                <ul class="space-y-2">
                    <li><strong class="text-amber-400">✅ Immediate Sync:</strong> All assets pre-cleared for rapid commercial development.</li>
                    <li><strong class="text-amber-400">✅ Traditional Copyright:</strong> Direct path to full ownership upon re-recording.</li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4 mb-8">
            <div class="rect-card" onclick="applyMasterFilter('placementType', 'Commercial Sync')">Commercial Sync</div>
            <div class="rect-card" onclick="applyMasterFilter('commercialPotential', 'High')">High Potential</div>
            <div class="rect-card" onclick="applyMasterFilter('genre1', 'Pop')">Pop Focus</div>
        </div>

        <div class="thematic-grid">
            <div class="thematic-card" style="background-image: url('/assets/covers/social-world-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Social Commentary')"><span>Social Commentary</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/empowerment-arc-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Empowerment Arc')"><span>Empowerment Arc</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/disenchantment-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Narrative of Disenchantment')"><span>Disenchantment</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/mutual-value-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Mutual Value Proposition')"><span>Value Prop</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/loss-of-market-share-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Loss of Market Share')"><span>Market Share</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/iterative-photo.jpg')" onclick="applyMasterFilter('category', 'Iterative Protagonist')"><span>Iterative Protagonist</span></div>
        </div>

        <div class="bg-gray-800 p-6 rounded-xl mb-12 border-2 border-[var(--blue-gray)]">
            <input type="text" id="search-input" placeholder="Search Keywords, SEO, Hashtags, Mood, Placement..." 
                   class="w-full p-4 bg-black border border-slate-700 rounded mb-6 text-white uppercase text-sm focus:border-[var(--sunset-orange)] outline-none">
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <select id="genre-select" class="vault-select" onchange="applyMasterFilter()">
                    <option value="">GENRE</option>
                    <option value="Alternative and Punk">Alternative/Punk</option>
                    <option value="Blues">Blues</option>
                    <option value="Country">Country</option>
                    <option value="Easy Listening">Easy Listening</option>
                    <option value="Gospel and Religious">Gospel</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                    <option value="Pop">Pop</option>
                    <option value="Punk">Punk</option>
                    <option value="R&B">R&B</option>
                    <option value="Rock">Rock</option>
                    <option value="World">World</option>
                </select>
                <select id="mood-select" class="vault-select" onchange="applyMasterFilter()">
                    <option value="">MOOD</option>
                    <option value="Anthemic">Anthemic</option>
                    <option value="Bitter">Bitter</option>
                    <option value="Confident">Confident</option>
                    <option value="Determined">Determined</option>
                    <option value="Dramatic">Dramatic</option>
                    <option value="Introspective">Introspective</option>
                    <option value="Mellow">Mellow</option>
                    <option value="Sad">Sad</option>
                </select>
                <select id="tempo-select" class="vault-select" onchange="applyMasterFilter()">
                    <option value="">TEMPO</option>
                    <option value="Fast">Fast</option>
                    <option value="Mid Tempo">Mid Tempo</option>
                    <option value="Slow">Slow</option>
                </select>
                <button onclick="resetFilters()" class="bg-slate-700 text-xs font-bold rounded p-2 uppercase hover:bg-slate-600">Reset Filters</button>
            </div>
        </div>

        <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
    </main>

    <div id="music-modal" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center p-4 backdrop-blur-md">
        <div class="bg-slate-900 rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-hidden flex flex-col border-2 border-slate-700">
            <div class="p-6 border-b border-slate-800 flex justify-between items-center bg-[var(--burgundy)]">
                <h2 id="modal-title" class="text-2xl font-black text-white uppercase"></h2>
                <button onclick="closeModal()" class="text-white text-3xl">&times;</button>
            </div>
            <div class="p-8 overflow-y-auto text-slate-100">
                <audio id="modal-audio" controls class="w-full mb-8"></audio>
                <div id="modal-lyrics" class="whitespace-pre-wrap font-serif text-lg leading-relaxed border-t border-slate-800 pt-6"></div>
            </div>
        </div>
    </div>

    <footer class="bg-[var(--burgundy)] py-8 mt-12 border-t-4 border-gray-400">
        <div class="content-container text-center text-xs text-gray-300">
            <p class="font-bold uppercase tracking-widest text-white mb-2">Kellie Larson | Verse and Chorus</p>
            <p>760.537.0222 | info@verseandchorus.com</p>
            <p class="mt-4">&copy; 2025 All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Placeholder dataset referencing your lyrics.json structure
        const ALL_SONGS = [
            { 
                id: 1, title: "AUTHOR OF A LIE", songbay: "https://songbay.co/view-music/235611415/", 
                genre1: "Pop", genre2: "Hip-Hop", mood: "Anthemic", theme: "Deceit", 
                snippet: "You're the author of a lie, a master of deceit. And I'm tired of this story on repeat.",
                img: "/assets/covers/author-of-a-lie-cover-art.jpg", slug: "author-of-a-lie",
                fullLyrics: `[Verse 1]\nYou tell a story, i pick it apart...`,
                category: "Social Commentary", placementType: "Commercial Sync", commercialPotential: "High"
            },
            { 
                id: 2, title: "BIG HARD NO", songbay: "https://songbay.co/view-music/235609978/", 
                genre1: "Country", genre2: "Contemporary Country", mood: "Determined", theme: "Boundaries", 
                snippet: "That's a big hard NO, not playing your game!",
                img: "/assets/covers/big-hard-no-cover-art.jpg", slug: "big-hard-no",
                fullLyrics: `Verse 1:\nSo sad, heard she had enough...`,
                category: "Empowerment Arc", placementType: "Potential Single", commercialPotential: "High"
            },
            // Logic extends to all 44 songs from your JSON...
        ];

        function renderCatalog(songs) {
            const grid = document.getElementById('catalog-grid');
            grid.innerHTML = songs.map(s => `
                <div class="song-card p-6 rounded-lg shadow-2xl">
                    <img src="${s.img}" class="w-full max-w-[150px] mx-auto rounded mb-4 border border-slate-700">
                    <div class="mb-2">
                        <a href="${s.songbay}" target="_blank" class="metallic-gold-title text-xl hover:underline">${s.title}</a>
                    </div>
                    <p class="text-[10px] text-slate-400 font-bold uppercase tracking-wider mb-1">
                        Genre: ${s.genre1}, ${s.genre2} | Mood: ${s.mood}
                    </p>
                    <p class="text-[10px] text-slate-300 font-bold uppercase mb-4">Theme: ${s.theme}</p>
                    <p class="text-sm text-slate-200 italic mb-6">"${s.snippet}"</p>
                    
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="openPlayer(${s.id})" class="py-2 btn-sunset-orange font-black text-[10px] rounded uppercase">READ / PLAY</button>
                        <button onclick="printTwoPage(${s.id})" class="py-2 bg-slate-700 font-black text-[10px] rounded uppercase hover:bg-slate-600">🖨️ PRINT</button>
                    </div>
                </div>
            `).join('');
        }

        function printTwoPage(id) {
            const s = ALL_SONGS.find(song => song.id === id);
            const win = window.open('', '_blank');
            win.document.write(`
                <html>
                <head><style>
                    body { font-family: sans-serif; padding: 50px; line-height: 1.5; }
                    .header { color: #800020; border-bottom: 2px solid #ccc; margin-bottom: 20px; }
                    .page-2 { page-break-before: always; }
                    pre { white-space: pre-wrap; font-size: 16px; font-family: serif; background: #f4f4f4; padding: 20px; }
                </style></head>
                <body>
                    <div class="header"><h1>${s.title}</h1></div>
                    <p><strong>GENRE:</strong> ${s.genre1} / ${s.genre2}</p>
                    <p><strong>MOOD:</strong> ${s.mood}</p>
                    <p><strong>THEME:</strong> ${s.theme}</p>
                    <p><strong>WRITER:</strong> Kellie Larson</p>
                    <p><strong>PLACEMENT TYPE:</strong> ${s.placementType}</p>
                    <div class="page-2">
                        <h1>Full Lyrics: ${s.title}</h1>
                        <pre>${s.fullLyrics}</pre>
                    </div>
                </body></html>
            `);
            win.document.close();
            win.print();
        }

        function openPlayer(id) {
            const s = ALL_SONGS.find(song => song.id === id);
            document.getElementById('modal-title').innerText = s.title;
            document.getElementById('modal-lyrics').innerText = s.fullLyrics;
            document.getElementById('modal-audio').src = `/assets/music/${s.slug}-audio.mp3`;
            document.getElementById('music-modal').classList.replace('hidden', 'flex');
        }

        function closeModal() { document.getElementById('music-modal').classList.replace('flex', 'hidden'); document.getElementById('modal-audio').pause(); }

        function applyMasterFilter(field = null, value = null) {
            const query = document.getElementById('search-input').value.toLowerCase();
            const genre = document.getElementById('genre-select').value;
            const mood = document.getElementById('mood-select').value;
            const tempo = document.getElementById('tempo-select').value;

            const filtered = ALL_SONGS.filter(s => {
                const matchesText = !query || s.title.toLowerCase().includes(query) || s.theme.toLowerCase().includes(query) || s.category.toLowerCase().includes(query);
                const matchesGenre = !genre || s.genre1 === genre || s.genre2 === genre;
                const matchesMood = !mood || s.mood.includes(mood);
                const matchesTempo = !tempo || s.tempo === tempo;
                const matchesQuickField = !field || s[field] === value;

                return matchesText && matchesGenre && matchesMood && matchesQuickTempo && matchesQuickField;
            });
            renderCatalog(filtered);
        }

        function resetFilters() {
            document.getElementById('search-input').value = '';
            document.getElementById('genre-select').value = '';
            document.getElementById('mood-select').value = '';
            document.getElementById('tempo-select').value = '';
            renderCatalog(ALL_SONGS);
        }

        document.getElementById('search-input').addEventListener('input', () => applyMasterFilter());
        renderCatalog(ALL_SONGS);
    </script>
</body>
</html>
