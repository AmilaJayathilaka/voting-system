<?php

session_start();
error_reporting(0);

include 'config/db.php';

$NIC=$_POST['nic'];

$election = $_SESSION['election'];

if ($election=='President') {

	$sql="SELECT NIC FROM voters WHERE NIC='$NIC' AND president = 0";
$sql_run=mysqli_query($con,$sql);

if (mysqli_num_rows($sql_run)==1)

{
$row=mysqli_fetch_array($sql_run);
$_SESSION['nic']= $row['NIC'];

	header("location:president/voting_page1.php");
	
}

}elseif ($election=='Parliment') {
	$sql="SELECT NIC FROM voters WHERE NIC='$NIC' AND parliment = 0";
$sql_run=mysqli_query($con,$sql);

if (mysqli_num_rows($sql_run)==1)

{
$row=mysqli_fetch_array($sql_run);
$_SESSION['nic']= $row['NIC'];

	header("location:parliment/sele_party.php");
}


}elseif ($election=='Provincial') {
	$sql="SELECT NIC FROM voters WHERE NIC='$NIC' AND province = 0";
$sql_run=mysqli_query($con,$sql);

if (mysqli_num_rows($sql_run)==1)

{
$row=mysqli_fetch_array($sql_run);
$_SESSION['nic']= $row['NIC'];

	header("location:province/sele_party.php");
}


}else if($election=='Local'){
	$sql="SELECT NIC FROM voters WHERE NIC='$NIC' AND local = 0";
$sql_run=mysqli_query($con,$sql);

if (mysqli_num_rows($sql_run)==1)

{
$row=mysqli_fetch_array($sql_run);
$_SESSION['nic']= $row['NIC'];

	header("location:local/sele_party.php");
}



}else if ($election==' ') {
	# code...
}{

	

?>
<script type="text/javascript">
alert("Invalid Login or already voted");
window.location.href = "index_user.php";
</script>
<?php
}


?>

