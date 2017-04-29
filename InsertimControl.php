<?php


	require("Class.php");

	
//print_r($_POST);exit();
	$deleten = new News;
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "recommendfit";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$database);
	mysqli_set_charset($conn,"utf8");
    // $image =$_POST['im1'];
	$image = $_FILES['im1']['name'];
    // $img = file_get_contents($image);
    $imgsql ="INSERT INTO exercise(exerciseImage)
				VALUES ('$image')";
					$result = $conn->query($imgsql);
	if($result){
				?>
					<script>
					alert("Success");
					</script> 
					
					<?php
				}
			
			else
				?>
				<script>
					alert("error");
					</script> 

