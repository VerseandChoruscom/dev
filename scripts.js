function toggleMenu() {
  const menu = document.getElementById('nav-menu');
  menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
}

function applyFilters() {
  const genre = document.getElementById('genreFilter').value;
  const mood = document.getElementById('moodFilter').value;
  const theme = document.getElementById('themeFilter').value;
  const cards = document.querySelectorAll('.song-card');

  cards.forEach(card => {
    const matchGenre = !genre || card.dataset.genre === genre;
    const matchMood = !mood || card.dataset.mood === mood;
    const matchTheme = !theme || card.dataset.theme === theme;
    card.style.display = (matchGenre && matchMood && matchTheme) ? 'block' : 'none';
  });
}

function filterBySetlist(setlist) {
  const cards = document.querySelectorAll('.song-card');
  cards.forEach(card => {
    card.style.display = card.dataset.setlist === setlist ? 'block' : 'none';
  });

  // Reset filters
  document.getElementById('genreFilter').value = '';
  document.getElementById('moodFilter').value = '';
  document.getElementById('themeFilter').value = '';
}
