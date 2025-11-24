<?php
// FILE: data_loader.php
// This script loads the data from lyrics.json and prints it into the JavaScript variable
// for the client-side filtering logic to use in industry.pros.php.

$json_file_path = 'lyrics.json';
$ALL_SONGS_DATA_JS = '[]'; // Default to an empty array

if (file_exists($json_file_path)) {
    // Read the file contents
    $json_string = file_get_contents($json_file_path);
    // Sanitize the output to be safe for JavaScript
    // The json_encode with flags ensures the PHP array data is correctly and safely formatted as a JS constant.
    $ALL_SONGS_DATA_JS = json_encode(json_decode($json_string, true), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
}

// Output the data structure directly into a JavaScript variable
echo "const ALL_SONGS_DATA = " . $ALL_SONGS_DATA_JS . ";\n";
?>
