<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Bar Chart</title>
	<script src="http://localhost/covid/asset/chart/age/js/Chart.min.js"></script>
	<script src="http://localhost/covid/asset/chart/age/js/utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>

<body>
	<div id="container" style="width: 100%;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
		<canvas id="canvas" style="display: block; width: 464px; height: 370px;" width="464" height="370" class="chartjs-render-monitor"></canvas>
	</div>
	<script>
		var color = Chart.helpers.color;
		var barChartData = {
			labels: [<?php include_once('division_labels.php');?>],
			datasets: [<?php include_once('division_datasets.php');?>]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						//display: true,
						//text: 'Bar Chart'
					}
				}
			});

		};
	</script>



</body></html>