<?php
session_start(); 
require("../../sites/1_log/4_db.php"); 
// print_r($_SERVER);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?php
			if(isset($_REQUEST['title'])){
				print "<title>$_REQUEST[title]</title>";
			}
		?> 
		<link href="../..//css/style2.css" rel="stylesheet" type="text/css"  media="all" />
		<script src="https://kit.fontawesome.com/f516eb2fbf.js" crossorigin="anonymous"></script>
		<?php
		if(isset($css))
		echo $css;

		if(isset($js))
		echo $js
		?>
		<meta name="keywords" content="Diksha Collection, latest stylish store" />
		
	</head>
	  <!-- style="background-image: url(../../images/39632.jpg);" -->
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header"  style="background-image:url(../../images/bg.jpg)">
		<div class="logo ">
				<a href="../../sites/webs/1_home.php?title=Home Page"><img src="../../images/diksha_logo.png" title="logo" style="width: 420px; height: 70px;"/></a>
		</div>
			<div class="search-bar">
				<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
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
				<li><a href="../../sites/webs/5_product.php?title=Product Page">:: Products ::</a></li>
				<li><a href="../../sites/webs/8_proof.php?title=Proof Page">:: Proof ::</a></li>
				<li><a href="../../sites/webs/6_contact.php?title=Contact Page">:: Contact ::</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">