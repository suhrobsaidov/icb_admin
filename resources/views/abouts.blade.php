@extends('layouts.tlay')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About the bank</title>
	<link rel="stylesheet" href="./styles/about/style.css">
	<link rel="stylesheet" href="./styles/about/tablet/style-tablet.css">
	<link rel="stylesheet" href="./styles/about/mobile/style-mobile.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">

	<!-- начало -->
	<div class="about-container">


		<div class="about">
			<div class="about-content">
				<h1>About the bank</h1>
				<p>We strive to make a significant contribution to the prosperity of the Republic of Tajikistan and we want to become the leading commercial bank in the country, which will offer individuals and legal entities the most complete line of banking products.</p>
			</div>
			<img src="./images/desktop/about.png" alt="about.png">
		</div>




		<div class="history">
			<div>
				<h1>History</h1>
				<p>Established in 2003, ICB was the first commercial bank in Tajikistan focusing mainly on the provision of microcredit lending. Building upon its strong foundation in the microfinance sector, the bank has expanded its suite of services to better address the diverse financial needs of individuals and legal entities.<br/>

	The Bank is affiliated with the Aga Khan Development Network (AKDN) – a group of development agencies working in health, education, culture, and rural and economic development, primarily in Asia and Africa. In fact, the bank was originally established to consolidate the operations of all the previous microfinance institutions run by other AKDN development agencies in the country like the Enterprise Support Facility (ESF) and credit program of the Mountain Societies Development Support Program (MSDSP). In the summer of 2007, the Bank acquired MSDSP’s remaining loan portfolio in Khatlon, thereby further consolidating the AKDN’s microfinance activities under one roof.<br/>

	As a key investment of the AKDN in the long-term development of Tajikistan, the Bank continues to maintain a strong working relationship with agencies of the AKDN and various international agencies and NGOs working in Tajikistan to ensure that its operations are contributing to the overall development of the country.</p>
			</div>


			<div class="history-block2">
				<div>
					<h1>Mission<img src="./images/icons/mission.png" alt=""></h1>
					<p>To be recognised as Tajikistan’s most trusted bank, operating to international standards of ethics, prudence and customer service, through the reliable delivery of high-quality banking services in all regions of Tajikistan to its SME, MicroFinance, Retail and Corporate customers.  </p>
				</div>
				<div>
					<h1>Vision <img src="./images/icons/vision.png" alt=""></h1>
					<p>To contribute to the improvement of the quality of life of people in  Tajikistan by providing access to finance and banking services and contribute to the economic development of the country.</p>
				</div>
			</div>
		</div>

		<div class="achievements">
			<h1>Achievements</h1>
			<div>
				<ul>
					<li>Since 2010, ICB disbursed 115,000 loans amounting to TJS 2.7B to customers throughout the country.</li>
					<li>In 2018, ICB took 2nd place for the quality of banking services during the Mystery Shopper survey which was arranged by AMFOT.</li>
					<li>Development of ICB.PAY (https://pay.fmfb.tj/) that allows repaying loans, make money transfers, pay for utility bills, etc. 24/7. </li>
					<li>Partnership with Tcell to develop TezSum (http://www.tezsum.tj/en) , e-wallet application where customers can pay utility bills, home Internet and television, traffic police fines, bank loans and much more! Moreover, TezSum presents a new and unique feature: now wallet users can receive money transfers from anywhere in the world directly to their Korti Milli card issued by ICB!</li>
					<li>2017 member of Global Alliance for Banking on Values (GABV). ICB is the first and only bank to be accepted from Central Asia.</li>
				</ul>
				<img src="./images/desktop/gogo.png" alt="gogo.png">
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
