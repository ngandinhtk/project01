<?php 


$con = mysqli_connect("localhost", "root", "", "bakeryshopdb");

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

header('Content-type:text/html;charset=UTF-8');
mysqli_set_charset($con,'utf8');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM product WHERE id= '$id' ";
	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_array($result)) {
		$id = $row['id'];
		$name = $row['name'];
		$price = $row['price']; 
		$img = $row['image_link'];
		$cate = $row['calalog_id'];
		$desc = $row['description'];

		?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Update Product</title>
			<link href="../../css/bootstrap.min.css" rel="stylesheet">
			<link href="../../css/admin-index.css" rel="stylesheet">
		</head>
		<body>
			<form action="updateprocess.php" method="post">

				<div class="row">
					<div class="">
						
						<div class="panel panel-primary" style="margin: 60px">
							<div class="panel-heading" style="margin-left: 15px; width: 980px">Update Product</div>
							<div class="panel-body">
								
								<div class="row" style="margin-bottom:40px">
									<div class="col-xs-8">
										
										<div class="form-group" >
											<label>ID</label>
											<input class="form-control" type="text" readonly name="id" value="<?php echo $id;?>">
											
										</div>

										
										<div class="form-group" >
											<label>Name</label>
											<input class="form-control" type="text" name="name" value="<?php echo $name;?>">
										</div>

										

										<div class="form-group" >
											<label>Price</label>
											<input class="form-control" type="text" name="price" value="<?php echo $price;?>">
										</div>
										<div class="form-group" >
											<label>Image</label>
											<input id="img" type="file" name="img" class="form-control " onchange="changeImg(this)" value="<?php echo $img ?>" >
											
										</div>
										
										<div class="form-group" >
											<label>Danh mục</label>
											<select required name="cate" class="form-control">
												<option value="1">Cake</option>
												<option value="2">Cupcake</option>
												<option value="3">Weddingcake</option>
												
											</select>

										</div>
										
										<div class="form-group" >
											<label>Description</label>
											<textarea class="form-control" name="descript"><?php echo $desc ?></textarea>
											
										</div>
										
										<input type="submit" name="submit" value="Update" class="btn btn-primary">
										<a href="product.php" class="btn btn-danger">Back</a>
									</div>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div><!--/.row-->

			</form>
		</body>
		</html>
		<?php

	}

}
$con->close();
?>