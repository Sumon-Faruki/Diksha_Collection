<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php");

    require("../1_log/db.php");

    $id = $_REQUEST['id'];

    if(isset($_REQUEST['msg'])){
        print"<div style='color:#f00;'> $_REQUEST[msg]</div>";
    }

    $id = $_REQUEST['id'];
    $nm = $_REQUEST['nm'];


    print "<div class='mx-auto w-50 shadow'>
        <form action='6_edit_cat_db.php?id=$id' method='post'>";
    print "Edit it: <input type='text' name='nm' required value='$nm' style='width:70%;'><br>
        category is Active: 
        <input type='radio' name='isActive' value='y' checked='checked'> Yes 
        <input type='radio' name='isActive' value='n'> No
        <br>
        <input type='submit' value='Add'> 
        </form>
    </div>";

    require("../include/footer.php"); 
?>
