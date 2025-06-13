document.addEventListener('DOMContentLoaded', function() {

    // Select the header element
    const siteHeader = document.querySelector('.site-header');

    // Check if the header exists on the page
    if (!siteHeader) {
        return; // If no header, stop the script
    }

    // Listen for the scroll event on the window
    window.addEventListener('scroll', function() {
        // Check if the user has scrolled more than 50 pixels from the top
        if (window.scrollY > 50) {
            // If scrolled down, add the 'scrolled' class to the header
            siteHeader.classList.add('scrolled');
        } else {
            // If back at the top, remove the 'scrolled' class
            siteHeader.classList.remove('scrolled');
        }
    });

});