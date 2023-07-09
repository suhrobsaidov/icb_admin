
@extends('layouts.tlay')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/4_th.css">
    <title>Costumer loans ICB-Банк</title>
</head>
<body>

<div class="begin">

    <div class="loan">
        <img src="./images/image 35.png" alt="">
        <h1>Consumer loans
        </h1>
        <p>
            You meet consumer needs, which in turn affect
            the quality of life
        </p>
    </div>

    <div class="card">
        <h1>
            EASY TO GET A LOAN
        </h1>
        <p>
            Secure your money with a well-respected and
            safe local bank so you don’t have to worry about
            storing your cash at home
        </p>
    </div>

    <div class="card-2">
        <h1>
            EASY ACCESS
        </h1>
        <p>
            Easy access to your funds at any ICB Branches
            or Banking Service Centers across Tajikistan
        </p>
    </div>

    <div class="card-3">
        <h1>
            NO FEES FOR DEPOSIT
        </h1>
        <p>
            No fees for deposit, withdrawal, and transfer of
            fundsfrom your account to another ICB account
        </p>
    </div>
</div>
<details>
    <summary>
        <div class="p-term">
            <img src="./images/+.png" alt="">
            <h1>
                Product terms
            </h1>
        </div>
    </summary>

    <div class="purpose">
        <h3>
            Purpose of the loan
        </h3>
        <p>
            To meet consumer needs, which in turn affect the quality of life. For example: the purchase of household items, payment for
            tuition, treatment, social events, travel, etc.
        </p>
        <hr>
    </div>

    <div class="terms">
        <h3>
            Terms
        </h3>
        <p class="term-1">
            Loan amount: up to 15,000 USD (and it’s equivalent in TJS);
        </p>
        <p class="term-2">
            Maturity: up to 48 months;
        </p>
        <p class="term-3">
            Currency: TJS and USD;
        </p>
        <p class="term-4">
            Grace period: 1 month;
        </p>
        <hr>
    </div>

    <div class="currency">
        <h3>
            Currency
        </h3>
        <p>
            TJS,USD
        </p>
        <hr>
    </div>

    <div class="security">
        <h3>
            Loan security
        </h3>
        <p class="security-1">
            Up to 2,000 USD (and it’s equivalent in TJS) without collateral and without a guarantor;
        </p>
        <p class="security-2">
            Up to US $ 3,000 (TJS equivalent) without collateral and guarantor for repeat and exemplary clients;
        </p>
        <p class="security-3">
            Up to 5,000 USD (and it’s equivalent in TJS) movable collateral and 1 guarantor;
        </p>
        <p class="security-4">
            Above 5,000 USD (and equivalent in TJS) real estate and 1 guarantor.
        </p>
        <hr>
    </div>

    <div class="add">
        <h3>
            Additional term
        </h3>
        <p>
            For entrepreneurs and farmers up to 10,000 USD (and it’s equivalent in TJS) movable collateral and 1 guarantor;
        </p>
        <hr>
    </div>
    <div class="tariff">
        <h3>
            Banking tariffs
        </h3>
        <p>
            For information about banking tariffs on this product, please see the <a href="#">table here</a>
        </p>

        <hr>
    </div>
</details>

<div class="deposit_calculator">
    <h1>Loans calculator</h1>
</div>
<div class="tablets">
    <div class="first_tablet">
        <p><strong>Type of loan</strong></p>
        <details>
            <summary class="dep_summary"><p>Consumer credit</p> <img src="./img/Expand Arrow.png" alt=""></summary>
        </details>
        <p><strong>Currency</strong></p>
        <details>
            <summary class="dep_summary"><p>TJS</p> <img src="./img/Expand Arrow.png" alt=""></summary>
        </details>
        <p><strong>Loan amount</strong></p>
        <input required type="number" class="dep_amount" placeholder="100 000smn">
        <div class="money">
            <p>1000 smn</p>
            <p>200000 smn</p>
        </div>
        <p><strong>Loan term</strong></p>
        <input required type="number" class="dep_amount" placeholder="3 years">
        <div class="money">
            <p>from 3 month</p>
            <p>4 years</p>
        </div>
    </div>
    <div class="second_tablet">
        <p class="int_rate">Interest rate</p>
        <h2 class="procent">24,5 %</h2>
        <div class="main_liner">
            <hr>
        </div>
        <div class="amount_at_end">
            <p>Monthly payment</p>
            <h2>1 760 смн</h2>
        </div>
    </div>
</div>
<div class="deposit_calculator">
    <h1>Online loan applications</h1>
</div>
<div class="filling_blanks">
    <div class="su_na_mi">
        <div class="name">
            <p>Surname</p>
            <input required type="text" class="phb_inp">
        </div>
        <div class="name">
            <p>Name</p>
            <input required type="text" class="phb_inp">
        </div>
        <div class="name">
            <p>Middle name</p>
            <input required type="text" class="phb_inp">
        </div>
    </div>
    <div class="su_na_mi">
        <div class="name">
            <p>E-mail</p>
            <input required type="text" class="phb_inp">
        </div>
        <div class="name">
            <p>Phone number</p>
            <input required type="number" class="phb_inp">
        </div>
        <div class="name">
            <p>Additional phone number</p>
            <input required type="number" class="phb_inp">
        </div>
    </div>
    <div class="lo_lo_lo">
        <div class="name">
            <p>Loan products</p>
            <details>
                <summary class="loany_summary"><p>Business Loans</p> <img src="./images/Chevron Up.png" alt=""></summary>
            </details>
        </div>
        <div class="name">
            <p>Loan currency</p>
            <details>
                <summary class="loany_summary"><p>Somoni</p> <img src="./images/Chevron Up.png" alt=""></summary>
            </details>
        </div>
        <div class="name">
            <p>Loan amount</p>
            <details>
                <summary class="loany_summary"><p></p> <img src="" alt=""></summary>
            </details>
        </div>
        <div class="name">
            <p>Loan term</p>
            <details>
                <summary class="loany_summary"><p>3 month</p> <img src="./images/Chevron Up.png" alt=""></summary>
            </details>
        </div>
    </div>
    <div class="lo_lo_lo">
        <div class="name">
            <p>Loan purpose</p>
            <input required type="text" class="loanpurpose">
        </div>

        <div class="name">
            <p>Occupation</p>
            <input required type="text" class="loanpurpose">
        </div>
    </div>
    <div class="su_na_mi">
        <div class="name">
            <p>City/District</p>
            <input required type="text" class="phb_inp">
        </div>
        <div class="name">
            <p>Region</p>
            <input required type="text" class="phb_inp">
        </div>
        <div class="name">
            <p>Address, where registered</p>
            <input required type="text" class="phb_inp">
        </div>
    </div>
    <div class="su_na_mi">
        <div class="name">
            <p>Monthly family income</p>
            <input required type="text" class="phb_inp">
        </div>
        <div class="name">
            <p>Branch</p>
            <details>
                <summary class="popany_summary"><p>Dushanbe branch</p> <img src="./images/Chevron Up.png" alt=""></summary>
            </details>
        </div>
        <div class="name">
            <p>Phone numbers for additional information</p>
            <details>
                <summary class="popany_summary"><p>Dushanbe-</p> <img src="./images/Chevron Up.png" alt=""></summary>
            </details>
        </div>

    </div>
    <div class="su_na_miyav">
        <div class="name">
            <p><strong>Please, attach your photo</strong></p>
            <div class="choose_file">
                <a href="#"><img src="./images/2.png" alt=""></a>
            </div>
        </div>
        <div class="name">
            <p><strong>Please, attach your passport copy</strong></p>
            <div class="choose_file">
                <a href="#"><img src="./images/2.png" alt=""></a>
            </div>
        </div>
        <div class="name">
            <p><strong>Please, attach otheer documents</strong></p>
            <div class="choose_file">
                <a href="#"><img src="./images/2.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="i_agree">
        <input required type="checkbox">
        <p>I agree with the terms of personal data processing</p>
    </div>
    <div class="leave_req">
        <button class="livreq">Leave a request</button>
    </div>
</div>
<div class="deposit_calculator">
    <h1>Frequently asked questions</h1>
</div>
<details class="detaaails">
    <summary class="sumaary"><p>Where can I get information about credit products of CJSC “The First Microfinance Bank”?</p> <img src="./images/+.png" alt=""></summary>
    <ul>
        <li>
            Information can be obtained at the nearest branches and banking service centres (BSCs) or by calling any of our
            <br> branches in your area. See Branch Network for a list of our branches and BSCs along with their contact information.
        </li>
    </ul>
</details>
<details class="detaaails">
    <summary class="sumaary"><p>Which credit products do you offer?</p> <img src="./images/+.png" alt=""></summary>
    <ul>
        <li>
            Information can be obtained at the nearest branches and banking service centres (BSCs) or by calling any of our
            <br> branches in your area. See Branch Network for a list of our branches and BSCs along with their contact information.
        </li>
    </ul>
</details>
<details class="detaaails">
    <summary class="sumaary"><p>What is the term of various products you offer?</p> <img src="./images/+.png" alt=""></summary>

    <ul>
        <li>
            Information can be obtained at the nearest branches and banking service centres (BSCs) or by calling any of our
            <br> branches in your area. See Branch Network for a list of our branches and BSCs along with their contact information.
        </li>
    </ul>
</details>
<details class="detaaails">
    <summary class="sumaary"><p>How long does it take to obtain loan approval?</p> <img src="./images/+.png" alt=""></summary>
    <ul>
        <li>
            Information can be obtained at the nearest branches and banking service centres (BSCs) or by calling any of our
            <br> branches in your area. See Branch Network for a list of our branches and BSCs along with their contact information.
        </li>
    </ul>
</details>
<details class="detaaails">
    <summary class="sumaary"><p>Can we obtain loans in U.S. dollars?</p> <img src="./images/+.png" alt=""></summary>
    <ul>
        <li>
            Information can be obtained at the nearest branches and banking service centres (BSCs) or by calling any of our
            <br> branches in your area. See Branch Network for a list of our branches and BSCs along with their contact information.
        </li>
    </ul>
</details>
<details class="detaaails">
    <summary class="sumaary"><p>What is the maximum amount of loan the Bank can provide?</p> <img src="./images/+.png" alt=""></summary>
    <ul>
        <li>
            Information can be obtained at the nearest branches and banking service centres (BSCs) or by calling any of our
            <br> branches in your area. See Branch Network for a list of our branches and BSCs along with their contact information.
        </li>
    </ul>
</details>
<div class="bank_services">
    <h2>Bank services</h2>
</div>
<div class="bankservice_cards">
    <div class="cardes">
        <img src="./images/image 14.png" alt="">
        <p>Online banking for <br> legal entities and <br> private enterpreneurs</p>
    </div>
    <div class="cardes">
        <img src="./images/Card Exchange.png" alt="">
        <p>Transfer from card <br> to card</p>
    </div>
    <div class="cardes">
        <img src="./images/ATM.png" alt="">
        <p>Find the nearest <br> ATM</p>
    </div>
    <div class="cardes">
        <img src="./images/bank.png" alt="">
        <p>Find a branch <br> nearby</p>
    </div>
    <div class="cardes">
        <img src="./images/Knowledge Sharing.png" alt="">
        <p>Knowledge base</p>
    </div>

</div>

</body>


</html>
<style>
    body {
        height: 100vh;
    }


    .Language img {
        display: flex;
        max-width: 20px;
        max-height: 20px;
    }

    .begin{
        width: 100%;
        height: 70%;
        background: linear-gradient(90deg, rgba(0, 209, 255, 0.1) 0%, rgba(219, 0, 17, 0.1) 100%);

    }
    .begin img{
        width: 160px;
        height: 65px;
        margin-left: 120px;
    }

    .begin h1{
        margin-top:-52px;
        margin-left: 285px;
        font-size:9.3px;
        line-height: 10px;
        font-family: 'Montserrat';
        color: #DB0011;
    }
    .begin hr {
        margin-left:-1px;
        margin-top:2px;
        width: 63px;
        border: 1px solid #DB0011;
    }
    .begin p{

        margin-top:-21px;
        margin-left: 366px;
        font-family: 'Montserrat';
        font-size: 10px;

        color: #000000;
    }

    .menu_bar ul {
        list-style: none;
        display: flex;

    }

    .menu_bar ul li {
        padding: 20px 30px;
        position: relative;
    }
    .first {
        margin-top:-26px ;
        margin-left:220px ;
    }
    .second {
        margin-top:-26px;
        margin-left:-50px ;
    }
    .third {
        margin-top:-26px;
        margin-left:-50px;
    }

    .forth {
        margin-top:-26px;
        margin-left:-50px ;
    }
    .fifth {
        margin-top:-26px ;
        margin-left:-50px;
    }


    .menu_bar ul li a {
        color: black;
        text-decoration: none;
        font-size: 12px;

    }
    .Search-2{
        position: absolute;
        top:32px;
        margin-left:730px;
        width: 300px;
        height:25px;

        background-color:#ffffff;
        border-radius: 10px;
        border: 2px solid rgba(0,0,0,0.15);
    }
    .Search img {

        display: flex;
        margin-top:-70px;
        margin-left: 1010px;
        width:10px;
        height:10px;
    }

    .Banking {
        position: absolute;
        width: 160px;
        height: 35px;
        top:30px;
        margin-left:1100px;

        background: #DB0011;
        border-radius: 10px;
    }
    .Banking p {
        width: 129px;
        height: 20px;
        margin-left: 26px;
        margin-top: 8px;

        font-weight: 600;
        font-size: 16px;
        line-height: 20px;

        color: #FFFFFF;
    }

    .loan img{
        margin-left:750px;
        width:400px;
        height: 300px;
    }
    .loan h1 {
        width: 384px;
        height: 60px;
        margin-top: -190px;
        margin-left:170px;

        font-size: 42px;
        color: #000000;
    }
    .loan p{
        margin-top:-35px;
        margin-left:170px;
        width:350px;
        height: 44px;

        font-size: 18px;
        color: #000000;
    }
    .card{
        width: 320px;
        height: 150px;
        margin-top:150px;
        margin-left:180px;
        background: #FFFFFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(67px);

        border-radius: 10px;
    }

    .card h1 {
        position: absolute;
        top:80px;
        left:-265px;
        width: 220px;
        height: 20px;

        font-size: 13px;

        color: #DB0011;
    }
    .card p {
        position: absolute;
        top:85px;
        margin-left:20px;

        width: 233px;
        height: 57px;
        font-size: 12px;
        line-height: 19px;

        color: #000000;
    }

    .card-2{
        width: 320px;
        height: 150px;
        margin-top:-150px;
        margin-left:530px;
        background: #FFFFFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(67px);

        border-radius: 10px;
    }

    .card-2 h1 {
        position: absolute;
        top:80px;
        left:-265px;
        width: 220px;
        height: 20px;

        font-size: 13px;

        color: #DB0011;
    }
    .card-2 p {
        position: absolute;
        top:85px;
        margin-left:20px;

        width: 233px;
        height: 57px;
        font-size: 12px;
        line-height: 19px;

        color: #000000;
    }

    .card-3{
        width: 320px;
        height: 150px;
        margin-top:-150px;
        margin-left:880px;
        background: #FFFFFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(67px);

        border-radius: 10px;
    }

    .card-3 h1 {
        position: absolute;
        top:80px;
        left:-265px;
        width: 220px;
        height: 20px;

        font-size: 13px;

        color: #DB0011;
    }
    .card-3 p {
        position: absolute;
        top:85px;
        margin-left:20px;

        width: 233px;
        height: 57px;
        font-size: 12px;
        line-height: 19px;

        color: #000000;
    }

    summary{
        list-style: none;
    }

    .p-term{
        box-sizing: border-box;

        width: 1100px;
        height: 60px;
        margin-left:142px;
        margin-top:160px;

        background: rgba(219, 0, 17, 0.1);
        border: 1px solid rgba(219, 0, 17, 0.1);
        box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.15);
        border-radius: 10px;
    }
    .p-term img{
        width: 30px;
        height: 30px;
        margin-top:14px;
        margin-left:1030px;
    }
    .p-term h1{
        margin-top:-35px;
        margin-left: 25px;
        font-size: 30px;

        color: #000000;


    }

    .purpose h3{
        margin-left:168px;
        width: 199px;
        height: 30px;
        font-size: 24px;

        color: #000000;
    }
    .purpose p{
        margin-left: 168px;
        margin-top:-17px;
        width:1000px;
        height: 60px;

        font-size: 20px;

        color: #000000;

    }
    .purpose hr{
        width: 1110px;
        height: 0px;
        margin-left:140px;


        border: 1px solid rgba(219, 0, 17, 0.1);
    }

    .terms{
        margin-left: 168px;
        line-height:90%;
    }
    .terms h3{
        margin-left:-3px;
        font-size: 24px;
        color: #000000;
    }
    .term-1{
        font-size: 23px;
        width:600px;
    }
    .term-2{
        font-size: 23px;
        width:600px;
    }
    .term-3{
        font-size: 23px;
        width:600px;
    }
    .term-4{
        font-size: 23px;
        width:600px;
    }
    .terms hr{
        width: 1110px;
        height: 0px;
        margin-left:-25px;

        border: 1px solid rgba(219, 0, 17, 0.1);
    }
    .currency h3{
        margin-left:165px;
        font-size: 24px;
        color: #000000;
    }
    .currency P{
        font-size: 23px;
        margin-left:165px;
        margin-top: -15px;
    }
    .currency hr{
        width: 1110px;
        height: 0px;
        margin-left:145px;

        border: 1px solid rgba(219, 0, 17, 0.1);
    }
    .security{
        margin-left:165px;
        line-height:15px;
    }

    .security h3{
        margin-left:0px;
        font-size: 24px;
        color: #000000;
    }
    .security-1{
        font-size: 23px;
        width:1000px;
    }
    .security-2{
        font-size: 23px;
        width:1000px;
    }
    .security-3{
        font-size: 23px;
        width:1000px;
    }
    .security-4{
        font-size: 23px;
        width:1000px;
    }
    .security hr{
        width: 1110px;
        height: 0px;
        margin-left:-25px;

        border: 1px solid rgba(219, 0, 17, 0.1);
    }

    .add h3{
        margin-left:165px;
        font-size: 24px;
        color: #000000;
    }
    .add P{
        font-size: 23px;
        margin-left:165px;
        margin-top: -15px;
    }
    .add hr{
        width: 1110px;
        height: 0px;
        margin-left:145px;

        border: 1px solid rgba(219, 0, 17, 0.1);
    }
    .tariff h3{
        margin-left:165px;
        font-size: 24px;
        color: #000000;
    }
    .tariff P{
        font-size: 23px;
        margin-left:165px;
        margin-top: -15px;
    }

    .tariff a{
        color: #DB0011;
    }

    .tariff hr{
        width: 1110px;
        height: 0px;
        margin-left:145px;

        border: 1px solid rgba(219, 0, 17, 0.1);
    }

    .start h1{
        margin-top:90px;
        margin-left:520px;
        width: 358px;
        height: 52px;
        font-size:40px;

        color: #000000;
    }
    .deposit_calculator{
        margin-top: 40px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .tablets{
        display: flex;
    }


    .first_tablet{
        padding-top: 20px;
        margin-left: 230px;
        height: 500px;
        width: 550px;
        border-radius: 15px;
        box-shadow: 0px 0px 5px 0px rgb(177, 177, 177);
        background-color: #fff;
    }
    .first_tablet p{
        margin-left: 30px;
    }

    .dep_summary{
        margin-left: 30px;
        height: 50px;
        width: 480px;
        background-color: rgba(241, 241, 241, 0.8);
        display: flex;
        align-items: center;
        gap: 210px;
        border-radius: 10px 10px 0px 0px;
    }
    .dep_summary p{
        font-size: 15px;
        width: 200px;
    }

    .dep_amount{
        font-size: 15px;
        padding-left: 20px;
        margin-left: 30px;
        height: 48px;
        width: 460px;
        background-color: rgba(241, 241, 241, 0.8);
        border: none;
        border-radius: 10px 10px 0px 0px;
    }

    .money{
        margin-top: -10px;
        display: flex;
        align-items: center;
        font-size: 13px;
        gap: 330px;
    }
    .buttons-1{
        margin-left: 30px;
        display: flex;
        align-items: center;
        gap: 30px;
    }
    .buttons-2{
        margin-left: 30px;
        display: flex;
        align-items: center;
        gap: 25px;
    }
    .tri-month{
        height: 40px;
        width: 90px;
        font-size: 15px;
        border-radius: 10px;
        border: none;
    }
    .sri-month{
        margin-top: 15px;
        height: 40px;
        width: 70px;
        font-size: 13px;
        border-radius: 10px;
        border: none;
    }
    .tri-month:hover{
        color: #fff;
        background-color: black;
        transition: 0.3s;
    }
    .sri-month:hover{
        color: #fff;
        background-color: black;
        transition: 0.3s;
    }

    .second_tablet{
        margin-left: 40px;
        height: 250px;
        width: 400px;
        border-radius: 15px;
        box-shadow: 0px 0px 5px 0px rgb(177, 177, 177);
        background-color: #fff;
    }
    .int_rate{
        margin-left: 150px;
        font-size: 20px;
    }
    .procent{
        margin-left: 175px;
        font-size: 30px;
    }
    .main_liner{
        margin-left: 50px;
        width: 300px;
    }
    .amount_at_end{
        margin-bottom: -20px;
        margin-left: 25px;
        display: flex;
        align-items: center;
        gap: 130px;
    }
    .deposit_income{
        margin-left: 25px;
        display: flex;
        align-items: center;
        gap: 120px;
    }


    .filling_blanks{
        padding-top: 20px;
        margin-left: 230px;
        height: 1000px;
        width: 1000px;
        border-radius: 15px;
        box-shadow: 0px 0px 5px 0px rgb(177, 177, 177);
        background-color: #fff;
    }
    .su_na_mi{
        justify-content: center;
        align-items: center;
        display: flex;
        gap: 20px;
    }
    .su_na_miyav{
        margin-top: 40px;
        margin-bottom: 40px;
        margin-left: 30px;
        justify-content: flex-start;
        display: flex;
        align-items: center;
        gap: 30px;
    }
    .choose_file {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 180px;
        width: 240px;
        background-color: rgb(236, 236, 236);
        border-radius: 10px;
    }
    .phb_inp{
        height: 48px;
        width: 300px;
        background-color: rgba(241, 241, 241, 0.8);
        border: none;
        border-radius: 10px 10px 0px 0px;
    }
    .loanpurpose{
        height: 80px;
        width: 465px;
        background-color: rgba(241, 241, 241, 0.8);
        border: none;
        border-radius: 10px 10px 0px 0px;
    }
    .name p{
        margin-bottom: 10px;
    }
    .lo_lo_lo{
        justify-content: center;
        align-items: center;
        display: flex;
        gap: 25px;
    }
    .loany_summary{
        padding-left: 20px;
        height: 50px;
        width: 200px;
        gap: 50px;
        background-color: rgba(241, 241, 241, 0.8);
        display: flex;
        align-items: center;
        border-radius: 10px 10px 0px 0px;
    }
    .popany_summary{
        padding-left: 20px;
        height: 48px;
        width: 292px;
        gap: 160px;
        background-color: rgba(241, 241, 241, 0.8);
        display: flex;
        align-items: center;
        border-radius: 10px 10px 0px 0px;
    }

    .loany_summary p{
        width: 120px;
    }

    .i_agree{
        display: flex;
        align-items: center;
        margin-left: 20px;
        margin-top: 20px;
    }
    .i_agree p{
        margin-left: 20px;
        font-size: 13px;
        color: rgb(215, 0, 0);
    }
    .leave_req{
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-right: 20px;
    }
    .livreq{
        height: 30px;
        width: 150px;
        border-radius: 10px;
        border: none;
        background-color: rgb(215, 0, 0);
        color: #fff;
        box-shadow: 0px 0px 5px 0px rgb(215, 0, 0);
    }

    .detaaails[open] img{
        transform: rotate(45deg);
        transition: 0.2s;
    }
    .detaaails ul{
        margin-left: 240px;
    }
    .detaaails ul p{
        margin-left: -20px;
    }
    .sumaary{
        padding-left: 50px;
        margin-left: 200px;
        gap: 340px;
        margin-top: 10px;
        display: flex;
        align-items: center;
        height: 70px;
        width: 1100px;
        background-color: rgb(255, 226, 226);
        border-radius: 10px;
        border: 1px solid rgba(219, 0, 17, 0.1);
        box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.15);
    }
    .sumaary p{
        width: 700px;
        font-size: 23px;
    }


    .bank_services{
        font-size: 25px;
        margin-top: 80px;
        margin-left: 200px;
    }
    .bankservice_cards{
        gap: 65px;
        display: flex;
        justify-content: center;
        margin-left: 50px;
    }
    .cardes{
        height: 150px;
        width: 180px;
        border-radius: 15px;
        box-shadow: 0px 0px 5px 0px rgb(177, 177, 177);
        background-color: #fff;
    }
    .cardes img{
        margin-top: 15px;
        margin-left: 15px;
    }
    .cardes p{
        margin-left: 15px;
    }
    .cardes:hover{
        background-color: rgb(240, 240, 240);
        color: rgb(215, 0, 0);
        transition: 0.3s;
    }

</style>


@endsection
