	<link rel="stylesheet" href="./css/style.css">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
	<script>
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover({
			placement : 'auto',
			trigger : 'hover',
			html : true
		});
	});
	</script>
	<style>
		.popover .arrow {
			display: none;
			font-family: kiron !important; 
			font-weight: bold;
		}
		p, text, .popover-header,.popover-body{
			font-family: kiron !important; 
			font-weight: bold;
			line-height: 1.3;
		}
		text, text:hover{
			-webkit-transition-duration: 500ms;
			transition-duration: 500ms;
			text-decoration: none;
			outline: 0 solid transparent;
			cursor: pointer;
			font-weight: normal;
			font-size: 16px;
			text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
		}
	</style>