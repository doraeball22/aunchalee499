<?php
if (!isset($_SESSION)) { session_start(); }
if ($_SESSION["userID"] == ""){
        header( "location: LoginUI.php" );
}
require_once('db_connect.php');
$query8 = "SELECT * FROM `history` WHERE userID='".$_SESSION["userID"]."'And datetoday=CURDATE()";
$result8 = mysqli_query($conn, $query8);
$count = mysqli_num_rows($result8);
if($count > 0) {
header( "location: ReportUI.php" );
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


$bmi = "";
$bmr = "";
$sex = "";
$weight = "";
$height = "";
$age = "";
 
$sql = "SELECT * FROM userlogin where userID = '".$_SESSION["userID"]."'";
$result = $conn->query($sql);
$query2 = "SELECT * FROM userlogin where userID = '".$_SESSION["userID"]."'";
$result2 = mysqli_query($conn,$query2);
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
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  <!-- Services Section -->
    <section id="services" >
       
 
    <!-- Header -->
    
        <div class="container">
            <div class="intro-text">
   
          

  <?php

       function bmr($sex,$weight,$height,$age) {
    switch ($sex) {
        case 1:
            $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
            break;
        case 2:
            $bmr = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
            break;
    
    }
    return $bmr;
}

function bmi($weight,$height) {
    $height_meter = $height/100;
    $bmi = $weight/($height_meter*$height_meter);
    return $bmi;
}


if ($result->num_rows == 1) {
   $row = $result->fetch_assoc();
   $sex = $row["sex"];
   $weight = $row["weight"];
   $height = $row["height"];
   $age = $row["age"];
   $result_bmr = bmr($sex,$weight,$height,$age);
   $result_bmi = bmi($weight,$height);
   $result_bmi_deci = sprintf("%1\$.2f",$result_bmi);
  
  

  
   

function avgbmr($resultfat,$bmrm,$potion) {

  if($resultfat >= 23.00){
  $avgbmr = round(($bmrm/$potion)-86,0,PHP_ROUND_HALF_DOWN);
}else {
   $avgbmr = round(($bmrm/$potion),0,PHP_ROUND_HALF_DOWN);}
  return $avgbmr;}
       ?>


                
          
<!-- table food user select ; table random food from database table name food
breakfast ID =B001 sql= select foodName form food where foodid LIKE '%B'
Lunch ID =L001 sql= select foodName form food where foodid LIKE '%L'
Dinner ID=D001 sql= select foodName form food where foodid LIKE '%D'
 
 **** random food 5 menu for meal***
*** อาหารที่ random ต้อง <=ค่า BMR/3
 -->      
<?php

$bmrm = $result_bmr;
$resultfat =$result_bmi_deci;
$potion = 3;
$limit_food = 5;
$avg_bmr = avgbmr($resultfat,$bmrm,$potion);



//  echo "<h4>จำนวนรายการอาหารแต่ละมื้อ:";
// echo '<span style="color:black;font-size:20px;text-align:center;">'.$limit_food.'</span></h3>';


?>

<?php
 $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "recommendfit";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");
        // Check connection
        if (mysqli_connect_errno($conn))
          {
             echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
      }
$food_morning = array();
$food_afternoon = array();
$food_evening = array();


$sql_m = 'SELECT * 
      FROM food
      WHERE foodID like "B%" AND calories <='.$avg_bmr.'
      ORDER BY RAND()
      LIMIT '.$limit_food;
 
$sql_a = 'SELECT * 
      FROM food
      WHERE foodID like "L%" AND calories <='.$avg_bmr.'
      ORDER BY RAND()
      LIMIT '.$limit_food;
  
$sql_e = 'SELECT * 
      FROM food
      WHERE  foodID like "D%" AND calories <='.$avg_bmr.'
      ORDER BY RAND()
      LIMIT '.$limit_food;
 
 
$result_moring = $conn->query($sql_m);
$result_afternoon = $conn->query($sql_a);
$result_evening = $conn->query($sql_e);


?>
 <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
               
                    <h2 class="section-heading">Recommend Food For You </h2>
                    <h3 class="section-subheading text-muted">เเนะนำอาหารที่เหมาะสำหรับคุณ จากค่าดัชนีมวลกาย (bmi) เเละอัตราความต้องการเผาผลาญของร่างกายในชีวิตประจำวัน (bmr) </h3>

                </div>
            </div>
            <div class="row text-center">
               
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="img/f4.png" alt="Mountain View" style="width:100px;height:95px;">
                        
                    </span>
                    <h4 class="service-heading"><?php echo "<h3>BMI:";
   echo '<span style="color:#fec503;font-size:28px;text-align:center;">'.$result_bmi_deci.'</span></h3>';?></h4>
                    <p class="text-muted"><?php if($result_bmi_deci < 18.50) {
       
       echo '<span style="color:black; font-size:18px;text-align:center; font-family:Arial, Helvetica, sans-serif;">คุณมีน้ำหนักน้อย อยู่ในเกณฑ์ผอม</span>';
   }
   else if($result_bmi_deci >= 18.50 &&  $result_bmi_deci <= 22.99) {
      
       echo '<span style="color:black; font-size:18px;text-align:center; font-family:Arial, Helvetica, sans-serif;">คุณมีน้ำหนักตัวปกติ</span>';
   }
   else if($result_bmi_deci >= 23.00 && $result_bmi_deci <= 24.99) {
      
         echo '<span style="color:black; font-size:18px;text-align:center; font-family:Arial, Helvetica, sans-serif;">คุณมีน้ำหนักอยู่ในเกณฑ์อ้วนระดับที่ 1 เเนะนำอาหารสำหรับลดน้ำหนัก 1 กิโลกรัมต่อ 1 เดือน</span>';
   }
   else if($result_bmi_deci >= 25.00 && $result_bmi_deci <= 29.99) {
     
       echo '<span style="color:black; font-size:18px;text-align:center; font-family:Arial, Helvetica, sans-serif;">คุณมีน้ำหนักอยู่ในเกณฑ์อ้วนระดับที่ 2</span>';

   }
   else
   {       
       
         echo '<span style="color:black; font-size:18px;text-align:center; font-family:Arial, Helvetica, sans-serif;">คุณมีน้ำหนักอยู่ในเกณฑ์อ้วนระดับที่ 3</span>';
   }
    

} else {
    echo "<h3>ไม่พบข้อมูลหรือเจอข้อมูลมากกว่า 1 คน</h3>";
}

mysqli_close($conn); ?></p>
                </div>
                 <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                         <img src="img/f2.png" alt="Mountain View" style="width:100px;height:95px;">
                    </span>
                    <h4 class="service-heading"> <?php echo "<h3>BMR:";
                    echo '<span style="color:#fec503;font-size:28px;text-align:center;">'.$result_bmr.'</span>';?></h4>
                    <p class="text-muted"> </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="img/f6.png" alt="Mountain View" style="width:100px;height:95px;">
                    </span>
                    <h3 class="service-heading"><?php echo "<h3>AVG BMR : MEAL";
                  echo "</br>";
                    echo '<span style="color:#fec503; font-size:28px;text-align:center;">'.$avg_bmr.'</span>';
                      echo "<h4>calories";
                    ?>
                    
                    </h3>
                    <p class="text-muted"></p>
                </div>
            </div>
        </div>
        <br><br>
<form  method="POST" action="RecommendNutritionControl.php"> <!-- /RecommendNutritionControl.php ส่งไปเพื่อนำข้อมูลในฟอร์มไป insert ลง ตาราง history -->
                      <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"] ?>">
                  <?php echo "<h3>"."Today : " . date("Y-m-d") ."</h3>" ."<br>";?>
                     <input type="hidden" id="inputsumCal" name="sumCal" >
       <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
             <th class="col-md-4" bgcolor="#C7C6C4"><center>มื้อเช้า</center></th>
             <th class="col-md-4" bgcolor=#E6E5E3><center>มื้อกลางวัน</center></th>
             <th class="col-md-4"  bgcolor=#FFFFFF><center>มื้อเย็น</center></th>

             <tr>

             <td bgcolor="#C7C6C4">
                <?php 
                          if ($result_moring->num_rows > 0) {
  
                        $m = 0;
                        while($food_morning = $result_moring->fetch_assoc()) {

                            echo "<h5>".'<input  type="checkbox" $name = "'.$food_morning["foodID"].'" data-cal='.$food_morning['calories'].' value="'.$food_morning["foodID"].'"  name="cal1" />'.$food_morning['foodName']. " calories = ".$food_morning['calories'].'<br>';
                          $m++;
                        }
                      }
                      else {
                          //$emparray[] = "อาหารเช้าไม่มีในระบบ";
                          
                      }
                      echo "<br>";
                        ?></td>
            <td bgcolor=#E6E5E3>
                             
                    <?php 
                           if ($result_afternoon->num_rows > 0) {
                              
                                          $a = 1;
                                          while($food_afternoon = $result_afternoon->fetch_assoc()) { 
                                            echo "<h5>".'<input  type="checkbox"  $name = "'.$food_afternoon["foodID"].'"  data-cal='.$food_afternoon['calories'].' value="'.$food_afternoon["foodID"].'"name="cal2" />'.$food_afternoon['foodName']. " calories = ".$food_afternoon['calories'].'<br>';
                                            $a++;
                                          }
                                        }
                                        else {
                                            echo "อาหารกลางวันไม่มีในระบบ";
                                        }
                                        echo "<br>";?></td>
              <center><td bgcolor=#FFFFFF>
                    <?php 
                           if ($result_evening->num_rows > 0) {
                              
                                          $e = 1;
                                          while($food_evening = $result_evening->fetch_assoc()) {   
                                        
                                            echo "<h5>".'<input  type="checkbox"                           $name = "'.$food_evening["foodID"].'"  data-cal='.$food_evening['calories'].' value="'.$food_evening["foodID"].'"  name="cal3" />'.$food_evening['foodName']. " calories = ".$food_evening['calories'].'<br>';
                                            $e++;
                                          }
                                        }
                                        else {
                                            echo "อาหารเย็นไม่มีในระบบ";
                                        }
                                        ?></td>
                                         </tr>
             </table><br><br>
            
        
  <!--  Sum calories form user select form table food recommend and save to db name: history-->
                     <center><h3>Total Calories:<span id="sumCal"  ></span></h3></center><br><br>
                        <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">SAVE</button><br><br>
                            </div>
                    </div>          
        </div>
    </form>

<!--*** MODAL#### date  ครบ 3 Month ask member weight and height and new reccommend food  -->
       <center><a href="MemberUI.php" class="w3-btn" >Back</a></center>
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
<!-- sumcal -->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script>
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
  
  var calM = [];
    $.each($("input[name='cal1']:checked"), function(){            
                calM.push($(this).data('cal'));
            });
      
    var calA = [];
    $.each($("input[name='cal2']:checked"), function(){            
                calA.push($(this).data('cal'));
      });
     
    var calE = [];
    $.each($("input[name='cal3']:checked"), function(){            
                calE.push($(this).data('cal'));
      });
  var sumCal = Number(calM.join(", "))+Number(calA.join(", "))+Number(calE.join(", "));
  $('#inputsumCal').val(sumCal);
console.log(sumCal);
$('#sumCal').html(sumCal);
  
});
</script>