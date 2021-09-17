<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php");

    require("../1_log/db.php");

    print '<div class="mx-auto w-50 shadow">
        
        <form action="3_adding_cat.php" method="post">

        <input type="text" name="nm" required placeholder="Enter the category name"><br>
        category is Active: 
        <input type="radio" name="isActive" value="y" checked="checked"> Yes 
        <input type="radio" name="isActive" value="n"> No
        <br>
        <input type="submit" value="Add"> 
        </form>
    </div>';
?>