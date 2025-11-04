document.addEventListener('DOMContentLoaded', () => {
    // 1. Lyrical Mad Libs Generator Logic (from green-room.html)
    const madLibsForm = document.getElementById('mad-libs-form');
    const madLibsOutput = document.getElementById('mad-libs-output');

    if (madLibsForm) {
        madLibsForm.addEventListener('submit', function(e) {
            e.preventDefault();
// 1. LYRICAL MADLIBS
function generateMadlib(event) {
  event.preventDefault();
  const adj = document.getElementById("madlib-adjective").value;
  const noun = document.getElementById("madlib-noun").value;
  const verb = document.getElementById("madlib-verb").value;
  const adv = document.getElementById("madlib-adverb").value;
  const plural = document.getElementById("madlib-plural-noun").value;
  const place = document.getElementById("madlib-place").value;

  const template = `In the ${adj} silence, your ${noun} ${verb} ${adv}, chasing ${plural} through the heart of ${place}.`;
  document.getElementById("madlib-result").innerText = template;
}

// 2. 2 SONG TURN STYLE
const songThemes = [
  { title: "Echoes in the Fog", theme: "Loss and memory" },
  { title: "Neon Promises", theme: "Hope in chaos" },
  { title: "Glass Parade", theme: "Vulnerability and strength" },
  { title: "Static Hearts", theme: "Disconnection and longing" },
  { title: "Velvet Revolver", theme: "Rebellion and desire" }
];

function mixSongs() {
  const [a, b] = getTwoRandom(songThemes);
  const result = `🎶 Blending "${a.title}" (${a.theme}) with "${b.title}" (${b.theme}) creates a new concept: *${a.theme} collides with ${b.theme} in a cinematic storm of emotion.*`;
  document.getElementById("turnstyle-result").innerText = result;
}

function getTwoRandom(arr) {
  const shuffled = arr.sort(() => 0.5 - Math.random());
  return [shuffled[0], shuffled[1]];
}

// 3. CINEMATIC SCENE GENERATOR
function generateCinematicScene(event) {
  event.preventDefault();
  const inputs = [
    "scene-person", "scene-place", "scene-thing", "scene-number", "scene-color",
    "scene-fun-place", "scene-celeb", "scene-animal", "scene-transport",
    "scene-live", "scene-state", "scene-problem"
  ].map(id => document.getElementById(id).value);

  const line = `🎬 ${inputs[0]} stood ${inputs[3]} steps from the ${inputs[1]}, clutching ${inputs[2]} as ${inputs[10]} whispered through the ${inputs[4]} sky. Somewhere between ${inputs[5]} and ${inputs[9]}, trust broke like a ${inputs[8]} chasing a ${inputs[7]} past ${inputs[6]}. "${inputs[11]}" echoed in the silence.`;
  document.getElementById("scene-result").innerText = line;
}

// 4. LIGHTNING LYRICS
const lightningLines = [
  "I loved you like a storm loves the sea.",
  "Your shadow kissed the edge of my resolve.",
  "We danced on broken promises and called it grace.",
  "The silence between us was louder than goodbye.",
  "I stitched my hope into the hem of your leaving."
];

function lightningLyrics() {
  const line = lightningLines[Math.floor(Math.random() * lightningLines.length)];
  document.getElementById("lightning-result").innerText = `⚡ ${line}`;
}
            // Gather inputs from the form elements
            const artist = document.getElementById('artist').value;
            const verb1 = document.getElementById('verb1').value;
            const adjective1 = document.getElementById('adjective1').value;
            const emotion = document.getElementById('emotion').value;
            const adjective2 = document.getElementById('adjective2').value;
            const noun1 = document.getElementById('noun1').value;
            const noun2 = document.getElementById('noun2').value;

            // Template Synopsis with injected variables
            const synopsis = `
                The new track from <span class="script-text">${artist}</span> is a <span style="color: gold;">${adjective1}</span> power anthem that urges listeners to ${verb1} their <span style="color: red;">${emotion}</span>. The lyric is built around a <span style="color: gold;">${adjective2}</span> metaphor, comparing heartbreak to an empty ${noun1} that can only be filled by a true ${noun2}. The song culminates in a cinematic swell of emotion.
            `;

            // Display the generated synopsis
            madLibsOutput.innerHTML = `
                <h3>Your Generated Synopsis:</h3>
                <p>${synopsis}</p>
                <p style="margin-top: 20px; font-style: italic;">(Tip: Copy and send this synopsis to an artist you think would be a great fit!)</p>
            `;
            madLibsOutput.style.display = 'block';
            
            // Optionally hide the form after the result is generated
            // madLibsForm.style.display = 'none'; 
        });
    }

    // 2. Song Merge Challenge Logic (from green-room.html)
    // Provides simple feedback upon submission
    const songMergeButton = document.querySelector('.activity-box:last-child button');
    if (songMergeButton) {
        songMergeButton.addEventListener('click', () => {
            alert('Thank you for submitting your Song Merge Concept! Kellie will review your creative idea.');
        });
    }

    // 3. Bio Page: Download PDF Button Handler (from main.html)
    const printPdfButton = document.getElementById('print-pdf-button');
    if (printPdfButton) {
        printPdfButton.addEventListener('click', () => {
            alert('The Songwriter Playbill (PDF) Download feature is currently under construction. Please check back soon!');
        });
    }
});
