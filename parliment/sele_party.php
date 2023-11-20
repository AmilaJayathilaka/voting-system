<?php 

 
include ("../config/db.php"); 




?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""> Voting Sytem</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
             
               
                        <li><a href="../index_user.php">Back</a></li>
                   
               
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<!-- End Header -->





<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 style="text-align: center;">Select Party</h3><hr />
            <h4></h4>
          
            <form action="voting_page2.php" method="POST" role="form">
                <div class="form-group">
                    <label for="organization">Party</label>
                    <select required class="form-control" name="party">
                        <option value="">*****Select Party*****</option>
                        
                                     <?php
                                    $result=mysqli_query($con,"SELECT * FROM parties_parliment");
                                    while ($row = mysqli_fetch_array($result)) {
                                        
                                    
                                    ?>
                                    
                                    
                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>

                                    <?php
                                    }
                                    ?>
                      
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info">
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