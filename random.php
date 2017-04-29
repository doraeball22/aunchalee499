<?php
require_once('db_connect.php');

$bmr = 6000;
$potion = 3;
$limit_food = 5;    //จำนวนรายการอาหารแต่ละมื้อ

$avg_bmr = avgbmr($bmr,$potion);

echo "ค่าเฉลี่ย BMR ต่อมื้อ ".$avg_bmr." <br> จำนวนรายการอาหารแต่ละมื้อ: ".$limit_food."<br>";

$food_morning = array();
$food_afternoon = array();
$food_evening = array();


$sql_m = 'SELECT * 
		  FROM food
		  WHERE foodID like "B%" AND calories <='.$avg_bmr.'
		  ORDER BY RAND()
		  LIMIT '.$limit_food;
 
$sql_a = 'SELECT * 
		  FROM food
		  WHERE foodID like "L%" AND calories <='.$avg_bmr.'
		  ORDER BY RAND()
		  LIMIT '.$limit_food;
  
$sql_e = 'SELECT * 
		  FROM food
		  WHERE  foodID like "D%" AND calories <='.$avg_bmr.'
		  ORDER BY RAND()
		  LIMIT '.$limit_food;
 
 
$result_moring = $conn->query($sql_m);
$result_afternoon = $conn->query($sql_a);
$result_evening = $conn->query($sql_e);


if ($result_moring->num_rows > 0) {
	echo " <br>มื้อเช้า <br>";
	while($food_morning = $result_moring->fetch_assoc()) {
		$m = 1;
		echo "รายการที่ ".$m." อาหารที่แนะนำคือ ".$food_morning['foodName']. " จำนวนแคลลอรี่ = ".$food_morning['calories'].'<br>';
		$m++;
	}
}
else {
		echo "อาหารเช้าไม่มีในระบบ";
}

if ($result_afternoon->num_rows > 0) {
	echo " <br>มื้อกลางวัน <br>";
	while($food_afternoon = $result_afternoon->fetch_assoc()) {
		$a = 1;
		echo "รายการที่ ".$m." อาหารที่แนะนำคือ ".$food_afternoon['foodName']. " จำนวนแคลลอรี่ = ".$food_afternoon['calories'].'<br>';
		$a++;
	}
}
else {
		echo "อาหารกลางวันไม่มีในระบบ";
}

if ($result_evening->num_rows > 0) {
	echo " <br>มื้อเย็น <br>";
	while($food_evening = $result_evening->fetch_assoc()) {
		$e = 1;
		echo "รายการที่ ".$m." อาหารที่แนะนำคือ ".$food_evening['foodName']. " จำนวนแคลลอรี่ = ".$food_evening['calories'].'<br>';
		$e++;
	}
}
else {
		echo "อาหารเย็นไม่มีในระบบ";
}

mysqli_close($conn);

function avgbmr($bmr,$potion) {
	$avgbmr = round(($bmr/$potion),0,PHP_ROUND_HALF_DOWN);
	return $avgbmr;
}


?>