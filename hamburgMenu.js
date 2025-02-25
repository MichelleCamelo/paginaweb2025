document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector('.hamburger-menu');
  const sidebar = document.querySelector('.sidebar-menu');
  const closeBtn = document.querySelector('.close-btn');
  const overlay = document.querySelector('.overlay');

  hamburger.addEventListener('click', () => {
      sidebar.classList.add('active');
      overlay.classList.add('active');
  });

  function closeMenu() {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
  }

  closeBtn.addEventListener('click', closeMenu);
  overlay.addEventListener('click', closeMenu);
});