@extends('layouts.remitance')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loans calculator</title>
	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/tablet/style-tablet.css">
	<link rel="stylesheet" href="./styles/mobile/style-mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
		

		<div class="loans-calc">
			<h1>Loans calcualtors</h1>
		

			<div class="card-calculator" id="cardCalculator">
				<div class="calculation-card" >
					<!-- 1 -->
					<div class="deposit-menu">
						<p>Type of loan</p>
						<!-- Form for selecting deposit -->
						<form action="">
							<select name="" id="">
								<option value="">Consumer credit</option>
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
						<p>Loan amount</p>
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
					<div class="deposit-amount">
						<p>Loan term</p>
						<div class="range-slider">
							<p class="slider-number" id="sliderNumber1">0</p>
							<input type="range" min="1" max="1000000" value="0" class="slider" id="myRange1">
						</div>
						<div class="range-numbers">
							<p>1000</p>
							<p>10 000 000</p>
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
			            <div class="main-card3">
			                <label for="">
			                    Loan products
			                    <select name="" id="">
			                        <option value="">Business Loans</option>
			                    </select>
			                </label>
			                <label for="">
			                    Loan currency
			                    <select name="" id="">
			                        <option value="">Somoni</option>
			                    </select>
			                </label>
			                <label for="">
			                    Loan amount
			                    <input type="text">
			                </label>
			                <label for="">
			                    Loan term
			                    <input type="text">
			                </label>
			            </div>
			            <div class="main-card4">
			                <label for="">
			                    Loan purpose
			                    <textarea name="" id="" cols="30" rows="5"></textarea>
			                </label>
			                <label for="">
			                    Occupation
			                    <textarea name="" id="" cols="30" rows="5"></textarea>
			                </label>
			            </div>
			            <div class="main-card5">
			                <label for="">
			                    Сity / District
			                    <input type="text">
			                </label>
			                <label for="">
			                    Region
			                    <input type="text">
			                </label>
			                <label for="">
			                    <select name="" id="" class="titile-select">
			                        <option value="">Address, where registered</option>
			                    </select>
			                    <input type="text">
			                </label>
			            </div>
			            <div class="main-card6">
			                <label for="">
			                    Monthly family income
			                    <input type="text">
			                </label>
			                <label for="">
			                    Branch
			                    <select name="" id="">
			                        <option value="">Dushanbe branch (reference point Lastochka)</option>
			                    </select>
			                </label>
			                <label for="">
			                    Phone numbers for additional information
			                    <input type="text" placeholder="Dushanbe - (+992 37) 227 84 84, 235 50 53">
			                </label>
			            </div>
			            <div class="upload">
			            	<label for="">
			            		Please, attach your photo
			            		<div class="file-upload-container">
			            			<img src="./images/icons/upload.png" alt="">
							  		<input type="file" id="fileInput" class="file-input">
							  		<label for="fileInput" class="file-label"></label>
								</div>
			            	</label>
			            	
							<label for="">
			            		Please, attach your photo
			            		<div class="file-upload-container">
			            			<img src="./images/icons/upload.png" alt="">
							  		<input type="file" id="fileInput" class="file-input">
							  		<label for="fileInput" class="file-label"></label>
								</div>
			            	</label>
							<label for="">
			            		Please, attach your photo
			            		<div class="file-upload-container">
			            			<img src="./images/icons/upload.png" alt="">
							  		<input type="file" id="fileInput" class="file-input">
							  		<label for="fileInput" class="file-label"></label>
								</div>
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

<script>
	"use strict";

const slider = document.getElementById('myRange');
const sliderNumber = document.getElementById('sliderNumber');
const slider1 = document.getElementById('myRange1');
const sliderNumber1 = document.getElementById('sliderNumber1');



// Обработчик события ввода для ползунка slider
slider.addEventListener('input', () => {
  sliderNumber.textContent = slider.value;
});
slider1.addEventListener('input', () => {
  sliderNumber1.textContent = slider1.value;
});


</script>
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

<script src="./scripts/app.js"></script>
</body>
</html>

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
	margin-bottom: 80px;
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

.loans-calc{
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
	height: 100%;
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
	height: 100%;
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

/*3*/
.main-card3{
}
.main-card3  {
	display: flex;
	gap: 10px;
}
.main-card3  >label{
	display: flex;
	flex-direction: column;
	width: 100%;
	gap: 10px;
	font-weight: 500;
	font-size: 14px;
	line-height: 17px;
	color: #000000;

}
.main-card3  > label >input{
	border:none;
	height: 54.51px;
	background: #F3F4F6;
	border-radius: 10px 10px 0px 0px;
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;
	padding: 10px;
}
.main-card3  > label >select{
	width: 100%;
	height: 54.51px;
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
/*4*/
.main-card4{
	display: flex;
	gap: 10px;

}
.main-card4 > label{
	display: flex;
	flex-direction: column;
	width: 100%;
	gap: 10px;
	font-weight: 500;
	font-size: 14px;
	line-height: 17px;
	color: #000000;

}

.main-card4 > label textarea{
	border:none;
	background: #F3F4F6;
	border-radius: 10px 10px 0px 0px;
	padding: 10px;
}
/*5*/
.main-card5{
}
.main-card5  {
	display: flex;
	gap: 10px;
}
.main-card5  >label{
	display: flex;
	flex-direction: column;
	width: 100%;
	gap: 10px;
	font-weight: 500;
	font-size: 14px;
	line-height: 17px;
	color: #000000;

}
.main-card5  > label > input{
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
/*6*/
.main-card6{
}
.main-card6  {
	display: flex;
	gap: 10px;
}
.main-card6  >label{
	display: flex;
	flex-direction: column;
	width: 100%;
	gap: 10px;
	font-weight: 500;
	font-size: 14px;
	line-height: 17px;
	color: #000000;

}
.main-card6  > label >input{
	border:none;
	height: 54.51px;
	background: #F3F4F6;
	border-radius: 10px 10px 0px 0px;
	font-weight: 500;
	font-size: 16px;
	line-height: 20px;
	padding: 10px;
}
.main-card6  > label >select{
	width: 100%;
	height: 54.51px;
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

.upload{
	display: flex;
	gap: 20px;
}
.upload > label{
	gap:20px;
	display: flex;
	flex-direction: column;
	width: 100%;
	font-weight: 500;
	font-size: 14px;
	line-height: 17px;
	color: #000000;

}
.file-upload-container {
	position: relative;
	width: 100%;
	height: 188px;
	background: #F3F4F6;
	border: 1px solid rgba(0, 0, 0, 0.1);
	box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
	border-radius: 10px;
	overflow: hidden;
	display: flex;
	align-items: center;
	justify-content: center;
}


.file-input {
	position: absolute;
	left: -9999px;
	width: 100%;
	height: 100%;
	opacity: 0;
	cursor: pointer;
}

.file-label {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	cursor: pointer;
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
	font-size: 16px;
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
@endsection