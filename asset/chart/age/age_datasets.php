<?php
	function age_labels_datasets(){
		function age_labels_datasets_data(){
			
			include('config.php');

			try{
				$pdo22 = new PDO(
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
			
				$sql = "SELECT patient FROM age";
				$q = $pdo22->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['patient']).',';
				}
				
		}
		echo "{";
		echo '"label"'.":".'"বয়স ভিক্তিক রোগীর সংখ্যা",';
		echo '"data":'.'[';
		echo age_labels_datasets_data();
		echo '],';
		echo '"fill": false,';
		echo '"borderColor":'."window.chartColors.purple,";
		echo '"backgroundColor":'."[
				'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 147, 4, 1)',
				'rgba(135, 237, 162, 1)']";
		//echo '"lineTension": 0.1';
		echo "}";
	}
	age_labels_datasets();
?>