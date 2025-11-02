// songdata.js

const songCatalogue = [
    { 
        title: "Author of a Lie", 
        theme: "Drama", 
        category: "Relational/Introspection", 
        value: "High", 
        mood: "Complex, Revelatory", 
        keywords: ["Grief", "Truth", "Ballad"], 
        pro: "BMI", 
        snippet: "The whole thing was a novel, and you were the author of a lie." 
    },
    { 
        title: "Big Hard No", 
        theme: "Empowered", 
        category: "Pop/Anthem", 
        value: "Very High", 
        mood: "Confident, Decisive", 
        keywords: ["Boundary", "Female Anthem", "Uptempo"], 
        pro: "BMI", 
        snippet: "You can stand there all you want, but the answer is a big hard no." 
    },
    { 
        title: "Boom Boom Beat", 
        theme: "Romance", 
        category: "Dance/Pop", 
        value: "Very High", 
        mood: "Excitement, Energy", 
        keywords: ["Party", "Tech", "Uptempo"], 
        pro: "BMI", 
        snippet: "I hear the boom boom beat of my heart when you come close to me." 
    },
    { 
        title: "Broken Record", 
        theme: "Drama", 
        category: "Relational/Introspection", 
        value: "Steady", 
        mood: "Repetitive, Frustration", 
        keywords: ["Cycle", "Acoustic", "Familiar"], 
        pro: "BMI", 
        snippet: "It's the same fight every night, feels like a broken record playing out loud." 
    },
    { 
        title: "CEO, not babysitting tree", 
        theme: "Empowered", 
        category: "Pop/Country Crossover", 
        value: "Critical", 
        mood: "Boss, Humorous", 
        keywords: ["Career", "Independence", "Attitude"], 
        pro: "BMI", 
        snippet: "I'm the CEO of my own life, not babysitting a grown-up tree." 
    },
    { 
        title: "Children of War", 
        theme: "Cinematic", 
        category: "Social/Dramatic", 
        value: "Critical", 
        mood: "Somber, Powerful", 
        keywords: ["Trailer", "Film", "Aspiration", "Global"], 
        pro: "BMI", 
        snippet: "We grow up fast when we are the children of war." 
    },
    { 
        title: "Concrete Under the Feet", 
        theme: "Introspection", 
        category: "Grounding/Drama", 
        value: "High", 
        mood: "Realization, Stability", 
        keywords: ["City", "Foundation", "Acoustic"], 
        pro: "BMI", 
        snippet: "There's nothing left but the smooth, gray concrete under the feet." 
    },
    { 
        title: "Don't Be Jelly", 
        theme: "Empowered", 
        category: "Light Pop/Fun", 
        value: "Steady", 
        mood: "Playful, Confident", 
        keywords: ["Social Media", "Friendship", "Uptempo"], 
        pro: "BMI", 
        snippet: "Look at my life and don't be jelly." 
    },
    { 
        title: "Ephemeral Moment", 
        theme: "Romance", 
        category: "Cinematic/Ballad", 
        value: "Very High", 
        mood: "Fleeting, Beautiful", 
        keywords: ["Love", "Memory", "Movie Scene"], 
        pro: "BMI", 
        snippet: "It was just one perfect, ephemeral moment, and then you were gone." 
    },
    { 
        title: "Etched in every Space", 
        theme: "Introspection", 
        category: "Loss/Ballad", 
        value: "High", 
        mood: "Grief, Deep Love", 
        keywords: ["Memory", "Relational", "Drama"], 
        pro: "BMI", 
        snippet: "Your name and your face are etched in every space of this empty house." 
    },
    { 
        title: "First Step", 
        theme: "Aspiration", 
        category: "Motivational/Growth", 
        value: "Critical", 
        mood: "Hopeful, Determined", 
        keywords: ["Trailer", "Sports", "Start"], 
        pro: "BMI", 
        snippet: "You don't need the whole map, just enough courage for the first step." 
    },
    { 
        title: "Fury (I'm the monster)", 
        theme: "Cinematic", 
        category: "Tension/Rock", 
        value: "Critical", 
        mood: "Aggressive, Dark", 
        keywords: ["Action", "Trailer", "Anger", "Fighter"], 
        pro: "BMI", 
        snippet: "Don't poke the beast inside me, because I am the monster of my own fury." 
    },
    { 
        title: "GenX 80s Anthem", 
        theme: "Nostalgia", 
        category: "Uptempo/Pop", 
        value: "Very High", 
        mood: "Retro, Energetic", 
        keywords: ["Flashback", "Commercial", "Feel Good"], 
        pro: "BMI", 
        snippet: "We got the hair and the heartbreak, yeah this is the GenX 80s Anthem." 
    },
    { 
        title: "Heartbreak and Trouble (hubba bubba song)", 
        theme: "Drama", 
        category: "Pop-Country/Light", 
        value: "Steady", 
        mood: "Sarcastic, Fun", 
        keywords: ["Chewing Gum", "Ex", "Story"], 
        pro: "BMI", 
        snippet: "You taste like heartbreak and trouble, but I can't stop chewing on you." 
    },
    { 
        title: "Hit the Road", 
        theme: "Adventure", 
        category: "Travel/Uptempo", 
        value: "Critical", 
        mood: "Freedom, Exploration", 
        keywords: ["Automotive", "Road Trip", "Liberation"], 
        pro: "BMI", 
        snippet: "Tank is full and the sun is up, time to hit the road." 
    },
    { 
        title: "How's It Feel, Bro?", 
        theme: "Empowered", 
        category: "Relational/Pop", 
        value: "High", 
        mood: "Vindication, Teasing", 
        keywords: ["Revenge", "Sarcasm", "Breakup"], 
        pro: "BMI", 
        snippet: "I moved on first, so tell me, how's it feel, bro?" 
    },
    { 
        title: "I know your damn pin code", 
        theme: "Cinematic", 
        category: "Thriller/Pop", 
        value: "Very High", 
        mood: "Suspense, Psychological", 
        keywords: ["Tech", "Secret", "Obsession"], 
        pro: "BMI", 
        snippet: "I don't need your key, baby, I know your damn pin code." 
    },
    { 
        title: "In My Dreams (when I wake)", 
        theme: "Romance", 
        category: "Ballad/Loss", 
        value: "High", 
        mood: "Yearning, Sad", 
        keywords: ["Hope", "Intimate", "Dream"], 
        pro: "BMI", 
        snippet: "I hold you close in my dreams, but it hurts when I wake." 
    },
    { 
        title: "It's Just Too Much", 
        theme: "Drama", 
        category: "Tension/Relational", 
        value: "Steady", 
        mood: "Overwhelmed, Climax", 
        keywords: ["Breakdown", "Frustration", "Emotional"], 
        pro: "BMI", 
        snippet: "The silence is ringing, the phone is dead, it's just too much." 
    },
    { 
        title: "Just a little lonely", 
        theme: "Introspection", 
        category: "Ballad/Acoustic", 
        value: "Steady", 
        mood: "Quiet, Melancholy", 
        keywords: ["Isolation", "Simple", "Reflective"], 
        pro: "BMI", 
        snippet: "It's not a crisis, it's just a little lonely tonight." 
    },
    { 
        title: "Little Things", 
        theme: "Romance", 
        category: "Love/Relational", 
        value: "High", 
        mood: "Affectionate, Sweet", 
        keywords: ["Simple Joy", "Commitment", "Lifestyle"], 
        pro: "BMI", 
        snippet: "It's not the grand gestures, it's the little things you do." 
    },
    { 
        title: "Murderers Heart", 
        theme: "Cinematic", 
        category: "Dark/Thriller", 
        value: "Critical", 
        mood: "Cold, Deceptive", 
        keywords: ["Crime", "Suspense", "Noir"], 
        pro: "BMI", 
        snippet: "Behind the smile beats the cold rhythm of a murderer's heart." 
    },
    { 
        title: "My Girl Karma", 
        theme: "Empowered", 
        category: "Vengeance/Pop", 
        value: "Very High", 
        mood: "Satisfied, Justified", 
        keywords: ["Justice", "Female Power", "Uptempo"], 
        pro: "BMI", 
        snippet: "You crossed the line, now meet my girl Karma." 
    },
    { 
        title: "My Words Matter", 
        theme: "Empowered", 
        category: "Anthem/Motivational", 
        value: "Critical", 
        mood: "Inspirational, Loud", 
        keywords: ["Politics", "Social", "Speaking Out"], 
        pro: "BMI", 
        snippet: "You can try to shut me up, but my words matter." 
    },
    { 
        title: "Not that Girl Anymore", 
        theme: "Empowered", 
        category: "Growth/Pop", 
        value: "High", 
        mood: "Transformed, Independent", 
        keywords: ["Transformation", "Coming of Age", "Confident"], 
        pro: "BMI", 
        snippet: "Look close, baby, 'cause I'm not that girl anymore." 
    },
    { 
        title: "One Small Wrong", 
        theme: "Drama", 
        category: "Relational/Consequence", 
        value: "Steady", 
        mood: "Regret, Tension", 
        keywords: ["Mistake", "Falling Apart", "Cinematic"], 
        pro: "BMI", 
        snippet: "It only took one small wrong turn to lose everything." 
    },
    { 
        title: "Real Dream Team (Tick Tok)", 
        theme: "Aspiration", 
        category: "Team/Motivational", 
        value: "Critical", 
        mood: "Unity, Energetic", 
        keywords: ["Sports", "Corporate", "Collaboration"], 
        pro: "BMI", 
        snippet: "No time to waste, 'cause we're the real dream team." 
    },
    { 
        title: "Shot by Cupids Dart", 
        theme: "Romance", 
        category: "Flirtatious/Pop", 
        value: "High", 
        mood: "Infatuation, Light", 
        keywords: ["Dating", "New Love", "Happy"], 
        pro: "BMI", 
        snippet: "Didn't see it coming, I was shot by Cupid's dart." 
    },
    { 
        title: "Showdown at My Door", 
        theme: "Cinematic", 
        category: "Tension/Drama", 
        value: "Critical", 
        mood: "Confrontation, Western", 
        keywords: ["Trailer", "Stand Off", "Climax"], 
        pro: "BMI", 
        snippet: "I poured a drink and waited for the showdown at my door." 
    },
    { 
        title: "Sick One (s1c)", 
        theme: "Cinematic", 
        category: "Dark/Thriller", 
        value: "High", 
        mood: "Unsettling, Suspense", 
        keywords: ["Psychological", "Noir", "Obsession"], 
        pro: "BMI", 
        snippet: "The doctors said you're fine, but I know you're the sick one." 
    },
    { 
        title: "Solid Shifting Ground", 
        theme: "Drama", 
        category: "Instability/Loss", 
        value: "Steady", 
        mood: "Uncertainty, Loss of Control", 
        keywords: ["Earthquake", "Relational", "Confusion"], 
        pro: "BMI", 
        snippet: "I thought we were standing on solid ground, but it's shifting now." 
    },
    { 
        title: "Stood by my Side", 
        theme: "Romance", 
        category: "Loyalty/Ballad", 
        value: "High", 
        mood: "Grateful, Devotion", 
        keywords: ["Friendship", "Commitment", "Slow"], 
        pro: "BMI", 
        snippet: "When the whole world walked out, you stood by my side." 
    },
    { 
        title: "The Aftermath", 
        theme: "Drama", 
        category: "Loss/Introspection", 
        value: "High", 
        mood: "Quiet Despair, Reflection", 
        keywords: ["Divorce", "Ending", "Cinematic"], 
        pro: "BMI", 
        snippet: "The shouting stopped hours ago, but the silence is the aftermath." 
    },
    { 
        title: "The Back of Me", 
        theme: "Empowered", 
        category: "Leaving/Pop", 
        value: "Very High", 
        mood: "Defiant, Moving On", 
        keywords: ["Breakup", "Road Trip", "Independence"], 
        pro: "BMI", 
        snippet: "You're getting nothing but the tail lights and the back of me." 
    },
    { 
        title: "The Show Is Through", 
        theme: "Drama", 
        category: "Finality/Relational", 
        value: "Steady", 
        mood: "Tired, Conclusion", 
        keywords: ["End Game", "Quiet", "Acoustic"], 
        pro: "BMI", 
        snippet: "The curtain's down, the lights are up, the show is through." 
    },
    { 
        title: "Thought You Should Know", 
        theme: "Drama", 
        category: "Relational/Confrontation", 
        value: "Steady", 
        mood: "Sincere, Painful", 
        keywords: ["Honesty", "Confession", "Ballad"], 
        pro: "BMI", 
        snippet: "This is hard to say out loud, but I thought you should know." 
    },
    { 
        title: "Top Shelf Queen", 
        theme: "Empowered", 
        category: "Luxury/Uptempo", 
        value: "Very High", 
        mood: "Glamorous, Confident", 
        keywords: ["Fashion", "Branding", "Success"], 
        pro: "BMI", 
        snippet: "I don't shop at the mall, I'm a top shelf queen." 
    },
    { 
        title: "Welcome to Jukes", 
        theme: "Adventure", 
        category: "Country-Rock/Fun", 
        value: "High", 
        mood: "Party, Rowdy", 
        keywords: ["Bar", "Small Town", "Roadhouse"], 
        pro: "BMI", 
        snippet: "Leave your worries at the door, and welcome to Jukes." 
    },
    { 
        title: "Wildflower", 
        theme: "Introspection", 
        category: "Growth/Folk", 
        value: "High", 
        mood: "Natural, Free", 
        keywords: ["Nature", "Independence", "Inspirational"], 
        pro: "BMI", 
        snippet: "You can't plant me in a garden, I'm a wildfire, free to grow." 
    },
    { 
        title: "Year in the Rearview", 
        theme: "Introspection", 
        category: "Reflection/Moving On", 
        value: "Very High", 
        mood: "Nostalgia, Hopeful", 
        keywords: ["End of Year", "Automotive", "New Beginning"], 
        pro: "BMI", 
        snippet: "The mistakes are small now, just a year in the rearview mirror." 
    },
    { 
        title: "Your Forever Man", 
        theme: "Romance", 
        category: "Ballad", 
        value: "High", 
        mood: "Devotion, Cinematic", 
        keywords: ["Wedding", "Commitment", "Sincere"], 
        pro: "BMI", 
        snippet: "I'm not perfect, but I promise I will be your forever man." 
    }
];
