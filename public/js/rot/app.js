const sliders = document.querySelectorAll('.slider');
const sliderNumbers = document.querySelectorAll('.slider-number');
const interRateResult = document.querySelector('.inter-rate-result > div > span')
const interRate = document.querySelector('.inter-rate > h2')

// кнобки depositTermButtons
const depositTermButtons = document.querySelectorAll('.deposit-term-buttons > button');


sliders.forEach((slider, index) => {
  slider.addEventListener('input', () => {
    sliderNumbers[index].textContent = slider.value;
  });
});



// Обработчик события клика для кнопок depositTermButtons
depositTermButtons.forEach(button => {
  button.addEventListener('click', () => {
    depositTermButtons.forEach(btn => {
      if (btn !== button) {
        btn.classList.remove('black-button')
      }
    })
    button.classList.add('black-button')
  })
})


const percent = document.querySelector('.inter-rate > h2')
const newPrecent = percent.textContent.substring(0,2).trim()
const resultSpan = document.querySelector('.inter-rate-result > div > span')

sliders.forEach((slider) => {
  slider.addEventListener('input', () => {
    let sliderN = Number(slider.value)
    let result = sliderN * newPrecent
    resultSpan.textContent = result + ' смн'
  });
});