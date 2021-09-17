<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php");

    require("../1_log/db.php");


    $where = "";
    $srch = "";
    if(isset($_REQUEST['srch'])){
        extract($_REQUEST);
        $where = "WHERE `p_name` LIKE '%$srch%'";
    }

    $sql = "select * from `product` $where";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));
    $total = mysqli_num_rows($res);
 
    $start = 0;
    $limit = 3;
    $page = ceil($total/$limit);

    if(isset($_REQUEST['p'])){
        $start = ($_REQUEST['p']-1)* $limit;
    }

    print "<form action='1_product.php?title=product Page' method='post'>
            <input type='text' name='srch' placeholder='Search name'>
            <input type='submit' value='Search'>
            <a href='1_product.php?title=product Page'>show all</a>
            </form>";
    
    $sql = "SELECT * from `product` $where LIMIT $start,$limit";
    $res = mysqli_query($con, $sql);
    if(isset($_REQUEST['msg'])){
        print"<div style='color:#f00;'> $_REQUEST[msg]</div>";
    }

    print "<a href='2_add_product.php?title=Add product'>Add more product</a><br><br>";
    print "<table class='mx-auto shadow' border='1' align='center' style=' border: 1px solid black;border-collapse: collapse;'>
		<tr style=' border: 1px solid black;'>
			<th style=' border: 1px solid black;'>Product Id</th>
			<th style=' border: 1px solid black;'>Category Id</th>
			<th style=' border: 1px solid black;'>Category Name</th>
			<th style=' border: 1px solid black;'>Product Name</th>
			<th style=' border: 1px solid black;'>Price</th>
			<th style=' border: 1px solid black;'>Size</th>
			<th style=' border: 1px solid black;'>Color</th>
			<th style=' border: 1px solid black;'>Description</th>
			<th style=' border: 1px solid black;'>Image</th>
			<th style=' border: 1px solid black;'>Post Date</th>
			<th style=' border: 1px solid black;'>isActive</th>
			<th style=' border: 1px solid black;'>Option</th>
		</tr>";
        
    while($row= mysqli_fetch_assoc($res))
    {
        $path = "pro_images/".$row['image'];
        print "
            <tr style=' border: 1px solid black;'>
                <td style=' border: 1px solid black;'>$row[id]</td>
                <td style=' border: 1px solid black;'>$row[cat_id]</td>
                <td style=' border: 1px solid black;'>$row[cat_name]</td>
                <td style=' border: 1px solid black;'>$row[p_name]</td>
                <td style=' border: 1px solid black;'>$row[price]</td>
                <td style=' border: 1px solid black;'>$row[size]</td>
                <td style=' border: 1px solid black;'>$row[color]</td>
                <td style=' border: 1px solid black;'>$row[description]</td>
                <td style=' border: 1px solid black;'><img src='$path' height='200' width='400'></td>
                <td style=' border: 1px solid black;'>$row[post_date]</td>
                <td style=' border: 1px solid black;'>$row[is_active]</td>
                <td style=' border: 1px solid black;'>
                <a href='5_edit_pro.php?id=$row[id]&title=Edit product'>Edit</a>  ||
                <a href='#' onclick='confirmDel(\"4_del_pro.php?id=$row[id]\")'>Delete</a>
                </td>
            </tr>";
    }
    print "</table>";

    print "<div>";
    for($i=1;$i<=$page;$i++){
        echo "<a href='1_product.php?title=product Page&p=$i&srch=$srch'>$i</a> | ";
    }
    print "</div>";

?>

<script type="text/javascript">
function confirmDel(x){
	var r = confirm("Are you sure to delete?");
	if (r == true) {
		window.location = x;
	} 
	else {
		return false;
	}

}
</script>

<?php
    require("../include/footer.php");
?>