<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php"); 
    require("../1_log/db.php");

    $sql = "SELECT * from category";
    $res = mysqli_query($con, $sql); 
?>


<div class="mx-auto w-75 shadow pt-4 pb-4">
    <form action="3_adding_product.php?title=adding product Page" method="post" enctype="multipart/form-data">

        Select category: &ensp;
        <select name="cat_id">
            <?php
                while($row=mysqli_fetch_assoc($res))
                {
                    echo "<option value='$row[id]'>$row[name]</option>";
                }
            ?>
        </select>
                <br><br>

        Product name: &ensp;<input type="text" name="nm" required placeholder="Enter the product name"><br><br>

        Price: &ensp;<input type="number" name="price" required placeholder="Enter the product price"><br><br>

        Color: &ensp;<input type="text" name="color" required placeholder="Enter the product color"><br><br>

        Size: &ensp;<input type="text" name="size" required placeholder="Enter the product size"><br><br>

        Description: <br><textarea cols="50" rows="4" name="dsc"></textarea><br><br>
        Image : <input type="file" name="im"><br><br>

        product is Active:
        <input type="radio" name="isActive" value="y" checked="checked"> Yes
        <input type="radio" name="isActive" value="n"> No
        <br><br>

        <input type="submit" value="Add Product">
    </form>
</div>
 

