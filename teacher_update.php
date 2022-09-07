<?php

include 'config.php';
$id = $_GET['updateTid'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'] ;
    $password = $_POST['address'];

    $sql = "update teacher set  `name`='$name',  `email`='$email',`phone`='$phone',`address`='$password' where `id`='$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "Data inserted successful";
        header('location:teacher.php');
    }else
        die(mysqli_error($conn));
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name = "name">
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name = "email">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="text" class="form-control"  placeholder="Enter your phone" name = "phone">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your password" name = "address">
  </div>
  

  <div class="mb-3">
  <button type="submit" class="btn btn-primary" name = 'submit'>update</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>