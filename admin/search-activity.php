<!-- The following functionality of searching was achieved because of code archive from Lecture 11, example 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<!-- The following code is from Canvas JS for displaying user statistics in a graphical manner -->
<style>
    .img-size{
        width: 120px;
        height: 120px;
        margin-left: 30px;
        margin-right: 30px;
    }
</style>

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
<?php
    require_once('Fragments/functions.php');

    // Extract and trim the email variable from the URL.
    $userActivities = trim(isset($_GET['userAct']) ? $_GET['userAct'] : '');

    // If email is empty then all users are returned.
    $userActs = getActivityOfUsers($userActivities);
?>
<!-- For the search part of the admin portal -->
<div class="row text-center">
    <?php if(count($userActs) === 0) { ?>
        <!-- error message when no results for search -->
        <p class="alert alert-info">No activity matches the search <strong>'<?php echo $userActivities; ?>'</strong>.</p>
    <?php } else { ?>
        <?php foreach($userActs as $userAct) { ?>
            <!-- Looping over different services and then buttons are created -->
                <div class="d-inline ">
                    <a href= "serviceStats.php?id=<?php echo$userAct['service_id']; ?>" class="btn btn-light" style="margin: 10px;">
                        <img src="<?php echo$userAct['image_path']; ?>" class="img-size"/>
                        <h3 class="d-block"><?php echo$userAct['name']; ?></h3>
                    </a>
                </div>
        <?php } ?>
    <?php } ?>

    <div id="stats" style="display: none"></div>
</div>
</html>