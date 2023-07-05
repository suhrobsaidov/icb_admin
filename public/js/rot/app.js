const sliders = document.querySelectorAll('.slider');
const sliderNumbers = document.querySelectorAll('.slider-number');
const interRateResult = document.querySelector('.inter-rate-result > div > span')
const interRate = document.querySelector('.inter-rate > h2')




sliders.forEach((slider, index) => {
  slider.addEventListener('input', () => {
    sliderNumbers[index].textContent = slider.value;
  });
});
