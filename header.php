<?php 
// =======================================================
// SITE CONFIGURATION AND COLOR PALETTE
// (Consolidated from config.php, as it is not allowed)
// =======================================================

// SITE METADATA
define('SITE_NAME', 'Verse and Chorus');
define('SITE_SLOGAN', 'Cinematic Songwriter and Lyricist');
define('SITE_OWNER', 'Kellie Larson');
define('SITE_PHONE', '760-537-0222');
define('SITE_EMAIL', 'info@verseandchorus.com');

// CORE COLOR PALETTE (Hex Codes)
define('COLOR_BURGUNDY_HEX', '#800020');     // Header/Footer Background
define('COLOR_BLACK_HEX', '#000000');        // Body Background
define('COLOR_LIGHT_TEXT_HEX', '#e0e0e0');   // Secondary Text
define('COLOR_MAIN_TEXT_HEX', '#ffffff');    // Primary Text/Nav Default
define('COLOR_SUNSET_ORANGE_HEX', '#f97316'); // Links, CTAs, Hover
define('COLOR_GOLD_HEX', '#fcd34d');         // Main Headers

// NAVIGATION LINKS ARRAY
$nav_links = [
    'HOME' => '/index.html',
    'BIO' => '/bio.html',
    'INDUSTRY PROS' => '/industry-pros.html',
    'MUSIC' => '/lyrics.html',
    'GREEN ROOM' => '/green-room.html',
    'ARTICLES' => '/articles.html',
    'LYRIC CRITIQUE' => '/lyric-critque.html',
    'COLLAB/CONSULT' => '/collab.html',
    'CONTACT' => '/contact.html',
    'LEGAL' => '/legal.html',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Default Page'; ?> | <?php echo SITE_NAME; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Define Custom Colors & Fonts using PHP constants for the root CSS variables */
        :root {
            --burgundy: <?php echo COLOR_BURGUNDY_HEX; ?>; 
            --light-text: <?php echo COLOR_LIGHT_TEXT_HEX; ?>;
            --main-text: <?php echo COLOR_MAIN_TEXT_HEX; ?>;
            --sunset-orange: <?php echo COLOR_SUNSET_ORANGE_HEX; ?>; 
        }

        /* Apply global styles */
        body {
            background-color: <?php echo COLOR_BLACK_HEX; ?>;
            color: var(--light-text);
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth; 
        }

        /* Script font for the main site title */
        .script-font {
            font-family: 'Parisienne', cursive;
        }

        /* Essential container styles */
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Custom Styles for Colors/Interactions (Sunset Orange) */
        .link-orange {
            color: var(--sunset-orange);
            transition: color 200ms;
        }
        .link-orange:hover {
            color: #fca5a5; 
        }
        .btn-orange {
            background-color: var(--sunset-orange);
            color: white;
            transition: background-color 200ms;
        }
        .btn-orange:hover {
            background-color: #ea580c;
        }
        /* Gold Header Style */
        .header-gold {
            color: <?php echo COLOR_GOLD_HEX; ?>; 
        }

        /* Page-specific styles */
        .page-title-block {
            display: flex;
            align-items: center;
            border-left: 2px solid var(--light-text);
            padding-left: 1rem;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <header class="bg-[var(--burgundy)] text-white shadow-xl sticky top-0 z-50">
        <div class="content-container py-3 flex justify-between items-center">
            
            <div class="flex items-center space-x-4">
                <a href="/index.html" class="flex items-center space-x-2">
                    <img src="/Images/logo.svg" alt="<?php echo SITE_NAME; ?> Logo" class="h-8 w-8">
                </a>
            </div>

            <nav id="nav-desktop" class="hidden md:block">
                <ul class="flex space-x-6 text-sm font-semibold tracking-wider text-white">
                    <?php foreach ($nav_links as $title => $url): ?>
                        <li><a href="<?php echo $url; ?>" class="link-orange"><?php echo $title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <button id="hamburger-menu" class="md:hidden text-white focus:outline-none p-2 rounded-md hover:bg-black/20 transition duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden absolute w-full bg-[var(--burgundy)] transition-all duration-300 shadow-lg">
            <ul class="flex flex-col text-center pb-2 text-sm font-semibold tracking-wider">
                <?php foreach ($nav_links as $title => $url): ?>
                    <li><a href="<?php echo $url; ?>" class="block py-2 text-white hover:text-[var(--sunset-orange)] hover:bg-slate-700 transition duration-200"><?php echo $title; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </header>

    <div class="bg-black py-4 border-b border-gray-800 shadow-lg" id="top">
        <div class="content-container text-center">
            <h1 class="script-font text-5xl sm:text-6xl font-bold tracking-wider text-amber-400"><?php echo SITE_NAME; ?></h1>
        </div>
    </div>
    
    <main class="flex-grow py-10">
        <div class="content-container">
