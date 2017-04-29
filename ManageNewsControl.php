<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php


	require("Class.php");

	
//print_r($_POST);exit();
	$deleten = new News;
	
		require_once('db_connect.php');
	$deleten->newsID=$_POST['newsID'];
	$deleten->deletenews($conn,$deleten);

?>
</body>

</html>

