<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");
    extract($_POST);
    extract($_FILES);
    $id = $_REQUEST['id']; 
 
    if(isset($_FILES)){
        $im = $_FILES['im'];
        $path = "pro_images/";
        $im_name = $id."-".$im['name'];
        $fullpath = "pro_images/".$im_name;
        if($im['error'] == 0){
            if($im['type'] == "image/jpeg" || $im['type'] == "image/jpg" || $im['type'] == "image/png")
            {
                if($old_im!=NULL)
                    unlink($path.$old_im);
                copy($im['tmp_name'], $fullpath);
    
                $sql = "UPDATE `proof` SET `image`='$im_name' WHERE `proof_id`=$id";
                $res = mysqli_query($con, $sql);
            }
    
        }
    
    } 
 
    $sql = "UPDATE `poof`  SET `post_date`=NOW()  WHERE `proof_id`=$id";
    $res = mysqli_query($con, $sql);
    header("location:1_proof.php?title=Proof Page&msg=record added successfully!");
?>