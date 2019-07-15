<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	
	<div class="header">
		<?php include"modules/header.php"; ?> </div>
		<div class="main-contact">


			<!-- contact -->
			<section class="contact py-5" id="contact">
				<div class="container">
					<h3 class="title-w3ls text-center text-bl mb-5">Contact Us</h3>
					<div class="row mx-sm-0 mx-2">
						<!-- map -->
						<div class="col-lg-6 map">
							<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
							allowfullscreen>

						</iframe>
					</div>
					<!-- //map -->
					<!-- contact form -->
					<div class="col-lg-6 main_grid_contact">
						<div class="form-w3ls p-md-5 p-4">
							<h4 class="mb-4 sec-title-w3 let-spa text-bl" style="text-align: center;">Send us a message</h4>
							<form action="#" method="post">
								<div class="row">
									<div class="col-sm-6 form-group pr-sm-1">
										<input class="form-control" type="text" name="Name" placeholder="Name" required="">
									</div>
									<div class="col-sm-6 form-group pl-sm-1">
										<input class="form-control" type="email" name="Email" placeholder="Email"
										required="">
									</div>
								</div>

								<div class="form-group">
									<input class="form-control" type="text" name="Phone Number" placeholder="Phone Number"
									required="">
								</div>
								<div class="form-group">
									<textarea name="message" placeholder="Message" required=""></textarea>
								</div>
								<div class="input-group1 text-right">
									<button class="btn" name="submit" type="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
					<!-- //contact form -->
				</div>
			</div>
		</section>
		<!-- //contact -->



		<!-- support -->
		<div class="support py-5" id="support">
			<div class="container py-xl-5 py-lg-3">
				<h3 class="title-w3ls text-center text-bl mb-5">Help & Support</h3>
				<div class="row support-bottom text-center mb-5">
					<div class="col-lg-4 support-grid">
						<span class="fa fa-headphones"></span>
						<h5 class="text-dark text-uppercase mt-4 mb-3">Online Support</h5>
						<p> We’re available by phone or chat weekdays from 8 am - 9 pm, Saturday 8 am - 12 pm </p>

					</div>
					<div class="col-lg-4 support-grid my-lg-0 my-5">
						<span class="fa fa-comments"></span>
						<h5 class="text-dark text-uppercase mt-4 mb-3">Shipping</h5>
						<p>Global 3-5 Days Delivery. We alse provided free shipping service for orders over 50$ </p>

					</div>
					<div class="col-lg-4 support-grid">
						<span class="fa fa-question"></span>
						<h5 class="text-dark text-uppercase mt-4 mb-3">Any Questions</h5>
						<p>Still need some help? Please fill out the form above to tell us about your opinions </p>

					</div>
				</div>
			</div>
		</div>
		<!-- support -->



	</div>
</div>
</section>



</div>

<div class="footer">
	<?php include"modules/footer.html"; ?> </div>
</body>
</html>