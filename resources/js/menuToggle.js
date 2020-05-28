export default function initMenuToggle() {
  const buttons = document.querySelectorAll('.js-main-nav-toggle');
  const menu = document.querySelector('#js-menu');
  const overlay = document.querySelector('.js-overlay');

  buttons.forEach(item => item.addEventListener('click', () => {
    overlay.classList.toggle('main-nav__overlay--active');
    menu.classList.toggle('menu--active');
    document.querySelector('html').classList.toggle('no-scroll')
  }));
}
