<?php 
    require("../1_log/login_check_up.php");  
    require("../1_log/db.php");

    extract($_POST);

    $sql="SELECT * FROM `category` WHERE `name` LIKE '$nm'";
    $res = mysqli_query($con,$sql);
    $row= mysqli_num_rows($res);

    if($row == 1) {
        header("location:1_category.php?title=Category Page&msg=record already has been added!");
    }
    else {
        $sql = "INSERT INTO `category` VALUES (NULL, '$nm', '$isActive')";
        $res = mysqli_query($con,$sql);
        header("location:1_category.php?title=Category Page&msg=record added successfully!");
    }
?>