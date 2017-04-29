<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
?>
<html>

<body>

<?php


	require("Class.php");

	
//print_r($_POST);exit();
	$deleteans = new Webboard;
	
		require_once('db_connect.php');
	$deleteans->answerID=$_POST['answerID'];
	$deleteans->deleteanswer($conn,$deleteans);

?>
</body>

</html>