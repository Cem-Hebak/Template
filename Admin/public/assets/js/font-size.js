document.addEventListener('DOMContentLoaded', () => {
    // Apply saved font size when the page loads
    const savedFontSize = localStorage.getItem('fontSize') || 'medium';
    applyFontSize(savedFontSize);

    // Set the initial dropdown selection based on the saved font size
    const fontSizeSelector = document.getElementById('fontSizeSelector');
    if (fontSizeSelector) {
        fontSizeSelector.value = savedFontSize;
    }

    // Listen for font size change from the dropdown selector
    fontSizeSelector?.addEventListener('change', (event) => {
        const fontSize = event.target.value;
        applyFontSize(fontSize);
        localStorage.setItem('fontSize', fontSize); // Save preference
    });

    // Add event listener to the "Save changes" button inside the modal
    document.getElementById('saveFontSizeBtn')?.addEventListener('click', () => {
        const fontSize = fontSizeSelector.value;
        applyFontSize(fontSize); // Apply selected font size
        localStorage.setItem('fontSize', fontSize); // Save preference to localStorage
    });

    // Update dropdown value when the modal is shown
    const fontSizeModal = document.getElementById('exampleModalCenter3');
    fontSizeModal?.addEventListener('show.bs.modal', () => {
        const savedFontSize = localStorage.getItem('fontSize') || 'medium';
        fontSizeSelector.value = savedFontSize;
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
