<footer>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacts</title>

	<link rel="stylesheet" href="./styles/tablet/style-tablet.css">
	<link rel="stylesheet" href="./styles/mobile/style-mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<footer>
		<div class="footer-container">
			<!-- 1 -->
			<div class="footer-first-block">
				<!-- 1 -->
				<div>
					<h3>Individuals</h3>
					<ul>
						<a href="cards">Cards</a>
						<a href="loans">Loans</a>
						<a href="deposits">Deposits</a>
						<a href="#">Money transfers</a>
						<a href="#">Mobile banking</a>
					</ul>
				</div>
				<!-- 2 -->
				<div>
					<h3>Legal entities</h3>
					<ul>
						<a href="loans">Loans</a>
						<a href="term">Term deposits</a>
						<a href="#">Current account</a>
						<a href="#">Salary projects</a>
						<a href="cards">Corporate card</a>
						<a href="#">Acquiring</a>
					</ul>
				</div>
				<!-- 3 -->
				<div>
					<h3>Legal entities</h3>
					<ul>
						<a href="abouts">About the bank</a>
						<a href="/vacancy">Job openings</a>
						<a href="/contacts">Contacts</a>
						<a href="#">Documents</a>
						<a href="news">News</a>
						<a href="/faq">FAQ</a>
					</ul>
				</div>
				<!-- 4 -->
				<div >
					<h3>Contacts</h3>
					<ul id="contacts">
						<a href="#"><img src="./images/icons/Phone.png" alt="Phone.png"> +992 37 227-91-70, 227-91-71</a>
						<a href="#"><img src="./images/icons/Envelope.png" alt="Envelope.png"> info@icb.tj</a>
						<a href="#"><img src="./images/icons/Location.png" alt="Location.png"> Dushanbe, Pushkin str., 10</a>
						<a href="#"><img src="./images/icons/Clock.png" alt="Clock.png"> Mon-Fri (08:00-17:00)</a>
						<a href="#"> Call center : 909 </a>
					</ul>
				</div>

			</div>
			<!-- 2 -->
			<div class="footer-second-block">
				<div class="footer-second-block-one">
					<p>CJSC  and Credit Bank is a member of the individual Savings insurance Fund.</p>
					<p>The certificate was issued on September 20, 2011.</p>
				</div>

				<div class="footer-second-block-two">
					<div>
						<p class="apps">Mobile banking : <img src="./images/icons/guglplay.png" alt="guglplay.png"> <img src="./images/icons/appstore.png" alt="appstore.png"></p>
					</div>
					<div class="social">
						<img src="./images/icons/Instagram.png" alt="Instagram.png">
						<img src="./images/icons/Facebook.png" alt="Facebook.png">
						<img src="./images/icons/Telegram.png" alt="Telegram.png">
						<img src="./images/icons/Twitter.png" alt="Twitter.png">
						<img src="./images/icons/LinkedIn.png" alt="LinkedIn.png">
					</div>
				</div>

			</div>
			<!-- 3 -->
			<div class="footer-third-block">
				<p><img src="./images/icons/Copyright.png" alt="Copyright.png" class="copyright">2011-2022. CJSC Investment and Credit Bank CJSC, official website.</p>
				<p>Developed by : WebDushanbe</p>
			</div>
		</div>
	</footer>
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