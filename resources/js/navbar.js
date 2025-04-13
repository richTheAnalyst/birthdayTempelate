
// Mobile menu toggle
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');

    // Toggle aria-expanded state
    const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
    mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
});

// Close menu when clicking outside
document.addEventListener('click', (event) => {
    if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
        mobileMenu.classList.remove('open');
        mobileMenuButton.setAttribute('aria-expanded', 'false');
    }
});

// Close menu on resize
window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
        mobileMenu.classList.remove('open');
        mobileMenuButton.setAttribute('aria-expanded', 'false');
    }
});