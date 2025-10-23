document.addEventListener('DOMContentLoaded', () => {
    // 1. Lyrical Mad Libs Generator Logic (from green-room.html)
    const madLibsForm = document.getElementById('mad-libs-form');
    const madLibsOutput = document.getElementById('mad-libs-output');

    if (madLibsForm) {
        madLibsForm.addEventListener('submit', function(e) {
            e.preventDefault();

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
