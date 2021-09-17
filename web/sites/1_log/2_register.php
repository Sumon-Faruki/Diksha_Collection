<?php
session_start();
extract($_POST);

// $_SESSION['frm']['nm'] = $nm;
print_r($_SESSION);
// echo "$email','$pass'";
// die;
require("4_db.php");


// if($_SESSION['captcha']['code'] != $cpt){
// 	header("location:http://localhost/mobilestore-asif/web/register.php?msg=invalid captcha code!");
// 	exit();
// }
$sql = "SELECT * FROM `client` WHERE `email`='$email'";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);

if($count<1){
    $sql = "INSERT INTO `client`(`email`, `pass`) VALUES ('$email','$pass')"; 
    $res = mysqli_query($con, $sql);
    $row=mysqli_insert_id($con);  
    // unset($_SESSION['frm']);
    $_SESSION['user_id'] = $row;
    $_SESSION['user_name'] = 'user_id'.$row;
    
    // header("location:../1_log/1_log.php?client_id=$row&msg=account register successfully!<br>Just log in...");
    header("location:../webs/1_home.php?title=Home Page&client_id=$row&msg=account register successfully!<br>Just log in...");
    
}
else{
    header("location:1_log.php?msg=this email is already registered!");
}


// $sql = "INSERT INTO `client`(`id`, `name`, `email`, `pass`, `phone`, `gender`, `user_pic`, `about`, `addess`, `is_active`) VALUES (NULL,'','$email','$pass',rand(),'m','','','','y')";


?>