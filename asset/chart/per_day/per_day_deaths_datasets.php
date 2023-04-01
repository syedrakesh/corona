<?php
	function per_day_deaths_datasets(){
		function per_day_deaths_datasets_data(){
			
			include('config.php');

			try{
				$pdo17 = new PDO(
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
			
				$sql = "SELECT per_day_deaths FROM chart";
				$q = $pdo17->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['per_day_deaths']).',';
				}
			

		}
		echo "{";
		echo '"label"'.":".'"দিনে মৃতের সংখ্যা",';
		echo '"data":'.'[';
		echo per_day_deaths_datasets_data();
		echo '],';
		echo '"fill": false,';
		echo '"borderColor":'."window.chartColors.blue,";
		echo '"backgroundColor":'."window.chartColors.blue,";
		//echo '"lineTension": 0.1';
		echo "}";
	}
	per_day_deaths_datasets();
?>