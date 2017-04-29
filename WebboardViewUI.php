<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
?>
<?php
require 'db_connect.php';
//question
$query = "SELECT * FROM question WHERE questionID='{$_GET['questionID']}' ";
 $result = mysqli_query($conn,$query);
 
// answer
$query_a = "SELECT * FROM answer WHERE questionID='{$_GET['questionID']}' ";
 $result_a = mysqli_query($conn,$query_a);
// update view
$query_u = "UPDATE question SET view=view+1 WHERE questionID='{$_GET['questionID']}' ";
 $result_u = mysqli_query($conn,$query_u);
?>
<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="language" content="en" />


   

    <!-- Theme CSS -->
  
 <title>Healthy You Are</title>
 <style type="text/css">
 body{
 font-size: 16px;
 }
 .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #000000;
}

.button5:hover {
    background-color: #000000;
    color: white;
}
 </style>
 </head>

 <body><br><br>
<center><h2>รายละเอียดกระทู้</h2></center><br><br>
 <?php 
 		// echo  $query; 		echo $result;
 		// echo $query_a;		echo $result_a;
 		// echo $query_u;		echo $result_u;
 ?>
 <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
 <tr>
 <td>
 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
 
 <?php if (isset($result)):
 		while($rows1=mysqli_fetch_array($result)) 
 		{ ?>
 				<tr>
 <td colspan="3" bgcolor="#000000">
 <b style="color: #FFFFFF;"><?php echo "<h3>".$rows1['questionTitlename']; ?></b></td>
 </tr>
 <tr>
 <td valign="top"><?php echo nl2br($rows1['questionDetail']); ?></td>
 </tr>
 <tr>
 <td>
 <strong>ชื่อผู้ตั้งกระทู้ :</strong> <?php echo $rows1['userID']; ?>
 </td>
 </tr>
 <tr>
 <td style="text-align: right;">
 <strong>วันที่ตั้งกระทู้ :</strong> <?php echo $rows1['datequestion']; ?>
 </td>
 </tr>
 <?php  
 		}
  ?>
 	



 <?php endif ?>
 

 </table>
 </td>
 </tr>
 </table>
		 <?php
		 if (mysqli_num_rows($result_a) > 0) {
		 		$i = 1;
		 		while($rows=mysqli_fetch_array($result_a)) {
 		?>
 <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000" style="margin-top:10px;">
 <tr>
 <td>
 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
 <tr>
 <td width="30%" style="text-align: right;"><strong>ชื่อผู้ตอบ</strong></td>
 <td width="70%"><?php echo $rows['userID']; ?></td>
 </tr>
 
 <tr>
 <td style="text-align: right;"><strong>รายละเอียดคำตอบ</strong></td>
 <td><?php echo nl2br($rows['answerDetail']); ?></td>
 </tr>
 <?php 
    if ($_SESSION["userID"] == $rows['userID'] || $_SESSION["userID"]=="A001") {
        echo "<td>"; ?> <form  name="sentMessage" id="contactForm" novalidate role="form" method="POST" action="WebboardView2Control.php">
        <td >
            <input class="button5" type="submit" name="button" id="button" value="Delete" />      
            <input type="hidden" name="answerID" id="answerID" value='<?php echo $rows['answerID'] ?>' />
             </td></form> </td><?php
    }
    ?>
 </table>
 </td>
 </tr>
 </table>
 <?php
 }
 } else {
 ?>
 <p style="text-align: center;color: red;">ไม่มีคำตอบ</p>
 <?php
 }
 ?>
 
 <form id="add_answer" name="add_answer" method="post" action="WebboardViewControl.php">
 <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#fec503" style="margin-top:15px;">
 <tr>
 <td>
 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
 <tr>
 <td colspan="3" bgcolor="#fec503"><b style="color: #FFFFFF;">ตอบคำถาม</b> </td>
 </tr>
 <tr>
 <td valign="top" style="text-align: right;"><strong>รายละเอียด</strong></td>
 <td><textarea name="answerDetail" cols="50" rows="5" id="answerDetail"></textarea></td>
 </tr>
 <tr>
 
 <td> <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"] ?>"></td>

 </tr>
 

 <tr>
 <td>&nbsp;</td>
 <td>

  	<input type="hidden" name="questionID" value="<?php echo $_GET['questionID'] ?>">
 
 <input  type="submit" name="submit" class="button5"  value="บันทึกข้อมูล" /> 
 <input  class="button5" type="button" name="Submit2" value="กลับ" onclick="history.back();" />

 </td>
 </tr>
 </table>
 </td>
 </tr>
 </table><br><br>

	<center><a href="WebboardUI.php" class="w3-btn" >Back</a></center>
 <input type="hidden" name="idreply" value="<?php echo $result['reply']; ?>">
 </form>
 </body>
</html>

