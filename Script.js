document.addEventListener('DOMContentLoaded', () => {
    const entranceScreen = document.getElementById('entrance-screen');
    const enterButton = document.getElementById('enter-button');
    const mainContent = document.getElementById('main-content');
    const pageDisplay = document.getElementById('page-display');
    const navLinks = document.querySelectorAll('#main-nav a');
    
    // --- 1. MASTER SONG LIST (41 Unique Songs) ---
    function generateMasterSongList() {
        const songs = [
            { title: "The Aftermath", playerLink: "[Songbay Player Link 1]" },
            { title: "Alone In Our Home", playerLink: "[Songbay Player Link 2]" },
            { title: "Author of a Lie", playerLink: "[Songbay Player Link 3]" },
            { title: "The Back of Me", playerLink: "[Songbay Player Link 4]" },
            { title: "Beautiful Beat", playerLink: "[Songbay Player Link 5]" },
            { title: "Boys Boys Boys", playerLink: "[Songbay Player Link 6]" },
            { title: "Broken Record", playerLink: "[Songbay Player Link 7]" },
            { title: "Children of War", playerLink: "https://songbay.co/player/235609973/" },
            { title: "Concrete Under the Feet", playerLink: "[Songbay Player Link 9]" },
            { title: "Cupid's Dart", playerLink: "[Songbay Player Link 10]" },
            { title: "Don't Be Jelly", playerLink: "[Songbay Player Link 11]" },
            { title: "Don't Want You Back", playerLink: "[Songbay Player Link 12]" },
            { title: "First Step", playerLink: "[Songbay Player Link 13]" },
            { title: "Fury", playerLink: "[Songbay Player Link 14]" },
            { title: "Gen X Anthem", playerLink: "[Songbay Player Link 15]" },
            { title: "Hard No", playerLink: "[Songbay Player Link 16]" },
            { title: "Heart Song", playerLink: "[Songbay Player Link 17]" },
            { title: "Heartbreak and Trouble", playerLink: "[Songbay Player Link 18]" },
            { title: "Hit the Road", playerLink: "[Songbay Player Link 19]" },
            { title: "How Many Chances", playerLink: "[Songbay Player Link 20]" },
            { title: "How's It Feel, Bro?", playerLink: "[Songbay Player Link 21]" },
            { title: "I Can Be Your Everything", playerLink: "[Songbay Player Link 22]" },
            { title: "In My Dreams", playerLink: "https://songbay.co/player/235610555/" },
            { title: "Just", playerLink: "https://songbay.co/player/235610626/" },
            { title: "Little Things", playerLink: "[Songbay Player Link 25]" },
            { title: "Miss Your Stupid Face", playerLink: "[Songbay Player Link 26]" },
            { title: "Misty Cries", playerLink: "[Songbay Player Link 27]" },
            { title: "Murderer's Heart", playerLink: "[Songbay Player Link 28]" },
            { title: "My Girl Karma", playerLink: "[Songbay Player Link 29]" },
            { title: "Not Clever", playerLink: "[Songbay Player Link 30]" },
            { title: "One Small Wrong", playerLink: "[Songbay Player Link 31]" },
            { title: "Show Is Through", playerLink: "https://songbay.co/player/235611347/" },
            { title: "Showdown at My Door", playerLink: "[Songbay Player Link 33]" },
            { title: "Solid Shifting Ground", playerLink: "https://songbay.co/player/235609969/" },
            { title: "Stood by my Side", playerLink: "https://songbay.co/player/235610824/" },
            { title: "Sweet Mary Jane", playerLink: "https://songbay.co/player/235610822/" },
            { title: "Thought You Should Know", playerLink: "[Songbay Player Link 37]" },
            { title: "Tick Tok", playerLink: "https://songbay.co/player/235608792/" },
            { title: "Too Much", playerLink: "https://songbay.co/player/235609976/" },
            { title: "Welcome to Jukes", playerLink: "[Songbay Player Link 40]" },
            { title: "Wildflower", playerLink: "[Songbay Player Link 41]" },
            { title: "Year in the Rearview", playerLink: "[Songbay Player Link 42]" }
        ];
        return songs; // 41 songs remaining after filtering "To Do" and "Sick One" in planning phase
    }

    const masterSongList = generateMasterSongList();

    // --- 2. PAGE RENDERING FUNCTIONS ---
    
    function renderLyricsPage(songList) {
        const categories = [
            "Social Commentary/World-Building",
            "Songs of Social Conscience and Protest",
            "The Empowerment Arc",
            "The Narrative of Disenchantment (Heartbreak to Liberation)",
            "Complex Narratives/Character-Driven Stories",
            "Emotional Honesty/Rawness"
        ];
    
        let html = `
            <div id="lyrics-page-content">
                <h1>The Master Song List (${songList.length} Available Lyrics)</h1>
                <p class="seo-tagline">The Verse sets the scene; the Chorus lands the emotion.</p>
                <div id="category-filter">
                    ${categories.map(cat => `<button class="category-button">${cat}</button>`).join('')}
                </div>
                
                <div id="song-list-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Song Title</th>
                                <th>Category Placeholder</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${songList.map(song => `
                                <tr>
                                    <td><a href="#" class="view-lyrics-link" data-title="${song.title}">★ ${song.title}</a></td>
                                    <td>[Placeholder: Category]</td>
                                    <td>
                                        <a href="${song.playerLink}" target="_blank" class="play-now-button">Play Now (Songbay Player)</a>
                                        <button class="print-button" data-title="${song.title}">Print Lyrics</button>
                                    </td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                </div>
            </div>
        `;
        return html;
    }
    
    function renderBioPage() {
        const bioContent = `
            <div id="bio-page-content">
                <h1 class="page-title">Kellie Larson: Cinematic Songwriter & Lyricist</h1>
                <p class="tagline">The Verse sets the scene; the Chorus lands the emotion.</p>
                
                <div id="bio-layout">
                    <div id="bio-image-placeholder">
                        <img src="kellie_larson_photo_placeholder.jpg" alt="Official Photo of Kellie Larson, Cinematic Songwriter and Lyricist">
                        <p class="caption">Kellie Larson: The B2B Lyricist. Licensing Ready. Emotionally Vetted.</p>
                    </div>

                    <div id="bio-text">
                        <h2>A Strategic Asset for Music Supervision</h2>
                        <p>
                            **Kellie Larson** is a B2B Lyricist operating on the Songbay marketplace, fundamentally redefining the concept of a "hit" from a chart metric to one of **commercial utility and licensing value**. Her work is a resource for A&R, producers, and music supervisors seeking high-impact, narrative-driven lyrical packages ready for immediate synchronization.
                        </p>
                        
                        <h3>The Larson Distinction</h3>
                        <p>
                            It is crucial to note that **Kellie Larson, the Lyricist,** is a distinct individual from a prominent luxury real estate agent, a successful screenwriter, and a decorated U.S. Coast Guard lieutenant commander. This unique focus ensures her portfolio is singular: **100% focused on providing commercially viable, vetted, and accessible intellectual property.**
                        </p>

                        <h3>Lyrical Identity: Narrative & Versatility</h3>
                        <p>
                            Larson’s portfolio is defined by its consistent focus on narrative and emotional authenticity. Her work demonstrates considerable thematic breadth, capably adopting first-person, third-person, and even dual-perspective points of view. From the **cinematic narrative** of **"Wildflower,"** which offers rich character studies perfect for country-drama placements, to the **viscerally impactful defiance** of pop-rock anthems like **"Too Much,"** her catalog spans the full spectrum of emotional and thematic needs. Every song is built with an arc—moving from conflict to resolution or defiant self-reclamation—making them structurally optimized for screen and stage use.
                        </p>
                    </div>
                </div>
            </div>
        `;
        return bioContent;
    }


    // --- 3. MAIN DOM CONTENT HANDLER ---
    
    // 3.1. HANDLE ENTRANCE SEQUENCE
    enterButton.addEventListener('click', () => {
        entranceScreen.style.opacity = '0';
        
        setTimeout(() => {
            entranceScreen.style.display = 'none';
            mainContent.style.display = 'block';
        }, 1000); 
    });

    // 3.2. NAVIGATION HANDLER
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const pageId = e.target.getAttribute('href').replace('#', '');
            
            // Logic to load the specific page content
            if (pageId === 'lyrics-page') {
                pageDisplay.innerHTML = renderLyricsPage(masterSongList);
            } else if (pageId === 'bio-page') {
                pageDisplay.innerHTML = renderBioPage();
            } else {
                // Placeholder for other pages
                pageDisplay.innerHTML = `
                    <h1 class="page-title">Page: ${e.target.textContent}</h1>
                    <p>Content for the **${e.target.textContent}** section will be loaded here.</p>
                `;
            }

            // Attach event listeners for dynamic elements on the Lyrics Page (if loaded)
            if (pageId === 'lyrics-page') {
                document.querySelectorAll('.view-lyrics-link').forEach(link => {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const title = e.target.dataset.title;
                        // Placeholder: Function to load the Single Lyric Page with Teleprompter, Echo, etc.
                        pageDisplay.innerHTML = `<h2 class="page-title">Loading Full Lyrics for: ${title}</h2>
                        <p>This will be the page with the Teleprompter Scroll, Echo Effect, and Industry View Toggle.</p>`;
                    });
                });

                document.querySelectorAll('.print-button').forEach(button => {
                    button.addEventListener('click', () => {
                        alert(`Functionality placeholder: Printing lyrics for ${button.dataset.title}`);
                    });
                });
            }
        });
    });
});
                          
