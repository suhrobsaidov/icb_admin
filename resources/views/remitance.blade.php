@extends('layouts.remitance')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Remittances</title>
	<link rel="stylesheet" href="./styles/style.css">
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
				<h1>Remittances</h1>
				<p>Remittance Systems currently being 
				accepted by ICB include</p>
			</div>

			<img src="./images/desktop/main2.png" alt="" class="main-image">
		</div>

		
		<div class="cards-container">
			<div class="cards">
				<!-- 1 -->
				<div class="cards-1">
					<h2>Convenient and fast</h2>
					
				</div>
				<!-- 2 -->
				<div class="cards-2">
					<h2>Minimum % </h2>
				
				</div>
				<!-- 3 -->
				<div class="cards-3">
					<h2>Available 24/7</h2>
					
				</div>
			</div>
		</div>
		<!-- Нaчало -->
		

		<div class="systems">
			<div class="systems-cards">
				<h1>western union</h1>
				<div>
					<img src="./images/icons/wu.png" alt="wu.png">
					<p>Through the WESTERN UNION system, you can easily make a money transfer around the world. The currency of the transfers: Russian Rubles (RUB), US dollars (USD) and euros (EUR).</p>
				</div>
			</div>
			<div class="systems-cards">
				<h1>contact</h1>
				<div>
					<img src="./images/icons/younis.png" alt="younis.png">
					<p>The Unistream (Юнистрим) system provides a wide range of money transfer service points.
The system’s send/receive points of money transfers can be found at the link: https://unistream.ru/locations/#/.
Transfer currency: Russian rubles (RUB), US dollars (USD) and Euro (EUR).</p>
				</div>
			</div>
			<div class="systems-cards">
				<h1>Unistream</h1>
				<div>
					<img src="./images/icons/contact.png" alt="contact.png">
					<p>The CONTACT system has a wide service network around the world. For more details:  https://www.contact-sys.com/where.
The tariff list of commissions for money transfers of the CONTACT system can be found at the link: https://www.contact-sys.com/tariffs.
Transfer currency: Russian rubles (RUB), US dollars (USD) and Euro (EUR).</p>
				</div>
			</div>
		</div>




		<!-- Конец -->
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
	display: flex;
	align-items: center;
	justify-content: center;
}
.cards > div > h2{
	font-weight: 600;
	font-size: 16px;
	line-height: 20px;
	text-transform: uppercase;
	color: #DB0011;
}

.systems{
	display: flex;
	flex-direction: column;

}
.systems-cards{
	margin-top: 80px;
	margin-top: ;
	display: flex;
	flex-direction: column;
}
.systems-cards h1{
	align-self: center;
	font-weight: 600;
	font-size: 24px;
	line-height: 29px;
	text-transform: uppercase;
	color: #000000;
}
.systems-cards div img{
	width: 309px;
}
.systems-cards div{
	display: flex;
	flex-direction: row;
	gap: 66px;
	margin-top: 45px;
	border: 1px solid rgba(219, 0, 17, 0.1);
	filter: drop-shadow(0px 0px 4px rgba(0, 0, 0, 0.15));
	border-radius: 10px;
	padding: 54px 65px;
}
.systems-cards div p{
	max-width: 570px;
	font-weight: 400;
	font-size: 16px;
	line-height: 150.4%;
	color: #000000;
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