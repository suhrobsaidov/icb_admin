


@extends('layouts.tlay')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="./styles/contacts/style.css">
    <link rel="stylesheet" href="./styles/contacts/tablet/style-tablet.css">
    <link rel="stylesheet" href="./styles/contacts/mobile/style-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="container">


    <!-- начало -->

    <div class="contacts">
        <h1>Contacts</h1>
        <div class="contacts-input">
            <div class="contacts-input-contact">
                <h3>Contact information</h3>
                <div>
                    <img src="./images/icons/Phonebig.png" alt="Phonebig.png">
                    <div>
                        <p>Phone:</p>
                        <p>(+992) 37 227-91-70, 227-91-71</p>
                    </div>
                </div>
                <div>
                    <img src="./images/icons/Mail.png" alt="Mail.png">
                    <div>
                        <p>E-mail:</p>
                        <p>info@icb.tj</p>
                    </div>
                </div>
                <div>
                    <img src="./images/icons/Locationbig.png" alt="Locationbig.png">
                    <div>
                        <p>Address:</p>
                        <p>Dushanbe, Pushkin str., 10</p>
                    </div>
                </div>
                <div>
                    <img src="./images/icons/Clockbig.png" alt="Clockbig.png">
                    <div>
                        <p>Operating mode:</p>
                        <p>Mon-Fri (08:00-17:00)</p>
                    </div>
                </div>
                <div class="social">
                    <img src="./images/icons/Instagram.png" alt="Instagram.png">
                    <img src="./images/icons/Facebook.png" alt="Facebook.png">
                    <img src="./images/icons/Telegram.png" alt="Telegram.png">
                    <img src="./images/icons/Twitter.png" alt="Twitter.png">
                    <img src="./images/icons/LinkedIn.png" alt="LinkedIn.png">
                </div>
            </div>

            <div class="contacts-input-feedback">
                <h3>Feedback</h3>
                <h2>Do you still have questions?</h2>
                <p>Leave a request on our website and we will respond to you within 24 hours.</p>
                <form action="">
                    <input type="text" placeholder="Name"></input>
                    <input type="text" placeholder="Surname"></input>
                    <input type="email" placeholder="E-mail"></input>
                    <input type="number" placeholder="Phone"></input>
                    <textarea name="" id="" cols="30" rows="5" placeholder="Question"></textarea>
                    <button>Send</button>
                </form>
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

