<?php
session_start();
error_reporting(0);

if (isset($_POST['President'])) {

    $_SESSION['election']= "President";
    header("location:index_user.php");

 }

if (isset($_POST['Parliment'])) {

    $_SESSION['election']= "Parliment";
    header("location:index_user.php");

 }

 if (isset($_POST['Provincial'])) {

    $_SESSION['election']= "Provincial";
    header("location:index_user.php");

 }

 if (isset($_POST['Local'])) {

    $_SESSION['election']= "Local";
    header("location:index_user.php");

 }

 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body background = "images/slback.jpg" style="background-repeat: no-repeat; background-size: 1280px 668px;">

<div class= "container" style="background-color:#; padding:0px 0px 150px 0px;" >
<br>
<h1 style="font-size:85px; text-align:center; color: white;"><b>Election - Sri Lanka</b></h1>
<br>
<form method="POST">
<div class="row">
<div class="col-md-3" style="background-color:#ff9999; padding:2% 5%; border-radius:20px 20px 20px 20px"><h5>President Election</h5><br>
<img src="images/President.png" width="150px" height="200px"><br>
<div><br><center><button type="submit" class="btn-primary" style="width:150px; height:60px;" value="President Election" name="President">Select</button></center></div>
</div>

<div class="col-md-3" style="background-color:#ecb3ff; padding:2% 3.5%; border-radius:20px 20px 20px 20px"><h4>Parliment Election</h4><br>
<img src="images/parliment.jpg" width="200px" height="180px"><br><br>
<div><br><center><button type="submit" class="btn-primary" style="width:150px; height:60px;" value="Parliment Election" name="Parliment">Select</button></center></div>
</div>

<div class="col-md-3" style="background-color:#ff9999; padding:2% 0.5%; border-radius:20px 20px 20px 20px"><center><h4>Provincial Election</h4></center><br>
<img src="images/province.png" width="180px" height="200px" hspace="50px" style="background-color:lightblue;"><br>
<div><br><center><button type="submit" class="btn-primary" style="width:150px; height:60px;" value="Provincial Election" name="Provincial">Select</button></center></div>
</div>

<div class="col-md-3" style="background-color:#ecb3ff; padding:2% 6%; border-radius:20px 20px 20px 20px"><h4>Local Election</h4><br>
<img src="images/Sri_Lanka_divisions.png" width="150px" height="200px" style="background-color:lightblue;"><br>
<div><br><center><button type="submit" class="btn-primary" style="width:150px; height:60px;" value="Local Election" name="Local">Select</button></center></div>
</div>

</div>
</form>

</div>

</body>
</html>
