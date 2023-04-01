<?php
	$db_name = "covid19";
	$host_name = "localhost";
	$table_name = "district";
	$user_name = "root";
	$password = "";
	
	try{
		$pdo = new PDO(
			"mysql:host=$host_name;dbname=$db_name;charset=utf8mb4","$user_name","$password",
				array(
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_PERSISTENT => false,
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
				)
			);
		
	}catch (PDOException $e){
		die("Could not connect to the database $db_name :" . $e->getMessage());
	}
?>