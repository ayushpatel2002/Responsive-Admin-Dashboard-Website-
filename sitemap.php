<?php require_once('Fragments/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemap</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <?php
            require_once "Fragments/navBar.php";
        ?>
              
        <div id="content" class="box"> 
        <?php if(isUserLoggedIn()) { ?>
            <h1>Sitemap</h1>
            <div style="display: inline-block;">
                <a style="margin: 8px;" href="ServicesProvided.php">My Services</a>  
                <a style="margin: 8px;" href="index.php">Home Page</a>
                <a style="margin: 8px;" href="ContactUs.php"> Contact Us</a>
                <a style="margin: 8px;" href="covidResources.php">Covid-19 Resources</a>
            </div>
        <?php } else{ ?>
            <?php redirect("Login.php") ?>
        <?php } ?>
        </div>
    <?php require_once("Fragments/Footer.php") ?>
    </div>
    <script src="Scripts/scroll.js"></script>
</body>
</html>