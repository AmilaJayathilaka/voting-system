<?php 
session_start();
error_reporting(0);
include 'navbar.php';
include '../config/db.php';

if (isset($_POST['reset'])) {
  
 
$query1 = "UPDATE votes_province SET votes='0'";


$query = "UPDATE voters SET province='0'";
$sql_run = mysqli_query($con,$query);
$sql_run = mysqli_query($con,$query1);


if($sql_run){
  
    ?>
<script type="text/javascript">
alert("Reset successfully!");
window.location.href = "admin_page.php";
</script>
<?php
}else{
    echo mysqli_error($con);
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
        <div class="col-md-12 jumbotron">
            <div class="text-center">
                <h2>Voting System</h2>
                
                <p>
                    <h1>Province Election</h1><br />
                    <form method="POST">
                <input type="submit" name="reset"  class="btn btn-info" value="Reset Election">
                </form>
                </p>
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