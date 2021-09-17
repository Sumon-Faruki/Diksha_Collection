<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM `product` WHERE `id`=$id";
    $res = mysqli_query($con, $sql);
    header("location:1_product.php?title=product Page&msg=Record has been deleted successfully!");
?>