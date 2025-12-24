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
            .page-break { page-break-before: always; display: block; height: 0; }
            body { background: white !important; color: black !important; }
            .print-sheet { padding: 40px; }
            pre { white-space: pre-wrap; font-size: 16px; font-family: serif; }
        }

        /* Song Card Layout */
        .song-card { border: 2px solid var(--blue-gray); background: #1e293b; text-align: center; display: flex; flex-direction: column; transition: 0.3s; }
        .song-card:hover { border-color: var(--sunset-orange); transform: translateY(-5px); }
        .metallic-gold-title { color: var(--metallic-gold); font-weight: 800; text-transform: uppercase; text-decoration: none; }
        .metallic-gold-title:hover { text-decoration: underline; }

        /* Thematic Cards: 2 across, 3 rows */
        .thematic-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem; max-width: 450px; margin: 0 auto 2rem; }
        .thematic-card { 
            height: 70px; border: 2px solid var(--blue-gray); border-radius: 6px;
            display: flex; align-items: center; justify-content: center;
            background-size: cover; background-position: center; position: relative;
            cursor: pointer; overflow: hidden;
        }
        .thematic-card::after { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.6); }
        .thematic-card span { z-index: 2; font-weight: 800; font-size: 0.65rem; text-transform: uppercase; color: white; }
        .active-pill { border-color: var(--sunset-orange) !important; background: var(--sunset-orange) !important; color: white !important; }

        /* Small Rectangular master buttons */
        .rect-card { background: #334155; border: 1px solid var(--blue-gray); padding: 6px; border-radius: 4px; font-size: 0.65rem; font-weight: bold; text-align: center; cursor: pointer; text-transform: uppercase; }
        .rect-card:active, .rect-card.active { border-color: var(--sunset-orange); background: var(--sunset-orange); color: white; }

        /* Select / Pull-down styling */
        .vault-select { background-color: #0f172a; border: 2px solid var(--blue-gray); color: white; padding: 10px; border-radius: 6px; width: 100%; cursor: pointer; }
        .vault-select:focus { border-color: var(--sunset-orange); outline: none; }

        /* Sunset Orange Up Arrow */
        #back-to-top { background-color: var(--sunset-orange); transition: 0.3s; }
        #back-to-top:hover { transform: scale(1.1); background-color: #e2524a; }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <header class="bg-[var(--burgundy)] text-white shadow-xl no-print sticky top-0 z-50">
        <div class="content-container py-4 flex justify-between items-center">
            <h1 class="script-font text-3xl text-amber-400">Verse and Chorus</h1>
            <nav class="hidden md:block">
                <ul class="flex space-x-6 text-xs font-bold tracking-widest uppercase">
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/lyrics.html">Music</a></li>
                    <li><a href="/contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="content-container py-10 no-print">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-extrabold tracking-widest uppercase italic">Industry Pro Vault</h2>
            <p class="text-gray-400 mt-2 italic text-sm">Targeted Assets for Music Supervisors & A&R</p>
        </div>

        <div class="bg-slate-900 p-6 mb-12 border-l-4 border-[var(--burgundy)] rounded shadow-lg">
            <h4 class="text-xl font-bold mb-4 uppercase">Rights & Licensing Assurance</h4>
            <div class="grid md:grid-cols-2 gap-4 text-xs text-gray-300">
                <p>✅ 100% Human-Authored Lyrics (Registered via Songbay)</p>
                <p>✅ Pre-Cleared for Immediate Commercial Sync Placement</p>
                <p>✅ Royalty-Free Placeholder Composition & Master License</p>
                <p>✅ Guaranteed Clean IP Path for Derivative Development</p>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-3 mb-8">
            <div class="rect-card" onclick="runMasterFilter('placementType', 'Commercial Sync')">Commercial Sync</div>
            <div class="rect-card" onclick="runMasterFilter('commercialPotential', 'High')">High Potential</div>
            <div class="rect-card" onclick="runMasterFilter('genre1', 'Pop')">Radio Ready Pop</div>
        </div>

        <div class="thematic-grid">
            <div class="thematic-card" style="background-image: url('/assets/covers/social-world-lyrics-photo.jpg')" onclick="runMasterFilter('category', 'Social')"><span>Social Commentary</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/empowerment-arc-lyrics-photo.jpg')" onclick="runMasterFilter('category', 'Empowerment')"><span>Empowerment Arc</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/disenchantment-lyrics-photo.jpg')" onclick="runMasterFilter('category', 'Disenchantment')"><span>Disenchantment</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/mutual-value-lyrics-photo.jpg')" onclick="runMasterFilter('category', 'Value')"><span>Value Prop</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/loss-of-market-share-lyrics-photo.jpg')" onclick="runMasterFilter('category', 'Loss')"><span>Market Share</span></div>
            <div class="thematic-card" style="background-image: url('/assets/covers/iterative-photo.jpg')" onclick="runMasterFilter('category', 'Iterative')"><span>Iterative Protagonist</span></div>
        </div>

        <div class="bg-gray-800 p-6 rounded-xl mb-12 border-2 border-[var(--blue-gray)] shadow-2xl">
            <input type="text" id="vault-search" placeholder="Search Keywords, Tags, Hashtags, Mood, Tempo..." 
                   class="w-full p-4 bg-black border border-slate-700 rounded mb-6 text-white uppercase text-sm focus:border-[var(--sunset-orange)] outline-none">
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <select id="genre-pull" class="vault-select" onchange="runMasterFilter()">
                    <option value="">GENRE</option>
                    <option value="Alternative and Punk">Alternative/Punk</option>
                    <option value="Country">Country</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="R&B">R&B</option>
                </select>
                <select id="mood-pull" class="vault-select" onchange="runMasterFilter()">
                    <option value="">MOOD</option>
                    <option value="Anthemic">Anthemic</option>
                    <option value="Bitter">Bitter</option>
                    <option value="Confident">Confident</option>
                    <option value="Sad">Sad</option>
                </select>
                <select id="tempo-pull" class="vault-select" onchange="runMasterFilter()">
                    <option value="">TEMPO</option>
                    <option value="Fast">Fast</option>
                    <option value="Mid Tempo">Mid Tempo</option>
                    <option value="Slow">Slow</option>
                </select>
                <button onclick="clearVaultFilters()" class="bg-slate-700 text-xs font-bold rounded p-2 uppercase hover:bg-slate-600 transition">Clear Filters</button>
            </div>
        </div>

        <div id="vault-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
    </main>

    <div id="vault-modal" class="fixed inset-0 bg-black/95 z-50 hidden flex justify-center items-center p-4">
        <div class="bg-slate-900 rounded-2xl max-w-4xl w-full max-h-[95vh] overflow-hidden flex flex-col border-2 border-slate-700 shadow-2xl" oncontextmenu="return false;">
            <div class="p-6 bg-[var(--burgundy)] flex justify-between items-center">
                <h2 id="modal-song-title" class="text-2xl font-black uppercase tracking-widest text-white"></h2>
                <button onclick="closeVaultModal()" class="text-white text-4xl">&times;</button>
            </div>
            <div class="p-10 overflow-y-auto">
                <audio id="modal-song-audio" controls controlsList="nodownload" class="w-full mb-10"></audio>
                <div id="modal-song-lyrics" class="whitespace-pre-wrap font-serif text-xl leading-relaxed border-t border-slate-800 pt-8 text-slate-100"></div>
            </div>
        </div>
    </div>

    <button id="back-to-top" onclick="window.scrollTo({top:0, behavior:'smooth'})" class="fixed bottom-6 right-6 p-4 rounded-full text-white shadow-2xl z-40 hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>

    <footer class="bg-[var(--burgundy)] py-10 mt-auto border-t-4 border-gray-400 no-print">
        <div class="content-container text-center text-xs text-gray-200 uppercase tracking-widest font-bold">
            <p>Kellie Larson | Cinematic Songwriter & Lyricist</p>
            <p class="mt-4">Verse and Chorus &copy; 2025</p>
        </div>
    </footer>

    <script>
        // Mapping your lyrics.json to the UI logic
        const VAULT_DATA =; // 44 JSON Objects loaded here

        function renderVault(data) {
            const grid = document.getElementById('vault-grid');
            grid.innerHTML = data.map(s => `
                <div class="song-card p-8 rounded-xl shadow-2xl">
                    <img src="${s.coverImageUrl}" class="w-full max-w-[160px] mx-auto rounded-lg mb-6 shadow-lg border border-slate-700">
                    <div class="mb-4">
                        <a href="${s.songbayWebpageUrl}" target="_blank" class="metallic-gold-title text-2xl">${s.title}</a>
                    </div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">
                        ${s.genre1} / ${s.genre2} | ${s.moodTone.split(',')[0]}
                    </p>
                    <p class="text-[10px] font-bold text-slate-300 uppercase mb-4 tracking-tighter">THEME: ${s.category}</p>
                    <p class="text-sm italic text-slate-200 leading-relaxed mb-8 h-12 overflow-hidden flex-grow">"${s.snippetA}"</p>
                    
                    <div class="grid grid-cols-2 gap-3 mt-auto">
                        <button onclick="openVaultPlayer(${s.id})" class="py-3 bg-[var(--sunset-orange)] text-white font-black text-[10px] rounded-lg tracking-widest uppercase hover:opacity-90">READ / PLAY</button>
                        <button onclick="printTwoPageIndustry(${s.id})" class="py-3 bg-slate-700 text-white font-black text-[10px] rounded-lg tracking-widest uppercase hover:bg-slate-600">🖨️ PRINT</button>
                    </div>
                </div>
            `).join('');
        }

        // 2-Page Print: Metadata on P1, Full Lyrics on P2
        function printTwoPageIndustry(id) {
            const s = VAULT_DATA.find(x => x.id === id);
            const win = window.open('', '_blank');
            win.document.write(`
                <html><head><style>
                    body { font-family: 'Helvetica', sans-serif; padding: 50px; color: #000; }
                    .pg-break { page-break-before: always; }
                    h1 { color: #800020; border-bottom: 3px solid #000; padding-bottom: 10px; text-transform: uppercase; }
                    .meta-grid { font-size: 18px; margin-top: 30px; line-height: 2; }
                    pre { white-space: pre-wrap; font-size: 17px; font-family: 'Georgia', serif; line-height: 1.6; padding: 20px; background: #fafafa; border: 1px solid #eee; }
                </style></head>
                <body>
                    <h1>${s.title} - Industry Profile</h1>
                    <div class="meta-grid">
                        <p><strong>Artist/Writer:</strong> Kellie Larson</p>
                        <p><strong>Primary Genre:</strong> ${s.genre1}</p>
                        <p><strong>Sub Genre:</strong> ${s.genre2}</p>
                        <p><strong>Tempo:</strong> ${s.tempo}</p>
                        <p><strong>Mood/Tone:</strong> ${s.moodTone}</p>
                        <p><strong>Placement Targeting:</strong> ${s.placementType}</p>
                    </div>
                    <div class="pg-break"></div>
                    <h1>Lyrics: ${s.title}</h1>
                    <pre>${s.fullLyrics}</pre>
                </body></html>
            `);
            win.document.close();
            win.focus();
            setTimeout(() => win.print(), 500);
        }

        // Filter functionality
        function runMasterFilter(field = null, val = null) {
            const query = document.getElementById('vault-search').value.toLowerCase();
            const genre = document.getElementById('genre-pull').value;
            const mood = document.getElementById('mood-pull').value;
            const tempo = document.getElementById('tempo-pull').value;

            const filtered = VAULT_DATA.filter(s => {
                const textMatch = !query || [s.title, s.tags, s.category, s.shortDescription].some(f => f.toLowerCase().includes(query));
                const genreMatch = !genre || s.genre1 === genre || s.genre2 === genre;
                const moodMatch = !mood || s.moodTone.includes(mood);
                const tempoMatch = !tempo || s.tempo === tempo;
                const fieldMatch = !field || s[field].includes(val);
                return textMatch && genreMatch && moodMatch && tempoMatch && fieldMatch;
            });
            renderVault(filtered);
        }

        function openVaultPlayer(id) {
            const s = VAULT_DATA.find(x => x.id === id);
            document.getElementById('modal-song-title').innerText = s.title;
            document.getElementById('modal-song-lyrics').innerText = s.fullLyrics;
            document.getElementById('modal-song-audio').src = `/assets/music/${s.title.toLowerCase().replace(/ /g, '-')}-audio.mp3`;
            document.getElementById('vault-modal').classList.replace('hidden', 'flex');
        }

        function closeVaultModal() { document.getElementById('vault-modal').classList.replace('flex', 'hidden'); document.getElementById('modal-song-audio').pause(); }
        function clearVaultFilters() { document.querySelectorAll('select').forEach(sel => sel.value = ''); document.getElementById('vault-search').value = ''; renderVault(VAULT_DATA); }

        // Back to top scroll observer
        window.onscroll = () => document.getElementById('back-to-top').style.display = (window.scrollY > 500) ? 'block' : 'none';
        
        document.getElementById('vault-search').addEventListener('input', runMasterFilter);
        renderVault(VAULT_DATA); // Initial render showing all 44 cards
    </script>
</body>
</html>
