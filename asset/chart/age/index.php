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
		<canvas id="chartjs-0" class="chartjs" width="464" height="370" style="display: block; width: 464px; height: 370px;"></canvas>
	</div>
	<script>
		new Chart(document.getElementById("chartjs-0"), {
				"type":"bar",
				"data": {
					"labels":[<?php include_once('age_labels.php');?>], //date
					"datasets":[
					<?php
						include_once('age_datasets.php');
					?>
					]
				},
				"options": {
					tooltips: {
						callbacks: {
							label: function(tooltipItem, data) {
								var allData = data.datasets[tooltipItem.datasetIndex].data;
								var tooltipLabel = data.labels[tooltipItem.index];
								var tooltipData = allData[tooltipItem.index];
								var total = 0;
								for (var i in allData) {
									total += allData[i];
								}
								var tooltipPercentage = Math.round((tooltipData / total) * 100);
								return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
							}
						}
					}
				}
			}
		);
	</script>
</body>
</html>