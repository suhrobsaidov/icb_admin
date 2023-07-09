@extends('layouts.tlay')

@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto loans</title>
    <link rel="stylesheet" href="./styles/auto/style.css">
    <link rel="stylesheet" href="./styles/auto/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/auto/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">



    <div class="main">
        <div class="main-title">
            <h1>Auto loans</h1>
            <p>To increase turnover, support liquidity, fixed
                assets for business development and increase
                capacity.</p>
        </div>

        <img src="./images/desktop/auto-loans.png" alt="" class="main-image">
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


    <div class="dropdown">

        <div class="dropdown-menu">
            <div class="dropdown-label">
                <p>Product terms</p>
                <img src="./images/icons/plus.png" alt="+" >
            </div>
            <div class="dropdown-list" >
                <div class="dropdown-list-content">
                    <h3>Purpose of the loan</h3>
                    <p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
                </div>

                <div class="dropdown-list-content">
                    <h3>Terms</h3>
                    <ul>
                        <li>Loan amount: up to USD 300,000 (equivalent in TJS)</li>
                        <li>Loan term; Up to 48 months.</li>
                    </ul>
                </div>

                <div class="dropdown-list-content">
                    <h3>Сurrency</h3>
                    <p>TJS, USD</p>
                </div>

                <div class="dropdown-list-content">
                    <h3>Loan security</h3>
                    <ul>
                        <li>Up to USD 2,000 (and the equivalent in TJS) without collateral and surety;</li>
                        <li>Up to US $ 3,000 (TJS equivalent) without collateral and guarantor for repeat and exemplary clients;</li>
                        <li>Moving bond up to USD 5,000 (and TJS equivalent) and 1 guarantor;</li>
                        <li>Real estate worth more than USD 5,000 (and the equivalent in somoni) and 1 guarantor.</li>

                    </ul>
                </div>

                <div class="dropdown-list-content">
                    <h3>Banking tariffs</h3>
                    <p>For information about banking tariffs on this product, please see the table here</p>
                </div>


            </div>
        </div>
    </div>


    <div class="loans-calc">
        <h1>Loans calcualtors</h1>


        <div class="card-calculator" id="cardCalculator">
            <div class="calculation-card" >
                <!-- 1 -->
                <div class="deposit-menu">
                    <p>Type of loan</p>
                    <!-- Form for selecting deposit -->
                    <form action="">
                        <select name="" id="">
                            <option value="">Consumer credit</option>
                        </select>
                    </form>
                </div>
                <!-- 2 -->
                <div class="deposit-menu">
                    <p>Сurrency</p>
                    <!-- Form for selecting deposit -->
                    <form action="">
                        <select name="" id="">
                            <option value="">TJS</option>
                        </select>
                    </form>
                </div>
                <!-- 3 -->
                <div class="deposit-amount">
                    <p>Loan amount</p>
                    <div class="range-slider">
                        <p class="slider-number" id="sliderNumber">0</p>
                        <input required type="range" min="1" max="1000000" value="0" class="slider" id="myRange">
                    </div>
                    <div class="range-numbers">
                        <p>1000</p>
                        <p>10 000 000</p>
                    </div>
                </div>
                <!-- 4 -->
                <div class="deposit-amount">
                    <p>Loan term</p>
                    <div class="range-slider">
                        <p class="slider-number" id="sliderNumber">0</p>
                        <input required type="range" min="1" max="1000000" value="0" class="slider" id="myRange">
                    </div>
                    <div class="range-numbers">
                        <p>1000</p>
                        <p>10 000 000</p>
                    </div>
                </div>

            </div>
            <div class="result-card">
                <!-- 1 -->
                <div class="inter-rate">
                    <p>Interest rate</p>
                    <h2>24,5 %</h2>
                </div>
                <!-- 2 -->
                <div class="inter-rate-result">
                    <div>
                        <p>Monthly payment</p>
                        <span>1760 смн</span>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="online-loan-app">
        <h1>Online loan applications</h1>
        <form action="">
            <!-- начало -->
            <div class="main-card">
                <div class="main-card1">
                    <label for="">
                        Some
                        <input required type="text">
                    </label>
                    <label for="">
                        Name
                        <input required type="text">
                    </label>
                    <label for="">
                        Middle name
                        <input required type="text">
                    </label>
                </div>
                <div class="main-card2">
                    <label for="">
                        Some
                        <input required type="text">
                    </label>
                    <label for="">
                        Phone number
                        <input required type="text">
                    </label>
                    <label for="">
                        <select name="" id="" class="titile-select">
                            <option value="">Additional phone number</option>
                        </select>
                        <input required type="text">
                    </label>
                </div>
                <div class="main-card3">
                    <label for="">
                        Loan products
                        <select name="" id="">
                            <option value="">Business Loans</option>
                        </select>
                    </label>
                    <label for="">
                        Loan currency
                        <select name="" id="">
                            <option value="">Somoni</option>
                        </select>
                    </label>
                    <label for="">
                        Loan amount
                        <input required type="text">
                    </label>
                    <label for="">
                        Loan term
                        <input required type="text">
                    </label>
                </div>
                <div class="main-card4">
                    <label for="">
                        Loan purpose
                        <textarea name="" id="" cols="30" rows="5"></textarea>
                    </label>
                    <label for="">
                        Occupation
                        <textarea name="" id="" cols="30" rows="5"></textarea>
                    </label>
                </div>
                <div class="main-card5">
                    <label for="">
                        Сity / District
                        <input required type="text">
                    </label>
                    <label for="">
                        Region
                        <input required type="text">
                    </label>
                    <label for="">
                        <select name="" id="" class="titile-select">
                            <option value="">Address, where registered</option>
                        </select>
                        <input required type="text">
                    </label>
                </div>
                <div class="main-card6">
                    <label for="">
                        Monthly family income
                        <input required type="text">
                    </label>
                    <label for="">
                        Branch
                        <select name="" id="">
                            <option value="">Dushanbe branch (reference point Lastochka)</option>
                        </select>
                    </label>
                    <label for="">
                        Phone numbers for additional information
                        <input required type="text" placeholder="Dushanbe - (+992 37) 227 84 84, 235 50 53">
                    </label>
                </div>
                <div class="upload">
                    <label for="">
                        Please, attach your photo
                        <div class="file-upload-container">
                            <img src="./images/icons/upload.png" alt="">
                            <input required type="file" id="fileInput" class="file-input">
                            <label for="fileInput" class="file-label"></label>
                        </div>
                    </label>

                    <label for="">
                        Please, attach your photo
                        <div class="file-upload-container">
                            <img src="./images/icons/upload.png" alt="">
                            <input required type="file" id="fileInput" class="file-input">
                            <label for="fileInput" class="file-label"></label>
                        </div>
                    </label>
                    <label for="">
                        Please, attach your photo
                        <div class="file-upload-container">
                            <img src="./images/icons/upload.png" alt="">
                            <input required type="file" id="fileInput" class="file-input">
                            <label for="fileInput" class="file-label"></label>
                        </div>
                    </label>
                </div>

                <div class="last">
                    <div class="check-last">
                        <input required type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> I agree with the terms of personal data processing.</label>
                    </div>
                    <button>leave a request</button>
                </div>
            </div>
        </form>
    </div>


    <div class="dropdown">
        <h1>FAQ</h1>
        <div class="dropdown-menu">
            <div class="dropdown-label">
                <p>Where can I get information about credit products of CJSC “The First Microfinance Bank”?</p>
                <img src="./images/icons/plus.png" alt="+" >
            </div>
            <div class="dropdown-list " >
                <div>
                    <p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
                </div>
            </div>
        </div>
        <div class="dropdown-menu">
            <div class="dropdown-label">
                <p>Which credit products do you offer?</p>
                <img src="./images/icons/plus.png" alt="+" class="hidden">
            </div>
            <div class="dropdown-list" >
                <div>
                    <h3>Purpose of the loan</h3>
                    <p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
                </div>
            </div>
        </div>
        <div class="dropdown-menu">
            <div class="dropdown-label">
                <p>What is the term of various products you offer?</p>
                <img src="./images/icons/plus.png" alt="+" class="hidden">
            </div>
            <div class="dropdown-list" >
                <div>
                    <h3>Purpose of the loan</h3>
                    <p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
                </div>
            </div>
        </div>
        <div class="dropdown-menu">
            <div class="dropdown-label">
                <p> How long does it take to obtain loan approval?</p>
                <img src="./images/icons/plus.png" alt="+" class="hidden">
            </div>
            <div class="dropdown-list" >
                <div>
                    <h3>Purpose of the loan</h3>
                    <p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
                </div>
            </div>
        </div>
        <div class="dropdown-menu">
            <div class="dropdown-label">
                <p>Can we obtain loans in U.S. dollars?</p>
                <img src="./images/icons/plus.png" alt="+" class="hidden">
            </div>
            <div class="dropdown-list" >
                <div>
                    <h3>Purpose of the loan</h3>
                    <p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
                </div>
            </div>
        </div>
        <div class="dropdown-menu">
            <div class="dropdown-label">
                <p>What is the maximum amount of loan the Bank can provide?</p>
                <img src="./images/icons/plus.png" alt="+" class="hidden">
            </div>
            <div class="dropdown-list" >
                <div>
                    <h3>Purpose of the loan</h3>
                    <p>To increase turnover, support liquidity, fixed assets for business development and increase capacity.</p>
                </div>
            </div>
        </div>


    </div>



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

<script src="./js/rot/app.js"></script>
<script src="./js/plus/app.js"></script>
<script src="./js/rot/app.js"></script>

</body>
</html>

@endsection
