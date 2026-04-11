<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"><script src="https://kit.fontawesome.com/0df6ffb9ff.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/loader.css">
    <link rel="stylesheet" href="../Style/nav.css">
    <style>
        body {
            background-color: rgb(49, 63, 72);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }

        table {
            align-items: center;
            border-collapse: separate;
            border-spacing: 15 0px;
        }

        th {
            width: 200px;
            text-align: center;
            font-size: x-large;
            font-style: italic;
        }
    </style>
</head>

<body>
    <nav><span class="Logo">Why an <span style="color: #3bdfdf;">EV</span> ?</span>
        <div class="navbar">
            <ul>
                <li class="home active"><a href="#home">Home</a></li>
                <li class="calculate"><a href="#calculate">Calculate</a></li>
                <li class="benefits"><a href="#benefits">Benefits</a></li>
                <li class="news"><a href="#news">News</a></li>
            </ul>
        </div>
    </nav>


    <!--Home start-->
    <section id="home">
        <div class="content">
            <h2>EV Is <span class="typing"></span>.<br><br></h2>
            <p>Use EVs to save Future.</p>
        </div>
    </section>
    <!--Home end-->
    <section id="calculate">
        <br>

        <div class="container">
            <center>
                <div class="formbox">
                    <h1 class="heading">Carbon Calculation</h1>
                    <input type="text" id="km" class="details" placeholder="ENTER YOUR DAILY COMMUTE [In Km]">
                    <p>Calculate the amount of Carbon Dioxide emmited by your Vehical. </p>
                    <input type="button" onclick="calculate()" class="calcBtn" value="Calculate">
                </div>
                <div class="formbox">
                    <h2 class="heading">Carbon Dioxide Emmited By You [In Kg]</h2>
                    <table align="center">
                        <tbody>
                            <tr>
                                <th>DAILY</th>
                                <th>MONTHLY</th>
                                <th>YEARLY</th>
                            </tr>
                            <tr>
                                <th><span id="daily">00</span></th>
                                <th><span id="monthly">00</span></th>
                                <th><span id="yearly">00</span></th>
                            </tr>
                        </tbody>
                    </table>
                    <p><strong>By using <span id="ev"> EVs</span> you can prevent this much Carbon Dioxide emmition and
                            save the <span id="ev">environment</span>.</strong></p>
                </div>
            </center>

    </section>


    <section id="benefits">
        <br><br><br><br>
        <div class="container">
            <div class="benefit">
                <h1>Benefits of EVs</h1><br>
                <span id="icon" style="margin-left: 100px;"><i
                        class="fa-solid fa-wrench"></i></span>
                <span id="icon" style="margin-left: 150px;"><i
                        class="fa-solid fa-gas-pump"></i></span>
                <span id="icon" style="float:right; margin-right: 100px;"><i
                        class="fa-brands fa-envira"></i></span>
                <span id="icon" style="float:right; margin-right: 100px;"><i
                        class="fa-solid fa-square-parking"></i></span><br>
                <span id="detail" style="margin-left: 90px;">Low Maintaince Cost</span>
                <span id="detail" style="margin-left: 90px;">Lower Running Cost</span>
                <span id="detail" style="float:right; margin-right: 100px;">Eco-Friendly</span>
                <span id="detail" style="float:right; margin-right: 140px;">Free Parking</span><br><br>
            </div>
            <br>
            <h1>Number of <span id="ev">EVs</span> Running In the World </h1>
            <h1><span id="ev"><span id="noEv" onclick="stopCount()"></span><span id="EvNo">67,50,000+</span></span></h1>
            <p>*click to stop counting animation</p><br>
        </div>
    </section>
    <section id="news">
        <br><br><br><br>
        <div class="container">
            <center>
                <div class="newsBox">
                    <h1>EV News</h1>
                    <marquee scrollamount="2" behavior="scroll" direction="up" height="500px" width="80%">
                        <div class="newsList">
                            <?php //include('news.php')?>
                        <li>Mercedes-Benz EQA, EQB, A-Class Sedan, And EQE SUV Discontinued In India</li>
                        <li>Delhi's Draft EV Policy 2.0 Explained: Who Gets Rs 1 Lakh Incentive, Tax Waivers?</li>
                        <li>Tata Motors Unveils New Electric SUV: The Nexon EV</li>
                        <li>India's EV Market Sees 50% Growth in 2024: Key Trends and Challenges</li>
                        <li>Government Announces New EV Charging Infrastructure Plan Across Major Cities</li>
                        </div>
                    </marquee>
                </div>
            </center>
        </div>

    </section>
    </div>
    <footer>
        Designed and Created By Shivang Yadav
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<script src="./Script/type.js"></script>
<script src="./Script/main.js"></script>
<script src="./Script/nav.js"></script>
<script src="./Script/loader.js"></script>

</html>
