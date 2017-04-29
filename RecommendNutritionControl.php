
<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
?>
<?php

	require("Class.php");

	$addh = new History;
			require_once('db_connect.php');

	$addh->datetoday = date('Y-m-d');

	$addh->foodBreakfast = $_POST['cal1'];
	$addh->foodLunch = $_POST['cal2'];
	$addh->foodDinner = $_POST['cal3'];
 

	$addh->userID = $_POST['userID'];
	$addh->Totalcal = $_POST['sumCal'];
	
	
	
	$addh->inserthistory($conn,$addh); 
?>
</body>

