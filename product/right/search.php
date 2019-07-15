<?php 
 if (isset($_POST['search'])) {
 	$search = $_POST['searchtext'];
 	$result = mysql_query("SELECT * FROM `product` WHERE `name` LIKE '%$search%' OR `price` LIKE '$search'"); 

	 
 }
?>

<div class="features_items">
	<h2 class="title text-center"> Features Cake</h2>

	<div class="row">	
		
	<?php if ($count = mysql_num_rows($result) == 0) { ?>
		<p style="text-indent: 30px;">   No result!</p>
	<?php 
	} else {  

		while($row = mysql_fetch_array($result)) { ?>
		<div class="col-sm-4">
					
			<div class="product-image-wrapper">

				<div class="single-products">
					<div class="productinfo text-center">
							<a href="product.php?view=productdetail&id=<?php echo $row['id']; ?>"><img src="images/cakes/<?php echo $row['image_link']; ?>" alt=""> </a>
							<h2><?php echo $row['price']; ?>$</h2>
							<p><?php echo $row['name']; ?></p>
							<a href="xuly/addsp.php?id=<?php echo $row['id'] ?> " class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						
					</div>
				</div>
			</div>	
		
		<div class="clearboth" style="clear: both;"></div>	
		</div>

<?php } 
}
?>
	</div> <!-- ROW -->
	<div  class="backbtn"><a  href="javascript:history.go(-1)"><button style="font-size: 13px; " class="btn btn-default">Back</button></a> </div>
	<br><br>

</div>