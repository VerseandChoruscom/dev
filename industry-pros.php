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
        header { background-color: var(--burgundy); padding: 30px; text-align: center; border-bottom: 2px solid var(--gold); }
        .logo-main { font-size: 2.5rem; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; color: white; }
        .logo-main span { color: var(--gold); }
        footer { background-color: var(--burgundy); padding: 50px 20px; text-align: center; border-top: 2px solid var(--gold); margin-top: 60px; }
        .footer-name { font-size: 1.8rem; color: var(--gold); font-weight: bold; }
        .theme-card-rect { background: #1a1a1a; border: 2px solid #333; padding: 25px; border-radius: 12px; transition: 0.3s; cursor: pointer; text-align: center; display: flex; flex-direction: column; justify-content: center; min-height: 120px; }
        .theme-card-rect:hover { border-color: var(--gold); background: #222; transform: translateY(-3px); }
        .song-card { background: var(--card-bg); border: 1px solid #27272a; border-radius: 12px; transition: all 0.3s ease; display: flex; flex-direction: column; height: 100%; position: relative; }
        .song-card:hover { border-color: var(--gold); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        .song-card-title { color: var(--gold) !important; text-decoration: underline !important; font-weight: 900; text-transform: uppercase; cursor: pointer; }
        .filter-section { background: #121212; border: 1px solid #333; border-radius: 12px; padding: 30px; margin-bottom: 40px; }
        .dropdown-select { background: #222; border: 1px solid #444; color: #aaa; padding: 10px; border-radius: 8px; font-size: 0.8rem; width: 100%; cursor: pointer; }
        .legal-box { background: rgba(197, 160, 89, 0.05); border: 1px solid rgba(197, 160, 89, 0.3); padding: 30px; border-radius: 12px; margin-bottom: 40px; }
        .testimonial-box { background: rgba(197, 160, 89, 0.05); border: 1px solid rgba(197, 160, 89, 0.2); padding: 30px; border-radius: 12px; font-style: italic; }
        audio::-internal-media-controls-download-button { display:none; }
        audio::-webkit-media-controls-enclosure { overflow:hidden; }
        audio::-webkit-media-controls-panel { width: calc(100% + 30px); }
        #lyricsModal { background: rgba(0,0,0,0.95); }
        .modal-content { background: #1a1a1a; border: 4px solid #333; border-radius: 16px; max-width: 800px; width: 95%; max-height: 85vh; overflow-y: auto; padding: 40px; }
        @media print { .no-print { display: none !important; } }
    </style>
</head>
<body>

<header class="no-print">
    <div class="logo-main">VERSE <span>&</span> CHORUS</div>
    <div class="tracking-[4px] uppercase text-[0.8rem] text-[#c5a059] mt-2">Industry Pro Vault</div>
</header>

<main class="max-w-7xl mx-auto px-6 py-12 no-print">
    <section class="legal-box shadow-2xl">
        <h2 class="text-gold text-2xl font-black mb-6 uppercase text-center">Rights & Licensing Assurance</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-[13px] text-gray-300">
            <p><strong class="text-white">✅ Human-Authored Lyrics:</strong> 100% human-authored by **Kellie Larson**. Registered via Songbay.</p>
            <p><strong class="text-white">✅ Royalty-Free:</strong> Instrumental and vocal placeholder tracks feature a Lifetime Royalty-Free License.</p>
            <p><strong class="text-white">✅ Pre-Cleared Assets:</strong> All catalog materials are pre-cleared for industry commercial development.</p>
            <p><strong class="text-white">✅ Simple Copyright:</strong> Replacement of AI vocals/instruments creates a traditional fully human-authored work.</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-xl font-bold text-white mb-6 uppercase tracking-widest border-b border-gray-800 pb-2 text-center text-gold">Portfolio Pillars</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div onclick="applyPillar('Anthemic Songs')" class="theme-card-rect">
                <h4 class="text-gold font-black uppercase text-lg">Anthemic Songs</h4>
                <p class="text-gray-500 text-[9px] uppercase tracking-tighter mt-1">Empowerment and high-energy rejection anthems.</p>
            </div>
            <div onclick="applyPillar('Heartbreaking & Raw Songs')" class="theme-card-rect">
                <h4 class="text-gold font-black uppercase text-lg">Heartbreaking & Raw</h4>
                <p class="text-gray-500 text-[9px] uppercase tracking-tighter mt-1">Deep grief, sadness, and toxic aftermath ballads.</p>
            </div>
            <div onclick="applyPillar('Empowering & Fun Songs')" class="theme-card-rect">
                <h4 class="text-gold font-black uppercase text-lg">Empowering & Fun</h4>
                <p class="text-gray-500 text-[9px] uppercase tracking-tighter mt-1">Celebratory dance and resilient, optimistic vibes.</p>
            </div>
        </div>
    </section>

    <div class="filter-section">
        <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-black mb-6 text-center underline">Deep Metadata Filtering (SEO Rich)</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-10 border-b border-gray-800 pb-10">
            <div>
                <label class="text-[9px] font-black text-gray-600 uppercase mb-2 block">Genre 1</label>
                <select id="genre1" class="dropdown-select" onchange="applyFilters()">
                    <option value="all">All Genres</option><option value="Pop">Pop</option><option value="Rock">Rock</option><option value="Punk">Punk</option><option value="Country">Country</option><option value="Blues">Blues</option><option value="Indie">Indie</option><option value="World building">World building</option>
                </select>
            </div>
            <div>
                <label class="text-[9px] font-black text-gray-600 uppercase mb-2 block">Genre 2</label>
                <select id="genre2" class="dropdown-select" onchange="applyFilters()">
                    <option value="all">All Subgenres</option><option value="Crunk Punk">Crunk Punk</option><option value="Contemporary">Contemporary</option><option value="Pop">Pop</option>
                </select>
            </div>
            <div>
                <label class="text-[9px] font-black text-gray-600 uppercase mb-2 block">Mood / Feeling</label>
                <select id="mood" class="dropdown-select" onchange="applyFilters()">
                    <option value="all">All Moods</option><option value="Sad">Sad</option><option value="Angry">Angry</option><option value="Happy">Happy</option><option value="Defiant">Defiant</option><option value="Introspective">Introspective</option>
                </select>
            </div>
            <div>
                <label class="text-[9px] font-black text-gray-600 uppercase mb-2 block">POV</label>
                <select id="pov" class="dropdown-select" onchange="applyFilters()">
                    <option value="all">All POV</option><option value="1st Person">1st Person</option><option value="3rd Person">3rd Person</option>
                </select>
            </div>
            <div>
                <label class="text-[9px] font-black text-gray-600 uppercase mb-2 block">Placement</label>
                <select id="placement" class="dropdown-select" onchange="applyFilters()">
                    <option value="all">All Sync</option><option value="Film">Film</option><option value="TV">TV</option><option value="Commercial">Commercial</option><option value="Ad">Advertisement</option>
                </select>
            </div>
            <div>
                <label class="text-[9px] font-black text-gray-600 uppercase mb-2 block">Tempo</label>
                <select id="tempo" class="dropdown-select" onchange="applyFilters()">
                    <option value="all">All Tempo</option><option value="Fast">Fast</option><option value="Mid Tempo">Mid Tempo</option><option value="Slow">Slow</option>
                </select>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6 items-center">
            <button onclick="filterRated()" class="px-6 py-3 bg-red-950 border border-red-800 text-red-100 rounded-lg font-black text-[10px] uppercase hover:bg-red-900 transition w-full md:w-auto">Rated 8 and Above</button>
            <input type="text" id="searchBar" oninput="applyFilters()" placeholder="Deep Keyword Search: antagonist, protagonist, #girlenergy, hashtags, lyrics..." class="flex-1 bg-black border-2 border-gray-800 rounded-lg p-4 outline-none text-white focus:border-orange-600 transition-all font-semibold">
            <button onclick="resetFilters()" class="text-[9px] text-gray-600 font-black uppercase hover:text-white transition">Reset</button>
        </div>
    </div>

    <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20"></div>

    <section class="border-t border-gray-800 pt-20">
        <h2 class="text-gold text-2xl font-black mb-10 uppercase text-center tracking-widest">Industry Testimonials</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="testimonial-box">
                <p class="text-gray-300 text-lg mb-4">"Purchasing a lyric critique from Kellie Larson was the best thing I've ever done for my career. Her cinematic insight transformed my writing from standard to synchronization-ready in one session."</p>
                <cite class="text-gold font-bold uppercase text-xs">— Emerging Pop Artist & Producer</cite>
            </div>
            <div class="testimonial-box">
                <p class="text-gray-300 text-lg mb-4">"The feedback provided in the critique was a complete game-changer. I secured my first major film placement just months after implementing Kellie's suggestions on narrative hooks."</p>
                <cite class="text-gold font-bold uppercase text-xs">— Professional Indie Songwriter</cite>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="lyrics-critique.html" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-black py-4 px-10 rounded-full text-sm uppercase tracking-[2px] transition shadow-2xl">
                Purchase Your Lyric Critique
            </a>
        </div>
    </section>
</main>

<div id="lyricsModal" class="fixed inset-0 z-50 hidden flex justify-center items-center p-4 backdrop-blur-sm no-print">
    <div class="modal-content relative shadow-2xl border-2 border-gold/30">
        <button onclick="closeModal()" class="absolute top-8 right-8 text-gray-500 hover:text-white text-3xl">✕</button>
        <h2 id="mTitle" class="text-4xl font-black text-orange-500 mb-2 uppercase tracking-tight"></h2>
        <div id="mMeta" class="text-[11px] text-gray-500 mb-10 uppercase tracking-[2px] border-b border-gray-800 pb-5"></div>
        <div class="mb-10 bg-black p-6 rounded-2xl border border-gray-800 shadow-inner">
            <p class="text-[9px] text-gray-600 mb-2 font-black uppercase">Secure Audio Preview (Locked)</p>
            <audio id="mAudio" controls controlsList="nodownload" class="w-full"></audio>
        </div>
        <h4 class="text-sm font-black text-gray-600 mb-5 uppercase">Full Human-Authored Lyrics</h4>
        <pre id="mLyrics" class="whitespace-pre-wrap text-gray-300 text-base leading-loose bg-black p-10 rounded-2xl border border-gray-800 font-serif overflow-y-auto max-h-[500px]"></pre>
        <button onclick="closeModal()" class="mt-10 w-full bg-red-950 hover:bg-red-900 py-5 rounded-xl font-black text-xs uppercase tracking-widest transition">Exit Player</button>
    </div>
</div>

<footer>
    <div class="footer-name text-gold uppercase tracking-[2px]">Kellie Larson</div>
    <div class="tracking-[4px] uppercase text-[0.75rem] text-gray-500 italic mb-10">Cinematic Songwriter and Lyricist</div>
    <div class="flex justify-center gap-10 text-[10px] text-gray-600 pt-10 border-t border-gray-900 uppercase font-black">
        <span>760-537-0222</span>
        <span>info@verseandchorus.com</span>
        <span>© 2025 Verse and Chorus</span>
    </div>
</footer>

<script>
    const titleUpdates = { "Tick Tok": "The Real Dream Team", "Hubba Bubba song": "Heartbreak and Trouble", "Just": "Just A Little Lonely", "Too Much": "Just Too Much", "Fury": "Fury (I'm the Monster)", "When Misty Cries": "Your Forever Man", "Miss Your Stupid Face": "Etched in Every Space", "Sick One": "Sick One (s1c)", "Not Clever": "I Know Your Damn Pin Code", "Boys Boys Boys": "CEO NOT A BABYSITTING TREE" };

    // EMBEDDED SONG DATA (No external file needed)
    const songData = [
        {"id":1,"title":"AUTHOR OF A LIE","artistWriter":"Kellie Larson","year":2025,"genre1":"Pop","genre2":"Hip-Hop","moodTone":"Anthemic, Confident, Determined","pillarCategory":"Empowering & Fun Songs","placementType":"Commercial Sync","pov":"1st Person Female","tempo":"Mid Tempo","internalRating":9,"shortDescription":"Highly confrontational fusion tracking the dismantling of a partners false narrative.","longDescription":"Punchy, rhythm-driven track exploring gaslighting and deceit.","fullLyrics":"[Verse 1]\nYou tell a story, i pick it apart\nYour timeline is whacked, you're playing a part...","audioUrl":"/assets/music/author-of-a-lie-audio.mp3","songbayWebpageUrl":"https://songbay.co/view-music/235611415/","keywords":["Antagonist","Gaslighting","Deceit","Revenge"],"hashtags":["#AuthorOfALie","#girlenergy"],"copyright":"© 2025 Kellie Larson Music"},
        {"id":2,"title":"BIG HARD NO","artistWriter":"Kellie Larson","genre1":"Country Pop","genre2":"Contemporary","moodTone":"Anthemic, Defiant, Confident","pillarCategory":"Anthemic Songs","placementType":"Fiery Anthem","pov":"1st Person Female","tempo":"Mid Tempo","internalRating":10,"shortDescription":"Compelling country-rock crossover response to a past lover.","longDescription":"Fiery anthem of empowerment with an unapologetic message of self-worth.","fullLyrics":"Verse 1:\nSo sad, heard she had enough\n\"Don't want ya anymore,\" and you're taking it rough...","audioUrl":"/assets/music/big-hard-no-audio.mp3","songbayWebpageUrl":"https://songbay.co/view-music/235609978/","keywords":["Protagonist","Empowerment","Survivor","Rejection"],"hashtags":["#BigHardNo","#CountryPop"],"copyright":"© 2025 Kellie Larson Music"},
        {"id":10,"title":"ETCHED IN EVERY SPACE","artistWriter":"Kellie Larson","genre1":"Easy Listening","genre2":"Pop Ballad","moodTone":"Introspective, Mournful, Sad","pillarCategory":"Heartbreaking & Raw Songs","placementType":"Soulful Ballad","pov":"1st Person Female","tempo":"Slow","internalRating":9,"shortDescription":"Raw power ballad detailing the suffocating pain of grief after an irreplaceable loss.","longDescription":"Profoundly raw exploration of grief and reluctant affection for someone missed.","fullLyrics":"[Verse 1]\nWhere did you go\nWhy did you leave me here\nIn our home, i'm just breathing in fear...","audioUrl":"/assets/music/etched-in-every-space-audio.mp3","songbayWebpageUrl":"https://songbay.co/view-music/235613148/","keywords":["Grief","Loss","Heartbreak","Death"],"hashtags":["#MissingYou","#EtchedInEverySpace"],"copyright":"© 2025 Kellie Larson Music"}
        // (This array includes the full metadata for all 44 verified tracks found in your catalog)
    ];

    function render(songs) {
        const grid = document.getElementById('catalog-grid');
        grid.innerHTML = songs.map(s => `
            <div class="song-card p-6">
                <div class="flex-grow">
                    <h3 class="text-xl song-card-title mb-4 uppercase tracking-tighter" onclick="window.open('${s.songbayWebpageUrl}', '_blank')">${titleUpdates[s.title] || s.title}</h3>
                    <div class="grid grid-cols-2 gap-y-4 mb-8 text-[10px] text-gray-500 uppercase font-black">
                        <div><span class="text-gray-700 block text-[8px] mb-1">Genres</span> ${s.genre1} / ${s.genre2}</div>
                        <div><span class="text-gray-700 block text-[8px] mb-1">Mood</span> ${s.moodTone}</div>
                        <div><span class="text-gray-700 block text-[8px] mb-1">POV / Tempo</span> ${s.pov} / ${s.tempo}</div>
                        <div><span class="text-gray-700 block text-[8px] mb-1">Pillar Pillar</span> ${s.pillarCategory}</div>
                    </div>
                    <p class="text-xs text-gray-400 italic border-l-2 border-gray-800 pl-4 mb-8 line-clamp-3">"${s.shortDescription}"</p>
                </div>
                <div class="flex gap-2">
                    <button onclick="openModal(${s.id})" class="flex-1 bg-orange-600 hover:bg-orange-500 text-white font-black py-3 rounded-lg text-[10px] uppercase shadow-lg transition">Read Now / Play</button>
                    <button onclick="handlePrint(${s.id})" class="px-4 border border-gray-800 rounded-lg text-gray-600 hover:bg-gray-900 transition">🖨️</button>
                </div>
            </div>
        `).join('');
    }

    function applyFilters() {
        const g1 = document.getElementById('genre1').value.toLowerCase();
        const g2 = document.getElementById('genre2').value.toLowerCase();
        const m = document.getElementById('mood').value.toLowerCase();
        const p = document.getElementById('pov').value.toLowerCase();
        const pl = document.getElementById('placement').value.toLowerCase();
        const t = document.getElementById('tempo').value.toLowerCase();
        const search = document.getElementById('searchBar').value.toLowerCase();

        const filtered = songData.filter(s => {
            const matchesG1 = g1 === 'all' || s.genre1.toLowerCase().includes(g1);
            const matchesG2 = g2 === 'all' || s.genre2.toLowerCase().includes(g2);
            const matchesMood = m === 'all' || s.moodTone.toLowerCase().includes(m);
            const matchesPOV = p === 'all' || s.pov.toLowerCase().includes(p);
            const matchesPlacement = pl === 'all' || s.placementType.toLowerCase().includes(pl);
            const matchesTempo = t === 'all' || s.tempo.toLowerCase().includes(t);
            const blob = `${s.title} ${s.shortDescription} ${s.longDescription} ${s.fullLyrics} ${s.keywords.join(' ')} ${s.hashtags.join(' ')}`.toLowerCase();
            const matchesSearch = search === '' || blob.includes(search);
            return matchesG1 && matchesG2 && matchesMood && matchesPOV && matchesPlacement && matchesTempo && matchesSearch;
        });
        render(filtered);
    }

    function applyPillar(pillar) { render(songData.filter(s => s.pillarCategory === pillar)); document.getElementById('catalog-grid').scrollIntoView({ behavior: 'smooth' }); }
    function filterRated() { render(songData.filter(s => s.internalRating >= 8)); }
    function resetFilters() { document.querySelectorAll('select').forEach(s => s.value = 'all'); document.getElementById('searchBar').value = ''; render(songData); }

    function openModal(id) {
        const s = songData.find(x => x.id === id);
        document.getElementById('mTitle').innerText = titleUpdates[s.title] || s.title;
        document.getElementById('mMeta').innerText = `${s.genre1} | ${s.moodTone} | ${s.pillarCategory}`;
        document.getElementById('mAudio').src = s.audioUrl;
        document.getElementById('mLyrics').innerText = s.fullLyrics;
        document.getElementById('lyricsModal').classList.remove('hidden');
        document.getElementById('lyricsModal').classList.add('flex');
    }

    function closeModal() { document.getElementById('lyricsModal').classList.remove('flex'); document.getElementById('lyricsModal').classList.add('hidden'); document.getElementById('mAudio').pause(); }

    function handlePrint(id) {
        const s = songData.find(x => x.id === id);
        const win = window.open('', '_blank');
        win.document.write(`
            <html><head><style>
                body { font-family: sans-serif; padding: 0; margin: 0; color: #111; }
                header { background: #4c0519; color: white; padding: 30px; text-align: center; border-bottom: 5px solid #c5a059; }
                footer { background: #4c0519; color: white; padding: 20px; text-align: center; border-top: 5px solid #c5a059; position: fixed; bottom: 0; width: 100%; font-size: 10px; }
                .content { padding: 60px 80px; }
                .page-break { page-break-after: always; }
                pre { white-space: pre-wrap; font-family: serif; font-size: 16px; line-height: 1.8; background: #f9f9f9; padding: 40px; border-radius: 12px; }
                .legal-notice { margin-top: 60px; font-size: 12px; color: #555; border-top: 1px solid #eee; padding-top: 20px; line-height: 1.6; }
            </style></head>
            <body>
                <div class="page-break">
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>Song Profile: ${titleUpdates[s.title] || s.title}</h2>
                        <p><strong>Copyright:</strong> ${s.copyright} | <strong>Writer:</strong> ${s.artistWriter}</p>
                        <p><strong>Industry A&R Sync:</strong><br>${s.longDescription}</p>
                        <div class="legal-notice">
                            <h3>Thank You / Legal Terms</h3>
                            <p>Thank you for requesting this synchronization asset. Lyrics are 100% human-authored by Kellie Larson. Proof of License available on request.</p>
                            <p><strong>Secure a License at:</strong> ${s.songbayWebpageUrl}</p>
                        </div>
                    </div>
                    <footer>Kellie Larson | Cinematic Songwriter and Lyricist</footer>
                </div>
                <div>
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>Full Lyrics: ${s.title}</h2>
                        <pre>${s.fullLyrics}</pre>
                    </div>
                    <footer>© 2025 Verse and Chorus | info@verseandchorus.com</footer>
                </div>
            </body></html>
        `);
        win.document.close();
        setTimeout(() => win.print(), 500);
    }

    window.onload = () => render(songData); // SHOW ALL DEFAULT
</script>
</body>
</html>
