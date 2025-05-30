function toggleTheme() {
  const htmlEl = document.documentElement;
  const currentTheme = htmlEl.getAttribute('data-theme');
  const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

  htmlEl.setAttribute('data-theme', newTheme);
  localStorage.setItem('theme', newTheme);
}

// Apply saved theme and setup event listeners on page load
document.addEventListener('DOMContentLoaded', () => {
  const savedTheme = localStorage.getItem('theme') || 'light';
  document.documentElement.setAttribute('data-theme', savedTheme);

  const toggleBtnSm = document.getElementById('toggle-theme-btn-sm');
  const toggleBtnLg = document.getElementById('toggle-theme-btn-lg');

  if (toggleBtnSm) toggleBtnSm.addEventListener('click', toggleTheme);
  if (toggleBtnLg) toggleBtnLg.addEventListener('click', toggleTheme);
});