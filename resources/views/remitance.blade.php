@extends('layouts.tlay')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remittances</title>
    <link rel="stylesheet" href="./styles/remitance/style.css">
    <link rel="stylesheet" href="./styles/remitance/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/remitance/mobile/style-mobile.css">
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

@endsection
