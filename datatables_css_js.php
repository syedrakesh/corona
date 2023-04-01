<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css"/>
	 
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.js"></script>

	<script>  
		$(document).ready(function(){  
			$('#district_data').DataTable( {
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
					//"info": "পৃষ্ঠা _PAGE_ এর _PAGES_ দেখাচ্ছে",
					"info": "",
					"infoEmpty": "কোনো তথ্য পাওয়া যায় নি",
					"infoFiltered": "(মোট  _MAX_  টি রেকর্ড থেকে ফিল্টার করা হয়েছে)",
					"paginate": {
					  "previous": "পূর্ববর্তি",
					  "1": "১",
					  "next": "পরবর্তি"
					},
					"search": "বাংলায় অনুসন্ধানঃ"
				},
				"ordering": false
			});
		});
	</script>
	<style>
		body{
			font-family: kiron !important;
		}
		.popover .arrow {
			visibility:hidden;
		}
		div.dataTables_wrapper div.dataTables_filter input {
			width: auto;
		}
	</style>
	