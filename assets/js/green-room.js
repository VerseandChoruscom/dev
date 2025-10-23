document.addEventListener('DOMContentLoaded', () => {
    // --- Data for the Turnstile (Lyric Randomizer) --
    // Using a selection of compelling lyrics for the "best two lines in every 10 songs" feature
    const cinematicLyrics = [
        "You rewrite the stars, you rewrite the past, playing fast and loose.",
        "Oh, she's Wildflower, dancing in the wind. She's got the spirit of a rebel.",
        "When everyone has nukes and buttons are pressed, if everyone dies, then who cares who is best?",
        "No one ever leaves here when day breaks... a ghostly fate.",
        "I'm a broken record, skipping on repeat, this ain't a cry for help.",
        "Got hugs aplenty, and they're free. Use my shoulder to cry on, you can lean on me.",
        "The air is thick with smoke and with a a sweet perfume, a ghostly breeze that dances through the crowded room.",
        "where the deranged meet and the dead now dance. (Welcome to JUKES)",
        "you apologize too get between my thighs (Sick One (s1c))",
        "I'm too much for you to handle, and I know you can't be tamed."
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

            // Gather input values and sanitize (simple text cleanup)
            const getVal = (id) => document.getElementById(id).value.trim();
            const adjective1 = getVal('adjective1');
            const noun1 = getVal('noun1');
            const adjective2 = getVal('adjective2');
            const adjective3 = getVal('adjective3');
            const verb1 = getVal('verb1');
            const pluralNoun1 = getVal('plural-noun1');
            const verb2 = getVal('verb2');
            const adverb1 = getVal('adverb1');
            const noun2 = getVal('noun2');

            // Generate the final synopsis based on the extracted template
            const synopsis = `
                <p><strong>NEW SYNOPSIS:</strong> A song that defines the genre is about a <strong>${adjective1}</strong> hero who must save a <strong>${noun1}</strong> from a <strong>${adjective2} ${adjective3}</strong> villain. 
                They <strong>${verb1}</strong> through the city while carrying <strong>${pluralNoun1}</strong>. 
                The chorus demands that we <strong>${verb2}</strong> the silence and <strong>${adverb1}</strong> celebrate the final <strong>${noun2}</strong>.</p>
            `;

            madLibsOutput.innerHTML = synopsis;
            madLibsOutput.style.display = 'block';
        });
    }
});
