<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (isset($_SESSION['loggedin'])) {
		header('Location: home.php');
		exit;
	}
	?>
<!DOCTYPE html>  
<html>  
<head>  
<title>লগিন</title>
    <link rel="icon" href="../img/fav.png" type="image/gif" sizes="16x16">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css"/>
	 
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<!--LOGIN PANEL START-->           
	<div class="row mt-5">
		<div class="col-md-12">
		<h4 class="header-line text-center"> অ্যাডমিন প্যানেল</h4>
		</div>
		<div class="col-12 d-flex justify-content-center" >
			<div class="col-4 panel panel-info">
				<div class="panel-heading">
				<p class="text-center mb-0"> লগিন ফরম </p>
				</div>
				<div class="panel-body">
					<form action="authenticate.php" role="form" method="post">

						<div class="form-group">
						<label> ইউজার নেইম</label>
						<input class="form-control" type="text" name="username" required />
						</div>
						
						<div class="form-group">
						<label> পাসওয়ার্ড</label>
						<input class="form-control" type="password" name="password" required />
						</div>
						
						<div class="col text-center">
						<button type="submit" name="login" class="btn btn-info"> লগিন</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--LOGIN PANEL END-->
</div>
</body>
</html>