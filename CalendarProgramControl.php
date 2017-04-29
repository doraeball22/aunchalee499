<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
?>

<?php

require("class.php");
require_once('db_connect.php');
//if programtype=="ประภท?"
  //while
   $userID = $_SESSION["userID"];
$query = "SELECT * FROM program_transaction where userID='$userID' ";
$result = mysqli_query($conn,$query);

$a = array();
$i = 0;

$a["monthly"] = array();
// $enddate=date("Y/m/d",strtotime("+ 1 month", strtotime($start)));//

while($rows=mysqli_fetch_array($result)){
	$programID = $rows['programID'];
	$query = "SELECT * FROM exercise WHERE programID = $programID";
	$result2 = mysqli_query($conn,$query);
     
	while($rows2=mysqli_fetch_array($result2)){

		$date = new DateTime($rows['start_Program']);

		$date_format = sprintf("+%d day", (int)$rows2["exerciseDay"]-1);
		$date = $date->modify($date_format);
		$date = $date->format("Y-m-d");
		/*$date = strtotime($rows['start_Program']);
		$edate = strtotime('+1 month', $date);
		$date = date('Y-m-d', $date);
		$edate = date('Y-m-d', $edate);
		*/
		//echo $date;


		$a["monthly"][$i] = array();
		$a["monthly"][$i]["id"] = $i;
		$a["monthly"][$i]["name"] = $rows2["exerciseName"];
		$a["monthly"][$i]["startdate"] = $date;
		$a["monthly"][$i]["enddate"] = $date;
		// $a["monthly"][$i]["starttime"] = "12:00";
		// $a["monthly"][$i]["endtime"] = "2:00";
		$a["monthly"][$i]["color"] = "#088A85";
		$a["monthly"][$i]["url"] =$rows2["exerciseURL"] ;

		$i++;
	}
	
}


echo json_encode($a);


?>
