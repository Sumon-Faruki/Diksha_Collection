<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php"); 
    require("../1_log/db.php");

    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM `product` WHERE `id`=$id ";
    $res = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res); 

    $sql1 = "SELECT * FROM `category`";
    $res1 = mysqli_query($con, $sql1);
?>



<div class="mx-auto w-75 shadow pt-4 pb-4">
    <?php
    print "<form action='6_editing_product.php?id=$id&title=editing product Page' method='post' enctype='multipart/form-data'>"; ?>

        Select category: &ensp;
        <select name="cat_id">
            <?php
                while($row1=mysqli_fetch_assoc($res1))
                {
                    $selected = ($row['cat_id'] == $row1['id']) ? "selected" : "";
                    echo "<option value='$row1[id]' $selected>$row1[name]</option>";
                }
            ?>
        </select>
                <br><br>
    
        Product name: &ensp;<input type="text" name="nm" required value="<?php echo $row['p_name']; ?>"><br><br>

        Price: &ensp;<input type="number" name="price" required value="<?php echo $row['price']; ?>"><br><br>

        Color: &ensp;<input type="text" name="color" required value="<?php echo $row['color']; ?>"><br><br>

        Size: &ensp;<input type="text" name="size" required  value="<?php echo $row['size']; ?>"><br><br>

        Description: <br><textarea cols="50" rows="4" name="dsc"><?php echo $row['description']; ?></textarea><br><br>

        Image : <input type="file" name="im" ><br><br>
        <input type="hidden" name="old_im" value="<?php echo $row['image'] ?>">

        product is Active:
        <input type="radio" name="isActive" value="y" checked="checked"> Yes
        <input type="radio" name="isActive" value="n"> No
        <br><br>

        <input type="submit" value="Add Product">
    </form>
</div>
 

