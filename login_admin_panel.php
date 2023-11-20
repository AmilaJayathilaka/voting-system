<?php
if (!isset($_SESSION))
session_start();

include 'config/db.php';

$username=$_POST['username'];
$password=md5($_POST['password']);
$election = $_SESSION['election'];

$sql="SELECT username,pw FROM login WHERE username='$username' AND pw='$password'";
$sql_run=mysqli_query($con,$sql);

if ($election=='President') {
	if (mysqli_num_rows($sql_run)==1)
{
$row=mysqli_fetch_array($sql_run);
$_SESSION['username']= $row['username'];
header("location:president/admin_page.php");

}
else
{
	?>
<script type="text/javascript">
alert("Invalid Login!");
window.location.href = "index_user.php";
</script>
<?php
}
}

if ($election=='Parliment') {
	if (mysqli_num_rows($sql_run)==1)
{
$row=mysqli_fetch_array($sql_run);
$_SESSION['username']= $row['username'];
header("location:parliment/admin_page.php");

}
else
{
	?>
<script type="text/javascript">
alert("Invalid Login!");
window.location.href = "index_user.php";
</script>
<?php
}
}

if ($election=='Provincial') {
	if (mysqli_num_rows($sql_run)==1)
{
$row=mysqli_fetch_array($sql_run);
$_SESSION['username']= $row['username'];
header("location:province/admin_page.php");

}
else
{
	?>
<script type="text/javascript">
alert("Invalid Login!");
window.location.href = "index_user.php";
</script>
<?php
}
}


if ($election=='Local') {
	if (mysqli_num_rows($sql_run)==1)
{
$row=mysqli_fetch_array($sql_run);
$_SESSION['username']= $row['username'];
header("location:local/admin_page.php");

}
else
{
	?>
<script type="text/javascript">
alert("Invalid Login!");
window.location.href = "index_user.php";
</script>
<?php
}
}


?>