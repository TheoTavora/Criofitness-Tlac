document.getElementById('menu-icon').addEventListener('click', function() {
  const menu = document.querySelector('.menu');
  const navbar = document.querySelector('.navbar');
  
  const isOpen = menu.classList.toggle('open');
  navbar.style.marginTop = isOpen ? '65px' : '0';
});
