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
    <h2>Manage Food</h2>
     <a href="InsertFoodUI.php" class="w3-btn" >Insert</a><br>
<?php
        require("class.php");
       require_once('db_connect.php');
     
           $limit = 10;

        if (isset($_GET['page'])){
            $offset = $_GET['page'] - 1;
        }else{
            $offset = 0;
        }
        $qoffset = $limit * $offset;
        $query = "SELECT * FROM food limit 10 offset {$qoffset} ";
        $result = mysqli_query($conn,$query)
        
    ?>
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <th class="col-md-1">foodID</th>
            <th class="col-md-3" >foodName</th>
            <th  >calories</th>
            <th >value</th>
          <th class="col-md-3">Image</th>
      
    <br>
    <?php 
        while($rows=mysqli_fetch_array($result)){ 
      ?>  
     
        
      <tr>
         <input type="hidden" name="foodid" id="foodid" value="<?php echo $rows['foodid']; ?>">
        
        
        <td  >
            <?php echo $rows['foodID']; ?></td>
        <td >
            <?php echo $rows['foodName']; ?></td>
        <td >
            <?php echo $rows['calories']; ?> </td>
      
        <td >
            <?php echo $rows['value']; ?></td>
         <td >
            
            <?php echo "<img src='img/foodimg/".$rows['imagefood']."'width='100' hight='100'>"; ?></td>
       

            <form  name="sentMessage2" id="contactForm1" novalidate role="form" method="POST" action="UpdateFoodUI.php">
                                <td >
                                     <input class="w3-btn"  type="submit" name="button" id="button" value="Update" />
                                     <input type="hidden" name="foodID" id="foodID" value='<?php echo $rows['foodID'] ?>' />
                                     <input type="hidden" name="foodName" id="foodName" value='<?php echo $rows['foodName'] ?>' />
                                    <input type="hidden" name="calories" id="calories" value='<?php echo $rows['calories'] ?>' />
                                     <input type="hidden" name="exerciseDetail" id="exerciseDetail" value='<?php echo $rows['exerciseDetail'] ?>' />
                                     <input type="hidden" name="value" id="value" value='<?php echo $rows['value'] ?>' />
                                     <input type="hidden" name="imagefood" id="imagefood" value='<?php echo $rows['imagefood'] ?>' />                        
                                </td></form>  
        
     
 
      
           <form  name="sentMessage" id="contactForm" novalidate role="form" method="POST" action="ManageFoodControl.php">
        <td >
            <input class="w3-btn" type="submit" name="button" id="button" value="Delete" />      
            <input type="hidden" name="foodID" id="foodID" value='<?php echo $rows['foodID'] ?>' />
             </td></form></tr>
        
       
              
       <?php }  ?>
      </table>
         <br>
            
           <?php include('./func/pagination2.php');

          ?><br><br><br>
          <a href="AdminUI.php"  >Back</a>
  </div>
            </div>
        </div>
    </header>