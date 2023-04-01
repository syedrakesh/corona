<?php
	function outcome_datasets(){
		function outcome_datasets_data(){
			
			include('config.php');

			try{
				$pdo24 = new PDO(
				"mysql:host=$host_name;dbname=$db_name;charset=utf8mb4","$user_name","$password",
					array(
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						PDO::ATTR_PERSISTENT => false,
						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
					)
				);
			}catch(PDOException $e) {
				echo $e->getMessage();//Remove or change message in production code
			}
			
				$sql = "SELECT outcome_number FROM outcome";
				$q = $pdo24->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['outcome_number']).',';
				}
				
		}
		echo "{";
		echo '"label"'.":".'"ফলাফল সংখ্যা",';
		echo '"data":'.'[';
		echo outcome_datasets_data();
		echo '],';
		echo '"fill": false,';
		echo '"borderColor":'."window.chartColors.white,";
		echo '"backgroundColor":'."[window.chartColors.red,window.chartColors.blue,window.chartColors.purple,window.chartColors.yellow]";
		//echo '"lineTension": 0.1';
		echo "}";
	}
	outcome_datasets();
?>