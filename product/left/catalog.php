<?php
		// $con = mysqli_connect("localhost", "root", "", "bakeryshopdb") or die("Can connect to data base!!!");

$result = mysql_query("SELECT * FROM catalog");

?> 
<h2>Category</h2>
<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	
	<br>
	<div class="panel panel-default">
		<form action="product.php" method="post" accept-charset="utf-8">
		<div class="formsearch" style="margin-left: 20px;display: inline-block;">
			<input  type="text" class="" name="searchtext" style="width:150px;" id="search" value="" placeholder=" input keyword.."> 
 		 <input class="btn btn-default" name="search" type="submit" value="Search" style="padding: 5px;font-size: 13px;">
		</form>
		</div>
		<?php 
		while($row = mysql_fetch_array($result)) { ?>

			<div class="panel-heading">
				<h4 class="panel-title"><a href="product.php?view=productcatalog&id=<?php echo $row['id'] ?> "> <?php echo $row['products_log']; ?> </a></h4>
			</div>
		<?php } ?>
	</div>
	
<!-- 							
</div> -->
</div><!--/category-productsr-->



