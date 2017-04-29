
<?php

	require("Class.php");

	$addr = new Recommendnutrition;
			require_once('db_connect.php');

	
	// date_default_timezone_set("Asia/Bangkok");


	
	
	$addr->datestart =date('Y-m-d H:i:s');
	$addr->endate = date("Y-m-d",strtotime("+ 1 month", strtotime($addr->datestart)));
	$addr->userID =$_POST['userID'];
	
	
	$addr->insertrecommend($conn,$addr); 
?>

