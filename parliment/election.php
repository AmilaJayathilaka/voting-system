<?php 
include ("navbar.php"); 
include ("../config/db.php"); 
session_start();
 if (isset($_POST['submit'])) {

    // $election = $_POST['election'];
    // $ElecName = $_POST['ElecName'];
    // $_SESSION['election']= $election;
    // $_SESSION['ElecName']= $ElecName;
    
    
 }




?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
  
</head>
<body>







<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 style="text-align: center;">New Election</h3><hr />
            <h4></h4>
          
            <form action="" method="POST" role="form">
                
                <div class="form-group">
                    <label>Election Name</label>
                    
                    <input required type="text" name="ElecName" class="form-control" placeholder="Election Name">
                        
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info">
                </div>
            </form>
             
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