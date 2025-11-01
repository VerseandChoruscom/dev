/**
 * green-room-scripts.js
 * Contains all necessary JavaScript for the Green Room activities, including lyric data,
 * Madlibs, Turn Style mixing, Lightning Lyrics, and the Cinematic Scene generator (using Gemini API).
 */

// Global variable to hold all the song data for the random mixers
const SONG_DATA = [
    { 
        title: "Your Forever Man", 
        lyrics: `When Misty cries, the tears fall like rain from her eyes, And the pain, buried deep inside starts to rise, With nowhere to hide. When the storm subsides, and the hurricane blown away her disguise, I see, within her eyes, strength that won't die. No longer paralyzed. She knows how much I love her, and I'm always thinking of her. We'll be together forever. Misty knows, I can see it in her eyes. Every demon in her mind beat them down many times. I kept her safe and unharmed, held tightly in my arms, Until we weathered through the storm. And she stands in front of me after battling dark childhood memories. No longer stressed by fear and anxiety, This beautiful woman that I see, is finally free. I'm the anchor, her helping hand. She's my future, I'm her forever man. It's no surprise, Misty can see that I love her when she looks into my eyes.`
    },
    { 
        title: "Sick One", 
        lyrics: `Our love is on a sick one. It's good for no one. Shit we fight about is so dumb. It's our drug, we're never done. They all said that you didn't love me. But that was truly hard to see, but hindsight I wasn't a priority. I acted crazy wanting all of you to want me so badly too. You always say that my words hold no value. You apologize to get between my thighs. You said I love you and always be true But when out of sight you lost your damn mind. You got new supply and you crossed a lot of lines. I couldn't believe all the lies you told. You were sus so I looked through your phone. My love is on a sick one too. I don't know what to o...how to end it with you. I run back. Right on cue. It's our drug. We're never done. On a sick one. And you were right, this song is about you.`
    },
    { 
        title: "Stood By My Side", 
        lyrics: `Shadows falling, cold and deep, Faces turned, secrets to keep. World weighed heavy, crushing me down, Lost in silence, no one around. Whispers in the dark, told me to quit, Said nobody cared, not even a bit. But then a whisper, a light broke through, A love wrapped around, strong and true. When the world walked away, You stood by my side, My constant companion, nowhere to hide. You have my back, Lord, a strength I can't deny, And because You're with me, I don't wanna die. The lies they echoed, now they fade away, Your sweet presence brightens every day. Emptiness inside, starts to fill, With peace overflowing, making me still. Don't walk this path with fear, not anymore, Your presence makes me whole, to my very core. Turning dark moments to a brighter day. Don't wanna die, Your love set me free, Forever in Your presence, eternally. You have my back, Lord, I'm never alone.`
    },
    { 
        title: "BOOM BOOM BEAT", 
        lyrics: `Ephemeral moment, I should've stretched it out. Felt you wanted the same, without any doubt. But all good things come to an end, it's true. Doesn't mean you can't pick it up again, me and you. So I will wait till the morning, for our love to reunite. When the darkness disperses, through the sliver of light. Don't wanna be away for too long, 'cause I miss you, babe. But when we meet, my heart song plays a beautiful beat. Boom, boom, boom, da boom, boom, boom. Yodel-ay-hee-hoo! Cruisin' down Coast Highway, sun in the sky so bright. Thinking 'bout you, baby, everything feels right. On the beautiful beach with the pier's cool breeze. Waiting for that moment, gonna bring me to my knee. You are loved, you are worth it. You are somebody, you are amazing. I know this isn't wrong. Together, we always got that sweet song. Feeling like a lifetime apart, you have my heart and it plays a beautiful beat.`
    },
    { 
        title: "Author of a Lie", 
        lyrics: `You tell a story, i pick it apart. Your timeline is whacked, you're playing a part. Said you were dancing on the beach in july and the tide was high and the moon was in the sky. I’m like, "wait a minute, that don't add up to me." Your whole memory's a movie fantasy. But when i start to get angry and vent, then you deflect, make up stuff and rewrite events. You're the author of a lie, a master of deceit. And i'm tired of this story on repeat. I saw a picture tagged in front of a neon bar. Man, your excuses are all just a big charade. I see the cracks, the holes in your alibi. Every time you open your mouth, boom, another lie. I’m over it, i’m done, i’m walking away. Tired of this fiction, tired of the pretense. No more of your stories, they lack common sense.`
    },
    { 
        title: "BIG HARD NO", 
        lyrics: `So sad, heard she had enough. "Don't want ya anymore," and you're taking it rough. Now you're here, with that sad look on your face. Trying to get back in my good grace. You wanna apologize? Talkin' 'bout a second chance. Look, the answer on my face screams "hell no," But let me say it real clear before I go... 'Cause that's a big hard NO, not playing your game! Nothing you could whisper can ever douse this flame. You can't mess with my day, no way, not anymore! You think I'm dumb, said it yourself. 'Cause I didn't know you had someone else. I got my reasons, etched within my soul. You left me shattered, lost all control. For someone else, you walked right out the door. I'm happier now, more than I've ever been. Found my own light, a peace from deep within. Can't tempt me, devil, I love Jesus.`
    },
    { 
        title: "BROKEN RECORD", 
        lyrics: `Yeah, a goddamn mess, that's the headline news, worthless ain't a feeling, it's the air I choose to breathe these days. Everyone's eyes, like lasers, judging every flaw, but middle fingers up, I ain't playing by their law. You can't outrun the dark when your spirit's seized, always the leaver, and I'm always the deceased in this damn game of hearts. Your silence screams the answer in the empty air. You got your shiny life, your perfect little scene, guess being around me just makes your picture unclean. 'Cause I'm a broken record, skipping on repeat, this ain't a cry for help, it's the bitter taste of defeat. Yeah, my eyes are open now, the venom starts to fade, a promise to myself I've made. So watch me walk away, into the fading light, tonight's the night I break free and finally feel alright. Sickening to be me? Well, baby, now you're free, no more heavy baggage clinging to your pedigree. I owe you nothing, my worthless debt is paid. Turning the page fast, leaving you in the dust and us in the past.`
    },
    { 
        title: "CEO, NOT BABYSITTING TREE", 
        lyrics: `I don't want no boys, I ain't got time for... Honey, I'm a CEO, not a babysitting tree. Boys, boys, boys, boys, boys, boys, boys, boys, boys... Please, take your tiny hearts and find some other toys. I need a man who knows his way, around a dinner date. Not someone asking to chill at my crib 'cause their parents are still awake at 8 PM. You're flexing muscles in your selfies, with a pouty little face, While I'm hustling, racking stacks, running a fast-paced race. Not "wyd?" at 2 AM, with a picture of your feet. I need a man who knows his way, around a dinner date, He opens all doors, turns the heater on to keep me warm, and calls if he's going to be late. A real man values my time. Call me over and hand me a controller? No, I don't wanna play! I need a man who can fix a sink, and then fix me, you know? I need a man who knows his wine, and knows just how to tease. You think the proper way to behave is to have a woman wait while you get to the next town so you can save?`
    },
    { 
        title: "CHILDREN OF WAR", 
        lyrics: `The laughter is now replaced by sad sounds you hear. For children caught in war, living in fear. No more bedtime stories, no soft songs to sing. Just a terror on the face of every young thing. Run, little children! there's nothing left here! Only shattered memories of what was once dear. Cause the talks have all failed, the peace is now gone. No way to go back, the fighting moves on. When everyone has nukes and buttons are pressed. If everyone dies, then who cares who is best. Now small feet are running, from blasts they take flight. In broken-down houses, there is no light; dust-filled air turns the day into night. All the innocent suffer, stuck in these fights. Cause leaders clash hard, and walk away as they turn out the lights. What about the children, so helpless and small? The burden they will carry, as they watch it all fall.`
    },
];
// New Madlib Template: Based on a line from "Broken Record"
const MADLIB_TEMPLATE = "I'm a [madlib-adjective] [madlib-noun], skipping [madlib-adverb] on repeat. I [madlib-verb] away from all your [madlib-plural-noun] into the fading light of this [madlib-place].";
const API_KEY = ""; // Key left empty for Canvas environment

// --- GAME 1: LYRICAL MADLIBS ---

function generateMadlib(event) {
    event.preventDefault();
    const resultBox = document.getElementById('madlib-result');
    resultBox.innerHTML = '<p class="loading">Generating...</p>';

    // Get all 6 new inputs
    const adjective = document.getElementById('madlib-adjective').value.trim();
    const noun = document.getElementById('madlib-noun').value.trim();
    const verb = document.getElementById('madlib-verb').value.trim();
    const adverb = document.getElementById('madlib-adverb').value.trim();
    const pluralNoun = document.getElementById('madlib-plural-noun').value.trim();
    const place = document.getElementById('madlib-place').value.trim();


    if (!adjective || !noun || !verb || !adverb || !pluralNoun || !place) {
        resultBox.innerHTML = '<p class="error">Please fill in all six fields.</p>';
        return;
    }

    // Replace the placeholders with the user's input, bolded for emphasis
    const newLyric = MADLIB_TEMPLATE
        .replace('[madlib-adjective]', `<b>${adjective.toLowerCase()}</b>`)
        .replace('[madlib-noun]', `<b>${noun.toLowerCase()}</b>`)
        .replace('[madlib-verb]', `<b>${verb.toLowerCase()}</b>`)
        .replace('[madlib-adverb]', `<b>${adverb.toLowerCase()}</b>`)
        .replace('[madlib-plural-noun]', `<b>${pluralNoun.toLowerCase()}</b>`)
        .replace('[madlib-place]', `<b>${place.toLowerCase()}</b>`);

    resultBox.innerHTML = `
        <p class="lyric-output">"${newLyric}"</p>
        <p class="source-text">Original Line (Broken Record): "I'm a <b>broken record</b>, skipping <b>on repeat</b>. I <b>walked</b> away from all your <b>baggage</b> into the fading light of this <b>game</b>."</p>
    `;
}

// --- GAME 2: 2 SONG TURN STYLE (NOW RANDOM) ---

function mixSongs() {
    const resultBox = document.getElementById('turnstyle-result');
    resultBox.innerHTML = '<p class="loading">Spinning the decks...</p>';

    if (SONG_DATA.length < 2) {
        resultBox.innerHTML = '<p class="error">Not enough songs in the catalog to mix.</p>';
        return;
    }
    
    // Randomly select two distinct song indices
    let index1 = Math.floor(Math.random() * SONG_DATA.length);
    let index2 = index1;
    while (index2 === index1) {
        index2 = Math.floor(Math.random() * SONG_DATA.length);
    }

    const song1 = SONG_DATA[index1];
    const song2 = SONG_DATA[index2];

    // Simple mixing logic: Combine core themes and one key line from each
    const theme1 = song1.title;
    const theme2 = song2.title;
    
    // Select a random, non-empty line from each song
    const line1 = song1.lyrics.split(/[.?!]/).filter(l => l.length > 10).sort(() => 0.5 - Math.random())[0].trim();
    const line2 = song2.lyrics.split(/[.?!]/).filter(l => l.length > 10).sort(() => 0.5 - Math.random())[0].trim();

    resultBox.innerHTML = `
        <p class="lyric-output">
            <b>Concept Mix: ${theme1} meets ${theme2}</b>
        </p>
        <p>This concept marries the **${theme1}** theme of ${song1.title.includes('War') || song1.title.includes('Broken') ? 'conflict and struggle' : 'love and devotion'} with the **${theme2}** theme of ${song2.title.includes('CEO') || song2.title.includes('NO') ? 'empowerment and boundary setting' : 'emotional connection and healing'}.</p>
        <p class="lyric-output-small">
            **New Hook Idea (Mixing Catalogs):**
            <br>"${line1}."<br>
            "...And the new chorus drops in: ${line2}."
        </p>
    `;
}

// --- GAME 3: CINEMATIC SCENE GENERATOR (AI) ---

async function generateCinematicScene(event) {
    event.preventDefault();
    const resultBox = document.getElementById('scene-result');
    resultBox.innerHTML = '<p class="loading">Calling the Muse... stand by.</p>';

    const inputs = {
        person: document.getElementById('scene-person').value.trim(),
        place: document.getElementById('scene-place').value.trim(),
        thing: document.getElementById('scene-thing').value.trim(),
        number: document.getElementById('scene-number').value.trim(),
        color: document.getElementById('scene-color').value.trim(),
        funPlace: document.getElementById('scene-fun-place').value.trim(),
        celeb: document.getElementById('scene-celeb').value.trim(),
        animal: document.getElementById('scene-animal').value.trim(),
        transport: document.getElementById('scene-transport').value.trim(),
        live: document.getElementById('scene-live').value.trim(),
        state: document.getElementById('scene-state').value.trim(),
        problem: document.getElementById('scene-problem').value.trim(),
    };

    // Constructing a concise and targeted prompt
    const userPrompt = `Generate a single, cinematic, evocative lyric line (maximum 15 words) that combines the following ${Object.keys(inputs).length} disparate concepts:
        Person: ${inputs.person}, Place: ${inputs.place}, Thing: ${inputs.thing}, Number: ${inputs.number}, Color: ${inputs.color}, Fun Place: ${inputs.funPlace}, Celebrity: ${inputs.celeb}, Animal: ${inputs.animal}, Transportation: ${inputs.transport}, Place to Live: ${inputs.live}, U.S. State: ${inputs.state}, Life Problem: ${inputs.problem}.
        Focus on mood and strong imagery, suitable for a Country or Pop-Rock ballad. Do not include a title or any explanation, just the final lyric line in quotation marks.`;

    const systemPrompt = "You are a world-class lyricist specializing in cinematic, high-concept metaphors and imagery. Your task is to blend disparate concepts into a single, cohesive, emotional line of song lyric.";

    try {
        const payload = {
            contents: [{ parts: [{ text: userPrompt }] }],
            systemInstruction: { parts: [{ text: systemPrompt }] },
            // Set temperature lower for more focused, less random output
            generationConfig: { temperature: 0.5 }, 
        };

        const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${API_KEY}`;
        
        let response;
        let attempts = 0;
        const maxAttempts = 3;
        
        // Simple exponential backoff implementation for API call
        while (attempts < maxAttempts) {
            try {
                response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });

                if (response.status === 429) { // Rate limit
                    const delay = Math.pow(2, attempts) * 1000;
                    attempts++;
                    await new Promise(resolve => setTimeout(resolve, delay));
                    continue; // Retry
                }

                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                break; // Success

            } catch (error) {
                if (attempts === maxAttempts - 1) throw error;
                const delay = Math.pow(2, attempts) * 1000;
                attempts++;
                await new Promise(resolve => setTimeout(resolve, delay));
            }
        }
        
        const result = await response.json();
        const generatedText = result.candidates?.[0]?.content?.parts?.[0]?.text || "Could not generate a lyric. Try again.";

        resultBox.innerHTML = `<p class="lyric-output">${generatedText}</p>`;

    } catch (error) {
        console.error("Gemini API Error:", error);
        resultBox.innerHTML = '<p class="error">Error generating scene. Please check console for details.</p>';
    }
}

// --- GAME 4: LIGHTNING LYRICS ---

function lightningLyrics() {
    const resultBox = document.getElementById('lightning-result');
    
    // Top 10 strongest/most common single lines from the catalog
    const BEST_LINES = [
        "I'm the anchor, her helping hand. She's my future, I'm her forever man.",
        "That's a big hard NO, not playing your game!",
        "When the world walked away, You stood by my side.",
        "Honey, I'm a CEO, not a babysitting tree.",
        "You're the author of a lie, a master of deceit.",
        "Boom, boom, boom, da boom, boom, boom, Yodel-ay-hee-hoo!",
        "Every time you open your mouth, boom, another lie.",
        "I owe you nothing, my worthless debt is paid.",
        "What about the children, so helpless and small? The burden they will carry.",
        "My love is on a sick one too... I run back. Right on cue.",
        "I'm glad I'm finally free. There's nothing you could say.",
        "Your sweet presence brightens every day.",
        "No longer paralyzed. This beautiful woman that I see, is finally free."
    ];

    const randomIndex = Math.floor(Math.random() * BEST_LINES.length);
    const line = BEST_LINES[randomIndex];

    resultBox.innerHTML = `
        <p class="lyric-output">"${line}"</p>
        <p class="source-text">A powerful line from the catalog.</p>
    `;
}


// --- INITIALIZATION / UTILITY ---

// Function required for the mobile hamburger menu in green-room.html
function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    const hamburger = document.querySelector('.hamburger');

    if (navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        hamburger.classList.remove('open');
    } else {
        navMenu.classList.add('active');
        hamburger.classList.add('open');
    }
}
