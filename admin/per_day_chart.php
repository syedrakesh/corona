<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	//error_reporting(0);
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['loggedin'])) {
		header('Location: index.php');
		exit;
	}
	//$id = $_GET['id'];

	include('config.php');
	$table_name = "chart";
	
	date_default_timezone_set('asia/dhaka');
    $currentDateTime = date('d-m-Y');
	//echo  $currentDateTime;

	$query1 = "SELECT * FROM $table_name WHERE date='$currentDateTime'";
	//$query1 = "SELECT * FROM $table_name WHERE date='12-04-2020'";

	$q = $pdo->query($query1);
	$q->setFetchMode(PDO::FETCH_ASSOC);
	
	$checker = 0;
?>
<!DOCTYPE html>  
<html>  
<head>  
<title>দিন ভিত্তিক পরিসংখ্যান হালনাগাদ - আ্যাডমিন প্যানেল</title>
    <link rel="icon" href="../img/fav.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css"/>
	
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	 
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.js"></script>
	
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

</head>  
<body>  
	<div class="container">
<?php include('header.php');?>
		<div class="row">
			<div class="col-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<p>দিন ভিত্তিক পরিসংখ্যান হালনাগাদ - আ্যাডমিন প্যানেল</p>
					</div>
					<div class="panel-body">
						<form role="form" method="post">
						
						
							<div class="form-group">
								<label for="datepicker">তারিখঃ</label>
								<input id="datepicker" class="form-control" name="datepicker" value="<?php echo $currentDateTime;?>" width="276"/>
								<script>  
									var today, datepicker;
									today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
									datepicker = $('#datepicker').datepicker({
										uiLibrary: 'bootstrap4',
										minDate: today,
										maxDate: today,
										format: 'dd-mm-yyyy'
									});
								</script>
							</div>
							
							<?php while($row = $q->fetch()){
								//echo htmlspecialchars($row['id']);
								$check_date = $row['date'];
								//echo $check_date;
								if($check_date == $currentDateTime){
									//echo "bal";
									//echo htmlspecialchars($row['id']);
									$checker = 1;
									?>
									
									<div class="form-group">
										<label for="per_day_confirmed_update">আক্রান্তের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_confirmed_update" id="per_day_confirmed_update" value="<?php echo htmlspecialchars($row['per_day_confirmed']);?>" >
									</div>
									
									<div class="form-group">
										<label for="per_day_deaths_update">মৃতের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_deaths_update" id="per_day_deaths_update" value="<?php echo htmlspecialchars($row['per_day_deaths']);?>" >
									</div>
									
									<div class="form-group">
										<label for="per_day_active_update">অ্যাক্টিভের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_active_update" id="per_day_active_update" value="<?php echo htmlspecialchars($row['per_day_active']);?>" >
									</div>
									
									<div class="form-group">
										<label for="per_day_recovered_update">সুস্থ্যের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_recovered_update" id="per_day_recovered_update" value="<?php echo htmlspecialchars($row['per_day_recovered']);?>" >
									</div>
									
									<button onclick="return confirm('আপনি কি হালনাগাদ করতে চাচ্ছেন?');" type="submit" name="submit_update" class="btn btn-info">হালনাগাদ করুন</button>
									
								<?php }
							?>
									
							<?php }?>
							<!--End While Loop for fecthing data from database-->
							<?php
							
							$query2 = "SELECT * FROM $table_name GROUP BY per_day_confirmed HAVING MAX(id)=(SELECT MAX(id) FROM $table_name)";
							$q = $pdo->query($query2);
							
							if($checker == 0){
								while($row = $q->fetch()){?>
									
									<div class="form-group">
										<label for="per_day_confirmed_create">আক্রান্তের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_confirmed_create" id="per_day_confirmed_create" value="<?php echo htmlspecialchars($row['per_day_confirmed']);?>" >
									</div>
									
									<div class="form-group">
										<label for="per_day_deaths_create">মৃতের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_deaths_create" id="per_day_deaths_create" value="<?php echo htmlspecialchars($row['per_day_deaths']);?>" >
									</div>
									
									<div class="form-group">
										<label for="per_day_active_create">অ্যাক্টিভের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_active_create" id="per_day_active_create" value="<?php echo htmlspecialchars($row['per_day_active']);?>" >
									</div>
									
									<div class="form-group">
										<label for="per_day_recovered_create">সুস্থ্যের সংখ্যাঃ</label>
										<input type="text" class="form-control" name="per_day_recovered_create" id="per_day_recovered_create" value="<?php echo htmlspecialchars($row['per_day_recovered']);?>" >
									</div>
									
									<button onclick="return confirm('আপনি কি হালনাগাদ করতে চাচ্ছেন?');" type="submit" name="submit_create" class="btn btn-info">হালনাগাদ করুন</button>
									
									<?php }?>
									
							<?php }
							?>
							
								
								

						</form>
					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>  
</body>  
</html>
<?php
	$query5 = "SELECT MAX(id) as max FROM $table_name";
	$q = $pdo->query($query5);
							
	while($row = $q->fetch()){
			$hi = $row['max'];
	}
	$max = "'".$hi."'";
	//echo $max;
		
	if(isset($_POST['submit_create'])){
		$datepicker = $_POST['datepicker'];
		
		$per_day_confirmed_create = $_POST['per_day_confirmed_create'];
		$per_day_deaths_create = $_POST['per_day_deaths_create'];
		$per_day_active_create = $_POST['per_day_active_create'];
		$per_day_recovered_create = $_POST['per_day_recovered_create'];

		$query3 = "INSERT INTO $table_name (date,per_day_confirmed,per_day_deaths,per_day_active,per_day_recovered) VALUES ('$datepicker','$per_day_confirmed_create','$per_day_deaths_create','$per_day_active_create','$per_day_recovered_create')";
		$q = $pdo->query($query3);
		
		echo "<script type='text/javascript'> document.location ='home.php'; </script>";
	}elseif(isset($_POST['submit_update'])){
		$datepicker = $_POST['datepicker'];
		
		$per_day_confirmed_update = $_POST['per_day_confirmed_update'];
		$per_day_deaths_update = $_POST['per_day_deaths_update'];
		$per_day_active_update = $_POST['per_day_active_update'];
		$per_day_recovered_update = $_POST['per_day_recovered_update'];

		$query4 = "UPDATE $table_name SET date='$datepicker',per_day_confirmed='$per_day_confirmed_update',per_day_deaths='$per_day_deaths_update',per_day_active='$per_day_active_update',per_day_recovered='$per_day_recovered_update' WHERE id=$max";
		$q = $pdo->query($query4);
		
		echo "<script type='text/javascript'> document.location ='home.php'; </script>";
	}	
?>