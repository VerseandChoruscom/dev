document.addEventListener('DOMContentLoaded', function() {
    // 1. CURSOR LIGHT LOGIC
    const cursorLight = document.querySelector('.cursor-light');
    if (cursorLight) {
        document.addEventListener('mousemove', function(e) {
            cursorLight.style.left = e.clientX + 'px';
            cursorLight.style.top = e.clientY + 'px';
        });
    }

    // 2. LYRICS TOGGLE LOGIC (For lyrics.html)
    document.querySelectorAll('.toggle-lyrics').forEach(button => {
        button.addEventListener('click', function() {
            const lyricsSection = this.closest('.song-entry').querySelector('.lyrics-section');
            if (lyricsSection.style.display === 'block') {
                lyricsSection.style.display = 'none';
                this.textContent = 'Show Lyrics';
            } else {
                lyricsSection.style.display = 'block';
                this.textContent = 'Hide Lyrics';
            }
        });
    });

    // 3. JUKEBOX LOGIC (For jukebox.html)
    const jukeboxScreen = document.getElementById('jukebox-screen');
    const playerContainer = document.getElementById('jukebox-player');
    
    if (jukeboxScreen && playerContainer) {
        document.querySelectorAll('.jukebox-song-button').forEach(button => {
            button.addEventListener('click', function() {
                const songTitle = this.getAttribute('data-title');
                const songSrc = this.getAttribute('data-src');

                // Update Jukebox Screen
                jukeboxScreen.textContent = `NOW PLAYING: ${songTitle}`;

                // Update Audio Player (Creates a new player for simplicity)
                playerContainer.innerHTML = `
                    <audio controls autoplay class="audio-player-container">
                        <source src="${songSrc}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                `;
            });
        });
    }
});
