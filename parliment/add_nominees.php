<?php
session_start();
error_reporting(0);

include ("navbar.php"); 
include ("../config/db.php");

$dd = $_GET['id'];
// $ElecName = $_SESSION['ElecName']; 

$result=mysqli_query($con,"SELECT * FROM candidates_parliment");
while ($row = mysqli_fetch_array($result)) {

if($row['id']==$dd){
    $Ename=$row['name'];
    $Eparty=$row['party'];
    $province=$row['province'];
    $Edistrict=$row['district'];

 }                            
}
                                    



 // insert nomenee

 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $party = $_POST['party'];
    $province=$_POST['Province'];
    $district = $_POST['district'];

if($party!="" && $party!="" && $district!=""){

    if($dd==null){
        $query = "INSERT INTO candidates_parliment(name, party, province,district ) VALUES('$name','$party','$province','$district')";
        $query1 = "INSERT INTO votes_parliment(name,party,votes,province) VALUES('$name','$party','0','$province')";
        $sql_run = mysqli_query($con,$query);
        $sql_run = mysqli_query($con,$query1);
        if($sql_run){
                          ?>
<script type="text/javascript">
alert("Insert successfully!");
window.location.href = "add_nominees.php";
</script>
<?php
        }else{
                                                  ?>
<script type="text/javascript">
alert("Error!");
window.location.href = "add_nominees.php";
</script>
<?php
        }   

    }else{
        
        $query = "UPDATE candidates_parliment SET name='$name', party='$party', province='$province',district='$district' WHERE id = '".$dd."'";
        $query1 = "UPDATE votes_parliment SET name='$name',party='$party',province='$province' WHERE id = '".$dd."'";
        $sql_run = mysqli_query($con,$query);
        $sql_run = mysqli_query($con,$query1);

        if($sql_run){
                ?>
<script type="text/javascript">
alert("Update successfully!");
window.location.href = "add_nominees.php";
</script>
<?php
        }else{
                                                  ?>
<script type="text/javascript">
alert("Error!");
window.location.href = "add_nominees.php";
</script>
<?php
        }   
    }

}else{
    echo "DATA missing Error..!!";    

}
}






//delete nomenee
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
 
$sql="DELETE FROM candidates_parliment WHERE id='$id'";
$sql1="DELETE FROM votes_parliment WHERE id='$id'";

$sql_run=mysqli_query($con,$sql);
$sql_run=mysqli_query($con,$sql1);

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
 

 
</head>
<body>






<div class="container">
    <div class="row">
        <div class="col-md-4">
          
            <h4>Add Candidates</h4><hr>
            <form method="POST" action="" role="form">
                <div class="form-group-sm">
                    <label for="name">Name</label>
                    <input required type="text" value='<?php if($dd!=null){echo $Ename;} ?>' name="name" class="form-control" placeholder="Candidate's name">
                </div>
                <div class="form-group-sm">
                    <label for="organization">Party</label>
                  
                        <select required name="party" class="form-control" id="org-list" >
                            <option>****** SELECT Party****</option>
                               <?php
                                    $result=mysqli_query($con,"SELECT * FROM parties_parliment");
                                    while ($row = mysqli_fetch_array($result)) {
                                        
                                    
                                    ?>
                                    
                                    
                                    <option <?php if($Eparty==$row['name']){echo "Selected";} ?> value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>

                                    <?php
                                    }
                                    ?>
                        </select> 
                </div>
            <div class="form-group-sm">
                    <label for="Province">Province</label>
                    <select required name="Province" class="form-control">
                        <option>****** SELECT Province****</option>
                        <option <?php if($Edistrict=='Western'){echo "Selected";} ?> value="Western">Western</option>
                        <option <?php if($Edistrict=='Eastern'){echo "Selected";} ?>  value="Eastern">Eastern</option>
                        <option <?php if($Edistrict=='Central'){echo "Selected";} ?>  value="Central">Central</option>
                        <option <?php if($Edistrict=='Sabaragamuwa'){echo "Selected";} ?>  value="Sabaragamuwa">Sabaragamuwa</option>
                        <option <?php if($Edistrict=='Southern'){echo "Selected";} ?>  value="Southern">Southern</option>
                        <option <?php if($Edistrict=='Uva'){echo "Selected";} ?>  value="Uva">Uva</option>
                        <option <?php if($Edistrict=='Northwestern'){echo "Selected";} ?>  value="Northwestern">Northwestern</option>
                        <option <?php if($Edistrict=='Nortcentral'){echo "Selected";} ?>  value="Nortcentral">Nortcentral</option>
                        <option <?php if($Edistrict=='Northern'){echo "Selected";} ?>  value="Northern">Northern</option>
                       
                        

                    </select>
                </div>
                <div class="form-group-sm">
                    <label for="Distric">Distric</label>
                    <select required name="district" class="form-control">
                        <option>****** SELECT District****</option>
                        <option <?php if($Edistrict=='Jaffna'){echo "Selected";} ?> value="Jaffna">Jaffna</option>
                        <option <?php if($Edistrict=='Kilinochchi'){echo "Selected";} ?>  value="Kilinochchi">Kilinochchi</option>
                        <option <?php if($Edistrict=='Mannar'){echo "Selected";} ?>  value="Mannar">Mannar</option>
                        <option <?php if($Edistrict=='Mullaitivu'){echo "Selected";} ?>  value="Mullaitivu">Mullaitivu</option>
                        <option <?php if($Edistrict=='Vavuniya'){echo "Selected";} ?>  value="Vavuniya">Vavuniya</option>
                        <option <?php if($Edistrict=='Puttalam'){echo "Selected";} ?>  value="Puttalam">Puttalam</option>
                        <option <?php if($Edistrict=='Kurunegala'){echo "Selected";} ?>  value="Kurunegala">Kurunegala</option>
                        <option <?php if($Edistrict=='Gampaha'){echo "Selected";} ?>  value="Gampaha">Gampaha</option>
                        <option <?php if($Edistrict=='Colombo'){echo "Selected";} ?>  value="Colombo">Colombo</option>
                        <option <?php if($Edistrict=='Kaluthara'){echo "Selected";} ?>  value="Kaluthara">Kaluthara</option>
                        <option <?php if($Edistrict=='Anuradhapura'){echo "Selected";} ?>  value="Anuradhapura">Anuradhapura</option>
                        <option <?php if($Edistrict=='Polonnaruwa'){echo "Selected";} ?>  value="Polonnaruwa">Polonnaruwa</option>
                        <option <?php if($Edistrict=='Matale'){echo "Selected";} ?>  value="Matale">Matale</option>
                        <option <?php if($Edistrict=='Kandy'){echo "Selected";} ?>  value="Kandy">Kandy</option>
                        <option <?php if($Edistrict=='Nuwara Eliya'){echo "Selected";} ?>  value="Nuwara Eliya">Nuwara Eliya</option>
                        <option <?php if($Edistrict=='Kegalle'){echo "Selected";} ?>  value="Kegalle">Kegalle</option>
                        <option <?php if($Edistrict=='Ratnapura'){echo "Selected";} ?>  value="Ratnapura">Ratnapura</option>
                        <option <?php if($Edistrict=='Trincomalee'){echo "Selected";} ?>  value="Trincomalee">Trincomalee</option>
                        <option <?php if($Edistrict=='Batticaloa'){echo "Selected";} ?>  value="Batticaloa">Batticaloa</option>
                        <option <?php if($Edistrict=='Ampara'){echo "Selected";} ?>  value="Ampara">Ampara</option>
                        <option <?php if($Edistrict=='Badulla'){echo "Selected";} ?>  value="Badulla">Badulla</option>
                        <option <?php if($Edistrict=='Monaragala'){echo "Selected";} ?>  value="Monaragala">Monaragala</option>
                        <option <?php if($Edistrict=='Hambantota'){echo "Selected";} ?>  value="Hambantota">Hambantota</option>
                        <option <?php if($Edistrict=='Matara'){echo "Selected";} ?>  value="Matara">Matara</option>
                        <option <?php if($Edistrict=='Galle'){echo "Selected";} ?>  value="Galle">Galle</option>
                       
                    </select>
                </div>
            
               
                <hr/>
                <div class="form-group-sm">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info">
                       <a href="add_nominees.php" class="btn btn-success" role="button">Reset</a>  
                    <input type="hidden" name="id" value="<?php  echo $row['id']; ?>">
                </div>
            </form>
        </div>

     
        <div class="col-md-8">
            <h4>List of Candidates</h4><hr>
            <div class="table-responsive">
           
                <table class="table table-bordered table-condensed table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Party</th>
                        <th>Province</th>
                        <th>Distric</th>
                        
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                     </thead>
                    <tbody>
                   
                        <?php
                            $sql = "SELECT * FROM candidates_parliment";

                            $sql_run = mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($sql_run))
                            {
                        ?>
                            <tr>
                             
                            
                             
                              <td><?php echo $row['name'] ;?></td>
                            <td><?php echo $row['party'] ;?></td>
                            <td><?php echo $row['province'] ;?></td>
                            <td><?php echo $row['district'] ;?></td>
                              
                        <td>
                          <a href="add_nominees.php?id=<?php echo $row['id']; ?>" class="btn btn-success" role="button">Edit</a>


                        </td>
                         <td>  
                             <form method="POST" action="" >
                            <div class="form-group" align="">
                              <input type="submit" value="Delete" class="btn btn-danger btn-md" onClick="return confirm('Are you sure you want to delete?')" name="delete"> 

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
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>