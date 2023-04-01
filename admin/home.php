<?php
	//error_reporting(0);
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['loggedin'])) {
		header('Location: index.php');
		exit;
	}
	function english_to_bangla_converter($characters){ 
		$english=array("0","1","2","3","4","5","6","7","8","9");
		$bangla=array("০","১","২","৩","৪","৫",'৬',"৭","৮","৯"); 
		return str_replace($english,$bangla,$characters); 
	}

	include('config.php');
	
	$sql = "SELECT * FROM district  ORDER BY confirmed DESC";
	
	$q = $pdo->query($sql);
	$q->setFetchMode(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>  
<html>  
<head>  
<title>হোম - আ্যাডমিন প্যানেল</title>
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
		<div class="row">
			<div class="col-12">
				<div class="d-flex d-flex justify-content-end">
					<div class="mt-3">
						<a href="logout.php">
							<button class="btn btn-danger">
							    <i class="fa fa-sign-out" aria-hidden="true">
							        Logout
							    </i>
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<p>হোম - অ্যাডমিন প্যানেল</p>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-12 align-self-center">
								<div class="card-deck">
									<div class="card bg-secondary m-3">
										<a href="./district_table.php" class="card-link text-white">
											<img class="card-img-top" src="./img/district-table.png" alt="৬৪ জেলার তথ্য এক নজরে">
											<div class="card-header">৬৪ জেলা</div>
											
											<div class="card-body">
												<h5 class="card-title">বাংলাদেশের ম্যাপ ও টেবিল</h5>
												<p class="card-text">৬৪ জেলার তথ্য এক নজরে বাংলাদেশের ম্যাপের ভিতরে ও টেবিল আকারে তথ্য এবং তথ্য অনুসন্ধান</p>
											</div>
										</a>
									</div>
									<div class="card bg-dark m-3">
										<a href="./per_day_chart.php" class="card-link text-white">
											<img class="card-img-top" src="./img/per-day-chart.png" alt="দৈনিক রোগীর পরিসংখ্যান">
											<div class="card-header">দৈনিক</div>
											
											<div class="card-body">
												<h5 class="card-title">লাইন চার্ট</h5>
												<p class="card-text">প্রতিদিনের আক্রান্ত, চিকিৎসাধীন, সুস্থ্য এবং মৃত রোগীদের পরিসংখ্যান</p>
											</div>
										</a>
									</div>
									<div class="card bg-success m-3">
										<a href="./age_chart.php" class="card-link text-white">
											<img class="card-img-top" src="./img/age-chart.png" alt="বয়স ভিত্তিক রোগীর পরিসংখ্যান">
											<div class="card-header">বয়স</div>
											
											<div class="card-body">
												<h5 class="card-title">বার চার্ট</h5>
												<p class="card-text">বয়স ভিত্তিক রোগীর পরিসংখ্যান</p>
											</div>
										</a>
									</div>

								</div>
								<div class="card-deck">
									<div class="card bg-info m-3">
										<a href="./division_chart.php" class="card-link text-white">
											<img class="card-img-top" src="./img/division-chart.png" alt="বিভাগ ভিত্তিক হালনাগাদ">
											<div class="card-header">বিভাগ</div>
											
											<div class="card-body">
												<h5 class="card-title">বার চার্ট</h5>
												<p class="card-text">বিভাগ ভিত্তিক রোগীর পরিসংখ্যান হালনাগাদ</p>
											</div>
										</a>
									</div>										
									<div class="card bg-danger m-3">
										<a href="./gender_chart.php" class="card-link text-white">
											<img class="card-img-top" src="./img/gender-chart.png" alt="লিঙ্গ ভিত্তিক রোগীর পরিসংখ্যান">
											<div class="card-header">লিঙ্গ</div>
											
											<div class="card-body">
												<h5 class="card-title">পাই চার্ট</h5>
												<p class="card-text">পাই চার্টে লিঙ্গ ভিত্তিক রোগীর পরিসংখ্যান সংখ্যা ও শতাংশে</p>
											</div>
										</a>
									</div>
									<div class="card bg-warning m-3">
										<a href="./outcome_chart.php" class="card-link text-white">
											<img class="card-img-top" src="./img/outcome-chart.png" alt="বর্তমান পরিস্থিতির পরিসংখ্যান">
											<div class="card-header">সর্বশেষ ফলাফল</div>
											
											<div class="card-body">
												<h5 class="card-title">পাই চার্ট</h5>
												<p class="card-text">বর্তমান পরিস্থিতির পরিসংখ্যান সংখ্যা ও শতাংশে</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>  
</body>  
</html>
<?php ?>