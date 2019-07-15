
<div class="col-sm-3">
	<div class="left-sidebar">
		<?php include("product/left/catalog.php") ?>	
	</div>
</div>

<div class="col-sm-9 padding-right">
	<!--features_items-->
	<?php 
		if (isset($_GET['view'])) {
			$tam = $_GET['view'];
		} else {
			$tam = "";
		}

		 if ($tam === 'productcatalog') {
		 	include('product/right/productcatalog.php');
		 }elseif ($tam === 'productdetail'){
		 	include('product/right/productdetail.php');
		 }elseif (isset($_POST['search'])){
		 	include('product/right/search.php');
		 }elseif ($tam === 'cart'){
		 	include('product/right/list_cart.php');
		 } else {
		 	include('product/right/allproduct.php');
		 }
	?>
	<!--features_items-->
</div>