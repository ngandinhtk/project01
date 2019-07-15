<?php
		// $con = mysqli_connect("localhost", "root", "", "bakeryshopdb") or die("Can connect to data base!!!");

$result = mysql_query("SELECT * FROM product WHERE id='$_GET[id]'");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<style >
	
	/*.padding-right .view-product  img {
		width: 560px;
		height: 600px;
		}*/
		.carousel-inner img {
			width: 40%;
		}

		.category-tab  ul li a {
			font-size: 15px;
			padding: 10px;
		}
		.tab-content p {
			padding-left:30px; 
			color: black;
		}
	</style>
	<body>
		<div class="product-details"><!--product-details-->
			<?php 
			while($row = mysql_fetch_array($result)) { ?>
				<div class="row">

					<div class="col-sm-7"  >
						<div class="view-product">
							<img    src="images/cakes/<?php echo $row['image_link'] ?>" alt="" />

						</div><!--  -->
					</div>

					<div class="col-sm-5">

						<div class="product-information"><!--/product-information-->

							<img src="images/product-details/new.jpg" class="newarrival" alt="" />
							<h2 style="font-size: 25px; "><?php echo $row['name']; ?></h2>

							<span>
								<p><span style="font-size: 20px;">
									<b>Price: </b><?php echo $row['price'] ?>$</span></p>
									<p><b>Cake Size:</b>  6"</p>
									<label>Quantity:</label>
									<input type="text" name="quant" value="1" />
									
								</span>
								<textarea name="" class="form-control" style="width: 250px;" placeholder="Extra Notes / Message On Cake" ></textarea>
								<br>
							 	<a href="xuly/addsp.php?id=<?php echo $row['id'] ?> ">	<button type="button" class="btn btn-fefault cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button></a>
								
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
							
						</div>

						<div class="category-tab shop-details-tab"><!--category-tab--> 
							<div class="col-sm-12">
								<ul class="nav nav-tabs">
									<li><a href="#" data-toggle="tab">General Info</a></li>
								</ul>
							</div>	

							<div class="tab-pane"  >
								<p style="text-indent: 40px; padding: 20px;"> <?php echo $row['description'] ?>
							</p>
						</div>
					</div>
					
				</div> <!-- row -->
			<?php } ?>
		</div> <!-- product detail -->



	</body>
	</html>