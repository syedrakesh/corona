<?php
	function gender_labels_datasets(){
		function gender_labels_datasets_data(){
			
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
				echo $e->getMessgender();//Remove or change messgender in production code
			}
			
				$sql = "SELECT gender_number FROM gender";
				$q = $pdo24->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['gender_number']).',';
				}
				
		}
		echo "{";
		echo '"label"'.":".'"লিঙ্গভেদে ফলাফল",';
		echo '"data":'.'[';
		echo gender_labels_datasets_data();
		echo '],';
		echo '"fill": false,';
		echo '"borderColor":'."window.chartColors.white,";
		echo '"backgroundColor":'."[window.chartColors.blue,window.chartColors.red]";
		//echo '"lineTension": 0.1';
		echo "}";
	}
	gender_labels_datasets();
?>