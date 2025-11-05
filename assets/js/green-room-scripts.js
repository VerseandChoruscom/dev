// /assets/js/green-room-scripts.js - Updated to use user's lyrics/data

// --- HTML Utility Function: Toggles the navigation menu ---
function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    if (navMenu) {
        navMenu.classList.toggle('open');
    }
}

// --- 1. LYRICAL MADLIBS (CUSTOM TEMPLATE) ---
function generateMadlib(event) {
  event.preventDefault(); 
  const adj = document.getElementById("madlib-adjective").value;
  const noun = document.getElementById("madlib-noun").value;
  const verb = document.getElementById("madlib-verb").value;
  const adv = document.getElementById("madlib-adverb").value;
  const plural = document.getElementById("madlib-plural-noun").value;
  const place = document.getElementById("madlib-place").value;

  // 🚨 ACTION REQUIRED: REPLACE THIS LINE WITH YOUR OWN LYRIC TEMPLATE!
  // Use the variables ${adj}, ${noun}, ${verb}, ${adv}, ${plural}, and ${place}.
  const template = `**Lyrical Rewind:** The **${adj}** wind whispered through the **${noun}** as it **${verb}** **${adv}**, chasing **${plural}** past the old **${place}**.`;

  document.getElementById("madlib-result").innerHTML = template;
}

// --- Helper function for random selection ---
function getTwoRandom(arr) {
  // Sort randomly and return the first two elements
  const shuffled = arr.sort(() => 0.5 - Math.random());
  return [shuffled[0], shuffled[1]];
}

// --- 2. 2 SONG TURN STYLE (PULLS from data.js) ---
function mixSongs() {
  // Check if songCatalog from data.js is loaded and has songs
  if (typeof songCatalog === 'undefined' || songCatalog.length < 2) {
      document.getElementById("turnstyle-result").innerText = "⚠️ Error: Song catalog not loaded or has too few songs. Check data.js file.";
      return;
  }
  
  // Use the songCatalog data for mixing
  const [a, b] = getTwoRandom(songCatalog);
  
  // Use 'title' and 'mood' (as a theme) from the songCatalog objects
  const themeA = a.mood || a.genre; // Use mood, or genre if mood is missing
  const themeB = b.mood || b.genre; // Use mood, or genre if mood is missing

  const result = `🎶 **New Concept:** Blending "${a.title}" (**${themeA}**) with "${b.title}" (**${themeB}**) creates a new concept: *${themeA} collides with ${themeB} in a cinematic storm of emotion.*`;
  
  document.getElementById("turnstyle-result").innerHTML = result;
}

// --- 3. CINEMATIC SCENE GENERATOR ---
function generateCinematicScene(event) {
  event.preventDefault(); 
  const inputs = [
    "scene-person", "scene-place", "scene-thing", "scene-number", "scene-color",
    "scene-fun-place", "scene-celeb", "scene-animal", "scene-transport",
    "scene-live", "scene-state", "scene-problem"
  ].map(id => document.getElementById(id).value);

  // This template remains fixed as per the game's current design
  const line = `🎬 **The Scene:** ${inputs[0]} stood ${inputs[3]} steps from the ${inputs[1]}, clutching ${inputs[2]} as ${inputs[10]} whispered through the ${inputs[4]} sky. Somewhere between ${inputs[5]} and ${inputs[9]}, trust broke like a ${inputs[8]} chasing a ${inputs[7]} past ${inputs[6]}. "${inputs[11]}" echoed in the silence.`;
  document.getElementById("scene-result").innerHTML = line;
}

// --- 4. LIGHTNING LYRICS (CUSTOM LINES) ---
// 🚨 ACTION REQUIRED: REPLACE THESE FIVE LINES with your actual lyric lines!
const lightningLines = [
  "// 1. Put your first favorite lyric line here!",
  "// 2. Put your second favorite lyric line here!",
  "// 3. Put your third favorite lyric line here!",
  "// 4. Put your fourth favorite lyric line here!",
  "// 5. Put your fifth favorite lyric line here!"
];

function lightningLyrics() {
  const line = lightningLines[Math.floor(Math.random() * lightningLines.length)];
  document.getElementById("lightning-result").innerHTML = `⚡ **Lyric Power-Up:** ${line}`;
}
