
<body>
<?php

	require("Class.php");

	$adde = new Exercise;
			require_once('db_connect.php');

	// $adde->exerciseID = $_POST['exerciseID'];
	$adde->exerciseName = $_POST['exerciseName'];
	$adde->exerciseImage = $_FILES['exerciseImage']['name'];
	$adde->exerciseDetail = $_POST['exerciseDetail'];
	$adde->exerciseType = $_POST['exerciseType'];
	$adde->exerciseDay = $_POST['exerciseDay'];
	 $adde->exerciseURL = $_POST['exerciseURL'];
	$adde->programID = $_POST['programID'];
	
	
	$adde->insertexercise($conn,$adde);
?>
</body>

