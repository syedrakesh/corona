<?php
	function gender_labels(){
	
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

		$sql = "SELECT gender_label FROM gender order by id asc";

		$q = $pdo23->query($sql);
		$q -> setFetchMode(PDO::FETCH_ASSOC);
		
		while($row = $q -> fetch()){
			echo '"'.htmlspecialchars($row['gender_label']).'",';
		}
	}
	gender_labels();
?>