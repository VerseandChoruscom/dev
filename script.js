document.addEventListener('DOMContentLoaded', () => {
    const entranceScreen = document.getElementById('entrance-screen');
    const enterButton = document.getElementById('enter-button');
    const mainContent = document.getElementById('main-content');
    const pageDisplay = document.getElementById('page-display');
    const navLinks = document.querySelectorAll('#main-nav a');
    
    // --- 1. MASTER SONG LIST (44 Unique Songs + Demo File Mappings + Critique Data) ---

    // Critique Data for merging
    const critiqueData = [
        { title: "Wildflower", marketTarget: "Country Crossover / Pop", hitPotential: 5, critAcclaim: 4, critiqueSummary: "Highest Commercial Potential. Clear Redemptive Narrative (escape from small-town hardship) perfectly aligned with chart-topping Country/Pop themes of self-actualization. High RQ, strong visual language." },
        { title: "Hit the Road", marketTarget: "Mainstream Pop / Pop-Rock", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Immediate, punchy dismissal hook (\"Don't stop, don't look back, Hit the road, Jack!\"). Direct, simple, and high-energy for radio airplay and virality (Sound-First design)." },
        { title: "Don't Want You Back", marketTarget: "Mainstream Pop / R&B", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Emotionally distinct from \"Hit the Road\" by detailing the relationship's history. The Bridge is a strong, definitive ultimatum: \"My screen is black to you.\"" },
        { title: "Welcome to Jukes", marketTarget: "Sync / Cinematic Blues / Horror", hitPotential: 2, critAcclaim: 5, critiqueSummary: "Highest Niche/Sync Potential. Highly atmospheric, dark Southern Gothic narrative (\"dead now dance,\" \"close the door! now it's TOO LATE\"). Exceptional value for dramatic film/TV sync (Juke Joint Blues genre)." },
        { title: "Fury", marketTarget: "Alternative Rock / Metal", hitPotential: 2, critAcclaim: 4, critiqueSummary: "Raw, uncompromising look at domestic violence and escape (\"Your fists, a never-ending show,\" \"pierce me through the flesh\"). High emotional intensity and complexity for a specialized, critical audience." },
        { title: "First Step", marketTarget: "Inspirational Pop / Alt-Folk", hitPotential: 3, critAcclaim: 5, critiqueSummary: "Highest Thematic Depth. Addresses addiction/intervention (\"I won't enable, I'll be that true friend\") with maturity. Avoids cliché, offering genuine vulnerability and strong critical/inspirational appeal." },
        { title: "Alone In Our Home", marketTarget: "Adult Contemporary Ballad", hitPotential: 3, critAcclaim: 4, critiqueSummary: "Deep grief captured through the specific loss of the domestic space/routine (\"breathe in fear,\" \"home all alone\"). Powerful emotional resonance for balladic placement." },
        { title: "Miss Your Stupid Face", marketTarget: "Pop Ballad / Grief", hitPotential: 3, critAcclaim: 4, critiqueSummary: "Focused on intimate, often humorous, details of loss (\"silly you were when you're tired,\" \"I miss your stupid face!\"). This use of specific, loving memories elevates the emotional impact." },
        { title: "Author of a Lie", marketTarget: "Pop-Rock / Indie-Pop", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Highly relatable theme (gaslighting/deceit). The chorus uses a great, memorable summary line: \"You're the author of a lie, a master of deceit.\"" },
        { title: "Sick One", marketTarget: "Pop / Hip-Hop Fusion", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Modern, viral-ready concept of a toxic, co-dependent relationship as a \"sick one\" / \"drug.\" The parenthetical ad-libs effectively suggest musical texture and modern production style." },
        { title: "Too Much", marketTarget: "Indie Pop / Emo-Pop", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Extremely relatable, repetitive chorus hook: \"Too much fighting, too much disrespect / Too much lying, no truth to detect.\" Designed to summarize conflict for mass consumption." },
        { title: "The Aftermath", marketTarget: "Alt-Pop / Emo-Pop", hitPotential: 3, critAcclaim: 4, critiqueSummary: "Strong narrative arc focused on the struggle after the chaos ends (\"suffocating quiet,\" \"bizarre comfort in the chaos\"). Good lyrical depth and resolution (\"anger burns, a purifying fire\")." },
        { title: "Year in the Rearview", marketTarget: "Country / Pop Ballad", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Classic long-term healing narrative. Clear, quantifiable time structure (\"Three hundred sixty-five sunsets,\" \"another year, to truly leave the poison behind\") ideal for Country/Adult Contemporary." },
        { title: "How's It Feel, Bro?", marketTarget: "Hip-Hop / Pop Fusion", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Direct, confrontational, and empowering theme of turning the tables on a cheating partner. High commercial appeal for artists known for aggressive, confident tracks." },
        { title: "My Girl Karma", marketTarget: "Pop / Hip-Hop / R&B", hitPotential: 4, critAcclaim: 3, critiqueSummary: "Simple, catchy concept: Karma personified as \"My girl.\" The hook \"She's like a boomerang, always circling back\" is instantly memorable." },
        { title: "Showdown at My Door", marketTarget: "Pop-Rock / Pop", hitPotential: 4, critAcclaim: 3, critiqueSummary: "High-tension narrative focused on a final physical confrontation and assertion of freedom (\"taking out the trash, busy changing locks\"). Strong theatrical element." },
        { title: "One Small Wrong", marketTarget: "Pop / R&B / Hip-Hop Dialogue", hitPotential: 3, critAcclaim: 4, critiqueSummary: "Unique structure using alternating male/female voices (vocal/rap) to tell a complex, tit-for-tat betrayal story. High artistic ambition and critical depth due to dialogue structure." },
        { title: "In My Dreams", marketTarget: "Adult Contemporary Ballad", hitPotential: 3, critAcclaim: 4, critiqueSummary: "Focused on grief and escapism through dreams (\"When I wake, you're gone, and all I feel is loneliness and fear\"). High emotional fidelity for a ballad." },
        { title: "I Can Be Your Everything", marketTarget: "Pop Ballad / R&B", hitPotential: 3, critAcclaim: 4, critiqueSummary: "Highly dramatic plea for a partner to stay, offering an ultimate sacrifice (\"I can give you everything,\" \"I'd beg on my knees\"). Strong focus on unrequited desire." },
        { title: "80s Thematic Lyric", marketTarget: "Sync / Advertising", hitPotential: 5, critAcclaim: 1, critiqueSummary: "Highest Sync Utility. Purely functional lyric composed of cultural touchstones and song titles, making it peak commercial content for nostalgia advertising (80s Aesthetic revival high marketability)." }
    ];

    function generateMasterSongList() {
        const baseSongs = [
            // Updated file names to use hyphens for consistency and SEO
            { title: "The Aftermath", playerLink: "[Songbay Link 1]", demoFile: null },
            { title: "Alone In Our Home", playerLink: "[Songbay Link 2]", demoFile: null },
            { title: "Author of a Lie", playerLink: "[Songbay Link 3]", demoFile: null },
            { title: "The Back of Me", playerLink: "[Songbay Link 4]", demoFile: null },
            { title: "Beautiful Beat", playerLink: "[Songbay Link 5]", demoFile: null },
            { title: "Boys Boys Boys", playerLink: "[Songbay Link 6]", demoFile: "boys-boys-boys.mp3" }, 
            { title: "Broken Record", playerLink: "[Songbay Link 7]", demoFile: null },
            { title: "Children of War", playerLink: "https://songbay.co/player/235609973/", demoFile: null },
            { title: "Concrete Under the Feet", playerLink: "[Songbay Link 9]", demoFile: "concrete-under-the-feet.mp3" }, 
            { title: "Cupid's Dart", playerLink: "[Songbay Link 10]", demoFile: null },
            { title: "Don't Be Jelly", playerLink: "[Songbay Link 11]", demoFile: "dont-be-jelly.mp3" }, 
            { title: "Don't Want You Back", playerLink: "[Songbay Link 12]", demoFile: null },
            { title: "First Step", playerLink: "[Songbay Link 13]", demoFile: null },
            { title: "Fury", playerLink: "[Songbay Link 14]", demoFile: null },
            { title: "Gen X Anthem", playerLink: "[Songbay Link 15]", demoFile: null },
            { title: "Hard No", playerLink: "[Songbay Link 16]", demoFile: null },
            { title: "Heart Song", playerLink: "[Songbay Link 17]", demoFile: "heart-song.mp3" }, 
            { title: "Heartbreak and Trouble", playerLink: "[Songbay Link 18]", demoFile: null },
            { title: "Hit the Road", playerLink: "[Songbay Link 19]", demoFile: null },
            { title: "How Many Chances", playerLink: "[Songbay Link 20]", demoFile: null },
            { title: "How's It Feel, Bro?", playerLink: "[Songbay Link 21]", demoFile: null },
            { title: "I Can Be Your Everything", playerLink: "[Songbay Link 22]", demoFile: null },
            { title: "In My Dreams", playerLink: "https://songbay.co/player/235610555/", demoFile: "my-dreams.mp3" }, 
            { title: "Just", playerLink: "https://songbay.co/player/235610626/", demoFile: null },
            { title: "Little Things", playerLink: "[Songbay Link 25]", demoFile: null },
            { title: "Miss Your Stupid Face", playerLink: "[Songbay Link 26]", demoFile: "miss-your-stupid-face.mp3" }, 
            { title: "Misty Cries", playerLink: "[Songbay Link 27]", demoFile: null },
            { title: "Murderer's Heart", playerLink: "[Songbay Link 28]", demoFile: "murderers-heart.mp3" }, 
            { title: "My Girl Karma", playerLink: "[Songbay Link 29]", demoFile: "my-girl-karma.mp3" }, 
            { title: "Not Clever", playerLink: "[Songbay Link 30]", demoFile: null },
            { title: "One Small Wrong", playerLink: "[Songbay Link 31]", demoFile: null },
            { title: "Show Is Through", playerLink: "https://songbay.co/player/235611347/", demoFile: null },
            { title: "Showdown at My Door", playerLink: "[Songbay Link 33]", demoFile: null },
            { title: "Sick One", playerLink: "[Songbay Link 34]", demoFile: null }, 
            { title: "Solid Shifting Ground", playerLink: "https://songbay.co/player/235609969/", demoFile: null },
            { title: "Stood by my Side", playerLink: "https://songbay.co/player/235610824/", demoFile: null },
            { title: "Sweet Mary Jane", playerLink: "https://songbay.co/player/235610822/", demoFile: null },
            { title: "Thought You Should Know", playerLink: "[Songbay Link 37]", demoFile: "thought-you-should-know.mp3" }, 
            { title: "Tick Tok", playerLink: "https://songbay.co/player/235608792/", demoFile: null },
            { title: "Too Much", playerLink: "https://songbay.co/player/235609976/", demoFile: null },
            { title: "Welcome to Jukes", playerLink: "[Songbay Link 40]", demoFile: null },
            { title: "Wildflower", playerLink: "[Songbay Link 41]", demoFile: null },
            { title: "Year in the Rearview", playerLink: "[Songbay Link 42]", demoFile: null },
            { title: "80s Thematic Lyric", playerLink: "[Songbay Link 43]", demoFile: null }
        ];

        // Function to find the critique data for a song (handling minor title differences)
        const getCritique = (title) => {
            const normalizedTitle = title.replace(/["':,]/g, '').toLowerCase();
            return critiqueData.find(crit => 
                crit.title.toLowerCase().includes(normalizedTitle) || normalizedTitle.includes(crit.title.replace(/["':,]/g, '').toLowerCase())
            ) || {};
        };
        
        // Merge base songs with critique data
        return baseSongs.map(song => ({
            ...song,
            ...getCritique(song.title),
            // Default values if no critique exists
            marketTarget: getCritique(song.title).marketTarget || 'General Pop/Rock/N/A',
            hitPotential: getCritique(song.title).hitPotential || 'N/A',
            critAcclaim: getCritique(song.title).critAcclaim || 'N/A',
            critiqueSummary: getCritique(song.title).critiqueSummary || 'Detailed critique summary available upon request.'
        }));
    }

    const masterSongList = generateMasterSongList();

    // --- 2. PAGE RENDERING FUNCTIONS ---
    
    function renderLyricsPage(songList) {
        let html = `
            <div id="lyrics-page-content">
                <h1>The Master Song List & Professional Assessment (${songList.length} Available Lyrics)</h1>
                <p class="seo-tagline">The Verse sets the scene; the Chorus lands the emotion. Filtered by Commercial Value.</p>
                
                <div id="song-list-container">
                    <table class="assessment-table">
                        <thead>
                            <tr>
                                <th style="width: 20%;">Song Title</th>
                                <th style="width: 30%;">Primary Market Target / Potential</th>
                                <th style="width: 40%;">Critique Summary (Commercial Focus)</th>
                                <th style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${songList.filter(song => song.marketTarget !== 'General Pop/Rock/N/A').map(song => `
                                <tr>
                                    <td><a href="#" class="view-lyrics-link" data-title="${song.title}">★ ${song.title}</a></td>
                                    <td>
                                        <p><strong>Market:</strong> ${song.marketTarget}</p>
                                        <p><strong>Hit Potential:</strong> 
                                            <span style="color: ${song.hitPotential >= 4 ? 'lime' : 'yellow'};">${song.hitPotential} / 5</span> 
                                            | <strong>Acclaim:</strong> ${song.critAcclaim} / 5
                                        </p>
                                    </td>
                                    <td>
                                        <p>${song.critiqueSummary}</p>
                                    </td>
                                    <td>
                                        <a href="${song.playerLink}" target="_blank" class="play-now-button">View on Songbay</a>
                                        <button class="print-button" data-title="${song.title}" style="display: block; margin-top: 5px;">Print Lyrics</button>
                                    </td>
                                </tr>
                            `).join('')}
                            
                            <tr><td colspan="4"><h2>— Additional Catalog Entries —</h2></td></tr>

                            ${songList.filter(song => song.marketTarget === 'General Pop/Rock/N/A').map(song => `
                                <tr>
                                    <td><a href="#" class="view-lyrics-link" data-title="${song.title}">★ ${song.title}</a></td>
                                    <td>General Pop/Rock (Assessment Pending)</td>
                                    <td>Detailed critique summary available upon request.</td>
                                    <td>
                                        <a href="${song.playerLink}" target="_blank" class="play-now-button">View on Songbay</a>
                                        <button class="print-button" data-title="${song.title}" style="display: block; margin-top: 5px;">Print Lyrics</button>
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
                        <img src="kellie-larson-lyricist-photo.jpg" alt="Official Photo of Kellie Larson, Cinematic Songwriter and Lyricist">
                        <p class="caption">Kellie Larson: The B2B Lyricist. Licensing Ready. Emotionally Vetted.</p>
                    </div>
                    <div id="bio-text">
                        <h2>A Strategic Asset for Music Supervision</h2>
                        <p>**Kellie Larson** is a B2B Lyricist operating on the Songbay marketplace, fundamentally redefining the concept of a "hit" from a chart metric to one of **commercial utility and licensing value**. Her work is a resource for A&R, producers, and music supervisors seeking high-impact, narrative-driven lyrical packages ready for immediate synchronization.</p>
                        <h3>The Larson Distinction</h3>
                        <p>It is crucial to note that **Kellie Larson, the Lyricist,** is a distinct individual from a prominent luxury real estate agent, a successful screenwriter, and a decorated U.S. Coast Guard lieutenant commander. This unique focus ensures her portfolio is singular: **100% focused on providing commercially viable, vetted, and accessible intellectual property.**</p>
                        <h3>Lyrical Identity: Narrative & Versatility</h3>
                        <p>Larson’s portfolio is defined by its consistent focus on narrative and emotional authenticity. Her work demonstrates considerable thematic breadth, capably adopting first-person, third-person, and even dual-perspective points of view. From the **cinematic narrative** of **"Wildflower,"** which offers rich character studies perfect for country-drama placements, to the **viscerally impactful defiance** of pop-rock anthems like **"Too Much,"** her catalog spans the full spectrum of emotional and thematic needs. Every song is built with an arc—moving from conflict to resolution or defiant self-reclamation—making them structurally optimized for screen and stage use.</p>
                    </div>
                </div>
            </div>
        `;
        return bioContent;
    }

    function renderJukeboxPage(songList) {
        return `
            <div id="jukebox-page-content">
                <h1>Digital Jukebox: Playable Assets</h1>
                <p>Click "Play Demo" to hear the full song/scratch track (if available) or "Songbay Link" to view the listing.</p>

                <div id="audio-player-controls">
                    <p id="current-track-title">SELECT A TRACK BELOW</p>
                    <audio id="main-audio-player" controls preload="none" style="width: 100%;"></audio>
                </div>

                <div id="jukebox-grid">
                    ${songList.map(song => `
                        <div class="jukebox-song-card">
                            <h3>${song.title}</h3>
                            ${song.demoFile ? 
                                `<button class="play-demo-btn" data-file="${song.demoFile}" data-title="${song.title}">Play Demo</button>` : 
                                `<button class="play-demo-btn" disabled>Demo Not Available</button>`
                            }
                            <a href="${song.playerLink}" target="_blank" class="songbay-link-btn">Songbay Link</a>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
    }

    function renderArticlesPage() {
        const podcastScripts = [
            { title: "The B2B Lyricist: A New Model for Sync Licensing", synopsis: "Examines the commercial utility of the Songbay model, positioning the catalog as a resource for producers and music supervisors seeking licensing-ready assets.", link: "#podcast-1" },
            { title: "Analysis of 'In My Dreams': The Cinematic Ballad", synopsis: "A deep dive into the song's haunting narrative structure and its perfect placement potential for a pivotal moment in film or television drama.", link: "#podcast-2" },
            { title: "Analysis of 'Too Much': The Defiant Pop-Rock Anthem", synopsis: "Focuses on the track's high-energy arc from conflict to catharsis, ideal for high-impact commercial campaigns and scenes of self-reclamation.", link: "#podcast-3" },
            { title: "Analysis of 'Wildflower': The Resilient Country Narrative", synopsis: "A masterclass in character-driven, third-person world-building, making it gold for Western, Country, or character-focused drama genres (e.g., Yellowstone).", link: "#podcast-4" }
        ];

        return `
            <div id="articles-page-content">
                <h1>Industry Analysis & Creative Briefs</h1>
                <p class="tagline">Dissecting the Commercial Utility of the Kellie Larson Catalog</p>
                <div id="podcast-list">
                    ${podcastScripts.map(script => `
                        <div class="article-card">
                            <h2>${script.title}</h2>
                            <p>${script.synopsis}</p>
                            <a href="${script.link}" class="podcast-link-btn" target="_blank">View Article/Listen to Podcast</a>
                        </div>
                    `).join('')}
                    
                    <div class="article-card">
                        <h2>The AI-Enabled Lyricist: A Commitment to the Future</h2>
                        <p>A brief on Kellie Larson's model of using AI for initial demos and quality control, ensuring rapid delivery and clear sonic direction, without compromising the integrity of the human-written lyric.</p>
                        <a href="#ai-article" class="podcast-link-btn">Read the White Paper</a>
                    </div>
                </div>
            </div>
        `;
    }

    function renderContactPage() {
        return `
            <div id="contact-page-content">
                <h1 class="page-title">Contact Kellie Larson</h1>
                <p>For immediate licensing, collaborations, or bespoke lyric requests, please use the form below.</p>
                <form id="contact-form">
                    <label for="name">Name (Required)</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email (Required)</label>
                    <input type="email" id="email" name="email" required>

                    <label for="company">Company/Affiliation</label>
                    <input type="text" id="company" name="company">

                    <label for="inquiry">Type of Inquiry (Required)</label>
                    <select id="inquiry" name="inquiry" required>
                        <option value="">-- Please Select --</option>
                        <option value="Licensing/Sync">Licensing/Sync Placement Inquiry</option>
                        <option value="Collaboration">Collaboration Request (Producer/Artist)</option>
                        <option value="Bespoke">Bespoke Lyric/Commission Request</option>
                        <option value="General">General Inquiry</option>
                    </select>

                    <label for="details">Details of Request (Required)</label>
                    <textarea id="details" name="details" rows="6" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
                <p id="form-status" style="margin-top: 15px; color: var(--color-red);"></p>
            </div>
        `;
    }

    // --- 3. MAIN DOM CONTENT HANDLER ---
    
    // 3.1. HANDLE ENTRANCE SEQUENCE
    enterButton.addEventListener('click', () => {
        entranceScreen.style.opacity = '0';
        setTimeout(() => {
            entranceScreen.style.display = 'none';
            mainContent.style.display = 'block';
            
            // Auto-load the Lyrics Page immediately after entering
            pageDisplay.innerHTML = renderLyricsPage(masterSongList);
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
            } else if (pageId === 'jukebox-page') {
                pageDisplay.innerHTML = renderJukeboxPage(masterSongList);
                setupJukeboxPlayer();
            } else if (pageId === 'articles-page') { 
                pageDisplay.innerHTML = renderArticlesPage();
            } else if (pageId === 'contact-page') { 
                pageDisplay.innerHTML = renderContactPage();
                setupContactForm();
            } else {
                pageDisplay.innerHTML = `<h1 class="page-title">Welcome</h1>
                    <p>Select a section from the navigation above.</p>`;
            }
        });
    });

    // --- 4. JUKEBOX FUNCTIONALITY ---
    function setupJukeboxPlayer() {
        const audioPlayer = document.getElementById('main-audio-player');
        const trackTitleElement = document.getElementById('current-track-title');
        const demoButtons = document.querySelectorAll('.play-demo-btn');
        let currentPlayingButton = null;

        demoButtons.forEach(button => {
            if (!button.disabled) {
                button.addEventListener('click', () => {
                    const filePath = button.dataset.file;
                    const trackTitle = button.dataset.title;

                    if (currentPlayingButton && currentPlayingButton !== button) {
                        currentPlayingButton.textContent = 'Play Demo';
                        currentPlayingButton.classList.remove('playing');
                        audioPlayer.pause();
                    }
                    
                    if (audioPlayer.paused || audioPlayer.getAttribute('src') !== filePath) {
                        audioPlayer.src = filePath;
                        audioPlayer.play();
                        button.textContent = 'Playing...';
                        button.classList.add('playing');
                        trackTitleElement.textContent = `NOW PLAYING: ${trackTitle}`;
                        currentPlayingButton = button;
                    } else {
                        audioPlayer.pause();
                        button.textContent = 'Play Demo';
                        button.classList.remove('playing');
                        trackTitleElement.textContent = `PAUSED: ${trackTitle}`;
                        currentPlayingButton = null;
                    }
                });
            }
        });

        audioPlayer.addEventListener('ended', () => {
            if (currentPlayingButton) {
                currentPlayingButton.textContent = 'Play Demo';
                currentPlayingButton.classList.remove('playing');
                trackTitleElement.textContent = 'PLAYBACK ENDED';
                currentPlayingButton = null;
            }
        });
        audioPlayer.addEventListener('pause', () => { if (currentPlayingButton) { currentPlayingButton.textContent = 'Paused'; } });
        audioPlayer.addEventListener('play', () => { if (currentPlayingButton) { currentPlayingButton.textContent = 'Playing...'; } });
    }

    // --- 5. CONTACT FORM SUBMISSION HANDLER ---
    function setupContactForm() {
        const form = document.getElementById('contact-form');
        const status = document.getElementById('form-status');

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                status.style.color = 'var(--color-red)';
                status.textContent = 'Processing request... (Note: Form submission requires a backend script like PHP/Node.js to actually send the email.)';

                setTimeout(() => {
                    status.style.color = '#38A169'; 
                    status.textContent = 'Message simulated as SENT! Thank you for your inquiry. Kellie Larson will be in touch shortly.';
                    form.reset();
                }, 2000);
            });
        }
    }
});
