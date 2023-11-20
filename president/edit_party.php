<?php

include'../config/db.php';
include 'navbar.php';


$id = $_GET['id'];

$sql = "SELECT * FROM parties WHERE id='$id'";

$sql_run = mysqli_query($con,$sql);

$row = mysqli_fetch_array($sql_run);



// party update

if (isset($_POST['update'])) {
    $party = $_POST['party'];
    $id = $_POST['id'];
 
if($party!="" ){

$query = "UPDATE parties SET name='$party' WHERE id='$id'";
$sql_run = mysqli_query($con,$query);
$party = "";

if($sql_run){
  
    ?>
<script type="text/javascript">
alert("Update successfully!");
window.location.href = "add_party.php";
</script>
<?php
}else{
    echo mysqli_error($con);
}
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
            <div class="col-md-4 col-md-offset-4">
          
                <h4>Edit Party</h4><hr>
             

             
                <form method="POST" action="" role="form">
                   
                    <div class="form-group-sm">
                        <label for="organization">Party</label>
                        <input required type="text" name="party" value="<?php echo $row['name']; ?>" class="form-control">
                    </div><hr>
                    <div class="form-group-sm">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit"  value="Update" class="btn btn-info" name="update">
                        <!-- <a href="add_party.php" class="btn btn-danger" role="button">Back</a> -->
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
