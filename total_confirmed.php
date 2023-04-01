<?php
function total_confirmed_footer(){
    
    function english_to_bangla_converter10($characters){ 
		$english=array("0","1","2","3","4","5","6","7","8","9");
		$bangla=array("০","১","২","৩","৪","৫",'৬',"৭","৮","৯"); 
		return str_replace($english,$bangla,$characters); 
	}
	    
	$db_name = "covid19";
	$host_name = "localhost";
	$user_name = "root";
	$password = "";
	
	//include('./asset/english_to_bangla_converter.php');
	
	try{
		$pdo29 = new PDO(
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

		$sql = "SELECT SUM(per_day_confirmed) as total_confirmed FROM chart WHERE id<=(SELECT COUNT(id) FROM chart)";

		$q = $pdo29->query($sql);
		$q -> setFetchMode(PDO::FETCH_ASSOC);
		
		while($row = $q -> fetch()){
			echo english_to_bangla_converter10(htmlspecialchars($row['total_confirmed']));
		}
	}
	//total_confirmed_footer();
?>