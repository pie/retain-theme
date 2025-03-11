document.addEventListener('DOMContentLoaded', function() {

    console.log('Navigation JS loaded');
    
    const menuToggle = document.querySelector('.menu-toggle');
    const menuModal = document.querySelector('#menu-modal');
    const menuClose = document.querySelector('.menu-close');

    menuToggle.addEventListener('click', function() {
        menuModal.classList.toggle('active');
    });

    menuClose.addEventListener('click', function() {
        menuModal.classList.remove('active');
    });

    // Close the modal when clicking outside of it
    window.addEventListener('click', function(event) {
        if (event.target === menuModal) {
            menuModal.classList.remove('active');
        }
    });
});