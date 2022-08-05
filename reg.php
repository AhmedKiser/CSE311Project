<?php


    if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = 'registration';

    $conn = mysqli_connect($server,$username,$password,$database);


    if(!$conn){
        die("connection failure".mysqli_connect_error());
    }
    echo "successfull";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    $sql = "INSERT INTO `reg` (`age`, `email`, `phone`, `gender`, `name`, `dt`) VALUES ('$age', '$email', '$phone', '$gender', '$name', current_timestamp());";
    echo $sql;

    if($conn->query($sql)==true){
        echo "successfull";
    }
    else 
        echo "fail";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>welcome to registration page</h1>

    <div class="container">
        <form action="reg.php" method="post">
            <input type="text" name="Name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="email" id="email " placeholder="enter your email">
            <input type="text" name="phone" id="phone " placeholder="enter your phone">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <button class="btn" id="submit">submit</button>
            <button class="btn" id="reset">reset</button>
        </form>
    </div>
    </body>
</html>