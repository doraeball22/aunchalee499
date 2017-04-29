<html>

<body>

<?php


	require("Class.php");

	
//print_r($_POST);exit();
	$deletex = new Exercise;
	
		require_once('db_connect.php');
	$deletex->exerciseID=$_POST['exerciseID'];
	$deletex->deleteexercise($conn,$deletex);

?>
</body>

</html>