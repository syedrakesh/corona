<?php
	function english_to_bangla_converter($characters){ 
		$english=array("0","1","2","3","4","5","6","7","8","9");
		$bangla=array("০","১","২","৩","৪","৫",'৬',"৭","৮","৯"); 
		return str_replace($english,$bangla,$characters); 
	}
?>