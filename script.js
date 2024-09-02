document.getElementById('menu-icon').addEventListener('click', function() {
  const menu = document.querySelector('.menu');
  const boxicon = document.getElementById('menu-icon');
  
  // Alterna a classe 'open' no menu
  menu.classList.toggle('open');
  
  // Verifica se o menu está aberto
  const isOpen = menu.classList.contains('open');
  
  // Ajusta a margem inferior do ícone com base no estado do menu
  boxicon.style.marginBottom = isOpen ? '50%' : '0'; // Use '50px' ou ajuste conforme necessário
});
