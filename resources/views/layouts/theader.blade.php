<div class="header">
    <div class="header-icons">
        <a href="#"><img src="./images/icons/tj.png" alt="tj"></a>
        <a href="#"><img src="./images/icons/rus.png" alt="rus"></a>
        <a href="#"><img src="./images/icons/eng.png" alt="eng"></a>

    </div>
    <div class="header-logo-and-menu">
        <a href="/"><img src="./images/desktop/logo.png" alt="Logo" class="logo"></a>

        <div class="header-menu">
            <div class="header-menu-one">
                <ul>
                    <a href="#">INDIVIDUALS</a>
                    <a href="#">LEGAL ENTITIES</a>
                </ul>
            </div>
            <div class="header-menu-two">
                <ul>
                    <li>
                        <a href="#">Loans</a>
                        <ul>
                            <li><a href="businessloans">Business loans</a></li>
                            <li><a href="customerloans">Consumer loans</a></li>
                            <li><a href="mortgateloan">Mortgage loan</a></li>
                            <li><a href="autoloan">Auto loan</a></li>
                            <li><a href="agricultureloan">Agriculture loan</a></li>
                            <li><a href="expresscredit">Express credit</a></li>
                            <li><a href="donish">Loan product "Donish"</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="deposits">Deposits</a>
                        <ul>
                            <li><a href="savingaccounts">Savings account</a></li>
                            <li><a href="termdeposits">Individual term deposits</a></li>
                            <li><a href="easydeposit">"Easy" deposit</a></li>
                            <li><a href="childdeposit">Child deposit</a></li>
                            <li><a href="diyor">"Diyor" Deposit</a></li>
                            <li><a href="housing deposit">Housing deposit</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="card">Cards</a>
                        <ul>
                            <li><a href="">Korti Milli</a></li>
                            <li><a href="">Visa (Classic)</a></li>
                            <li><a href="">Visa (Gold)</a></li>
                            <li><a href="">Gift Card</a></li>
                        </ul>
                    </li>
                    <li><a href="onlineservice">Online Services</a></li>
                    <li>
                        <a href="#">More</a>
                        <ul>
                            <li><a href="/abouts">About the bank</a></li>
                            <li><a href="/vacancy">Vacansy</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-input-and-button">
        <input type="search" placeholder="Search">
        <button>Mobile banking</button>
    </div>
</div>
<style>
    .header{
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        margin-bottom: 80px;
    }
    .header-icons{
        position: absolute;
        top: 0;
        right: 0;

    }
    .header-logo-and-menu{
        display: flex;
        align-items:center;
        gap: 15px;
    }
    .header-logo-and-menu > a > img{}

    .header-menu{
        display: flex;
        flex-direction: column;
        gap :10px;
    }
    .header-menu-one > ul{
        display: flex;
        gap: 17px;
    }
    .header-menu-one > ul a{
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 12px;
        text-transform: uppercase;
        color: #000000;

    }

    .header-menu-two > ul{
        display: flex;
        gap: 12px;
    }

    .header-menu-two > ul a{
        font-style: normal;
        font-weight: 400;
        font-size: 9px;
        line-height: 10px;
        color: #000000;

    }

    .header-menu-one > ul a:hover{
        color: #DB0011;
    }

    .header-menu-two > ul a:hover{
        color: #DB0011;
    }

    .header-input-and-button {
        display: flex;
        gap: 21px;
    }
    .header-input-and-button > input{
        width: 256px;
        height: 39px;
        border: none;
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.02);
        border-radius: 7px;
        padding: 5px 6px;
    }
    .header-input-and-button > button{
        border: none;
        width: 100px;
        height: 39px;
        background: #DB0011;
        border-radius: 8px;
        padding: 7px;
        font-weight: 600;
        font-size: 10px;
        line-height: 10px;
        color: #FFFFFF;

    }
    .header-input-and-button > button:hover{
        box-shadow:0 0 10px 1px #db0011;
        transition: .3s;
    }


    .header-menu-two ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .header-menu-two li {
        position: relative;
    }

    .header-menu-two a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: #000;
        font-size: 12px;
    }

    .header-menu-two ul ul {
        display: none;
        position: absolute;
        background-color: #fff;
        padding: 10px;
        border-radius: 4px;
    }

    .header-menu-two li:hover > ul {
        display: block;
    }

    .header-menu-two ul ul li {
        min-width: 200px;
    }

    .header-menu-two ul ul a {
        font-size: 10px;
    }
</style>
