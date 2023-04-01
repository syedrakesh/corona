<!Doctype html>
<html>
<head>
	<title>Bar Chart</title>
	<script src="http://localhost/covid/asset/chart/age/js/Chart.min.js"></script>
	<script src="http://localhost/covid/asset/chart/age/js/utils.js"></script>
	<style>
		canvas{
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>
</head>
<body>
	<div style="width:100%;">
		<canvas id="per_day_chart" class="chartjs" width="464" height="370" style="display: block; width: 464px; height: 370px;"></canvas>
	</div>
	<script>
		new Chart(document.getElementById("per_day_chart"), {
				"type":"line",
				"data": {
					"labels":[<?php include_once('per_day_labels.php');?>], //date
					"datasets":[
					<?php
						include_once('per_day_confirmed_datasets.php');
						echo ",";
						include_once('per_day_deaths_datasets.php');
						echo ",";
						include_once('per_day_active_datasets.php');
						echo ",";
						include_once('per_day_recovered_datasets.php');
					?>
					]
				},
				"options": {}
			}
		);
	</script>
</body>
</html>