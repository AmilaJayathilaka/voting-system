<?php
// if (isset($_SESSION))
// error_reporting(0);
// session_start();
// $election = $_SESSION['election'];
include 'navbar.php';

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
 
</head>
<body background = "">






<div class="container" >
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-con">
                <h3>Location</h3><hr>
              
                <form method="POST" action="login_user.php">
                    <div class="form-group ">
                        <label for="stud_id">Enter Location Name</label>
                        <input type="text" name="Location"  class="form-control" required/>
                       
                    </div>
                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                </form>
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