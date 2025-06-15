function toggleTheme() {
    const body = document.body;
    const themeBtn = document.getElementById('theme-btn');
    if (body.getAttribute('data-theme') === 'dark') {
        body.setAttribute('data-theme', 'light');
        themeBtn.textContent = '🌙 Dark Mode';
        localStorage.setItem('theme', 'light');
    } else {
        body.setAttribute('data-theme', 'dark');
        themeBtn.textContent = '☀️ Light Mode';
        localStorage.setItem('theme', 'dark');
    }
}

// Apply saved theme on page load
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.body.setAttribute('data-theme', savedTheme);
    document.getElementById('theme-btn').textContent = savedTheme === 'dark' ? '☀️ Light Mode' : '🌙 Dark Mode';
});