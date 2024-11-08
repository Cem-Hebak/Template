document.addEventListener('DOMContentLoaded', () => {
    // Apply saved font size when the page loads
    const savedFontSize = localStorage.getItem('fontSize');
    if (savedFontSize) {
        applyFontSize(savedFontSize);
    }

    // Listen for font size change
    document.getElementById('fontSizeSelector')?.addEventListener('change', (event) => {
        const fontSize = event.target.value;
        applyFontSize(fontSize);
        localStorage.setItem('fontSize', fontSize); // Save preference
    });
});

// Function to apply the selected font size to the document
function applyFontSize(fontSize) {
    document.body.classList.remove('font-small', 'font-medium', 'font-large');
    switch (fontSize) {
        case 'small':
            document.body.classList.add('font-small');
            break;
        case 'medium':
            document.body.classList.add('font-medium');
            break;
        case 'large':
            document.body.classList.add('font-large');
            break;
    }
}
