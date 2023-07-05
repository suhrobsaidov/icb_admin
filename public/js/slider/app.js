const bankProductsArrow = document.querySelectorAll('.bank-products-arrow');
const sliderLine = document.querySelectorAll('#sliderLine');
const slideContainer = document.querySelectorAll('#slideContainer')
let offset = 0;

bankProductsArrow.forEach((arrow, index) => {
  const slide = sliderLine[index];

  arrow.addEventListener('click', () => {
    offset += 100;
    slide.style.left = -offset + 'px';
  });
});
