<?php
				require("Class.php");

					$memberlogin = new Userlogin;
							require_once('db_connect.php');
							$_query=mysqli_query($conn,"SELECT * from userlogin WHERE username LIKE '".$_POST["username"]."'");
						        $memberlogin->username = $_POST["username"];
								$memberlogin->password = $_POST["password"];
								$memberlogin->memberlogin($conn,$memberlogin,$_query); 


						  
				?>
