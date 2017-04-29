<?php if (!isset($_SESSION)) { session_start(); }
$curdate1 = date('Y-m-d');
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );

}?>
<?php

			require("Class.php");

			$updateu = new Userlogin;

			require_once('db_connect.php');

		    	$updateu->weight=$_POST['weight'];
		    	$updateu->height = $_POST['height'];
		    	
		    	$updateu->updateuser($conn,$updateu); 


	?>
	