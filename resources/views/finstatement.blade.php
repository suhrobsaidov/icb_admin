@extends('layouts.tlay')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Statements</title>
    <link rel="stylesheet" href="./styles/fstatement/style.css">
    <link rel="stylesheet" href="./styles/fstatement/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/fstatement/mobile/style-mobile.css">
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

<script src="./scripts/app.js"></script>
</body>
</html>
@endsection
