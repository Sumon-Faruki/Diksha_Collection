<?php
session_start();
require("../../sites/1_log/4_db.php");  
?>
<!DOCTYPE HTML>
<html>
	<head>
        <?php
			if(isset($_REQUEST['title'])){
				print "<title>$_REQUEST[title]</title>";
			}
		?> 
		<link href="../../css/style2.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Diksha Collection, latest stylish store" /> 
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () { 
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header" style="background-image:url(../../images/bg.jpg)"> 
        <div class="logo ">
				<a href="../../sites/webs/1_home.php?title=Home Page"><img src="../../images/diksha_logo.png" title="logo" style="width: 420px; height: 70px;"/></a>
		</div> 
			<div class="search-bar">
			<form method="post" action="product.php">
					<input type="text" name="srch"> 
					<input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
                <?php if(!isset($_SESSION['user_id'])){
					echo'<li><a href="../../sites/1_log/1_log.php">Register</a></li>
					<li><a href="../../sites/1_log/1_log.php">Login</a></li>';
					}
					else{
						echo "<li>Welcome $_SESSION[user_name],</li>";
						$ppp=$_SESSION['profile_pic'];  
					echo"<li><a href=\"../../sites/webs/2_myaccount.php?title=Profile Page\"><img src='pro_images/$ppp' height='70px' width='100px'>&emsp;My account</a></li>";
					echo"<li><a href=\"../../sites/1_log/5_logout.php?msg=Log out succesfull!\">Logout</a></li>";
					}
					?>
					
					<!-- <li><a href="#"><span>shopping cart&nbsp;&nbsp;: </span></a><label> &nbsp;noitems</label></li> -->
                    <li>
						<label>
						<img src="../../images/cart.png" height="30" width="30"> 
					<?php
					if(isset($_SESSION['cart']))
					{
						echo "<a href='10_cart.php?title=Cart Page'>".count($_SESSION['cart'])." item(s)</a>";
					}	
					else{
					echo "noitems";
					}
					
					?>
				</label></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header"  style="background-image: url(../../images/darkblue.jpg);">
			<div class="wrap">
		<!----start-logo---->
			<!-- <div class="logo">
				<a href="index.html"><img src="../../images/diksha_logo.png" title="logo" style="width: 420px; height: 100px;"/></a>
			</div> -->
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="../../sites/webs/1_home.php?title=Home Page">:: Home ::</a></li>
				<li><a href="../../sites/webs/4_about.php?title=About Page">:: About ::</a></li>
				<li><a href="../../sites/webs/5_product.php?title=Product Page">:: products ::</a></li>
				<li><a href="../../sites/webs/8_proof.php?title=Product Page">:: Proof ::</a></li>
				<li><a href="../../sites/webs/6_contact.php?title=Contact Page">:: Contact ::</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->

        <!-- upper side is all about require("../../includes/head.php"); -->



		<!-- <div class="clear"> </div> -->
	<!--start-image-slider---->
					<div class="wrap">
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/wewe.jpg" alt="" style="height: 400px; width: 1530px;"></li>
					      <li><img src="images/wewewe.jpg" alt="" style="height: 400px; width: 1530px;"></li>
					      <li><img src="images/we.jpg" alt="" style="height: 400px; width: 1530px;"></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					</div>



		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="top-3-grids">
		    		<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <a href="#"><img src="images/qw.jpg"  style="height: 400px;"></a>
					  <h3>Audi car</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 second">
					   <a href="#"><img src="images/qwqw.jpg"  style="height: 400px;"></a>
					  <h3>Batman car</h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 theree">
					   <a href="#"><img src="images/qwqwqw.jpg"  style="height: 400px;"></a>
					  <h3>Joy Pad</h3>
				</div>
			</div>
		    	</div>
		    	


		  <div class="content-grids">
		    	<h4>Latest Mobile Phones</h4>
		    <div class="section group">

	<?php 
		    		$sql = "SELECT * FROM `product` ORDER BY `id` desc LIMIT 0, 8";
		    		$res = mysqli_query($con, $sql);
		    		$i = 1;
		while($row=mysqli_fetch_assoc($res)){	

			$im = "";
			if($row['image'])
			{
				$im = $row['image'];
			}
				print "<div class='grid_1_of_4 images_1_of_4 products-info'>
				<a href='7_product-detail.php?title=Products&id=$row[id]'>
					 <img src='../../../admin/3_product/pro_images/$im' height='200'>
					 $row[p_name]
					 <h3>&#x20b9; $row[price]</h3>
				</a>
				</div>";

				if($i == 4){
					print"</div><div class='section group'>";
				}
				$i++;
				
			} 
	?>
			</div>
		    
		 </div>
		    	<?php require("../../includes/category.php");
		    	?>
		    </div>
		    <div class="clear"> </div>
		    </div>

			<?php
				require("../../includes/footer.php");
			?>		