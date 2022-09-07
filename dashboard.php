<?php
  $con = mysqli_connect("localhost","root","","login");
  if($con){
    echo "connected";
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Student number</h5>
    
                <?php
                $con = mysqli_connect("localhost","root","","login");
                  $query = "select id from users order by id";
                  $query_run = mysqli_query($con,$query);
                  $row = mysqli_num_rows($query_run);
                  echo '<h1> '.$row.' </h1>'
                ?>
                 <a href="display.php" class="btn btn-primary">Show Student</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <h5 class="card-title">Total Teacher number</h5>
    
              <?php
              $con = mysqli_connect("localhost","root","","login");
                $query = "select id from teacher order by id";
                $query_run = mysqli_query($con,$query);
                $row = mysqli_num_rows($query_run);
                echo '<h1> '.$row.' </h1>'
                    ?>
                    <a href="teacher.php" class="btn btn-primary">Show Teacher</a>
        </div>
      </div>
    </div>
</div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></>
  </body>
</html>

