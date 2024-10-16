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
