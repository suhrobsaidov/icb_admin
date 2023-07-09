@extends('layouts.tlay')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loans calculator</title>
    <link rel="stylesheet" href="./styles/loanscalc/style.css">
    <link rel="stylesheet" href="./styles/loanscalc/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/loanscalc/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">


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
                            <option value="">USD</option>
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

    <!-- конец -->
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

<script src="./js/lcalc/app.js"></script>
<script src="./js/rot/app.js"></script>
</body>
</html>

@endsection
