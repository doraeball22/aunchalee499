
<?php
 
require("Class.php");

    $addans = new Webboard;
           require_once('db_connect.php');

    
    $addans->answerDetail    = $_POST['answerDetail'];
    $addans->dateanswer = date('Y-m-d H:i:s');
    $addans->questionID = $_POST['questionID'];
    $addans->userID = $_POST['userID'];
    $addans->insertanswer($conn,$addans);

    mysqli_query($conn, "UPDATE question SET reply=reply+1 WHERE questionID=".$_POST['questionID']);
    // if ($query == TRUE) {
     // echo "Success!<BR>";
     // echo "<a href='WebboardViewUI.php?id=$_POST[questionID]'>Back to view your topic.</a>";
                    
    // }
    // echo $_POST['questionID'];

 ?>


