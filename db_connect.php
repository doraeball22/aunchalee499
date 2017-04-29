<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "0848959172";
$database = "recommendfit";

// Create connection
        $conn = new mysqli($servername, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");
        // Check connection
        if (mysqli_connect_errno($conn))
          {
             echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
			 exit();
          }
       
?>