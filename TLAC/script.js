// Menu clicavel (TLAC) 

document.getElementById('menu-icon').addEventListener('click', function () {
  const menu = document.querySelector('.menu');
  const boxicon = document.getElementById('menu-icon');
  
  menu.classList.toggle('open');
  const isOpen = menu.classList.contains('open');
  boxicon.style.marginBottom = isOpen ? '50%' : '0'; 
});

