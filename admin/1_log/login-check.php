<?php 
    session_start();
    require ("db.php");
    extract($_POST);
    $sql = "SELECT * FROM `admin` WHERE   `email`='$em' and `pass` ='$pwd'";

    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        # code...
        $row = mysqli_fetch_assoc($res);
        $_SESSION['active_id']= $row['id']; 
        header("location:../2_category/1_category.php?title=Category Page");
    }
    else{
        header("location:login.php?msg=Wrong Username/Password, Please try again");
    }