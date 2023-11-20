<?php
session_start();
error_reporting();
include 'config/db.php';

if (!isset($_SESSION))

$username=$_POST['username'];
$password=$_POST['password'];
// $election=$_POST['election'];

$sql="SELECT username,pw FROM login WHERE username='$username' AND pw='$password'";
$sql_run=mysqli_query($con,$sql);

if (mysqli_num_rows($sql_run)==1)
{
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


?>