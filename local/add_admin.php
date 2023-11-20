<?php

include ("navbar.php"); 
include '../config/db.php';

//Add admin

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
 
if($username!="" && $password!="" && ($password==$re_password)){


    
$pwmd5=md5($password);
$query = "INSERT INTO login(username,pw) VALUES('$username','$pwmd5')";
$sql_run = mysqli_query($con,$query);

if($sql_run){
    echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
}else{
    echo mysqli_error($con);
}   

}else{
    echo "<script type='text/javascript'>alert('Data missing error! or Password mismatch!')</script>";
}
}






?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
</head>
<body>







<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-con">
               
                <h3>Create Admin</h3><hr>
                <form method="post" action="" role="form">
                    <div class="form-group ">
                        <label for="username">Enter New Username</label>
                        <input type="text" name="username" id="username" class="form-control" >
                        <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
                    </div>
                    <div class="form-group">
                        <label for="password">Enter New Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
                    </div>
                      <div class="form-group ">
                        <label for="password">Re-enter Password</label>
                        <input type="password" name="re_password" id="re_password" class="form-control" >
                        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Insert" class="btn btn-danger">
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

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>