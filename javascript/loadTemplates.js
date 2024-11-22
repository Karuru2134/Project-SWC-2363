// loadTemplates.js

// Function to load an HTML template into a specific container
async function loadTemplate(templatePath, containerId) {
    try {
        const response = await fetch(templatePath);
        if (!response.ok) throw new Error(`Failed to load ${templatePath}`);
        const templateContent = await response.text();
        document.getElementById(containerId).innerHTML = templateContent;
    } catch (error) {
        console.error(error);
    }
}

// Load templates when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    loadTemplate('../templates/header.html', 'header-container');
    loadTemplate('../templates/product-details.html', 'product-details-container');
    loadTemplate('../templates/product-specifications.html', 'product-specifications-container');
    loadTemplate('../templates/comparison-section.html', 'comparison-section-container');
    loadTemplate('../templates/footer.html', 'footer-container');
});
