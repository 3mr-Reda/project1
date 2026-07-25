// Custom JavaScript for TechVision Static Web App
document.addEventListener('DOMContentLoaded', () => {
    // Navbar shadow on scroll
    const navbar = document.querySelector('.custom-navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.08)';
                navbar.style.background = 'rgba(255, 255, 255, 0.95) !important';
            } else {
                navbar.style.boxShadow = '0 4px 25px rgba(0, 0, 0, 0.04)';
                navbar.style.background = 'rgba(255, 255, 255, 0.85) !important';
            }
        });
    }

    // Form submission animation for contact & login forms
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    // Add tooltip initialization if bootstrap is loaded
    if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
});
