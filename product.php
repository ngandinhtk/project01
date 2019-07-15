<?php include 'modules/config.php';
?>
<!DOCTYPE html>
<html>
<head>
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
<style >
	.features_items .single-products{
		margin: 0px; 
		float: left;
		}.padding-right .productinfo {
			height: 374px;
		}

		.padding-right .productinfo p{
			font-size: 14px;
			text-align: center;
			height: 50px;
		}
	</style>
	<body>

		<?php include 'modules/header.php'; ?>
		<div class="main-body">
			<div class="left-menu">

				<section>
					<div class="container">

						<br>
						<br>
						<div class="row">

							<?php 
							include("product/content.php") ?>
						</div>
					</div>
				</section>
			</div>
			<?php include 'modules/footer.html'; ?>
		</body>
		</html>