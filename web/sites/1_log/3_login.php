<?php
	session_start();
	require ("4_db.php"); 
	extract($_POST); 

	$sql = "SELECT * FROM `client` WHERE `email`='$email' AND `pass`='$pass'";
	// die($sql);
	$res = mysqli_query($con, $sql);
	$count = mysqli_num_rows($res);
	// echo "$count";
	// die();
	if($count == 1){
		$row = mysqli_fetch_assoc($res);
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['user_name'] = $row['name'];
		$_SESSION['profile_pic'] = $row['user_pic'];
		header("location:../webs/1_home.php?title=Home Page");
	}
	else{
		header("location:1_log.php?msg=wrong user/pass, please try again!");
	}
?>