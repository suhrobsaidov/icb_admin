const sliders = document.querySelectorAll('.slider');
const sliderNumbers = document.querySelectorAll('.slider-number');

sliders.forEach((slider, index) => {
  slider.addEventListener('input', () => {
    sliderNumbers[index].textContent = slider.value;
  });
});