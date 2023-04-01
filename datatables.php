<?php
	//include('./asset/english_to_bangla_converter.php');
	include('./admin/config.php');

	$sql = "SELECT * FROM district  ORDER BY confirmed DESC";

	$q = $pdo->query($sql);
	$q->setFetchMode(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>  
<html>  
<head>  
	<title>করোনা - সামারি</title>

	<?php include('datatables_css_js.php');?>

</head>  
<body >  
	<div class="container">
		<div class="col-12">
			<!-- Advanced Tables -->
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<p>৬৪ জেলা এক নজরে</p>
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