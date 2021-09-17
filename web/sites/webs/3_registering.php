<?php
session_start();
extract($_POST);
extract($_FILES);
// $_SESSION['frm']['nm'] = $nm;
// print_r($_SESSION);
// echo "$about','$addess";
//         $old_im = $old_im."hhh-";
//         $path = "pro_images/";
//         unlink($path.$old_im); 
// echo $old_im;
// die();

// die;
require("../1_log/4_db.php");
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM `client` WHERE `id`=$id";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);

// if($_SESSION['captcha']['code'] != $cpt){
// 	header("location:http://localhost/mobilestore-asif/web/register.php?msg=invalid captcha code!");
// 	exit();
// }

if(isset($_FILES)){
        $im = $_FILES['im'];
        $path = "pro_images/";
        $im_name = $id."-".$im['name']; 
        $fullpath = "pro_images/".$im_name;
        if($im['error'] == 0){
            if($im['type'] == "image/jpeg" || $im['type'] == "image/jpg" || $im['type'] == "image/png")
            { 
                if($old_im!="")
                { 
                        unlink($path.$old_im); 
                } 
                copy($im['tmp_name'], $fullpath); 
                $sql = "UPDATE `client` SET `user_pic`='$im_name' WHERE `id`=$id";
                $res = mysqli_query($con, $sql);
            }
    
        }
    
    }

 
// $sql = "INSERT INTO `client` (`about`,`addess`)  VALUES ('$about','$addess') WHERE `id`=$id";
// $res = mysqli_query($con, $sql); 

$sql = "UPDATE `client` SET `name`='$nm',`phone`='$mobile', `about`='$about', `addess`='$addess',`gender`='$gender' WHERE `id`=$id";
$res = mysqli_query($con, $sql); 
unset($_SESSION['user_name']); 
$_SESSION['user_name']=$nm;  
header("location:2_myaccount.php?title=profile Page&msg=account updated successfully!");
?>