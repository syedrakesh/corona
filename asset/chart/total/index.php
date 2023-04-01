<!Doctype html>
<html>
<head>
	<title>Line Chart</title>
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
		<canvas id="total_chart" class="chartjs" align="center" width="464" height="370"  style="display: block; width: 464px; height:370px"></canvas>
	</div>
	<script>
		new Chart(document.getElementById("total_chart"), {
				"type":"line",
				"data": {
					"labels":[<?php include_once('total_labels.php');?>], //date
					"datasets":[
					<?php
						include_once('total_confirmed_datasets.php');
						echo ",";
						include_once('total_deaths_datasets.php');
						echo ",";
						include_once('total_active_datasets.php');
						echo ",";
						include_once('total_recovered_datasets.php');
					?>
					]
				},
				"options": {}
			}
		);
	</script>
</body>
</html>