<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Healthy You Are</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Healthy You Are</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Logout</a>
                    </li>
                  
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
              <div class="w3-container">
    <h2>Manage  Exercise</h2>
    <a href="InsertExerciseUI.php" class="w3-btn" >Insert</a><br>
<?php
        require("class.php");
        require_once('db_connect.php');
       
         
         $limit = 5;

        if (isset($_GET['page'])){
            $offset = $_GET['page'] - 1;
        }else{
            $offset = 0;
        }
        $qoffset = $limit * $offset;
        $query1 = "SELECT * FROM exercise limit 5 offset {$qoffset} ";
        $result2 = mysqli_query($conn,$query1)
    
        
    ?>
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <th class="col-md-1">ID</th>
            <th class="col-md-1" >Name</th>
            <th class="col-md-1" >Image</th>
            <th class="col-md-4">Detail</th>
            <th class="col-md-1" >Type</th>
            <th class="col-md-1" >Day</th>
            <th class="col-md-3" >URL</th>

            
    <br>
    <?php 
        while($rows=mysqli_fetch_array($result2)){ 
      ?>  
     
        
      <tr>
        
        
        
        <td  >
            <?php echo $rows['exerciseID']; ?></td>
        <td >
            <?php echo $rows['exerciseName']; ?></td>
     
      <td  >
            <?php echo "<img src='img/exercise/".$rows['exerciseImage']."'width='100' hight='100'>"; ?></td>
      
        <td  >
            <?php echo $rows['exerciseDetail']; ?></td>
        <td >
            <?php echo $rows['exerciseType']; ?></td>
        <td >
            <?php echo $rows['exerciseDay']; ?> </td>
        <td >
            <?php echo $rows['exerciseURL']; ?> </td>
        
        <form  name="sentMessage1" id="contactForm1" novalidate role="form" method="POST" action="UpdateExerciseUI.php">
        <td >
            <input class="w3-btn"  type="submit" name="button" id="button" value="Update" />
             <input type="hidden" name="exerciseID" id="exerciseID" value='<?php echo $rows['exerciseID'] ?>' />
             <input type="hidden" name="exerciseName" id="exerciseName" value='<?php echo $rows['exerciseName'] ?>' />
            <input type="hidden" name="exerciseImage" id="exerciseImage" value='<?php echo $rows['exerciseImage'] ?>' />
             <input type="hidden" name="exerciseDetail" id="exerciseDetail" value='<?php echo $rows['exerciseDetail'] ?>' />
             <input type="hidden" name="exerciseType" id="exerciseType" value='<?php echo $rows['exerciseType'] ?>' />
             <input type="hidden" name="exerciseDay" id="exerciseDay" value='<?php echo $rows['exerciseDay'] ?>' />
              <input type="hidden" name="exerciseURL" id="exerciseURL" value='<?php echo $rows['exerciseURL'] ?>' />
                                    
        </td></form>
        <form  name="sentMessage" id="contactForm" novalidate role="form" method="POST" action="ManageExerciseControl.php">
        <td >
            <input class="w3-btn" type="submit" name="button" id="button" value="Delete" />      
            <input type="hidden" name="exerciseID" id="exerciseID" value='<?php echo $rows['exerciseID'] ?>' />
             </td></form></tr>
              
      
     
          <?php }  ?>
      </table><br>


          <?php include('./func/pagination1.php');

          ?>
          <br><br><br>
           <a href="AdminUI.php"  >Back</a>
  </div>
            </div>
        </div>
    </header>
    </body>
    </html>
