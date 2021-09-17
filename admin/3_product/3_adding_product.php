<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");
    extract($_POST);

    //getting category name 
    $sql = "SELECT * FROM `category` WHERE `id`='$cat_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res); 
    $cat_name = $row['name']; 
    // getting category name end

    $sql = "INSERT INTO `product`  VALUES (NULL,'$cat_id','$cat_name','$nm','$price', '$size','$dsc','$color','',NOW(), '$isActive')";
    $res = mysqli_query($con,$sql);
    $id = mysqli_insert_id($con);

    if(isset($_FILES)){
        $im = $_FILES['im'];
        $im_name = $id."-".$im['name'];
        $fullpath = "pro_images/".$im_name;
        if($im['error'] == 0){
            if($im['type'] == "image/jpeg" || $im['type'] == "image/jpg" || $im['type'] == "image/png")
            {
                copy($im['tmp_name'], $fullpath);
    
                $sql = "UPDATE `product` SET `image`='$im_name' WHERE `id`=$id";
                $res = mysqli_query($con, $sql);
            }
    
        }
    
    }

    header("location:1_product.php?title=product Page&msg=record added successfully!");
?>