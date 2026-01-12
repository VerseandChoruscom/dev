<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | 1-Stop Sync Licensing | Kellie Larson</title>
    <meta name="description" content="Professional A&R vault for Kellie Larson. 100% human-authored, pre-cleared cinematic lyrics and compositions for commercial sync, film, and TV. Searchable metadata for music supervisors.">
    <meta name="keywords" content="Sync Licensing 2026, Human-Authored Lyrics, 1-Stop Shop Music, Cinematic Songwriter, A&R Metadata, Pre-cleared Music, Kellie Larson, VerseandChorus">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root { --metallic-gold: #D4AF37; --burgundy: #800020; --white: #FFFFFF; --black: #000000; --sunset-orange: #FD5E53; --blue-gray: #64748b; --dark-slate: #0f172a; }
        body { font-family: Inter, sans-serif; background-color: var(--dark-slate); color: rgb(241, 245, 249); }
        .content-container { max-width: 1200px; margin: 0px auto; padding: 0px 1rem; }
        #main-header { display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; background: var(--black); border-bottom: 2px solid var(--metallic-gold); position: relative; }
        .logo-top-left { width: 90%; max-width: 300px; height: auto; display: block; }
        #nav-menu { display: flex; gap: 20px; }
        #nav-menu a { text-decoration: none; font-weight: bold; font-size: 12px; letter-spacing: 1px; text-transform: uppercase; color: var(--white) !important; }
        #nav-menu a:hover { color: var(--metallic-gold) !important; }
        .hero-box { text-align: center; padding: 60px 20px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)) 0% 0% / cover, url("/assets/hero-bg.jpg"); border-bottom: 5px solid var(--metallic-gold); }
        .gold-script { font-family: "Dancing Script", cursive; color: var(--metallic-gold); font-size: 2.5rem; }
        .page-title { color: white; font-size: 4.5rem; font-weight: 800; text-transform: uppercase; line-height: 1; margin-top: 10px; }
        
        /* Grid and Card Styles */
        .vault-row { display: grid; grid-template-columns: 2fr 1fr 2fr 2fr 1fr 1fr; gap: 15px; align-items: center; padding: 15px; border-bottom: 1px solid rgba(212, 175, 55, 0.2); transition: background 0.2s; }
        .vault-row:hover { background: rgba(255, 255, 255, 0.05); }
        .rect-card { background: rgb(51, 65, 85); border: 1px solid var(--blue-gray); padding: 8px; border-radius: 4px; font-size: 0.7rem; font-weight: bold; text-align: center; cursor: pointer; text-transform: uppercase; display: flex; align-items: center; justify-content: center; height: 100%; transition: all 0.3s ease; }
        .rect-card:hover { border-color: var(--metallic-gold); color: var(--metallic-gold); }
        .rect-card.active-theme { background-color: var(--sunset-orange) !important; border-color: var(--sunset-orange) !important; color: white !important; }
        
        /* Form Elements */
        .vault-select { background-color: rgb(0, 0, 0); border: 1px solid var(--blue-gray); color: white; padding: 10px; border-radius: 4px; width: 100%; cursor: pointer; font-size: 0.75rem; }
        .vault-btn { background: var(--metallic-gold); color: black; font-weight: 900; padding: 8px 12px; border-radius: 4px; font-size: 0.7rem; text-transform: uppercase; border: none; }
        .print-btn { background: transparent; border: 1px solid var(--sunset-orange); color: var(--sunset-orange); font-weight: 900; padding: 8px 12px; border-radius: 4px; font-size: 0.7rem; text-transform: uppercase; }
        .print-btn:hover { background: var(--sunset-orange); color: white; }
        
        /* Footer */
        .site-footer { background-color: var(--black); color: var(--white); text-align: center; padding: 40px 20px; border-top: 5px solid var(--metallic-gold); margin-top: 50px; }
        #arrow-up { position: fixed; bottom: 30px; right: 30px; background: none; border: none; color: var(--sunset-orange); font-size: 3.5rem; cursor: pointer; z-index: 2000; }
        
        /* HIDDEN PRINT AREA (Visible only on print) */
        #print-area { display: none; }

        @media (max-width: 768px) { .vault-row { grid-template-columns: 1fr; gap: 5px; } .page-title { font-size: 2.5rem; } }

        /* PRINT STYLES */
        @media print {
            body * { visibility: hidden; }
            #print-area, #print-area * { visibility: visible; }
            #print-area { position: absolute; left: 0; top: 0; width: 100%; background: white; color: black; padding: 20px; display: block; }
            .page-break { page-break-before: always; }
            .print-header { border-bottom: 2px solid #D4AF37; margin-bottom: 20px; padding-bottom: 10px; }
            .print-row { display: flex; margin-bottom: 8px; font-size: 12px; border-bottom: 1px solid #eee; padding-bottom: 4px; }
            .print-label { font-weight: bold; width: 150px; color: #333; text-transform: uppercase; }
            .print-value { flex: 1; }
            .print-section { margin-top: 20px; margin-bottom: 10px; font-size: 14px; font-weight: bold; color: #D4AF37; text-transform: uppercase; border-bottom: 1px solid #000; }
            .print-footer { position: fixed; bottom: 0; left: 0; width: 100%; text-align: center; font-size: 10px; border-top: 1px solid #ccc; padding-top: 10px; background: white; }
            .print-logo { max-width: 200px; margin-bottom: 10px; }
        }
    </style>
</head>
<body>

    <header id="main-header">
        <img src="file:///images/logo/verseandchorus-logo-med-photo.jpg" alt="Verse and Chorus Logo" class="logo-top-left">
        <nav id="nav-menu">
          <a href="bio.html">Spotlight</a>
          <a href="industry-pros.html">Industry Pro</a>
          <a href="lyrics.html">Lyrics</a>
          <a href="green-room.html">Green Room</a>
          <a href="contact.html">Contact</a>
        </nav>
    </header>

    <div class="hero-box">
        <div class="gold-script">VerseandChorus.com Presents</div>
        <h1 class="page-title">Industry Pro's</h1>
    </div>

    <main class="content-container py-10">
        <div class="bg-black p-6 mb-8 border-l-4 border-[var(--sunset-orange)] rounded shadow-lg">
            <h4 class="text-xl font-bold mb-4 uppercase text-[var(--metallic-gold)]">Sync Licensing Metadata Vault</h4>
            <div class="grid md:grid-cols-4 gap-4 text-[10px] font-black uppercase tracking-tighter text-gray-400">
                <p>100% Human-Authored</p>
                <p>1-Stop Shop (Lyrics/Master)</p>
                <p>Pre-Cleared for 2026 Sync</p>
                <p>High-Velocity Metadata</p>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 mb-8">
            <div class="rect-card theme-filter" data-filter="Social Commentary">Social Commentary</div>
            <div class="rect-card theme-filter" data-filter="Empowerment Arc">Empowerment Arc</div>
            <div class="rect-card theme-filter" data-filter="Disenchantment">Disenchantment</div>
            <div class="rect-card theme-filter" data-filter="Value Proposition">Value Proposition</div>
            <div class="rect-card theme-filter" data-filter="Market Share">Market Share</div>
            <div class="rect-card theme-filter" data-filter="Iterative Protagonist">Iterative Protagonist</div>
        </div>

        <div class="bg-slate-900 p-6 rounded border border-slate-700 mb-8">
            <input type="text" id="vault-search" placeholder="SEARCH BY KEYWORD, BPM, MOOD, OR THEME..." class="w-full p-4 bg-black border border-slate-800 rounded mb-6 text-white uppercase text-sm outline-none focus:border-[var(--sunset-orange)]">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-2">
                <select id="genre-pull" class="vault-select"><option value="">GENRE</option><option value="Pop">Pop</option><option value="Country">Country</option><option value="Rock">Rock</option><option value="Indie">Indie</option></select>
                <select id="mood-pull" class="vault-select"><option value="">MOOD</option><option value="Confident">Confident</option><option value="Dark">Dark</option><option value="Sad">Sad</option><option value="Hopeful">Hopeful</option></select>
                <select id="feeling-pull" class="vault-select"><option value="">FEELING</option><option value="Empowered">Empowered</option><option value="Vulnerable">Vulnerable</option><option value="Strong">Strong</option></select>
                <select id="placement-pull" class="vault-select"><option value="">PLACEMENT</option><option value="Sync">Sync</option><option value="Drama">Drama</option><option value="Trailer">Trailer</option></select>
                <button id="reset-btn" class="vault-select border-[var(--sunset-orange)] text-[var(--sunset-orange)] font-bold">RESET</button>
            </div>
        </div>

        <div class="hidden md:grid grid-cols-6 gap-4 px-4 py-2 bg-slate-800 text-[10px] font-black uppercase text-gray-400 rounded-t border-b border-slate-700">
            <div class="col-span-1">Song Title / Genre</div>
            <div>Rating</div>
            <div class="col-span-1">Primary Moods</div>
            <div class="col-span-1">Sync Placements</div>
            <div>Actions</div>
            <div>1-Sheet</div>
        </div>

        <div id="vault-list-display" class="bg-black/20 rounded-b overflow-hidden">
            
            <div class="vault-row" data-theme="Disenchantment" data-title="author of a lie" data-genre="Pop" data-mood="Dark" data-feeling="Vulnerable" data-placement="Drama">
                <div class="flex items-center gap-3">
                    <img src="assets/images/author-of-a-lie-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Author of a Lie</div>
                        <div class="text-[10px] text-gray-500 font-bold">Pop / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.6</div>
                <div class="text-xs text-gray-300 italic">Cold, Suspenseful</div>
                <div class="text-xs text-gray-400">Crime Drama</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('author of a lie')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Empowerment Arc" data-title="big hard no" data-genre="Country" data-mood="Confident" data-feeling="Strong" data-placement="Drama">
                <div class="flex items-center gap-3">
                    <img src="assets/images/big-hard-no-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Big Hard No</div>
                        <div class="text-[10px] text-gray-500 font-bold">Country / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.9</div>
                <div class="text-xs text-gray-300 italic">Strong, Final</div>
                <div class="text-xs text-gray-400">Drama | Commercial</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('big hard no')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Value Proposition" data-title="ceo not babysitting tree" data-genre="Pop" data-mood="Confident" data-feeling="Empowered" data-placement="Sync">
                <div class="flex items-center gap-3">
                    <img src="assets/images/ceo-not-babysitting-tree-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">CEO Not Babysitting Tree</div>
                        <div class="text-[10px] text-gray-500 font-bold">Pop / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.8</div>
                <div class="text-xs text-gray-300 italic">Sassy, Boss</div>
                <div class="text-xs text-gray-400">Reality | Commercial</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('ceo not babysitting tree')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Iterative Protagonist" data-title="fury (i'm the monster)" data-genre="Rock" data-mood="Dark" data-feeling="Strong" data-placement="Trailer">
                <div class="flex items-center gap-3">
                    <img src="assets/images/fury-im-the-monster-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Fury (I'm the Monster)</div>
                        <div class="text-[10px] text-gray-500 font-bold">Rock / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">10</div>
                <div class="text-xs text-gray-300 italic">Aggressive, Dark</div>
                <div class="text-xs text-gray-400">Trailer | Gaming</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('fury (i\'m the monster)')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Market Share" data-title="boom boom beat" data-genre="Pop" data-mood="Confident" data-feeling="Empowered" data-placement="Sync">
                <div class="flex items-center gap-3">
                    <img src="assets/images/boom-boom-beat-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Boom Boom Beat</div>
                        <div class="text-[10px] text-gray-500 font-bold">Pop / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.7</div>
                <div class="text-xs text-gray-300 italic">Energetic, Fun</div>
                <div class="text-xs text-gray-400">Commercial | Sports</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('boom boom beat')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Disenchantment" data-title="bottom of the wishing well" data-genre="Indie" data-mood="Sad" data-feeling="Vulnerable" data-placement="Drama">
                <div class="flex items-center gap-3">
                    <img src="assets/images/bottom-of-the-wishing-well-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Bottom of the Wishing Well</div>
                        <div class="text-[10px] text-gray-500 font-bold">Indie / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.5</div>
                <div class="text-xs text-gray-300 italic">Longing, Deep</div>
                <div class="text-xs text-gray-400">TV Drama</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('bottom of the wishing well')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Iterative Protagonist" data-title="broken bad" data-genre="Rock" data-mood="Dark" data-feeling="Strong" data-placement="Trailer">
                <div class="flex items-center gap-3">
                    <img src="assets/images/broken-bad-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Broken Bad</div>
                        <div class="text-[10px] text-gray-500 font-bold">Rock / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.8</div>
                <div class="text-xs text-gray-300 italic">Gritty, Rebel</div>
                <div class="text-xs text-gray-400">Action | Trailer</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('broken bad')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Social Commentary" data-title="children of war" data-genre="Indie" data-mood="Sad" data-feeling="Vulnerable" data-placement="Drama">
                <div class="flex items-center gap-3">
                    <img src="assets/images/children-of-war-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Children of War</div>
                        <div class="text-[10px] text-gray-500 font-bold">Indie / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">10</div>
                <div class="text-xs text-gray-300 italic">Serious, Cinematic</div>
                <div class="text-xs text-gray-400">Film Score</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('children of war')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Social Commentary" data-title="concrete under our feet" data-genre="Rock" data-mood="Confident" data-feeling="Strong" data-placement="Sync">
                <div class="flex items-center gap-3">
                    <img src="assets/images/concrete-under-our-feet-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Concrete Under our Feet</div>
                        <div class="text-[10px] text-gray-500 font-bold">Rock / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.9</div>
                <div class="text-xs text-gray-300 italic">Anthemic, Urban</div>
                <div class="text-xs text-gray-400">Sports | Commercial</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('concrete under our feet')">PRINT</button>
            </div>

            <div class="vault-row" data-theme="Disenchantment" data-title="craving those crumbs" data-genre="Country" data-mood="Sad" data-feeling="Vulnerable" data-placement="Drama">
                <div class="flex items-center gap-3">
                    <img src="assets/images/craving-those-crumbs-cover-art.jpg" alt="Cover" class="w-12 h-12 object-cover rounded border border-slate-700">
                    <div>
                        <div class="text-[var(--metallic-gold)] font-bold text-sm uppercase">Craving Those Crumbs</div>
                        <div class="text-[10px] text-gray-500 font-bold">Country / HUMAN-AUTHORED</div>
                    </div>
                </div>
                <div class="text-[var(--sunset-orange)] font-black text-xs">9.7</div>
                <div class="text-xs text-gray-300 italic">Heartbreak, Lonely</div>
                <div class="text-xs text-gray-400">TV Drama</div>
                <button class="vault-btn">LYRICS</button>
                <button class="print-btn" onclick="printOneSheet('craving those crumbs')">PRINT</button>
            </div>

        </div>
    </main>

    <footer class="site-footer">
        <div style="margin-bottom: 20px; font-size: 1.2rem; font-weight: bold;">♥️ Kellie Larson ♥️</div>
        <div style="margin-bottom: 20px; color: var(--metallic-gold); font-size: 1rem;">✍️Cinematic Songwriter and Lyricist 🎹</div>
        <div style="margin-bottom: 20px; font-size: 1rem;">🧑‍🎤 VerseandChorus.com 🎙️</div>
        <div style="margin-bottom: 15px;">✉️ info@verseandchorus.com 📨</div>
        <div style="margin-bottom: 20px;">☎️ 760-537-0222 📲</div>
        <div style="font-size: 0.8rem; color: #666;">© 2024 VerseandChorus.com. All Rights Reserved.</div>
    </footer>

    <button id="arrow-up">▲</button>

    <div id="print-area">
        <div class="print-header">
            <h1 style="font-size: 24px; font-weight: 800; text-transform: uppercase;" id="p-title">SONG TITLE</h1>
            <h2 style="font-size: 16px;">Lyricist: Kellie Larson | Cinematic Songwriter</h2>
        </div>
        
        <div class="print-row"><div class="print-label">Date:</div><div class="print-value" id="p-date">Jan 10, 2026</div></div>
        <div class="print-row"><div class="print-label">ID:</div><div class="print-value" id="p-id">KL-2026-X</div></div>
        <div class="print-row"><div class="print-label">Memberships:</div><div class="print-value">ASCAP, Bandlab, Songbay, Donna</div></div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
            <div>
                <div class="print-row"><div class="print-label">Genre 1:</div><div class="print-value" id="p-genre1"></div></div>
                <div class="print-row"><div class="print-label">Genre 2:</div><div class="print-value" id="p-genre2"></div></div>
                <div class="print-row"><div class="print-label">Sub Genre:</div><div class="print-value" id="p-subgenre"></div></div>
                <div class="print-row"><div class="print-label">Mood:</div><div class="print-value" id="p-mood"></div></div>
                <div class="print-row"><div class="print-label">Feeling:</div><div class="print-value" id="p-feeling"></div></div>
            </div>
            <div>
                <div class="print-row"><div class="print-label">Tempo:</div><div class="print-value" id="p-tempo"></div></div>
                <div class="print-row"><div class="print-label">Pov:</div><div class="print-value" id="p-pov"></div></div>
                <div class="print-row"><div class="print-label">Vocals:</div><div class="print-value" id="p-vocals"></div></div>
                <div class="print-row"><div class="print-label">Emotional Arc:</div><div class="print-value" id="p-arc"></div></div>
                <div class="print-row"><div class="print-label">Placement:</div><div class="print-value" id="p-placement"></div></div>
            </div>
        </div>

        <div class="print-section">A&R Highlights</div>
        <div style="margin-bottom: 10px;">
            <strong>Best Line (Snippet):</strong><br>
            <em id="p-bestline"></em>
        </div>
        <div style="margin-bottom: 10px;">
            <strong>2nd Line:</strong><br>
            <em id="p-secondline"></em>
        </div>
        <div style="margin-bottom: 10px;">
            <strong>Why:</strong> <span id="p-why"></span>
        </div>

        <div class="print-section">Long Description</div>
        <p id="p-desc" style="font-size: 12px; line-height: 1.4;"></p>

        <div class="print-section">Spotlight</div>
        <p id="p-spotlight" style="font-size: 12px; line-height: 1.4;">
            Kellie Larson brings a cinematic, narrative-driven approach to songwriting, ensuring every lyric serves the visual medium. Specialized in high-concept themes for TV, Film, and Sync.
        </p>

        <p style="margin-top: 30px; font-weight: bold; text-align: center;">Thank you please contact us regarding licensing and custom composition.</p>

        <div class="print-footer">
            Kellie Larson Cinematic Songwriter and Lyricist - info@verseandchorus.com - (760) 420-4553 - 200 South Emerald Drive Spc 37 Vista, CA 92081
        </div>

        <div class="page-break"></div>

        <div class="print-header">
            <h1 style="font-size: 18px;">FULL LYRICS</h1>
            <h2 style="font-size: 14px;" id="p-title-2">SONG TITLE</h2>
        </div>
        <div style="white-space: pre-wrap; font-family: 'Courier New', monospace; font-size: 12px; line-height: 1.5;" id="p-full-lyrics">
            [Lyric Sheet Placeholder - Please insert full lyrics here]
        </div>
         <div class="print-footer">
            Kellie Larson Cinematic Songwriter and Lyricist - info@verseandchorus.com - (760) 420-4553 - 200 South Emerald Drive Spc 37 Vista, CA 92081
        </div>
    </div>

    <script>
        // Database of Song Details for Print View
        // NOTE: Please replace "Placeholder" text with your actual lyrics from your files.
        const songData = {
            "author of a lie": {
                genre1: "Pop", genre2: "Cinematic", subgenre: "Dark Pop", mood: "Dark", feeling: "Vulnerable", 
                tempo: "Mid-Tempo", pov: "First Person", vocals: "Female", arc: "Disenchantment", placement: "Crime Drama",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "Captures the betrayal of a false narrative perfectly suited for antagonists.",
                desc: "A haunting exploration of deceit and the unraveling of trust. The protagonist realizes they have been living inside a fabrication, leading to a cold, calculated realization of the truth."
            },
            "big hard no": {
                genre1: "Country", genre2: "Rock", subgenre: "Anthem", mood: "Confident", feeling: "Strong", 
                tempo: "Up-Tempo", pov: "First Person", vocals: "Female", arc: "Empowerment", placement: "Drama | Commercial",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "The ultimate boundary-setting anthem for characters taking back control.",
                desc: "An assertive declaration of independence. This song draws a line in the sand, rejecting manipulation and standing firm in personal power."
            },
            "ceo not babysitting tree": {
                genre1: "Pop", genre2: "Electronic", subgenre: "Dance", mood: "Confident", feeling: "Empowered", 
                tempo: "Up-Tempo", pov: "First Person", vocals: "Female", arc: "Value Proposition", placement: "Reality TV",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "Perfect for high-fashion, high-stakes reality TV or business montages.",
                desc: "A sassy, boss-level track about leadership and refusing to manage other people's incompetence. It screams authority and style."
            },
            "fury (i'm the monster)": {
                genre1: "Rock", genre2: "Metal", subgenre: "Industrial", mood: "Dark", feeling: "Strong", 
                tempo: "Fast", pov: "First Person", vocals: "Male/Female", arc: "Iterative Protagonist", placement: "Trailer",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "Visceral energy for action sequences or villain origin stories.",
                desc: "A raw, aggressive track exploring the transformation from victim to monster. It embraces the darkness necessary to survive."
            },
            "boom boom beat": {
                genre1: "Pop", genre2: "Dance", subgenre: "Club", mood: "Confident", feeling: "Empowered", 
                tempo: "Fast", pov: "First Person", vocals: "Female", arc: "Market Share", placement: "Commercial",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "Infectious rhythm perfect for sports promos or energetic commercials.",
                desc: "A high-energy celebration of rhythm and movement. Designed to get hearts racing and crowds moving."
            },
            "bottom of the wishing well": {
                genre1: "Indie", genre2: "Folk", subgenre: "Acoustic", mood: "Sad", feeling: "Vulnerable", 
                tempo: "Slow", pov: "First Person", vocals: "Female", arc: "Disenchantment", placement: "TV Drama",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "Deeply emotional track for scenes of loss or reflection.",
                desc: "A melancholic look at lost hopes and dreams that never came to fruition, resting at the bottom of a forgotten well."
            },
            "broken bad": {
                genre1: "Rock", genre2: "Blues", subgenre: "Swamp Rock", mood: "Dark", feeling: "Strong", 
                tempo: "Mid-Tempo", pov: "First Person", vocals: "Male", arc: "Iterative Protagonist", placement: "Action",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "The sound of a good character breaking bad.",
                desc: "Gritty and rebellious, this song tracks the moral decay of someone pushed too far."
            },
            "children of war": {
                genre1: "Indie", genre2: "Orchestral", subgenre: "Ballad", mood: "Sad", feeling: "Vulnerable", 
                tempo: "Slow", pov: "Third Person", vocals: "Choir/Duet", arc: "Social Commentary", placement: "Film Score",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: " haunting social commentary suitable for serious cinematic moments.",
                desc: "A poignant observation of the innocent victims of conflict, delivered with cinematic gravity."
            },
            "concrete under our feet": {
                genre1: "Rock", genre2: "Pop", subgenre: "Arena", mood: "Confident", feeling: "Strong", 
                tempo: "Anthemic", pov: "Collective", vocals: "Group", arc: "Social Commentary", placement: "Sports",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "An urban anthem for the working class or street sports.",
                desc: "Celebrating the grit and resilience of city life. Grounded, powerful, and unifying."
            },
            "craving those crumbs": {
                genre1: "Country", genre2: "Pop", subgenre: "Ballad", mood: "Sad", feeling: "Vulnerable", 
                tempo: "Slow", pov: "First Person", vocals: "Female", arc: "Disenchantment", placement: "TV Drama",
                bestLine: "Placeholder for best lyric line...", secondLine: "Placeholder for second lyric line...",
                why: "Relatable heartbreak for romantic drama scenes.",
                desc: "The painful admission of settling for less in love, and the realization that crumbs are not enough."
            }
        };

        function printOneSheet(title) {
            const data = songData[title.toLowerCase()];
            if(!data) { alert("Data coming soon for this track."); return; }

            // Populate Page 1
            document.getElementById('p-title').innerText = title;
            document.getElementById('p-title-2').innerText = title; // Page 2 title
            document.getElementById('p-id').innerText = "KL-2026-" + Math.floor(1000 + Math.random() * 9000); // Random ID for demo
            
            document.getElementById('p-genre1').innerText = data.genre1;
            document.getElementById('p-genre2').innerText = data.genre2;
            document.getElementById('p-subgenre').innerText = data.subgenre;
            document.getElementById('p-mood').innerText = data.mood;
            document.getElementById('p-feeling').innerText = data.feeling;
            document.getElementById('p-tempo').innerText = data.tempo;
            document.getElementById('p-pov').innerText = data.pov;
            document.getElementById('p-vocals').innerText = data.vocals;
            document.getElementById('p-arc').innerText = data.arc;
            document.getElementById('p-placement').innerText = data.placement;
            
            document.getElementById('p-bestline').innerText = '"' + data.bestLine + '"';
            document.getElementById('p-secondline').innerText = '"' + data.secondLine + '"';
            document.getElementById('p-why').innerText = data.why;
            document.getElementById('p-desc').innerText = data.desc;

            // Trigger Print
            window.print();
        }

        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('vault-search');
            const genreSelect = document.getElementById('genre-pull');
            const moodSelect = document.getElementById('mood-pull');
            const feelingSelect = document.getElementById('feeling-pull');
            const placementSelect = document.getElementById('placement-pull');
            const resetBtn = document.getElementById('reset-btn');
            const vaultRows = document.querySelectorAll('.vault-row');
            const arrowUp = document.getElementById('arrow-up');
            const themeButtons = document.querySelectorAll('.theme-filter');

            let activeTheme = '';

            function filterVault() {
                const term = searchInput.value.toLowerCase();
                const genre = genreSelect.value;
                const mood = moodSelect.value;
                const feeling = feelingSelect.value;
                const placement = placementSelect.value;

                vaultRows.forEach(row => {
                    const title = row.getAttribute('data-title').toLowerCase();
                    const rowGenre = row.getAttribute('data-genre');
                    const rowMood = row.getAttribute('data-mood');
                    const rowFeeling = row.getAttribute('data-feeling');
                    const rowPlacement = row.getAttribute('data-placement');
                    const rowTheme = row.getAttribute('data-theme');
                    const textContent = row.innerText.toLowerCase();

                    const matchesSearch = term === '' || textContent.includes(term);
                    const matchesGenre = genre === '' || rowGenre === genre;
                    const matchesMood = mood === '' || rowMood === mood;
                    const matchesFeeling = feeling === '' || rowFeeling === feeling;
                    const matchesPlacement = placement === '' || rowPlacement === placement;
                    const matchesTheme = activeTheme === '' || rowTheme === activeTheme;

                    if (matchesSearch && matchesGenre && matchesMood && matchesFeeling && matchesPlacement && matchesTheme) {
                        row.style.display = 'grid';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            themeButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const filterValue = btn.getAttribute('data-filter');
                    if (activeTheme === filterValue) {
                        activeTheme = ''; 
                        btn.classList.remove('active-theme');
                    } else {
                        activeTheme = filterValue;
                        themeButtons.forEach(b => b.classList.remove('active-theme'));
                        btn.classList.add('active-theme');
                    }
                    filterVault();
                });
            });

            searchInput.addEventListener('keyup', filterVault);
            genreSelect.addEventListener('change', filterVault);
            moodSelect.addEventListener('change', filterVault);
            feelingSelect.addEventListener('change', filterVault);
            placementSelect.addEventListener('change', filterVault);

            resetBtn.addEventListener('click', () => {
                searchInput.value = '';
                genreSelect.value = '';
                moodSelect.value = '';
                feelingSelect.value = '';
                placementSelect.value = '';
                activeTheme = '';
                themeButtons.forEach(b => b.classList.remove('active-theme'));
                filterVault();
            });

            arrowUp.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
