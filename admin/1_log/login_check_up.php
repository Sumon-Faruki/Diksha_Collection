<?php
session_start();
if(!$_SESSION['active_id']){
	header("location:/diksha/admin/1_log/login.php?msg=wrong attempt!");
}