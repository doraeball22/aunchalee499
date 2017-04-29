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
                <a class="navbar-brand page-scroll" href="index.php">Healthy You Are</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <br><br><br><br>
   
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="RegisterControl.php">
                      

                       

                        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label"><br>Username</label>

                            <div class="col-md-6"><br>
                                <input id="username" type="texts" class="form-control" name="username" value="" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><br>Password</label>

                            <div class="col-md-6"><br>
                                <input id="password" type="password" class="form-control" name="password" required>

                             
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label"><br>Confirm Password</label>

                            <div class="col-md-6"><br>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">Sex</label>

                            <div class="col-md-5"><br>
                             
                                <input id="sex" type="radio"  name="sex" value="1" checked>Male</label>
                                
                                
                                <input id="sex" type="radio"  name="sex"  value="2" >Female<br></label>
                               
                            </div>
                        </div><br><br><br>
                        <div class="">
                            <label for="age" class="col-md-5 control-label"><br>Age</label>

                            <div class="col-md-4"><br>
                                <input id="age" type="number" class="form-control" min="1" text="1" name="age" value="" required >

                              
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="weight" class="col-md-5 control-label"><br>Weight</label>

                            <div class="col-md-3"><br>
                                <input id="weight" type="number" class="form-control"  min="1" text="1"name="weight" value="{{ old('name') }}" required >

                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <label for="height" class="col-md-5 control-label"><br>Height</label>

                            <div class="col-md-4"><br>
                                <input id="height" type="number" class="form-control" min="1" text="1" name="height" value="{{ old('name') }}" required >

                        </div>
                        <input type="hidden" name="Typeuser" value="member">
                      <!--   <div >
                            <label for="height" class="col-md-5 control-label"><br>Status</label>
                          <div class="col-md-4"><br>
                              
                                    <select name= "Typeuser" class="form-control">
                                                <option >Typeuser</option>
                                                <option value="member" >MEMBER</option>
                                                <option value="admin">ADMIN</option>
                                                </select></div>
                        </div> --></div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-9"><br><br>
                               
                                <button type="submit" class="btn btn-primary">Register </button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>