export default function initCategorySelector() {
  const select = document.querySelector('#js-category-select');

  if(select) {
    select.addEventListener('change', (event) => {
      const url = select.options[select.selectedIndex].value;
      window.location.href = url;
    });
  }
}
