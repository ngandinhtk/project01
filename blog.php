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
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	
</head>
<style>
	.container .image-blog img {
		width:100%;
	}
	.container .blog-artical  h5 {
		font-size: 20px;
		text-transform: uppercase;
		letter-spacing: 2px;
		margin: 10px;
		font-weight: 600;
		font-family: 'Montserrat', sans-serif;
	}
	.container .blog-artical  h5 a {
		text-decoration: none;
		color: #585858;

	}
</style>
<body>
	
	<div class="header">
	<?php include"modules/header.php"; ?> </div>
	<br>
		<div class="main-blog">
			<?php 
			if (isset($_GET['view'])) {
				$tam = $_GET['view'];
			} else {
				$tam = "";
			}
			if ($tam === 'view_blog') {
				include('blog/view_blog.php');
			} else {
				include('blog/list_blog.php');
			}
			 ?>
		</div>
	
	<div class="footer">
	<?php include"modules/footer.html"; ?> </div>
</body>
</html>