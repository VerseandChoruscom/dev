const songData = [
    // --- Lyrical Portfolio Critique and Rating ---
    {
        id: 1,
        title: "Wildflower",
        url: "www.verseandchorus.com/wildflower.mp3",
        category: "Independence",
        genre: "Country Crossover / Pop",
        mood: "Redemptive, Empowering, Aspirational",
        use: "Chart-Topping Single, TV Series Moment, Retail Commercial",
        lyric_snippet: "Oh, she's Wildflower, dancing in the wind. She's got the spirit of a rebel.",
        full_lyric: "...", // Placeholder: Insert full lyric text here
        description: "This track is the ultimate female Redemptive Narrative anthem, perfectly positioned for Country Crossover or High-Emotion Pop. The lyric tells a powerful, instantly relatable story of a resilient protagonist..."
    },
    {
        id: 2,
        title: "Hit the Road",
        url: "www.verseandchorus.com/hit-the-road.mp3",
        category: "Heartbreak",
        genre: "Mainstream Pop / Pop-Rock",
        mood: "Dismissive, High-Energy, Finality",
        use: "Radio Airplay, Viral Content, Action Movie Trailer",
        lyric_snippet: "Don't stop, don't look back, Hit the road, Jack!",
        full_lyric: "...", 
        description: "Immediate, punchy dismissal hook. Direct, simple, and high-energy for radio airplay and virality (Sound-First design)."
    },
    {
        id: 3,
        title: "Don't Want You Back",
        url: "www.verseandchorus.com/dont-want-you-back.mp3",
        category: "Heartbreak",
        genre: "Mainstream Pop / R&B",
        mood: "Aggressive, Total Rejection, Determined",
        use: "Breakup Anthem, Pop/R&B Artist Track, Reality TV Climax",
        lyric_snippet: "My screen is black to you. You can't call, you can't text, my screen is black to you.",
        full_lyric: "...", 
        description: "Emotionally distinct by detailing the relationship's history. The lyrical distinction lies in the bridge's clear ultimatum: 'My screen is black to you.'"
    },
    {
        id: 4,
        title: "Welcome to Jukes",
        url: "www.verseandchorus.com/welcome-to-jukes.mp3",
        category: "Story/Societal",
        genre: "Sync / Cinematic Blues / Horror",
        mood: "Atmospheric, Dark, Sinister, Fate-Driven",
        use: "Dramatic Film/TV Sync, Horror Soundtrack, Video Game",
        lyric_snippet: "No one ever leaves here when day breaks... a ghostly fate",
        full_lyric: "...", 
        description: "Highest Niche/Sync Potential. Highly atmospheric, dark Southern Gothic narrative ('dead now dance,' 'close the door! now it's TOO LATE'). Exceptional value for dramatic film/TV sync."
    },
    {
        id: 5,
        title: "Crunkpunk Song: Fury (Escape)",
        url: "www.verseandchorus.com/fury-escape.mp3",
        category: "Independence",
        genre: "Alternative Rock / Metal",
        mood: "Raw, Uncompromising, Empowered Escape",
        use: "Dark TV Drama, Domestic Violence PSA, Alt-Rock Artist Track",
        lyric_snippet: "The blood, the bruises, the tears I cry—It's always this way. Can you tell me why?!",
        full_lyric: "...", 
        description: "Raw, uncompromising look at domestic violence and escape ('Your fists, a never-ending show,' 'pierce me through the flesh'). High emotional intensity and complexity for a specialized, critical audience."
    },
    {
        id: 6,
        title: "First Step",
        url: "www.verseandchorus.com/first-step.mp3",
        category: "Healing",
        genre: "Inspirational Pop / Alt-Folk",
        mood: "Hopeful, Vulnerable, Supportive",
        use: "Intervention Scene, Non-Profit Campaign, Contemporary Gospel",
        lyric_snippet: "Together we'll fix it, you just gotta take the first step.",
        full_lyric: "...", 
        description: "Highest Thematic Depth. Addresses addiction/intervention ('I won't enable, I'll be that true friend') with maturity. Avoids cliché, offering genuine vulnerability and strong critical/inspirational appeal."
    },
    {
        id: 7,
        title: "Alone In Our Home",
        url: "www.verseandchorus.com/alone-in-our-home.mp3",
        category: "Grief/Healing",
        genre: "Adult Contemporary Ballad",
        mood: "Deep Grief, Somber, Absent",
        use: "Emotional Film Score, TV Drama Scene (Loss), Ballad Placement",
        lyric_snippet: "The grief is captured through the setting of the empty house, focusing on the sheer physical absence.",
        full_lyric: "...", 
        description: "Deep grief captured through the setting of the empty house, focusing on the sheer physical absence. Powerful emotional resonance for balladic placement."
    },
    {
        id: 8,
        title: "Miss Your Stupid Face",
        url: "www.verseandchorus.com/miss-your-stupid-face.mp3",
        category: "Grief/Healing",
        genre: "Pop Ballad / Grief",
        mood: "Intimate, Loving Memory, Authentic Loss",
        use: "Poignant Film Scene, Emotional Commercial, Pop Artist Ballad",
        lyric_snippet: "I miss your stupid face! (Focused on intimate, often humorous, details of loss)",
        full_lyric: "...", 
        description: "Focused on intimate, often humorous, details of loss ('silly you were when you're tired,' 'I miss your stupid face!'). This use of specific, loving memories elevates the emotional impact."
    },
    {
        id: 9,
        title: "Author of a Lie",
        url: "www.verseandchorus.com/author-of-a-lie.mp3",
        category: "Heartbreak",
        genre: "Pop-Rock / Indie-Pop",
        mood: "Gaslighting, Confrontational, Frustrated",
        use: "TV Drama Soundtrack, Relationship Film Climax, Empowerment Ad",
        lyric_snippet: "You're the author of a lie, a master of deceit, and I'm tired of this story on repeat.",
        full_lyric: "...", 
        description: "Highly relatable theme (gaslighting/deceit). The chorus uses a great, memorable summary line: 'You're the author of a lie, a master of deceit.'"
    },
    {
        id: 10,
        title: "Sic 1",
        url: "www.verseandchorus.com/sic-1.mp3",
        category: "Heartbreak",
        genre: "Pop / Hip-Hop Fusion",
        mood: "Toxic, Co-dependent, Viral-Ready",
        use: "Viral Hook, Reality TV, Modern Pop Artist Track",
        lyric_snippet: "You're the sick one, baby, and I'm finally breaking free.",
        full_lyric: "...", 
        description: "Modern, viral-ready concept of a toxic, co-dependent relationship as a 'sick one' / 'drug.' The parenthetical ad-libs effectively suggest musical texture and modern production style."
    },
    {
        id: 11,
        title: "Too Much",
        url: "www.verseandchorus.com/too-much.mp3",
        category: "Heartbreak",
        genre: "Indie Pop / Emo-Pop",
        mood: "Conflict, Repetitive, Mass Appeal",
        use: "Mass-Market Conflict Song, Chart-Topper, Commercial Use",
        lyric_snippet: "Too much fighting, too much disrespect / Too much lying, no truth to detect.",
        full_lyric: "...", 
        description: "Extremely relatable, repetitive chorus hook: 'Too much fighting, too much disrespect / Too much lying, no truth to detect.' Designed to summarize conflict for mass consumption."
    },
    {
        id: 12,
        title: "The Aftermath",
        url: "www.verseandchorus.com/the-aftermath.mp3",
        category: "Healing",
        genre: "Alt-Pop / Emo-Pop",
        mood: "Introspection, Resolution, Post-Chaos",
        use: "Movie Scene (Quiet Resolve), Emo-Pop Artist Album Track",
        lyric_snippet: "The Aftermath is focused on the struggle after the chaos ends ('suffocating quiet').",
        full_lyric: "...", 
        description: "Strong narrative arc focused on the struggle after the chaos ends ('suffocating quiet,' 'bizarre comfort in the chaos'). Good lyrical depth and resolution ('anger burns, a purifying fire')."
    },
    {
        id: 13,
        title: "Year in the rearview",
        url: "www.verseandchorus.com/year-in-the-rearview.mp3",
        category: "Starting Over",
        genre: "Country / Pop Ballad",
        mood: "Calculated Healing, Moving On, Reflective",
        use: "Country Crossover Single, Adult Contemporary Radio",
        lyric_snippet: "Three hundred sixty-five sunsets, another year, to truly leave the poison behind.",
        full_lyric: "...", 
        description: "Classic long-term healing narrative. Clear, quantifiable time structure ('Three hundred sixty-five sunsets,' 'another year, to truly leave the poison behind') ideal for Country/Adult Contemporary."
    },
    {
        id: 14,
        title: "How's it feel bro",
        url: "www.verseandchorus.com/hows-it-feel-bro.mp3",
        category: "Independence",
        genre: "Hip-Hop / Pop Fusion",
        mood: "Direct, Confrontational, Retribution",
        use: "Aggressive/Confident Artist Track, Sports Sync, Empowering Ad",
        lyric_snippet: "How's it feel bro, when the tables turn? You got burned.",
        full_lyric: "...", 
        description: "Direct, confrontational, and empowering theme of turning the tables on a cheating partner. High commercial appeal for artists known for aggressive, confident tracks."
    },
    {
        id: 15,
        title: "Karmic Boomerang (My Girl)",
        url: "www.verseandchorus.com/karmic-boomerang.mp3",
        category: "Starting Over",
        genre: "Pop / Hip-Hop / R&B",
        mood: "Catchy, Retribution, Confident",
        use: "Mainstream Pop Single, High-Concept Commercial",
        lyric_snippet: "She's like a boomerang, always circling back. My girl, Karma.",
        full_lyric: "...", 
        description: "Simple, catchy concept: Karma personified as 'My girl.' The hook 'She's like a boomerang, always circling back' is instantly memorable."
    },
    {
        id: 16,
        title: "Showdown at my door",
        url: "www.verseandchorus.com/showdown-at-my-door.mp3",
        category: "Independence",
        genre: "Pop-Rock / Pop",
        mood: "High-Tension, Assertive, Free",
        use: "Theatrical Scene, Empowerment Montage, Pop-Rock Anthem",
        lyric_snippet: "It's a showdown at my door, taking out the trash, busy changing locks.",
        full_lyric: "...", 
        description: "High-tension narrative focused on a final physical confrontation and assertion of freedom ('taking out the trash, busy changing locks'). Strong theatrical element."
    },
    {
        id: 17,
        title: "One Small Wrong",
        url: "www.verseandchorus.com/one-small-wrong.mp3",
        category: "Heartbreak",
        genre: "Pop / R&B / Hip-Hop Dialogue",
        mood: "Complex Betrayal, Tit-for-Tat, High Tension",
        use: "Dramatically complex TV/Film Scene, R&B/Hip-Hop Collaboration",
        lyric_snippet: "Unique structure using alternating male/female voices (vocal/rap) to tell a complex, tit-for-tat betrayal story.",
        full_lyric: "...", 
        description: "Unique structure using alternating male/female voices (vocal/rap) to tell a complex, tit-for-tat betrayal story. High artistic ambition and critical depth due to dialogue structure."
    },
    {
        id: 18,
        title: "In My Dreams",
        url: "www.verseandchorus.com/in-my-dreams.mp3",
        category: "Grief/Healing",
        genre: "Adult Contemporary Ballad",
        mood: "Grief, Escapism, Loneliness",
        use: "Emotional Film Ballad, Adult Contemporary Radio",
        lyric_snippet: "When I wake, you're gone, and all I feel is loneliness and fear.",
        full_lyric: "...", 
        description: "Focused on grief and escapism through dreams ('When I wake, you're gone, and all I feel is loneliness and fear'). High emotional fidelity for a ballad."
    },
    {
        id: 19,
        title: "I can be your everything",
        url: "www.verseandchorus.com/i-can-be-your-everything.mp3",
        category: "Love",
        genre: "Pop Ballad / R&B",
        mood: "Dramatic Plea, Unrequited Desire, Sacrifice",
        use: "High-Drama TV Scene, R&B Artist Album Track",
        lyric_snippet: "I can give you everything. I'd beg on my knees.",
        full_lyric: "...", 
        description: "Highly dramatic plea for a partner to stay, offering an ultimate sacrifice ('I can give you everything,' 'I'd beg on my knees'). Strong focus on unrequited desire."
    },
    {
        id: 20,
        title: "80s Thematic Lyric",
        url: "www.verseandchorus.com/80s-thematic.mp3",
        category: "Story/Societal",
        genre: "Sync / Advertising",
        mood: "Nostalgic, Energetic, Functional",
        use: "80s Aesthetic Revival Commercials, Telecom/Automotive Ad Campaign",
        lyric_snippet: "They say Gen X is da best, yeah, it's true, growing up in the tubular 80's was rad so cool.",
        full_lyric: "...", // Insert full lyric text here
        description: "Highest Sync Utility. Purely functional lyric composed of cultural touchstones and song titles, making it peak commercial content for nostalgia advertising (80s Aesthetic revival high marketability)."
    },
    // Future expansion for songs 21-29 can start here if needed.
];
    },
    {
        id: 4,
        title: "Oh My Love",
        url: "www.verseandchorus.com/oh-my-love.mp3",
        category: "Grief/Healing",
        genre: "Ballad",
        mood: "Pensive, Grieving",
        use: "Funeral Scene, End Credits Ballad",
        lyric_snippet: "I don't want the last time I see you to be when your casket is lowered.",
        full_lyric: "...", // Placeholder: Insert full lyric text here
        description: "..." // Placeholder: Insert full Songbay description here
    },
    {
        id: 5,
        title: "Children of War",
        url: "www.verseandchorus.com/children-of-war.mp3",
        category: "Story/Societal",
        genre: "Folk-Rock",
        mood: "Sober, Urgent",
        use: "Documentary, Humanitarian Campaign",
        lyric_snippet: "If everyone dies, then who cares who is best?",
        full_lyric: "...", // Placeholder: Insert full lyric text here
        description: "..." // Placeholder: Insert full Songbay description here
    },
    // ... continue for all 29 songs
];
