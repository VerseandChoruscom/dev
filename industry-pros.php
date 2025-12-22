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
        body { background-color: var(--dark-bg); color: #f4f4f4; font-family: 'Inter', sans-serif; }
        header { background-color: #000; padding: 40px 20px; text-align: center; border-bottom: 2px solid var(--gold); }
        .logo-main { font-size: 2.5rem; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; }
        .logo-main span { color: var(--gold); }
        .song-card { background: var(--card-bg); border: 1px solid #27272a; border-radius: 12px; transition: all 0.3s ease; }
        .song-card:hover { border-color: var(--gold); transform: translateY(-4px); }
        footer { background-color: #000; padding: 60px 20px; text-align: center; border-top: 2px solid var(--gold); margin-top: 60px; }
    </style>
</head>
<body>

<header>
    <div class="logo-main">VERSE <span>&</span> CHORUS</div>
    <div class="tracking-[4px] uppercase text-[0.9rem] text-[#c5a059] mt-2">Industry Pro Vault</div>
</header>

<main class="max-w-7xl mx-auto px-6 py-12">
    <div class="mb-10 p-6 bg-[#121212] rounded-xl border border-gray-800">
        <h3 class="text-gray-400 uppercase tracking-widest text-xs font-bold mb-4">Search & Metadata Filter</h3>
        <input type="text" id="searchBar" placeholder="Search by POV, Genre, Mood, or Placement (e.g. 'Revenge', '1st Person', 'Hip-Hop')..." 
               class="w-full bg-black border border-gray-700 rounded-lg p-3 outline-none text-white focus:border-orange-500">
        <p class="text-xs text-gray-500 mt-2">Filtering by: Title, Description, Genre 1 & 2, POV, Mood, and Placement Type.</p>
    </div>

    <div id="catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div id="loader" class="col-span-full text-center py-10 text-gray-500 text-xl">Initializing Catalog...</div>
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
    // Title mapping based on instruction rules
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

    // Initialize Catalog
    async function initVault() {
        const grid = document.getElementById('catalog-grid');
        try {
            // Attempt to fetch file
            const response = await fetch('lyrics.json');
            if (!response.ok) throw new Error("File not found");
            songData = await response.json();
        } catch (e) {
            console.warn("External lyrics.json not found. Using internal data fallback.");
            // Fallback to internal data if fetch fails
            songData = [
                { "id": 1, "title": "AUTHOR OF A LIE", "genre1": "Pop", "genre2": "Hip-Hop", "moodTone": "Anthemic", "pov": "1st Person Female", "placementType": "Commercial Sync", "shortDescription": "Highly confrontational track." },
                { "id": 5, "title": "Boys Boys Boys", "genre1": "Pop", "genre2": "R&B", "moodTone": "Confident", "pov": "1st Person Female", "placementType": "Viral Hit", "shortDescription": "Empowering anthem." }
            ];
        } finally {
            renderCatalog(songData);
        }
    }

    function renderCatalog(songs) {
        const grid = document.getElementById('catalog-grid');
        if (songs.length === 0) {
            grid.innerHTML = `<div class="col-span-full text-center text-gray-600">No matching songs found in the Vault.</div>`;
            return;
        }

        grid.innerHTML = songs.map(song => {
            // Correct the Title
            const displayTitle = titleUpdates[song.title] || song.title;

            return `
                <div class="song-card p-6 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-orange-500 mb-4">${displayTitle}</h3>
                        <div class="space-y-1 mb-4 text-[0.8rem] text-gray-400">
                            <p><span class="text-gray-600">Genre:</span> ${song.genre1} / ${song.genre2 || 'N/A'}</p>
                            <p><span class="text-gray-600">POV:</span> ${song.pov || 'N/A'}</p>
                            <p><span class="text-gray-600">Mood:</span> ${song.moodTone || 'N/A'}</p>
                            <p><span class="text-gray-600">Placement:</span> ${song.placementType || 'N/A'}</p>
                        </div>
                        <p class="text-sm text-gray-300 italic mb-6">"${song.shortDescription || 'Placeholder'}"</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="flex-1 bg-orange-600 text-white text-xs font-bold py-2 rounded">Read Lyrics</button>
                        <button class="px-3 border border-gray-700 rounded text-gray-400">🖨️</button>
                    </div>
                </div>
            `;
        }).join('');
    }

    // Comprehensive Search Logic
    document.getElementById('searchBar').addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase();
        const filtered = songData.filter(s => {
            const searchString = [
                s.title,
                s.genre1,
                s.genre2,
                s.pov,
                s.moodTone,
                s.placementType,
                s.shortDescription
            ].join(' ').toLowerCase();
            
            return searchString.includes(term);
        });
        renderCatalog(filtered);
    });

    window.onload = initVault;
</script>
</body>
</html>
