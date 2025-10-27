function toggleMenu() {
  const menu = document.getElementById('nav-menu');
  menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
}

function playTrack(title) {
  const player = document.getElementById('audio-player');
  player.src = `/audio/${title}.mp3`;
  player.play();
}

function generateMadlib(event) {
  event.preventDefault();
  const emotion = document.getElementById('emotion').value;
  const object = document.getElementById('object').value;
  const place = document.getElementById('place').value;

  const result = `I just want to go hide in my ${place} and be left alone today.<br>
  Yes, it's true right now my words, my words don't matter to you.<br>
  You're pretty ${emotion}, just repeating yourself.<br>
  Like my feelings are cheap, like my words are just worn.<br>
  You're shouting things out about that ${object} again...`;

  document.getElementById('madlib-result').innerHTML = result;
}

function generateScene(event) {
  event.preventDefault();
  const mood = document.getElementById('mood').value;
  const location = document.getElementById('location').value;
  const prop = document.getElementById('prop').value;

  const scene = `I’m feeling ${mood} in this ${location}, staring at the ${prop} like it knows the truth.<br>
  The silence is louder than your voice ever was.<br>
  I could walk out, but I stay — because this is the scene where I rewrite the ending.`;

  document.getElementById('scene-result').innerHTML = scene;
}

function generateRandomLyric() {
  const lyrics = [
    "I just want to go hide in my room and be left alone today.",
    "You're pretty lit, just repeating yourself.",
    "If I scream what I know, it's wasted on the man who can't genuinely feel.",
    "Smiling dumbly at you, with more red on my teeth than on my lips.",
    "This fight has a forecast, this moment will pass.",
    "You're shouting things out that are certain to pass.",
    "I'm trading my strength for a sip of your fear."
  ];
  const randomLine = lyrics[Math.floor(Math.random() * lyrics.length)];
  document.getElementById('random-lyric-result').innerHTML = randomLine;
}
