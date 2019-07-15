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
		<?php require_once"modules/header.php"; ?> </div>

		<div class="main-signup">
			<section class="contact py-5" id="contact">
				<div class="container">
					<h3 class="title-w3ls text-center text-bl mb-5">Sign Up</h3>
					<div class="row mx-sm-0 mx-2">
						
						<!-- contact form -->
						<div class="col-lg-6 main_grid_contact" style="width: 200px; margin: auto;">
							<div class="form-w3ls p-md-5 p-4">
								<h4 class="mb-4 sec-title-w3 let-spa text-bl"> </h4>
								<form action="xuly/dosignup.php" method="post">
									<div class="row">
										
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="uname" placeholder="Username"
										required="">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="pass" placeholder="Password"
										required="">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="email" placeholder="Your Email"
										required="">
									</div>
									<div class="form-group">
										
										<input type="text" name="phone" class="form-control"  pattern="\d{1,10}"  
										maxlength="10" placeholder="Phone" required />
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="address" placeholder="Address.."
										required="">
	
									<div class="input-group1 text-right">
										<button class="btn" type="submit" name="submit">Sign Up</button> <br><a style="color: #444444; font-size: 15px; margin: 15px;" href="signup.php">Already a member</a>
										<br>
										
									</div>
								</form>
							</div>
						</div>
						<!-- //contact form -->
					</div>
				</div>
			</section>


			
		</div>

		
		<div class="footer">
			<?php require_once"modules/footer.html"; ?> </div>
		</body>
		</html>