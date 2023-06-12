@extends('layouts.test')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shareholders</title>
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
	<div class="shareholders">
		
		<div class="shareholders-one">
			<div>
				<h1>Shareholders</h1>
				<p>The authorized capital of the bank is TJS 93,340,000. The Investment and Kredit Bank Shareholders are key partners in supporting the Bank’s growth. In addition to direct equity, many shareholders also offer bank loans and grants for technical assistance and capacity building.</p>
			</div>
			<img src="./images/desktop/sharehold.png" alt="sharehold.png">
		</div>

		<div class="shareholders-two">
			<div>
				<h3>Our current shareholders are as follows:</h3>
				<p>The Aga Khan Fund for Economic Development is the economic development arm of the Aga Khan Development Network (AKDN), a group of private, non-denominational development agencies seeking to improve opportunities and living conditions in specific regions of the developing world, especially Africa and Asia. A for-profit institution, the Fund helps to build economically viable enterprises through strong equity participation combined with management and technical expertise and support. AKFED companies promote sustainable economic development in South and Central Asia and sub-Saharan Africa with projects in industry, tourism, and financial services. AKFED controls assets in excess of USD 1 billion and the AKDN has been active in Central Asia since the early 1990s. (AKFED) holds 56,561 ordinary shares for 56,561,000 somoni in CJSC First Microfinance Bank.</p>
				<a href="#">Website: https://www.akdn.org/our-agencies/aga-khan-fund-economic-development</a>
			</div>
			<div>
				<h3>Our current shareholders are as follows:</h3>
				<p>The Aga Khan Fund for Economic Development is the economic development arm of the Aga Khan Development Network (AKDN), a group of private, non-denominational development agencies seeking to improve opportunities and living conditions in specific regions of the developing world, especially Africa and Asia. A for-profit institution, the Fund helps to build economically viable enterprises through strong equity participation combined with management and technical expertise and support. AKFED companies promote sustainable economic development in South and Central Asia and sub-Saharan Africa with projects in industry, tourism, and financial services. AKFED controls assets in excess of USD 1 billion and the AKDN has been active in Central Asia since the early 1990s. (AKFED) holds 56,561 ordinary shares for 56,561,000 somoni in CJSC First Microfinance Bank.</p>
				<a href="#">Website: https://www.akdn.org/our-agencies/aga-khan-fund-economic-development</a>
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
/*начало*/

.shareholders{
	gap: 80px;
	margin-top: 100px;
	display: flex;
	flex-direction: column;
}

.shareholders-one{
	display: flex;
	align-items: center;
}
.shareholders-one div{
	display: flex;
	flex-direction: column;
	gap:40px;
}
.shareholders-one div h1{
	font-weight: 600;
	font-size: 46px;
	line-height: 130%;

}
.shareholders-one div p{
	font-weight: 400;
	font-size: 24px;
	line-height: 150.5%;

}
.shareholders-two div{
	display: flex;
	flex-direction: column;
	gap: 20px;
}
.shareholders-two div h3{
	font-weight: 500;
	font-size: 20px;
	line-height: 150.5%;
	color: #000000;

}
.shareholders-two div p{
	font-style: normal;
	font-weight: 300;
	font-size: 20px;
	line-height: 150.5%;
}
.shareholders-two div a{
	font-weight: 400;
	font-size: 20px;
	line-height: 150.5%;
	color: #1BADFF;
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