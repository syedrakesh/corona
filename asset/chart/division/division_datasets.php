<?php
	function division_confirmed_datasets(){
		function division_confirmed_datasets_data(){
			
			include('config.php');

			try{
				$pdo23 = new PDO(
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
			
				$sql = "SELECT division_confirmed FROM division";
				$q = $pdo23->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['division_confirmed']).',';
				}
				
		}
		
				
		echo "{";
		echo 		"label: 'আক্রান্ত রোগীর সংখ্যা',";
		echo	"backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),";
		echo		"borderColor: window.chartColors.red,";
		echo		"borderWidth: 1,";
		echo		"data: [";
		echo division_confirmed_datasets_data();
		echo "]";
		echo	"}";
	}
	division_confirmed_datasets();
	
	
	
	
	
	
	function division_deaths_datasets(){
		function division_deaths_datasets_data(){
			
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
			
				$sql = "SELECT division_deaths FROM division";
				$q = $pdo24->query($sql);
				$q -> setFetchMode(PDO::FETCH_ASSOC);
				while($row = $q -> fetch()){
					echo htmlspecialchars($row['division_deaths']).',';
				}
				
		}
		
		echo ",{";
		echo 		"label: 'মৃত রোগীর সংখ্যা',";
		echo	"backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),";
		echo		"borderColor: window.chartColors.blue,";
		echo		"borderWidth: 1,";
		echo		"data: [";
		echo division_deaths_datasets_data();
		echo "]";
		echo	"}";
	}
	division_deaths_datasets();
?>