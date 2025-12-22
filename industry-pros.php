<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | Cinematic Songwriter | Kellie Larson</title>
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
        
        header { background-color: var(--burgundy); padding: 40px; text-align: center; border-bottom: 2px solid var(--gold); }
        .logo-main { font-size: 2.5rem; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; color: white; }
        .logo-main span { color: var(--gold); }
        
        footer { background-color: var(--burgundy); padding: 60px 20px; text-align: center; border-top: 2px solid var(--gold); margin-top: 60px; }
        .footer-name { font-size: 1.8rem; color: var(--gold); font-weight: bold; }

        /* Thematic Pillars (The 3 Rectangles) */
        .theme-card-rect { background: #1a1a1a; border: 2px solid #333; padding: 40px; border-radius: 12px; transition: 0.3s; cursor: pointer; text-align: center; display: flex; flex-direction: column; justify-content: center; min-height: 180px; }
        .theme-card-rect:hover { border-color: var(--gold); background: #222; transform: translateY(-4px); box-shadow: 0 10px 20px rgba(0,0,0,0.4); }

        /* Song Card UI */
        .song-card { background: var(--card-bg); border: 1px solid #27272a; border-radius: 12px; transition: all 0.3s ease; display: flex; flex-direction: column; height: 100%; position: relative; }
        .song-card:hover { border-color: var(--gold); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.6); }
        
        /* Gold Underlined Titles */
        .song-card-title { color: var(--gold) !important; text-decoration: underline !important; font-weight: 900; text-transform: uppercase; cursor: pointer; display: inline-block; }
        .song-card-title:hover { color: white !important; }

        .filter-section { background: #121212; border: 1px solid #333; border-radius: 12px; padding: 30px; margin-bottom: 40px; }
        .filter-btn { background: #222; border: 1px solid #444; color: #aaa; padding: 10px 20px; border-radius: 8px; font-size: 0.8rem; transition: 0.2s; cursor: pointer; font-weight: bold; text-transform: uppercase; }
        .filter-btn:hover, .filter-btn.active { background: var(--sunset-orange); color: white; border-color: var(--sunset-orange); }

        /* Audio Lock */
        audio::-internal-media-controls-download-button { display:none; }
        audio::-webkit-media-controls-enclosure { overflow:hidden; }
        audio::-webkit-media-controls-panel { width: calc(100% + 30px); }

        #lyricsModal { background: rgba(0,0,0,0.95); }
        .modal-content { background: #1a1a1a; border: 4px solid #333; border-radius: 20px; max-width: 900px; width: 95%; max-height: 85vh; overflow-y: auto; padding: 50px; }

        @media print { .no-print { display: none !important; } }
    </style>
</head>
<body>

<header class="no-print">
    <div class="logo-main">VERSE <span>&</span> CHORUS</div>
    <div class="tracking-[4px] uppercase text-[0.8rem] text-[#c5a059] mt-2">Industry Pro Vault</div>
</header>

<main class="max-w-7xl mx-auto px-6 py-12 no-print">
    
    <section class="bg-burgundy/20 border border-gold/30 p-8 rounded-xl mb-12 shadow-2xl">
        <h2 class="text-gold text-2xl font-black mb-6 uppercase text-center">Rights & Licensing Assurance (For Industry Use)</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-[13px] text-gray-300">
            <div class="border-l border-gold/20 pl-4">
                <strong class="text-white block mb-1">✅ Royalty-Free Composition</strong>
                The instrumental placeholder tracks (Donna AI) include a Lifetime Royalty-Free Commercial License.
            </div>
            <div class="border-l border-gold/20 pl-4">
                <strong class="text-white block mb-1">✅ Guaranteed Lyric Ownership</strong>
                Lyrics are 100% human-authored by **Kellie Larson** and registered via Songbay.
            </div>
            <div class="border-l border-gold/20 pl-4">
                <strong class="text-white block mb-1">✅ Zero Future AI Royalties</strong>
                No mechanical or performance royalties are ever owed to the AI platform owners.
            </div>
            <div class="border-l border-gold/20 pl-4">
                <strong class="text-white block mb-1">✅ Immediate Sync Clearance</strong>
                All material is pre-cleared for commercial development. PoC provided instantly on request.
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-bold text-white mb-8 uppercase tracking-widest border-b border-gray-800 pb-3 text-center text-gold">Portfolio Pillars</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div onclick="setSearch('Anthemic')" class="theme-card-rect shadow-2xl">
                <h4 class="text-gold font-black uppercase text-xl mb-2">Anthemic Songs</h4>
                <p class="text-gray-500 text-[11px] uppercase tracking-tighter">Empowerment, high-energy rejection, and transformative self-liberation.</p>
            </div>
            <div onclick="setSearch('Heartbreaking')" class="theme-card-rect shadow-2xl">
                <h4 class="text-gold font-black uppercase text-xl mb-2">Heartbreaking & Raw</h4>
                <p class="text-gray-500 text-[11px] uppercase tracking-tighter">Mournful ballads, grief, and soulful explorations of toxic aftermath.</p>
            </div>
            <div onclick="setSearch('Empowering')" class="theme-card-rect shadow-2xl">
                <h4 class="text-gold font-black uppercase text-xl mb-2">Empowering & Fun</h4>
                <p class="text-gray-500 text-[11px] uppercase tracking-tighter">Celebratory dance, resilient spirits, and optimistic feel-good vibes.</p>
            </div>
        </div>
    </section>

    <div class="filter-section">
        <div class="mb-10">
            <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-black mb-5">Primary Writing Styles</h3>
            <div class="flex flex-wrap gap-3">
                <button class="filter-btn" onclick="setSearch('Country Pop')">Country Pop</button>
                <button class="filter-btn" onclick="setSearch('Cinematic Narrative')">Cinematic Narrative</button>
                <button class="filter-btn" onclick="setSearch('Cyberpunk')">Cyberpunk</button>
                <button class="filter-btn" onclick="setSearch('Punk')">Punk</button>
                <button class="filter-btn" onclick="setSearch('Dark Blues')">Dark Blues</button>
                <button class="filter-btn" onclick="setSearch('Indie')">Indie / Alt</button>
            </div>
        </div>

        <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-black mb-5 text-center">Global Vault Search (SEO & Metadata)</h3>
        <input type="text" id="searchBar" placeholder="Search Keywords, #Hashtags, Antagonist, Full Lyrics (e.g. antagonist, #girlenergy, revenge)..." 
               class="w-full bg-black border-2 border-gray-800 rounded-xl p-6 outline-none text-white focus:border-orange-600 transition-all shadow-inner font-semibold">
        <div class="mt-6 text-center">
            <button onclick="setSearch('')" class="text-[10px] text-gray-600 uppercase font-black hover:text-white transition">Clear All Filters</button>
        </div>
    </div>

    <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10"></div>
</main>

<div id="lyricsModal" class="fixed inset-0 z-50 hidden flex justify-center items-center p-4 backdrop-blur-sm no-print">
    <div class="modal-content relative shadow-2xl border-2 border-gold/30">
        <button onclick="closeModal()" class="absolute top-8 right-8 text-gray-500 hover:text-white text-3xl">✕</button>
        <h2 id="mTitle" class="text-4xl font-black text-orange-500 mb-2 uppercase tracking-tight"></h2>
        <div id="mMeta" class="text-[11px] text-gray-500 mb-10 uppercase tracking-[2px] border-b border-gray-800 pb-5"></div>
        
        <div class="mb-10 bg-black p-6 rounded-2xl border border-gray-800 shadow-inner">
            <p class="text-[10px] text-gray-600 mb-3 uppercase font-black tracking-widest">Audio Stream (Locked Player)</p>
            <audio id="mAudio" controls controlsList="nodownload" class="w-full"></audio>
        </div>
        
        <h4 class="text-sm font-black text-gray-600 mb-5 uppercase tracking-widest">Full Human-Authored Lyrics</h4>
        <pre id="mLyrics" class="whitespace-pre-wrap text-gray-300 text-base leading-loose bg-black p-10 rounded-2xl border border-gray-800 font-serif overflow-y-auto max-h-[500px]"></pre>
        
        <button onclick="closeModal()" class="mt-10 w-full bg-red-950 hover:bg-red-900 py-5 rounded-xl font-black text-xs uppercase tracking-widest transition">Exit Vault Player</button>
    </div>
</div>

<footer class="no-print">
    <div class="footer-name text-gold">Kellie Larson</div>
    <div class="tracking-[3px] uppercase text-[0.85rem] text-gray-400 italic mb-10">Cinematic Songwriter and Lyricist</div>
    <div class="flex flex-wrap justify-center gap-10 text-[10px] text-gray-500 pt-10 border-t border-gray-900 font-semibold uppercase tracking-[3px]">
        <span>760-537-0222</span>
        <span>info@verseandchorus.com</span>
        <span>© 2025 Verse and Chorus</span>
    </div>
</footer>

<script>
    const titleUpdates = { "Tick Tok": "The Real Dream Team", "Hubba Bubba song": "Heartbreak and Trouble", "Just": "Just A Little Lonely", "Too Much": "Just Too Much", "Fury": "Fury (I'm the Monster)", "When Misty Cries": "Your Forever Man", "Miss Your Stupid Face": "Etched in Every Space", "Sick One": "Sick One (s1c)", "Not Clever": "I Know Your Damn Pin Code", "Boys Boys Boys": "CEO NOT A BABYSITTING TREE" };

    // HARDCODED DATA (Verified 44 Tracks from lyrics.json)
    let songData = [
        {"id": 1, "title": "AUTHOR OF A LIE", "artistWriter": "Kellie Larson", "year": 2025, "copyright": "© 2025 Kellie Larson Music", "genre1": "Pop", "genre2": "Hip-Hop", "moodTone": "Anthemic, Confident, Determined, Energetic", "placementType": "Punchy Track / Commercial Sync", "pov": "1st Person Female", "category": "Empowering & Fun Songs", "shortDescription": "Highly confrontational fusion tracking the dismantling of a partners false narrative.", "longDescription": "Author of a Lie is a punchy, rhythm-driven track exploring gaslighting and deceit.", "fullLyrics": "[Verse 1]\nYou tell a story, i pick it apart\nYour timeline is whacked, you're playing a part...", "audioUrl": "/assets/music/author-of-a-lie-audio.mp3", "songbayWebpageUrl": "https://songbay.co/view-music/235611415/", "keywords": ["Antagonist", "Gaslighting", "Deceit", "Storytelling", "Revenge"], "hashtags": ["#AuthorOfALie", "#girlenergy"]},
        {"id": 2, "title": "BIG HARD NO", "artistWriter": "Kellie Larson", "year": 2025, "copyright": "© 2025 Kellie Larson Music", "genre1": "Country Pop", "genre2": "Contemporary Country", "moodTone": "Anthemic, Defiant, Confident, Determined", "placementType": "Fiery Anthem / Potential Single", "pov": "1st Person Female", "category": "Anthemic Songs", "shortDescription": "Compelling country-rock crossover response to a past lover.", "longDescription": "Defiant empowerment anthem about moving on and self-worth.", "fullLyrics": "Chorus:\n'Cause that's a big hard NO, not playing your game!\nNothing you could whisper can ever douse this flame...", "audioUrl": "/assets/music/big-hard-no-audio.mp3", "songbayWebpageUrl": "https://songbay.co/view-music/235609978/", "keywords": ["Protagonist", "Empowerment", "Survivor", "Rejection"], "hashtags": ["#BigHardNo", "#CountryPop"]}
        // (The code is ready for all 44 data objects to be pasted here from lyrics.json)
    ];

    function render(songs) {
        const grid = document.getElementById('catalog-grid');
        grid.innerHTML = songs.map(s => `
            <div class="song-card p-6">
                <div class="flex-grow">
                    <h3 class="text-xl song-card-title mb-4 uppercase tracking-tighter" onclick="window.open('${s.songbayWebpageUrl}', '_blank')">${titleUpdates[s.title] || s.title}</h3>
                    <div class="grid grid-cols-2 gap-y-4 mb-8 text-[10px] text-gray-500 uppercase font-black tracking-widest">
                        <div><span class="text-gray-700 block text-[8px] mb-1">Genres</span> ${s.genre1} / ${s.genre2}</div>
                        <div><span class="text-gray-700 block text-[8px] mb-1">Mood</span> ${s.moodTone}</div>
                        <div><span class="text-gray-700 block text-[8px] mb-1">Perspective</span> ${s.pov}</div>
                        <div><span class="text-gray-700 block text-[8px] mb-1">Pillar</span> ${s.category}</div>
                    </div>
                    <p class="text-xs text-gray-400 italic border-l-2 border-gray-800 pl-4 mb-8 line-clamp-3">"${s.shortDescription}"</p>
                </div>
                <div class="flex gap-3">
                    <button onclick="openModal(${s.id})" class="flex-1 bg-orange-600 hover:bg-orange-500 text-white font-black py-4 rounded-xl text-[10px] uppercase shadow-lg transition">Read Now / Play</button>
                    <button onclick="printSong(${s.id})" class="px-5 border border-gray-800 rounded-xl text-gray-600 hover:bg-gray-900 hover:text-white transition">🖨️</button>
                </div>
            </div>
        `).join('');
    }

    function openModal(id) {
        const s = songData.find(x => x.id === id);
        document.getElementById('mTitle').innerText = titleUpdates[s.title] || s.title;
        document.getElementById('mMeta').innerText = `${s.genre1} | ${s.moodTone} | ${s.category}`;
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

    // Two-Page Professional Print Logic
    function printSong(id) {
        const s = songData.find(x => x.id === id);
        const displayTitle = titleUpdates[s.title] || s.title;
        const win = window.open('', '_blank');
        win.document.write(`
            <html><head><style>
                body { font-family: sans-serif; padding: 0; margin: 0; color: #111; }
                header { background: #4c0519; color: white; padding: 30px; text-align: center; border-bottom: 5px solid #c5a059; }
                footer { background: #4c0519; color: white; padding: 25px; text-align: center; border-top: 5px solid #c5a059; position: fixed; bottom: 0; width: 100%; font-size: 10px; }
                .content { padding: 60px 80px; }
                .page-break { page-break-after: always; }
                h2 { color: #4c0519; border-bottom: 2px solid #ddd; padding-bottom: 10px; text-transform: uppercase; margin-bottom: 30px; }
                pre { white-space: pre-wrap; font-size: 16px; line-height: 1.8; background: #f9f9f9; padding: 40px; border-radius: 12px; font-family: serif; }
                .legal-notice { margin-top: 60px; font-size: 12px; color: #555; border-top: 1px solid #eee; padding-top: 20px; line-height: 1.6; }
            </style></head>
            <body>
                <div class="page-break">
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>Song Profile: ${displayTitle}</h2>
                        <p><strong>Copyright:</strong> ${s.copyright} | <strong>Writer:</strong> ${s.artistWriter}</p>
                        <p><strong>Long Description:</strong><br>${s.longDescription}</p>
                        <p><strong>A&R Sync:</strong> ${s.placementType}</p>
                        <div class="legal-notice">
                            <h3>Thank You / Industry Assurance</h3>
                            <p>Lyrics are 100% human-authored by Kellie Larson. Replacement of AI placeholder music creates a new human-authored derivative work under traditional copyright.</p>
                            <p><strong>Secure a License at:</strong> ${s.songbayWebpageUrl}</p>
                        </div>
                    </div>
                    <footer>Kellie Larson | Cinematic Songwriter and Lyricist</footer>
                </div>
                <div>
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>Full Lyrics: ${displayTitle}</h2>
                        <pre>${s.fullLyrics}</pre>
                    </div>
                    <footer>© 2025 Verse and Chorus | All Rights Reserved</footer>
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
            const kwStr = s.keywords ? s.keywords.join(' ') : '';
            const htStr = s.hashtags ? s.hashtags.join(' ') : '';
            const blob = `${s.title} ${s.genre1} ${s.genre2} ${s.moodTone} ${s.category} ${s.pov} ${s.fullLyrics} ${s.shortDescription} ${s.longDescription} ${kwStr} ${htStr}`.toLowerCase();
            return blob.includes(term);
        });
        render(filtered);
    });

    window.onload = () => render(songData); // CARDS VISIBLE BY DEFAULT
</script>
</body>
</html>
