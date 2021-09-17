<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");
    extract($_POST);
 

    $sql = "INSERT INTO `proof` VALUES (NULL,'',NOW())";
    $res = mysqli_query($con,$sql);
    $id = mysqli_insert_id($con);
    echo $id;

    if(isset($_FILES)){
        $im = $_FILES['im'];
        $im_name = $id."-".$im['name'];
        $fullpath = "pro_images/".$im_name;
        if($im['error'] == 0){
            if($im['type'] == "image/jpeg" || $im['type'] == "image/jpg" || $im['type'] == "image/png")
            {
                copy($im['tmp_name'], $fullpath);
    
                $sql = "UPDATE `proof` SET `image`='$im_name', `post_date`=NOW() WHERE `proof_id`=$id";
                $res = mysqli_query($con, $sql);
            }
    
        }
    
    }
    header("location:1_proof.php?title=Proof Page&msg=record added successfully!");
 
?>