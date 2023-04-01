<?php
	function age_labels(){
	
	include('config.php');

	try{
		$pdo21 = new PDO(
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

		$sql = "SELECT age FROM age order by id asc";

		$q = $pdo21->query($sql);
		$q -> setFetchMode(PDO::FETCH_ASSOC);
		
		while($row = $q -> fetch()){
			echo '"'.htmlspecialchars($row['age']).'",';
		}
	}
	age_labels();
?>