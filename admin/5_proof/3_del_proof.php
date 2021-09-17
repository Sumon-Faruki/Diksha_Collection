<?php
    require("../1_log/login_check_up.php"); 
    require("../1_log/db.php");

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM `proof` WHERE `proof_id`=$id";
    $res = mysqli_query($con, $sql);
    header("location:1_proof.php?title=proof Page&msg=Record has been deleted successfully!");
?>