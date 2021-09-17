<?php
$css = '<link rel="stylesheet" href="../../css/flexslider.css" type="text/css" media="screen" />';

$js = '<script src="../../js/jquery.min.js"></script>
		<script src="../../js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
		
		<script src="../../js/imagezoom.js"></script>
		<!-- FlexSlider -->
		<script defer src="../../js/jquery.flexslider.js"></script>';

require("../../includes/head.php");

$id = $_REQUEST['id'];
$sql = "select *,p.id pid,c.id catid, c.name cname,p.p_name pname from product p,category c where c.id=p.cat_id and p.id='$id'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);
// print_r($row);
// die();
$im = "m1.jpg";
if($row['image'])
{
	$im = $row['image'];
    // echo $im;
    // die();
}
?>


<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
		<!--------------------------------------------------------------------->
		<script>
$(document).ready(function(){
$(".menu_body").hide();
//toggle the componenet with class menu_body
$(".menu_head").click(function(){
	$(this).next(".menu_body").slideToggle(600); 
	var plusmin;
	plusmin = $(this).children(".plusminus").text();
	
	if( plusmin == '+')
	$(this).children(".plusminus").text('-');
	else
	$(this).children(".plusminus").text('+');
});
});
</script>


		    <div class="content-grids">
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="1_home.php?title=Home page">Home</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="5_product.php?title=Products">Product</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Product-Details</a><img src="images/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>


		    	<div class="detalis-image">
		    		<div class="flexslider">
						<ul class="slides">
							<li data-thumb="../../../admin/3_product/pro_images/<?php echo $im ?>">
								<div class="thumb-image"> <img src="../../../admin/3_product/pro_images/<?php echo $im ?>" data-imagezoom="true" class="img-responsive" alt="" style="height:500px; width:100%"/> </div>
							</li>
							<!-- <li data-thumb="images/m11.jpg">
								<div class="thumb-image"> <img src="images/m11.jpg" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
							<li data-thumb="images/m11.jpg">
								<div class="thumb-image"> <img src="images/m11.jpg" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li> -->
						</ul>
					</div>
		    	</div>
		    	<div class="detalis-image-details">
		    		<div class="details-categories">
		    			<ul>
		    				<li><h3>Category:</h3></li>
		    				<li class="active1"><a href="5_product.php?cid=<?php echo $row['cat_id'] ?>"><span><?php echo $row['cname'] ?></span></a></li>
		    				
		    			</ul>
		    		</div><br />
		    		<div class="clear"> </div>
		    		<div class="brand-value" style="float:left;">
		    			<h3><?php echo $row['pname'] ?></h3>
		    			<div class="clear"> </div>

		    			<div class="left-value-details">
			    			<ul>
			    				<li>Price:</li>
			    				<li><span><?php echo $row['price']+200 ?></span></li>
			    				<li><h5><?php echo $row['price'] ?></h5></li>
			    				<br />
			    				<!-- <li><p>Not rated</p></li> -->
			    			</ul>
		    			</div>
		    			<div class="clear"> </div>

		    			<div class="right-value-details">
			    			<a href="#">Instock</a>
			    			<p>No reviews</p>
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="clear"> </div>
		    		<div class="brand-history" style="float:left;">
		    			<h3>Description :</h3>
		    			<p><?php echo $row['description'] ?></p>
		<form action="9_addToCart.php" method="post">
			<input type="hidden" name="pid" value="<?php echo $row['pid'] ?>">
		  <input type="submit" id="btn" value="Add Cart">
		  </form>
		    			<!-- <a href="#" >Addcart</a> -->
		    		</div>
		    		<div class="clear"> </div>

		    		<div class="share">
		    			<ul>
		    				<li> <a href="#"><img src="images/facebook.png" title="facebook" /> Facebook</a></li>
		    				<li> <a href="#"><img src="images/twitter.png" title="Twiiter" />Twiiter</a></li>
		    				<li> <a href="#"><img src="images/rss.png" title="Rss" />Rss</a></li>
		    			</ul>
		    		</div>
		    		<div class="clear"> </div>
		    		
		    		</div>
		    		<div class="clear"> </div>
		    	<div class="menu_container">
						<p class="menu_head">Lorem Ipsum<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						<p class="menu_head">About Product<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>theonlytutorials.com is providing a great varitey of tutorials and scripts to use it immediate on any project!</p>
							</div>
				</div>
			</div>
			
		    	</div>
                <?php require("../../includes/category.php");  ?>
		    </div>
		    

            <?php
				require("../../includes/footer.php");
			?>		