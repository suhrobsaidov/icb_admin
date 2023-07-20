let slideIndex = 0;

function showSlides() {
  let slides = document.querySelectorAll("#headerslides");
  let mySlides = document.querySelectorAll(".card"); 
  
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  	mySlides[i].style.background = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "flex";
  mySlides[slideIndex - 1].style.background = "white";
  
  setTimeout(showSlides, 3500);
}

document.addEventListener("DOMContentLoaded", function() {
  showSlides();
});







const firstTable = document.querySelector('.first-table');
const secondTable = document.querySelector('.second-table');
const ratesCardSelection = document.getElementById('ratesCardSelection');

// Обработчик события DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
  secondTable.style.display = 'none';
});


// Обработчик события изменения для элемента выбора ratesCardSelection
window.addEventListener('DOMContentLoaded', () => {

  ratesCardSelection.addEventListener('change', () => {
    if (ratesCardSelection.value === 'Exchange rate in NBT') {
      firstTable.style.display = 'none';
      secondTable.style.display = 'block';
    } else if (ratesCardSelection.value === 'Exchange rate in internet banking') {
      firstTable.style.display = 'block';
      secondTable.style.display = 'none';
    }
  });
});


