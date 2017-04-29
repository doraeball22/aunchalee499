<?php
require_once('db_connect.php');

$bmi = "";
$bmr = "";
$sex = "";
$weight = "";
$height = "";
$age = "";
 
$sql = "SELECT * FROM userlogin where userID = 'A001'";
$result = $conn->query($sql);

function bmr($sex,$weight,$height,$age) {
	switch ($sex) {
		case 1:
			$bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
			break;
		case 2:
			$bmr = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
			break;
	
	}
	return $bmr;
}

function bmi($weight,$height) {
	$height_meter = $height/100;
	$bmi = $weight/($height_meter*$height_meter);
	return $bmi;
}


if ($result->num_rows == 1) {
   $row = $result->fetch_assoc();
   $sex = $row["sex"];
   $weight = $row["weight"];
   $height = $row["height"];
   $age = $row["age"];
   $result_bmr = bmr($sex,$weight,$height,$age);
   $result_bmi = bmi($weight,$height);
   $result_bmi_deci = sprintf("%1\$.2f",$result_bmi);
   echo "BMR:".$result_bmr.'<br/>';
   echo "BMI:".$result_bmi_deci.'<br/>';
   if($result_bmi_deci < 18.50) {
	   echo "คุณมีน้ำหนักน้อย อยู่ในเกณฑ์ผอม";
   }
   else if($result_bmi_deci >= 18.50 &&  $result_bmi_deci <= 22.99) {
	   echo "คุณมีน้ำหนักตัวปกติ";
   }
   else if($result_bmi_deci >= 23.00 && $result_bmi_deci <= 24.99) {
	   echo "คุณมีน้ำหนักอยู่ในเกณฑ์อ้วนระดับที่ 1";
   }
   else if($result_bmi_deci >= 25.00 && $result_bmi_deci <= 29.99) {
	   echo "คุณมีน้ำหนักอยู่ในเกณฑ์อ้วนระดับที่ 2";
   }
   else
   {	   
	   echo "คุณมีน้ำหนักอยู่ในเกณฑ์อ้วนระดับที่ 3";
   }
	

} else {
    echo "ไม่พบข้อมูลหรือเจอข้อมูลมากกว่า 1 คน";
}

mysqli_close($conn);



?>