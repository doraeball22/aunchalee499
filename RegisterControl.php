
<body>
<?php

	require("Class.php");

			$addmem = new Userlogin;

			require_once('db_connect.php');

			$query = "SELECT * FROM userlogin WHERE username = '" . $_POST['username'] . "'";
			$result = mysqli_query($conn, $query);
			if (mysqli_fetch_array($result) > 0) {
				echo "<script type=\"text/javascript\">alert(\"Username Already Exists\");window.location.href='RegisterUI.php';</script>";
				die();
			};

			$insertu = $_POST['Typeuser'];
						if ($insertu=="member"){
						$query="SELECT userID from userlogin WHERE userID LIKE 'M%' ORDER BY  userID DESC LIMIT 1";
						 $result = mysqli_query($conn,$query);
						 while($rows=mysqli_fetch_array($result)) {
							$u = $rows['userID'];
							$array = str_split($u);
							$array[3] +=1;
							if($array[3] == '10'){
								$array[2] += 1;
								if($array[2] == '10'){
									$array[1] += 1;
									$array[2] = '0';
								}
								$array[3] = '0';
							}
							$new_userid = $array[0].$array[1].$array[2].$array[3];
						}
					}else{
						$query="SELECT userID from userlogin WHERE userID LIKE 'A%' ORDER BY  userID DESC LIMIT 1";
						 $result = mysqli_query($conn,$query);
						 while($rows=mysqli_fetch_array($result)) {
							$u = $rows['userID'];
							$array = str_split($u);
							$array[3] +=1;
							if($array[3] == '10'){
								$array[2] += 1;
								if($array[2] == '10'){
									$array[1] += 1;
									$array[2] = '0';
								}
								$array[3] = '0';
							}
							$new_userid = $array[0].$array[1].$array[2].$array[3]; 

						}
					}
			$addmem->userID = $new_userid; //creat userID M001
			$addmem->username=$_POST['username'];
			$addmem->password = $_POST['password'];
			$addmem->sex = $_POST['sex'];
			$addmem->age = $_POST['age'];
			$addmem->weight= $_POST['weight'];
			$addmem->height = $_POST['height'];
			$addmem->insertmember($conn,$addmem); 
?>
</body>

			

