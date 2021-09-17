<?php
session_start();
extract($_POST);
extract($_REQUEST);
print "<pre>"; 
// print_r($_SESSION);  
// print_r($_POST); 
// print_r($_REQUEST);

$op = $_REQUEST['op'];
// echo $op;
// die;  

if(isset($_SESSION['cart'][$pid])){
	
	if ( $op == 'add') {
		$_SESSION['cart'][$pid] +=1;	
		header("location:10_cart.php?title=Cart Page");
		exit;
	}
	if ($op == 'del') {
		if ($_SESSION['cart'][$pid]== 1) {
			unset($_SESSION['cart'][$pid]);
			header("location:10_cart.php?title=Cart Page");
			exit;
		}
		$_SESSION['cart'][$pid] -=1;
		header("location:10_cart.php?title=Cart Page");
		exit;
	}

	if ($op == 'rem') {
		unset($_SESSION['cart'][$pid]);
		header("location:10_cart.php?title=Cart Page");
		exit;
	}
		
	$_SESSION['cart'][$pid] +=1;

	header("location:7_product-detail.php?title=Products&id=$pid&msg=item added to your cart");
}
else{
	$_SESSION['cart'][$pid] = 1;

	header("location:7_product-detail.php?title=Products&id=$pid&msg=item added to your cart");
}
// add quantity of product in cart 

// del quantity of product in cart 

// remove quantity of product in cart 

?>