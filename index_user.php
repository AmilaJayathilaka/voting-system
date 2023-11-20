<?php
// if (isset($_SESSION))
error_reporting(0);
session_start();
$election = $_SESSION['election'];
echo $election;

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 
</head>
<body background = "images/voter-holds.jpg" style="background-repeat: no-repeat; background-size: 1280px 668px;">

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
            <!-- <a class="navbar-brand " href="sandbox/index.php" style="margin-left: 875px;">Admin Login</a> -->
        </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="admin_panel.php" >Admin Login</a></li>
            </ul>
        </div>    
    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->


<br><br><br><br>

<div class="container" >
    <div class="row">
        <div class="col-md-4 col-md-offset-7" style="color: white; ">
           
                <h2>Voters Login</h2><hr>
              
                <form method="POST" action="login_user.php" >
                    <div class="form-group ">
                        <label style="font-size: 20px;">Voter's NIC Number     (Ex-940053749V)</label>
                        <input type="text" name="nic"  class="form-control" required/>
                       
                    </div>
                        <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
                </form>
          
        </div>
    </div>
</div>







<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>