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
            .page-break { page-break-before: always; display: block; clear: both; height: 0; }
            body { background: white !important; color: black !important; }
            .print-wrapper { padding: 40px; }
            pre { white-space: pre-wrap; font-size: 16px; font-family: serif; border: none !important; }
        }

        /* Song Card Styles */
        .song-card { border: 2px solid var(--blue-gray); background: #1e293b; text-align: center; height: 100%; display: flex; flex-direction: column; transition: 0.3s; }
        .song-card:hover { border-color: var(--sunset-orange); transform: translateY(-5px); }
        .metallic-gold-title { color: var(--metallic-gold); font-weight: 800; text-transform: uppercase; text-decoration: none; }
        .metallic-gold-title:hover { text-decoration: underline; }

        /* 6 Thematic Cards: 2 across, 3 rows high */
        .thematic-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr); 
            gap: 1rem; 
            max-width: 500px; 
            margin: 0 auto 3rem;
        }
        .thematic-card { 
            height: 90px; border: 2px solid var(--blue-gray); border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            background-size: cover; background-position: center; position: relative;
            cursor: pointer; overflow: hidden;
        }
        .thematic-card::after { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.6); }
        .thematic-card span { z-index: 2; font-weight: 800; font-size: 0.7rem; text-transform: uppercase; color: white; text-align: center; }

        /* Filter Controls */
        .vault-select { background-color: #0f172a; border: 2px solid var(--blue-gray); color: white; padding: 10px; border-radius: 6px; width: 100%; cursor: pointer; }
        .vault-select:focus { border-color: var(--sunset-orange); outline: none; }
        .rect-card { background: #334155; border: 1px solid var(--blue-gray); padding: 8px; border-radius: 4px; font-size: 0.7rem; font-weight: bold; text-align: center; cursor: pointer; text-transform: uppercase; }
        .rect-card:hover, .rect-card.active { border-color: var(--sunset-orange); background: var(--sunset-orange); }

        /* Sunset Orange Up Arrow */
        #back-to-top { 
            position: fixed; bottom: 30px; right: 30px; 
            background: var(--sunset-orange); color: white; 
            width: 50px; height: 50px; border-radius: 50%; 
            display: none; align-items: center; justify-content: center; 
            font-size: 24px; cursor: pointer; z-index: 100; border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4); transition: 0.2s;
        }
        #back-to-top:hover { transform: scale(1.1); }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <header class="bg-[var(--burgundy)] text-white no-print sticky top-0 z-50">
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

    <main class="content-container py-10 no-print">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-extrabold tracking-widest uppercase italic">Industry Pro Vault</h2>
            <p class="text-gray-400 mt-2 text-sm font-semibold italic">Curated Assets for Music Supervisors & A&R</p>
        </div>

        <div class="bg-slate-900 p-6 mb-12 border-l-4 border-[var(--burgundy)] rounded shadow-lg">
            <h4 class="text-xl font-bold mb-4 uppercase text-white tracking-wide">Rights & Licensing Assurance</h4>
            <div class="grid md:grid-cols-2 gap-4 text-xs text-gray-300">
                <p>✅ 100% Human-Authored Lyrics (Registered via Songbay)</p>
                <p>✅ Pre-Cleared for Immediate Commercial Sync Placement</p>
                <p>✅ Royalty-Free Placeholder Composition & Master License</p>
                <p>✅ Clean Legal Path to Traditional Copyright Ownership</p>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-3 mb-8">
            <div class="rect-card" onclick="applyMasterFilter('placementType', 'Commercial Sync')">Commercial Sync</div>
            <div class="rect-card" onclick="applyMasterFilter('commercialPotential', 'High')">High Potential</div>
            <div class="rect-card" onclick="applyMasterFilter('genre1', 'Pop')">Radio Pop Focus</div>
        </div>

        <div class="thematic-grid">
            <div class="thematic-card" style="background-image: url('/assets/covers/social-world-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Social')"><span>Social Commentary</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/empowerment-arc-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Empowerment')"><span>Empowerment Arc</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/disenchantment-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Disenchantment')"><span>Disenchantment</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/mutual-value-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Value')"><span>Value Proposition</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/loss-of-market-share-lyrics-photo.jpg')" onclick="applyMasterFilter('category', 'Loss')"><span>Market Share</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/iterative-photo.jpg')" onclick="applyMasterFilter('category', 'Iterative')"><span>Iterative Protagonist</span></div>
        </div>

        <div class="bg-gray-800 p-6 rounded-xl mb-12 border-2 border-[var(--blue-gray)] shadow-2xl">
            <input type="text" id="vault-search-box" placeholder="Search Keywords, SEO, Hashtags, Mood, Placement, Tempo..." 
                   class="w-full p-4 bg-black border border-slate-700 rounded mb-6 text-white uppercase text-sm focus:border-[var(--sunset-orange)] outline-none">
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <select id="genre-pull" class="vault-select" onchange="runFilters()">
                    <option value="">GENRE</option>
                    <option value="Alternative and Punk">Alternative and Punk</option>
                    <option value="Blues">Blues</option>
                    <option value="Country">Country</option>
                    <option value="Easy Listening">Easy Listening</option>
                    <option value="Gospel and Religious">Gospel and Religious</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                    <option value="Pop">Pop</option>
                    <option value="Punk">Punk</option>
                    <option value="R&B">R&B</option>
                    <option value="Rock">Rock</option>
                    <option value="World">World</option>
                </select>

                <select id="mood-pull" class="vault-select" onchange="runFilters()">
                    <option value="">MOOD</option>
                    <option value="Anthemic">Anthemic</option>
                    <option value="Bitter">Bitter</option>
                    <option value="Confident">Confident</option>
                    <option value="Cool">Cool</option>
                    <option value="Determined">Determined</option>
                    <option value="Dramatic">Dramatic</option>
                    <option value="Dreamy">Dreamy</option>
                    <option value="Hard">Hard</option>
                    <option value="Heavy">Heavy</option>
                    <option value="Introspective">Introspective</option>
                    <option value="Mellow">Mellow</option>
                    <option value="Melancholic">Melancholic</option>
                    <option value="Peaceful">Peaceful</option>
                    <option value="Playful">Playful</option>
                    <option value="Proud">Proud</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Revenge">Revenge</option>
                    <option value="Sad">Sad</option>
                    <option value="Slow">Slow</option>
                    <option value="Soft">Soft</option>
                </select>

                <select id="tempo-pull" class="vault-select" onchange="runFilters()">
                    <option value="">TEMPO</option>
                    <option value="Fast">Fast</option>
                    <option value="Mid Tempo">Mid Tempo</option>
                    <option value="Slow">Slow</option>
                </select>

                <select id="subgenre-pull" class="vault-select" onchange="runFilters()">
                    <option value="">SUB GENRE/STYLE</option>
                    <option value="Americana">Americana</option>
                    <option value="Ballad">Ballad</option>
                    <option value="Bedroom Pop">Bedroom Pop</option>
                    <option value="Contemporary">Contemporary</option>
                    <option value="Country">Country</option>
                    <option value="Crunk">Crunk</option>
                    <option value="Dancehall">Dancehall</option>
                    <option value="Horror">Horror</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                </select>
            </div>
            <button onclick="resetVaultFilters()" class="mt-4 text-xs font-black uppercase text-[var(--sunset-orange)] hover:underline">Filter Reset</button>
        </div>

        <div id="vault-grid-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
    </main>

    <div id="vault-modal-player" class="fixed inset-0 bg-black/98 z-50 hidden flex justify-center items-center p-4 backdrop-blur-md">
        <div class="bg-slate-900 rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden flex flex-col border-2 border-slate-700 shadow-2xl" oncontextmenu="return false;">
            <div class="p-4 bg-[var(--burgundy)] flex justify-between items-center">
                <h2 id="modal-song-title" class="text-xl font-bold uppercase tracking-widest text-white italic"></h2>
                <button onclick="closeVaultModal()" class="text-white text-4xl hover:text-amber-400 transition">&times;</button>
            </div>
            <div class="p-10 overflow-y-auto">
                <div class="bg-black/50 p-6 rounded-xl border border-slate-800 mb-8">
                    <p class="text-amber-400 font-bold uppercase text-[10px] tracking-widest mb-3">Audio Preview Only — Not for Download</p>
                    <audio id="modal-song-audio-asset" controls controlsList="nodownload" class="w-full"></audio>
                </div>
                <div id="modal-song-lyrics-full" class="whitespace-pre-wrap font-serif text-xl leading-relaxed text-slate-100"></div>
            </div>
        </div>
    </div>

    <button id="back-to-top" onclick="window.scrollTo({top:0, behavior:'smooth'})">↑</button>

    <footer class="bg-[var(--burgundy)] py-10 mt-auto border-t-4 border-gray-400 no-print">
        <div class="content-container text-center text-xs text-gray-200 uppercase tracking-widest font-bold">
            <p>Kellie Larson | Cinematic Songwriter & Lyricist</p>
            <p>760.537.0222 | info@verseandchorus.com</p>
            <p class="mt-4">Verse and Chorus &copy; 2025 | All IP Protected</p>
        </div>
    </footer>

    <script>
        // FULL 44 SONG CATALOG DATA
        const CATALOG_SONGS = <?php include 'lyrics_data_loader.php'; ?>;

        function renderVaultGrid(songs) {
            const grid = document.getElementById('vault-grid-container');
            grid.innerHTML = songs.map(s => `
                <div class="song-card p-6 rounded-lg shadow-2xl">
                    <img src="${s.coverImageUrl}" class="w-full max-w-[140px] mx-auto rounded-lg mb-4 border border-slate-700 shadow-inner">
                    <div class="mb-2">
                        <a href="${s.songbayWebpageUrl}" target="_blank" class="metallic-gold-title text-xl tracking-tighter">${s.title}</a>
                    </div>
                    <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Genre: ${s.genre1}, ${s.genre2}</p>
                    <p class="text-[10px] text-slate-400 font-bold uppercase mb-1">Mood: ${s.moodTone.split(',')[0]} | Tempo: ${s.tempo}</p>
                    <p class="text-[10px] text-slate-300 font-bold uppercase mb-4 tracking-tighter italic">Theme: ${s.category}</p>
                    <p class="text-sm text-slate-200 italic mb-10 px-2 flex-grow">"${s.snippetA}"</p>
                    
                    <div class="grid grid-cols-2 gap-2 mt-auto">
                        <button onclick="triggerPlayerModal(${s.id})" class="py-3 bg-[var(--sunset-orange)] text-white font-black text-[10px] rounded uppercase shadow-inner active:scale-95 transition">READ / PLAY</button>
                        <button onclick="triggerIndustryPrint(${s.id})" class="py-3 bg-slate-700 text-white font-black text-[10px] rounded uppercase hover:bg-slate-600 active:scale-95 transition">🖨️ PRINT</button>
                    </div>
                </div>
            `).join('');
        }

        // Logic for 2-Page Industry Print
        function triggerIndustryPrint(id) {
            const s = CATALOG_SONGS.find(x => x.id === id);
            const win = window.open('', '_blank');
            win.document.write(`
                <html><head><style>
                    body { font-family: sans-serif; padding: 60px; line-height: 1.6; color: #000; }
                    .page-break { page-break-before: always; display:block; clear:both; height:0; }
                    h1 { color: #800020; border-bottom: 4px solid #000; padding-bottom: 5px; text-transform: uppercase; margin-top: 0; }
                    .meta-block { font-size: 19px; margin-top: 40px; border-left: 8px solid #64748b; padding-left: 20px; }
                    pre { white-space: pre-wrap; font-size: 17px; font-family: serif; border-top: 1px solid #ccc; padding-top: 20px; }
                </style></head>
                <body>
                    <h1>${s.title} — Industry Metadata Profile</h1>
                    <div class="meta-block">
                        <p><strong>Artist/Writer:</strong> Kellie Larson</p>
                        <p><strong>Primary Genre:</strong> ${s.genre1}</p>
                        <p><strong>Secondary Genre:</strong> ${s.genre2}</p>
                        <p><strong>Mood/Tone:</strong> ${s.moodTone}</p>
                        <p><strong>BPM/Tempo:</strong> ${s.tempo}</p>
                        <p><strong>Placement Targeting:</strong> ${s.placementType}</p>
                        <p><strong>Theme/Keyword Category:</strong> ${s.category}</p>
                    </div>
                    <div class="page-break"></div>
                    <h1>Full Lyrics: ${s.title}</h1>
                    <pre>${s.fullLyrics}</pre>
                </body></html>
            `);
            win.document.close();
            win.focus();
            setTimeout(() => win.print(), 600);
        }

        function triggerPlayerModal(id) {
            const s = CATALOG_SONGS.find(x => x.id === id);
            document.getElementById('modal-song-title').innerText = s.title;
            document.getElementById('modal-song-lyrics-full').innerText = s.fullLyrics; // Display Full Lyrics
            const slug = s.title.toLowerCase().replace(/[^\w\s-]/g, '').replace(/\s+/g, '-');
            document.getElementById('modal-song-audio-asset').src = `/assets/music/${slug}-audio.mp3`;
            document.getElementById('vault-modal-player').classList.replace('hidden', 'flex');
        }

        function runFilters() {
            const q = document.getElementById('vault-search-box').value.toLowerCase();
            const g = document.getElementById('genre-pull').value;
            const m = document.getElementById('mood-pull').value;
            const t = document.getElementById('tempo-pull').value;
            const sub = document.getElementById('subgenre-pull').value;

            const filtered = CATALOG_SONGS.filter(s => {
                const textMatch = !q || [s.title, s.tags, s.keywords, s.category, s.placementType].some(f => String(f).toLowerCase().includes(q));
                const genreMatch = !g || s.genre1.includes(g) || s.genre2.includes(g);
                const moodMatch = !m || s.moodTone.includes(m);
                const tempoMatch = !t || s.tempo.includes(t);
                const subMatch = !sub || s.genre2.includes(sub);
                return textMatch && genreMatch && moodMatch && tempoMatch && subMatch;
            });
            renderVaultGrid(filtered);
        }

        function applyMasterFilter(field, val) {
            const filtered = CATALOG_SONGS.filter(s => {
                if(field === 'category') return s.category.toLowerCase().includes(val.toLowerCase());
                return s[field].includes(val);
            });
            renderVaultGrid(filtered);
        }

        function resetVaultFilters() {
            document.querySelectorAll('select').forEach(s => s.value = '');
            document.getElementById('vault-search-box').value = '';
            renderVaultGrid(CATALOG_SONGS);
        }

        function closeVaultModal() { 
            document.getElementById('vault-modal-player').classList.replace('flex', 'hidden'); 
            document.getElementById('modal-song-audio-asset').pause(); 
        }

        window.onscroll = () => { document.getElementById('back-to-top').style.display = (window.scrollY > 400) ? 'flex' : 'none'; };
        document.getElementById('vault-search-box').addEventListener('input', runFilters);

        // DEFAULT INITIALIZATION (Renders all 44 songs immediately)
        renderVaultGrid(CATALOG_SONGS);
    </script>
</body>
</html>
