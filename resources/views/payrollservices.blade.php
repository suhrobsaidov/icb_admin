@extends('layouts.remitance')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payroll Services</title>
	<link rel="stylesheet" href="./styles/tablet/style-tablet.css">
	<link rel="stylesheet" href="./styles/mobile/style-mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
	

		<div class="main">
			<div class="main-title">
				<h1>Payroll Services</h1>
				<p>FMFB offers a convenient service to manage payroll disbursement on behalf of its institutional clients</p>
			</div>

			<img src="./images/desktop/main.png" alt="" class="main-image">
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
		<!-- Нaчало -->
		<div class="dropdown">
			
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>How it Works</p>
					<img src="./images/icons/+.png" alt="+" >
				</div>
				<ul class="dropdown-list" >
					<li>Institution signs up for Payroll Service through FMFB-T (see How to Sign Up for Payroll Services)</li>
					<li>FMFB-T sets up individual bank cards for all employees (if they don’t already have one)</li>
					<li>On payday, the Institution makes a single payment to FMFB equivalent to the whole salary amount and provides details on the salary amount to be paid to each employee</li>
					<li>FMFB credits the appropriate salary amount to the bank card of each employee (see How is Salary Transferred to the Employee’s Account)</li>
					<li>FMFB sends a report on disbursements made back to the Institution</li>
				</ul>
			</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>Advantages to Institution’s Employees</p>
					<img src="./images/icons/+.png" alt="+" >
				</div>
				<ul class="dropdown-list" >
					<li>A simple process that saves time and money over the typical cash-based process of giving out salaries to staff</li>
					<li>Minimizes cash turnover within the organization</li>
					<li>Institutions only make a single payment to FMFB-T per payment cycle, and we take care of the rest</li>
					<li>Strict confidentiality is maintained on any payments made to employees</li>
					
				</ul>
			</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>How to Sign Up for Payroll Service </p>
					<img src="./images/icons/+.png" alt="+" >
				</div>
				<ul class="dropdown-list" >
					<li>Institution signs up for Payroll Service through FMFB-T (see How to Sign Up for Payroll Services)</li>
					<li>FMFB-T sets up individual bank cards for all employees (if they don’t already have one)</li>
					<li>On payday, the Institution makes a single payment to FMFB equivalent to the whole salary amount and provides details on the salary amount to be paid to each employee</li>
					<li>FMFB credits the appropriate salary amount to the bank card of each employee (see How is Salary Transferred to the Employee’s Account)</li>
					<li>FMFB sends a report on disbursements made back to the Institution</li>
				</ul>
			</div>
			<div class="dropdown-menu">
				<div class="dropdown-label">
					<p>How is Salary Transferred to the Employee’s Account</p>
					<img src="./images/icons/+.png" alt="+" >
				</div>
				<ul class="dropdown-list" >
					<li>Institution signs up for Payroll Service through FMFB-T (see How to Sign Up for Payroll Services)</li>
					<li>FMFB-T sets up individual bank cards for all employees (if they don’t already have one)</li>
					<li>On payday, the Institution makes a single payment to FMFB equivalent to the whole salary amount and provides details on the salary amount to be paid to each employee</li>
					<li>FMFB credits the appropriate salary amount to the bank card of each employee (see How is Salary Transferred to the Employee’s Account)</li>
					<li>FMFB sends a report on disbursements made back to the Institution</li>
				</ul>
			</div>
		</div>

		<!-- Конец -->
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

<script>
    dropdownLabels.forEach((label) => {
  const plusButton = label.querySelector('img');
  const dropdownList = label.nextElementSibling;

  plusButton.addEventListener('click', () => {
    dropdownList.classList.toggle('display');
    plusButton.classList.toggle('rotate-plus');
    plusButton.style.transition = '.5s';
  });
});

    </script>
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
/*Bank*/
.bank-services{
	margin-top: 30px;
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

/**/
.dropdown{
	margin-top: 100px;
	display: flex;
	flex-direction: column;
	gap: 80px;
}

.dropdown-menu{
	display: flex;
	flex-direction: inherit;
	gap: 20px;
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
	font-weight: 600;
	font-size: 30px;
	line-height: 37px;
}


.rotate-plus{
	transform: rotate(-45deg);
}

.dropdown-list{
	align-self: center;
	max-width: 1000px;

}
.dropdown-list li{
	list-style: inside;
	font-weight: 300;
	font-size: 20px;
	line-height: 170%;
}
.dropdown-list {
  /* Начальное состояние списка */
	  opacity: 1;
	  max-height: 500px;
	  overflow: hidden;
	  transition: opacity 0.3s ease-in-out, max-height 0.3s ease-in-out;
}

.dropdown-list.display {
	/* Стили для плавного появления */
	opacity: 0;
	max-height:0; /* Установите значение, подходящее для вашего контента */
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