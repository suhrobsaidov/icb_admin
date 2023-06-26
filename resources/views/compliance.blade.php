@extends('layouts.tlay')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compliance</title>
    <link rel="stylesheet" href="./styles/comp/style.css">
    <link rel="stylesheet" href="./styles/comp/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/comp/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">

    <!-- Нaчало -->

    <div class="literature">
        <h1>Compliance</h1>
        <div class="literature-name">
            <div>
                <span><img src="./images/icons/doc.png" alt="doc.png"> <a href="#"> Rates for VISA MPS bank cards CJSC "ICB"</a></span>
                <span><img src="./images/icons/doc.png" alt="doc.png"> <a href="#">ICB Salary cards TJS,  ICB cards TJS, ICB gift cards TJS</a></span>
                <span><img  src="./images/icons/doc.png" alt="doc.png"><a href="#">ICB Salary cards (USD, EUR),
ICB cards (USD, EUR)</a></span>
                <span><img src="./images/icons/doc.png" alt="doc.png"> <a href="#">ICB Individual card (TJS)</a></span>
            </div>
            <div>
                <span><img  src="./images/icons/doc.png" alt="doc.png"><a href="">ICB Individual card (USD, EUR)</a></span>
                <span><img src="./images/icons/doc.png" alt="doc.png"> <a href="">ICB Corporate cards (TJS)</a></span>
                <span><img  src="./images/icons/doc.png" alt="doc.png"> <a href="">ICB Cards “Oson”</a></span>

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
