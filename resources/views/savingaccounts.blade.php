@extends('layouts.remitance')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Savings Account</title>
	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/tablet/style-tablet.css">
	<link rel="stylesheet" href="./styles/mobile/style-mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="header">
		


		<div class="main">
			<div class="main-title">
				<h1>Savings Account</h1>
				<p>To increase turnover, support liquidity, fixed 
				assets for business development and increase 
				capacity.</p>
			</div>

			<img src="./images/desktop/main4.png" alt="" class="main-image">
		</div>

		<div class="cards-container">
			<div class="cards">
				<!-- 1 -->
				<div class="cards-1">
					<h2>security of your money</h2>
					<p>We are a member of the Tajik Individuals Deposits Insurance Fund (IDIF), listed under No. 0438</p>
				</div>
				<!-- 2 -->
				<div class="cards-2">
					<h2>Free opening deposit account</h2>
					<p>Deposit accounts can be opened at any ICB-T 
	Branches or Banking Service Centers. All deposit 
	accounts are opened free of charge.</p>
				</div>
				<!-- 3 -->
				<div class="cards-3">
					<h2>experienced specialists</h2>
					<p>Our customer service officers will be happy 
	to advise customers on the right product, 
	or combination of products to meet their 
	financial needs.</p>
				</div>
			</div>
		</div>


		<div class="dropdown">
			
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>Product terms</p>
					<img src="./images/icons/+.png" alt="+" >
				</div>
				<div class="dropdown-list" >
					<div class="dropdown-list-content">
						<h3>Purpose of the loan</h3>
						<p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
					</div>
				
					<div class="dropdown-list-content">
						<h3>Terms</h3>
						<ul>
							<li>Loan amount: up to USD 300,000 (equivalent in TJS)</li>
							<li>Loan term; Up to 48 months.</li>
						</ul>
					</div>
				
					<div class="dropdown-list-content">
						<h3>Сurrency</h3>
						<p>TJS, USD</p>
					</div>
				
					<div class="dropdown-list-content">
						<h3>Loan security</h3>
						<ul>
							<li>Up to USD 2,000 (and the equivalent in TJS) without collateral and surety;</li>
							<li>Up to US $ 3,000 (TJS equivalent) without collateral and guarantor for repeat and exemplary clients;</li>
							<li>Moving bond up to USD 5,000 (and TJS equivalent) and 1 guarantor;</li>
							<li>Real estate worth more than USD 5,000 (and the equivalent in somoni) and 1 guarantor.</li>
							
						</ul>
					</div>

					<div class="dropdown-list-content">
						<h3>Banking tariffs</h3>
						<p>For information about banking tariffs on this product, please see the table here</p>
					</div>
				

				</div>
			</div>
		</div>

		
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
				<!-- 3 -->
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
					<p>Процентная ставка</p>
					<h2>15 %</h2>
				</div>
				<!-- 2 -->
				<div class="inter-rate-result">
					<div>
						<p>Сумма в конце срока</p>
						<span>3 450 000 смн</span>

					</div>
					<div>
						<p>Доход по депозиту</p>
						<span>450 000 смн</span>

					</div>
				</div>
				<button>Оставить заявку</button>
			</div>
		</div>


		<div class="online-loan-app">
			    <h1>Online deposit applications</h1>
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


		<div class="dropdown">
				<h1>FAQ</h1>
				<div class="dropdown-menu">
					<div class="dropdown-label">
						<p>Where can I get information about credit products of CJSC “The First Microfinance Bank”?</p>
						<img src="./images/icons/+.png" alt="+" >
					</div>
					<div class="dropdown-list " >
						<div>
							<p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
						</div>
					</div>
				</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>Which credit products do you offer?</p>
					<img src="./images/icons/+.png" alt="+" class="hidden">
				</div>
				<div class="dropdown-list" >
					<div>
						<h3>Purpose of the loan</h3>
						<p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
					</div>
				</div>
			</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>What is the term of various products you offer?</p>
					<img src="./images/icons/+.png" alt="+" class="hidden">
				</div>
				<div class="dropdown-list" >
					<div>
						<h3>Purpose of the loan</h3>
						<p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
					</div>
				</div>
			</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p> How long does it take to obtain loan approval?</p>
					<img src="./images/icons/+.png" alt="+" class="hidden">
				</div>
				<div class="dropdown-list" >
					<div>
						<h3>Purpose of the loan</h3>
						<p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
					</div>
				</div>
			</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>Can we obtain loans in U.S. dollars?</p>
					<img src="./images/icons/+.png" alt="+" class="hidden">
				</div>
				<div class="dropdown-list" >
					<div>
						<h3>Purpose of the loan</h3>
						<p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
					</div>
				</div>
			</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>What is the maximum amount of loan the Bank can provide?</p>
					<img src="./images/icons/+.png" alt="+" class="hidden">
				</div>
				<div class="dropdown-list" >
					<div>
						<h3>Purpose of the loan</h3>
						<p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
					</div>
				</div>
			</div>
			
			
		</div>



		<div class="bank-services">
			<h1>Bank services</h1>
			<div class="bank-services-cards">
				<!-- 1 -->
				<div class="bank1">
					<img src="./images/icons/bank.png" alt="bank.png">
					<p>Online banking for legal entities and private entrepreneurs</p>
				</div>
				<!-- 2 -->
				<div class="bank2">
					<img src="./images/icons/card.png" alt="card.png">
					<p>Transfer from card to card</p>
				</div>
				<!-- 3 -->
				<div class="bank3"> 
					<img src="./images/icons/atm.png" alt="atm.png">
					<p>Find the nearest ATM</p>
				</div>
				<!-- 4 -->
				<div class="bank4">
					<img src="./images/icons/bank2.png" alt="bank2.png">
					<p>Find a branch nearby</p>
				</div>
				<!-- 5 -->
				<div class="bank5">
					<img src="./images/icons/share.png" alt="share.png">
					<p>Knowledge base</p>
				</div>
			</div>
			<img src="./images/icons/arrow.png" alt="arrow.png" class="bank-services-arrow">
		</div>

	</div>
<script>
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
    <style>
        *{
	padding:0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Montserrat';
}
body{
	/*background-image: url("../images/desktop/background.png");
	background-repeat: no-repeat;
	background-position: center;*/
}

li{
	list-style: none;
}
a{
	text-decoration: none;
}
/*Containers*/
.container{
    max-width:1144px ;
    margin: 0 auto;
    padding: 0 24px;
}

.footer-container{
	max-width:1144px ;
    margin: 0 auto;
    padding: 0 24px;
}
/*HEADER*/
.header{
	margin-top: 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	position: relative;
}
.header-icons{
	position: absolute;
	top: 0;
	right: 0;

}
.header-logo-and-menu{
	display: flex;
	align-items:center;
	gap: 15px;
}
.header-logo-and-menu > a > img{}

.header-menu{
	display: flex;
	flex-direction: column;
	gap :10px;
}
.header-menu-one > ul{
	display: flex;
	gap: 17px;
}
.header-menu-one > ul a{
	font-style: normal;
	font-weight: 400;
	font-size: 12px;
	line-height: 12px;
	text-transform: uppercase;
	color: #000000;

}

.header-menu-two > ul{
	display: flex;
	gap: 12px;
}

.header-menu-two > ul a{
	font-style: normal;
	font-weight: 400;
	font-size: 9px;
	line-height: 10px;
	color: #000000;

}

.header-menu-one > ul a:hover{
	color: #DB0011;
}

.header-menu-two > ul a:hover{
	color: #DB0011;
}


.header-input-and-button {
	display: flex;
	gap: 21px;
}
.header-input-and-button > input{
	width: 256px;
    height: 39px;
	border: none;
	background: rgba(255, 255, 255, 0.8);
	border: 1px solid rgba(0, 0, 0, 0.02);
	border-radius: 7px;
	padding: 5px 6px;
}
.header-input-and-button > button{
	border: none;
	width: 100px;
	height: 39px;
	background: #DB0011;
	border-radius: 8px;
	padding: 7px;
	font-weight: 600;
	font-size: 10px;
	line-height: 10px;
	color: #FFFFFF;

}
.header-input-and-button > button:hover{
	box-shadow:0 0 10px 1px #db0011;
	transition: .3s;
}

/*Main*/
.main{
	margin-top: 40px;
	display: flex;
	justify-content: space-around;
	align-items: center;
}

.main-title{
	width: 473px;
    height: 197px;
}
.main-title > h1{
	font-weight: 600;
	font-size: 46px;
	line-height: 130%;
	color: #000000;
}
.main-title > p{
	font-style: normal;
	font-weight: 400;
	font-size: 18px;
	line-height: 160%;
	color: #000000;
}


/*Dropdown*/
.dropdown{
	margin-top: 100px;
	display: flex;
	flex-direction: column;
	gap: 10px;
}

.dropdown h1{
	align-self: center;
	margin-bottom:20px;
}
.dropdown-menu{
	display: flex;
	flex-direction: inherit;
/*	gap: 20px;*/
}

.dropdown-label{
	width: 100%;
	padding: 16px 30px;
	align-items: center;
	display: flex;
	justify-content: space-between;
	background: rgba(219, 0, 17, 0.1);
	border: 1px solid rgba(219, 0, 17, 0.1);
	box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.15);
	border-radius: 15px;
}
.dropdown-label p{
	font-weight: 500;
	font-size: 20px;
	line-height: 24px;
}


.rotate-plus{
	transform: rotate(-45deg);
}

.dropdown-list{
/*	align-self: center;*/
/*	max-width: 1000px;*/
	display: flex;
	flex-direction: column;
	gap: 20px;
	padding: 0 10px;

}
.dropdown-list-content{
	padding-bottom: 20px;
	border-bottom: 1px solid rgba(219, 0, 17, 0.1);
}

.dropdown-list div h3{
	font-style: normal;
	font-weight: 500;
	font-size: 20px;
	line-height: 150%;
	color: #000000;

	
}
.dropdown-list div p{
	font-weight: 300;
	font-size: 20px;
	line-height: 150%;
	color: #000000;
	
}
.dropdown-list div ul li{
	list-style: inside;
	
}
.dropdown-list {
  /* Начальное состояние списка */
	  opacity: 1;
	  max-height: 530px;
	  overflow: hidden;
	  transition: opacity 0.3s ease-in-out, max-height 0.3s ease-in-out;
}

.dropdown-list.display {
	/* Стили для плавного появления */
	opacity: 0;
	max-height:0; /* Установите значение, подходящее для вашего контента */
}



.loans-calc{
	margin-top: 100px;
	display: flex;
	flex-direction: column;
}
.loans-calc h1{
	align-self: center;
	font-weight: 600;
	font-size: 40px;
	line-height: 130%;
}




/*Calculator card*/
.card-calculator{
	margin-top: 50px;
	display: flex;
	justify-content: space-between;
	gap: 50px;
}
/*calculation tab*/
.calculation-card{
	overflow: hidden;
	width: 577px;
	height: 503px;
	background: #FFFFFF;
	box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15);
	border-radius: 20px;
	padding: 40px 35px;
	gap: 50px;
    display: flex;
    flex-direction: column;
}
.deposit-menu{
	display: flex;
	flex-direction: column;
	gap: 10px;
}
.deposit-menu > form > select{
	width: 100%;
	height: 65px;
	background: rgba(241, 241, 241, 0.8);
	border-radius: 10px 10px 0px 0px;
	border:none;
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 17px;
	color: #000000;
 	padding: 20px 24px;
}
/*Deposit amount*/
.deposit-amount{
	display: flex;
	flex-direction: column;
	gap: 10px;
}
.range-slider{
	position: relative;
}
.slider-number{
	width: 100%;
	height:55px;
	background: rgba(241, 241, 241, 0.8);
	border-radius: 10px 10px 0px 0px;
	padding: 20px 24px;
}
.slider {
	position: absolute;
	width: 100%;
  	appearance: none;
  	background: #DB0011;
  	height: 5px;
}

.slider::-webkit-slider-thumb {
  	-webkit-appearance: none;
  	appearance: none;
  	width: 10px;
  	height: 10px; 
  	background: #DB0011;
  	border-radius: 50%;
}
.range-numbers{
	display: flex;
	justify-content: space-between;
}
.range-numbers > p{
	font-family: 'Montserrat';
	font-style: normal;
	font-weight: 400;
	font-size: 10px;
	line-height: 12px;

	color: #000000;
}
/*Deposit-term*/
.deposit-term{
	display: flex;
	flex-direction: column;
	gap: 10px;
}
.black-button{
	background: black;
	color: white;
}
.deposit-term-buttons{
	display: flex;
	flex-wrap: wrap;
	gap: 5px;
}
.deposit-term-buttons > button{
	height: 33px;
	border-radius: 10px;
	padding: 9px 20px;
	border: none;
}
/*Result Card*/
.result-card{
	width: 529px;
	height: 354px;
	background: #FFFFFF;
	box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15);
	border-radius: 20px;
	padding: 20px 30px;
	display: flex;
	overflow: hidden;
	flex-direction: column;
	gap: 35px;

}
.inter-rate{
	display: flex;
	flex-direction: column;
	text-align: center;
	gap: 25px;
	padding-bottom: 25px;
	border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.inter-rate > p{
	font-weight: 300;
	font-size: 24px;
	line-height: 29px;

}
.inter-rate > h2{
	font-weight: 600;
	font-size: 36px;
	line-height: 44px;
}
/*inter-rate-result*/
.inter-rate-result{
	display: flex;
	flex-direction: column;

}
.inter-rate-result > div{
	display: flex;
	justify-content: space-between;
}
.inter-rate-result > div > p{
	font-weight: 300;
	font-size: 18px;
	line-height: 22px;
}
.inter-rate-result > div > span{
	font-weight: 600;
	font-size: 23px;
	line-height: 32px;
}
.result-card > button{
	width: 184px;
	height: 39px;
	background: #DB0011;
	border-radius: 10px;
	font-style: normal;
	font-weight: 600;
	font-size: 16px;
	line-height: 20px;
	color: #FFFFFF;
	border: none;
	align-self: center;
}
.result-card > button:hover{
	box-shadow: 0px 0px 5px black;
}



/*Currency Converter*/
.currency-converter{
	margin-top: 50px;
	display: flex;
	justify-content: space-between;
	gap: 50px;

}



.rates-card{
    width: 604px;
	height: 354px;
	background: #FFFFFF;
	box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15);
	border-radius: 20px;
	padding: 50px 40px;
	flex-direction: column;
	gap: 40px;
	overflow: hidden;
}

.rates-card-selection{
	background-color: transparent;
	border: none;
	outline: none;
	font-style: normal;
	font-weight: 500;
	font-size: 24px;
	line-height: 29px;
}

.rates-card-table table {
  	border-collapse: collapse;

}

.rates-card-table tbody{
	display: flex;
	flex-direction: column;
	gap: 13px;
}
.rates-card-table table tr{
	display: flex;
	justify-content: space-around;
	gap:50px;
}
.rates-card-table table th {
  
  	font-style: normal;
	font-weight: 300;
	font-size: 18px;
	line-height: 22px;
	gap:88px;

}
.rates-card-table table th,
td {
  padding: 8px;
}




.resul-card{
	overflow: hidden;
	width: 438px;
	height: 354px;
	background: #F9F9F9;
	box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15);
	border-radius: 20px;
	padding: 36px 30px;
	flex-direction: column;
	gap: 40px;
}


.resul-card h2{
	font-style: normal;
	font-weight: 500;
	font-size: 24px;
	line-height: 29px;
	color: #000000;
}
.resul-card-forms{
	margin-top: 38px;
}

.resul-card-selection{
	background-color: transparent;
	border: none;
	outline: none;
	font-style: normal;
	font-weight: 600;
	font-size: 18px;
	line-height: 22px;

}


.resul-card-input{
	width: 240px;
	background: transparent;
	border: none;
	border-bottom: 1px solid black;
	padding: 4px;
	font-weight: 500;
	font-size: 18px;
	line-height: 22px;
	color: #000000;
}


.resul-card > a{
	display: flex;
    justify-content: end;
    margin-top: 60px;
    font-style: normal;
	font-weight: 300;
	font-size: 14px;
	line-height: 17px;
	color: #FF0000;
	text-decoration: none;
}


/*Online loan applications*/

.online-loan-app{
	margin-top: 100px;
	display: flex;
	flex-direction: column;

}
.online-loan-app > h1{
	margin-bottom: 50px;
	align-self: center;
}
.main-card{
	background: #FFFFFF;
	box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.15);
	border-radius: 20px;
	padding: 36px 21px;
}

.main-card{
	display: flex;
	flex-direction: column;
	gap:40px;
}
/*1*/
.main-card1{
}
.main-card1{
	display: flex;
	gap: 10px;
}
.main-card1 > label{
	display: flex;
	flex-direction: column;
	width: 100%;
	gap: 10px;
	font-weight: 500;
	font-size: 14px;
	line-height: 17px;
	color: #000000;

}

.main-card1 label >input{
	border:none;
	height: 54.51px;
	background: #F3F4F6;
	border-radius: 10px 10px 0px 0px;
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;

}

/*2*/
.main-card2{
}
.main-card2  {
	display: flex;
	gap: 10px;
}
.main-card2  >label{
	display: flex;
	flex-direction: column;
	width: 100%;
	gap: 10px;
	font-weight: 500;
	font-size: 14px;
	line-height: 17px;
	color: #000000;

}
.main-card2  > label >input{
	border:none;
	height: 54.51px;
	background: #F3F4F6;
	border-radius: 10px 10px 0px 0px;
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;
	padding: 10px;

}
.titile-select{
	background-color: transparent;
    border: none;
    outline: none;
    font-style: normal;
    font-weight: 500;
	font-size: 16px;
	line-height: 20px;
}


.last{
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.last button{
	font-weight: 600;
	font-size: 16px;
	line-height: 20px;
	color: #FFFFFF;
	width: 184px;
	height: 39px;
	background: #DB0011;
	border-radius: 10px;
	border:none;
}
.last button:hover{
	transition: .5s;
	box-shadow: 0px 0px 12px rgba(219, 0, 17, 0.5);
}




/*CARDS*/
.cards-container{
	margin-top: 30px;
    overflow: hidden;
}


.cards{
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.cards > div{
	width: 357px;
	height: 160px;
	padding: 25px;
	background: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.1);
	border-radius: 10px;	
}
.cards > div > h2{
	font-weight: 600;
	font-size: 16px;
	line-height: 20px;
	text-transform: uppercase;
	color: #DB0011;
}
.cards > div > p{
	font-style: normal;
	font-weight: 400;
	font-size: 12px;
	line-height: 19px;
	color: #000000;
}


.bank-services{
	margin-top: 100px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
}
.bank-services > h1{
	font-weight: 600;
	font-size: 40px;
	line-height: 130%;
	color: #000000;
}

.bank-services-cards{
	margin-top: 20px;
    display: flex;
    margin-bottom: 20px;
    gap: 10px;
}

.bank-services-cards > div{
	width: 225px;
/*	height: 187px;*/
	background: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 10px;
	padding: 20px;
}
.bank-services-cards img{
	margin-bottom: 8px;
	width: 50px;
	height: 50px;
}

.bank-services-cards > div > p{
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;
}

.bank-services-cards > div:hover{
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
	transition: .5s;
}

.bank-services-arrow{
	position: absolute;
	width: 37px;
	height: 35px;
	padding: 10px;
	right: 29px;
    bottom: 225px;
	background: #FFFFFF;
	border-radius: 50%;
	border: 1px solid rgba(219, 0, 17, 0.05);
	box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.15);
}

.bank-services-arrow:hover{
	box-shadow: 0px .5px 15px grey;
}

/*Footer*/
footer{
	margin-top: 100px;
	background: #DB0011;
	width: 100%;
	color: #FFFFFF;
}


.footer-container{
	display: flex;
	flex-direction: column;
	gap: 30px;
}
/*FIRST*/
.footer-first-block{
	display: flex;
/*	gap: 30px;*/
	margin-top: 60px;
	justify-content: space-between;
	padding-bottom: 40px;
	border-bottom: 1px solid rgba(255, 255, 255, 0.5);
}
.footer-first-block > div{
	display: flex;
	flex-direction: column;
	gap: 30px;
}
.footer-first-block > div > h3{
	font-weight: 600;
	font-size: 24px;
	line-height: 29px;
}
.footer-first-block > div > ul{
	display: flex;
	flex-direction: column;
	gap: 10px;
}
.footer-first-block > div > ul > a{
	text-decoration: none;
	font-style: normal;
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;
	color: #FFFFFF;
}
.footer-first-block > div > ul > a:hover{
	text-decoration: underline;
}
/*SECOND*/
.footer-second-block{
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding-bottom: 40px;
	border-bottom: 1px solid rgba(255, 255, 255, 0.5);

}

.footer-second-block-one{
	font-weight: 500;
	font-size: 16px;
	line-height: 150%;
	color: #FFFFFF;
	
}
.footer-second-block-two{
	display: flex;
	flex-direction: column;
	gap: 25px;
}
.footer-second-block-two > div{
	display: flex;
	justify-content: end;
}
.apps{
	display: flex;
	font-weight: 600;
	gap:5px;
	font-size: 18px;
	line-height: 22px;
	align-items: center;

}
.social{
	display: flex;
	gap: 15px;
}

/*THIRD*/
.footer-third-block{
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.footer-third-block > p{
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
	padding-bottom: 10px;
}
#contacts > a{
	display: flex;
	gap:5px;
	align-items: center;
}
.mobile-menu{
	display: none;
}
    </style>

<script src="./scripts/app.js"></script>
</body>
</html>


@endsection