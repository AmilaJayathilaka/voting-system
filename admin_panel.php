<?php

 session_start();
if(isset($_SESSION['username'])){
 
}
?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-inverse " role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Voting Sytem</a>
            
        </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="index.php" >Home</a></li>
            </ul>
        </div>   
    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->





<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-con">
            	<h3>Administrator Log-in</h3><hr>
              		 <form method="post" action="login_admin_panel.php" role="form">
                    	<div class="form-group has-feedback">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-danger">
                    </div>
                </form><hr>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

   

</nav>
<!-- End Footer -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>