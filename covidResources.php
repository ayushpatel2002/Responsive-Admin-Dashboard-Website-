<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
</head>
<body>


    <div class="wrapper">
    <?php
        require_once "Fragments/navBar.php";
        ?>
         
                
        <div id="content" class="box"> 
            <h1>COVID-19 Resources</h1>
            <h3>In response to COVID-19 Pandemic, Indian government has published a lot of websites for different purposes. 
                <br>They are: -</h3>
            <ol>
                <li><a href="https://covid-gyan.in/">Covid Gyan</a> <br> This website brings up the complete information of covid and its variant using some creative art work and this website is available in several languages.</li>
                <br>
                <br>
                <li><a href="https://www.mygov.in/covid-19/">Vaccination Website</a> <br> This website showcases the live data of number of cases changed daily and most important, <strong>You can book your Covid Vaccination slots here and also download it's certificate</strong> </li>
                <br>
                <br>
                <li><a href="https://www.covidresourcesindia.com/">Covid resources India</a> <br>On this website, you can search for help by verified social media group such as Facebook, Twitter etc. Also, you can get each and every updates for available resources in the country along with some phonenumbers.</li>
            </ol>

            Along with that, Indian government has introduced new helpline on Whatsapp.<br> By messaging  "Hi" on <strong>+91 9013151515</strong>, <br>
            You will get to know and access all the covid facilities such as vaccine slot booking, certificate download on Whatsapp itself. 


        </div>

        <?php
        require_once "Fragments/Footer.php";
        ?>


    </div>
    <script src="Scripts/scroll.js"></script>
</body>
</html>