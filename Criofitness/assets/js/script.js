// Menu para clicável (Criofitness)
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navigation-bar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open')
}


// Função para diminuir o header ao fazer scroll
window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    header.classList.toggle('scrolled', window.scrollY > 30);
});

fetch('planobasico.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('plano-container-basico').innerHTML = data;
    })
    .catch(error => console.error('Erro ao carregar o arquivo:', error));

fetch('planoclube.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('plano-container-clube').innerHTML = data;
    })
    .catch(error => console.error('Erro ao carregar o arquivo:', error));

fetch('planomelhoridade.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('plano-container-melhoridade').innerHTML = data;
    })
    .catch(error => console.error('Erro ao carregar o arquivo:', error));