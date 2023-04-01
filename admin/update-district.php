<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	//error_reporting(0);
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['loggedin'])) {
		header('Location: index.php');
		exit;
	}
	$id = $_GET['id'];

	include('config.php');
	$table_name = "district";

	$query1 = "SELECT * FROM $table_name where id=$id";
	
	$q = $pdo->query($query1);
	$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/fav.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css"/>

	<!--Start While Loop for fecthing data from database-->
	<?php while($row = $q->fetch()){ ?>

    <title><?php echo htmlspecialchars($row['district_name']);?> জেলার  হালনাগাদ</title>
  </head>
  <body>
    <div class="container">
    <?php include('header.php');?>
	<div class="row">
		<div class="col-12">
			<!-- Advanced Tables -->
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<p>আউটকাম পরিসংখ্যান - আ্যাডমিন প্যানেল</p>
				</div>
				<div class="panel-body">
		<form role="form" method="post">
			<div class="form-group">
				<label for="district_name">জেলার নামঃ</label>
				<input type="text" class="form-control" name="district_name" id="district_name" value="<?php echo htmlspecialchars($row['district_name']);?>" readonly>
			</div>
			
			<div class="form-group">
				<label for="confirmed">আক্রান্তের সংখ্যাঃ</label>
				<input type="text" class="form-control" name="confirmed" id="confirmed" value="<?php echo htmlspecialchars($row['confirmed']);?>">
			</div>
			
			<div class="form-group">
				<label for="active">চিকিৎসাধীনের সংখ্যাঃ</label>
				<input type="text" class="form-control" name="active" id="active" value="<?php echo htmlspecialchars($row['active']);?>">
			</div>
			
			<div class="form-group">
				<label for="recovered">সুস্থ্যের সংখ্যাঃ</label>
				<input type="text" class="form-control" name="recovered" id="recovered" value="<?php echo htmlspecialchars($row['recovered']);?>">
			</div>
			
			<div class="form-group">
				<label for="deaths">মৃত্যের সংখ্যাঃ</label>
				<input type="text" class="form-control" name="deaths" id="deaths" value="<?php echo htmlspecialchars($row['deaths']);?>">
				<?php } ?>   
				<!--End While Loop for fecthing data from database-->
			</div>
			
			<button onclick="return confirm('আপনি কি হালনাগাদ করতে চাচ্ছেন?');" type="submit" name="update" class="btn btn-info">হালনাগাদ করুন</button>

		</form>
</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
		if(isset($_POST['update'])){
			$districtname = $_POST['district_name'];
			$confirmed = $_POST['confirmed'];
			$active = $_POST['active'];
			$recovered = $_POST['recovered'];
			$deaths = $_POST['deaths'];
			
			$query2 = "UPDATE $table_name SET district_name='$districtname' where id=$id";
			$q = $pdo->query($query2);
			
			$query3 = "UPDATE $table_name SET confirmed='$confirmed' where id=$id";
			$q = $pdo->query($query3);
			
			$query4 = "UPDATE $table_name SET active='$active' where id=$id";
			$q = $pdo->query($query4);
			
			$query5 = "UPDATE $table_name SET recovered='$recovered' where id=$id";
			$q = $pdo->query($query5);
			
			$query6 = "UPDATE $table_name SET deaths='$deaths' where id=$id";
			$q = $pdo->query($query6);
			
			//$_SESSION['updatemsg']="সফলভাবে তথ্য হালনাগাদ হয়েছে";
			//header('location:home.php');
			echo "<script type='text/javascript'> document.location ='district_table.php'; </script>";
		}	
?>