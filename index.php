<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <style>
        /* The Carousel part is done with help of Slick(https://kenwheeler.github.io/slick/)  */
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

    .slick-dots{
        color: green;
    }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="scroltoTop" title="Go to top">&#8679<br>To Top</button>

    <div class="wrapper">
        <?php
        require_once "Fragments/navBar.php";
        ?>
      
        <div id="content" class="box">
            <div style=" width: 900px; background-color: black; margin-left: 40px">
                <ul class="slider">
                    <li>
                        <h1><img src="Media/carouselPic1.jpg" alt="" height="350px" width="820px"></h1>
                    </li>
                    <li>
                        <h1><img src="Media/carouselPic2.jpg" alt="" height="350px" width="820px"></h1>
                    </li>
                    <li>
                        <h1><img src="Media/carouselPic3.jpg" alt="" height="350px" width="820px"></h1>
                    </li>
                    <li>
                        <h1><img src="Media/carouselPic4.jpg" alt="" height="350px" width="820px"></h1>
                    </li>
                </ul>
            </div>

            <span class="quotes">
                <b>&#8220;Mental health…is not a destination, but a process. <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; It’s about how you drive, not where you’re going. &#8221; <br>– Noam Shpancer, PhD</b>
                <img src="Media/quote1.jpg" alt="quote picture in which stones are stacked on each other." height="250px" width="250px" class="Img">
            </span>
            <hr>
            <hr>
        <p class="Questions"> &raquo; Are you also suffering through psychological problems like depression or anxiety or panic disorder during lockdowns and pandemic &nbsp; &nbsp; ??? </p>
        <p class="Answers"> &nbsp; &bull; Do not worry !!! <br>Just take a deep breath, Keep calm and move with us, and say It's my life and <span class="specials"><b><i>I will Live it Fully Everyday...</i></b></span> lorem4000</p>
        <p class="Questions"> &raquo; Are you also an extremely social persion but due to pandemic distrssed at home ??? </p>
        <p>&nbsp; &bull; Just Chill, it is absolutely normal. We have brought up many things for you. <span style="color: red;">Together we will fight, and together we will win.</span>   <br> Since the pandemic has started has and it has been a few months now, people are suffering through many kinds of mental health issues such as Anxiety, Loneliness, Difficulty in concentrating, low motivation and a state of distraction, Negative emotional spirals, Desperation, Panic and fear and many more.</p>
        <p> Continue to read ahead and you will get solutions to all your problems...</p>
        <p><img src="Media/calm2.jpeg" alt="Photo of a man sitting alone" height="250px" width="250px" class="Img" style="float: left; margin-right: 25px;"> </p>
        <p>First of all, talking about <span class="Vspecials">Anxiety</span>, you can do following things: -</p>
        <ol>
            <li>Recognize the fear. Remember that you are not isolated in feeling insecure.</li>
            <li>Planning the daily routines helps in adapting quickly and managing anxiety.</li>
            <li>Divide your time clearly as work and non-work times. Make the same division in your headspace too.</li>
            <li>Identify an activity/hobby that brings you joy and perform it.</li>
            <li>Working in short bursts with clear breaks will help to maintain your clarity of thought.</li>
        </ol>
        <p>
        The most common thing people are facing is Difficulty in concentrating, low motivation and a state of distraction.It generally because of the fact that new things generally takes time to adapt.<br> Here are some of the tricks you can try out to get relaxed: -
        

        </p>
        <ol>
            <li>Pick a physical activity of your choice like <a class=""href="Yoga.php">Yoga</a> or even simple <a href="Stretching.php">Stretching</a>. Spend atleast one hour per day on your physical health. </li>
            <li>It always a good idea to meditate. Meditation improves concentration, relaxes mind and has many more immense advantages. To know more about meditation and directions to perform it, please do visit <a href="Meditation.php">meditation section</a></li>
            <li>Also, Working in short bursts with clear breaks will help to maintain your clarity of thought.</li>
            <video height="250" width="450" controls autoplay id="video1" > 
                <source src="Media/Calm.mp4" type="video/mp4">
            </video>
            <li>Apart from that, Exercise regularly, eat healthy food and sleep thoroughly. To be concise, one should build Healthy Habbits. Clicking <a href="HealthyHabbits.php">Here</a> would assist you can know more about how to build healthy habbits. This could also help in reducing mental stress.</li>
            <li>Do not Google symptoms of any disease rather you should consult and trust doctors. In addition ot that, avoid checking the latest COVID-19 Statistics as thill will negatively impact your mind will create unneccesary panic within you. </li>
        </ol>
        &nbsp;
        &nbsp;
        <hr>
        <hr>
        <div id="homevideos">
        <div class="boxleft">
            <video height="250" width="450" controls style="border-radius: 15px;"> 
                <source src="Media/yoga(Home).mp4" type="video/mp4">
            </video>
            <p>
                This is one of the asanas of Yoga. 
                Yoga has infinite benefits to our mental and physical health.<br>
                These include: -
                <ul id="homelist">
                    <li>Improves your flexibility:<br><span style="color: blueviolet;"> Atinitial stages, You will notice that you can not practice all the asanas perfectly but gradually you’ll notice a gradual loosening, and eventually, seemingly impossible poses will become possible. You’ll also probably notice that aches and pains start to disappear.</span> </li>
                    <li>Builds muscle strength: <br> <span style="color: blueviolet;"> No doubt yoga is an excellent source to gain muscle strength. They also protect us from conditions like arthritis and back pain, and help prevent falls in elderly people. And when you build strength through yoga, you balance it with flexibility, unlike gym, you get muscle strength but at the cost of flexibility. </span> </li>
                    <li>Perfects your posture: <br><span style="color: blueviolet;">Poor posture can cause back, neck, and other muscle and joint problems. As you slump, your body may compensate by flattening the normal inward curves in your neck and lower back. This can cause pain and degenerative arthritis of the spine. Therefore doing yoga will be supremely beneficial for the posture.</span>  </li>
                </ul>
            </p>
            <p>To know how to do yoga and dive deep into yoga, you should definitely visit <a href="Yoga.php">Yoga Section</a></p>
        </div>
        <div class="boxright">
            <video height="250" width="450" controls style="border-radius: 15px;" > 
                <source src="Media/stretchingMan.mp4" type="video/mp4">
            </video>
            <p>This is a type of stretching. Similar to Yoga, stretching also has innumerable benefits.<br> Some of these are but not limited to: -</p>
            <ul id="homelist">
                <li>Increases your flexibility<br><span style="color: blueviolet;"> Regular stretching can help increase your flexibility, which is crucial for your overall health. Not only can improved flexibility help you to perform everyday activities with relative ease, but it can also help delay the reduced mobility that can come with aging.</span> </li>
                <li> Increases your range of motion
                    <br> <span style="color: blueviolet;"> Being able to move a joint through its full range of motion gives you more freedom of movement. Stretching on a regular basis can help increase your range of motion. </span> </li>
                <li>Increases blood flow to your muscles <br><span style="color: blueviolet;">Performing stretches on a regular basis may improve your circulationTrusted Source. Improved circulation increases blood flow to your muscles, which can shorten your recovery time and reduce muscle soreness.</span>  </li>
            </ul>
            <p>To know how you could perfectly practice stretching, it is strong recommendation that you should visit <a href="Stretching.php">Stretching Section</a></p>
        </div>
        </div>


        </div>
        <?php
        require_once("Fragments/Footer.php");
        ?>

    </div>
    <script type="text/javascript">
        $('.slider').slick({
            dots: true
        });
    </script>
</body>
</html>