<?php include 'modules/config.php';
// tham san pham 
if ( isset($_GET['add']) && !empty($_GET['add']) )  {
	$id = $_GET['add'];
	@$_SESSION['cart_'.$id]+=1; // SESSION 
}

	// hien thi cac asn pham da them
// foreach ($_SESSION as $name => $value) { 
// 	if ($value>0) { // da them 1 san pham
// 		if (substr($name,0,5)==='cart_') { // lay 5 ky tu dau = 'cart_'
// 			$id=substr($name,5,strlen($name-5)); // strlen lay tong chieu dai cua $SESSION tru di cho 'cart_'
// 			$result = mysql_query("SELECT * FROM product WHERE id='".$id."'");
// 		}
// 	}
// }



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
				foreach ($_SESSION as $name => $value) { 
					if ($value>0) { // da them 1 san pham
						if (substr($name,0,5) ==='cart_') { // lay 5 ky tu dau = 'cart_'
						$id=substr($name,5,strlen($name-5)); // strlen lay tong chieu dai cua $SESSION tru di cho 'cart_'
						$query = 'SELECT * FROM `product` WHERE `id` = "'.$id.'" ';
						$result = mysql_query($query);
							if (!$result) { //  check.
							    die('Invalid query: ' . mysql_error());
							}
						while ($row=mysql_fetch_assoc($result)) { ?>
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
										<input class="cart_quantity_input" type="number" name="quantity" style="width: 50px;" value="<?php echo $value ?>" >
										<!-- <a class="cart_quantity_down" href="">-</a>  -->
									</div>
								</td>
								<td class="cart_total" style="width: 60px;">
									<p class="cart_total_price"><?php echo $tongtien=$row['price']*$value ?>$</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>

								
							</tr>
							
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="cart_total">
										<p class="cart_total_price"><?php echo $tongtien=$row['price']*$value ?></p> 
								</td>
								<td></td>
							</tr>
							<?php } ?>
					<?php } ?>		
				<?php } ?>	
			<?php } ?>

		</tbody>

	</table>


</div>
<div  class="submit" style="float:right">
	<a  class="btn btn-default check_out" href="">Continue</a>
</div>

<div  class="submit" style="float:right">
	<a  class="btn btn-default check_out" href="">Update</a>
</div>
<div class="clear" style="clear: both;"></div>
<br>
<hr>
</div>
</section> <!--/#cart_items-->
</div>

