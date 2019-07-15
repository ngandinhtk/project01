<?php
session_start ();
require '../modules/config.php'; 

// Save new order
mysqli_query($con, 'INSESRT into orders( user_name, user)
values("New Order", "'.date('Y-m-d').'", 0, "acc2")');
$ordersid = mysqli_insert_id($con);

// Save order details for new order
$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
for($i=0; $i<count($cart); $i++) {
	mysqli_query($con, 'insert into orderdetail(product_id, bill_id, quantity)
values('.$cart[$i]->id.', '.$ordersid.',  '.$cart[$i]->quantity.')');
}

// Clear all products in cart
unset($_SESSION['cart']);

?>
Thanks for buying products. Click <a href="index.php">here</a> to continue buy product.