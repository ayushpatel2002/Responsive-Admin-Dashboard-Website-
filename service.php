<?php require_once('Fragments/authorise.php'); ?>
<!--  The functions and some part of the code used for myServices were done with help of code archive from Lab 10, activity 2
 -->
<?php
    $id = (int)$_GET['id'];
    $service = getService($id);

    $errors = [];
    if(isset($_POST['activity'])) {
        $email = getLoggedInUser()['email'];

        $errors = recordActivity($email, $id, $_POST);
    }

    $calCountB = 0;
    $calCountL = 0;
    $calCountD = 0;
    $HHerrors = [];
    if(empty($_POST['HHsubmit'])) {
        $HHerrors = checkMealAttributes($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Provided</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="Scripts/main.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php
            require_once "Fragments/navBar.php";
        ?>
            
                    
        <div id="content" class="box">
        <div>
        <div>
            <h1 style="margin-bottom: 20px;">
                <?php echo $service['name']; ?> <br> <br>
            </h1>
        </div>

        <?php if($id === 1) { ?>
            <p class="h4">Select from our yoga classes below and start calming down your mind!</p>

            <?php // The form below is displayed if type has not been submitted. ?>
            <?php if(!isset($_POST['type'])) { ?>
                <?php $serviceInstructions = getServiceInstructions($id); ?>

                <form method="post">
                    <div>
                        <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                            <?php $t = $serviceInstruction['service_type']; ?>
                            <div>
                                <input type="radio" style="width: 20px"
                                    id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                <label for="<?php echo $t; ?>"><?php echo $t; ?></label>
                            </div>
                        <?php } ?>
                        <?php if(isset($_POST['service'])) { ?>
                            <div class='text-danger'>You must select a yoga type.</div>
                        <?php } ?>
                    </div>

                    <button style="margin-left: 360px; margin-top: 30px" class="btn btn-success"type="submit" name="service">Go</button>
                    <a href="ServicesProvided.php" class="btn btn-outline-dark" style="margin-top: 30px">Back to myServices</a>
                </form>
            <?php } else { ?>
                <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>

                <h3><?php echo $serviceInstruction['service_type']; ?></h3>
                <video class="my-3 serviceVideoY" height="400" width="1000px" controls>
                    <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                </video>

                <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                    <form method="post">
                        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                        <div class="form-group row">
                            <div style="margin-left: 360px">
                                <label class="h3" for="duration">Duration (minutes)</label><br>
                                <input type="text" id="duration" name="duration" style="width: 200px"
                                    <?php displayValue($_POST, 'duration'); ?> />
                                <?php displayError($errors, 'duration'); ?>
                            </div>
                        </div>

                        <button  class="btn btn-success" style="margin-left: 350px" type="submit" name="activity">Record Activity</button>
                        <a href="ServicesProvided.php" class="btn btn-danger">Cancel</a>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-success">
                        You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                        <strong><?php echo $_POST['type']; ?> Yoga </strong>. <br>
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-dark mr-5">More <?php echo $service['name']; ?></a>
                        <a href="ServicesProvided.php" class="btn btn-outline-dark">Back to myServices</a>
                    </div>
                <?php } ?>
            <?php } ?>

            <!-- From here part of meditation starts  -->
        <?php } else if($id===2) { ?>
            <?php if(!isset($_POST['type'])) { ?>
                <?php $serviceInstructions = getServiceInstructions($id); ?>

                <form method="post">
                    <div>
                        <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                            <?php $t = $serviceInstruction['service_type']; ?>
                            <div>
                                <!-- looping through available options to display -->
                                <input type="radio" style="width: 20px"
                                    id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                <label for="<?php echo $t; ?>"><?php echo $t; ?></label>
                            </div>
                        <?php } ?>
                        <?php if(isset($_POST['service'])) { ?>
                            <div class='text-danger'>You must select a yoga type.</div>
                        <?php } ?>
                    </div>

                    <button style="margin-left: 360px; margin-top: 30px" class="btn btn-success"type="submit" name="service">Go</button>
                    <a href="ServicesProvided.php" class="btn btn-outline-dark" style="margin-top: 30px">Back to myServices</a>
                </form>

            <?php } else { ?>
                <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>
                <?php if($serviceInstruction['service_type'] === "Audio"){ ?>
                    <!-- If audio option is chosen, it will display following -->
                <h3><?php echo("Audio"); ?></h3>
                <audio controls loop >
                    <!-- The following audio has been taken from pixbay.com (https://pixabay.com/music/search/genre/meditation/spiritual/)  -->
                    <source src="<?php echo $serviceInstruction['path']?>" type="audio/mpeg">
                </audio>
                <?php } else {?>
                    <video class="my-3 serviceVideoY" height="400" width="1000px" controls loop>
                        <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                    </video>
                <?php } ?>
                <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                    <form method="post">
                        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                        <div class="form-group row">
                            <div style="margin-left: 360px">
                                <label class="h3" for="duration">Duration (minutes)</label><br>
                                <input type="text" id="duration" name="duration" style="width: 200px"
                                    <?php displayValue($_POST, 'duration'); ?> />
                                <?php displayError($errors, 'duration'); ?>
                            </div>
                        </div>

                        <button  class="btn btn-success" style="margin-left: 350px" type="submit" name="activity">Record Activity</button>
                        <a href="ServicesProvided.php" class="btn btn-danger">Cancel</a>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-success">
                        You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                        <strong><?php echo $_POST['type']; ?> Yoga </strong>. <br>
                    </div>
                    <div>
                        <a type="button" href="" class="btn btn-light">More <?php echo $service['name']; ?></a>
                        <a type="button" href="ServicesProvided.php" class="btn btn-light">Back to myServices</a>
                    </div>
                <?php } ?>
            <?php } ?>
            <!-- The same thing from above 2 services is repeated in the 3rd one also by making slight modifications -->
        <?php } else if($id===3){ ?>
            <?php if(!isset($_POST['type'])) { ?>
                <?php $serviceInstructions = getServiceInstructions($id); ?>

                <form method="post">
                    <div>
                        <?php foreach($serviceInstructions as $serviceInstruction) { ?>
                            <?php $t = $serviceInstruction['service_type']; ?>
                            <div>
                                <input type="radio" style="width: 20px"
                                    id="<?php echo $t; ?>" name="type" value="<?php echo $t; ?>" />
                                <label for="<?php echo $t; ?>"><?php echo $t; ?></label>
                            </div>
                        <?php } ?>
                        <?php if(isset($_POST['service'])) { ?>
                            <div class='text-danger'>You must select a yoga type.</div>
                        <?php } ?>
                    </div>

                    <button style="margin-left: 360px; margin-top: 30px" class="btn btn-success"type="submit" name="service">Go</button>
                    <a href="ServicesProvided.php" class="btn btn-outline-dark" style="margin-top: 30px">Back to myServices</a>
                </form>

            <?php } else { ?>
                <?php $serviceInstruction = getServiceInstruction($id, $_POST['type']); ?>
                <video class="my-3 serviceVideoY" height="400" width="1000px" controls loop>
                    <source src="<?php echo $serviceInstruction['path']; ?>" type="video/mp4">
                </video>
                <?php if(!isset($_POST['activity']) || count($errors) > 0) { ?>
                    <form method="post">
                        <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>" />

                        <div class="form-group row">
                            <div style="margin-left: 360px">
                                <label class="h3" for="duration">Duration (minutes)</label><br>
                                <input type="text" id="duration" name="duration" style="width: 200px"
                                    <?php displayValue($_POST, 'duration'); ?> />
                                <?php displayError($errors, 'duration'); ?>
                            </div>
                        </div>

                        <button  class="btn btn-success" style="margin-left: 350px" type="submit" name="activity">Record Activity</button>
                        <a href="ServicesProvided.php" class="btn btn-danger">Cancel</a>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-success">
                        You have successfully recorded <strong><?php echo $_POST['duration']; ?> minutes</strong> of
                        <strong><?php echo $_POST['type']; ?> Yoga </strong>. <br>
                    </div>
                    <div>
                        <a type="button" href="" class="btn btn-light">More <?php echo $service['name']; ?></a>
                        <a type="button" href="ServicesProvided.php" class="btn btn-light">Back to myServices</a>
                    </div>
                <?php } ?>
            <?php } ?>
            
        <?php  } else if($id===4) { ?>
            <!-- From here healthy habits  starts-->
            <div>
                <!-- The meal planner is designed in such a way that the inputed calories will be equally divided between all the meals -->
                <!-- form will be displayed to input meal type and calorie count  -->
                <form method="post" class="form-check">
                    <h4>Please select the type of meal you want to have for your diet: -</h4>
                    <label><input class="form-check-input" type="radio" name='type' value='Vegan' <?php displayValue($_POST, 'type'); ?> style="width: 40px;"> Vegan</label> <br>
                    <label><input class="form-check-input" type="radio" name='type' value='Vegetarian' <?php displayValue($_POST, 'type'); ?>style="width: 40px;">Vegetarian</label> <br><br>
                    <h4>Enter the number of Calories: -</h4>
                    <label><input type="text" name='calories' class="form-control" <?php displayValue($_POST, 'calories'); ?> placeholder="Enter a number greater than 1000"></label><br>
                    <input type="submit" class="bt
                    n btn-primary" value="go" name='HHsubmit' name="HHsubmit">  
                </form> 


                <?php if(isset($_POST["HHsubmit"])){?>
                    <!-- The following code block shows error messages on inappropriate input -->
                    <?php if (empty($_POST["type"])) { ?>
                        <P class="text-danger"><?php echo("Please enter the meal type") ?></p>
                    <?php } else if( empty($_POST["calories"]) ){ ?>
                        <P class="text-danger"><?php echo("Please enter the number of calories") ?></p>
                    <?php } else if ($_POST["calories"] < 1500) {?>
                        <P class="text-danger"><?php echo("The minimum number of calories should be greater than 1500") ?></p>
                    <?php } else if (($_POST["calories"] > 3000)){ ?>
                        <P class="text-danger"><?php echo("TThe healthy calories intake should be less than 3000 calories per day") ?></p>
                    <?php }else{ ?>
                    <?php $enteredCalories = (int)$_POST['calories']; ?>
                    <h3>You have selected to have <?php echo $_POST['type'] ?> meals with <?php echo $_POST['calories'] ?> calories a day</h3> <br><hr>
                    <h5>Your meal plan is designed in such a manner that you can add item of your choice and still maintaining the healthy calorie count</h5>
                    <!-- Randomised array names for different meals -->
                    <?php $Bmeals = (getMealsWithTypeB($_POST['type'])); ?>
                    <?php $BmealRan = shuffleItems($Bmeals)?>
                    <?php $Lmeals = (getMealsWithTypeL($_POST['type'])); ?>
                    <?php $LmealRan = shuffleItems($Lmeals)?>
                    <?php $Dmeals = (getMealsWithTypeD($_POST['type'])); ?>
                    <?php $DmealRan = shuffleItems($Dmeals)?>
                    <h3>Breakfast</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Calories</th>
                            <tr>
                        <thead>
                        <tbody>
                            <?php foreach(($BmealRan) as $meal) { ?> 
                                <!-- randomised arrays will be looped, and calorie for a particular food item will be added to counter variable -->
                                <?php $calCountB = $meal["calories"] + $calCountB; ?>
                                <?php 
                                // If the counter variable exceeds the limit set, the loop will break
                                    if(($calCountB >= ($enteredCalories)/3)) {
                                        $calCountB = $calCountB - $meal["calories"] ;
                                        break;
                                    }  
                                ?>
                                    <tr>
                                        <td><?php echo $meal["name"]; ?></td>
                                        <td><?php echo $meal["calories"]; ?></td>
                                    </tr>
                                    <!-- Whenever a loop is done, the function named "insertMeals" will be called to insert the food item into database -->
                                    <?php insertMeals(getLoggedInUser()['email'], $meal['meal_id'], $meal["calories"]) ?>
                                <?php } ?>     
                        </tbody>
                    </table>
                    <!-- The same thing goes for the other 2 meals -->
                    <b><?php echo "Total calories for Breakfast is " . $calCountB  . " calories" ?></b>
                    <br><hr>
                    <h3>Lunch</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Calories</th>
                            <tr>
                        <thead>
                        <tbody>
                            <?php foreach(($LmealRan) as $meal) { ?>
                                
                                <?php $calCountL = $meal["calories"] + $calCountL; ?>
                                <?php 
                                if(($calCountL >= ($enteredCalories)/3)) {
                                    $calCountL = $calCountL - $meal["calories"] ;
                                        break;
                                    }  
                                ?> 
                                    <tr>
                                        <td><?php echo $meal["name"]; ?></td>
                                        <td><?php echo $meal["calories"]; ?></td>
                                    </tr>
                                <?php insertMeals(getLoggedInUser()['email'], $meal['meal_id'], $meal["calories"]) ?>
     
                                <?php } ?>     
                        </tbody>
                    </table>
                    <b> <?php echo "Total calories for Lunch is " . $calCountL . " calories" ?></b>
                    <br><hr>
                    <h3>Dinner</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Calories</th>
                            <tr>
                        <thead>
                        <tbody>
                            <?php foreach(($DmealRan) as $meal) { ?> 
                                <?php $calCountD = $meal["calories"] + $calCountD; ?>
                                <?php 
                                if(($calCountD >= ($enteredCalories)/3)) {
                                    $calCountD = $calCountD - $meal["calories"] ;
                                        break;
                                    }  
                                ?>
                                    <tr>
                                        <td><?php echo $meal["name"]; ?></td>
                                        <td><?php echo $meal["calories"]; ?></td>
                                    </tr>
                                    <?php insertMeals(getLoggedInUser()['email'], $meal['meal_id'], $meal["calories"]) ?>
                                <?php } ?>     
                        </tbody>
                    </table>
                    <b> <?php echo "Total calories for Dinner is " . $calCountD . " calories" ?></b> <br> 
                    <div style="margin-top: 50px;">
                        <a href="ServicesProvided.php" class="btn btn-success">Back To myServices</a>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="text-center">
                <i class="bi bi-cone-striped" style="font-size: 250px;"></i>
                <h3>Under construction!</h3>
            </div>
        <?php } ?>
    </div>
        </div>



        <?php require_once('Fragments/Footer.php') ?>
    </div>
    <script src="Scripts/main.js"></script>

</body>
</html>