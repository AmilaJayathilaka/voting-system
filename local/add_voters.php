<?php 


session_start();
error_reporting(0);

include ("navbar.php"); 
include ("../config/db.php");

//get id from URL

$dd = $_GET['id'];

//Get table data to the variable
$result=mysqli_query($con,"SELECT * FROM voters");
while ($row = mysqli_fetch_array($result)) {

if($row['id']==$dd){
    $Vname=$row['Name'];
    $Vnic=$row['NIC'];
    $Vdistrict=$row['District'];

 }                            
}


// insert voters

 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $district = $_POST['district'];

// data validation

if($name!="" && $nic!="" && $district!=""){

    if (!preg_match("/^[0-9]{9}[vVxX]$/", $nic)) {
        echo '<script>alert("Insert Correct NIC Format!");</script>';
    }else{

    if($dd==null){
        $query = "INSERT INTO voters(Name, NIC, District) VALUES('$name','$nic','$district')";
        $sql_run = mysqli_query($con,$query);

        if($sql_run){
                                        ?>
        <script type="text/javascript">
        alert("Insert successfully!");
        window.location.href = "add_voters.php";
        </script>
        <?php

        }else{
                                                      ?>
<script type="text/javascript">
alert("Duplicate Entry!");
window.location.href = "add_nominees.php";
</script>
<?php
        }  

    }else{
        
        $query = "UPDATE voters SET Name='$name', NIC='$nic', District='$district' WHERE id = '".$dd."'";
        $sql_run = mysqli_query($con,$query);

        if($sql_run){
                            ?>
<script type="text/javascript">
alert("Update successfully!");
window.location.href = "add_voters.php";
</script>
<?php
        }else{
                                                      ?>
<script type="text/javascript">
alert("Duplicate Entry!");
window.location.href = "add_nominees.php";
</script>
<?php
        }   
    }
}

}else{
    echo "DATA missing Error..!!";    

}
}



//delete voters
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
 
$sql="DELETE FROM voters WHERE id='$id'";

$sql_run=mysqli_query($con,$sql);

if($sql_run)
{
   
}
else
{
                                              ?>
<script type="text/javascript">
alert("Error!");
window.location.href = "add_nominees.php";
</script>
<?php
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
    <link rel="stylesheet" href="../assets/css/style_admin.css">
</head>
<body>





<div class="container">
    <div class="row">
        <div class="col-md-4">
     
            <h4>Add Voters</h4><hr>
            <form method="POST" action="" role="form">
                <div class="form-group-sm">
                    <label for="name">Name</label>
                    <input required type="text" name="name"  value='<?php if($dd!=null){echo $Vname;} ?>' class="form-control" placeholder="Voter's name">
                </div>
               
               
                <div class="form-group-sm">
                    <label for="stud_id">Voter NIC No.</label>
                    <input required type="text"  value='<?php if($dd!=null){echo $Vnic;} ?>' name="nic" class="form-control" placeholder="NIC number">
                </div>
                   <div class="form-group-sm">
                    <label for="Distric">Distric</label>
                    <select required name="district" class="form-control">
                       <option>****** SELECT District****</option>
                        <option <?php if($Vdistrict=='Jaffna'){echo "Selected";} else{echo "Jaffna";}?> value="Jaffna">Jaffna</option>
                        <option <?php if($Vdistrict=='Kilinochchi'){echo "Selected";} ?>  value="Kilinochchi">Kilinochchi</option>
                        <option <?php if($Vdistrict=='Mannar'){echo "Selected";} ?>  value="Mannar">Mannar</option>
                        <option <?php if($Vdistrict=='Mullaitivu'){echo "Selected";} ?>  value="Mullaitivu">Mullaitivu</option>
                        <option <?php if($Vdistrict=='Vavuniya'){echo "Selected";} ?>  value="Vavuniya">Vavuniya</option>
                        <option <?php if($Vdistrict=='Puttalam'){echo "Selected";} ?>  value="Puttalam">Puttalam</option>
                        <option <?php if($Vdistrict=='Kurunegala'){echo "Selected";} ?>  value="Kurunegala">Kurunegala</option>
                        <option <?php if($Vdistrict=='Gampaha'){echo "Selected";} ?>  value="Gampaha">Gampaha</option>
                        <option <?php if($Vdistrict=='Colombo'){echo "Selected";} ?>  value="Colombo">Colombo</option>
                        <option <?php if($Vdistrict=='Kaluthara'){echo "Selected";} ?>  value="Kaluthara">Kaluthara</option>
                        <option <?php if($Vdistrict=='Anuradhapura'){echo "Selected";} ?>  value="Anuradhapura">Anuradhapura</option>
                        <option <?php if($Vdistrict=='Polonnaruwa'){echo "Selected";} ?>  value="Polonnaruwa">Polonnaruwa</option>
                        <option <?php if($Vdistrict=='Matale'){echo "Selected";} ?>  value="Matale">Matale</option>
                        <option <?php if($Vdistrict=='Kandy'){echo "Selected";} ?>  value="Kandy">Kandy</option>
                        <option <?php if($Vdistrict=='Nuwara Eliya'){echo "Selected";} ?>  value="Nuwara Eliya">Nuwara Eliya</option>
                        <option <?php if($Vdistrict=='Kegalle'){echo "Selected";} ?>  value="Kegalle">Kegalle</option>
                        <option <?php if($Vdistrict=='Ratnapura'){echo "Selected";} ?>  value="Ratnapura">Ratnapura</option>
                        <option <?php if($Vdistrict=='Trincomalee'){echo "Selected";} ?>  value="Trincomalee">Trincomalee</option>
                        <option <?php if($Vdistrict=='Batticaloa'){echo "Selected";} ?>  value="Batticaloa">Batticaloa</option>
                        <option <?php if($Vdistrict=='Ampara'){echo "Selected";} ?>  value="Ampara">Ampara</option>
                        <option <?php if($Vdistrict=='Badulla'){echo "Selected";} ?>  value="Badulla">Badulla</option>
                        <option <?php if($Vdistrict=='Monaragala'){echo "Selected";} ?>  value="Monaragala">Monaragala</option>
                        <option <?php if($Vdistrict=='Hambantota'){echo "Selected";} ?>  value="Hambantota">Hambantota</option>
                        <option <?php if($Vdistrict=='Matara'){echo "Selected";} ?>  value="Matara">Matara</option>
                        <option <?php if($Vdistrict=='Galle'){echo "Selected";} ?>  value="Galle">Galle</option>
                    </select>
                </div>
                <hr>
                <div class="form-group-sm">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info" >
                    <a href="add_voters.php" class="btn btn-success" role="button">Reset</a> 
                </div>

            </form>
        </div>

       
        <div class="col-md-8">
            <h4>List of Voters</h4><hr>
            <div class="table-responsive">
                
                <table class="table table-bordered table-condensed table-striped ">
                    <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Voter NIC No</th>
                        <th>Distric</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </tread>       
                    <tbody>
                   
                        <?php
                            $sql = "SELECT * FROM voters";

                            $sql_run = mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($sql_run))
                            {
                        ?>
                            <tr>
                             
                            
                             
                            <td><?php echo $row['Name'] ;?></td>
                            <td><?php echo $row['NIC'] ;?></td>
                            <td><?php echo $row['District'] ;?></td>
                              
                        <td>
                          <a href="add_voters.php?id=<?php echo $row['id']; ?>" class="btn btn-success" role="button">Edit</a>


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
</div>






<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    

</nav>
<!-- End Footer -->

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>