<?php
	function per_day_confirmed_datasets(){
		function per_day_confirmed_datasets_data(){
			
			include('config.php');

			try{
				$pdo19 = new PDO(
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
			
			$sql = "SELECT per_day_confirmed FROM chart";
			$q = $pdo19->query($sql);
			$q -> setFetchMode(PDO::FETCH_ASSOC);
			while($row = $q -> fetch()){
				echo htmlspecialchars($row['per_day_confirmed']).',';
			}

		}
		echo "{";
		echo '"label"'.":".'"দিনে আক্রান্তের সংখ্যা",';
		echo '"data":'.'[';
		echo per_day_confirmed_datasets_data();
		echo '],';
		echo '"fill": false,';
		echo '"borderColor":'."window.chartColors.red,";
		echo '"backgroundColor":'."window.chartColors.red,";
		//echo '"lineTension": 0.1';
		echo "}";
	}
	per_day_confirmed_datasets();
?>