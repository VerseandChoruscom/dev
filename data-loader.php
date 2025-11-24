<?php
// FILE: data_loader.php
// This script loads the data from lyrics.json and prints it into the JavaScript variable
// for the client-side filtering logic to use.

$json_file_path = 'lyrics.json';
$ALL_SONGS_DATA_JS = '[]'; // Default to an empty array

if (file_exists($json_file_path)) {
    // Read the file contents
    $json_string = file_get_contents($json_file_path);
    // Sanitize the output to be safe for JavaScript
    $ALL_SONGS_DATA_JS = json_encode(json_decode($json_string, true), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
}

// Output the data structure directly into a JavaScript variable
echo "const ALL_SONGS_DATA = " . $ALL_SONGS_DATA_JS . ";\n";
?>
<?php
// Define the path to your JSON data file
$json_file_path = 'lyrics.json'; // *** UPDATED FILENAME ***

// --- Function to Load and Decode JSON ---
function load_song_data($file_path) {
    // Check if the file exists
    if (!file_exists($file_path)) {
        return []; // Return an empty array if the file is not found
    }

    // Read the file contents
    $json_string = file_get_contents($file_path);

    // Decode the JSON string into a PHP associative array
    $songs = json_decode($json_string, true);

    // Return the array of songs or an empty array if decoding fails
    return is_array($songs) ? $songs : [];
}

// --- Main Script Execution ---

// 1. Load all song data
$all_songs = load_song_data($json_file_path);
$filtered_songs = $all_songs; 

// 2. Check for a search query
$search_query = isset($_GET['search']) ? trim(htmlspecialchars($_GET['search'])) : '';

// 3. Filter songs if a search query is present
if (!empty($search_query)) {
    $search_term = strtolower($search_query);

    // Filter the songs array
    $filtered_songs = array_filter($all_songs, function($song) use ($search_term) {
        // Search in title, artist, and genre
        $title = strtolower($song['title']);
        $artist = strtolower($song['artist']); 
        $genre = strtolower($song['genre']);

        return (
            str_contains($title, $search_term) ||
            str_contains($artist, $search_term) ||
            str_contains($genre, $search_term)
        );
    });
}
?>
