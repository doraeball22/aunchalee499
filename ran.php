<html>
<head>
	<title>Food</title>
</head>
<body>

<?php
require_once('db_connect.php');

$bmr = 6000;
$potion = 3;
$limit_food = 2;    //จำนวนรายการอาหารแต่ละมื้อ

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
 
$emparray = array();
$result_moring = $conn->query($sql_m);
$result_afternoon = $conn->query($sql_a);
$result_evening = $conn->query($sql_e);


if ($result_moring->num_rows > 0) {
	echo " <br>มื้อเช้า <br>";
	$m = 0;
	while($food_morning = $result_moring->fetch_assoc()) {
	    echo '<input type="checkbox"  value='.$food_morning['calories'].' name="cal1" />'.$food_morning['foodName'];
		$m++;
	}
}
else {
		//$emparray[] = "อาหารเช้าไม่มีในระบบ";
		
}
echo "<br>";
if ($result_afternoon->num_rows > 0) {
	echo " <br>มื้อกลางวัน<br>";
	$a = 1;
	while($food_afternoon = $result_afternoon->fetch_assoc()) {	
		echo '<input type="checkbox"  value='.$food_afternoon['calories'].' name="cal2" />'.$food_afternoon['foodName'];
		$a++;
	}
}
else {
		echo "อาหารกลางวันไม่มีในระบบ";
}
echo "<br>";

if ($result_evening->num_rows > 0) {
	echo " <br>มื้อเย็น <br>";
	$e = 1;
	while($food_evening = $result_evening->fetch_assoc()) {		
	$emparray[] = $food_evening;
		echo '<input type="checkbox"  value='.$food_evening['calories'].' name="cal3" />'.$food_evening['foodName'];
		$e++;
	}
}
else {
		echo "อาหารเย็นไม่มีในระบบ";
}

mysqli_close($conn);

echo COUNT($emparray);

function avgbmr($bmr,$potion) {
	$avgbmr = round(($bmr/$potion),0,PHP_ROUND_HALF_DOWN);
	return $avgbmr;
}

?>

<p>
รวม Calories: <span id="sumCal"></span>


</body>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script>
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
  
  var calM = [];
	  $.each($("input[name='cal1']:checked"), function(){            
                calM.push($(this).val());
            });
			
	  var calA = [];
	  $.each($("input[name='cal2']:checked"), function(){            
                calA.push($(this).val());
      });
	   
	  var calE = [];
	  $.each($("input[name='cal3']:checked"), function(){            
                calE.push($(this).val());
      });
	var sumCal = Number(calM.join(", "))+Number(calA.join(", "))+Number(calE.join(", "));
	
console.log(sumCal);
$('#sumCal').html(sumCal);
  
});
</script>

</html>