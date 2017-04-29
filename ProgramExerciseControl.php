
<body>
<?php

	require("Class.php");

	$addp = new Programexercise;
			require_once('db_connect.php');
	$start=$_POST['startDate'];
	
	
	$enddate=date("Y/m/d",strtotime("+ 1 month", strtotime($start)));//


	

	$addp->start_Program = $start;
	
	$addp->end_Program = $enddate;
	//enddate=startdate+29
	$addp->userID = $_POST['userID'];
	$addp->programID = $_POST['programID'];
	
	$addp->insertprogram($conn,$addp); 
?>
</body>

