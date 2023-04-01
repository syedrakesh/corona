<?php
	function total_active_datasets(){
		function total_active_datasets_data(){
			
			include('config.php');

			try{
				$pdo14 = new PDO(
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
				$pdo15 = new PDO(
					"mysql:host=$host_name;dbname=$db_name;charset=utf8mb4","$user_name","$password",
						array(
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							PDO::ATTR_PERSISTENT => false,
							PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
						)
					);

				$sql = "SELECT COUNT(id) FROM chart";

				$q = $pdo15->query($sql);
				$q->setFetchMode(PDO::FETCH_ASSOC);
				
				while($row = $q->fetch()){
					$last_id = $row['COUNT(id)'];
					//echo $last_id;
				}

			}catch(PDOException $e){
				die("Could not connect to the database $db_name :" . $e->getMessage());
			}
			
			for($i = 1; $i <= $last_id; $i++){
				$sql = "SELECT SUM(per_day_active) as per_day_active FROM chart WHERE id<=$i order by id asc";
				$q = $pdo14->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['per_day_active']).',';
				}
			}
			
			

		}
		echo "{";
		echo '"label"'.":".'"সর্বমোট অ্যাক্টিভের সংখ্যা",';
		echo '"data":'.'[';
		echo total_active_datasets_data();
		echo '],';
		echo '"fill": false,';
		echo '"borderColor":'."window.chartColors.orange,";
		echo '"backgroundColor":'."window.chartColors.orange,";
		//echo '"lineTension": 0.1';
		echo "}";
	}
	total_active_datasets();
?>