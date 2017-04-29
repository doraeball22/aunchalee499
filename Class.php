<?php

class Userlogin{
	
	public $userID,$username,$password,$sex,$age,$weight,$height;
	public function insertmember($conn,$addmem){
			
				$addmem ="INSERT INTO userlogin(userID, username, password,sex,age,weight,height)VALUES ('$addmem->userID','$addmem->username', '$addmem->password', '$addmem->sex', '$addmem->age','$addmem->weight','$addmem->height')";
				
				$result = $conn->query($addmem);
				
				if($result){
					echo '<script>
					alert("Welcome Healthy You Are");
					window.location="index.php";
					</script>';
					
				}
			
			else
				echo "Error"; //creat page error for website
			

	}
	public	function updateuser($conn,$updateu){
		echo " <script type='text/javascript'>alert('$updateu->userID');</script>";
		$updateuu="UPDATE userlogin SET weight = '$updateu->weight', height = '$updateu->height' where userID = '".$_SESSION["userID"]."'";

		$result = $conn->query($updateuu);
		if(isset($result))
				{
					?>
					<script>
					alert("Success");
					</script> 
				 	<script>
					window.location="RecommendUI.php";
					</script> 
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
				<!-- 	<script>
					window.location="UpdateNewsUI.php";
					</script> -->
					<?php
				}
		}
			public function memberlogin($conn,$memberlogin,$_query)
				{
					    $_status=0;
					    while($row=mysqli_fetch_array($_query))
						{
							if($row['username']==$memberlogin->username&&$row['password']==$memberlogin->password)
							{
								ob_start();
					    		session_start();
								$_SESSION["userID"]=$row['userID'];
								 $_SESSION["username"]=$row['username'];

								mysqli_close($conn);
								 // echo $row['userID'];

							
								 if(substr($row['userID'], 0,-3) == 'M') {
									echo "<script>window.location='MemberUI.php';</script>";
								 	# code...
								 }
								 else if(substr($row['userID'], 0,-3) == 'A'){
								 	echo "<script>window.location='AdminUI.php';</script>";

								 }
								$_status=1;
								break;
							}
						}

						if($_status==0)
						{
							$message = "Username or Password Invalid Please check and enter again";
							echo "<script type='text/javascript'>alert('$message');</script>";

							mysqli_close($conn);
							echo "<script>window.location='LoginUI.php';</script>";
						}
				}
				


}
	
class News{
	public $newsID,$newsTitle,$newsDetail;
	
	public function deletenews($conn,$deleten)
	{
		
		if(isset($deleten->newsID))
		{
			$deletesql = "DELETE FROM news WHERE `news`.`newsID` ='".$deleten->newsID."'";
			$result = $conn->query($deletesql);
				
			$message = "Delete success!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='ManageNewsUI.php';</script>";
		}
		else
		{
			$message = "Delete fail!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='ManageNewsUI.php';</script>";
		}
	}

		public function insertnews($conn,$addn){
			
				
			
				$addn ="INSERT INTO news(newsTitle, newsDetail)
				VALUES ('$addn->newsTitle', '$addn->newsDetail')";
				
				$result = $conn->query($addn);
				
				if($result){
				?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="ManageNewsUI.php";
					</script>
					<?php
				}
			
			else
				echo "Error";
			
	}
	public	function updatenews($conn,$updaten){
		echo " <script type='text/javascript'>alert('$updaten->newsID');</script>";
		$updatenn="UPDATE news SET newsTitle = '$updaten->newsTitle', newsDetail = '$updaten->newsDetail' WHERE newsID='".$updaten->newsID."'";

		$result = $conn->query($updatenn);
		if(isset($result))
				{
					?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="ManageNewsUI.php";
					</script>
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
					<script>
					window.location="UpdateNewsUI.php";
					</script>
					<?php
				}
		}
}
class Exercise{
	public $exerciseID,$exerciseName,$exerciseImage,$exerciseDetail,$exerciseType,$exerciseDay;

		public function insertexercise($conn,$adde){
			
			
$adde ="INSERT INTO exercise( `exerciseName`, `exerciseImage`, `exerciseDetail`, `exerciseType`, `exerciseDay`, `exerciseURL`, `programID`)
				VALUES ('$adde->exerciseName', '$adde->exerciseImage','$adde->exerciseDetail','$adde->exerciseType','$adde->exerciseDay','$adde->exerciseURL','$adde->programID')";
				
				$result = $conn->query($adde);
				
				if($result){
				?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="ManageExerciseUI.php";
					</script>
					<?php
				}
			
			else
				echo "Error";
			
	}
	public function deleteexercise($conn,$deletex)
	{
		
		if(isset($deletex->exerciseID))
		{
			$deletesql = "DELETE FROM exercise WHERE `exercise`.`exerciseID` ='".$deletex->exerciseID."'";
			$result = $conn->query($deletesql);
				
			$message = "Delete success!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='ManageExerciseUI.php';</script>";
		}
		else
		{
			$message = "Delete fail!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='ManageExerciseUI.php';</script>";
		}
	}
	public	function updateexercise($conn,$updatex){
		echo " <script type='text/javascript'>alert('$updatex->exerciseID');</script>";
		$updatexx="UPDATE exercise SET exerciseName = '$updatex->exerciseName', exerciseImage = '$updatex->exerciseImage',exerciseDetail = '$updatex->exerciseDetail',exerciseType = '$updatex->exerciseType',exerciseDay = '$updatex->exerciseDay',exerciseURL = '$updatex->exerciseURL' WHERE exerciseID='".$updatex->exerciseID."'";

		$result = $conn->query($updatexx);
		if(isset($result))
				{
					?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="ManageExerciseUI.php";
					</script>
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
					<script>
					window.location="UpdateExerciseUI.php";
					</script>
					<?php
				}
		}
}

class Food{
	public $foodID,$foodName,$calories,$value;

		public function deletefood($conn,$deletef)
	{
		
		if(isset($deletef->foodID))
		{
			$deletesql = "DELETE FROM food WHERE `food`.`foodID` ='".$deletef->foodID."'";
			$result = $conn->query($deletesql);
				
			$message = "Delete success!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='ManageFoodUI.php';</script>";
		}
		else
		{
			$message = "Delete fail!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='ManageFoodUI.php';</script>";
		}
	}
				public function insertfood($conn,$addf){
		
				$addf ="INSERT INTO food(foodid,foodName,calories,value,imagefood)
				VALUES ('$addf->foodid','$addf->foodName', '$addf->calories','$addf->value','$addf->imagefood')";
				
				$result = $conn->query($addf);
				
				if($result){
				?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="ManageFoodUI.php";
					</script>
					<?php
				}
			
			else
				echo "Error";
			
	}
	public	function updatefood($conn,$updatef){
		echo " <script type='text/javascript'>alert('$updatef->foodID');</script>";
		$updateff="UPDATE food SET foodName = '$updatef->foodName', calories = '$updatef->calories',value = '$updatef->value',imagefood = '$updatef->imagefood' WHERE foodID='".$updatef->foodID."'";

		$result = $conn->query($updateff);
		if(isset($result))
				{
					?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="ManageFoodUI.php";
					</script>
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
					<script>
					window.location="UpdateFoodUI.php";
					</script>
					<?php
				}
		}
}
class Programexercise{
			
			public $start_Program,$end_Program,$userID,$programID;

				public function insertprogram($conn,$addp){

				$deletep = "DELETE FROM program_transaction WHERE userID = '$addp->userID'";
				$conn->query($deletep);
		
				$addp ="INSERT INTO program_transaction(start_Program,end_Program,userID,programID)
				VALUES ('$addp->start_Program','$addp->end_Program', '$addp->userID','$addp->programID')";
				
				$result = $conn->query($addp);
				//if programid==1 action armUI,programid==2 action legUI,programid==3 action StomachUI

				if($result){
				?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="CalendarProgramUI.php";
					</script>
					<?php
				}
			
			else
				echo "Error";
			
	}
}
class Recommendnutrition{
			
			public $datestart,$userID;

				public function insertrecommend($conn,$addr){
				// $deleter = "DELETE FROM recommendnutrition WHERE userID = '$addr->userID'";
				//   $conn->query($deleter);
		
				$addr ="INSERT INTO recommendnutrition(datestart,userID,endate)VALUES ('$addr->datestart', '$addr->userID','$addr->endate')";
				
				$result = $conn->query($addr);
								

								 

				if($result){
					
				?>

					<script>
					alert("Success");
					</script> 
					<script>
					window.location="RecommendNutritionUI.php";
					</script>
					<?php
				}
			
			else
				echo "Error4444";
			
	}
}
class History{
			
		

				public function inserthistory($conn,$addh){
				
//	print_r($addh);exit;
				$addh ="INSERT INTO history SET
				datetoday = '$addh->datetoday',
				foodBreakfast = '$addh->foodBreakfast',
				foodLunch = '$addh->foodLunch',
				foodDinner = '$addh->foodDinner',
				userID = '$addh->userID',
				Totalcal = '$addh->Totalcal'";

				//echo $addh; exit;
				
				$result = $conn->query($addh);
								
				if($result){
					
				?>

					<script>
					alert("Success");
					</script> 
					 <script>
					window.location="MemberUI.php";
					</script> 					<?php
				}
			
			else
				echo "Error4444";
			
	}
}
class Webboard{
			
		public $question;

				public function insertquestion($conn,$addq){
		
				$addq ="INSERT INTO question(questionTitlename,datequestion,questionDetail,userID)VALUES ('$addq->questionTitlename','$addq->datequestion', '$addq->questionDetail','$addq->userID')";
				
				$result = $conn->query($addq);
				

				if($result){
				?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="WebboardUI.php";
					</script>
					<?php
				}
			
			else
				echo "Error4444";
			
	}
	public function insertanswer($conn,$addans){
				$qID = $addans->questionID;
				$addans ="INSERT INTO answer(dateanswer,answerDetail,userID,questionID)VALUES ('$addans->dateanswer','$addans->answerDetail', '$addans->userID','$addans->questionID')";
				 // $addans .= "('{$dateanswer}','{$answerDetail}','{$_POST['questionID']}')";
   				 
   				  
				$result = $conn->query($addans);
				

				if($result){
				?>
					<script>
					alert("Success");
					</script> 
					<script>
					 <?php echo "window.location=\"WebboardViewUI.php?questionID=".$qID."\";";?>
					</script>
					<?php
				}
			
			else
				echo "Error4444";
			
	}
	public function deletetopic($conn,$deletew)
	{
		
		if(isset($deletew->questionID))
		{
			$deleteww = "DELETE FROM question WHERE `question`.`questionID` ='".$deletew->questionID."'";
			$result = $conn->query($deleteww);
				
			$message = "Delete success!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='WebboardUI.php';</script>";
		}
		else
		{
			$message = "Delete fail!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='WebboardUI.php';</script>";
		}
	}
	public function deleteanswer($conn,$deleteans)
	{
		
		if(isset($deleteans->answerID))
		{
			$deleteanswer = "DELETE FROM answer WHERE `answer`.`answerID` ='".$deleteans->answerID."'";
			$result = $conn->query($deleteanswer);
				
			$message = "Delete success!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='WebboardUI.php';</script>";
		}
		else
		{
			$message = "Delete fail!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			mysqli_close($conn);
			echo "<script>window.location='WebboardUI.php';</script>";
		}
	}
	
}
?>