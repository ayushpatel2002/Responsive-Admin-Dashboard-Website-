<?php require_once('Fragments/authorise.php'); ?>
<?php require_once('Fragments/functions.php'); ?>
<!--  The functions and some part of the code used for myServices were done with help of code archive from Lab 10, activity 2
 -->
<?php $services = getServices(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Provided</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link rel="stylesheet" href="Stylesheet/registration.css">

    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="Scripts/main.js"></script>
</head>
<body>
    <div class="wrapper">
    <?php
        require_once "Fragments/navBar.php";
    ?>
                    
        <div id="content" class="box">
            <div id="outerbox">
                <div>
                    <h1>Select From the anyone service</h1>
                </div>
                    <?php foreach($services as $service) { ?>
                        <?php if($service['service_id']%2 === 0) { ?>
                        <div class="leftS" style="display: inline-block;margin-left: 120px;border-width: 7px;border-color: black;border-style: solid; margin-bottom: 20px; text-align:center">
                            <a href="service.php?id=<?php echo $service['service_id']; ?>">
                                <img src="<?php echo $service['image_path']; ?>" class="service" width="300px" height="300px" />
                                <h3><?php echo $service['name']; ?></h3>
                            </a>
                        </div>
                        <?php } else{ ?>
                            <div class="rightS" style="display: inline-block; margin-right: 70px; margin-left: 170px;border-width: 7px;border-color: black;border-style: solid; margin-bottom: 20px; text-align:center">
                                <a href="service.php?id=<?php echo $service['service_id']; ?>">
                                    <img src="<?php echo $service['image_path']; ?>" class="service" width="300px" height="300px" />
                                    <h3><?php echo $service['name']; ?></h3>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>


    <?php require_once('Fragments/Footer.php') ?>
    </div>
    <script src="Scripts/main.js"></script>

</body>
</html>