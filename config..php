<?php
// =======================================================
// SITE CONFIGURATION AND COLOR PALETTE
// =======================================================

// SITE METADATA
define('SITE_NAME', 'Verse and Chorus');
define('SITE_SLOGAN', 'Cinematic Songwriter and Lyricist');
define('SITE_OWNER', 'Kellie Larson');
define('SITE_PHONE', '760-537-0222');
define('SITE_EMAIL', 'info@verseandchorus.com');
define('CURRENT_YEAR', date('Y'));

// CORE COLOR PALETTE (CSS Variable Name => Hex Code)
// These define the core variables used in the <style> block in header.php
define('COLOR_BURGUNDY_HEX', '#800020');     // Header/Footer Background
define('COLOR_BLACK_HEX', '#000000');        // Body Background
define('COLOR_LIGHT_TEXT_HEX', '#e0e0e0');   // Secondary Text
define('COLOR_MAIN_TEXT_HEX', '#ffffff');    // Primary Text/Nav Default
define('COLOR_SUNSET_ORANGE_HEX', '#f97316'); // Links, CTAs, Hover (The "Sunset Orange" you requested)
define('COLOR_GOLD_HEX', '#fcd34d');         // Main Headers (Tailwind: text-amber-400)


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
