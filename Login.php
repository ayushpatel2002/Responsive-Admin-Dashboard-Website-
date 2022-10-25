<?php require_once('Fragments/functions.php'); ?>
<?php
    $errors = [];
    if(isset($_POST['login'])) {
        $errors = loginUser($_POST);

        if(count($errors) === 0)
            redirect('ServicesProvided.php');
    }
?>
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
        
        
        
        <div id="content" class="box" style="margin-top: 90px; padding-right: 290px;">
            <h1>Login</h1>
            <?php if(!isUserLoggedIn()) { ?>
            <p>You need to login to access My Services section or you can register yourself by clicking <a href="Registration.php">Here</a></p>
            <?php } ?>
            <form method="post" id="loginPage" style="margin-left: 300px">
                <div style="background-color: #ccc7c7 ; width: 350px; height: 450px; padding-top: 20px; margin-left: 30px;">
                    <div style="margin: 50px">
                        <label for="email">Email</label> <br>
                        <input type="text" name="email" id="email" placeholder="abc@xyz.com"  <?php displayValue($_POST, 'email'); ?> >
                        <?php displayError($errors, 'email'); ?>
                    </div>
        
                    <div style="margin: 50px">
                        <label for="password">Password</label> <br>
                        <input type="password" name="password" id="password">
                        <?php displayError($errors, 'password'); ?>
                    </div>
        
                    <button type="submit" name="login" value="login" style="width: 140px; height: 40px; background-color: #006bf7; color: white; margin-left: 100px">Login</button>
                </div>
            </form>
        </div>
        <div id="footer" class="box">
            <div style="margin-top: 5px; margin-left: 5px; text-align: center; float: left;">
                <img src="Media/LIFE.gif" alt="LIFE website logo" height="100px" width="100px" style="border-radius: 100%;" ><br>
            </div>
            <div style="display: inline-block; margin-right: 50px; margin-left: 30px; margin-top: 25px;">
                <a class="external" href="covidResources.php" style="text-decoration: none; color: black;"><ul>COVID-19 Resources</ul></a>   
            </div>
            <div style="display: inline-block; margin-left: 0px; margin-right: 50px;">
                <a class="external" href="sitemap.php" style="text-decoration: none; color: black;"><ul>Sitemap</ul></a>   
            </div>
            <di style="display: inline-block;">
                <a class="external" href="references.php" style= "text-decoration: none; color: black;"><ul>References</ul></a>
            </di>
            <div style="display: inline-block; margin-left: 30px; margin-right: 50px;">
                <a class="external" href="ContactUS.php" style="text-decoration: none; color: black;"><ul>Contact US</ul></a>   
            </div>
            <hr>

        </div>
    </div>
    <script src="Scripts/scroll.js"></script>
</body>
</html>