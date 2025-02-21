  document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const sidebarMenu = document.querySelector('.sidebar-menu');
    const overlay = document.querySelector('.overlay');
    const closeBtn = document.querySelector('.close-btn');
    
    // Open menu when hamburger is clicked
    hamburgerMenu.addEventListener('click', function() {
      sidebarMenu.classList.add('active');
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden'; // Prevent scrolling
    });
    
    // Close menu functions
    function closeMenu() {
      sidebarMenu.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = ''; // Enable scrolling
    }
    
    // Close menu when X is clicked
    closeBtn.addEventListener('click', closeMenu);
    
    // Close menu when clicking outside
    overlay.addEventListener('click', closeMenu);
  });