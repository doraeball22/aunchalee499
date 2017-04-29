<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
?>
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
<?php
        require("class.php");
       require_once('db_connect.php');
        $query = "SELECT * FROM userlogin where userID = '".$_SESSION["userID"]."'";
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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <?php if ( $_SESSION["userID"]!="A001"){?>
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
                        <?php } ?>
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
   <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="intro-text">
              <div class="w3-container">
              <?php
     
          $userID = $_SESSION["userID"];
        $query = "SELECT * FROM question ORDER BY questionID ";
        $result = mysqli_query($conn,$query)
         
        
    ?>

                    <center><font color="white" size="6" face="Montserrat">WEBBOARD</font></center>
    <!--  <center><img src="img/ban4.png" alt="Mountain View" style="width:240px;height:80px;"></center> --><br><br>

 <center><a href="WebboardtopicUI.php" class="btn btn-primary" >ตั้งกระทู้ คลิกที่นี้</a></center>
 
             
   

<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
           
            <th class="col-md-1" style="background:#fed136" ><center>ลำดับ</center></th>
            <th class="col-md-4" style="background:#fed136" ><center>หัวข้อกระทู้</center></th>
            <th style="background:#fed136" ><center>อ่าน</center></th>
          <th style="background:#fed136"><center>ตอบ</center></th>
           <th class="col-md-3" style="background:#fed136"><center>วันที่ตั้งกระทู้</center></th>
    
    <br>
   <?php 
     $i = 1;
        while($rows=mysqli_fetch_array($result)){ 
      ?>  
     
     
        
      <tr>
      
        
        
        
        <td >
            <center><?php echo $i; ?></center></td>
        <td >
            <center> <a href="WebboardViewUI.php?questionID=<?php echo $rows['questionID'] ?>"><?php echo '<span style="color:#088A85;">'.$rows['questionTitlename'].'</span>'; ?> </a></center></td>
      
        <td >
            <center><?php echo $rows['view']; ?></center></td>
         <td >
            
            <center><?php echo $rows['reply']; ?></center></td>
           <td >
            
            <center><?php echo $rows['datequestion']; ?></center></td>
       

          <?php 
    if ($_SESSION["userID"] == $rows['userID'] || $_SESSION["userID"]=="A001") {
        echo "<td>"; ?> <form  name="sentMessage" id="contactForm" novalidate role="form" method="POST" action="WebboardControl.php">
        <td >
            <input class="w3-btn" type="submit" name="button" id="button" value="Delete" />      
            <input type="hidden" name="questionID" id="questionID" value='<?php echo $rows['questionID'] ?>' />
             </td></form> </td><?php
    }
    ?>

     </tr>          
<?php $i++; }  ?>
      </table>
        
  </section>
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
    </body></html>