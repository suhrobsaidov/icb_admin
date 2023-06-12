@extends('layouts.remitance')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Financial Statements</title>
	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/tablet/style-tablet.css">
	<link rel="stylesheet" href="./styles/mobile/style-mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
		
	<!-- начало -->
	


		<div class="dropdown">
				<h1>FAQ</h1>
				<div class="dropdown-menu">
					<div class="dropdown-label">
						<p>Where can I get information about credit products of CJSC “The First Microfinance Bank”?</p>
						<img src="./images/icons/+.png" alt="+" >
					</div>
					<div class="dropdown-list" >
						<div >
							<div class="dropdown-list-buttons" id="dropdownListButtons">
								<button class="dropdown-list-button" id='one'>2015</button>
								<button class="dropdown-list-button" id='two'>2016</button>
								<button class="dropdown-list-button" id='three'>2017</button>
								<button class="dropdown-list-button" id='four'>2018</button>
								<button class="dropdown-list-button" id='five'>2019</button>
								<button class="dropdown-list-button" id='six'>2020</button>
								<button class="dropdown-list-button" id='sever'>2021</button>
							</div>
							<div class="literature-name">
								<div>
									<span><img src="./images/icons/doc.png" alt="doc.png"> <a href="#"> Financial Indicators as of 31.01.2019</a></span>
									<span><img src="./images/icons/doc.png" alt="doc.png"> <a href="#"> Financial Indicators as of 31.02.2019</a></span>
									<span><img  src="./images/icons/doc.png" alt="doc.png"><a href="#"> Financial Indicators as of 31.03.2019</a></span>
									<span><img src="./images/icons/doc.png" alt="doc.png"> <a href="#"> Financial Indicators as of 31.04.2019</a></span>
								</div>
								<div>
									<span><img  src="./images/icons/doc.png" alt="doc.png"><a href="">Financial Indicators as of 31.05.2019</a></span>
									<span><img src="./images/icons/doc.png" alt="doc.png"> <a href="">Financial Indicators as of 31.06.2019</a></span>
									<span><img  src="./images/icons/doc.png" alt="doc.png"> <a href="">Financial Indicators as of 31.07.2019</a></span>
									<span><img  src="./images/icons/doc.png" alt="doc.png"> <a href="">Financial Indicators as of 31.08.2019</a></span>
								</div>
							</div>
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
		</div>

		<div class="news">
			<h1>News</h1>
			
			<div class="news-block">
				<div>
					<h1>Mobile banking development Tender for CJSC ICB</h1>
					<p>CJSC ICB launches a tender for the development of a mobile application</p>
					<div>
						<p>05.04.2022</p>
						<p>More detailed</p>
					</div>
				</div>
				<div>
					<h1>Mobile banking development Tender for CJSC ICB</h1>
					<p>CJSC ICB launches a tender for the development of a mobile application</p>
					<div>
						<p>05.04.2022</p>
						<p>More detailed</p>
					</div>
				</div>
				<div>
					<h1>Mobile banking development Tender for CJSC ICB</h1>
					<p>CJSC ICB launches a tender for the development of a mobile application</p>
					<div>
						<p>05.04.2022</p>
						<p>More detailed</p>
					</div>
				</div>
			</div>
			<div class="news-block">
				<div>
					<h1>Mobile banking development Tender for CJSC ICB</h1>
					<p>CJSC ICB launches a tender for the development of a mobile application</p>
					<div>
						<p>05.04.2022</p>
						<p>More detailed</p>
					</div>
				</div>
				<div>
					<h1>Mobile banking development Tender for CJSC ICB</h1>
					<p>CJSC ICB launches a tender for the development of a mobile application</p>
					<div>
						<p>05.04.2022</p>
						<p>More detailed</p>
					</div>
				</div>
				<div>
					<h1>Mobile banking development Tender for CJSC ICB</h1>
					<p>CJSC ICB launches a tender for the development of a mobile application</p>
					<div>
						<p>05.04.2022</p>
						<p>More detailed</p>
					</div>
				</div>
			</div>
		</div>

	<!-- конец -->

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
<script>

const dropdownLabels = document.querySelectorAll('.dropdown-label');

const dropdownListButtons = document.querySelectorAll('.dropdown-list-buttons > button');
const fiveButton = document.getElementById('five');

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


dropdownListButtons.forEach(button => {
  button.addEventListener('click', () => {
    dropdownListButtons.forEach(btn => {
      if (btn !== button) {
        btn.style.cssText=``;
      }
    });
    button.style.cssText=`
    background: #DB0011;
      color: white;`;
  });
  fiveButton.style.cssText=`
      background: #DB0011;
        color: white;`;
});
</script>
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
	margin-top: 190px;
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
/*начало*/


/*Dropdown*/
.dropdown{
	margin-top: 30px;
	display: flex;
	flex-direction: column;
	gap: 25px;
}
.dropdown > h1{
	align-self:center;
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
	background: #FEFAFA;
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
	padding: 0 20px;

}
.dropdown-list-content{
	padding-bottom: 20px;
	border-bottom: 1px solid rgba(219, 0, 17, 0.1);
}

.dropdown-list > div{
	margin-top: 60px;
	display: flex;
	flex-direction: column;
	gap: 60px;
}
.dropdown-list-buttons{
	width: 100%;
	display: flex;
	gap: 10px;
}
.button-background{
	background: #DB0011;
	color: white;
}
.dropdown-list-button{
	width: 100%;
	height: 65px;
	border: none;
	background: rgba(219, 0, 17, 0.1);
	border-radius: 10px;
	font-weight: 400;
	font-size: 38px;
	line-height: 130%;
	color: #000000;
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



/*Knowledge base*/
.literature{
	margin-top: 100px;
	display: flex;
	flex-direction: column;
	gap: 50px;
}
.literature h1{
	display: flex;
	align-self: center;
}

.literature-name{
	display: flex;
	justify-content: center;
	gap: 112px;
}
.literature-name div{
	display: flex;
	flex-direction: column;
	gap: 50px;
}
.literature-name  > div > span{
	display: flex;
	gap: 10px;
	align-items: center;
}
.literature-name  > div > span > a{
	max-width: 500px;
	font-weight: 400;
	font-size: 24px;
	line-height: 130%;
	color: black;
}
.literature-name  > div > span > a:hover{
}



.news{
	margin-top: 80px;
	display: flex;
	flex-direction: column;
}
.news > h1{
	align-self: center;
	font-weight: 600;
	font-size: 46px;
	line-height: 130%;
}

.news-block{
	margin-top: 20px;
 	display:flex;
 	gap: 28px;
}
.news-block > div{
	display: flex;
	flex-direction: column;
	gap: 40px;
	max-width: 407px;
	max-height: 243px;
	background: rgba(246, 246, 246, 0.6);
	box-shadow: 0px 0px 25px 1px rgba(0, 0, 0, 0.1);
	border-radius: 20px;
	padding: 25px;
	overflow: hidden;
}


.news-block > div > h1{
	font-weight: 600;
	font-size: 18px;
	line-height: 130%;
}

.news-block > div > p{
	font-weight: 300;
	font-size: 16px;
	line-height: 130%;
}
.news-block > div > div{
	display: flex;
	justify-content: space-between;
}

/*конец*/

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

@endsection