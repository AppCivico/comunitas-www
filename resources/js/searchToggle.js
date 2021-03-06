export default function initSearchToggle() {
  const buttons = document.querySelectorAll('.js-search-toggle');
  const search = document.querySelector('#js-search');

  buttons.forEach(item => item.addEventListener('click', () => {
    search.classList.toggle('search--active');
    if (search.classList.contains('search--active')) {
      search.querySelector('.js-search-input').focus();
      window.scrollTo(0, 0)
    }
  }));
}
