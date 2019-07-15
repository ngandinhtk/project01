<?php 

	$result = mysql_query("SELECT  * FROM product");
 ?>

<div class="features_items">
						<h2 class="title text-center"> All Cakes</h2>
						<div class="row">	
						<?php 
									while($row = mysql_fetch_array($result)) { ?>		 
							<div class="col-sm-4" >

								<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										
										<a href="product.php?view=productdetail&id=<?php echo $row['id'] ?>"><img src="images/cakes/<?php echo $row['image_link'] ?>" alt=""> </a>
										<h2><?php echo $row['price']?>$</h2>
										<p><?php echo $row['name'] ?></p>
										<a href="xuly/addsp.php?id=<?php echo $row['id'] ?> " class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									
									</div>
								 
								</div>
								 
							</div>	
							</div>
	<?php } ?>
								<!-- sssssss -->
						</div> <!-- ROW -->
</div>