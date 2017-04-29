<?php
 
require("Class.php");

	$addq = new Webboard;
			require_once('db_connect.php');

	
	$addq->questionTitlename = $_POST['questionTitlename'];
	$addq->datequestion = date('Y-m-d H:i:s');
	$addq->questionDetail = $_POST['questionDetail'];
	$addq->userID = $_POST['userID'];
	$addq->insertquestion($conn,$addq);
// $topic = ($_POST['topic']);
// $detail = ($_POST['detail']);
// $name = trim($_POST['name']);
// $email = trim($_POST['email']);
// $created = date('Y-m-d H:i:s');
 ?>
<!-- $sql = "INSERT INTO questions (topic,detail,name,email,created) VALUES ";
$sql .= "('{$topic}','{$detail}','{$name}','{$email}','{$created}')";
$query = mysql_query($sql);
if ($query == TRUE) {
 echo "Success!<BR>";
 echo "<a href='main_webboard.php'>Back to view your topic.</a>";
}
mysql_close(); -->