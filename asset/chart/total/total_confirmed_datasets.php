<?php
	function total_confirmed_datasets(){
		function total_confirmed_datasets_data(){
			
			include('config.php');

			try{
				$pdo13 = new PDO(
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
			
			
			
			try{
				$pdo12 = new PDO(
					"mysql:host=$host_name;dbname=$db_name;charset=utf8mb4","$user_name","$password",
						array(
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							PDO::ATTR_PERSISTENT => false,
							PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
						)
					);

				$sql = "SELECT COUNT(id) FROM chart";

				$q = $pdo12->query($sql);
				$q->setFetchMode(PDO::FETCH_ASSOC);
				
				while($row = $q->fetch()){
					$last_id = $row['COUNT(id)'];
					//echo $last_id;
				}

			}catch(PDOException $e){
				die("Could not connect to the database $db_name :" . $e->getMessage());
			}
			
			for($i = 1; $i <= $last_id; $i++){
				$sql = "SELECT SUM(per_day_confirmed) as per_day_confirmed FROM chart WHERE id<=$i order by id asc";
				$q = $pdo13->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['per_day_confirmed']).',';
				}
			}
			
			

		}
		echo "{";
		echo '"label"'.":".'"সর্বমোট আক্রান্তের সংখ্যা",';
		echo '"data":'.'[';
		echo total_confirmed_datasets_data();
		echo '],';
		echo '"fill": false,';
		echo '"borderColor":'."window.chartColors.red,";
		echo '"backgroundColor":'."window.chartColors.red,";
		//echo '"lineTension": 0.1';
		echo "}";
	}
	total_confirmed_datasets();
?>