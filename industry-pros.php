<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industry Pro Vault | Verse and Chorus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Define Custom Colors & Fonts */
        :root {
            --burgundy: #800020; /* Deep Burgundy (Secondary accent) */
            --sunset-orange: #FF7F50; /* Sunset Orange (Primary interactive color) */
            --light-text: #e0e0e0;
            --main-text: #ffffff;
        }

        /* Apply global styles */
        body {
            background-color: #000000;
            color: var(--light-text);
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth; /* For smooth scrolling to the top */
        }

        /* Script font for the main site title */
        .script-font {
            font-family: 'Parisienne', cursive;
        }

        /* The unique page title block style */
        .page-title-block {
            display: flex;
            align-items: center;
            border-left: 2px solid var(--light-text);
            padding-left: 1rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        /* Custom link styling (Sunset Orange for ALL links on hover) */
        a {
            color: var(--light-text); /* Default for general links */
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: var(--sunset-orange) !important; /* Global orange hover */
        }
        
        /* Ensure specific hover classes also target orange */
        .hover\:underline:hover {
            text-decoration-color: var(--sunset-orange);
        }

        /* Navigation Bar Styles */
        .nav-bar {
            background-color: rgba(0, 0, 0, 0.9); /* Slightly transparent black */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .nav-link {
            color: var(--main-text); /* **NAV LINKS ARE NOW PURE WHITE** */
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--sunset-orange); /* Orange hover on nav links */
        }

        /* Song Item Styling */
        .song-item {
            background-color: rgba(30, 30, 30, 0.9); /* Darker background for each item */
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
            border: 1px solid rgba(128, 0, 32, 0.4); /* Subtle burgundy border */
        }

        .song-item:hover {
            transform: translateY(-5px);
        }

        /* Play Button Styling (Sunset Orange) */
        .play-button {
            cursor: pointer;
            transition: color 0.3s;
            font-size: 1.5rem;
            color: var(--light-text); /* Default color */
        }

        .play-button:hover {
            color: var(--sunset-orange); /* Orange hover */
        }

        .audio-playing {
            color: var(--sunset-orange); /* Orange when active */
        }

        /* Back-to-Top Button Style (Sunset Orange) */
        #back-to-top-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: var(--sunset-orange); /* Orange background */
            color: var(--main-text);
            padding: 0.75rem 1rem;
            border-radius: 9999px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
            transition: opacity 0.3s, transform 0.3s;
            z-index: 50;
        }
        
        /* Utility for the back-to-top button transition */
        .opacity-0 {
            opacity: 0;
        }
        .opacity-100 {
            opacity: 1;
        }

    </style>
</head>
<body>

    <header class="nav-bar sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="#" class="text-2xl script-font text-white">Verse and Chorus</a>

                <nav class="hidden md:flex space-x-8">
                    <a href="#vault" class="nav-link text-white">Song Vault</a>
                    <a href="#profile" class="nav-link text-white">Pro Profile</a>
                    <a href="#contact" class="nav-link text-white">Contact</a>
                    <a href="/index.php" class="nav-link text-white">Main Site</a>
                </nav>

                <button id="hamburger-menu" class="md:hidden p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col items-start">
                <a href="#vault" class="block px-3 py-2 rounded-md text-base font-medium nav-link hover:bg-gray-700">Song Vault</a>
                <a href="#profile" class="block px-3 py-2 rounded-md text-base font-medium nav-link hover:bg-gray-700">Pro Profile</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium nav-link hover:bg-gray-700">Contact</a>
                <a href="/index.php" class="block px-3 py-2 rounded-md text-base font-medium nav-link hover:bg-gray-700">Main Site</a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <div class="page-title-block">
            <h1 class="text-3xl font-bold text-white">Industry Pro Vault</h1>
        </div>
        
        <section id="profile" class="mb-12">
            <h2 class="text-xl font-semibold mb-4 text-white border-b border-burgundy pb-2">Welcome, Industry Professional</h2>
            <p class="text-light-text leading-relaxed">This exclusive vault contains pre-cleared, fully owned lyrical assets ready for placement and production. All lyrics are 100% human-authored and legally secured. The accompanying demos utilize Mobiversite/Donna AI for reference only, ensuring zero future performance royalties are owed to the AI platform upon re-recording.</p>
        </section>

        <section id="vault">
            <h2 class="text-xl font-semibold mb-6 text-white border-b border-burgundy pb-2">The Lyric Portfolio (43 Assets)</h2>
            
            <div class="space-y-6">
                
                <div class="song-item p-4 flex flex-col md:flex-row items-start md:items-center justify-between">
                    <div class="flex items-start">
                        <img src="/assets/covers/author-of-a-lie-cover-art.jpg" alt="Author of a Lie Cover Art" class="w-20 h-20 object-cover rounded-md mr-4">
                        
                        <div>
                            <h3 class="text-lg font-bold text-white">Author of a Lie</h3>
                            <p class="text-sm text-light-text mb-1">Genre: Pop-Country / Indie Ballad</p>
                            <p class="text-sm text-burgundy">Commercial Rank: Tier A (Immediate Pitch)</p>
                            
                            <div class="flex space-x-4 text-sm mt-1">
                                <a href="/assets/lyrics/Author_of_a_Lie_Professional_Pitch.pdf" target="_blank" class="hover:underline transition duration-200">🖨️ Print Lyric</a>
                                <a href="https://songbay.co/author-of-a-lie" target="_blank" class="hover:underline transition duration-200">💰 Acquire IP (Songbay)</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 md:mt-0 flex items-center">
                        <span class="text-light-text mr-2">Preview Demo:</span>
                        <button class="play-button" data-src="/assets/audio/author-of-a-lie-demo.mp3" title="Play Demo">
                            ▶️
                        </button>
                    </div>
                </div>
                
            <li><strong class="text-white">✅ Zero Future Royalties from AI:</strong> Your label/production company will never owe performance or mechanical royalties to the AI platform owner (Mobiversite/Donna AI) for the use of the demo.</li>
            <li><strong class="text-white">✅ Simple Path to Full Copyright:</strong> Once you sign the song and re-record the music (replacing the AI vocals/instruments), the song becomes a new, fully human-authored derivative work based on our copyrighted lyrics, providing your company with full, traditional copyright ownership over the final master and publishing.</li>
            <li><strong class="text-white">✅ Immediate Clearance:</strong> All material is pre-cleared for commercial development and Sync Licensing under the terms of our active PRO subscription. Proof of License (PoC) available instantly upon request.</li>
        </ul>
    </div>
    
    <div class="flex flex-wrap justify-between items-center bg-gray-900 p-4 rounded-lg mb-4 text-white shadow-lg border-4 border-gray-400">
        <div class="text-lg font-semibold header-gold mb-4 sm:mb-0">Filter Catalog:</div>
        <div class="flex flex-wrap gap-2 text-sm">
            <select class="p-2 bg-white border border-gray-400 rounded-md text-black focus:ring-1 focus:ring-[var(--burgundy)]">
                <option>Genre</option>
                <option>Pop</option>
                <option>Rock</option>
                <option>Electronic</option>
                <option>Folk</option>
            </select>
            <select class="p-2 bg-white border border-gray-400 rounded-md text-black focus:ring-1 focus:ring-[var(--burgundy)]">
                <option>Mood</option>
                <option>Uplifting</option>
                <option>Melancholy</option>
                <option>Frustrated</option>
                <option>Defiant</option>
                <option>Romantic</option>
                <option>Reflective</option>
                <option>Restless</option>
                <option>Purposeful</option>
            </select>
            <select class="p-2 bg-white border border-gray-400 rounded-md text-black focus:ring-1 focus:ring-[var(--burgundy)]">
                <option>Theme (A&R Category)</option>
                <option>Gaslighting</option>
                <option>Empowerment</option>
                <option>Reunion</option>
                <option>Loss of Market Share</option>
                <option>Narrative of Disenchantment</option>
                <option>Narrative of Iteration</option>
                <option>Social Commentary</option>
                <option>Empowerment Arc</option>
            </select>
            <button class="btn-orange text-white font-semibold py-2 px-4 rounded-md">Filter</button>
            <button class="bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md">Reset</button>
        </div>
    </div>

    <p class="text-right text-sm mb-6"><a href="#top" class="link-orange hover:underline">↑ Back to Top</a></p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/author-of-a-lie-cover-art.jpg" alt="Author of a Lie cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">Author of a Lie</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Pop | Mood: Frustrated | Theme: Gaslighting</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/big-hard-no-cover-art.jpg" alt="Big Hard No cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">Big Hard No</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Pop | Mood: Defiant | Theme: Empowerment</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/boom-boom-beat-cover-art.jpg" alt="Boom Boom Beat cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">Boom Boom Beat</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Pop | Mood: Romantic | Theme: Reunion</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/the-devaluation-event-cover-art.jpg" alt="The Devaluation Event cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">The Devaluation Event</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Electronic | Mood: Melancholy | Theme: Loss of Market Share</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/disenchanted-cover-art.jpg" alt="Disenchanted cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">Disenchanted</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Rock | Mood: Reflective | Theme: Narrative of Disenchantment</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/iteration-cover-art.jpg" alt="Iteration cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">Iteration</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Pop | Mood: Restless | Theme: Narrative of Iteration</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/power-of-the-pen-cover-art.jpg" alt="Power of the Pen cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">Power of the Pen</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Folk | Mood: Purposeful | Theme: Social Commentary</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        <div class="song-item p-4 bg-gray-800 rounded-lg shadow-xl hover:shadow-2xl transition duration-300 scratched-border">
            <img src="covers/journey-to-agency-cover-art.jpg" alt="Journey to Agency cover art" class="mx-auto mb-4">
            <h3 class="text-xl font-bold text-slate-200 mb-1">Journey to Agency</h3>
            <p class="text-xs text-gray-400 mb-3">Genre: Pop | Mood: Uplifting | Theme: Empowerment Arc</p>
            <p class="text-sm italic text-gray-300">PLACEHOLDER</p>
            <div class="mt-4 text-gray-400 font-semibold flex justify-end">
                <a href="#" class="link-orange hover:underline">🖨️ Print Lyric</a>
            </div>
        </div>
        </div>

    <p class="text-right text-sm mt-8"><a href="#top" class="link-orange hover:underline">↑ Back to Top</a></p>
    
<?php 
// 3. Include the Footer (closes <main>, <footer>, and </body>, </html> tags)
include 'footer.php'; 
?>
