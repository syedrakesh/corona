<?php
	include('english_to_bangla_converter.php');
		
	function Barguna(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=1";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Barishal(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=2";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Bhola(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=3";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Jhalokati(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=4";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Patuakhali(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=5";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Pirojpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=6";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Bandarban(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=7";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Brahmanbaria(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=8";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Chandpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=9";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Chittagong(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=10";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Comilla(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=11";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Coxs_Bazar(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=12";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Feni(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=13";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Khagrachhari(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=14";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Lakshmipur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=15";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Noakhali(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=16";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Rangamati(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=17";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Dhaka(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=18";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Faridpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=19";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Gazipur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=20";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Gopalganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=21";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Kishoreganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=22";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Madaripur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=23";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Manikganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=24";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Munshiganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=25";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Narayanganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=26";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Narsingdi(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=27";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Rajbari(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=28";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Shariatpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=29";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Tangail(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=30";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Bagerhat(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=31";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Chuadanga(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=32";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Jessore(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=33";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Jhenaidah(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=34";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Khulna(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=35";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Kushtia(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=36";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Magura(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=37";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Meherpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=38";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Narail(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=39";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Satkhira(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=40";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Jamalpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=41";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Mymensingh(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=42";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Netrokona(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=43";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Sherpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=44";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Bogra(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=45";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Joypurhat(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=46";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Naogaon(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=47";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Natore(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=48";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Chapai_Nawabganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=49";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Pabna(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=50";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Rajshahi(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=51";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Sirajganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=52";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Dinajpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=53";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Gaibandha(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=54";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Kurigram(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=55";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Lalmonirhat(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=56";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Nilphamari(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=57";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Panchagarh(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=58";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Rangpur(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=59";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Thakurgaon(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=60";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Habiganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=61";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Moulvibazar(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=62";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Sunamganj(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=63";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
	
	function Sylhet(){
	
		include('config.php');
		
		$sql = "SELECT * FROM $table_name WHERE id=64";

		$q = $pdo->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
			
		while ($row = $q->fetch()){
			echo  'data-toggle="popover" title="';
			echo $row['district_name'];
			echo '" data-content="';
			echo english_to_bangla_converter("আক্রান্তঃ ".htmlspecialchars($row['confirmed']))."<br>";
			echo english_to_bangla_converter("চিকিৎসাধীনঃ ".htmlspecialchars($row['active']))."<br>";
			echo english_to_bangla_converter("সুস্থঃ ".htmlspecialchars($row['recovered']))."<br>";
			echo english_to_bangla_converter("মৃতঃ ".htmlspecialchars($row['deaths'])).'"';
		}
	}
?>