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
        /* Custom Styles to match Index HTML */
        :root {
            --burgundy: #800020;
            --orange-active: #f97316;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #000000;
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

    <a id="top" class="absolute -top-20"></a>

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-3 flex justify-between items-center">
            
            <div class="flex items-center space-x-4">
                <a href="/index.html" class="flex items-center space-x-2">
                    <div class="h-8 w-8 bg-white rounded-full flex items-center justify-center text-[var(--burgundy)] font-bold text-xs">V&C</div>
                </a>
            </div>

            <nav id="nav-desktop" class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider">
                    <li><a href="/index.html" class="hover:text-slate-300 transition duration-200">HOME</a></li>
                    <li><a href="/bio.html" class="hover:text-slate-300 transition duration-200">BIO</a></li>
                    <li><a href="/industry.pros.php" class="hover:text-slate-300 transition duration-200 text-amber-400">INDUSTRY PROS</a></li>
                    <li><a href="/lyrics.html" class="hover:text-slate-300 transition duration-200">MUSIC</a></li>
                    <li><a href="/green-room.html" class="hover:text-slate-300 transition duration-200">GREEN ROOM</a></li>
                    <li><a href="/articles.html" class="hover:text-slate-300 transition duration-200">ARTICLES</a></li>
                    <li><a href="/lyric-critque.html" class="hover:text-slate-300 transition duration-200">LYRIC CRITIQUE</a></li>
                    <li><a href="/collab.html" class="hover:text-slate-300 transition duration-200">COLLAB/CONSULT</a></li>
                    <li><a href="/contact.html" class="hover:text-slate-300 transition duration-200">CONTACT</a></li>
                    <li><a href="/legal.html" class="hover:text-slate-300 transition duration-200">LEGAL</a></li>
                </ul>
            </nav>

            <button id="hamburger-menu" class="md:hidden text-white focus:outline-none p-2 rounded-md hover:bg-black/20 transition duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden absolute w-full bg-[var(--burgundy)] transition-all duration-300 shadow-lg">
            <ul class="flex flex-col text-center pb-2 text-sm font-semibold tracking-wider">
                <li><a href="/index.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">HOME</a></li>
                <li><a href="/bio.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">BIO</a></li>
                <li><a href="/industry.pros.php" class="block py-2 text-white hover:bg-slate-700 transition duration-200">INDUSTRY PROS</a></li>
                <li><a href="/lyrics.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">MUSIC</a></li>
                <li><a href="/green-room.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">GREEN ROOM</a></li>
                <li><a href="/articles.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">ARTICLES</a></li>
                <li><a href="/lyric-critque.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">LYRIC CRITIQUE</a></li>
                <li><a href="/collab.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">COLLAB/CONSULT</a></li>
                <li><a href="/contact.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">CONTACT</a></li>
                <li><a href="/legal.html" class="block py-2 text-white hover:bg-slate-700 transition duration-200">LEGAL</a></li>
            </ul>
        </div>
    </header>

    <div class="bg-black py-4 border-b border-gray-800 shadow-lg">
        <div class="content-container text-center">
            <h1 class="script-font text-5xl sm:text-6xl font-bold tracking-wider text-amber-400">Verse and Chorus</h1>
        </div>
    </div>

    <main class="flex-grow py-10">
        <div class="content-container">

            <div class="mb-10 pt-4">
                <div class="page-title-block">
                    <h2 class="text-4xl font-extrabold tracking-widest text-white ml-4">INDUSTRY PRO VAULT</h2>
                </div>
                <p class="text-lg mt-2 text-gray-300 ml-4">Curated catalog for A&R and sync professionals</p>
            </div>
            
            <div id="card-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($songs as $song): 
                    // Prepare data for display
                    $img = !empty($song['coverImageUrl']) ? $song['coverImageUrl'] : 'https://placehold.co/200x200/800020/ffffff?text=No+Image';
                    $genres = implode(' / ', array_filter([$song['genre1'], $song['genre2']]));
                    
                    // CRITICAL: Encode song data safely for HTML attributes to prevent breaking JS
                    $songJsonSafe = htmlspecialchars(json_encode($song), ENT_QUOTES, 'UTF-8');
                ?>
                <div class="song-card p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 border border-gray-700">
                    <img src="<?php echo htmlspecialchars($img); ?>" alt="Cover Art" class="mx-auto mb-4 w-full max-w-[200px] h-auto rounded-lg object-cover aspect-square">
                    
                    <h3 class="text-xl font-bold text-slate-200 mb-1 flex items-center justify-between">
                        <?php echo htmlspecialchars($song['title']); ?>
                    </h3>
                    <p class="text-xs text-gray-400 mb-1">Writer: <?php echo htmlspecialchars($song['artistWriter']); ?></p>
                    <p class="text-xs text-gray-400 mb-3">Genre: <?php echo htmlspecialchars($genres); ?></p>
                    <p class="text-sm italic text-gray-300 h-10 overflow-hidden text-ellipsis mb-4">
                        <?php echo htmlspecialchars($song['shortDescription']); ?>
                    </p>
                    
                    <div class="mt-4 flex gap-2">
                        <button onclick='openMusicStand(<?php echo $songJsonSafe; ?>)' class="flex-1 px-4 py-2 text-white font-semibold rounded-lg btn-sunset-orange shadow-md hover:shadow-lg">
                            Play / View
                        </button>
                        <button onclick='handlePrint(<?php echo $songJsonSafe; ?>)' class="flex-1 px-4 py-2 text-white font-semibold rounded-lg btn-sunset-orange shadow-md hover:shadow-lg">
                            Print
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </main>

    <footer class="bg-[var(--burgundy)] py-6 mt-auto">
        <div class="content-container text-center text-sm text-gray-200">
            <p class="mb-0 w-fit mx-auto">Kellie Larson</p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1 text-xs">Cinematic Songwriter and Lyricist</p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1">
                <a href="tel:7605370222" class="hover:underline">760-537-0222</a>
            </p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1">
                <a href="mailto:info@verseandchorus.com" class="hover:underline">info@verseandchorus.com</a>
            </p>
            <p class="pt-2">
                <a href="/contact.html" class="hover:underline mx-2">Contact</a>
                <span class="mx-1">|</span>
                <a href="/legal.html" class="hover:underline mx-2">Terms</a>
            </p>
            <p class="mt-4 text-xs text-gray-400">&copy; 2025 Verse and Chorus</p>
        </div>
    </footer>

    <button id="back-to-top-btn" 
            class="fixed bottom-5 right-5 z-40 p-3 rounded-full 
                   bg-[var(--burgundy)] text-white shadow-lg hover:bg-red-800 
                   transition-opacity duration-300 opacity-0 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>

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

    
