<!-- The following functionality of searching was achieved because of code archive from Lecture 11, example 1 -->
<?php
$apiKey = "bb3a9a468cc49e153ff2611619b09fd5";
$cityId = "2158177";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;
// The weather api is done with the help of open weather(https://openweathermap.org/current) and php Pot (https://phppot.com/demo/forecast-weather-using-openweathermap-with-php/)

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
$currentTemp = $data->main->temp;

require_once('Fragments/database-functions.php');
$users = getUsersAdmin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('Fragments/head.php'); ?>
    <!-- The following script is for search functionality -->
<script>
    // Send AJAX request to the server and update the page.
    function getActivityOfUsers() {
        const userAct = $("#userAct").val();
        $.get("search-activity.php", { userAct }).done(function (data) {
            // Update the document with the returned HTML.
            $("#userActs").html(data);
        });
    }

    $(document).ready(function () {
        // Load the initial page data.
        getActivityOfUsers();

        // Perform AJAX request and update the page when the form is submitted.
        $("#searchUserAct").submit(function (e) {
            // Prevent the form from submitting.
            e.preventDefault();

            // Send AJAX request.
            getActivityOfUsers();
        });
    });
</script>
<script type="text/javascript">
    window.onload = function() {

    var options = {
        title: {
            text: "<?php echo($serviceStats['name'] . " Statistics for" )?>"
        },
        data: [{
                type: "pie",
                startAngle: 45,
                showInLegend: "true",
                legendText: "{label}",
                indexLabel: "{label} ({y})",
                yValueFormatString:"#,##0.#"%"",
                dataPoints: [
                    { label: "Organic", y: 36 },
                    { label: "Email Marketing", y: 31 },
                    { label: "Referrals", y: 7 }
                ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);

    }
</script>
</head>
<body>
    <?php require_once('Fragments/navbar.php'); ?>

    <div class="container align-self-center">
        <div class="mb-4">
            <div class="report-container">
                <span class="text-warning">
                    <!-- The following if else statements are for showing welcome message according to the different temperature range -->
                    <?php if($currentTemp >= 6 && $currentTemp <= 15){ ?>
                        <h4>Welcome aboard, seems you are having a chilled day ! </h4>
                    <?php } else if($currentTemp > 15 && $currentTemp <= 22){ ?>
                        <h4>Welcome on a pleasant cool day !</h4>
                    <?php } else if($currentTemp > 22 && $currentTemp <= 30){ ?>
                        <h4>Welcome, seems there is a warm day !</h4>
                    <?php } else { ?>
                        <h4>Welcome, believe me it is very hot outside !</h4>
                    <?php } ?>
                </span>
                <span class="h4"><?php echo $data->name; ?>,</span> <span class="h6"><?php echo date("l g:i a", $currentTime); ?></span>
                <div>
                    <div><?php echo date("jS F, Y",$currentTime); ?></div>
                    <div><?php echo ucwords($data->weather[0]->description); ?></div>
                    <span>Current temperature: <?php echo $data->main->temp; ?>°C</span>
                </div>
                <div class="weather-forecast">
                    <img
                        src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                        class="weather-icon" />
                        High: <?php echo $data->main->temp_max; ?>°C<span
                        class="min-temperature">&nbsp; &nbsp;Low: <?php echo $data->main->temp_min; ?>°C</span> 
                </div>
                <hr>
            </div>
        </div>
        <div>
            <form method="post">
                <div class="form-group">
                    <label>select any one of the user from the list: -</label> <br>
                    <select name="users" class="form-control form-control-sm col-md-4" id="users">
                        <?php foreach($users as $user){?>
                            <!-- Looping over database to get all the registered users and diplaying it in the options -->
                            <?php $mail = $user["email"]; $name = $user["first_name"] . " " . $user["last_name"];?>
                            <option class="form-control col-md-4" value="<?php echo($name); ?>" name="eachUser" > <?php echo($mail. "      Name: " . $name) ?> </option>  
                        <?php } ?>
                    </select>
                    <br><br>
                    <input type="submit" name="search" class="btn btn-primary" value="Go">
                </div>
            </form>
            <?php if (isset($_POST["search"])){ ?>
                <div class="form-group">
                    <form id="searchUserAct" >
                        <label>Search for Services used by <?php echo($_POST["users"]) ?>: </label><br>
                        <input id="userAct" class="form-control form-control-sm col-md-4" type="search"> <br><br>
                        <input type="submit" class=" btn btn-primary" name="searchAct">
                    </form>
                </div>
                <div id="userActs" class="col-md-8"></div>
            <?php } ?>
        </div>
    </div>

    <?php require_once('Fragments/footer.php'); ?>
</body>
<script>

</script>
</html>
