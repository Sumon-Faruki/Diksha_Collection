<?php
extract($_REQUEST);
$css = "<link href='../../css/style1.css' rel='stylesheet' type='text/css'  media='all' />";
require("../../includes/head.php");
?>

		    <div class="content-grids">
		    	
<div align="left" style="min-height:800px;">
	
	<div id="cart_wrapper" align="center">
	
		<form action="#" id="cart_form" name="cart_form">
		
			<div class="cart-info"> </div>
			
			<div class="cart-total">
			
				<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>0</span>
				
				<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
			</div>
			
			<button type="submit" id="Submit">CheckOut</button>
		
		</form>
	</div>
	
	<div id="wrap" align="center">
		
	<!-- 	<a id="show_cart" href="javascript:void(0)">View My Cart</a> -->
	<ul>
		<?php
		$srchWhere = "";
		$catWhere="";
		if(isset($_POST['srch'])){
			 extract($_POST);
			 if(isset($cid)){
				$srchWhere = " and `p_name` like '%$srch%'  and cat_id='$cid'";

			 }
			 else{
				$srchWhere = " and `p_name` like '%$srch%'";

			 }
		}
		elseif(isset($cid) and !isset($srch))
		{
			$catWhere = " and cat_id='$cid'";
		}
		// get the total record
		$sql = "SELECT * FROM `product` where 1 $srchWhere $catWhere";
		// print $sql;

		$res = mysqli_query($con, $sql) or die(mysqli_error($con));
		$total = mysqli_num_rows($res);
		$start = 0;
		$limit = 8;
		$page = ceil($total / $limit);

		if(isset($_REQUEST['p'])){
			$start = ($_REQUEST['p']-1) * $limit;
		}

		$sql = "SELECT * FROM `product` WHERE 1 $srchWhere $catWhere LIMIT $start,$limit";
		
		
		// print $sql;
		$res = mysqli_query($con, $sql) or die("error");
		$i =1;
        
        print "<div class='content-grids'> <h4>Latest Things</h4> <div class='section group'>";

		while($row = mysqli_fetch_assoc($res)){
			$im = "";
			if($row['image'])
			{
				$im = $row['image'];
			}
            // print_r($row);
            // die();
			print"<div class='grid_1_of_4 images_1_of_4 products-info ' >
			<a href='7_product-detail.php?title=Products&id=$row[id]'>
				<img src='../../../admin/3_product/pro_images/$im' class='items' alt='' style='height: 300px;  '/>
				<br clear='all' />
				<div>$row[p_name]</div>
			</a>
			</div>";
            if($i == 4){
                print"</div><div class='section group'  >";
            }
			$i++;
		}
		?></div>
		    
        </div>
		<!-- while($row = mysqli_fetch_assoc($res)){
			$im = "";
			if($row['image'])
			{
				$im = $row['image'];
			}
            // print_r($row);
            // die();
			print"<li id='$i'>
			<a href='product-detail.php?title=Products&id=$row[id]'>
				<img src='../../../admin/3_product/pro_images/$im' class='items' alt='' />
				<br clear='all' />
				<div>$row[p_name]</div>
			</a>
			</li>";
            if($i == 3){
                print"</div><div class='section group'>";
            }
			$i++;
		}
		?> -->
		</ul>
		<div class="clear"></div>
<?php
print "<div style='font-size:30px'>";
for($i=1;$i<=$page;$i++){
	echo "<a href='5_product.php?title=Products&p=$i'>$i</a> | ";
}
print "</div>";
?>
		<br clear="all" />
	</div>

		
</div>

		    </div>
		    </div>
                <?php require("../../includes/category.php");
		    	?>
		    </div>
		<?php require("../../includes/footer.php");
		    	?>    