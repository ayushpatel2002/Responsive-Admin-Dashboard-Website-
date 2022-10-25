<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stretching</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="Scripts/main.js"></script>
</head>
<body>
    <script>
        function respond(x) {
            x.style.borderColor = "red"
            x.style.borderStyle = "inset"
        }

        function normal(x) {
            x.style.borderColor = "black"
            x.style.borderStyle = "solid"
        }
    </script>
    <button onclick="topFunction()" id="scroltoTop" title="Go to top"> &#8679<br> To Top </button>
    

    <div class="wrapper">
    <?php
        require_once "Fragments/navBar.php";
    ?>
        
        <div id="content" class="box">
            <!-- Resources: https://stretchrelief.com/stretching-good-for-mental-health/ -->
            <h2 style="text-align: center;">Stretching</h2>
            <h4>Few actually know the true power of stretching, especially when we consider how many people simply associate it with yoga. Sure, stretching is one of the key elements of yoga, but it’s also an impactful practice on its own.<br> Stretching is not only beneficial to your physical health but also to your mental health.<br> <br>
                When you stretch, your body releases chemicals called endorphins.These endorphins interact with the receptors in your brain that reduce your perception of pain. Endorphins also trigger a positive feeling in the body, a “high” if you will. For example, the feeling that follows a run or workout is often described as “euphoric” – a feeling accompanied by a positive and energizing outlook on life.<br>From sitting in an office chair, to using one of the machines at the gym, to getting a personal in-home stretch (because you got it like that !) – stretching is an extraordinary way to flush away pain and stress with a ample of endorphins!
            </h4>
            <h3 style="text-decoration: none; margin-left: 30px;"> Click on the body part which you want to stretch...</h3>
            <div onclick="scrollto1(this)" style="display: inline-block; margin-right: 20px; margin-left: 40px;" class="strgallery"><img onmouseover="respond(this)" onmouseout="normal(this)" src="Media/backstretch.jpg" height="200px" width="200px" style="border: 5px solid rgb(0, 0, 0);">
                    <h4>Upper And Lower <br> Back Stretch</h4>
            </div>
            <div onclick="scrollto2()" style="display: inline-block; margin-right: 20px;" class="strgallery"><img onmouseover="respond(this)" onmouseout="normal(this)" src="Media/hamstring.jpeg" height="200px" width="200px" class="strgallery" style="border: 5px solid rgb(0, 0, 0);">
                    <h4> Hamstring Stretch <br> <br></h4>
            </div>
            <div onclick="scrollto3()" style="display: inline-block; margin-right: 20px;" class="strgallery"><img onmouseover="respond(this)" onmouseout="normal(this)" src="Media/shoulderstretch.jpg" height="200px" width="200px" style="border: 5px solid rgb(0, 0, 0);">
                    <h4> Shoulder Stretch <br> <br></h4>
            </div>
            <div onclick="scrollto4()" style="display: inline-block; margin-right: 20px;" class="strgallery"><img onmouseover="respond(this)" onmouseout="normal(this)" src="Media/cheststretch.jpg" height="200px" width="200px" style="border: 5px solid rgb(0, 0, 0);">
                    <h4> Chest Stretch <br> <br> </h4>
            </div>
            <hr>
            <hr>
            <hr>

            <div id="backStretch">
                <video height="250" width="400" controls autoplay style="float: left; margin-left: 15px; margin-right: 30px;"> 
                    <source src="Media/upperbackStretch.mp4" type="video/mp4">
                </video>
                <h3> This is upper Back stretch. </h3>
                <ol>
                    <li>First, sit on kneel down position with your buttocks or you can choose to normal sitting position touching your feet.</li>
                    <li>Now, stretch your hands towards the ceiling or tie them over your head.</li>
                    <li>Next, with the hands in the fixed position bend your dorso towards your knees slowly as much as you can. Make sure that your face is facing towards your knees or thighs.</li>
                </ol>
                <br>
                <p style="margin-left: 12px; margin-top: 0px;">As you stretch in this manner, you can feel the stretch in the muscles in your upper back.<br> This can improve your posture, alliviate the back pain and relieve stress.</p>
                <h3>Now, it is time for lower back stretch</h3>
                <video height="250" width="400" controls autoplay style="float: right; margin-left: 15px; margin-right: 30px; margin-top: 0px;"> 
                    <source src="Media/lowerbackstretch.mp4" type="video/mp4">
                </video>
                <ol>
                    <li>First, lie down on your back and then bend your legs from knees.</li>
                    <li>Now, fix your hands above the head, and slowly raise your foot such that your toes should touch the ground.</li>
                    <li>Next, in this position, slowly raise your buttocks and lower and try to align your thighs and upper dorso in a stright line.</li>
                </ol>
                Else, you can hold your toes with hands and keeping the legs straight from the knees, and bring your knees closer to your face by lifting up buttocks and lower back.
            </div>
            <hr>
            <hr>
            <div id="hamstringStretch">
                <h3 style="margin-bottom: 0px; margin-left: 12px; margin-top: 0px; top: 5px;"> This is Hamstring stretching</h3>
                <video height="200" width="400" controls autoplay style="float: left; margin-left: 15px; margin-right: 30px; margin-top: 0px;"> 
                    <source src="Media/hamstretch.mp4" type="video/mp4">
                </video>
                <ol>
                    <li>First, on a object about the height of your waist(or below) or on stairs stick your one leg keeping it straight from knees. </li>
                    <li>Making right angle approximately with the other leg, hold the toes of the leg which is hanging</li>
                    <li>Then, slowly lean forward such that your chest touches the thigh of your hanging leg and hold it for 20 seconds.</li>
                    <li>Try out with the opposite leg.</li>
                </ol>
                By doing this, you can feel the stretch and little pain in the hamstrings in the preliminary stage.
                This can reduce your chances of injury and at the same time increases mobility of your legs.
            </div>
            <br>
            <hr>
            <hr>
            <div id="shoulderStretch">
                <h3 style="margin-top: 0px;"> Lets do some shoulder stretch</h3>
                <video height="200" width="350" controls autoplay style="float: right; margin-left: 15px; margin-right: 30px; margin-top: 0px; top: 100px;"> 
                    <source src="Media/shoulderstretch.mp4" type="video/mp4">
                </video>
                <ol>
                    <li>First, Stand with the feet hip-width apart and stretch out right arm straight.</li>
                    <li>Next, Bring the right arm across the body, so that the hand points to the floor on the other side of the left leg and bend the left arm at the elbow.
                    </li>
                    <li>Then, hook the left forearm under the right arm, supporting the right arm above the elbow and hold it for 20 sec</li>
                    <li>Try out with the opposite hand.</li>
                </ol>
                This exercise can improve the range of motion, increase flexibility and help you to prevent shoulder injury.
            </div>
            <hr>
            <hr>
            <div id ="chestStretch">
                <h3>Now, it is time for some chest stretching...</h3>
                <video height="230" width="380" controls autoplay style="float: left; margin-left: 15px; margin-right: 30px; margin-top: 0px; top: 100px;"> 
                    <source src="Media/cheststretch.mp4" type="video/mp4">
                </video>
                <ol>
                    <li>Stand tall with feet shoulder width apart</li>
                    <li>First, stretch out your hands and interlock the fingers of your both hands such that palms of your hands faces each other on the back side of your body.</li>
                    <li>Now, slowly push out your chest and simultaneously stretch your hands even further from your back.  </li>
                    <li>Try to align your chest and your hands in a straight line.</li>
                    <li>Once your feel some stretch in your chest and triceps, release and repeat once again </li>
                </ol>
                <hr>
                <strong>Or you can try out this one...</strong>
                <video height="400" width="225" controls autoplay style="float: left; margin-left: 15px; margin-right: 30px; margin-top: 0px; top: 100px;"> 
                    <source src="Media/cheststretching2.mp4" type="video/mp4">
                </video>
                You can do it this way: -
                <ol>
                    <li>Stand straight with feet shoulder width apart or you can also choose to sit in kneel down position with your feet touching buttocks and keeping back straight.</li>
                    <li>Lock fingers with your arms behind and above your head.</li>
                    <li>Slowly push your elbows back until you feel stretch in your chest.</li>
                    <li>Hold it for maximum 30 seconds and repeat the same process.</li>
                </ol>
                Stretching your chest on daily basis will be highly advantageous to your workout regimen.<br> Also, this will improve overall physique and posture of your upper body.
                <br>This can also, cause slight lengthening in your shoulder.<br> The main muscles which composes chest are Pectoralis major and Pectoralis minor. So, chest stretching increases masculinity and Strengthens muscle fibres of these two muscles.


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
    <script src="Scripts/scroll.js"></script>
</body>
</html>