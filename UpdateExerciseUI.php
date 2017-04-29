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

 
<?php
        require("Class.php");
       require_once('db_connect.php');
        $query = "SELECT * FROM exercise";
        $result = mysqli_query($conn,$query);
                $exerciseID=$_POST['exerciseID'];
                $exerciseName = $_POST['exerciseName'];
                $exerciseImage = $_POST['exerciseImage'];
                $exerciseDetail = $_POST['exerciseDetail'];
                $exerciseType = $_POST['exerciseType'];
                $exerciseDay = $_POST['exerciseDay'];
                $exerciseURL = $_POST['exerciseURL'];
               
    ?>
   <!-- Contact Section -->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">UPDATE EXERCISE</h2><br>
                   
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm"  enctype="multipart/form-data" novalidate role="form" method="POST" action="UpdateExerciseControl.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Title *" name="exerciseName"  value='<?php echo $exerciseName ?>'  />
                                    <input type="hidden" name="exerciseID" value='<?php echo $exerciseID ?>'/>
                                    <p class="help-block text-danger"></p>
                                </div>
                               
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Detail" name="exerciseDetail" id="message" ><?php echo $exerciseDetail ?></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <center><div class="form-group">
                                        <div id="mainselection" name="exerciseType">
                                              <select name="exerciseType" class="form-control" >
                                                  <?php
                                                    
                                                    $sqli = "SELECT * FROM exercise WHERE exerciseID = '$exerciseID' ";
                                                    $result1 = $conn->query($sqli);

                                                    while($row1 = mysqli_fetch_array($result1)){
                                                        if($row1['exerciseType'] == 'ขา'){
                                                            ?>
                                                                <option value="<?php echo $row1['exerciseType']; ?>"  selected><?php echo $row1['exerciseType']; ?> </option>
                                                
                                                                <option name="type2">เเขน</option>
                                                                <option name="type3">หน้าท้อง</option>

                                                                  <?php 
                                                               }else if($row1['exerciseType'] == 'หน้าท้อง'){
                                                            ?>
                                                                <option value="<?php echo $row1['exerciseType']; ?>"  selected><?php echo $row1['exerciseType']; ?> </option>
                                                                 <option name="type1">ขา</option>
                                                                <option name="type2">เเขน</option>
                                                                
                                                            <?php  
                                                        } else if($row1['exerciseType'] == 'เเขน'){
                                                            ?>
                                                                <option value="<?php echo $row1['exerciseType']; ?>"  selected><?php echo $row1['exerciseType']; ?> </option>
                                                <option name="type2">ขา</option>
                                                                <option name="type3">หน้าท้อง</option>
                                                                
                                                            <?php  
                                                        }

                                                    }
                                                ?>
                                                
                                              </select>
                                            </div>
                                </div></center><br><br>
                                
                            </div>


                            <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" name="exerciseDay"  value='<?php echo $exerciseDay ?>'  />
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" name="exerciseURL"  value='<?php echo $exerciseURL ?>'  />
                                   
                                </div>
                            
                                 

                           <div class="form-group">
                                <?php 
                                if($rows=mysqli_fetch_array($result)){ 
                                ?> 
                            <?php echo "<img src='img/".$rows['exerciseImage']."'width='300' hight='300'>"; ?>
                                      <?php }  ?>
                                  </div>
                            <div class="form-group">
                                    <input type="file"  name="exerciseImage"  >
                                     <input type="hidden" name="exerciseImage" value='<?php echo $exerciseImage ?>'/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="col-lg-12 text-center">
                                <div id="success"></div>
                              
                            </div>
                               
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">UPDATE</button><br><br>
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
