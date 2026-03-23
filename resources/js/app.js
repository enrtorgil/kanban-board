import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('theme-toggle');
    const icon = document.getElementById('theme-icon');

    function updateIcon(theme) {
        if (!icon) return;
        icon.textContent = theme === 'dark' ? '☀' : '◐';
    }

    const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
    updateIcon(currentTheme);

    toggle?.addEventListener('click', function () {
        const html = document.documentElement;
        const current = html.getAttribute('data-theme') || 'light';
        const next = current === 'dark' ? 'light' : 'dark';

        html.setAttribute('data-theme', next);
        localStorage.setItem('theme', next);
        updateIcon(next);
    });
});
