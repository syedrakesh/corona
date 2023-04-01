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
	$table_name = "division";

	$query1 = "SELECT * FROM $table_name";
	
	$q = $pdo->query($query1);
	$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>  
<html>  
<head>  
<title>ভিত্তিক ভিত্তিক পরিসংখ্যান হালনাগাদ - আ্যাডমিন প্যানেল</title>
    <link rel="icon" href="../img/fav.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css"/>
	 
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.js"></script>

</head>  
<body>  
	<div class="container">
<?php include('header.php');?>
		<div class="row">
			<div class="col-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<p>ভিত্তিক ভিত্তিক পরিসংখ্যান হালনাগাদ - আ্যাডমিন প্যানেল</p>
					</div>
					<div class="panel-body">
						<form role="form" method="post"><?php while($row = $q->fetch()){ ?>
							<div class="form-group">
								<label for="division_name">বিভাগঃ</label>
								<input type="text" class="form-control" name="division_name" id="division_name" value="<?php echo htmlspecialchars($row['division_name']);?>" readonly>
							</div>
							<div class="form-group">
								<label for="division_confirm_number<?php echo htmlspecialchars($row['id']);?>">আক্রান্ত রোগীর সংখ্যাঃ</label>
								<input type="text" class="form-control" name="division_confirm_number<?php echo htmlspecialchars($row['id']);?>" id="division_confirm_number<?php echo htmlspecialchars($row['id']);?>" value="<?php echo htmlspecialchars($row['division_confirmed']);?>">
							</div>
							<div class="form-group">
								<label for="division_deaths_number<?php echo htmlspecialchars($row['id']);?>">মৃত রোগীর সংখ্যাঃ</label>
								<input type="text" class="form-control" name="division_deaths_number<?php echo htmlspecialchars($row['id']);?>" id="division_deaths_number<?php echo htmlspecialchars($row['id']);?>" value="<?php echo htmlspecialchars($row['division_deaths']);?>">
							</div>
							<?php } ?>   
							<!--End While Loop for fecthing data from database-->
							
							<button onclick="return confirm('আপনি কি হালনাগাদ করতে চাচ্ছেন?');" type="submit" name="update" class="btn btn-info">হালনাগাদ করুন</button>

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
		if(isset($_POST['update'])){
			$division_confirm_number1 = $_POST['division_confirm_number1'];
			$division_confirm_number2 = $_POST['division_confirm_number2'];
			$division_confirm_number3 = $_POST['division_confirm_number3'];
			$division_confirm_number4 = $_POST['division_confirm_number4'];
			$division_confirm_number5 = $_POST['division_confirm_number5'];
			$division_confirm_number6 = $_POST['division_confirm_number6'];
			$division_confirm_number7 = $_POST['division_confirm_number7'];
			$division_confirm_number8 = $_POST['division_confirm_number8'];
			
			$division_deaths_number1 = $_POST['division_deaths_number1'];
			$division_deaths_number2 = $_POST['division_deaths_number2'];
			$division_deaths_number3 = $_POST['division_deaths_number3'];
			$division_deaths_number4 = $_POST['division_deaths_number4'];
			$division_deaths_number5 = $_POST['division_deaths_number5'];
			$division_deaths_number6 = $_POST['division_deaths_number6'];
			$division_deaths_number7 = $_POST['division_deaths_number7'];
			$division_deaths_number8 = $_POST['division_deaths_number8'];

			$query2 = "UPDATE $table_name SET division_confirmed='$division_confirm_number1' where id=1";
			$q = $pdo->query($query2);
			
			$query3 = "UPDATE $table_name SET division_confirmed='$division_confirm_number2' where id=2";
			$q = $pdo->query($query3);
			
			$query4 = "UPDATE $table_name SET division_confirmed='$division_confirm_number3' where id=3";
			$q = $pdo->query($query4);
			
			$query5 = "UPDATE $table_name SET division_confirmed='$division_confirm_number4' where id=4";
			$q = $pdo->query($query5);
			
			$query6 = "UPDATE $table_name SET division_confirmed='$division_confirm_number5' where id=5";
			$q = $pdo->query($query6);
			
			$query7 = "UPDATE $table_name SET division_confirmed='$division_confirm_number6' where id=6";
			$q = $pdo->query($query7);
			
			$query8 = "UPDATE $table_name SET division_confirmed='$division_confirm_number7' where id=7";
			$q = $pdo->query($query8);
			
			$query16 = "UPDATE $table_name SET division_confirmed='$division_confirm_number8' where id=8";
			$q = $pdo->query($query16);
			
			
			
			$query9 = "UPDATE $table_name SET division_deaths='$division_deaths_number1' where id=1";
			$q = $pdo->query($query9);
			
			$query10 = "UPDATE $table_name SET division_deaths='$division_deaths_number2' where id=2";
			$q = $pdo->query($query10);
			
			$query11 = "UPDATE $table_name SET division_deaths='$division_deaths_number3' where id=3";
			$q = $pdo->query($query11);
			
			$query12 = "UPDATE $table_name SET division_deaths='$division_deaths_number4' where id=4";
			$q = $pdo->query($query12);
			
			$query13 = "UPDATE $table_name SET division_deaths='$division_deaths_number5' where id=5";
			$q = $pdo->query($query13);
			
			$query14 = "UPDATE $table_name SET division_deaths='$division_deaths_number6' where id=6";
			$q = $pdo->query($query14);
			
			$query15 = "UPDATE $table_name SET division_deaths='$division_deaths_number7' where id=7";
			$q = $pdo->query($query15);
			
			$query17 = "UPDATE $table_name SET division_deaths='$division_deaths_number8' where id=8";
			$q = $pdo->query($query17);
			
			echo "<script type='text/javascript'> document.location ='home.php'; </script>";
		}	
?>