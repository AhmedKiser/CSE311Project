<?php

include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id = $id ";
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');}
    //     $sql = "ALTER TABLE `crud` AUTO_INCREMENT=1";
    // $result = mysqli_query($con,$sql);

}

?>