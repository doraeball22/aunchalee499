<html>

<body>

<?php


	require("Class.php");

	
//print_r($_POST);exit();
	$deletef = new Food;
	
		require_once('db_connect.php');
	$deletef->foodID=$_POST['foodID'];
	$deletef->deletefood($conn,$deletef);

?>
</body>

</html>