<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault - Verse and Chorus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --burgundy: #4c0519;
            --gold: #c5a059;
            --dark-bg: #0a0a0a;
            --card-bg: #161616;
            --sunset-orange: #f97316;
        }
        body { background-color: var(--dark-bg); color: #f4f4f4; font-family: 'Inter', sans-serif; margin: 0; }
        
        header { background-color: var(--burgundy); padding: 30px; text-align: center; border-bottom: 2px solid var(--gold); }
        .logo-main { font-size: 2.5rem; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; color: white; }
        .logo-main span { color: var(--gold); }
        
        footer { background-color: var(--burgundy); padding: 50px 20px; text-align: center; border-top: 2px solid var(--gold); margin-top: 60px; }
        .footer-name { font-size: 1.8rem; color: var(--gold); font-weight: bold; }

        .song-card { background: var(--card-bg); border: 1px solid #27272a; border-radius: 12px; transition: all 0.3s ease; display: flex; flex-direction: column; height: 100%; }
        .song-card:hover { border-color: var(--gold); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        
        /* Gold & Underlined Hyperlink Titles */
        .song-card-title { color: var(--gold) !important; text-decoration: underline !important; font-weight: 900; text-transform: uppercase; cursor: pointer; }
        .song-card-title:hover { color: white !important; }

        .filter-section { background: #121212; border: 1px solid #333; border-radius: 12px; padding: 25px; margin-bottom: 40px; }
        .filter-btn { background: #222; border: 1px solid #444; color: #aaa; padding: 8px 16px; border-radius: 8px; font-size: 0.8rem; transition: 0.2s; cursor: pointer; font-weight: bold; }
        .filter-btn:hover, .filter-btn.active { background: var(--sunset-orange); color: white; border-color: var(--sunset-orange); }

        /* Modal Styles */
        #lyricsModal { background: rgba(0,0,0,0.95); }
        .modal-content { background: #1a1a1a; border: 1px solid #333; border-radius: 16px; max-width: 850px; width: 95%; max-height: 85vh; overflow-y: auto; padding: 40px; }

        /* Remove Audio Download Controls */
        audio::-internal-media-controls-download-button { display:none; }
        audio::-webkit-media-controls-enclosure { overflow:hidden; }
        audio::-webkit-media-controls-panel { width: calc(100% + 30px); }

        @media print { .no-print { display: none !important; } }
    </style>
</head>
<body>

<header class="no-print">
    <div class="logo-main">VERSE <span>&</span> CHORUS</div>
    <div class="tracking-[4px] uppercase text-[0.8rem] text-[#c5a059] mt-2">Industry Pro Vault</div>
</header>

<main class="max-w-7xl mx-auto px-6 py-12 no-print">
    
    <section class="bg-black/40 border border-gold/20 p-8 rounded-xl mb-12 shadow-2xl">
        <h2 class="text-[#c5a059] text-2xl font-bold mb-6">Welcome to the Vault</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-[13px] text-gray-400">
            <p><strong class="text-white">✅ Human-Authored Lyrics:</strong> 100% human-authored by **Kellie Larson** and registered via Songbay.</p>
            <p><strong class="text-white">✅ Zero Future AI Royalties:</strong> Production companies never owe mechanical or performance royalties to AI platform owners.</p>
            <p><strong class="text-white">✅ Licensing Proof:</strong> All assets are pre-cleared for development. Proof of License (PoC) available instantly upon request.</p>
            <p><strong class="text-white">✅ Search Integrity:</strong> This engine scans all metadata including full lyrics, SEO keywords, hashtags, and POV.</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-bold text-white mb-6 uppercase tracking-widest border-b border-gray-800 pb-2">Core Themes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <button onclick="setSearch('Dark / Narrative')" class="bg-gray-900 border-2 border-gray-800 p-8 rounded-lg hover:border-orange-500 transition font-bold uppercase tracking-tight text-gold">Dark / Narrative</button>
            <button onclick="setSearch('Introspection')" class="bg-gray-900 border-2 border-gray-800 p-8 rounded-lg hover:border-orange-500 transition font-bold uppercase tracking-tight text-gold">Introspection</button>
            <button onclick="setSearch('Love / Loss')" class="bg-gray-900 border-2 border-gray-800 p-8 rounded-lg hover:border-orange-500 transition font-bold uppercase tracking-tight text-gold">Love / Loss</button>
        </div>
    </section>

    <div class="filter-section">
        <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-bold mb-4">Primary Writing Styles</h3>
        <div class="flex flex-wrap gap-2 mb-8">
            <button class="filter-btn" onclick="setSearch('Cinematic Narrative')">Cinematic Narrative</button>
            <button class="filter-btn" onclick="setSearch('Commercial Sync')">Commercial Sync</button>
            <button class="filter-btn" onclick="setSearch('Emotional Ballads')">Emotional Ballads</button>
            <button class="filter-btn" onclick="setSearch('Country Pop')">Country Pop</button>
            <button class="filter-btn" onclick="setSearch('Rock / Alt')">Rock / Alt Jams</button>
            <button class="filter-btn" onclick="setSearch('Vengeance / Empowerment')">Vengeance / Empowerment</button>
        </div>

        <input type="text" id="searchBar" placeholder="Search POV, Mood, Lyrics, Hashtags (e.g. #girlenergy, antagonist, country pop)..." 
               class="w-full bg-black border border-gray-700 rounded-lg p-5 outline-none text-white focus:border-orange-500 transition-all shadow-inner">
    </div>

    <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="col-span-full text-center py-20 text-gray-600">Initializing Vault tracks...</div>
    </div>
</main>

<div id="lyricsModal" class="fixed inset-0 z-50 hidden flex justify-center items-center p-4 backdrop-blur-sm no-print">
    <div class="modal-content relative shadow-2xl">
        <button onclick="closeModal()" class="absolute top-6 right-6 text-gray-500 hover:text-white text-2xl">✕</button>
        <h2 id="mTitle" class="text-3xl font-black text-orange-500 mb-2 uppercase tracking-tight"></h2>
        <div id="mMeta" class="text-[10px] text-gray-500 mb-8 uppercase tracking-widest border-b border-gray-800 pb-4"></div>
        
        <div class="mb-8 bg-black p-5 rounded-xl border border-gray-800">
            <p class="text-[9px] text-gray-600 mb-3 uppercase font-black">AI Placement Sample (No Download)</p>
            <audio id="mAudio" controls controlsList="nodownload" class="w-full"></audio>
        </div>
        
        <h4 class="text-xs font-bold text-gray-600 mb-4 uppercase tracking-widest">Full Lyrics</h4>
        <pre id="mLyrics" class="whitespace-pre-wrap text-gray-300 text-sm leading-relaxed bg-black p-8 rounded-lg border border-gray-800 font-serif"></pre>
        
        <button onclick="closeModal()" class="mt-8 w-full bg-red-950 py-4 rounded-lg font-black text-xs uppercase tracking-widest hover:bg-red-900 transition">Exit Player</button>
    </div>
</div>

<footer class="no-print">
    <div class="footer-name">Kellie Larson</div>
    <div class="footer-title">Cinematic Songwriter and Lyricist</div>
    <div class="flex flex-wrap justify-center gap-8 text-xs text-gray-400 mt-6 pt-6 border-t border-gray-900">
        <span>760-537-0222</span>
        <span>info@verseandchorus.com</span>
        <span>&copy; 2025 Verse and Chorus</span>
    </div>
</footer>

<script>
    // Instruction-based Title Updates
    const titleUpdates = { "Tick Tok": "The Real Dream Team", "Hubba Bubba song": "Heartbreak and Trouble", "Just": "Just A Little Lonely", "Too Much": "Just Too Much", "Fury": "Fury (I'm the Monster)", "When Misty Cries": "Your Forever Man", "Miss Your Stupid Face": "Etched in Every Space", "Sick One": "Sick One (s1c)", "Not Clever": "I Know Your Damn Pin Code", "Boys Boys Boys": "CEO NOT A BABYSITTING TREE" };

    let songData = [];

    async function initVault() {
        try {
            const response = await fetch('lyrics.json');
            songData = await response.json();
            
            songData = songData.map(s => ({ 
                ...s, 
                title: titleUpdates[s.title] || s.title,
                fullLyrics: s.fullLyrics ? s.fullLyrics.replace(/ \/ /g, '\n').replace(/\//g, '\n') : "Placeholder Lyrics."
            }));
            
            render(songData); // Cards show by default
        } catch (e) {
            console.error(e);
            document.getElementById('catalog-grid').innerHTML = `<div class="col-span-full text-center py-20 text-red-500 font-bold uppercase">Critical: lyrics.json not found in website directory.</div>`;
        }
    }

    function render(songs) {
        const grid = document.getElementById('catalog-grid');
        grid.innerHTML = songs.map(s => `
            <div class="song-card p-6">
                <div class="flex-grow">
                    <h3 class="text-xl song-card-title mb-4" onclick="window.open('${s.songbayWebpageUrl}', '_blank')">${s.title}</h3>
                    <div class="grid grid-cols-2 gap-y-3 mb-6 text-[10px] text-gray-500 uppercase font-black">
                        <div><span class="text-gray-700 block text-[8px]">Genre</span> ${s.genre1} / ${s.genre2}</div>
                        <div><span class="text-gray-700 block text-[8px]">Mood / Feeling</span> ${s.moodTone}</div>
                        <div><span class="text-gray-700 block text-[8px]">POV</span> ${s.pov}</div>
                        <div><span class="text-gray-700 block text-[8px]">Tempo</span> ${s.tempo}</div>
                    </div>
                    <p class="text-xs text-gray-400 italic border-l-2 border-gray-800 pl-3 mb-6">"${s.shortDescription}"</p>
                    <div class="text-[9px] text-orange-950 font-black uppercase mb-6 bg-orange-950/20 px-2 py-1 rounded inline-block tracking-widest">A&R: ${s.placementType}</div>
                </div>
                <div class="flex gap-2">
                    <button onclick="openModal(${s.id})" class="flex-1 bg-orange-600 hover:bg-orange-500 text-white font-black py-3 rounded-lg text-[10px] uppercase shadow-lg transition">Read Now / Play</button>
                    <button onclick="printSong(${s.id})" class="px-4 border border-gray-800 rounded-lg text-gray-600 hover:bg-gray-900 transition">🖨️</button>
                </div>
            </div>
        `).join('');
    }

    function openModal(id) {
        const s = songData.find(x => x.id === id);
        document.getElementById('mTitle').innerText = s.title;
        document.getElementById('mMeta').innerText = `${s.genre1} | ${s.moodTone} | ${s.placementType}`;
        document.getElementById('mAudio').src = s.audioUrl;
        document.getElementById('mLyrics').innerText = s.fullLyrics;
        document.getElementById('lyricsModal').classList.remove('hidden');
        document.getElementById('lyricsModal').classList.add('flex');
    }

    function closeModal() {
        document.getElementById('lyricsModal').classList.remove('flex');
        document.getElementById('lyricsModal').classList.add('hidden');
        document.getElementById('mAudio').pause();
    }

    // Professional TWO-PAGE Print Function
    function printSong(id) {
        const s = songData.find(x => x.id === id);
        const win = window.open('', '_blank');
        win.document.write(`
            <html>
            <head><style>
                body { font-family: sans-serif; padding: 0; margin: 0; color: #111; }
                header { background: #4c0519; color: white; padding: 30px; text-align: center; border-bottom: 5px solid #c5a059; }
                footer { background: #4c0519; color: white; padding: 20px; text-align: center; border-top: 5px solid #c5a059; position: fixed; bottom: 0; width: 100%; font-size: 10px; }
                .content { padding: 60px; }
                .page-break { page-break-after: always; }
                h2 { color: #4c0519; border-bottom: 2px solid #ddd; padding-bottom: 10px; text-transform: uppercase; margin-bottom: 30px; }
                .meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; font-size: 13px; margin: 40px 0; }
                pre { white-space: pre-wrap; font-family: serif; font-size: 16px; line-height: 1.8; background: #f9f9f9; padding: 30px; border-radius: 12px; }
                .legal-notice { margin-top: 60px; font-size: 12px; color: #555; line-height: 1.6; border-top: 1px solid #eee; padding-top: 20px; }
            </style></head>
            <body>
                <div class="page-break">
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>Song Profile: ${s.title}</h2>
                        <p><strong>Copyright:</strong> ${s.copyright} | <strong>Year:</strong> ${s.year}</p>
                        <div class="meta-grid">
                            <div><strong>Genre:</strong> ${s.genre1} / ${s.genre2}</div>
                            <div><strong>Mood/Feeling:</strong> ${s.moodTone}</div>
                            <div><strong>Placement:</strong> ${s.placementType}</div>
                            <div><strong>POV:</strong> ${s.pov}</div>
                        </div>
                        <p><strong>Long Description:</strong><br>${s.longDescription}</p>
                        <div class="legal-notice">
                            <h3>Thank You / Licensing Information</h3>
                            <p>Thank you for requesting this professional synchronization asset from Verse and Chorus. These lyrics are 100% human-authored by Kellie Larson. Demos are royalty-free. Re-recording creates a fully human-authored derivative work under traditional copyright.</p>
                            <p><strong>For licensing, please visit:</strong> ${s.songbayWebpageUrl}</p>
                        </div>
                    </div>
                    <footer>Kellie Larson | Cinematic Songwriter and Lyricist | 760-537-0222</footer>
                </div>
                <div>
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>${s.title} - Full Lyrics</h2>
                        <pre>${s.fullLyrics}</pre>
                    </div>
                    <footer>© 2025 Verse and Chorus | info@verseandchorus.com</footer>
                </div>
            </body></html>
        `);
        win.document.close();
        setTimeout(() => win.print(), 500);
    }

    function setSearch(val) {
        document.getElementById('searchBar').value = val;
        document.getElementById('searchBar').dispatchEvent(new Event('input'));
    }

    document.getElementById('searchBar').addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase().trim();
        const filtered = songData.filter(s => {
            const blob = `${s.title} ${s.genre1} ${s.genre2} ${s.moodTone} ${s.pov} ${s.placementType} ${s.fullLyrics} ${s.shortDescription} ${s.longDescription} ${s.keywords.join(' ')} ${s.hashtags.join(' ')}`.toLowerCase();
            return blob.includes(term);
        });
        render(filtered);
    });

    window.onload = initVault;
</script>
</body>
</html>
