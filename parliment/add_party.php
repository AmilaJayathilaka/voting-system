<?php

include '../config/db.php';
include 'navbar.php';

////insert party

if (isset($_POST['submit'])) {
	$party = $_POST['party'];
 
if($party!="" ){

$query = "INSERT INTO parties_parliment(name) VALUES('$party')";
$sql_run = mysqli_query($con,$query);

if($sql_run){
	echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
}else{
	echo mysqli_error($con);
}	

}else{
	echo "DATA Missing Error";
}
}


/// delete party
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
 
$sql="DELETE FROM parties_parliment WHERE id='$id'";

$sql_run=mysqli_query($con,$sql);

if($sql_run)
{
	
}
else
{
	echo mysqli_error($con);
}
}








?>
 
<!DOCTYPE HTML>
<html lang="en-US">
<head>

    <title>Administrator Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style_admin.css">
</head>
<body>






<div class="container" >
    <div class="row">
        <div class="col-md-4">
            <h4>Add party</h4><hr>
            
            <form method="POST" action="" >
                <div class="form-group-sm">
                    <label>Party</label>
                    
                    <input required type="text" name="party" class="form-control" placeholder="Party Name"  >
                        
                </div><hr>
                <div class="form-group-sm">
                    <input type="submit" name="submit"  class="btn btn-info">
                    <a href="add_party.php" class="btn btn-success" role="button">Reset</a> 
                </div>

            </form>
        </div>

        <div class="col-md-8">
            <h4>List of Parties</h4><hr>
           






<table class="table table-bordered table-condensed table-striped ">
  <thead class="thead-dark">
    <tr>
       
      <th scope="col">Party name</th>
    
      <th >Edit</th>
      <th >Delete</th>

    </tr>
  </thead>
  <tbody>

    
<!-- table view -->

<?php
	$sql = "SELECT * FROM parties_parliment";

	$sql_run = mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($sql_run))
    {
?>
    <tr>
     
    
      
      <td><?php echo $row['name'] ;?></td>
 
      
<td>
  <a href="edit_party.php?id=<?php echo $row['id']; ?>" class="btn btn-success" role="button">Edit</a>


</td>
 <td>  
 	 <form method="POST" action="" >
 	<div class="form-group" align="">
      <input type="submit" value="Delete" class="btn btn-danger btn-md" name="delete" onClick="return confirm('Are you sure you want to delete?')"> 
       <input type="hidden" name="id" value="<?php  echo $row['id']; ?>">
</div>
</form>



 </td>
        
      
    </tr>
    <?php 

}
?>


  </tbody>
</table>
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
