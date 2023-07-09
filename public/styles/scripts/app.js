const dropdownLabels = document.querySelectorAll('.dropdown-label');

dropdownLabels.forEach((label) => {
  const plusButton = label.querySelector('img');
  const dropdownList = label.nextElementSibling;

  plusButton.addEventListener('click', () => {
    dropdownList.classList.toggle('display');
    plusButton.classList.toggle('rotate-plus');
    plusButton.style.transition = '.5s';
  });
});
