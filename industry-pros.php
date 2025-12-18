<?php
// industry-pros.php

// 1. Load the JSON data
$json_data = file_get_contents('lyrics.json');

// 2. Error Handling if JSON is missing
if ($json_data === false) {
    die("Error: lyrics.json file not found.");
}

// 3. Decode JSON into PHP Array
$songs = json_decode($json_data, true);
if ($songs === null) {
    die("Error: Invalid JSON format.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pros | Verse and Chorus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* Custom Styles inheriting Verse and Chorus Theme */
        :root {
            --burgundy: #800020;
            --orange-active: #f97316;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #111827; /* Dark Gray/Black */
            color: white;
        }
        .content-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .script-font {
            font-family: 'Brush Script MT', cursive;
        }
        .btn-sunset-orange {
            background-color: #ea580c;
            transition: background-color 0.3s;
        }
        .btn-sunset-orange:hover {
            background-color: #ff741a;
        }
        /* Music Stand Modal Styles */
        .music-stand-modal {
            background-color: rgba(0, 0, 0, 0.95);
        }
        .ms-content {
            background: #1f2937;
            border: 2px solid #4b5563;
        }
        .lyrics-box {
            white-space: pre-wrap;
            font-family: inherit;
            background: #111827;
            padding: 1rem;
            border-radius: 0.5rem;
            border: 1px solid #374151;
            max-height: 400px;
            overflow-y: auto;
            color: #d1d5db;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-3 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/index.html" class="flex items-center space-x-2">
                    <div class="h-8 w-8 bg-white rounded-full flex items-center justify-center text-[var(--burgundy)] font-bold text-xs">V&C</div>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider">
                    <li><a href="/index.html" class="hover:text-slate-300">HOME</a></li>
                    <li><a href="/industry-pros.php" class="text-amber-400">INDUSTRY PROS</a></li>
                    <li><a href="/contact.html" class="hover:text-slate-300">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="bg-black py-6 border-b border-gray-800 shadow-lg">
        <div class="content-container text-center">
            <h1 class="script-font text-5xl text-amber-400">Industry Pros</h1>
            <p class="text-gray-400 mt-2">Curated Cinematic Selection by Kellie Larson</p>
        </div>
    </div>

    <main class="flex-grow py-10">
        <div class="content-container">
            
            <div id="card-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($songs as $song): 
                    // Prepare data for display
                    $img = !empty($song['coverImageUrl']) ? $song['coverImageUrl'] : 'https://placehold.co/200x200/800020/ffffff?text=No+Image';
                    $genres = implode(' / ', array_filter([$song['genre1'], $song['genre2']]));
                ?>
                <div class="song-card p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 border border-gray-700">
                    <img src="<?php echo htmlspecialchars($img); ?>" alt="Cover Art" class="mx-auto mb-4 w-full max-w-[200px] h-auto rounded-lg object-cover aspect-square">
                    
                    <h3 class="text-xl font-bold text-slate-200 mb-1"><?php echo htmlspecialchars($song['title']); ?></h3>
                    <p class="text-xs text-gray-400 mb-1">Writer: <?php echo htmlspecialchars($song['artistWriter']); ?></p>
                    <p class="text-xs text-gray-400 mb-3">Genre: <?php echo htmlspecialchars($genres); ?></p>
                    <p class="text-sm italic text-gray-300 h-10 overflow-hidden text-ellipsis mb-4">
                        <?php echo htmlspecialchars($song['shortDescription']); ?>
                    </p>
                    
                    <div class="flex gap-2">
                        <button onclick='openMusicStand(<?php echo json_encode($song); ?>)' class="flex-1 px-4 py-2 text-white font-semibold rounded-lg btn-sunset-orange shadow-md">
                            Play / View
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </main>

    <footer class="bg-[var(--burgundy)] py-6 mt-auto">
        <div class="content-container text-center text-sm text-gray-200">
            <p class="font-bold">Kellie Larson</p>
            <p class="text-xs mb-2">Cinematic Songwriter and Lyricist</p>
            <p>&copy; 2025 Verse and Chorus. All Rights Reserved.</p>
        </div>
    </footer>


    <div id="musicStandModal" class="fixed inset-0 z-50 hidden justify-center items-center p-4 music-stand-modal backdrop-blur-sm overflow-y-auto">
        
        <div class="ms-content rounded-xl shadow-2xl w-full max-w-4xl transform transition-all relative">
            
            <button onclick="closeMusicStand()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl font-bold">&times;</button>

            <div class="p-6 md:p-8">
                
                <div class="text-center mb-6 border-b border-gray-600 pb-4">
                    <h2 id="ms-title" class="text-3xl font-extrabold text-amber-400 mb-2">Song Title</h2>
                    <p id="ms-writer" class="text-sm text-gray-300">Written by...</p>
                    <p id="ms-copyright" class="text-xs text-gray-500 mt-1">© 2025</p>
                </div>

                <div class="mb-8 bg-black rounded-lg p-3">
                    <audio id="ms-player" controls class="w-full h-10"></audio>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="space-y-4 text-sm text-gray-300">
                        
                        <div>
                            <h4 class="text-amber-500 font-bold uppercase text-xs">Cinematic Placement</h4>
                            <p id="ms-placement" class="text-white">Placeholder</p>
                        </div>

                        <div>
                            <h4 class="text-amber-500 font-bold uppercase text-xs">Bio / Strengths</h4>
                            <p id="ms-bio" class="text-white">Placeholder</p>
                        </div>

                        <div>
                            <h4 class="text-amber-500 font-bold uppercase text-xs">Description</h4>
                            <p id="ms-description" class="text-white italic">Placeholder</p>
                        </div>

                        <div>
                            <h4 class="text-amber-500 font-bold uppercase text-xs">Legal Terms</h4>
                            <div id="ms-legal" class="text-white bg-gray-800 p-2 rounded border border-gray-700">
                                </div>
                        </div>

                        <div>
                            <h4 class="text-amber-500 font-bold uppercase text-xs">Hashtags</h4>
                            <p id="ms-hashtags" class="text-blue-300">#Placeholder</p>
                        </div>

                    </div>

                    <div>
                        <h4 class="text-amber-500 font-bold uppercase text-xs mb-2">Full Lyrics</h4>
                        <div id="ms-lyrics" class="lyrics-box">
                            </div>
                    </div>
                </div>

                <div class="mt-8 pt-4 border-t border-gray-600 text-center text-xs text-gray-500">
                    <p>Verse and Chorus | Kellie Larson | Confidential Industry Review</p>
                </div>

            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('musicStandModal');
        const audioPlayer = document.getElementById('ms-player');

        function openMusicStand(song) {
            // Populate Text Fields
            document.getElementById('ms-title').innerText = song.title;
            document.getElementById('ms-writer').innerText = "Written by " + song.artistWriter;
            document.getElementById('ms-copyright').innerText = song.copyright;
            document.getElementById('ms-placement').innerText = song.placementType || song.category;
            
            // Combine short description and mood for 'Bio/Strengths'
            document.getElementById('ms-bio').innerText = (song.shortDescription || '') + " " + (song.moodTone ? "(" + song.moodTone + ")" : "");
            
            document.getElementById('ms-description').innerText = song.longDescription;
            document.getElementById('ms-lyrics').innerText = song.fullLyrics;
            
            // Format Hashtags
            if (Array.isArray(song.hashtags)) {
                document.getElementById('ms-hashtags').innerText = song.hashtags.join(' ');
            } else {
                document.getElementById('ms-hashtags').innerText = "";
            }

            // Format Legal Terms (Licensing Object)
            let legalHtml = "";
            if (song.licensing) {
                if (song.licensing.standardLicensePrice) legalHtml += `<div><strong>Standard:</strong> ${song.licensing.standardLicensePrice}</div>`;
                if (song.licensing.extendedLicensePrice) legalHtml += `<div><strong>Extended:</strong> ${song.licensing.extendedLicensePrice}</div>`;
            }
            document.getElementById('ms-legal').innerHTML = legalHtml || "Contact for terms.";

            // Set Audio Source
            if (song.audioUrl) {
                audioPlayer.src = song.audioUrl;
                audioPlayer.style.display = 'block';
            } else {
                audioPlayer.style.display = 'none';
            }

            // Show Modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Stop background scrolling
        }

        function closeMusicStand() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            audioPlayer.pause(); // Stop music
            audioPlayer.src = ""; // Reset source
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Close modal on outside click
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeMusicStand();
            }
        });
        
        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeMusicStand();
            }
        });
    </script>
</body>
</html>
