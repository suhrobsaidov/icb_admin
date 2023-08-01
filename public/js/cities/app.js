'use strict'

const vacancyesCard = document.querySelectorAll('.vacancyes-card')
const vacancyesCardContentH1 = document.querySelectorAll('.vacancyes-card-content > h1')
const vacancyesCardContentP = document.querySelectorAll('.vacancyes-card-content > p')
const vacancyesCardP = document.querySelectorAll('.vacancyes-card > p')
const vacancyesCardLocSpan = document.querySelectorAll('.vacancyes-card-loc > span')
const vacancyesCardLocP = document.querySelectorAll('.vacancyes-card-loc > p')
const vacancyesCardSpan = document.querySelectorAll('.vacancyes-card > span')


const cities = document.querySelectorAll('.cities > ul > li > a')

cities[0].addEventListener('click', () => {
  changeContent(0); // Передаем индекс 0 в качестве аргумента
});

function changeContent(index) {
  vacancyesCardContentH1[index].textContent =  'junior';
  vacancyesCardContentP[index].textContent = 'credit' ;
}
