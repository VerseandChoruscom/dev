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

        /* Thematic Rectangles */
        .theme-card-rect { background: #1a1a1a; border: 2px solid #333; padding: 40px; border-radius: 12px; transition: 0.3s; cursor: pointer; text-align: center; }
        .theme-card-rect:hover { border-color: var(--gold); background: #222; transform: translateY(-3px); }

        .song-card { background: var(--card-bg); border: 1px solid #27272a; border-radius: 12px; transition: all 0.3s ease; display: flex; flex-direction: column; height: 100%; }
        .song-card:hover { border-color: var(--gold); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        
        /* Gold Underlined Hyperlink Titles */
        .song-card-title { color: var(--gold) !important; text-decoration: underline !important; font-weight: 900; text-transform: uppercase; cursor: pointer; }
        .song-card-title:hover { color: white !important; }

        .filter-section { background: #121212; border: 1px solid #333; border-radius: 12px; padding: 25px; margin-bottom: 40px; }
        .filter-btn { background: #222; border: 1px solid #444; color: #aaa; padding: 10px 18px; border-radius: 8px; font-size: 0.8rem; transition: 0.2s; cursor: pointer; font-weight: bold; }
        .filter-btn:hover, .filter-btn.active { background: var(--sunset-orange); color: white; border-color: var(--sunset-orange); }

        /* Audio Protection */
        audio::-internal-media-controls-download-button { display:none; }
        audio::-webkit-media-controls-enclosure { overflow:hidden; }
        audio::-webkit-media-controls-panel { width: calc(100% + 30px); }

        #lyricsModal { background: rgba(0,0,0,0.95); }
        .modal-content { background: #1a1a1a; border: 1px solid #333; border-radius: 16px; max-width: 850px; width: 95%; max-height: 85vh; overflow-y: auto; padding: 40px; }

        @media print { .no-print { display: none !important; } }
    </style>
</head>
<body>

<header class="no-print">
    <div class="logo-main">VERSE <span>&</span> CHORUS</div>
    <div class="tracking-[4px] uppercase text-[0.8rem] text-[#c5a059] mt-2">Industry Pro Vault</div>
</header>

<main class="max-w-7xl mx-auto px-6 py-12 no-print">
    
    <section class="mb-12">
        <h2 class="text-xl font-bold text-white mb-6 uppercase tracking-widest border-b border-gray-800 pb-2">Core Themes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div onclick="setSearch('Cinematic Narrative')" class="theme-card-rect">
                <h4 class="text-gold font-black uppercase text-lg">Cinematic Narrative</h4>
                <p class="text-gray-500 text-xs mt-2 uppercase tracking-tighter leading-tight">Story-driven songs focusing on betrayal and dark arcs.</p>
            </div>
            <div onclick="setSearch('Commercial Sync')" class="theme-card-rect">
                <h4 class="text-gold font-black uppercase text-lg">Commercial Sync</h4>
                <p class="text-gray-500 text-xs mt-2 uppercase tracking-tighter leading-tight">Upbeat, catchy tracks for advertisements and viral sync.</p>
            </div>
            <div onclick="setSearch('Emotional Ballads')" class="theme-card-rect">
                <h4 class="text-gold font-black uppercase text-lg">Emotional Ballads</h4>
                <p class="text-gray-500 text-xs mt-2 uppercase tracking-tighter leading-tight">Raw, deeply moving songs exploring human vulnerability.</p>
            </div>
        </div>
    </section>

    <div class="filter-section">
        <div class="mb-10">
            <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-bold mb-4">Primary Writing Styles</h3>
            <div class="flex flex-wrap gap-2">
                <button class="filter-btn" onclick="setSearch('Country Pop')">Country Pop</button>
                <button class="filter-btn" onclick="setSearch('Punk')">Punk</button>
                <button class="filter-btn" onclick="setSearch('Cyberpunk')">Cyberpunk</button>
                <button class="filter-btn" onclick="setSearch('Introspection')">Introspection</button>
                <button class="filter-btn" onclick="setSearch('Love / Loss')">Love / Loss</button>
                <button class="filter-btn" onclick="setSearch('Rock / Alt')">Rock / Alt Jams</button>
            </div>
        </div>

        <div class="mb-10">
            <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-bold mb-4">Feelings & Mood Filters</h3>
            <div class="flex flex-wrap gap-2">
                <button class="filter-btn" onclick="setSearch('Happy')">Happy</button>
                <button class="filter-btn" onclick="setSearch('Sad')">Sad</button>
                <button class="filter-btn" onclick="setSearch('Mad')">Mad</button>
                <button class="filter-btn" onclick="setSearch('Angry')">Angry</button>
                <button class="filter-btn" onclick="setSearch('Defiant')">Defiant</button>
                <button class="filter-btn" onclick="setSearch('Introspective')">Introspective</button>
                <button class="filter-btn" onclick="setSearch('Hate')">Hate</button>
                <button class="filter-btn" onclick="setSearch('Jealousy')">Jealousy</button>
                <button class="filter-btn" onclick="setSearch('Envy')">Envy</button>
                <button class="filter-btn" onclick="setSearch('Longing')">Longing</button>
                <button class="filter-btn" onclick="setSearch('Heartbreak')">Heartbreak</button>
            </div>
        </div>

        <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-bold mb-4 text-center">Global Deep Search (SEO, Keywords, Lyrics)</h3>
        <input type="text" id="searchBar" placeholder="Search Keywords, POV, Lyrics, #Hashtags (e.g. antagonist, #girlenergy, vengeful)..." 
               class="w-full bg-black border border-gray-700 rounded-lg p-5 outline-none text-white focus:border-orange-500 transition-all shadow-inner">
        <div class="mt-4 text-center">
            <button onclick="setSearch('')" class="text-[9px] text-gray-600 uppercase font-bold hover:text-white">Reset Catalog</button>
            <p class="text-[8px] text-gray-700 mt-2 uppercase">Search engine scans 44 tracks across all metadata fields including keywords and full lyrics.</p>
        </div>
    </div>

    <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
</main>

<div id="lyricsModal" class="fixed inset-0 z-50 hidden flex justify-center items-center p-4 backdrop-blur-sm no-print">
    <div class="modal-content relative shadow-2xl">
        <button onclick="closeModal()" class="absolute top-6 right-6 text-gray-500 hover:text-white text-2xl">✕</button>
        <h2 id="mTitle" class="text-3xl font-black text-orange-500 mb-2 uppercase tracking-tight"></h2>
        <div id="mMeta" class="text-[10px] text-gray-500 mb-8 uppercase tracking-widest border-b border-gray-800 pb-4"></div>
        <div class="mb-8 bg-black p-5 rounded-xl border border-gray-800">
            <p class="text-[9px] text-gray-600 mb-3 uppercase font-black tracking-widest">Audio Player (No Download Available)</p>
            <audio id="mAudio" controls controlsList="nodownload" class="w-full"></audio>
        </div>
        <h4 class="text-xs font-bold text-gray-600 mb-4 uppercase tracking-widest">Full Lyrics</h4>
        <pre id="mLyrics" class="whitespace-pre-wrap text-gray-300 text-sm leading-relaxed bg-black p-8 rounded-lg border border-gray-800 font-serif"></pre>
        <button onclick="closeModal()" class="mt-8 w-full bg-red-950 py-4 rounded-lg font-black text-xs uppercase tracking-widest">Close Vault</button>
    </div>
</div>

<footer>
    <div class="footer-name">Kellie Larson</div>
    <div class="footer-title italic">Cinematic Songwriter and Lyricist</div>
    <div class="flex flex-wrap justify-center gap-8 text-xs text-gray-400 mt-6 pt-6 border-t border-gray-900">
        <span>760-537-0222</span>
        <span>info@verseandchorus.com</span>
        <span>&copy; 2025 Verse and Chorus</span>
    </div>
</footer>

<script>
    const titleUpdates = { "Tick Tok": "The Real Dream Team", "Hubba Bubba song": "Heartbreak and Trouble", "Just": "Just A Little Lonely", "Too Much": "Just Too Much", "Fury": "Fury (I'm the Monster)", "When Misty Cries": "Your Forever Man", "Miss Your Stupid Face": "Etched in Every Space", "Sick One": "Sick One (s1c)", "Not Clever": "I Know Your Damn Pin Code", "Boys Boys Boys": "CEO NOT A BABYSITTING TREE" };

    // HARDCODED DATA (All 44 extracted songs)
    let songData = [
        {"id":1,"title":"AUTHOR OF A LIE","artistWriter":"Kellie Larson","year":2025,"genre1":"Pop","genre2":"Hip-Hop","moodTone":"Anthemic, Confident, Determined, Energetic, Introspective","placementType":"Punchy Track / Commercial Sync","pov":"1st Person Female","shortDescription":"Rhythm-driven Pop/Hip-Hop fusion tracking the dismantling of a partner's false narrative.","longDescription":"\"Author of a Lie\" is a punchy, rhythm-driven track exploring gaslighting and deceit.","copyright":"© 2025 Kellie Larson Music","fullLyrics":"You tell a story, i pick it apart\nYour timeline is whacked, you're playing a part...","audioUrl":"/assets/music/author-of-a-lie-audio.mp3","songbayWebpageUrl":"https://songbay.co/view-music/235611415/","keywords":["Deceit","Lies","Gaslighting","Antagonist"],"hashtags":["#AuthorOfALie","#girlenergy"]},
        {"id":2,"title":"BIG HARD NO","artistWriter":"Kellie Larson","year":2025,"genre1":"Country Pop","genre2":"Contemporary Country","moodTone":"Anthemic, Confident, Determined, Introspective, Defiant","placementType":"Fiery Anthem / Potential Single","pov":"1st Person Female","shortDescription":"Compelling pop/country-rock crossover response to a past lover.","longDescription":"Fiery anthem of empowerment with an unapologetic message of self-worth.","copyright":"© 2025 Kellie Larson Music","fullLyrics":"'Cause that's a big hard NO, not playing your game!\nNothing you could whisper can ever douse this flame...","audioUrl":"/assets/music/big-hard-no-audio.mp3","songbayWebpageUrl":"https://songbay.co/view-music/235609978/","keywords":["Empowerment","Defiance","Protagonist"],"hashtags":["#BigHardNO","#CountryPop","#girlenergy"]}
        /* Note: Paste all remaining track blocks from your extracted catalog here for the full 44+ songs. */
    ];

    function render(songs) {
        const grid = document.getElementById('catalog-grid');
        grid.innerHTML = songs.map(s => `
            <div class="song-card p-6">
                <div class="flex-grow">
                    <h3 class="text-xl song-card-title mb-4" onclick="window.open('${s.songbayWebpageUrl}', '_blank')">${titleUpdates[s.title] || s.title}</h3>
                    <div class="grid grid-cols-2 gap-y-3 mb-6 text-[10px] text-gray-500 uppercase font-black">
                        <div><span class="text-gray-700 block text-[8px]">Genre</span> ${s.genre1} / ${s.genre2}</div>
                        <div><span class="text-gray-700 block text-[8px]">Mood</span> ${s.moodTone}</div>
                        <div><span class="text-gray-700 block text-[8px]">POV</span> ${s.pov}</div>
                        <div><span class="text-gray-700 block text-[8px]">Placement</span> ${s.placementType}</div>
                    </div>
                    <p class="text-xs text-gray-400 italic border-l-2 border-gray-800 pl-3 mb-6 line-clamp-4">"${s.shortDescription}"</p>
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
        const displayTitle = titleUpdates[s.title] || s.title;
        document.getElementById('mTitle').innerText = displayTitle;
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

    function printSong(id) {
        const s = songData.find(x => x.id === id);
        const displayTitle = titleUpdates[s.title] || s.title;
        const win = window.open('', '_blank');
        win.document.write(`
            <html><head><style>
                body { font-family: sans-serif; padding: 0; margin: 0; color: #111; }
                header { background: #4c0519; color: white; padding: 30px; text-align: center; border-bottom: 5px solid #c5a059; }
                footer { background: #4c0519; color: white; padding: 20px; text-align: center; border-top: 5px solid #c5a059; position: fixed; bottom: 0; width: 100%; font-size: 10px; }
                .content { padding: 60px; }
                .page-break { page-break-after: always; }
                pre { white-space: pre-wrap; font-size: 16px; line-height: 1.8; background: #f9f9f9; padding: 30px; border-radius: 12px; font-family: serif; }
            </style></head>
            <body>
                <div class="page-break">
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>Profile: ${displayTitle}</h2>
                        <p><strong>Copyright:</strong> ${s.copyright} | <strong>Writer:</strong> Kellie Larson</p>
                        <p><strong>A&R Sync Description:</strong><br>${s.longDescription}</p>
                        <p><strong>Industry Placement:</strong> ${s.placementType}</p>
                        <div style="background:#f9f9f9; padding: 30px; border: 1px solid #eee; margin-top: 40px;">
                            <h3>Legal Terms / Thank You</h3>
                            <p>Thank you for requesting this professional synchronization asset from Verse and Chorus. Proof of License available on request.</p>
                            <p><strong>License Link:</strong> ${s.songbayWebpageUrl}</p>
                        </div>
                    </div>
                    <footer>Kellie Larson | Cinematic Songwriter | 760-537-0222</footer>
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
            const blob = `${s.title} ${s.genre1} ${s.genre2} ${s.moodTone} ${s.pov} ${s.placementType} ${s.fullLyrics} ${s.shortDescription} ${s.longDescription} ${kwStr} ${htStr}`.toLowerCase();
            return blob.includes(term);
        });
        render(filtered);
    });

    window.onload = () => render(songData); // SHOW ALL BY DEFAULT
</script>
</body>
</html>
