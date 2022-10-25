<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Habits</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <link rel="stylesheet" href="Stylesheet/registration.css">
   
</head>
<body>
    <script src="Scripts/main.js"></script>
    <script src="Scripts/mealPlanner.js"></script>
    <!--  -->
    <div class="wrapper">
    <?php
        require_once "Fragments/navBar.php";
    ?>
         
        <!--  -->
        <div id="content" class="box">
            <div class="head" id='p1'>
                <h3 style="text-decoration: none; color: black;">For a physically and mentally healthy lifestyle, which is necessity in these difficult pandemic times, there are some <span style="font-weight: bolder; color: rgb(18, 155, 0);">Healthy Habits</span> which needs to be adopted immediately.</h3>
                Some healthy practices which is a must are: - 
                <ul>
                    <li>Moderate Your Alcohol Intake</li>
                    <li>Drink Plenty Of Water Per Day</li>
                    <li>Incorporate Simple Exercises Into Your Daily Routine</li>
                    <li>Prioritize Self-Care</li>
                </ul>
                And most important of the above, is to keep up the healthy nutrition.<br>
                While having your regular meals, one should keep note of their calories in the meal components. 
                <br><span style="text-align: left;"> benefits of balanced diet are, but not limited to: -</span>
                <video height="230" width="400" controls autoplay style="float: right; margin-left: 15px; margin-right: 30px; margin-top: 0px;"> 
                    <source src="Media/food.mp4" type="video/mp4">
                </video>
                <ol>
                    <li>Healthy Heart Health</li>
                    <li>Reduced cancer risk</li>
                    <li>Better mood, which is must in these harsh times.</li>
                    <li>Diabetes management and prevention of obesity and other diseases related to it. </li>
                    <li>Reduces Depression and increase energy levels </li>
                </ol>
                <h3>You can use the following meal planner tool to plan your meals according to your calorie needs</h3>
            </div>
            <div id='myDIV' style="text-align: center;">
                <p> Make a diet plan by selecting your type of diet: -</p>
                <button class="buttonP" onclick="functionToExecute('v')" onmouseover="respond(this)" onmouseout="normal(this)"> VEGETARIAN
                </button>  
                 <button class="buttonP1" onclick="functionToExecute('nv')" onmouseover="respond(this)" onmouseout="normal(this)"> NON-VEGETARIAN
                </button>
                <button class="buttonP2" onclick="functionToExecute('vg')" onmouseover="respond(this)" onmouseout="normal(this)"> VEGAN
                </button>
            </div>
            <div id='myDIV2'>
                <div class="cmeal" >
                    <form>
                        <br><label for='calories'>Number of Calories</label><br>                        
                        <input type='text' name="Calorie" id='input_calorie' required placeholder="Number of Calories">
                        <div id="errorMsg" style="display: none; color: red;"> Please Input a valid number !</div>

                        <br>
                        <br>
                        <label for='meal'> Number of meals: -</label><br>
                        <input type='radio' name='meal1' value="1" id='2' required style="width: 28px;">
                        <label for="input" style="margin-left: 10px;">1 Meal</label><br>
                        <input type='radio' name='meal1' value="2" id='3' required style="width: 50px;">
                        <label for="input">2 Meals</label><br>
                        <input type='radio' name='meal1' value="3" id='4' required style="width: 50px;">
                        <label for="input">3 Meals</label><br>
                        <input type='radio' name='meal1' value="4" id='5' required style="width: 50px;">
                        <label for="input">4 Meals</label><br>
                        <br>                 
                    </form>
                    <button type="submit" onclick="func1()">done</button>
                </div>
            </div>
            <div id='confirm'>
                <h3>Please confirm the following selections you made</h3><strong>Type of Meal: </strong>&nbsp; &nbsp; &nbsp;<div id='t' style="display: inline-block; color: red;"></div><br>
                <strong> Number of calorie: &nbsp; &nbsp; &nbsp; </strong>
                <div id='c' style="display: inline-block; color: red;"><br></div><br>
                <strong>Please enter number OF meals: </strong>
                <div id='m' style="display: inline-block; color: red;"></div><br>
                <br>
                <button type='submit' onclick="done_func()" id="finalSub" onmouseover="respond(this)" onmouseout="normal(this)">Done</button> 
                <button type='submit' onclick='reset_func()' id="finalReset" onmouseover="respond(this)" onmouseout="normal(this)">Reset</button>
            </div>
            <div id='meal_showcase'>
                <h3>Here is your meal plan for the day...</h3>
                <h1>Breakfast</h1>
                <span id='break'></span>
                <h1>LUNCH</h1>
                <span id='lunch'></span>
                <h1>Dinner</h1>
                <span id='dinner'></span>
                <h1>Snacks</h1>
                <span id='snack'></span>
            </div>

        </div>
        <div id="footer" class="box">
            <div style="margin-top: 5px; margin-left: 5px; text-align: center; float: left;">
                <img src="Media/LIFE.gif" alt="LIFE website logo" height="100px" width="100px" style="border-radius: 100%;" ><br>
            </div>
            <div style="display: inline-block; margin-right: 80px; margin-left: 50px; margin-top: 25px;">
                <a class="external" href="covidResources.php" style="text-decoration: none; color: black;"><ul>COVID-19 Resources</ul></a>   
            </div>
            <div style="display: inline-block; margin-left: 0px; margin-right: 80px;">
                <a class="external" href="sitemap.php" style="text-decoration: none; color: black;"><ul>Sitemap</ul></a>   
            </div>
            <di style="display: inline-block;">
                <a class="external" href="references.php" style= "text-decoration: none; color: black;"><ul>References</ul></a>
            </di>
            <hr>

        </div>
    </div>
    <script src="Scripts/main.js"></script>
</body>
</html>