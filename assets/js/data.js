// This file contains the complete catalog of Kellie Larson's lyrics and metadata.

const songCatalog = [
    {
        id: "the-aftermath",
        title: "The Aftermath",
        genre: "Emotional Pop",
        mood: "Heartbreak",
        use: "Movie Climax",
        cover: "the-aftermath-cover-art.jpg",
        songbayLink: "YOUR_SONGBAY_LINK_HERE"
    },
    {
        id: "beautiful-beat",
        title: "Beautiful Beat",
        genre: "Dance Pop",
        mood: "Uplifting",
        use: "Commercial/Trailer",
        cover: "beautiful-beat-cover-art.jpg",
        songbayLink: "YOUR_SONGBAY_LINK_HERE"
    },
    {
        id: "broken-record",
        title: "Broken Record",
        genre: "Pop / Breakup",
        mood: "Frustrated",
        use: "TV Drama Scene",
        cover: "broken-record-cover-art.jpg",
        songbayLink: "YOUR_SONGBAY_LINK_HERE"
    },
    {
        id: "concrete-under-our-feet",
        title: "Concrete Under Our Feet",
        genre: "Cinematic Rock",
        mood: "Rebellious",
        use: "Action Sequence",
        cover: "concrete-under-our-feet-cover-art.jpg",
        songbayLink: "YOUR_SONGBAY_LINK_HERE"
    },
    {
        id: "dont-be-jelly",
        title: "Don't Be Jelly",
        genre: "Sassy Pop",
        mood: "Confident",
        use: "Social Media/Intro",
        cover: "don't-be-jelly-cover-art.jpg",
        songbayLink: "YOUR_SONGBAY_LINK_HERE"
    },
    {
        id: "first-step",
        title: "First Step",
        genre: "R&B / Soul",
        mood: "Hopeful",
        use: "Montage",
        cover: "first-step-cover-art.jpg",
        songbayLink: "YOUR_SONGBAY_LINK_HERE"
    },
    {
        id: "hard-no",
        title: "Hard No",
        genre: "Sassy Pop",
        mood: "Defiant",
        use: "Commercial/Ad",
        cover: "hard-no-cover-art.jpg",
        songbayLink: "YOUR_SONGBAY_LINK_HERE"
    },
    // Add more songs here as needed
];

// Helper function to extract unique filter options
const getUniqueOptions = (key) => {
    return [...new Set(songCatalog.map(song => song[key]))];
};

const filterOptions = {
    genre: getUniqueOptions('genre'),
    mood: getUniqueOptions('mood'),
    use: getUniqueOptions('use')
};
