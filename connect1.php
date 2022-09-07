<?php
$HOSTNAME = 'localhost';
$USERNAME ='root';
$PASSWORD = ' Nhww@31212';
$DATABASE ='signupform';

$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn){
    echo"connection successfully";
}else{
    die(mysqli_error($con));
}

?>