<?php 
	header('Content-type:text/html;charset=UTF-8');
    $con = mysqli_connect("localhost", "root", "", "bakeryshopdb");
	mysqli_set_charset($con,'utf8');

$res = mysqli_query($con, "SELECT * from product");
$data = $res->fetch_all();

mysqli_free_result($res);
mysqli_close($con);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard | Bakery Product</title>
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/admin-index.css" rel="stylesheet"> 
</head>
<body>
	
		
	<div class=" main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"style="margin-left: 50px;">Shop's Cakes Manage</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" >
					<div class="panel-heading" style="width: 1500px; margin:auto;">Products list</div>
					<div class="panel-body"style="padding: 43px;">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="insertproduct.html" class="btn btn-primary">Insert Product</a>
								<a href="../index.html" class="btn btn-primary">Back to Dashboard</a>
								

			<table border="1" class="table table-bordered" style="margin-top:20px;">
				<thead> 
				<tr class="bg-primary">
					
					<td width="100px">Category ID</td>
					<td width="100px">Product ID</td>
					<td width="200px">Product Name</td>
					<td width="100px">Price</td>
					<td width="200px">Image</td>
					<td width="550px">Description</td>
					<td>Option</td>
				</tr>
				</thead>

				<tbody>
					<!-- 	chen code php vao --> 
					<?php 
						foreach ($data as $item) { ?>
						<tr>
							
							<td><?php echo $item[1]; ?></td>
							<td><?php echo $item[0]; ?></td>
							<td><?php echo $item[2]; ?></td>
							<td><?php echo $item[3]; ?></td>
							<td><?php echo $item[4]; ?></td>
							<td><?php echo $item[5]; ?></td>
							<td> <?php echo '<a class="btn btn-warning" href="update.php?id='.$item[0].'">Update</a>'  ?> <?php echo '<a class="btn btn-danger" href="delete.php?id='.$item[0].'">Delete</a>'  ?> </td>
						</tr>

					<?php } ?>	
					 
				</tbody>
			</table>


							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	 
</body>

</html>
