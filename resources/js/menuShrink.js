export default function initMenuShink() {
  const header = document.querySelector('#js-site-header');

  window.addEventListener("scroll", function (event) {
    const scroll = window.scrollY;

    if (scroll > 200 && window.matchMedia('(min-width: 64em)').matches) {
      header.classList.add('site-header--small');
    } else {
      header.classList.remove('site-header--small');
    }
  });
}
