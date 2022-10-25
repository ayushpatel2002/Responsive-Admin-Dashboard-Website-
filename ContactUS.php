<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Stylesheet/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>
<body>
    <div class="wrapper">
    <?php
        require_once "Fragments/navBar.php";
    ?>
        
        
        
        <div id="content" class="box" style="margin-top: 90px;"> 
            <h3 style="color: green; margin-left: 120px">Please fill the following details followed by describing how can we help you...</h3>
            <div style="padding-left: 300px;">
                <form action="mailto: LIFE@localcouncil.com" method="POST" name="contactForm" id="contactForm">
                    <div>
                        <label style="margin-right: 83px;">Full Name:</label>
                        <input type="text" placeholder="John Doe" name="Fname" class="label"> 
                        <br>
                    </div>
                    
                    <div>
                        <label style="margin-right: 50px;">Email Address:</label>
                        <input type="text" placeholder="abc@xyz.com" name="email">
                    </div>
                    <div style="margin-top: 50px;">
                        <label>Please describe your enquiry below: -</label> <br>
                        <textarea rows="6" cols="36" placeholder="Please type your enquiry here"  style="margin-top: 10px;" name="enquire"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="contactbtn" >
                    </div>

                </form>
            </div>


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
    <script src="Plugins/jquery.validate.js"></script>
    <script>
        // Wait for the DOM to be ready
        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='contactForm']").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                Fname: "required",
                email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
                },
                enquire: {
                    required: true
                }
            },
            // Specify validation error messages
            messages: {
                Fname: "Please enter your Name",
                email: "Please enter a valid email address",
                enquire: {
                    required: "Please describe your Query",
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
            });
        });
    </script>
</body>
</html>