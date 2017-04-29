<?php
			require("Class.php");

			$updaten = new News;

			require_once('db_connect.php');

		    	
		    	$updaten->newsID=$_POST['newsID'];
		    	$updaten->newsTitle=$_POST['newsTitle'];
		    	$updaten->newsDetail=$_POST['newsDetail'];
		    	$updaten->updatenews($conn,$updaten); 


	?>
	