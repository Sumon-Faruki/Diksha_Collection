<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");
    extract($_POST);
    extract($_FILES);
    $id = $_REQUEST['id']; 

    //getting category name 
    $sql = "SELECT * FROM `category` WHERE `id`=$cat_id";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res); 
    $cat_name = $row['name']; 
    // getting category name end

 
    // $path = "pro_images/";
    // $im_name = $old_im;
    // if(isset($im)){
    //     if($im['error']==0){
    //         if($im['type']=="image/jpg" || $im['type']=="image/jpeg" || $im['type']=="image/png")
    //         {
    //             unlink($path.$im_name);
    //             $im_name = $im['name'];
    //             copy($im['tmp_name'], $path.$im_name);	
    //         }
    //     }
    // }

    if(isset($_FILES)){
        $im = $_FILES['im'];
        $path = "pro_images/";
        $im_name = $id."-".$im['name'];
        $fullpath = "pro_images/".$im_name;
        if($im['error'] == 0){
            if($im['type'] == "image/jpeg" || $im['type'] == "image/jpg" || $im['type'] == "image/png")
            {
                unlink($path.$old_im);
                copy($im['tmp_name'], $fullpath);
    
                $sql = "UPDATE `product` SET `image`='$im_name' WHERE `id`=$id";
                $res = mysqli_query($con, $sql);
            }
    
        }
    
    }
    // echo "`cat_id`='$cat_id',`cat_name`='$cat_name',`p_name`='$nm',`price`='$price',`size`='$size',`description`='$dsc',`image`='$im_name',`color`='$color', `post_date`=NOW(),`is_active`='$isActive' WHERE `id`=$id";
    // die();
 
    $sql = "UPDATE `product`  SET `cat_id`='$cat_id',`cat_name`='$cat_name',`p_name`='$nm',`price`='$price',`size`='$size',`description`='$dsc',`color`='$color', `post_date`=NOW(),`is_active`='$isActive' WHERE `id`=$id";
    $res = mysqli_query($con, $sql);
    header("location:1_product.php?title=product Page&msg=record added successfully!");
?>