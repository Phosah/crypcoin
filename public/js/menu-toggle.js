const menuToggle = document.getElementById('menu-toggle');
const menu = document.getElementById('menu');

function toggleMenu () {
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
}
menuToggle.addEventListener('click', toggleMenu);