<?php include('asset/user_info_details.php');?>
<?php include('asset/counter.php');?>
<!doctype html>
<html lang="en">
<head>
	<title>করোনার তথ্য বাংলাদেশের ম্যাপে</title>
	
	<!-- Required meta tags start-->
	<meta charset="utf-8">
	<meta name="description" content="বাংলাদেশের জেলা ভিক্তিক করোনার তালিকা এবং বাংলাদেশের ম্যাপে ভিতরে করোনার তথ্য">
	<meta name="keywords" content="বাংলাদেশ, করোনা, Corona, কোভিড-১৯, Covid-19, বাংলাদেশের ম্যাপ, Map of Bangladesh, Tabular List of corona">
	
	<meta property="og:title" content="জেলা ভিক্তিক করোনার তালিকা এবং বাংলাদেশের ম্যাপে করোনার তথ্য">
	<meta property="og:description" content="বাংলাদেশের জেলা ভিক্তিক করোনা তালিকা এবং বাংলাদেশের ম্যাপে ভিতরে করোনার তথ্য">
	<meta property="og:image" content="http://localhost/covid/img/bd-map.png">
	<meta property="og:url" content="http://localhost/covid/index.php">
	
	<meta name="author" content="Syed Rakesh Uddin">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Required meta tags end-->
	
	<link rel="icon" href="./img/fav.png" type="image/gif" sizes="16x16">

	<?php include('map_css_js.php');?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="main-map" >
					<h4 class="font-weight-bold text-center mt-3">করোনার তথ্য জানতে জেলার উপর ক্লিক করুন</h4>
					<?php include('asset/district.php');?>
					<?php include('svg.php');?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 mt-3">
				<?php include('datatables.php');?>
			</div>
		</div>
		
		<div class="row container mb-5" style="margin:15px auto">
		    <div class="col-md-6">
                <p class="lead text-center">প্রতিদিনের সর্বশেষ ফলাফল</p>
			    <?php include('asset/chart/per_day/index.php');?>
			</div>
			<div class="col-md-6">
		        <p class="lead text-center">প্রতিদিনের সর্বমোট ফলাফল</p>
			    <?php include('asset/chart/total/index.php');?>
			</div>
		</div>
		
		<div class="row container mb-5" style="margin:0 auto">
		    <div class="col-md-6">
		        <p class="lead text-center">বয়স ভিত্তিক ফলাফল</p>
			    <?php include('asset/chart/age/index.php');?>
			</div>
			<div class="col-md-6">
		        <p class="lead text-center">বিভাগ ভিত্তিক ফলাফল</p>
			    <?php include('asset/chart/division/index.php');?>
			</div>
		</div>
	
		<div class="row container mb-5" style="margin:0 auto">
			<div class="col-md-6 col-sm-12">
			    <p class="lead text-center">লিঙ্গভেদে ফলাফল</p>
				<?php include('asset/chart/gender/index.php');?>
			</div>
			<div class="col-md-6 col-sm-12">
			    <p class="lead text-center">সর্বশেষ ফলাফল</p>
				<?php include('asset/chart/outcome/index.php');?>
			</div>
		</div>
		<?php include('footer.php');?>
		<!--footer-function here-->
	</div>
</body>
</html>