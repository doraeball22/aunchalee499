
<body>
<?php

	require("Class.php");

	$addf = new Food;
		require_once('db_connect.php');
	$insertf = $_POST['Typefood'];
	if ($insertf=="breakfast"){
		$query="SELECT foodid from food WHERE foodid LIKE 'B%' ORDER BY  foodid DESC LIMIT 1";
		 $result = mysqli_query($conn,$query);
		 while($rows=mysqli_fetch_array($result)) {
			$f = $rows['foodid'];
			$array = str_split($f);
			$array[3] +=1;
			if($array[3] == '10'){
				$array[2] += 1;
				if($array[2] == '10'){
					$array[1] += 1;
					$array[2] = '0';
				}
				$array[3] = '0';
			}
			$new_foodid = $array[0].$array[1].$array[2].$array[3];
		}
	}else if($insertf=="lunch"){
		$query="SELECT foodid from food WHERE foodid LIKE 'L%' ORDER BY  foodid DESC LIMIT 1";
		 $result = mysqli_query($conn,$query);
		 while($rows=mysqli_fetch_array($result)) {
			$f = $rows['foodid'];
			$array = str_split($f);
			$array[3] +=1;
			if($array[3] == '10'){
				$array[2] += 1;
				if($array[2] == '10'){
					$array[1] += 1;
					$array[2] = '0';
				}
				$array[3] = '0';
			}
			$new_foodid = $array[0].$array[1].$array[2].$array[3];

		}
	}else if($insertf=="dinner"){
		$query="SELECT foodid from food WHERE foodid LIKE 'D%' ORDER BY  foodid DESC LIMIT 1";
		 $result = mysqli_query($conn,$query);
		 while($rows=mysqli_fetch_array($result)) {
			$f = $rows['foodid'];
			$array = str_split($f);
			$array[3] +=1;
			if($array[3] == '10'){
				$array[2] += 1;
				if($array[2] == '10'){
					$array[1] += 1;
					$array[2] = '0';
				}
				$array[3] = '0';
			}
			$new_foodid = $array[0].$array[1].$array[2].$array[3];
		}
	}
	$addf->foodid = $new_foodid;
	$addf->foodName = $_POST['foodName'];
	$addf->calories = $_POST['calories'];
	$addf->value = $_POST['value'];
	$addf->imagefood = $_FILES['imagefood']['name'];
	
	$addf->insertfood($conn,$addf);
?>
</body>

