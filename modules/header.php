<?php 
include 'modules/config.php';

$result = mysql_query("SELECT * FROM catalog ");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css"  />
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 bg-li">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-5 top-social-w3pvt-am mt-lg-1 mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-4 col-6 header-top_w3layouts border-right">
								<p class="text-bl">
									<span class="fa fa-map-marker mr-2"></span>HCM City, Vietnam
								</p>
							</div>
							<div class="col-xl-4 col-6 header-top_w3layouts text-md-right">
								<p class="text-bl">
									<span class="fa fa-phone mr-2"></span>+1 028665981
								</p>
							</div>
							<div class="col-xl-4"></div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-7 top-social-w3pvt-am mt-lg-0 mt-2">
						<div class="row">
							<div class="col-6 top-w3layouts">
								<p>Welcome<?php session_start();
								echo (!empty($_SESSION ['username']) ) ? '! ' .$_SESSION ['username'] : ' to Beverly’s'; ?></p>
								<a href="xuly/dologout.php"><p style="font-size: 9px;text-align: right;"> LOG OUT</p></a>
							</div>
							<div class="col-6 border-left mt-lg-1 socila-brek text-md-right text-center">
								<!-- social icons -->
								<ul class="top-right-info">
									<li>
										<p class="par-so mr-3">Follow Us:</p>
									</li>
									<li class="mr-1 soci-effe facebook">
										<a href="http://facebook.com">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="mr-1 soci-effe twitter">
										<a href="http://twitter.com">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li class="mr-1 soci-effe google-plus">
										<a href="http://google.com">
											<span class="fa fa-google-plus"></span>
										</a>
									</li> 
								</ul>
								<!-- //social icons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top">
		<div class="container d-lg-flex justify-content-between align-items-center">
			<!-- logo -->
			<h1 class="logo-style-res float-left">
				<a class="navbar-brand" href="index.php">
					<img src="#" alt="" class="img-fluid logo-img mt-1">Beverly’s 
				</a>
			</h1>
			<!-- //logo -->
			<!-- nav -->
			<div class="  mx-lg-auto">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mx-lg-auto">
						<li><a href="index.php" class="active">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li>
							<!-- First Tier Drop Down -->
							
							<label for="drop-2" class="toggle toogle-2"> <span class="fa fa-angle-down"
								aria-hidden="true"></span>
							</label>
							<a href="product.php">Cakes <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul><?php

							while($row = mysql_fetch_array($result)) { ?>
								<li><a href="product.php?view=productcatalog&id=<?php echo $row['id'] ?>" class="drop-text"><?php echo $row['products_log'] ?></a>
								</li>
							<?php } ?>
						</ul> 
					</li>

					<li><a href="contact.php">Corperate</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="login.php">Log in</a></li>
				</ul>
			</nav>
		</div>
		<!-- //nav -->
		<!-- dwn -->
		<div class="text-center">
			<a href="listcart.php" class="login-button-2 text-uppercase text-wh mt-lg-0 mt-2">Cart </a>
		</div>
		<!-- //dwn -->
	</div>
</div>


<!-- banner slider -->
<div id="homepage-slider" class="st-slider">
	<input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
	<input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
	<input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
	<input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
	<div class="images">
		<div class="images-inner">
			<div class="image-slide">
				<div class="banner-w3ls-1">

				</div>
			</div>
			<div class="image-slide">
				<div class="banner-w3ls-2">

				</div>
			</div>
			<div class="image-slide">
				<div class="banner-w3ls-3">

				</div>
			</div>
		</div>
	</div>
	<div class="labels">
		<div class="fake-radio">
			<label for="slide1" class="radio-btn"></label>
			<label for="slide2" class="radio-btn"></label>
			<label for="slide3" class="radio-btn"></label>
		</div>
	</div>
</div>
</body>
</html>