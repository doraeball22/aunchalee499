<?php
require("Class.php");
        require_once('db_connect.php');
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
        
      
         $query = "SELECT * FROM history where userID = '".$_SESSION["userID"]."'";
        $result = mysqli_query($conn,$query);
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
          
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->

        <div class="container">
           
            
                <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                
                    <h2 class="section-heading">REPORT FOR YOU </h2><br>
                  <h4 class="section-heading"> List food history you choose eat </h4><br>
                </div>
            </div>
    


            <div class="row text-center">
              
              <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"] ?>">
                   
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
           
            <th class="col-md-1" ><center>ID</center></th>
            <th class="col-md-2" ><center>DATE</center></th>
            <th class="col-md-3"><center>BREAKFAST</center></th>
          <th class="col-md-3"><center>LUNCH</center></th>
       <th class="col-md-3"><center>DINNER</center></th>
          <th class="col-md-2"><center>TotalCalories</center></th>
    <br>
    <?php 
        while($rows=mysqli_fetch_array($result)){
                $_resB = mysqli_query($conn, "SELECT foodName FROM food WHERE foodID = '" . $rows['foodBreakfast'] . "'");
                $_resL = mysqli_query($conn, "SELECT foodName FROM food WHERE foodID = '" . $rows['foodLunch'] . "'");
                $_resD = mysqli_query($conn, "SELECT foodName FROM food WHERE foodID = '" . $rows['foodDinner'] . "'");
      ?>  
     
        
      <tr>
        

        
        
        <td >
            <center><?php echo $rows['historyID']; ?></center></td>
        <td >
            <center><?php echo $rows['datetoday']; ?> </center></td>
      
        <td >
            <center><?php //echo $rows['foodBreakfast']; 
                        echo (mysqli_fetch_array($_resB)['foodName']);
                    ?></center></td>
         <td >
            <center><?php //echo $rows['foodLunch']; 
                        echo (mysqli_fetch_array($_resL)['foodName']);
                    ?></center></td>
       
             <td >
            <center><?php //echo $rows['foodDinner'];
                        echo (mysqli_fetch_array($_resD)['foodName']);
                    ?></center></td>
              <td >
            <center><?php echo $rows['Totalcal']; ?></center></td>
           </tr>
        
       
              
       <?php }  ?>
      </table>
        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2"><br><br>
                         
                               <br><br><br><br>                                
                             <a href="MemberUI.php"  >Back</a></center>

                            </div>

                        </div>
                  

                      
    </section>
                
            </div>
        </div>

<!-- Modal -->


<!-- jQuery -->
 
   
  