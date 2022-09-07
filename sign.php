<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect1.php';
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="insert into 'registration' (username,password)
        values('$username,$password')";
        $result=mysqli_query($con,$sql);

        if($result){
            echo"Data inserted successfully";
        }else{
            die(mysqli_error($con));
        }
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center"> Sign Up </h1>
    <div class = "container mt-5">
    <form action="sign.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder ="Enter Your Username" name="username" >
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder ="Enter Your Password" name ="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-60">Submit</button>
</form>
</div>
    
</body>
</html>
