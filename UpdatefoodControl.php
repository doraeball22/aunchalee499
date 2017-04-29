<?php
			require("Class.php");

			$updatef = new Food;

			require_once('db_connect.php');

		    	$updatef->foodID=$_POST['foodID'];
		    	$updatef->foodName = $_POST['foodName'];
		    	$updatef->calories=$_POST['calories'];
		    	$updatef->value = $_POST['value'];
				$updatef->imagefood = $_FILES['imagefood']['name'];
				
				
		    	
		    	
		    	$updatef->updatefood($conn,$updatef); 


	?>
	