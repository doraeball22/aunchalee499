<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

 
<?php
        require("Class.php");
        require_once('db_connect.php');
        $query = "SELECT * FROM programexercise";
        $result = mysqli_query($conn,$query);
        
       
    ?>

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

        </div>
        <!-- /.container-fluid -->
    </nav>

 

   <!-- Contact Section -->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">INSERT EXERCISE</h2><br>
                   
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm"  enctype="multipart/form-data" novalidate role="form" method="POST" action="InsertExerciseControl.php">
                        <div class="row">
                            <div class="col-md-6">
                           
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NAME" id="name" name="exerciseName">
                                    <p class="help-block text-danger"></p>
                                </div><br>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Detail" name="exerciseDetail" id="message" ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                               
                               
                                  <center><div class="form-group">
                                        <div id="mainselection" name="exerciseType">
                                              <select name="exerciseType" class="form-control">
                                                <option>TYPE EXERCISE</option>
                                                <option name="type1">ขา</option>
                                                <option name="type2">เเขน</option>
                                                <option name="type3">หน้าท้อง</option>
                                              </select>
                                            </div>
                                </div></center><br><br>
                            </div>

                            <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="number of day" id="name" name="exerciseDay">
                                    <p class="help-block text-danger"></p>
                                </div><br>
                                 <div class="form-group">
                             <input type="text" class="form-control" placeholder="exerciseURL" id="name" name="exerciseURL">
                                    <p class="help-block text-danger"></p>
                                </div><br> -->


                                 <center><div class="form-group">
                                        <div id="mainselection" name="programID">
                                             

                                                 <select name="programID" class="form-control" >
                                                   <option>PROGRAM EXERCISE TYPE</option>
                                                  <?php
                                                    
                                                    $sqli = "SELECT programID,programType FROM programexercise  ";
                                                    $result1 = $conn->query($sqli);


                                                    while($row1 = mysqli_fetch_array($result1)){
                                                      
                                                            ?>
                                                                
                                                                <option value="<?php echo $row1['programID']; ?>" ><?php echo $row1['programType']; ?> </option>

                                                                  <?php 
                                                               } 

                                                   
                                                ?>
                                                
                                              </select>
                                            </div>
                                </div></center><br><br>
                           
                            <div class="form-group">
                                    <input type="file"  name="exerciseImage"  >
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="col-lg-12 text-center">
                                <div id="success"></div>
                              
                            </div>
                               
                            </div>s
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">INSERT</button><br><br>
                            </div>
                           
                        </div>
                    </form>
                     <div class="col-lg-12 text-center">
                                <a href="ManageExerciseUI.php" class="w3-btn" >Back</a>
                            </div>
                </div>

            </div>
        </div>
    </section>
