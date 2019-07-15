 
<script>
	
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">

</head>

<style>
	#cart_items .cart_info {
		margin-bottom: 0px;
	}
	.submit a:hover{
		color: #494949;
	}
	.check_out {
		margin-bottom: 20px;
	}
	.cart_product {
		margin: 0px;

		width: 160px;
	}
	.cart_product img {
		width: 100%;
		
	}
	.cart_info table tr td{
		margin: 0; 
	}
</style> 
<body>
	<div class="header">
		<?php include("modules/header.php"); ?> </div>
		<!-- //main content -->
		<br>
		<div class="main-cart container">
			<h3 style="font-size: 35px;" class="title-w3ls text-center text-bl mb-5" > Order review
			</h3>
			<p align="right" style="color:#063;font-size:18px;text-decoration:underline;" >Hello <?php

			if(isset($_SESSION['dangnhap'])){
				echo $_SESSION['dangnhap'];
			}

			?></p>
			<?php
			if(isset($_SESSION['dangnhap'])){
				echo '<form action="logout.php" method="post">';
				echo '<p style="float:right;"><input type="submit" name="logout" value="Đăng xuất" /></p>';
				echo '</form>';

			}
			?>
			<section id="cart_items">

				<div class="table cart_info" >
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image" width="35%">Cakes</td>
								<td class="description" width="30%">Name</td>
								<td class="price" width="10%">Price</td>
								<td style="text-align: center;" class="quantity" width="10%" >Quantity</td>
								<td class="total"  width="5%">Total</td>
								<td  width="10%"> </td>
							</tr>
						</thead>
						<tbody>
							<?php 
							if (isset($_SESSION['cart'])) {
								$total = 0;
								foreach ($_SESSION['cart'] as $key){
									?>
									<tr>
										<td class="cart_product"  style="margin: 0 0 0 0; width:250px;" >
											<img src="images/cakes/<?php echo $key["img"]; ?>" alt=""> 
										</td>
										<td style="width: 300px" class="cart_description">
											<p><b><?php echo $key["name"] ?> </b></p>

										</td>
										<td class="cart_price" style="width: 20px;">
											<p><?php echo $key["price"] ?>$</p>
										</td>
										<td style="text-align: center;" class="cart_quantity">
											<div  class="cart_quantity_button">
												<form method='post' action=''>
													<input type='hidden' name='code' value="<?php echo $key["id"]; ?>" />
													<input type='hidden' name='action' value="change" />
													<select name='quantity' class='quantity' onChange="this.form.submit()">
														<option <?php if($key["qty"]==1) echo "selected";?>
														value="1">1</option>
														<option <?php if($key["qty"]==2) echo "selected";?>
														value="2">2</option>
														<option <?php if($key["qty"]==3) echo "selected";?>
														value="3">3</option>
														<option <?php if($key["qty"]==4) echo "selected";?>
														value="4">4</option>
														<option <?php if($key["qty"]==5) echo "selected";?>
														value="5">5</option>
													</select>
												</form>

											</div>

										</td>
										<td class="cart_total" style="width: 50px;">
											<p class="cart_total_price" style="font-size: 20px;">
												<?php 
												echo number_format($key["qty"] * $key["price"]); ?>$</p>
											</td>
											<td class="cart_delete">
												<a class="cart_quantity_delete" onclick="return confirm('Are you sure?')" href="listcart.php?action=remove&code=<?php echo $key["id"]; ?> " ><i class="fa fa-times"></i></a>

											</td>			
										</tr> 	
										<?php 

										$total = $total + ($key["qty"] * $key["price"]);	
									} 

									?> 
										
									<tr>

										<td colspan="2"></td>
										<td colspan="2">
											<p style="font-size: 23px; font-weight: 700 ">Total Price:</p></td>
											<td class="cart_total">
												<p class="cart_total_price"> <?php echo number_format($total,1); ?>$ </p> 
											</td>
											<td></td>
										</tr>

										<?php 
									} else {
										echo '<p style="text-align: center">Your cart is empty</p>
										<br>';

									}	?>		

								</tbody>

							</table>
						</div>
						<?php 
							if(!isset($_SESSION['dangnhap'])){
								echo '	<div  class="submit" style="float:right">';
								echo '<a href="login.php"><input type="submit" class="btn btn-default check_out" name="submit" value="Place Order"></a>	';
								echo '</div>';		
						} else{
							echo '<form action="xyly/checkout.php" method="post">';
							echo '<input type="submit" name="muahang" value="Mua Hàng"/>';
							echo '</form>';
						}
						?>
						<a  class="btn btn-default check_out" href="javascript:history.go(-1)">Continue Shopping</a>


						<div class="clear" style="clear: both;"></div>
						<br>
						<hr>



					</section> <!--/#cart_items-->
				</div>


				<?php 
			// xoa sam pham trng gio hang
				if (isset($_GET['action'])) {
					if ($_GET['action'] == 'remove') {
						foreach ($_SESSION['cart'] as $key => $value) {
							if ($_SESSION['cart'][$key]["id"] == $_GET['code']) {
								unset($_SESSION['cart'][$key]);
								echo "<script>window.location='listcart.php'</script>>";
							}
						}
					}
				}



			//update quantity

				if (isset($_POST['action']) && $_POST['action']=="change"){
					foreach($_SESSION["cart"] as &$value){
						if($value['id'] === $_POST["code"]){
							$value['qty'] = $_POST["quantity"];
			        break; // Stop the loop after we've found the product
			    }
			}

		}


		?> 
		<!-- footer <-->
		<div class="footer">
			<?php include("modules/footer.html"); ?> </div>
		</body>

		</html>
