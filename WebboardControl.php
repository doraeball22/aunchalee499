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
	$deletew = new Webboard;
	
		require_once('db_connect.php');
	$deletew->questionID=$_POST['questionID'];
	$deletew->deletetopic($conn,$deletew);

?>
</body>

</html>