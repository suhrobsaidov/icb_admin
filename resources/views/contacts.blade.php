


@extends('layouts.remitance')

@section('content')
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacts</title>
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

	
	<div class="contacts">
		<h1>Contacts</h1>
		<div class="contacts-input">
			<div class="contacts-input-contact">
				<h3>Contact information</h3>
				<div>
					<img src="./images/icons/Phonebig.png" alt="Phonebig.png">
					<div>
						<p>Phone:</p>
						<p>(+992) 37 227-91-70, 227-91-71</p>
					</div>
				</div>
				<div>
					<img src="./images/icons/Mail.png" alt="Mail.png">
					<div>
						<p>E-mail:</p>
						<p>info@icb.tj</p>
					</div>
				</div>
				<div>
					<img src="./images/icons/Locationbig.png" alt="Locationbig.png">
					<div>
						<p>Address:</p>
						<p>Dushanbe, Pushkin str., 10</p>
					</div>
				</div>
				<div>
					<img src="./images/icons/Clockbig.png" alt="Clockbig.png">
					<div>
						<p>Operating mode:</p>
						<p>Mon-Fri (08:00-17:00)</p>
					</div>
				</div>
				<div class="social">
					<img src="./images/icons/Instagram.png" alt="Instagram.png">
					<img src="./images/icons/Facebook.png" alt="Facebook.png">
					<img src="./images/icons/Telegram.png" alt="Telegram.png">
					<img src="./images/icons/Twitter.png" alt="Twitter.png">
					<img src="./images/icons/LinkedIn.png" alt="LinkedIn.png">
				</div>
			</div>

			<div class="contacts-input-feedback">
				<h3>Feedback</h3>
				<h2>Do you still have questions?</h2>
				<p>Leave a request on our website and we will respond to you within 24 hours.</p>
				<form action="">
					<input type="text" placeholder="Name"></input>
					<input type="text" placeholder="Surname"></input>
					<input type="email" placeholder="E-mail"></input>
					<input type="number" placeholder="Phone"></input>
					<textarea name="" id="" cols="30" rows="5" placeholder="Question"></textarea>
					<button>Send</button>
				</form>
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

@endsection
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
    padding: 150px 24px;
}

.footer-container{
	max-width:1144px ;
    margin: 0 auto;
    padding: 0 24px;
}
/*HEADER*/
/* .header{
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
} */
/*начало*/

.contacts{
	margin-top: 100px;
	display: flex;
	flex-direction: column;
	gap: 50px;
}
.contacts > h1{
	align-self: center;
}
.contacts-input{
	display: flex;
}


.contacts-input-contact{
	color: white;
	width:100%;
	background: #DB0011;
	border-radius: 40px 0px 0px 40px;
	padding: 30px 58px;
	gap: 80px;
	display: flex;
	flex-direction: column;
}
.contacts-input-contact h3{
	font-weight: 600;
	font-size: 36px;
	line-height: 44px;
}
.contacts-input-contact > div{
	display: flex;
	align-items: center;
	gap: 17px;
}
.contacts-input-contact > div p{
	font-weight: 500;
	font-size: 22px;
	line-height: 37px;
	color: #FFFFFF;
}
.contacts-input-feedback{
	display: flex;
	flex-direction: column;
	width:100%;
	background: #F8F8F8;
	border-radius: 0px 40px 40px 0px;
	padding: 30px 48px;
}
.contacts-input-feedback h3{
	font-weight: 600;
	font-size: 36px;
	line-height: 44px;
	color: #DB0011;
}
.contacts-input-feedback h2{
	margin-top: 35px;
	font-weight: 600;
	font-size: 28px;
	line-height: 44px;
}
.contacts-input-feedback p{
	font-weight: 400;
	font-size: 22px;
	line-height: 29px;
	margin-bottom: 35px;
	color: #000000;
}
.contacts-input-feedback form{
	display: flex;
	gap: 43px;
	flex-direction: column;
}
.contacts-input-feedback form input{
	padding: 25px;
	height: 70px;
	background: #FFFFFF;
	border: 1px solid #FFFFFF;
	border-radius: 15px;
}
.contacts-input-feedback form textarea{
	padding: 25px;
	background: #FFFFFF;
	border: 1px solid #FFFFFF;
	border-radius: 15px;
}
.contacts-input-feedback button{
	background: #DB0011;
	box-shadow: 0px 0px 7px rgba(219, 0, 17, 0.5);
	border-radius: 10px;
	max-width: 176px;
	height: 46px;
	font-weight: 600;
	font-size: 24px;
	line-height: 29px;
	border: none;
	color: #FFFFFF;
}
.contacts-input-feedback button:hover{
	box-shadow:0 0 10px 1px #db0011;
	transition: .3s;
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
