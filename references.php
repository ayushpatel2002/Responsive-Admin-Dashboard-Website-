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
    <button onclick="topFunction()" id="scroltoTop" title="Go to top">&#8679<br>To Top</button>

    <div class="wrapper">
    <?php
        require_once "Fragments/navBar.php";
    ?>
         
                
        <div id="content" class="box"> 
            <h1>References</h1>
            This website's content would not have been completed without following sources: -
            <ul>
                <li><a href="https://stretchrelief.com/stretching-good-for-mental-health/">https://stretchrelief.com/stretching-good-for-mental-health/</a></li>
                <l><a href="https://uh.edu/adbruce/spiritual-meditation/">https://uh.edu/adbruce/spiritual-meditation/</a></l>
                <li><a href="https://www.healthline.com/health/mental-health/types-of-meditation#spiritual-meditation">https://www.healthline.com/health/mental-health/types-of-meditation#spiritual-meditation</a></li>
                <li><a href="https://www.goalcast.com/2017/05/10/change-life-motivational-power-yoga/">https://www.goalcast.com/2017/05/10/change-life-motivational-power-yoga/</a></li>
                <li><a href="https://harmonyyoga.com/benefits-of-tree-pose/">https://harmonyyoga.com/benefits-of-tree-pose/</a></li>
                <li><a href="https://www.seniority.in/blog/easy-yoga-asanas-for-everyone/">https://www.seniority.in/blog/easy-yoga-asanas-for-everyone/</a></li>
                <li><a href="https://www.verndale.com/insights/accessibility/website-design-trends-for-dyslexia-and-adhd">https://www.verndale.com/insights/accessibility/website-design-trends-for-dyslexia-and-adhd</a></li>
                <li><a href="https://www.pexels.com/">https://www.pexels.com/</a></li>
                <li><a href="https://www.w3schools.com/">https://www.w3schools.com/</a></li>
                <li><a href="https://ernearmetx.com/blog/14-habits-to-implement-for-better-physical-and-mental-health/">https://ernearmetx.com/blog/14-habits-to-implement-for-better-physical-and-mental-health/</a></li>
            </ul>


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
    <script src="Scripts/scroll.js"></script>
</body>
</html>