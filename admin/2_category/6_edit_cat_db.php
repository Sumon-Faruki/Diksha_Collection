<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");

    $id = $_REQUEST['id'];
    extract($_POST);

    $sql="SELECT * FROM `category` WHERE `name` LIKE '$nm'";
    $res = mysqli_query($con,$sql);
    $row= mysqli_num_rows($res);

    if($row == 1) {
        header("location:5_edit_cat.php?title=Category editing Page&id=$id&nm=$nm&msg=record already has been added!");
    }
    else {
        $sql = "UPDATE `category` SET `name` = '$nm', `is_active` = '$isActive' WHERE `id` = $id";
        $res = mysqli_query($con, $sql);
        header("location:1_category.php?title=Category Page&msg=Data has been edited successfully!");
        # code...
    }
