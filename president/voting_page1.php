<?php
session_start();
error_reporting(0);

include("../config/db.php");

    
if (isset($_POST['vote'])) {
    $selectedValue = $_POST['nominee'];

 $id = $_SESSION['nic'];
  $sql = "UPDATE votes SET votes=votes+1 WHERE name='$selectedValue'";
$result= mysqli_query($con,$sql);

$votersql="UPDATE voters SET President=1 WHERE NIC='$id'";
$result1= mysqli_query($con,$votersql);

if($result && $result1){
    

    ?>
<script type="text/javascript">
alert("Successfully Voted.");
window.location.href = "../index_user.php";
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
    <title>Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
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

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="stud_page.php"><span class="glyphicon glyphicon-home"></span></a></li> -->
               <!--  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a> -->
                    <!-- <ul class="dropdown-menu"> -->
                        <li><a href="../index_user.php">Back</a></li>
                <!--     </ul>
                </li> -->
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->







<div class="container" style="margin-top: 5%;">
    <div class="row">
       
        <div class="col-md-6 col-md-offset-3">
            
            <div class="voting-con">
                <br>
                <h3 style="text-align: center;"> Voting Page</h3><hr />
               
                <form action="" method="POST" role="form">
                    <p class="help-block"><b> </b></p>
                       

                        
                            <div class="form-group">
                                <select name="nominee" class="form-control">
                                    <option value="">*****Select Candidate*****</option>
                                    <?php
                                    //$sql=$con,"SELECT * FROM candidates";
                                    $result=mysqli_query($con,"SELECT * FROM candidates");
                                    while ($row = mysqli_fetch_array($result)) {
                                        
                                     ?>
                                    
                                    
                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        
                        <input type="hidden" name="org" value="">
                        <input type="hidden" name="pos" value="">
                        <input type="hidden" name="voter_id" value="">

                    
                        <button type="submit" id="submitButton" name="vote"  class="btn btn-primary">                         
                            Vote
                        </button>
                        
                </form><hr />
                
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