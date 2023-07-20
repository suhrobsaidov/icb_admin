@extends('layouts.tlay')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="./hpage/styles/style.css">
    <link rel="stylesheet" href="./hpage/styles/tablet/style-tablet.css">
    <link rel="stylesheet" href="./hpage/styles/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<img src="./images/desktop/background.png" alt="" id='background'>
<div class="container">


    
    <div class="slider-container main" id="sliderContainer">
        <div id="headerslides">
            <div class="main-title">
                <h1>Individual card 'Korti Milli'</h1>
                <p>With the "Корти Милли” card, everything is accessible, easy and always nearby</p>
                <button class="text-container-button">More detailed</button>
            </div>
            <div class="slider-image-contaier">
                <img src="./images/desktop/main-image1.png" alt="" class="main-image">
            </div>
        </div>
        <div id="headerslides">
            <div class="main-title">
                <h1>Consumer loans</h1>
                <p>You meet consumer needs, which in turn affect the quality of life</p>
                <button class="text-container-button">More detailed</button>
            </div>
            <div class="slider-image-contaier">
                <img src="./images/desktop/main-image2.png" alt="" class="main-image">
            </div>
        </div>
        <div id="headerslides">
            <div class="main-title">
                <h1>‘Diyor’ Deposit</h1>
                <p>This product is offered to all individual customers working abroad and interested in saving part of the money they send home</p>
                <button class="text-container-button">More detailed</button>
            </div>
            <div class="slider-image-contaier">
                <img src="./images/desktop/main-image3.png" alt="" class="main-image">
            </div>
        </div>
        <div id="headerslides">
            <div class="main-title">
                <h1>Western union</h1>
                <p>Through the WESTERN UNION system, you can easily make a money transfer around the world.</p>
                <button class="text-container-button">More detailed</button>
            </div>
            <div class="slider-image-contaier">
                <img src="./images/desktop/main-image4.png" alt="" class="main-image">
            </div>
        </div>
    </div>







    <div class="cards-container">
        <div class="cards">
            <!-- 1 -->
            <div class="card">
                <h2>Korti milli</h2>
                <p>With the "Korti Milli” card,
                    everything is accessible,
                    easy and always nearby</p>
            </div>
            <!-- 2 -->
            <div class="card">
                <h2>Consumer credit</h2>
                <p>To meet consumer needs</p>
            </div>
            <!-- 3 -->
            <div class="card">
                <h2>Deposit Account «Diyor»</h2>
                <p>Your money is in safe hands</p>
            </div>
            <!-- 4 -->
            <div class="card">
                <h2>“WESTERN UNION”</h2>
                <p>Get paid in minutes</p>
            </div>
        </div>
    </div>

    <div class="bank-products">
        <h1>Bank products</h1>
        <div class="bank-products-cards">
            <div class="product-card" id="sliderLine">
                <div>
                    <img src="./images/icons/home-bank.png" alt="">
                    <p>Loans</p>
                </div>
                <div>
                    <img src="./images/icons/home-safe.png" alt="">
                    <p>Deposits</p>
                </div>
                <div>
                    <img src="./images/icons/home-cards.png" alt="">
                    <p>Cards</p>
                </div>
                <div>
                    <img src="./images/icons/home-money.png" alt="">
                    <p>Transfers</p>
                </div>
            </div>
        </div>
        <img src="./images/icons/arrow.png" alt="" class="bank-products-arrow">
    </div>

    <div class="mobile-banking-for">
        <img src="./images/desktop/mob-bank-for-back.png" alt="" class="mob-bank-for-back">
        <div class="mobile-banking-for-title">
            <h1>Mobile banking for iOS and Android</h1>
            <p>An easy way to log in to the bank</p>
            <div>
                <img src="./images/icons/APP Store.png" alt="">
                <img src="./images/icons/Play market.png" alt="">
            </div>
        </div>
        <img src="./images/desktop/mob-bank-for-phone.png" alt="" class="mob-bank-for-phone">
    </div>

    <div class="calculators">
        <h1>Calculators</h1>
        <div class="calculators-cards">
            <div class="calc-card">
                <div>
                    <img src="./images/icons/1.png" alt="">
                    <p>Currency calculator</p>
                </div>


                <div>
                    <a href="loanscalc">
                        <img src="./images/icons/calcul-money.png" alt="">
                        <p>Loans calculator</p>
                    </a>
                </div>

                <div>
                    <a href="depositcalc">
                        <img src="./images/icons/safe-box.png" alt="">
                        <p>Deposit calculator</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="currency">
        <h1>Buying and selling currency</h1>
        <div class="currency-converter" id='currencyConverter'>
            <div class="rates-card">
                <div class="rates-card-form">
                    <form action="">
                        <select name="" id="ratesCardSelection" class="rates-card-selection">
                            <option>Exchange rate in internet banking</option>
                            <option>Exchangerate in branches</option>
                            <option>Exchange rate in NBT</option>
                        </select>
                    </form>
                </div>

                <div class="rates-card-table">
                    <table class="first-table">
                        <tr style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                            <th>Currency</th>
                            <th>Sale</th>
                            <th>Purchase</th>
                        </tr>
                        <tr>

                            <td><img src="./images/icons/usa.png" alt="usa.png" style="padding-right: 5px;">USD</td>

                            <td>10.9400</td>
                            <td>10.9100</td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/europe.png" alt="europe.png" style="padding-right: 5px;">EUR</td>

                            <td>11.9500</td>
                            <td>14.3700</td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/russia.png" alt="russia.png" style="padding-right: 5px;">RUB</td>
                            <td>0.1320</td>
                            <td>0.1270</td>
                        </tr>
                    </table>

                    <table class="second-table">
                        <tr style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                            <th>Currency</th>
                            <th>Rate</th>

                        </tr>
                        <tr>
                            <td><img src="./images/icons/usa.png" alt="usa.png" style="padding-right: 5px;">USD</td>
                            <td>12.2010</td>

                        </tr>
                        <tr>
                            <td><img src="./images/icons/europe.png" alt="europe.png" style="padding-right: 5px;">EUR</td>
                            <td>14.3700</td>

                        </tr>

                    </table>
                </div>


            </div>




            <div class="resul-card">
                <h2>Конвертер валют</h2>

                <div class="resul-card-forms">
                    <form action="">
                        <input type="number" step="1" min="1" max="1000000" value="0" id="age" name=""/ class="resul-card-input">
                        <select name="" id="" class="resul-card-selection">
                            <option value="">USD</option>
                        </select>
                    </form>
                    <form action="">
                        <input type="number" step="1" min="1" max="1000000" value="0" id="age" name="" class="resul-card-input" />
                        <select name="" id="" class="resul-card-selection">
                            <option value="">TJS</option>
                        </select>
                    </form>
                </div>

                <a href="#">At the ICB</a>

            </div>

        </div>
    </div>
    <div class="current-offers">
        <h1>Current offers</h1>
        <div class="current-offers-cards">
            <div class="curr-off-card" id="sliderLine">
                <div>
                    <img src="./images/icons/Merchant Account 1.png" alt="">
                    <h1>ICB Account</h1>
                    <p>20% per annum from  the first month</p>
                </div>
                <div>
                    <img src="./images/icons/Merchant Account 2.png" alt="">
                    <h1>ICB - Deposit</h1>
                    <p>18% per annum with a return guarantee</p>
                </div>
                <div>
                    <img src="./images/icons/Merchant Account 3.png" alt="">
                    <h1>Salary ICB - Сard</h1>
                    <p>More than just a cards</p>
                </div>
                <div>
                    <img src="./images/icons/Merchant Account 4.png" alt="">
                    <h1>Protection from scammers</h1>
                    <p>Simple rules on how to save your money</p>
                </div>
            </div>
        </div>
        <img src="./images/icons/arrow.png" alt="" class="bank-products-arrow">
    </div>

    <div class="banner">
        <div class="banner-card">
            <div>
                <h1>Mortgage</h1>
                <p>The rate of 15% in honor of the holiday “Navruz”</p>
                <a href="">The promotion is valid until:May 01, 2022</a>
                <button>leave a request</button>
            </div>
            <img src="./images/desktop/famil.png" alt="">
        </div>
        <div class="banner-card">
            <div>
                <h1>Laptop prank!</h1>
                <p>Subscribe to our instagram,mark us in the story with the hashtag #NotebookfromICB</p>
                <button>Participate</button>
            </div>
            <img src="./images/desktop/laptop.png" alt="">
        </div>
    </div>
    <div class="bank-services">
        <h1>Bank services</h1>
        <div class="bank-services-cards">
            <div class="services-card">
                <!-- 1 -->
                <div class="bank">
                    <img src="./images/icons/bank.png" alt="bank.png">
                    <p>Online banking for legal entities and private entrepreneurs</p>
                </div>
                <!-- 2 -->
                <div class="bank">
                    <img src="./images/icons/card.png" alt="card.png">
                    <p>Transfer from card to card</p>
                </div>
                <!-- 3 -->
                <div class="bank">
                    <img src="./images/icons/atm.png" alt="atm.png">
                    <p>Find the nearest ATM</p>
                </div>
                <!-- 4 -->
                <div class="bank">
                    <img src="./images/icons/bank2.png" alt="bank2.png">
                    <p>Find a branch nearby</p>
                </div>
                <!-- 5 -->
                <div class="bank">
                    <img src="./images/icons/share.png" alt="share.png">
                    <p>Knowledge base</p>
                </div>
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

<script src="./hpage/scripts/app.js"></script>
<script src="./js/slider/app.js"></script>

</body>
</html>

@endsection
