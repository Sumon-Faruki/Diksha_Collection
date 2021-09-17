<?php
    session_start();
    session_destroy();
    header("location:../webs/1_home.php?title=Home Page&msg=logout succesfully");
?>