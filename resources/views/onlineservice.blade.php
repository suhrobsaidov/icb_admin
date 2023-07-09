@extends('layouts.tlay')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Services</title>
    <link rel="stylesheet" href="./styles/online/style.css">
    <link rel="stylesheet" href="./styles/online/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/online/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">

    <!-- Нaчало -->

    <div class="online-services">
        <div class="online-services-title">
            <h1>Online Services</h1>
            <p>Access to money anywhere in the world</p>
        </div>
        <div class="online-services-blocks">

            <div>
                <img src="./images/icons/mob.png" alt="mob.png">
                <h2>Mobile banking </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            </div>
            <div>
                <img src="./images/icons/pc.png" alt="mob.png">
                <h2>Online banking </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            </div>
            <div>
                <img src="./images/icons/lap.png" alt="mob.png">
                <h2>Online applications</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
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
