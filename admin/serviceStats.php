<?php
require_once('Fragments/functions.php');
require_once('Fragments/database-functions.php');
$id = (int)$_GET['id'];
$serviceStats = getServiceStats($id);
$users = getUsersAdmin();
$AdvYoga = yoga($Advanced);
$IntYoga = yoga($Intermediate);
$BegnYoga = yoga($Beginner);
$AdvStr = stretching($Advanced);
$BegnStr = stretching($Beginner);
$IntStr = stretching($Intermediate);
$AdvMed = meditation($Advanced);
$IntMed = meditation($Intermediate);
$BegnMed = meditation($Beginner);
?>
<script type="text/javascript">
window.onload = function() {

var options = {
	title: {
		text: "<?php echo($serviceStats['name'] . " Statistics for" )?>"
	},
	data: 
		<?php if ($serviceStats['name'] === "Meditation") { ?>
	[{
			type: "pie",
			startAngle: 45,
			showInLegend: "true",
			legendText: "{label}",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			dataPoints: [
				{ label: "Beginner", y: $BegnMed },
				{ label: "Intermediate", y: $IntMed },
				{ label: "Advanced", y: $AdvMed }
			]
	}]
	<?php } else if (($serviceStats['name'] === "Stretching")) { ?>
		[{
			type: "pie",
			startAngle: 45,
			showInLegend: "true",
			legendText: "{label}",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			dataPoints: [
				{ label: "Beginner", y: $BegnStr },
				{ label: "Intermediate", y: $IntStr },
				{ label: "Advanced", y: $AdvStr }
			]
	}]
	<?php } else if (($serviceStats['name'] === "Yoga")) { ?>
		[{
			type: "pie",
			startAngle: 45,
			showInLegend: "true",
			legendText: "{label}",
			indexLabel: "{label} ({y})",
			yValueFormatString:"#,##0.#"%"",
			dataPoints: [
				{ label: "Beginner", y: $BegnYoga },
				{ label: "Intermediate", y: $IntYoga },
				{ label: "Advanced", y: $AdvYoga }
			]
	}]
<?php } ?>
};
$("#chartContainer").CanvasJSChart(options);

}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('Fragments/head.php'); ?>
</head>
<body>
    <?php require_once('Fragments/navbar.php'); ?>

    <div class="container align-self-center">
        <?php if($id === 1){ ?>
            <h3>Yoga Statistics for <?php echo($_POST["users"]) ?> are: -</h3>
            <?php // var_dump ($_POST["users"] )?>
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        <?php } ?>

		<?php if($id === 2){ ?>
            <h3>Yoga Statistics for <?php echo($_POST["users"]) ?> are: -</h3>
            <?php // var_dump ($_POST["users"] )?>
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        <?php } ?>

		<?php if($id === 3){ ?>
            <h3>Yoga Statistics for <?php echo($_POST["users"]) ?> are: -</h3>
            <?php // var_dump ($_POST["users"] )?>
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        <?php } else{?>
			<h1><?php echo("Under Maintenance") ?></h1>
		<?php } ?>
    </div>

    <?php require_once('Fragments/footer.php'); ?>
</body>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>  
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</html>
