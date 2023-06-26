@extends('layouts.tlay')

@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit calculator</title>
    <link rel="stylesheet" href="./styles/depcalc/style.css">
    <link rel="stylesheet" href="./styles/dep/calctablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/depcalc/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">


    <div class="loans-calc">
        <h1>Deposit calculator</h1>


        <div class="card-calculator" id="cardCalculator">
            <div class="calculation-card">
                <!-- 1 -->
                <div class="deposit-menu">
                    <p>Вид депозита</p>
                    <!-- Form for selecting deposit -->
                    <form action="">
                        <select name="" id="">
                            <option value="">Лёгкий "депозит"</option>
                        </select>
                    </form>
                </div>
                <!-- 2 -->
                <div class="deposit-menu">
                    <p>Сurrency</p>
                    <!-- Form for selecting deposit -->
                    <form action="">
                        <select name="" id="">
                            <option value="">TJS</option>
                        </select>
                    </form>
                </div>

                <!-- 3 -->
                <div class="deposit-amount">
                    <p>Сумма депозита</p>
                    <div class="range-slider">
                        <p class="slider-number" id="sliderNumber">0</p>
                        <input type="range" min="1" max="1000000" value="0" class="slider" id="myRange">
                    </div>
                    <div class="range-numbers">
                        <p>1000</p>
                        <p>10 000 000</p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="deposit-term">
                    <p>Срок депозита</p>
                    <div class="deposit-term-buttons">
                        <button>3 месяца</button>
                        <button>6 месяцев</button>
                        <button>9 месяцев</button>
                        <button>1 год</button>
                        <button>2,5 года</button>
                        <button>3 года</button>
                        <button>3,5 года</button>
                        <button>4 года</button>
                        <button>4,5 года</button>
                    </div>
                </div>
            </div>




            <div class="result-card">
                <!-- 1 -->
                <div class="inter-rate">
                    <p>Interest rate</p>
                    <h2>24,5 %</h2>
                </div>
                <!-- 2 -->
                <div class="inter-rate-result">
                    <div>
                        <p>Monthly payment</p>
                        <span>1760 смн</span>

                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="online-loan-app">
        <h1>Online loan applications</h1>
        <form action="">
            <!-- начало -->
            <div class="main-card">
                <div class="main-card1">
                    <label for="">
                        Some
                        <input type="text">
                    </label>
                    <label for="">
                        Name
                        <input type="text">
                    </label>
                    <label for="">
                        Middle name
                        <input type="text">
                    </label>
                </div>
                <div class="main-card2">
                    <label for="">
                        Some
                        <input type="text">
                    </label>
                    <label for="">
                        Phone number
                        <input type="text">
                    </label>
                    <label for="">
                        <select name="" id="" class="titile-select">
                            <option value="">Additional phone number</option>
                        </select>
                        <input type="text">
                    </label>
                </div>


                <div class="last">
                    <div class="check-last">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> I agree with the terms of personal data processing.</label>
                    </div>
                    <button>leave a request</button>
                </div>
            </div>
        </form>
    </div>

    <!-- конец -->
</div>



</div>

<!-- <div class="mobile-menu">

    <div>
        <img src="./images/icons/hand.png" alt="hand.png">
        <p>Loans</p>
    </div>

    <div>
        <img src="./images/icons/wallet.png" alt="wallet.png">
        <p>Deposits</p>
    </div>

    <div>
        <img src="./images/icons/menu.png" alt="menu.png">
        <p>Menu</p>
    </div>

    <div>
        <img src="./images/icons/cards.png" alt="cards.png">
        <p>Cards</p>
    </div>

    <div>
        <img src="./images/icons/search.png" alt="search.png">
        <p>Vacancy</p>
    </div>
</div> -->

<script src="./scripts/app.js">
    "use strict";

    // Получаем ссылки на элементы
    const exchangeRates = document.getElementById('exchangeRates');
    const creditCalculator = document.getElementById('creditCalculator');
    const depositCalculator = document.getElementById('depositCalculator');

    const pinkArrow = document.querySelector('.pink-arrow');
    const pinkArrow2 = document.querySelector('.pink-arrow2');
    const pinkArrow3 = document.querySelector('.pink-arrow3');

    const cardCalculator = document.getElementById('cardCalculator');
    const currencyConverter = document.getElementById('currencyConverter');

    const ratesCard = document.querySelector('.rates-card');
    const resulCard = document.querySelector('.resul-card');

    const depositTermButtons = document.querySelectorAll('.deposit-term-buttons > button');

    const slider = document.getElementById('myRange');
    const sliderNumber = document.getElementById('sliderNumber');

    const firstTable = document.querySelector('.first-table');
    const secondTable = document.querySelector('.second-table');

    // Обработчик события изменения для элемента выбора ratesCardSelection
    window.addEventListener('DOMContentLoaded', () => {
        const ratesCardSelection = document.getElementById('ratesCardSelection');

        ratesCardSelection.addEventListener('change', () => {
            if (ratesCardSelection.value === 'Курсы валют в НБТ') {
                firstTable.style.display = 'none';
                secondTable.style.display = 'flex';
            } else if (ratesCardSelection.value === 'Курсы валют в интернет - банкинге') {
                firstTable.style.display = 'flex';
                secondTable.style.display = 'none';
            }
        });
    });

    // Обработчик события клика для кнопок depositTermButtons
    depositTermButtons.forEach(button => {
        button.addEventListener('click', () => {
            depositTermButtons.forEach(btn => {
                if (btn !== button) {
                    btn.classList.remove('black-button');
                }
            });
            button.classList.add('black-button');
        });
    });

    // Обработчик события ввода для ползунка slider
    slider.addEventListener('input', () => {
        sliderNumber.textContent = slider.value;
    });

    // Обработчик события DOMContentLoaded
    document.addEventListener('DOMContentLoaded', () => {
        ratesCard.style.display = 'none';
        resulCard.style.display = 'none';
        secondTable.style.display = 'none';
    });

    // Обработчик события клика для exchangeRates
    exchangeRates.addEventListener('click', () => {
        exchangeRates.classList.add('clicked');
        creditCalculator.classList.remove('clicked');
        depositCalculator.classList.remove('clicked');

        pinkArrow.style.display = 'block';
        pinkArrow3.style.display = 'none';
        pinkArrow2.style.display = 'none';

        cardCalculator.style.display = 'none';
        currencyConverter.style.display = 'flex';
        ratesCard.style.display = 'flex';
        resulCard.style.display = 'flex';
    });

    // Обработчик события клика для creditCalculator
    creditCalculator.addEventListener('click', () => {
        exchangeRates.classList.remove('clicked');
        creditCalculator.classList.add('clicked');
        depositCalculator.classList.remove('clicked');

        pinkArrow.style.display = 'none';
        pinkArrow2.style.display = 'block';
        pinkArrow3.style.display = 'none';

        cardCalculator.style.display = 'flex';
        currencyConverter.style.display = 'none';
    });

    // Обработчик события клика для depositCalculator
    depositCalculator.addEventListener('click', () => {
        exchangeRates.classList.remove('clicked');
        creditCalculator.classList.remove('clicked');
        depositCalculator.classList.add('clicked');

        pinkArrow.style.display = 'none';
        pinkArrow2.style.display = 'none';
        pinkArrow3.style.display = 'block';

        cardCalculator.style.display = 'flex';
        currencyConverter.style.display = 'none';
    });

</script>
</body>
</html>

@endsection
