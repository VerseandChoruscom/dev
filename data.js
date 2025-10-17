const songData = [
    // --- Lyrical Portfolio (Alphabetized by Title) ---

    // 1. The Aftermath
    {
        id: 1,
        title: "The Aftermath",
        url: "www.verseandchorus.com/the-aftermath.mp3",
        category: "Breakup",
        genre: "Emotional Pop",
        mood: "Regretful, Pensive, Cinematic",
        use: "Movie Montage, TV Drama Final Scene, Emotional Commercial",
        lyric_snippet: "The aftermath is all that's left of what we were, and it's silent now.",
        full_lyric: "...", // Insert full lyric text here
        description: "A profound lyric exploring the silence and emotional devastation after a relationship ends, perfect for a high-stakes dramatic scene."
    },

    // 2. Beautiful Beat
    {
        id: 2,
        title: "Beautiful Beat",
        url: "www.verseandchorus.com/beautiful-beat.mp3",
        category: "Love/Dance",
        genre: "Dance Pop",
        mood: "Uplifting, Energetic, Romantic",
        use: "Club Scene, Commercial, Fitness Montage",
        lyric_snippet: "I feel that beautiful beat inside my chest, baby, you're the only one.",
        full_lyric: "...", // Insert full lyric text here
        description: "High-energy dance track with a simple, unifying message of love and movement. Designed for radio and viral dance content."
    },

    // 3. Broken Record
    {
        id: 3,
        title: "Broken Record",
        url: "www.verseandchorus.com/broken-record.mp3",
        category: "Toxicity/Breakup",
        genre: "Pop / Breakup",
        mood: "Frustrated, Resigned, Mid-Tempo",
        use: "TV Show Transition, Breakup Scene, Indie Film Soundtrack",
        lyric_snippet: "I'm a broken record, skipping on repeat, this ain't a cry for help.",
        full_lyric: "...", // Insert full lyric text here
        description: "A metaphoric lyric about being stuck in a toxic, repeating cycle of a relationship. Highly relatable."
    },

    // 4. Concrete Under Our Feet
    {
        id: 4,
        title: "Concrete Under Our Feet",
        url: "www.verseandchorus.com/concrete-under-our-feet.mp3",
        category: "Aspirational/Youth",
        genre: "Cinematic Rock",
        mood: "Driving, Adventurous, Urban",
        use: "Car Commercial, Road Trip Movie, Opening Scene",
        lyric_snippet: "We feel the concrete under our feet, running towards the sun.",
        full_lyric: "...", // Insert full lyric text here
        description: "A fast-paced, anthemic lyric celebrating youthful ambition and urban freedom. Strong sync placement potential."
    },

    // 5. Don't Be Jelly
    {
        id: 5,
        title: "Don't Be Jelly",
        url: "www.verseandchorus.com/dont-be-jelly.mp3",
        category: "Empowerment",
        genre: "Sassy Pop",
        mood: "Confident, Playful, Dismissive",
        use: "Teen Comedy, Reality TV Moment, Empowerment Playlist",
        lyric_snippet: "You can watch me shine, but baby, don't be jelly.",
        full_lyric: "...", // Insert full lyric text here
        description: "A fun, confident lyric dismissing jealousy and celebrating self-love. Very high sass factor."
    },

    // 6. First Step
    {
        id: 6,
        title: "First Step",
        url: "www.verseandchorus.com/first-step.mp3",
        category: "Inspiration/R&B",
        genre: "R&B / Soul",
        mood: "Motivated, Smooth, Soulful",
        use: "Inspirational Commercial, TV Ad Campaign, Uplifting Drama",
        lyric_snippet: "All you gotta do is take the first step, and the journey begins.",
        full_lyric: "...", // Insert full lyric text here
        description: "An encouraging soul track focused on overcoming fear and taking the first move. Excellent for narrative placement."
    },

    // 7. Hard No
    {
        id: 7,
        title: "Hard No",
        url: "www.verseandchorus.com/hard-no.mp3",
        category: "Empowerment/Boundary",
        genre: "Pop / Empowerment",
        mood: "Strong, Assertive, Confident",
        use: "Motivational Scene, High-Energy Montage, Workout Playlist",
        lyric_snippet: "When they ask me if I'm coming back, baby, my answer is a hard no.",
        full_lyric: "...", // Insert full lyric text here
        description: "A bold, modern-pop anthem about setting boundaries and walking away from a toxic situation. Direct and punchy."
    },

    // 8. Heartbreak and Trouble (Hubba Bubba)
    {
        id: 8,
        title: "Heartbreak and Trouble",
        url: "www.verseandchorus.com/heartbreak-and-trouble.mp3",
        category: "Story/Gossip",
        genre: "Pop / Emotional Story",
        mood: "Intense, Descriptive, Cinematic",
        use: "High-Drama TV Show Trailer, Narrative Film Sequence",
        lyric_snippet: "They call him heartbreak and trouble, but to me, he’s my sweet Hubba Bubba.",
        full_lyric: "...", // Insert full lyric text here
        description: "A dramatic narrative about a volatile relationship, using 'Hubba Bubba' as an ironic term of endearment for the dangerous partner."
    },

    // 9. Hit The Road (Aliased group)
    {
        id: 9,
        title: "Hit The Road",
        url: "www.verseandchorus.com/hit-the-road.mp3",
        category: "Breakup/Dismissal",
        genre: "Country Pop / Pop-Rock",
        mood: "Dismissive, High-Energy, Finality",
        use: "Radio Airplay, Viral Content, Action Movie Trailer",
        lyric_snippet: "Don't stop, don't look back, Hit the road, Jack! (Alias: Showdown at my Door, I'm not the girl, Alone in my room, Miss your stupid face)",
        full_lyric: "...", 
        description: "Immediate, punchy dismissal hook. Direct, simple, and high-energy for radio airplay and virality (Sound-First design)."
    },

    // 10. My Girl Karma
    {
        id: 10,
        title: "My Girl Karma",
        url: "www.verseandchorus.com/my-girl-karma.mp3",
        category: "Vengeance",
        genre: "Alt Pop / Vengeance",
        mood: "Dark, Satisfied, Retribution",
        use: "Action/Thriller Movie Score, Badass Female Character Entrance",
        lyric_snippet: "Don't worry 'bout me, baby, 'cause my girl Karma's got your back.",
        full_lyric: "...", // Insert full lyric text here
        description: "A dark-pop track about letting fate handle revenge. Highly cinematic and moody."
    },

    // 11. One Small Wrong
    {
        id: 11,
        title: "One Small Wrong",
        url: "www.verseandchorus.com/one-small-wrong.mp3",
        category: "Betrayal/Grief",
        genre: "Cinematic Ballad",
        mood: "Introspective, Heavy, Forgiving",
        use: "End Credits Ballad, Emotional Peak of a Drama Series",
        lyric_snippet: "It only took one small wrong, and the foundation cracked.",
        full_lyric: "...", // Insert full lyric text here
        description: "A powerful, slow-burn ballad exploring how a single mistake can ruin something beautiful. Built for orchestral arrangement."
    },

    // 12. Showdown at My Door (Same content as Hit The Road)
    {
        id: 12,
        title: "Showdown at My Door",
        url: "www.verseandchorus.com/hit-the-road.mp3",
        category: "Breakup/Confrontation",
        genre: "Country Pop / Pop-Rock",
        mood: "Angry, Confrontational, Urgent",
        use: "Movie Scene Confrontation, Country Radio Hit",
        lyric_snippet: "You know I told you to go, so why are you standing right here for a showdown at my door?",
        full_lyric: "...", 
        description: "A high-drama companion lyric to 'Hit The Road' with a focus on the moment of confrontation."
    },

    // 13. Sick One
    {
        id: 13,
        title: "Sick One",
        url: "www.verseandchorus.com/sick-one.mp3",
        category: "Mental Health/Toxicity",
        genre: "Pop / Indie-Pop",
        mood: "Anxious, Chaotic, Introspective",
        use: "Character Monologue, Dark Comedy Scene, Indie Movie Soundtrack",
        lyric_snippet: "There's a sick one in my head, but it's not me.",
        full_lyric: "...", // Insert full lyric text here
        description: "A deep, anxious lyric exploring mental health and the feeling of fighting an internal battle. Indie market appeal."
    },

    // 14. Solid Shifting Ground
    {
        id: 14,
        title: "Solid Shifting Ground",
        url: "www.verseandchorus.com/solid-shifting-ground.mp3",
        category: "Insecurity/Change",
        genre: "Folk Pop / Indie",
        mood: "Unsettled, Searching, Thoughtful",
        use: "Coming-of-Age Film, Documentary Montage, Acoustic Scene",
        lyric_snippet: "I used to think this was solid ground, but all I feel is shifting.",
        full_lyric: "...", // Insert full lyric text here
        description: "A thoughtful, acoustic-friendly lyric about life changes and finding stability amid chaos."
    },

    // 15. Sweet Mary Jane
    {
        id: 15,
        title: "Sweet Mary Jane",
        url: "www.verseandchorus.com/sweet-mary-jane.mp3",
        category: "Escape/Indie",
        genre: "Indie Rock",
        mood: "Rebellious, Relaxed, Escapist",
        use: "Cult TV Show Montage, Independent Film Scene, Alternative Radio",
        lyric_snippet: "She's my sweet Mary Jane, and she takes the pain away.",
        full_lyric: "...", // Insert full lyric text here
        description: "A classic indie-rock homage to escapism and finding comfort in vices. High commercial appeal for lifestyle brands."
    },

    // 16. Tick Tok
    {
        id: 16,
        title: "Tick Tok",
        url: "www.verseandchorus.com/tick-tok.mp3",
        category: "Time/R&B",
        genre: "R&B / Pop",
        mood: "Urgent, Rhythmic, Alluring",
        use: "Tension Scene, Club Dance Montage, R&B Radio",
        lyric_snippet: "The clock says tick tok, baby, don't stop.",
        full_lyric: "...", // Insert full lyric text here
        description: "A driving, rhythmic R&B track about urgency and time running out. Focuses on a powerful, simple hook."
    },
    
    // 17. Wildflower
    {
        id: 17,
        title: "Wildflower",
        url: "www.verseandchorus.com/wildflower.mp3",
        category: "Independence/Redemption",
        genre: "Country Crossover / Pop",
        mood: "Redemptive, Empowering, Aspirational",
        use: "Chart-Topping Single, TV Series Moment, Retail Commercial",
        lyric_snippet: "Oh, she's Wildflower, dancing in the wind. She's got the spirit of a rebel.",
        full_lyric: "...", // Placeholder: Insert full lyric text here
        description: "This track is the ultimate female Redemptive Narrative anthem, perfectly positioned for Country Crossover or High-Emotion Pop. The lyric tells a powerful, instantly relatable story of a resilient protagonist."
    },
    
];
