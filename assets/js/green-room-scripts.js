// /assets/js/green-room-scripts.js - All four game activities and the navigation toggle.

// --- HTML Utility Function: Toggles the navigation menu ---
// This function is called by the 'hamburger' div in green-room.html
function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    if (navMenu) {
        navMenu.classList.toggle('open');
    }
}

// --- 1. LYRICAL MADLIBS ---
function generateMadlib(event) {
  event.preventDefault(); 
  const adj = document.getElementById("madlib-adjective").value;
  const noun = document.getElementById("madlib-noun").value;
  const verb = document.getElementById("madlib-verb").value;
  const adv = document.getElementById("madlib-adverb").value;
  const plural = document.getElementById("madlib-plural-noun").value;
  const place = document.getElementById("madlib-place").value;

  const template = `**Lyrical Rewind:** In the **${adj}** silence, your **${noun}** **${verb}** **${adv}**, chasing **${plural}** through the heart of **${place}**.`;
  document.getElementById("madlib-result").innerHTML = template;
}

// --- 2. 2 SONG TURN STYLE DATA & LOGIC ---
const songThemes = [
  { title: "Echoes in the Fog", theme: "Loss and memory" },
  { title: "Neon Promises", theme: "Hope in chaos" },
  { title: "Glass Parade", theme: "Vulnerability and strength" },
  { title: "Static Hearts", theme: "Disconnection and longing" },
  { title: "Velvet Revolver", theme: "Rebellion and desire" }
];

function getTwoRandom(arr) {
  // Sort randomly and return the first two elements
  const shuffled = arr.sort(() => 0.5 - Math.random());
  return [shuffled[0], shuffled[1]];
}

function mixSongs() {
  const [a, b] = getTwoRandom(songThemes);
  const result = `🎶 **New Concept:** Blending "${a.title}" (**${a.theme}**) with "${b.title}" (**${b.theme}**) creates a new concept: *${a.theme} collides with ${b.theme} in a cinematic storm of emotion.*`;
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

  // Generates the lyric line using all 12 user inputs
  const line = `🎬 **The Scene:** ${inputs[0]} stood ${inputs[3]} steps from the ${inputs[1]}, clutching ${inputs[2]} as ${inputs[10]} whispered through the ${inputs[4]} sky. Somewhere between ${inputs[5]} and ${inputs[9]}, trust broke like a ${inputs[8]} chasing a ${inputs[7]} past ${inputs[6]}. "${inputs[11]}" echoed in the silence.`;
  document.getElementById("scene-result").innerHTML = line;
}

// --- 4. LIGHTNING LYRICS ---
const lightningLines = [
  "I loved you like a storm loves the sea.",
  "Your shadow kissed the edge of my resolve.",
  "We danced on broken promises and called it grace.",
  "The silence between us was louder than goodbye.",
  "I stitched my hope into the hem of your leaving."
];

function lightningLyrics() {
  const line = lightningLines[Math.floor(Math.random() * lightningLines.length)];
  document.getElementById("lightning-result").innerHTML = `⚡ **Lyric Power-Up:** ${line}`;
}
