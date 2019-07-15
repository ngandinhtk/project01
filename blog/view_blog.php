<?php
		// $con = mysqli_connect("localhost", "root", "", "bakeryshopdb") or die("Can connect to data base!!!");

$result = mysql_query("SELECT * FROM blog WHERE blogid='$_GET[id]' ");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="../css/bootstrap.css">
 	<!-- Bootstrap-CSS -->

	<link href="css/main.css" rel="stylesheet">
 	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
 	<!-- Style-CSS -->
 	<link href="css/font-awesome.min.css" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
</head>

<style>

	.container .blog-artical h5 {
		font-size: 25px;
		text-transform: uppercase;
		letter-spacing: 2px;
		margin: 10px;
		font-weight: 600;
		font-family: 'Muli', sans-serif;
	}

	.container .blog-artical  h5 a {
		text-decoration: none;
		color: #585858;
	}
	hr {
		width: 1200px;
	}

	.blog-artical ul li {
		text-indent: 50px;
		list-style-type: none;
		padding: 0 20px 0 20px;
	}

	.img-ar {
		text-align: center;
	}
	.text-ar  {
		margin: 50px;
		padding: 20px;
		
	}

	.text-ar p {
		color: #393939;
		text-indent: 50px;
		font-size: 17px;
	}

	.category-tab  ul li a {
		font-size: 15px;
		padding: 10px;
	}
	.tab-content p {
		padding-left:30px; 
		color: black;
	}
	.fade {
		transition: none;
	}
</style>
<body>
	 
	<div class="main-viewblog">
		<br>
		
							
			<div class="container">
				<div class="row">
					<?php 
			while($row = mysql_fetch_array($result)) { ?>
					<div class="blog-artical">
						<div class="img-ar"><p style="text-align: right; font-size: 10px;"><span > <?php echo $row['date'] ?></span></p>
							<h5 style="font-size: 30px;"><a href=""><?php echo $row['title'] ?></a></h5>
							<hr>
							<br>
							<img width="70%" style="text-align: center;" src="blog/img/<?php echo $row['image_link'] ?>" alt="">
						</div>

						<div class="text-ar">
							<p><?php echo $row['content'] ?></p>
						</div>
					</div> <!--blog artical-->
			<?php } ?>
						<div class="category-tab shop-details-tab" style="width: 1300px" ><!--category-tab--> 
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Comment</a></li>
								
							</ul>
						</div>	

						
							<div class="tab-pane active in" id="reviews" >
								<div class="col-sm-12">
									<form action="xuly/insertcmt.php" method="post" accept-charset="utf-8" >
										<span style="width: 1000px">
											<input type="text" name="name" placeholder="Your Name"/> </span>
											&nbsp;
										<span style="width: 1000px">	<input type="email" name="email" placeholder="Email Address"/>
										</span>
										<textarea name="cmt" placeholder="Your comment here.."></textarea>
										
										<button type="submit" name="submit" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
						 
				</div><!--/category-tab-->

				
				</div>
			</div>
		
	</div>
 
</body>
</html>