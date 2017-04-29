<?php
if (!isset($_SESSION)) { session_start();}
 $_SESSION["userID"] = "";
 $_SESSION["username"] = "";

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


<style>

.vticker{
    border: 2px solid black;
    width:500px;
}
.vticker ul{
    padding: 0;
}
.vticker li{
    list-style: none;
    
    padding: 50px;
}
.et-run{
    background: #fed136;
}
/*object{

    opacity: 0.8;
    filter: alpha(opacity=50); /* For IE8 and earlier */

}
object:hover{

    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}*/


</style>
  <?php
                       
                        require_once('db_connect.php');
                        $query = "SELECT * FROM news";
                        $result = mysqli_query($conn,$query)
                         
                        
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
                        <!-- <a class="page-scroll" href="LoginUI.php">Login</a> -->
                    </li>
                    <li>
                     <!--    <a class="page-scroll" href="RegisterUI.php">Sing Up</a> -->
                    </li> 
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Header -->
      <section id="about">

        <div class="container">
           
                           
            
             
                     <!--   <object  width="600" height="560" data="img/mex.swf"></object>   -->
                
                
                     <div class="row">
                <div class="col-lg-12">
                   
                        <div class="row">
                            <div class="col-md-6">
                              <object  width="510" height="490" data="img/mex.swf"></object>  
                            </div>
                            <center><div class="col-md-4">
                                <div class="form-group">
                                   <br><br><br> 
                              <center><div class="vticker">

                      <ul>

                    <?php
                      while($rows=mysqli_fetch_array($result)){ ?>
                   <li> <?php echo "NEWS"."<h5>".$rows['newsTitle']."</br>"."</br>".$rows['newsDetail']?></li>
                        
                            <?php } ?>
                       
                      
                    </ul>
                </div> </center>   <br><br><br>
                <a href="LoginUI.php" class="btn btn-primary" >LOGIN</a>
                <a href="RegisterUI.php" class="btn btn-primary" >SING UP</a>
                 
              
                                </div>
                            </div></center>

                       
                          
                            </div>
                        </div>
                  
                </div>
            </div>
               
                        
                  <!-- <img src="mex.swf" alt="Mountain View" style="width:304px;height:228px;"> -->
                
          
                 


        
        </div>
        </section>



    

    
   


    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

  
  
    

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



    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>

    <script type="text/javascript" src="js/jquery.easy-ticker.js"></script>

<script type="text/javascript">
$(document).ready(function(){

    var dd = $('.vticker').easyTicker({
        direction: 'up',
        easing: 'easeInOutBack',
        speed: 'slow',
        interval: 2000,
        height: 'auto',
        visible: 1,
        mousePause: 0,
        controls: {
            up: '.up',
            down: '.down',
            toggle: '.toggle',
            stopText: 'Stop !!!'
        }
    }).data('easyTicker');
    
    cc = 1;
    $('.aa').click(function(){
        $('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
        cc++;
    });
    
    $('.vis').click(function(){
        dd.options['visible'] = 3;
        
    });
    
    $('.visall').click(function(){
        dd.stop();
        dd.options['visible'] = 0 ;
        dd.start();
    });
    
});
</script>

</body>

</html>
