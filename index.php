<?php
session_start();
include 'config/db.php';
//error_reporting(0);

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=md5($_POST['password']);




$sql="SELECT username,pw FROM login WHERE username='$username' AND pw='$password'";
$sql_run=mysqli_query($con,$sql);

if (mysqli_num_rows($sql_run)==1){
$row=mysqli_fetch_array($sql_run);
$_SESSION['username']= $row['username'];
header("location:sele_election.php");
}
else
{
?>
<script type="text/javascript">
alert("Invalid Login!");
window.location.href = "index.php";
</script>
<?php
}

}



?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body background = "images/back2.jpg" style="background-repeat: no-repeat; background-size: 1280px 668px;">

<div class= "container">

<br><br><br><div class="row">

<div class="col-md-9">
<img src="" class="img-fluid"><br>
</div>

<div class="col-md-3">
<form class="form-signin" action="" method="POST">
	<h4>Admin Login</h4><hr>
					<div class="form-label-group">
						<label for="inputEmail">Username</label>
						<input type="text" id="username" class="form-control" name="username" placeholder="Username" required autofocus >
				  </div>
				  <div class="form-label-group">
						<label for="inputPassword">Password</label>
						<input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
				  </div>
				  <br>
				  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button><hr>
				</form></div>

</div>


</div>

</body>
</html>
