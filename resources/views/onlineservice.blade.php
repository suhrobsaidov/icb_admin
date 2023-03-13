<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/3_rd.css">
    <title>3_rd ICB-Банк</title>
</head>
<body>
<div class="begin">
    <img src="./images/Логотип.png" alt="">
    <h1>
        <strong>INDIVIDUALS</strong>
        <hr>
    </h1>
    <p>
        LEGAL ENTITIES
    </p>


    <div class="menu_bar">
        <ul>
            <li class="first"><a href="#">Loans</a></li>
            <li class="second"><a href="#">Deposits</a></li>
            <li class="third"><a href="#">Cards</a></li>
            <li class="forth"><a href="#">Online Services</a><hr></li>
            <li class="fifth"><a href="#">More</a></li>
        </ul>
    </div>

    <div class="Search">
        <img src="./images/Search.png" alt="">
        <input type="text" placeholder="Search" class="Search-2">
    </div>

    <div class="Banking">
        <p>
            Mobile banking
        </p>
    </div>

    <div class="lin">
        <img src="./images/Line 18.png" alt="">
    </div>

    <div class="Language">
        <img src="./images/Tajik.png" alt="">
        <img src="./images/Russian.png" alt="">
        <img src="./images/Britain.png" alt="">
    </div>

    <div class="Service">
        <h2>
            Online Services
        </h2>
        <p>
            Access to money anywhere in the world
        </p>
    </div>

    <div class="cards">
        <img src="./images/clipart1386174 1.png" alt="">
        <hr>
        <h3>
            Mobile banking
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Magni quam sunt magnam temporibusaliquam
            nulla vel, nisi non quo voluptate. Ipsa placeat nesciunt,
            explicabo vitae ratione voluptas expedita cum assumenda?
        </p>
    </div>
    <div class="cards-2">
        <img src="./images/image 41.png" alt="">
        <hr>
        <h3>
            Online banking
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Magni quam sunt magnam temporibusaliquam
            nulla vel, nisi non quo voluptate. Ipsa placeat nesciunt,
            explicabo vitae ratione voluptas expedita cum assumenda?
        </p>
    </div>

    <div class="cards-3">
        <img src="./images/image 42.png" alt="">
        <hr>
        <h3>
            Online applications
        </h3>
        <p>
            Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Magni quam sunt magnam temporibusaliquam
            nulla vel, nisi non quo voluptate. Ipsa placeat nesciunt,
            explicabo vitae ratione voluptas expedita cum assumenda?
        </p>
    </div>

    <footer>
        <table>
            <tr>
                <th>Individuals</th>
                <th>legal entities</th>
                <th>About us</th>
                <th>Contacts</th>
            </tr>
            <tr>
                <td>Cards</td>
                <td>Loans</td>
                <td>About the bank</td>
                <td>+992 37 227-91-70,227-91-71</td>
            </tr>
            <tr>
                <td>Loans</td>
                <td>Term deposits</td>
                <td>Job openings</td>
                <td>info@icb.tj</td>
            </tr>
            <tr>
                <td>Deposits</td>
                <td>Current account</td>
                <td>Contacts</td>
                <td>Dushanbe, pushkin str.,10</td>
            </tr>
            <tr>
                <td>Money transfers</td>
                <td>Salary projects</td>
                <td>Documents</td>
                <td>Mon-fri(08.00-17.00)</td>
            </tr>
            <tr>
                <td>Mobile banking</td>
                <td>Corporate card</td>
                <td>News</td>
                <td>Call center : 909</td>
            </tr>
            <tr>
                <td></td>
                <td>Acquiring</td>
                <td>FAQ</td>
            </tr>


        </table>
        <div class="CJSC">
            <p>
                CJSC Investment and Credit Bank is a member of the individual
                Savings insurance Fund.
                The certificate was issued on September 20, 2011.
            </p>
            <h2>
                Mobile banking:
            </h2>
        </div>
        <div class="playmarket">
            <img src="./images/gogleplay.png" alt="">
        </div>
        <div class="AppStore">
            <img src="./images/appstore.png" alt="">
        </div>
       @include('includes.footer')


</body>
</html>
<style>
    body {
        height: 100vh;
    }


    .Language {
        margin-top: -480px;
        margin-left:1200px ;
    }

    .begin{
        width: 100%;
        height: 65%;


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
        margin-left:-50px;
    }

    .forth hr{
        width:72px;
        margin-top:-1px;
        margin-left:2px;
    }
    .forth :hover{
        color: #DB0011;
        transition: all 0.3s;
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

    .lin img{
        position: absolute;
        width: 1520px;
        height: 0px;
        left: -120px;
        top: 90px;

        border: 1px solid rgba(219, 0, 17, 0.15);
    }
    .Service h2{
        margin-top:370px;
        margin-left:600px;
        font-size: 35px;

        color: #000000;
    }
    .Service p{
        margin-top:-20px;
        margin-left:595px;
        font-size:15px;
    }

    .cards{
        margin-top:50px;
        margin-left:160px;
        width:347px;
        height:295px;


        background: #FFFFFF;
        box-shadow: 0px 0px 15px 1px rgba(0, 0, 0, 0.1);
        border-radius: 20px;

    }
    .cards img{
        width:35px;
        height:55px;
        margin-top: 25px;
        margin-left:30px;
    }
    .cards hr{
        width:32px;
        height:2px;
        margin-left:31px;
        background-color: #DB0011;
        border-radius:30px;
    }
    .cards h3{
        color: #DB0011;
        font-size: 18px;
        margin-left:30px;
    }

    .cards p{
        margin-top:30px;
        margin-left: 30px;
        width:280px;
        font-size: 13px;
    }

    .cards-2{
        margin-top:-295px;
        margin-left:560px;
        width:347px;
        height:295px;


        background: #FFFFFF;
        box-shadow: 0px 0px 15px 1px rgba(0, 0, 0, 0.1);
        border-radius: 20px;

    }
    .cards-2 img{
        width:65px;
        height:45px;
        margin-top: 25px;
        margin-left:30px;
    }
    .cards-2 hr{
        width:58px;
        height:2px;
        margin-left:33px;
        background-color: #DB0011;
        border-radius:30px;
    }
    .cards-2 h3{
        color: #DB0011;
        font-size: 18px;
        margin-left:30px;
    }

    .cards-2 p{
        margin-top:30px;
        margin-left: 30px;
        width:280px;
        font-size: 13px;
    }

    .cards-3{
        margin-top:-295px;
        margin-left:960px;
        width:347px;
        height:295px;


        background: #FFFFFF;
        box-shadow: 0px 0px 15px 1px rgba(0, 0, 0, 0.1);
        border-radius: 20px;

    }
    .cards-3 img{
        width:65px;
        height:45px;
        margin-top: 25px;
        margin-left:30px;
    }
    .cards-3 hr{
        width:58px;
        height:2px;
        margin-left:33px;
        background-color: #DB0011;
        border-radius:30px;
    }
    .cards-3 h3{
        color: #DB0011;
        font-size: 18px;
        margin-left:30px;
    }

    .cards-3 p{
        margin-top:30px;
        margin-left: 30px;
        width:280px;
        font-size: 13px;
    }

    footer{
        position: absolute;
        background-color: red;
        top:800px;
        color: white;
        font-weight: 1000px;
        height: 400px;
    }
    table{
        width: 1310px;
        margin-left: 190px;
        text-align: left;
    }
    .line{
        position: absolute;
        top:180px;
        left:190px;
        width: 990px;
        color: #FFFFFF;
    }

    footer p{
        width: 380px;
        margin-left:190px;
        margin-top:10px;
        color:#FFFFFF;
    }

    footer h2{
        margin-top:-75px;
        margin-left: 785px;
        font-size: 20px;

    }
    .playmarket img{
        position: absolute;
        top:220px;
        margin-left:935px;
        width: 120px;
        height: 35px;
    }
    .AppStore img{
        position: absolute;
        top:220px;
        margin-left:1065px;
        width: 120px;
        height: 35px;
    }
    .Web img{
        position: absolute;
        top:270px;
        margin-left:975px;
    }

    .line-2{
        position: absolute;
        top:330px;
        left:190px;
        width: 990px;
        color: #FFFFFF;
    }

    .under img{
        width:25px;
        height: 25px;
        margin-top:80px;
        margin-left:190px;
    }
    .under p{
        margin-top:112px;
        margin-left:225px;
        font-size: 12px;
    }
    .under-2 p{
        margin-top:-25px;
        margin-left:1025px;
        font-size: 12px;
    }
</style>
