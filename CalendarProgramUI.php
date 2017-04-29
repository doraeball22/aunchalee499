<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
?>
<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset='utf-8'>
<head>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- META ===================================================== -->
    <title>Healthy You Are</title>
    <meta name="description" content="A method for responsive tables">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Favicon  ========================================== -->


<!-- CSS ======================================================
	<link rel="stylesheet" href="css/responsivetables.css">-->
	<!-- Demo CSS (don't use) -->
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet" type="text/css">
	<style type="text/css">
		body, html {
			padding:0px;
			margin:0px;
			background: url('images/bg.jpg') center;
			background-size:cover;
			background-attachment: fixed;
			text-align:center;
			color:#fff;
			line-height: 1.4em;
			font-family: "Trebuchet MS", Helvetica, sans-serif;
		}
		body {
			padding:10vh 0;
		}
		h1 {
			font-family: 'Yanone Kaffeesatz', sans-serif;
			text-align: center;
			font-size: 77px;
			text-shadow: 0 0px 30px rgba(0, 0, 0, 0.2);
		}
		h2 {
			font-family: 'Yanone Kaffeesatz', sans-serif;
			font-size:30px;
			text-shadow: 0 0px 20px rgba(0, 0, 0, 0.3);
			color:#fff;
		}
		.monthly {
			box-shadow: 0 13px 40px rgba(0, 0, 0, 0.5);
			font-size: 0.8em;
		}

		input[type="text"] {
			padding: 15px;
			border-radius: 2px;
			font-size: 16px;
			outline: none;
			border: 2px solid rgba(255, 255, 255, 0.5);
			background: rgba(63, 78, 100, 0.27);
			color: #fff;
			width: 250px;
			box-sizing: border-box;
			font-family: "Trebuchet MS", Helvetica, sans-serif;
		}
		input[type="text"]:hover {
			border: 2px solid rgba(255, 255, 255, 0.7);
		}
		input[type="text"]:focus {
			border: 2px solid rgba(255, 255, 255, 1);
			background:#eee;
			color:#222;
		}

		.button {
			display: inline-block;
			padding: 15px 25px;
			margin: 25px 0 75px 0;
			border-radius: 3px;
			color: #fff;
			background: #000;
			letter-spacing: .4em;
			text-decoration: none;
			font-size: 13px;
		}
		.button:hover {
			background: #3b587a;
		}
		.desc {
			max-width: 250px;
			text-align: left;
			font-size:14px;
			padding-top:30px;
			line-height: 1.4em;
		}
		.resize {
			background: #222;
			display: inline-block;
			padding: 6px 15px;
			border-radius: 22px;
			font-size: 13px;
		}
		@media (max-height: 700px) {
			.sticky {
				position: relative;
			}
		}
		@media (max-width: 600px) {
			.resize {
				display: none;
			}
		}
	</style>
	<link rel="stylesheet" href="css/monthly.css">
</head>
<body  >

<div class="page" >
<div class="row">

		<div class="col-sm-4" > <br><br><br><br><br><br><br><br> <span style="padding-left:68px;"><object  width="510" height="490" data="img/mex.swf" style="width:400px;height:395px;"></object> </span> </div>
    
    <div class="col-sm-8" >

                
                           
                               
		
		 <?php 
                       require_once('db_connect.php');
                          $userID = $_SESSION["userID"];
                        $query = "SELECT t.programID, p.programName, u.userName FROM program_transaction AS t INNER JOIN programexercise AS p ON t.programID = p.programID INNER JOIN userlogin AS u ON t.userID = u.userID where u.userID='$userID'";
                        $result = mysqli_query($conn,$query)?>
  					<?php
                      while($rows=mysqli_fetch_array($result)){ 
                     
                         echo '<span style="color:black;font-size:30px;text-align:center;">'.$rows['programName'].'</span>';
                          echo "<br/>"."<br/>";

                         echo '<span style="color:#088A85;font-size:30px;text-align:center;">'.$rows['userName'].'</span>';
                          echo "<br/>"."<br/>";

                       } ?>

		<div style="width:100%; max-width:600px; display:inline-block;">
			<div class="monthly" id="mycalendar"></div>
		</div>
		<br>
		</div>
  </div>
		 
		<br><br>
		<a href="MemberUI.php" class="w3-btn" >Back</a>
</div>
<!-- JS ======================================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
	$(window).load( function() {

		$('#mycalendar').monthly({
			mode: 'event',
			jsonUrl: 'CalendarProgramControl.php',
			dataType: 'json'
		});

		$('#mycalendar2').monthly({
			mode: 'picker',
			target: '#mytarget',
			setWidth: '250px',
			startHidden: true,
			showTrigger: '#mytarget',
			stylePast: true,
			disablePast: true
		});

	switch(window.location.protocol) {
	case 'http:':
	case 'https:':
	// running on a server, should be good.
	break;
	case 'file:':
	alert('Just a heads-up, events will not work when run locally.');
	}

	});
</script>
</body>
</html>
