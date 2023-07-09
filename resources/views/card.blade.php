@extends('layouts.tlay' )
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Cards</title>
    <link rel="stylesheet" href="./styles/bcard/style.css">
    <link rel="stylesheet" href="./styles/bcard/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/bcard/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">
{{--    <div class="header">--}}
{{--        <div class="header-icons">--}}
{{--            <a href="#"><img src="./images/icons/tj.png" alt="tj"></a>--}}
{{--            <a href="#"><img src="./images/icons/rus.png" alt="rus"></a>--}}
{{--            <a href="#"><img src="./images/icons/eng.png" alt="eng"></a>--}}

{{--        </div>--}}
{{--        <div class="header-logo-and-menu">--}}
{{--            <a href="#"><img src="./images/desktop/logo.png" alt="Logo" class="logo"></a>--}}

{{--            <div class="header-menu">--}}
{{--                <div class="header-menu-one">--}}
{{--                    <ul>--}}
{{--                        <a href="#">INDIVIDUALS</a>--}}
{{--                        <a href="#">LEGAL ENTITIES</a>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="header-menu-two">--}}
{{--                    <ul>--}}
{{--                        <a href="#">Loans</a>--}}
{{--                        <a href="#">Deposits</a>--}}
{{--                        <a href="#">Cards</a>--}}
{{--                        <a href="#">Online Services</a>--}}
{{--                        <a href="#">More</a>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="header-input-and-button">--}}
{{--            <input required type="search" placeholder="Search">--}}
{{--            <button>Mobile banking</button>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="main">
        <div class="main-title">
            <h1>Bank Cards</h1>
            <p>ICB offers bank cards to provide customers with easier access to their funds via our network of ATMs while also enabling customers to make cashless  payments at several stores across Tajikistan.</p>
        </div>

        <img src="./images/desktop/main6.png" alt="" class="main-image">
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



    <div class="big-cards">
        <!-- 1 -->
        <div class="savings-account">
            <img src="./images/desktop/card1.png" alt="card1.png">
            <div class="savings-account-content">
                <h1>Korti Milli</h1>
                <p>The product is designed to provide customers with a safe space to keep their money, accumulate savings and use the savings as needed.</p>
                <div class="account-content-table">
                    <div>
                        <h3>Free </h3>
                        <p>release and maintenance</p>
                    </div>
                    <div>
                        <h3>0% commission</h3>
                        <p>purchase of goods and services</p>
                    </div>
                    <div>
                        <h3>24/7</h3>
                        <p>works without problems</p>
                    </div>
                </div>
                <div class="account-content-button">
                    <p>More detailed</p>
                    <button>Make a deposit </button>
                </div>

                <div class="account-content-table-mobile">
                    <div class="account-content-table-mobile-one">
                        <div>
                            <h3><img src="./images/icons/red.png" alt=""> Free </h3>
                            <p>release and maintenance</p>
                        </div>
                        <div>
                            <h3><img src="./images/icons/red.png" alt=""> 0% commission</h3>
                            <p>purchase of goods and services</p>
                        </div>
                    </div>

                    <div class="account-content-table-mobile-two">
                        <div>
                            <h3><img src="./images/icons/red.png" alt=""> 24/7</h3>
                            <p>works without problems</p>
                        </div>
                        <div class="account-content-table-mobile-two-button">
                            <button>Get a loan</button>
                            <p>More details</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- 2 -->
        <div class="savings-account">
            <img src="./images/desktop/card2.png" alt="card2.png">
            <div class="savings-account-content">
                <h1>Visa (Classic)</h1>
                <p>This product is offered to all individual customers, who wish to save money for a period of time at high-interest rates.</p>
                <div class="account-content-table">
                    <div>
                        <h3>Free </h3>
                        <p>release and maintenance</p>
                    </div>
                    <div>
                        <h3>24/7</h3>
                        <p>access to your accounts worldwide</p>
                    </div>
                    <div>
                        <h3>3D</h3>
                        <p>security protection</p>
                    </div>
                </div>
                <div class="account-content-button">
                    <p>More detailed</p>
                    <button>Make a deposit </button>
                </div>
                <div class="account-content-table-mobile">
                    <div class="account-content-table-mobile-one">
                        <div>
                            <h3><img src="./images/icons/red.png" alt=""> Free </h3>
                            <p>release and maintenance</p>
                        </div>
                        <div>
                            <h3><img src="./images/icons/red.png" alt=""> 0% commission</h3>
                            <p>purchase of goods and services</p>
                        </div>
                    </div>

                    <div class="account-content-table-mobile-two">
                        <div>
                            <h3><img src="./images/icons/red.png" alt=""> 24/7</h3>
                            <p>works without problems</p>
                        </div>
                        <div class="account-content-table-mobile-two-button">
                            <button>Get a loan</button>
                            <p>More details</p>
                        </div>
                    </div>
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
{{--<footer>--}}
{{--    <div class="footer-container">--}}
{{--        <!-- 1 -->--}}
{{--        <div class="footer-first-block">--}}
{{--            <!-- 1 -->--}}
{{--            <div>--}}
{{--                <h3>Individuals</h3>--}}
{{--                <ul>--}}
{{--                    <a href="#">Cards</a>--}}
{{--                    <a href="#">Loans</a>--}}
{{--                    <a href="#">Deposits</a>--}}
{{--                    <a href="#">Money transfers</a>--}}
{{--                    <a href="#">Mobile banking</a>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- 2 -->--}}
{{--            <div>--}}
{{--                <h3>Legal entities</h3>--}}
{{--                <ul>--}}
{{--                    <a href="#">Loans</a>--}}
{{--                    <a href="#">Term deposits</a>--}}
{{--                    <a href="#">Current account</a>--}}
{{--                    <a href="#">Salary projects</a>--}}
{{--                    <a href="#">Corporate card</a>--}}
{{--                    <a href="#">Acquiring</a>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- 3 -->--}}
{{--            <div>--}}
{{--                <h3>Legal entities</h3>--}}
{{--                <ul>--}}
{{--                    <a href="#">About the bank</a>--}}
{{--                    <a href="#">Job openings</a>--}}
{{--                    <a href="#">Contacts</a>--}}
{{--                    <a href="#">Documents</a>--}}
{{--                    <a href="#">News</a>--}}
{{--                    <a href="#">FAQ</a>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- 4 -->--}}
{{--            <div >--}}
{{--                <h3>Contacts</h3>--}}
{{--                <ul id="contacts">--}}
{{--                    <a href="#"><img src="./images/icons/Phone.png" alt="Phone.png"> +992 37 227-91-70, 227-91-71</a>--}}
{{--                    <a href="#"><img src="./images/icons/Envelope.png" alt="Envelope.png"> info@icb.tj</a>--}}
{{--                    <a href="#"><img src="./images/icons/Location.png" alt="Location.png"> Dushanbe, Pushkin str., 10</a>--}}
{{--                    <a href="#"><img src="./images/icons/Clock.png" alt="Clock.png"> Mon-Fri (08:00-17:00)</a>--}}
{{--                    <a href="#"> Call center : 909 </a>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- 2 -->--}}
{{--        <div class="footer-second-block">--}}
{{--            <div class="footer-second-block-one">--}}
{{--                <p>CJSC  and Credit Bank is a member of the individual Savings insurance Fund.</p>--}}
{{--                <p>The certificate was issued on September 20, 2011.</p>--}}
{{--            </div>--}}

{{--            <div class="footer-second-block-two">--}}
{{--                <div>--}}
{{--                    <p class="apps">Mobile banking : <img src="./images/icons/guglplay.png" alt="guglplay.png"> <img src="./images/icons/appstore.png" alt="appstore.png"></p>--}}
{{--                </div>--}}
{{--                <div class="social">--}}
{{--                    <img src="./images/icons/Instagram.png" alt="Instagram.png">--}}
{{--                    <img src="./images/icons/Facebook.png" alt="Facebook.png">--}}
{{--                    <img src="./images/icons/Telegram.png" alt="Telegram.png">--}}
{{--                    <img src="./images/icons/Twitter.png" alt="Twitter.png">--}}
{{--                    <img src="./images/icons/LinkedIn.png" alt="LinkedIn.png">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- 3 -->--}}
{{--        <div class="footer-third-block">--}}
{{--            <p><img src="./images/icons/Copyright.png" alt="Copyright.png" class="copyright">2011-2022. CJSC Investment and Credit Bank CJSC, official website.</p>--}}
{{--            <p>Developed by : WebDushanbe</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
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

<script></script>
</body>
</html>

@endsection
