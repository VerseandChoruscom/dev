document.addEventListener('DOMContentLoaded', () => {
    // --- Data for the Turnstile (Lyric Randomizer) ---
    const cinematicLyrics = [
        "You rewrite the stars, you rewrite the past, playing fast and loose.",
        "Oh, she's Wildflower, dancing in the wind. She's got the spirit of a rebel.",
        "When everyone has nukes and buttons are pressed, if everyone dies, then who cares who is best?",
        "No one ever leaves here when day breaks... a ghostly fate.",
        "I'm a broken record, skipping on repeat, this ain't a cry for help.",
        "Got hugs aplenty, and they're free. Use my shoulder to cry on, you can lean on me.",
        "The air is thick with smoke and with a sweet perfume, a ghostly breeze that dances through the crowded room."
    ];

    const turnstileBtn = document.getElementById('spin-turnstile-btn');
    const lyricOutput = document.getElementById('random-lyric-output');

    if (turnstileBtn) {
        turnstileBtn.addEventListener('click', () => {
            const randomIndex = Math.floor(Math.random() * cinematicLyrics.length);
            lyricOutput.textContent = cinematicLyrics[randomIndex];
        });
    }

    // --- Logic for Mad Libs ---
    const madLibsForm = document.getElementById('mad-libs-form');
    const madLibsOutput = document.getElementById('mad-libs-output');

    if (madLibsForm) {
        madLibsForm.addEventListener('submit', (event) => {
            event.preventDefault();

            // Gather input values
            const adjective1 = document.getElementById('adjective1').value;
            const noun1 = document.getElementById('noun1').value;
            const adjective2 = document.getElementById('adjective2').value;
            const adjective3 = document.getElementById('adjective3').value;
            const verb1 = document.getElementById('verb1').value;
            const pluralNoun1 = document.getElementById('plural-noun1').value;
            const verb2 = document.getElementById('verb2').value;
            const adverb1 = document.getElementById('adverb1').value;
            const noun2 = document.getElementById('noun2').value;

            // Generate the final synopsis
            const synopsis = `
                <p><strong>NEW SYNOPSIS:</strong> A song that defines the genre is about a <strong>${adjective1}</strong> hero who must save a <strong>${noun1}</strong> from a <strong>${adjective2} ${adjective3}</strong> villain. 
                They <strong>${verb1}</strong> through the city while carrying <strong>${pluralNoun1}</strong>. 
                The chorus demands that we <strong>${verb2}</strong> the silence and <strong>${adverb1}</strong> celebrate the final <strong>${noun2}</strong>.</p>
            `;

            madLibsOutput.innerHTML = synopsis;
            madLibsOutput.classList.remove('hidden');
        });
    }
});
                                     
