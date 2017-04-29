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
        
    </header>

    

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  
                    <font color="white" size="6" face="Montserrat">EXERCISE</font><br><br><br><br>
                                    </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/poster/bodybuilding_motivation-wallpaper-1280x800.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ออกกำลังกาย 3 หมู่</h4>
                        <p class="text-muted">การออกกำลังกาย 3หมู่ คู่การกินอาหาร 5 หมู่</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/poster/stretched-1280-800-608042.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>วิธีการออกกำลังกาย</h4>
                        <p class="text-muted">ออกกำลังกายให้เหมาะสมกับรูปร่าง</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/poster/stretched-1280-800-608038.jpg"  class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>เคล็ดลับการออกกำลังกาย</h4>
                        <p class="text-muted">3 ขั้นตอนเพิ่มความฟิตให้กับการออกกำลังกาย</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/poster/stretched-1280-800-522386.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4> T25 ?</h4>
                        <p class="text-muted">การออกกำลังแบบ T25 คืออะไร ?</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/poster/stretched-1280-800-608251.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>วิธีปฏิบัติก่อนเเละหลังออกกำลังกาย</h4>
                        <p class="text-muted">สิ่งที่ควรทำก่อน หลังการออกกำลังกาย</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/poster/stretched-1280-800-652254.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ประโยชน์ของการออกกำลังกาย</h4>
                        <p class="text-muted">การออกกำลังกาย มีประโยชน์ต่อร่างกายอย่างไร</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>ออกกำลังกาย 3 หมู่</h2>
                                <p class="item-intro text-muted">การออกกำลังกาย 3หมู่ คู่การกินอาหาร 5 หมู่</p>
                                <img class="img-responsive img-centered" src="img/poster/ex3650.jpg" alt="">
                            
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>วิธีการออกกำลังกาย</h2>
                                <p class="item-intro text-muted">หุ่นเเบบนี้ควรออกกำลังกายเเบบไหน ออกกำลังกายอย่างไรให้เหมาะสมกับรูปร่าง</p>
                                <img class="img-responsive img-centered" src="img/poster/4excerchev2.jpg" alt="">
                                <p>ข้อมูล/ภาพประกอบจาก ศูนย์บริการข่าวสารสำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ<a>http://www.thaihealth.or.th/</a></p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>เคล็ดลับการออกกำลังกาย</h2>
                                <p class="item-intro text-muted">3 ขั้นตอนเพิ่มความฟิตให้กับการออกกำลังกาย</p>
                                <img class="img-responsive img-centered" src="img/poster/fit-exersice.jpg" alt="">
                                <p>ข้อที่ 1 เพิ่มวัน

สำหรับผู้ที่เริ่มออกกำลังกายควรเพิ่มวันออกกำลังกายก่อน เพราะโดยปกติองค์การอนามัยโลก แนะนำให้ออกกำลังกายแบบแอโรบิคอย่างน้อยอาทิตย์ละ 5 วัน ฉะนั้นการเพิ่มวันในออกกำลังกายให้มากขึ้นจึงเป็นทางเลือกที่ปลอดภัย เพราะร่างกายได้พักและกลับมาออกกำลังกายใหม่ ถ้าเราเดินเร็ววันละ 20 นาที ทางเลือกที่จะเพิ่มความเก่งของเราต่อไป ก็คือจะเพิ่มเวลาเดินหรือลองเพิ่มความเร็วในการเดินหรือลองวิ่งดู แต่ถ้าจะให้ปลอดภัย แนะนำให้ “เพิ่มทีละ 10-20% โดยใช้โปรแกรมเดิมสัก 1-2 อาทิตย์แล้วค่อยประเมินตนเองเพื่อปรับโปรแกรมการออกกำลังกายใหม่”</p>
<br><p>ข้อที่ 2 เพิ่มเวลา

การเพิ่มเวลาในการออกกำลังกาย ก็คือ ให้ออกกำลังกายเหมือนเดิมแต่พยายามทำให้นานขึ้น เช่น ปกติวิ่งบนลู่ได้วันละ 20 นาที ถ้าอยากเพิ่มเวลา ก็เพิ่มครั้งละ 2-4 นาที</p><br><p>ข้อที่ 3 เพิ่มความหนัก และความเร็ว

การเพิ่มความหนักในการออกกำลังกาย ก็คือการเพิ่มความเร็วในการเดิน วิ่ง หรือ เพิ่มน้ำหนักที่เรายก ส่วนนี้ไม่ควรเป็นทางเลือกแรกๆในการเพิ่มของผู้เริ่มออกกำลังกาย แต่เป็นสิ่งที่ผู้ที่ออกกำลังกายเป็นประจำหรือผู้ที่ออกกำลังกายแล้วไม่ได้ผลสักทีควรจะลองพัฒนาตนเองดู เช่น วิ่งอยู่ที่ความเร็ว 10 กิโลเมตรต่อชั่วโมง ก็ลองวิ่งความเร็วที่ 11 กิโลเมตรต่อชั่วโมงดู หรือ ยกน้ำหนักที่ 10 กิโลกรัม ก็ลองเพิ่มเป็นยก 11-12 กิโลกรัมดู</p>
                               
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>T25 ?</h2>
                                <p class="item-intro text-muted">การออกกำลังแบบ T25 คืออะไร ?</p>
                                <img class="img-responsive img-centered" src="img/poster/info-T25_02.png" alt="">
                                <p> การออกกำลังแบบ T25 จะเน้นการออกกำลังแบบคาร์ดิโอ เคลื่อนไหวกล้ามเนื้อทุกสัดส่วนต่อเนื่องนาน 25 นาทีโดยไม่หยุดพัก และออกกำลังแค่ 5 วันต่อสัปดาห์เท่านั้น ซึ่งเทรนเนอร์หนุ่มเจ้าของต้นตำรับก็แอบกระซิบมาว่า การออกกำลังกายแบบ T25 เพียงแค่ 25 นาที ก็จะได้ผลลัพธ์เหมือนเราออกกำลังกายนานถึง 1 ชั่วโมงเต็มเลยล่ะ</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>วิธีปฏิบัติก่อนเเละหลังออกกำลังกาย</h2>
                                <p class="item-intro text-muted">สิ่งที่ควรทำก่อน หลังการออกกำลังกาย</p>
                                <img class="img-responsive img-centered" src="img/poster/sw.jpg" alt="">
                               
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>ประโยชน์ของการออกกำลังกาย</h2>
                                <p class="item-intro text-muted">การออกกำลังกาย มีประโยชน์ต่อร่างกายอย่างไร</p>
                                <img class="img-responsive img-centered" src="img/poster/infographic.jpg" alt="">
                               
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

</body>

</html>
