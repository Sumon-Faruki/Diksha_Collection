<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php"); 
    require("../1_log/db.php");

    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM `proof` WHERE `proof_id`=$id ";
    $res = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res); 
 
?>



<div class="mx-auto w-75 shadow pt-4 pb-4">
    <?php
    print "<form action='5_editing_proof.php?id=$id&title=editing proof Page' method='post' enctype='multipart/form-data'>"; ?> 

        Update the image : <input type="file" name="im" ><br><br>
        <input type="hidden" name="old_im" value="<?php echo $row['image'] ?>"> 

        <input type="submit" value="Add proof">
    </form>
</div>
 

