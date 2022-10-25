<?php require_once('Fragments/functions.php'); ?>
<div id="nav-bar" class="box" style="width: 100%">
    <a href="index.php"><img src="Media/LIFE.gif" alt="logo" height="80px" width="80px" class="logo"></a>
    <?php if(isUserLoggedIn()) { ?>
    <span class="welcome" style="margin-left: 30px;">
        Welcome <?= getLoggedInUser()['first_name']; ?>, Nice To See you
    </span>
    <?php } ?>

    
    <div style="margin-bottom: 14px; float: right; margin-top: 10px;">
        <?php if(isUserLoggedIn()) { ?>
            <ul style="margin-left:280px">
                <li><a href="index.php">Home</a></li>
                <li><a href="ServicesProvided.php">My Services</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        <?php } else { ?>
            <ul style="margin-left:200px">
                <li><a href="index.php">Home</a></li>
                <li><a href="Login.php">My Services</a></li>
                <li><a href="Registration.php">Register</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        <?php } ?>
    </div>  
</div>