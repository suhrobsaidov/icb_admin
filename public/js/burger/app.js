'use strict'
const bMobile = document.getElementById('bMobile')
const mobileList = document.querySelector('.mobile-list')
const mobileMenu = document.getElementById('mobileMenu')
bMobile.addEventListener('click',()=>{
    mobileMenu.style.display = 'none'
    // mobileMenu.style.transition = '3' + 's'
    mobileList.setAttribute("id", "mobileList")
    mobileList.style.display = 'flex'
})

const mobilExit = document.getElementById('mobilExit')

mobilExit.addEventListener('click',()=>{
    mobileList.style.display = 'none'
    mobileMenu.style.display = 'flex'
})


const dropdownLabels = document.querySelectorAll('.dropdown-label');
const dropdownList = document.querySelectorAll('.dropdown-list')
dropdownLabels.forEach((label) => {
  const plusButton = label.querySelector('img');
  const dropdownList = label.nextElementSibling;

  // Check if the button should be hidden by default
  

  label.addEventListener('click', () => {
    dropdownList.classList.toggle('display');
    label.classList.toggle('rotate-plus');
    label.style.transition = '.5s';
  });
});

dropdownList.forEach((list)=>{
    list.classList.add('display')
})