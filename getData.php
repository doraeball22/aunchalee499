<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}?>
<?php 


  require("class.php");
        require_once('db_connect.php');
        $query = "SELECT * FROM userlogin where userID = '".$_SESSION["userID"]."'";
        $result = mysqli_query($conn,$query);
        
         


foreach ($result as $data) {


  echo "USERNAME: ";

	echo $data['username'];
  
  echo "----- ";  
   
      echo "WEIGHT:  ";
  echo  $data['weight'];
  echo " KG. ";
  
  echo "----- ";  
  echo "HEIGHT:  ";
  echo $data['height'];
   echo " CM. ";
 
}
?>