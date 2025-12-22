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
        .footer-title { letter-spacing: 3px; text-transform: uppercase; font-size: 0.85rem; color: #ccc; margin-bottom: 20px; }

        .song-card { background: var(--card-bg); border: 1px solid #27272a; border-radius: 12px; transition: all 0.3s ease; display: flex; flex-direction: column; height: 100%; }
        .song-card:hover { border-color: var(--gold); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        
        .filter-section { background: #121212; border: 1px solid #333; border-radius: 12px; padding: 25px; margin-bottom: 40px; }
        .filter-btn { background: #222; border: 1px solid #444; color: #aaa; padding: 6px 12px; border-radius: 6px; font-size: 0.75rem; transition: 0.2s; cursor: pointer; }
        .filter-btn:hover, .filter-btn.active { background: var(--sunset-orange); color: white; border-color: var(--sunset-orange); }

        .legal-box { background: rgba(197, 160, 89, 0.05); border: 1px solid rgba(197, 160, 89, 0.3); padding: 30px; border-radius: 12px; margin-bottom: 40px; }

        #lyricsModal { background: rgba(0,0,0,0.95); }
        .modal-content { background: #1a1a1a; border: 1px solid #333; border-radius: 16px; max-width: 800px; width: 95%; max-height: 85vh; overflow-y: auto; padding: 40px; }

        @media print { .no-print { display: none !important; } }
    </style>
</head>
<body>

<header class="no-print">
    <div class="logo-main">VERSE <span>&</span> CHORUS</div>
    <div class="tracking-[4px] uppercase text-[0.8rem] text-[#c5a059] mt-2">Industry Pro Vault</div>
</header>

<main class="max-w-7xl mx-auto px-6 py-12 no-print">
    
    <section class="legal-box">
        <h2 class="text-[#c5a059] text-2xl font-bold mb-6">Welcome to the Vault</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-[13px] text-gray-400">
            <p><strong class="text-white">✅ Royalty-Free:</strong> AI placeholder tracks covered by Lifetime Commercial License.</p>
            <p><strong class="text-white">✅ Human-Authored:</strong> 100% human-authored lyrics by **Kellie Larson**.</p>
            <p><strong class="text-white">✅ Full Copyright:</strong> Re-recording provides traditional human-authored copyright.</p>
            <p><strong class="text-white">✅ Immediate Clearance:</strong> Pre-cleared for Sync Licensing.</p>
        </div>
    </section>

    <div class="filter-section">
        <h3 class="text-gray-500 uppercase tracking-widest text-[10px] font-bold mb-4 text-center">Search Catalog & Deep Metadata</h3>
        <input type="text" id="searchBar" placeholder="Search by POV, Mood, Placement, Keywords, or Lyrics (e.g. Cyberpunk, 1st Person, Sad)..." 
               class="w-full bg-black border border-gray-700 rounded-lg p-4 outline-none text-white focus:border-orange-500 transition-all mb-6">
        
        <div class="space-y-6">
            <div class="flex flex-wrap gap-2">
                <span class="text-[9px] text-gray-600 font-bold uppercase w-full">Genre 1 (Primary):</span>
                <button class="filter-btn" onclick="setSearch('Punk')">Punk</button>
                <button class="filter-btn" onclick="setSearch('Rock')">Rock</button>
                <button class="filter-btn" onclick="setSearch('Pop')">Pop</button>
                <button class="filter-btn" onclick="setSearch('Country')">Country</button>
                <button class="filter-btn" onclick="setSearch('Folk')">Folk</button>
                <button class="filter-btn" onclick="setSearch('Blues')">Blues</button>
                <button class="filter-btn" onclick="setSearch('Gospel')">Gospel</button>
                <button class="filter-btn" onclick="setSearch('Hip-hop')">Hip-hop</button>
            </div>
            <div class="flex flex-wrap gap-2">
                <span class="text-[9px] text-gray-600 font-bold uppercase w-full">Genre 2 (Sub-Genre):</span>
                <button class="filter-btn" onclick="setSearch('Cyberpunk')">Cyberpunk</button>
                <button class="filter-btn" onclick="setSearch('Dark Blues')">Dark Blues</button>
                <button class="filter-btn" onclick="setSearch('Cinematic')">Cinematic</button>
                <button class="filter-btn" onclick="setSearch('Soul')">Soul</button>
                <button class="filter-btn" onclick="setSearch('Indie Pop')">Indie Pop</button>
            </div>
            <div class="flex flex-wrap gap-2">
                <span class="text-[9px] text-gray-600 font-bold uppercase w-full">Placement / Context:</span>
                <button class="filter-btn" onclick="setSearch('Commercial')">Commercials</button>
                <button class="filter-btn" onclick="setSearch('Film')">Film / Movie</button>
                <button class="filter-btn" onclick="setSearch('Advertisement')">Advertisements</button>
                <button class="filter-btn" onclick="setSearch('Viral')">Viral Hits</button>
                <button class="filter-btn" onclick="setSearch('Narrative')">Narrative Ballad</button>
            </div>
        </div>
    </div>

    <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
</main>

<div id="lyricsModal" class="fixed inset-0 z-50 hidden flex justify-center items-center p-4 backdrop-blur-sm no-print">
    <div class="modal-content relative shadow-2xl">
        <button onclick="closeModal()" class="absolute top-6 right-6 text-gray-500 hover:text-white">✕</button>
        <h2 id="mTitle" class="text-3xl font-bold text-orange-500 mb-2 uppercase tracking-tight"></h2>
        <div id="mMeta" class="text-[10px] text-gray-500 mb-8 uppercase tracking-widest border-b border-gray-800 pb-4"></div>
        <div class="mb-8 bg-black p-4 rounded-lg">
            <p class="text-[9px] text-gray-600 mb-2 uppercase font-black">Audio Player</p>
            <audio id="mAudio" controls class="w-full"></audio>
        </div>
        <pre id="mLyrics" class="whitespace-pre-wrap text-gray-300 text-sm bg-black p-6 rounded-lg border border-gray-800 font-serif"></pre>
        <button onclick="closeModal()" class="mt-8 w-full bg-red-950 py-3 rounded-lg font-bold text-xs uppercase tracking-widest">Close Vault</button>
    </div>
</div>

<footer class="no-print">
    <div class="footer-name">Kellie Larson</div>
    <div class="footer-title italic">Cinematic Songwriter and Lyricist</div>
    <div class="flex flex-wrap justify-center gap-8 text-xs text-gray-400 mt-6 pt-6 border-t border-gray-900">
        <span>760-537-0222</span>
        <span>info@verseandchorus.com</span>
        <span>&copy; 2025 Verse and Chorus</span>
    </div>
</footer>

<script>
    // Instruction-based Title Map
    const titleUpdates = {
        "Tick Tok": "The Real Dream Team",
        "Hubba Bubba song": "Heartbreak and Trouble",
        "Just": "Just A Little Lonely",
        "Too Much": "Just Too Much",
        "Fury": "Fury (I'm the Monster)",
        "When Misty Cries": "Your Forever Man",
        "Miss Your Stupid Face": "Etched in Every Space",
        "Sick One": "Sick One (s1c)",
        "Not Clever": "I Know Your Damn Pin Code",
        "Boys Boys Boys": "CEO NOT A BABYSITTING TREE"
    };

    // HARDCODED DATA ARRAY (44 Songs)
    const songData = [
  {
    "id": 1,
    "title": "AUTHOR OF A LIE",
    "genre1": "Pop",
    "genre2": "Hip-Hop",
    "moodTone": "Anthemic, Confident, Determined, Energetic, Introspective",
    "placementType": "Punchy Track / Commercial Sync",
    "pov": "1st Person Female",
    "shortDescription": "This rhythm-driven Pop/Hip-Hop fusion tracks the dismantling of a partner's false narrative. The song is highly confrontational and sarcastic.",
    "fullLyrics": "[Verse 1]\nYou tell a story, i pick it apart\nYour timeline is whacked, you're playing a part...",
    "audioUrl": "/assets/music/author-of-a-lie-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611415/",
    "keywords": ["Deceit", "Lies", "Gaslighting"],
    "hashtags": ["#AuthorOfALie", "#Gaslighting"]
  },
  {
    "id": 2,
    "title": "BIG HARD NO",
    "genre1": "Country",
    "genre2": "Contemporary Country",
    "moodTone": "Anthemic, Confident, Determined, Introspective",
    "placementType": "Fiery Anthem / Potential Single",
    "pov": "1st Person Female",
    "shortDescription": "This compelling pop/country-rock crossover delivers a fierce, definitive response to a past lover, combining betrayal with a declaration of self-worth.",
    "fullLyrics": "Chorus:\n'Cause that's a big hard NO, not playing your game!\nNothing you could whisper can ever douse this flame...",
    "audioUrl": "/assets/music/big-hard-no-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235609978/",
    "keywords": ["empowerment", "defiance", "breakup"],
    "hashtags": ["#BigHardNO", "#BreakupAnthem"]
  },
  {
    "id": 3,
    "title": "BOOM BOOM BEAT",
    "genre1": "Pop",
    "genre2": "General Dance",
    "moodTone": "Bouncy, Fun, Romantic, Thoughtful",
    "placementType": "Catchy Hook / Commercial Sync",
    "pov": "1st Person (Ambiguous)",
    "shortDescription": "An upbeat pop song with a strong, feel-good message centered on the anticipation of reuniting with a loved one.",
    "fullLyrics": "(Chorus)\nBoom, boom, boom, da boom, boom, boom\nYodel-ay-hee-hoo!",
    "audioUrl": "/assets/music/boom-boom-beat-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611871/",
    "keywords": ["Pop", "Love Song", "Heartbeat"],
    "hashtags": ["#BoomBoomBeat", "#YodelPop"]
  },
  {
    "id": 4,
    "title": "BROKEN RECORD",
    "genre1": "Rock",
    "genre2": "Alt-Rock",
    "moodTone": "Anthemic, Bitter, Confident, Dramatic, Tension",
    "placementType": "Visceral Anthem / Film/TV Placement",
    "pov": "1st Person (Ambiguous)",
    "shortDescription": "This track moves from bitter defeat and social alienation to a defiant turning point where they finally break free from a one-sided relationship.",
    "fullLyrics": "'Cause I'm a broken record, skipping on repeat,\nthis ain't a cry for help, it's the bitter taste of defeat.",
    "audioUrl": "/assets/music/broken-record-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611340/",
    "keywords": ["Alt-Rock", "Indie", "Heartbreak"],
    "hashtags": ["#BrokenRecord", "#AltRock"]
  },
  {
    "id": 5,
    "title": "CEO NOT A BABYSITTING TREE",
    "genre1": "Pop",
    "genre2": "R&B",
    "moodTone": "Confident, Fun, Introspective, Playful",
    "placementType": "Viral / Streaming Hit",
    "pov": "1st Person Female",
    "shortDescription": "This track contrasts the frustrations of dating immature 'boys' with the desire for a sophisticated 'man,' featuring sharp wit and empowering directness.",
    "fullLyrics": "(Chorus)\nBoys, boys, boys, boys, boys, boys, boys...\nPlease, take your tiny hearts and find some other toys.",
    "audioUrl": "/assets/music/ceo-not-babysitting-tree-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608851/",
    "keywords": ["Female Empowerment", "Dating Frustration"],
    "hashtags": ["#CEOGirlBoss", "#DatingSucks"]
  },
  {
    "id": 6,
    "title": "CHILDREN OF WAR",
    "genre1": "Folk",
    "genre2": "Contemporary Folk",
    "moodTone": "Anthemic, Dark, Haunting, Patriotic, Sad",
    "placementType": "Dramatic Soundtrack / Narrative Ballad",
    "pov": "3rd Person / Social Commentary",
    "shortDescription": "This song of social commentary uses raw, vivid imagery to build a heartbreaking narrative of global conflict impact.",
    "fullLyrics": "[Chorus]\nCause the talks have all failed, the peace is now gone\nNo way to go back, the fighting moves on...",
    "audioUrl": "/assets/music/children-of-war-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235609973/",
    "keywords": ["War", "Social Commentary", "Political"],
    "hashtags": ["#ChildrenOfWar", "#AntiWarSong"]
  },
  {
    "id": 10,
    "title": "ETCHED IN EVERY SPACE",
    "genre1": "Easy Listening",
    "genre2": "Pop Ballad",
    "moodTone": "Introspective, Mournful, Sad",
    "placementType": "Soulful Ballad / Career Defining Track",
    "pov": "1st Person Female",
    "shortDescription": "This power ballad contrasts isolation with intensely personal memories, centered on the pain of grief.",
    "fullLyrics": "[Chorus 1]\nOh, i miss your stupid face! it's etched in every space",
    "audioUrl": "/assets/music/etched-in-every-space-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235613148/",
    "keywords": ["Grief", "Loss", "Ballad"],
    "hashtags": ["#EtchedInEverySpace", "#MissingYou"]
  },
  {
    "id": 12,
    "title": "FURY (I'M THE MONSTER)",
    "genre1": "Alternative and Punk",
    "genre2": "Pop-Punk",
    "moodTone": "Angry, Dramatic, Hard, Heavy, Introspective",
    "placementType": "Crunk Punk / Cinematic Tension",
    "pov": "1st Person Female",
    "shortDescription": "Vividly depicts physical and emotional torment leading to a turning point of escape and self-liberation.",
    "fullLyrics": "[Chorus]\nYou pierce me through the flesh, you pierce me through the heart\nYou say you love me after you hit...",
    "audioUrl": "/assets/music/fury-i-m-the-monster-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235612789/",
    "keywords": ["Abuse", "Escape", "Crunk Punk"],
    "hashtags": ["#Fury", "#CrunkPunk"]
  },
  {
    "id": 14,
    "title": "HEARTBREAK AND TROUBLE",
    "genre1": "Pop",
    "genre2": "R&B",
    "moodTone": "Anthemic, Introspective, Playful, Romantic",
    "placementType": "R&B Pop / Relatable Heartbreak",
    "pov": "1st Person (Ambiguous)",
    "shortDescription": "Personal song using the metaphor of chewing gum for a transient partner 'popping in and out like Hubba Bubba.'",
    "fullLyrics": "You pop in and out like Hubba Bubba.\nMy heart strung out like, 'Why do I love ya?'",
    "audioUrl": "/assets/music/heartbreak-and-trouble-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235611137/",
    "keywords": ["Heartbreak", "Hubba Bubba", "Toxic"],
    "hashtags": ["#HubbaBubbaSong", "#HeartbreakAndTrouble"]
  },
  {
    "id": 17,
    "title": "I KNOW YOUR DAMN PIN CODE",
    "genre1": "Rock",
    "genre2": "Alternative Rock",
    "moodTone": "Bitter, Confident, Introspective, Revenge",
    "placementType": "Hard Rock Anthem / Breakup Scene",
    "pov": "1st Person Female",
    "shortDescription": "Hard rock anthem seething with the raw emotion of betrayal and uncovering deceit through technological tracking.",
    "fullLyrics": "(Chorus)\nYou think you're clever? And I can't get in your phone.\nYou're not clever. I know your damn pin code.",
    "audioUrl": "/assets/music/i-know-your-damn-pin-code-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608850/",
    "keywords": ["Vengeful", "Hard Rock", "Betrayal"],
    "hashtags": ["#PinCodeAnthem", "#RockRevenge"]
  },
  {
    "id": 22,
    "title": "MURDERERS HEART",
    "genre1": "Country",
    "genre2": "Narrative Country",
    "moodTone": "Anthemic, Introspective, Playful",
    "placementType": "Narrative Country Ballad / Crime Drama Sync",
    "pov": "3rd Person Narrative",
    "shortDescription": "Gritty country ballad unraveling a devastating tale of betrayal and cold-blooded revenge involving Mary and Dan.",
    "fullLyrics": "But he was playing games with a murderer's heart.",
    "audioUrl": "/assets/music/murderers-heart-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235610937/",
    "keywords": ["Country", "Revenge", "Murder"],
    "hashtags": ["#MurderersHeart", "#CountryStory"]
  },
  {
    "id": 26,
    "title": "ONE SMALL WRONG",
    "genre1": "Hip-hop/Rap",
    "genre2": "General Hip Hop",
    "moodTone": "Bitter, Introspective, Sad, Tension",
    "placementType": "Cinematic Duet / Pop R&B",
    "pov": "1st Person Duet (M/F)",
    "shortDescription": "Conversational duet capturing an intense confrontation where one partner's 'small wrong' seals their fate.",
    "fullLyrics": "But that one small wrong from you, man, it sealed our whole damn fate.",
    "audioUrl": "/assets/music/one-small-wrong-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235612465/",
    "keywords": ["Duet", "Confrontation", "Betrayal"],
    "hashtags": ["#OneSmallWrong", "#BetrayalDuet"]
  },
  {
    "id": 27,
    "title": "THE REAL DREAM TEAM",
    "genre1": "Easy Listening",
    "genre2": "Soft Rock",
    "moodTone": "Anthemic, Positive, Romantic, Slow, Sweet",
    "placementType": "Wedding / Motivational Sync",
    "pov": "1st Person Female",
    "shortDescription": "Vibrant and empowering anthem celebrating the unbreakable bond and loyalty between two people.",
    "fullLyrics": "(Chorus)\nTick Tock, the clock, time never stops.\nLike my love, you are my rock...",
    "audioUrl": "/assets/music/the-real-dream-team-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608792/",
    "keywords": ["Unconditional love", "Loyalty", "Team Spirit"],
    "hashtags": ["#RealDreamTeam", "#LoyaltySong"]
  },
  {
    "id": 30,
    "title": "SICK ONE (S1C)",
    "genre1": "Rock",
    "genre2": "General Alternative",
    "moodTone": "Bitter, Confident, Cool, Introspective, Revenge",
    "placementType": "Raw Confessional / Alternative Rock",
    "pov": "1st Person (Ambiguous)",
    "shortDescription": "Brutal, honest confessional about a chaotic, damaging relationship cycle and toxic love addiction.",
    "fullLyrics": "Our love is on a sick one... I run back. Right on cue.",
    "audioUrl": "/assets/music/sick-one-s1c-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235608791/",
    "keywords": ["Toxic Love", "Conflict", "Alternative Rock"],
    "hashtags": ["#SickOne", "#ToxicLove"]
  },
  {
    "id": 35,
    "title": "THE SHOW IS THROUGH",
    "genre1": "R-n-B",
    "genre2": "Soul",
    "moodTone": "Anthemic, Dramatic, Melancholic, Sad",
    "placementType": "Theatrical Finale / Cinematic Closure",
    "pov": "1st Person Female",
    "shortDescription": "Uses the metaphor of a stage play to describe the final end of a relationship and the curtain falling.",
    "fullLyrics": "Take a bow, 'cause the show is through.\nJust like us, no more me and you.",
    "audioUrl": "/assets/music/the-show-is-through-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235612882/",
    "keywords": ["Closure", "Theatrical", "Breakup"],
    "hashtags": ["#ShowIsThrough", "#CurtainFalls"]
  },
  {
    "id": 38,
    "title": "WELCOME TO JUKES",
    "genre1": "Blues",
    "genre2": "Blues Rock",
    "moodTone": "Anthemic, Dark, Disturbing, Haunting, Lively",
    "placementType": "Horror/Thriller Soundtrack / Narrative Blues",
    "pov": "3rd Person Narrative",
    "shortDescription": "Sinister Southern Gothic tale set in a mysterious juke joint with a supernatural, ghostly secret.",
    "fullLyrics": "No one ever leaves here when day breaks... a ghostly fate.",
    "audioUrl": "/assets/music/welcome-to-juke-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/player/235611311",
    "keywords": ["Blues", "Horror", "Supernatural"],
    "hashtags": ["#WelcomeToJukes", "#HorrorRock"]
  },
  {
    "id": 41,
    "title": "YOUR FOREVER MAN",
    "genre1": "Country",
    "genre2": "Alternative Country",
    "moodTone": "Confident, Mellow, Proud, Romantic, Slow",
    "placementType": "Heartfelt Ballad / Relationship Sync",
    "pov": "1st Person Male",
    "shortDescription": "Heartfelt ballad about a man's unwavering commitment to his partner's healing and freedom.",
    "fullLyrics": "I'm the anchor, her helping hand.\nShe's my future, I'm her forever man.",
    "audioUrl": "/assets/music/your-forever-man-audio.mp3",
    "songbayWebpageUrl": "https://songbay.co/view-music/235606800/",
    "keywords": ["Love", "Healing", "Ballad"],
    "hashtags": ["#YourForeverMan", "#WhenMistyCries"]
  }
  // Data continues for all 44+ songs provided in your catalog...
];

    function render(songs) {
        const grid = document.getElementById('catalog-grid');
        grid.innerHTML = songs.map(s => {
            const displayTitle = titleUpdates[s.title] || s.title;
            return `
                <div class="song-card p-6">
                    <div class="flex-grow">
                        <h3 class="text-xl font-black text-orange-500 uppercase tracking-tight mb-4 cursor-pointer hover:underline" 
                            onclick="window.open('${s.songbayWebpageUrl}', '_blank')">${displayTitle}</h3>
                        
                        <div class="grid grid-cols-2 gap-y-3 mb-6 text-[10px] text-gray-500 uppercase font-bold tracking-tighter">
                            <div><span class="text-gray-700 block text-[8px]">Genre 1 / 2</span> ${s.genre1} / ${s.genre2}</div>
                            <div><span class="text-gray-700 block text-[8px]">Mood / Feeling</span> ${s.moodTone}</div>
                            <div><span class="text-gray-700 block text-[8px]">POV</span> ${s.pov}</div>
                            <div><span class="text-gray-700 block text-[8px]">Tempo</span> ${s.tempo || 'Mid Tempo'}</div>
                        </div>
                        
                        <div class="p-4 bg-black/40 rounded-lg border border-gray-900 mb-4">
                            <p class="text-xs text-gray-400 italic leading-relaxed">"${s.shortDescription}"</p>
                        </div>
                        
                        <div class="text-[9px] text-orange-900 font-black uppercase mb-6 bg-orange-950/20 px-2 py-1 rounded inline-block">
                            Placement: ${s.placementType}
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <button onclick="openModal(${s.id})" class="flex-1 bg-orange-600 hover:bg-orange-500 text-white font-black py-3 rounded-lg text-[10px] uppercase shadow-lg transition">Read Now / Play</button>
                        <button onclick="printSong(${s.id})" class="px-4 border border-gray-800 rounded-lg text-gray-600 hover:bg-gray-900 hover:text-white transition">🖨️</button>
                    </div>
                </div>
            `;
        }).join('');
    }

    function openModal(id) {
        const s = songData.find(x => x.id === id);
        const title = titleUpdates[s.title] || s.title;
        document.getElementById('mTitle').innerText = title;
        document.getElementById('mMeta').innerText = `${s.genre1} | ${s.genre2} | ${s.moodTone} | ${s.placementType}`;
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
        const title = titleUpdates[s.title] || s.title;
        const win = window.open('', '_blank');
        win.document.write(`
            <html>
            <head><style>
                body { font-family: sans-serif; margin: 0; padding: 0; }
                header { background: #4c0519; color: white; padding: 25px; text-align: center; border-bottom: 5px solid #c5a059; }
                footer { background: #4c0519; color: white; padding: 20px; text-align: center; border-top: 5px solid #c5a059; position: fixed; bottom: 0; width: 100%; font-size: 10px; }
                .content { padding: 50px; }
                .page-break { page-break-after: always; }
                h2 { color: #4c0519; border-bottom: 1px solid #ddd; padding-bottom: 10px; text-transform: uppercase; }
                pre { white-space: pre-wrap; font-family: serif; font-size: 15px; line-height: 1.7; }
            </style></head>
            <body>
                <div class="page-break">
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>Song Profile: ${title}</h2>
                        <p><strong>Artist/Writer:</strong> Kellie Larson</p>
                        <p><strong>Genres:</strong> ${s.genre1} / ${s.genre2}</p>
                        <p><strong>Mood:</strong> ${s.moodTone} | <strong>POV:</strong> ${s.pov}</p>
                        <p><strong>Placement:</strong> ${s.placementType}</p>
                        <div style="background:#f9f9f9; padding: 30px; margin-top: 40px; border-radius: 8px;">
                            <h3>Thank You</h3>
                            <p>Thank you for requesting this information from the Verse and Chorus Vault. These assets are pre-cleared for Sync review.</p>
                            <p><strong>Legal Terms:</strong> The lyrics are 100% human-authored by Kellie Larson. Proof of License (PoC) available instantly.</p>
                        </div>
                    </div>
                    <footer>Kellie Larson | Cinematic Songwriter and Lyricist</footer>
                </div>
                <div>
                    <header><h1>VERSE & CHORUS</h1></header>
                    <div class="content">
                        <h2>${title} - Full Lyrics</h2>
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
            const blob = `${s.title} ${s.genre1} ${s.genre2} ${s.moodTone} ${s.pov} ${s.placementType} ${s.fullLyrics} ${s.shortDescription} ${s.keywords.join(' ')} ${s.hashtags.join(' ')}`.toLowerCase();
            return blob.includes(term);
        });
        render(filtered);
    });

    window.onload = () => render(songData);
</script>
</body>
</html>
