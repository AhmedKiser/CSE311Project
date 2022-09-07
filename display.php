
<?php

include 'config.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Add User</a></button>
    </div>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['mobile'];
            
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>
          <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
          <button class="btn btn-success"><a href="details.php?detailsid='.$id.'"class="text-light">Details</a></button>
          </td>
          </tr>'
          ;
          
        }

    }


    ?>

    
  
  </tbody>
</table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>