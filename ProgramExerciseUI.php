<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
?>
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
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>

</head>

<?php
        require("Class.php");
      require_once('db_connect.php');
 $userID = $_SESSION["userID"];

            $query = "SELECT * FROM program_transaction where userID='$userID'";
            $result = mysqli_query($conn,$query);
            $today = new DateTime();
            while($rows=mysqli_fetch_array($result)){
                $startDate = new DateTime($rows['start_Program']);
                $endDate = new DateTime($rows['end_Program']);
            }

            if ((isset($startDate) && isset($endDate)) && ($today >= $startDate && $today <= $endDate)){
                echo "<script>window.location='CalendarProgramUI.php';</script>";
                //die();
            }else{
                $query = "SELECT * FROM programexercise";
                $result = mysqli_query($conn,$query);
                $query = "SELECT * FROM userlogin where userID = '".$_SESSION["userID"]."'";
                $result = mysqli_query($conn,$query);
            }   
                

       

    ?>


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
                        <a class="page-scroll" href="MemberUI.php">HOME</a>
                    </li>
                      <li>
                        <a class="page-scroll" href="NutritionUI.php">Nutrition</a>

                    </li>
                    <li>
                        <a class="page-scroll" href="ExerciseUI.php">Execise</a>
                    </li>
                          <li>
               
                        <a class="page-scroll" href="RecommendUI.php">Recommend</a>
                        
                        
                    </li>
                    <li>
                        <a class="page-scroll" href="ProgramexerciseUI.php">Programexercise</a>
                    </li>
                     <li>
                          <a class="page-scroll" href="WebboardUI.php">Webboard</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Logout</a>
                    </li>
                         <li>
                        <?php 
        if($rows1=mysqli_fetch_array($result)){ 
      ?>  
        
                <a   class="show-modal" data-id="<?=$rows['username']?>" >
                    
                    <?php echo $_SESSION["userID"]; ?></a>

      <?php }  ?>
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
           
            
                <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Program  Exercise </h2><br>
                   <h4 class="section-heading">You can choose Type ProgramExercise </h4><br><br>
                </div>
            </div>


<form class="form-horizontal" role="form" method="POST" action="ProgramExerciseControl.php">
            <div class="row text-center">
              <div class="col-md-12 col-md-offset-4">
                    <div class="col-md-4">
                    <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"] ?>">
                            <div id="startDate" class="input-group date">
                                  <input name="startDate" type="text" class="form-control">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                </div>
                                </div><br><br><br><br>
                            <div >
                            
                          <div class="col-md-4"><br>
                              
                                         <select name="programID" class="form-control" >
                                                   <option>PROGRAM EXERCISE TYPE</option>
                                                 
                                                  <?php
                                                    
                                                    $sqli = "SELECT programID,programType FROM programexercise  ";
                                                    $result1 = $conn->query($sqli);


                                                    while($row1 = mysqli_fetch_array($result1)){
                                                      
                                                            ?>
                                                                
                                                                <option value="<?php echo $row1['programID']; ?>" ><?php echo $row1['programType']; ?> </option>

                                                                  <?php } 

                                                   
                                                ?>
                                                
                                              </select>
                        </div>
        </div></div>
        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2"><br><br>
                               
                                <button type="submit" class="btn btn-primary">READY</button>

                            </div>

                        </div>
                    </form>
    </section>
                
            </div>
        </div>
    </header>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Profile</h4>
      </div>
      <div class="modal-body">
         <div id="content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- jQuery -->
  <script>
        $('#startDate').datepicker({
            format: 'yyyy-mm-dd',
            startDate: 'today',
            endDate: '+2D'
        });
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <script type="text/javascript">

        $( document ).ready(function() {
            $('.show-modal').click(function(){


                var id = $(this).data("id");

                $.ajax({
                  type: "POST",
                  url: "/recommendfit/getData.php",
                  data: id,
                  success: function(data){
                        $("#content").text(data);
                }
                });

                $("#myModal").modal("show");

            });
        });

    </script>