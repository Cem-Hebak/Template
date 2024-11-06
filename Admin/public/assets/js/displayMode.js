// Function to apply the selected theme
function applyDisplayMode(mode) {
    const lightMode = document.getElementById('light-mode');
    const darkMode = document.getElementById('dark-mode');
    const lightApp = document.getElementById('light-app');
    const darkApp = document.getElementById('dark-app');

    if (mode === 'dark') {
        lightMode.disabled = true;
        lightApp.disabled = true;
        darkMode.disabled = false;
        darkApp.disabled = false;
    } else {
        lightMode.disabled = false;
        lightApp.disabled = false;
        darkMode.disabled = true;
        darkApp.disabled = true;
    }

    // Save user preference
    localStorage.setItem('theme', mode);
}

// Function to save the mode from the selector
function saveDisplayMode() {
    const selectedMode = document.getElementById('displayModeSelector').value;
    applyDisplayMode(selectedMode);
}

// Load the saved mode on page load
document.addEventListener('DOMContentLoaded', () => {
    const savedMode = localStorage.getItem('theme') || 'light';
    applyDisplayMode(savedMode);

    // Set the selector to reflect the saved mode
    document.getElementById('displayModeSelector').value = savedMode;
});
