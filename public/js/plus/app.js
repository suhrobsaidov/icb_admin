const dropdownLabels = document.querySelectorAll('.dropdown-label');

dropdownLabels.forEach((label) => {
  const plusButton = label.querySelector('img');
  const dropdownList = label.nextElementSibling;

  // Check if the button should be hidden by default
  if (plusButton.classList.contains('hidden')) {
    dropdownList.classList.add('display');
    plusButton.classList.add('rotate-plus');
  }

  plusButton.addEventListener('click', () => {
    dropdownList.classList.toggle('display');
    plusButton.classList.toggle('rotate-plus');
    plusButton.style.transition = '.5s';
  });
});
