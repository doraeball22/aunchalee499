<?php
			require("Class.php");

			$updatex = new Exercise;

			require_once('db_connect.php');

		    	$updatex->exerciseID=$_POST['exerciseID'];
		    	$updatex->exerciseName = $_POST['exerciseName'];
				$updatex->exerciseImage = $_FILES['exerciseImage']['name'];
				$updatex->exerciseDetail = $_POST['exerciseDetail'];
				$updatex->exerciseType = $_POST['exerciseType'];
				$updatex->exerciseDay = $_POST['exerciseDay'];
		    	$updatex->exerciseURL = $_POST['exerciseURL'];
				// $updatex->programID = $_POST['programID'];
		    	
		    	$updatex->updateexercise($conn,$updatex); 


	?>
	
