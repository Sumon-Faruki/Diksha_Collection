<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM `category` WHERE `id`=$id";
    $res = mysqli_query($con,$sql);
    header("location:1_category.php?title=Category Page&msg=THe Data Has Been Deleted Succesfully!")
?>