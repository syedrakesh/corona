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
<title>জেলা ভিত্তিক পরিসংখ্যান হালনাগাদ - আ্যাডমিন প্যানেল</title>
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
	
	<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>

	<script>  
		$(document).ready(function(){  
			$('#district_data').DataTable({
				"language": {
					"lengthMenu": '<select name="district_data_length" aria-controls="district_data" class="custom-select custom-select-sm form-control form-control-sm">'+
					  '<option value="10">১০</option>'+
					  '<option value="25">২০</option>'+
					  '<option value="50">৩০</option>'+
					  '<option value="40">৪০</option>'+
					  '<option value="50">৫০</option>'+
					  '<option value="-1">সকল</option>'+
					  '</select> সারি',
					"zeroRecords": "কোনো তথ্য পাওয়া যায় নি - দুঃখিত",
					"info": "মোট _PAGES_ পেইজের _PAGE_ নাম্বার পেইজ",
					"infoEmpty": "কোনো তথ্য পাওয়া যায় নি",
					"infoFiltered": "(মোট  _MAX_  টি রেকর্ড থেকে ফিল্টার করা হয়েছে)",
					"paginate": {
					  "previous": "পূর্ববর্তি",
					  "1": "১",
					  "next": "পরবর্তি"
					},
					"search": "বাংলায় অনুসন্ধানঃ"
				},
				"ordering": false,
			});
		});
	</script>
</head>  
<body>  
	<div class="container">
<?php include('header.php');?>
		<div class="row">
			<div class="col-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<p>জেলা ভিত্তিক পরিসংখ্যান হালনাগাদ - আ্যাডমিন প্যানেল</p>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="district_data">
								<thead>
									<tr>
										<th>জেলার নাম</th>
										<th>আক্রান্ত</th>
										<th>চিকিৎসাধীন</th>
										<th>সুস্থ</th>
										<th>মৃত</th>
										<th>সম্পাদন</th>									
									</tr>
								</thead>
								<tbody>
									<!--Start While Loop for fecthing data from database-->
									<?php while($row = $q->fetch()){ ?>
									
									<tr>
									
										<td><?php echo htmlspecialchars($row['district_name']);?></td>
										<td><?php echo english_to_bangla_converter(htmlspecialchars($row['confirmed']));?></td>
										<td><?php echo english_to_bangla_converter(htmlspecialchars($row['active']));?></td>
										<td><?php echo english_to_bangla_converter(htmlspecialchars($row['recovered']));?></td>
										<td><?php echo english_to_bangla_converter(htmlspecialchars($row['deaths']));?></td>
										
										<td>

											<a href="update-district.php?id=<?php echo htmlspecialchars($row['id']);?>">
												<button class="btn btn-primary">
													<i class="fa fa-edit">
													</i>  হালনাগাদ
												</button>
											</a>
									
										</td>
										
									</tr>
									
									<?php } ?>   
									<!--End While Loop for fecthing data from database-->
								</tbody>
							</table>
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