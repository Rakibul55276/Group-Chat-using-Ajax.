	<?php	
		
		$file = $_FILES['pdf']['name'];
		$file_loc = $_FILES['pdf']['tmp_name'];
		$file_size = $_FILES['pdf']['size'];
		$file_type = $_FILES['pdf']['type'];
		$folder="uploads/";
		
		// new file size in KB
		$new_size = $file_size/1024;  
		// new file size in KB
		 
		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case
		 
		$final_file=str_replace(' ','-',$new_file_name);
 
		move_uploaded_file($file_loc,$folder.$final_file);
		
	?>