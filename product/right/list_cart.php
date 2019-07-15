<?php include 'modules/config.php';
// tham san pham 
if ( isset($_POST['add_to_cart']) )  {
	if (isset($_SESSION['shopping_cart'])) {
		$item_array_id = array_column($_SESSION['shopping_cart'], 'item_id');
		if (!in_array($_GET['id'], $item_array_id)) {
			$count = count($_SESSION['shopping_cart']);
			 $item_array = array(
			 	'item_id' => $_GET['id'],
			 	'item_name' => $_POST['hidden_name'],
			 	'item_price' => $_POST['hidden_price'],
			 	'item_quantity' => $_POST['quantity'],
			 );
			 $_SESSION['shopping_cart'][$count] = $item_array;
		} else {
			echo "<script>alert(Item already added!)</script>";
			
		}
	} else {
	 $item_array = array(
	 	'item_id' => $_GET['id'],
	 	'item_name' => $_POST['hidden_name'],
	 	'item_price' => $_POST['hidden_price'],
	 	'item_quantity' => $_POST['quantity'],
	 );
	 $_SESSION['shopping_cart'][0] = $item_array;
	}


} 

 $query = 'SELECT * FROM `product` WHERE `id` = "'.$id.'" ';
$result = mysql_query($query);

?>
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

<div class="main-cart">
	<h3 style="font-size: 35px;" class="title-w3ls text-center text-bl mb-5" > Shopping Cart
	</h3>

	<section id="cart_items">
		<div class="">
	<form action="product.php?view=add&id=<?php echo $row['id'] ?>" method="post"  >
			<div class="table cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>

					<tbody>
						<?php  
						
						if (mysql_num_rows($result)>0) {
							while ($row = mysql_fetch_array($result)) { ?>

					
							<tr>
								<td class="cart_product"  style="margin: 0 0 0 0; width:150px" >
									<img src="images/cakes/<?php echo $row['image_link']; ?>" alt=""> 
								</td>
								<td style="width: 300px" class="cart_description">
									<p><b><?php echo $row['name']; ?> </b></p>

								</td>
								<td class="cart_price" style="width: 20px;">
									<p>$<?php echo $row['price']; ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button"> 
										<input class="cart_quantity_input" type="text" name="quantity" style="width: 50px;" value="1" >

									</div>
								</td>
								<td class="cart_total" style="width: 60px;">
									<p class="cart_total_price"> </p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
								<input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?> " placeholder="">
								<input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?> " placeholder="">
							</tr>
						

						<?php 		
							}
						} 
						?>
					</tbody>

					
				</table>
			</div>
	<div  class="submit" style="float:right">
		<a  class="btn btn-default check_out" href="">Continue</a>
	</div>

	<div  class=" " style="float:right">
		<a  class="btn btn-default check_out" href="">Update</a>
	</div>
	</form>
	<div class="clear" style="clear: both;"></div>
	<br>
	<hr>
	</div>
	</section> <!--/#cart_items-->
	</div>

