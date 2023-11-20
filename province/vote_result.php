
<?php 
session_start();
error_reporting(0);
include 'navbar.php';
include '../config/db.php';
// $ElecName = $_SESSION['ElecName'];

$query = "SELECT name, sum(votes) FROM votes_province group by name";
$res = $con->query($query);


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
        <div class="col-md-12">
            
           
            <h4 align="center"> Result</h4>      <hr>

               

                

                <div class="table-responsive">
                            
                    <table class="table table-bordered ">
                        <thead class="thead-dark">
                        <tr>
                        <th>Name</th>
                        <th>Party</th>
                        <th>Votes</th>
                       
                        </tr>
                        </tread>       
                        <tbody>
                   
                        <?php
                            $sql = "SELECT * FROM votes_province";

                            $sql_run = mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($sql_run))
                            {
                        ?>
                            <tr>
                             
                            
                             
                            <td><?php echo $row['name'] ;?></td>
                            <td><?php echo $row['party'] ;?></td>
                            <td><?php echo $row['votes'] ;?></td>
                            
                                             
                              
                              
                            </tr>
                            <?php 

                        }
                        ?>


                        </tbody>
                        </thead>
                    </table>
                </div>        
            <hr>                
                 
<div id="piechart" style="width: 900px; height: 500px;"></div>


<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

   

</nav>
<!-- End Footer -->

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['name', 'votes'],
          
          <?php 
while($row=$res->fetch_assoc())
{
     echo "['".$row['name']."',".$row['sum(votes)']."],";
}

          ?>

        ]);

        var options = {
          title: 'Vote result',
          is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</body>
</html>