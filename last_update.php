<?php
    function last_update_checker(){
        
    	function english_to_bangla_converter1($characters){ 
		$english=array("0","1","2","3","4","5","6","7","8","9");
		$bangla=array("০","১","২","৩","৪","৫",'৬',"৭","৮","৯"); 
		return str_replace($english,$bangla,$characters); 
	}
	
	$db_name = "covid19";
	$host_name = "localhost";
	$user_name = "root";
	$password = "";

	try{
		$pdo25 = new PDO(
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

		$sql = "SELECT date FROM chart GROUP BY id HAVING MAX(id)=(SELECT MAX(id) FROM chart)";

		$q = $pdo25->query($sql);
		$q -> setFetchMode(PDO::FETCH_ASSOC);
		
		while($row = $q -> fetch()){
			echo english_to_bangla_converter1(htmlspecialchars($row['date']));
		}
	}
	//last_update_checker();
?>