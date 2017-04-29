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
                <a class="navbar-brand page-scroll" href="MemberUI.php">Healthy You Are</a>
                 <object  width="510" height="490" data="img/qex1.swf" style="width:300px;height:110px;"></object>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br><br><br><br><br><br><br>

<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
 

                <div class="panel-heading">ตั้งกระทู้</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"                             action="WebboardtopicControl.php">
                        

                        <div class="form-group">
                            <label  for="username"  class="col-md-4 control-label">ชื่อหัวข้อกระทู้</label>

                            <div class="col-md-6">
                                <textarea id="questionTitlename" type="texts" class="form-control" name="questionTitlename" value="" required autofocus></textarea>

                              
                            </div>
                        </div>

                       
                        <br>

                        <div class="form-group">
                            <label  for="username"  class="col-md-4 control-label">รายละเอียด</label>

                            <div class="col-md-6">
                                <textarea id="questionDetail" type="texts" class="form-control" name="questionDetail" value="" required autofocus></textarea>

                              <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"] ?>">
                            </div>
                        </div>

                  

                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-8"><br><br>

                                <input class="btn btn-primary" type="submit" name="Submit" value="บันทึกข้อมูล" /> 
                            <input  class="btn btn-primary" type="reset" name="Submit2" value="ล้างข้อมูล" />

                            </div>
                        </div>
  
                    </form>



                </div>
            </div>


              <center><a href="WebboardUI.php" class="w3-btn" >Back</a></center>
        </div>

    </div>
</div>