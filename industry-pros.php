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
            --text-light: #f4f4f4;
            --sunset-orange: #f97316;
        }

        body {
            background-color: var(--dark-bg);
            color: var(--text-light);
            font-family: 'Inter', sans-serif;
        }

        header {
            background-color: #000;
            padding: 40px 20px;
            text-align: center;
            border-bottom: 2px solid var(--gold);
        }

        .logo-main {
            font-size: 2.5rem;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .logo-main span { color: var(--gold); }

        .filter-btn {
            background-color: #262626;
            border: 1px solid #3f3f46;
            color: #d4d4d8;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            transition: all 0.2s;
        }

        .filter-btn.active {
            background-color: var(--sunset-orange);
            border-color: var(--sunset-orange);
            color: white;
        }

        .song-card {
            background: var(--card-bg);
            border: 1px solid #27272a;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .song-card:hover {
            border-color: var(--gold);
            transform: translateY(-4px);
        }

        footer {
            background-color: #000;
            padding: 60px 20px;
            text-align: center;
            border-top: 2px solid var(--gold);
            margin-top: 60px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo-main">VERSE <span>&</span> CHORUS</div>
    <div class="tracking-[4px] uppercase text-[0.9rem] text-[#c5a059] mt-2">Industry Pro Vault</div>
</header>

<main class="max-w-7xl mx-auto px-6 py-12">
    
    <div class="bg-[#121212] border border-[#c5a059]/30 rounded-xl p-8 mb-12 shadow-2xl">
        <h2 class="text-[#c5a059] text-2xl font-bold mb-4">Rights & Licensing Assurance</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-400">
            <p><strong class="text-[#c5a059]">✅ Royalty-Free Composition:</strong> AI-generated placeholder tracks are covered by a Lifetime Royalty-Free Commercial License.</p>
            <p><strong class="text-[#c5a059]">✅ Guaranteed Lyric Ownership:</strong> 100% human-authored by **Kellie Larson** and registered via Songbay.</p>
            <p><strong class="text-[#c5a059]">✅ Zero Future AI Royalties:</strong> No performance or mechanical royalties owed to AI platform owners.</p>
            <p><strong class="text-[#c5a059]">✅ Path to Full Copyright:</strong> Re-recording music based on these lyrics creates a new, fully human-authored derivative work.</p>
        </div>
    </div>

    <div class="mb-10 p-6 bg-[#121212] rounded-xl border border-gray-800">
        <h3 class="text-gray-400 uppercase tracking-widest text-xs font-bold mb-4">Search & Filter Catalog</h3>
        <input type="text" id="searchBar" placeholder="Search by Title, Theme, or Keyword..." 
               class="w-full bg-black border border-gray-700 rounded-lg p-3 mb-6 focus:border-orange-500 outline-none text-white">
        
        <div class="flex flex-wrap gap-3" id="filterContainer">
            <button class="filter-btn active" data-filter="all">All Songs</button>
            </div>
    </div>

    <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        </div>
</main>

<footer>
    <div class="text-[1.8rem] text-[#c5a059] mb-1">Kellie Larson</div>
    <div class="tracking-[3px] uppercase text-[0.85rem] text-gray-400 mb-6">Cinematic Songwriter and Lyricist</div>
    <div class="flex justify-center gap-8 text-sm border-t border-gray-900 pt-6">
        <a href="tel:760-537-0222">760-537-0222</a>
        <a href="mailto:info@verseandchorus.com">info@verseandchorus.com</a>
    </div>
    <div class="mt-8 text-[0.7rem] text-gray-600">&copy; 2025 Verse and Chorus</div>
</footer>

<script>
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

    let songData = [];

    async function initVault() {
        try {
            const response = await fetch('lyrics.json');
            songData = await response.json();
            renderCatalog(songData);
        } catch (e) {
            console.error("Data load failed", e);
        }
    }

    function renderCatalog(songs) {
        const grid = document.getElementById('catalog-grid');
        grid.innerHTML = songs.map(song => {
            const displayTitle = titleUpdates[song.title] || song.title;
            return `
                <div class="song-card p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-orange-500">${displayTitle}</h3>
                            <span class="text-gray-600 text-xs font-mono">ID: ${song.id}</span>
                        </div>
                        
                        <div class="space-y-1 mb-4 text-[0.8rem] text-gray-400">
                            <p><span class="text-gray-600">Genre:</span> ${song.genre1} / ${song.genre2 || 'N/A'}</p>
                            <p><span class="text-gray-600">POV:</span> ${song.pov || 'N/A'}</p>
                            <p><span class="text-gray-600">Mood:</span> ${song.moodTone || 'N/A'}</p>
                            <p><span class="text-gray-600">Placement:</span> ${song.placementType || 'N/A'}</p>
                        </div>

                        <p class="text-sm text-gray-300 italic mb-6 line-clamp-3">
                            "${song.shortDescription || 'Placeholder'}"
                        </p>
                    </div>

                    <div class="flex gap-2">
                        <button class="flex-1 bg-orange-600 hover:bg-orange-700 text-white text-xs font-bold py-2 rounded transition" onclick="window.open('${song.songbayWebpageUrl}', '_blank')">View License</button>
                        <button class="px-3 border border-gray-700 rounded hover:bg-gray-800" title="Print Lyrics">🖨️</button>
                    </div>
                </div>
            `;
        }).join('');
    }

    // Search logic
    document.getElementById('searchBar').addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase();
        const filtered = songData.filter(s => 
            s.title.toLowerCase().includes(term) || 
            (s.shortDescription && s.shortDescription.toLowerCase().includes(term)) ||
            (s.moodTone && s.moodTone.toLowerCase().includes(term))
        );
        renderCatalog(filtered);
    });

    window.onload = initVault;
</script>
</body>
</html>

