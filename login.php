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

	<div class="main-login">
			<section class="contact py-5" id="contact">
 		<div class="container">
 			<h3 class="title-w3ls text-center text-bl mb-5">Log in</h3>
 			<div class="row mx-sm-0 mx-2">
 			
 			<!-- contact form -->
 			<div class="col-lg-6 main_grid_contact" style="width: 200px; margin: auto;">
 				<div class="form-w3ls p-md-5 p-4">
 					<h4 class="mb-4 sec-title-w3 let-spa text-bl"> </h4>
 					<form action="xuly/dologin.php" method="post">
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
 					 
 						<div class="input-group1 text-right">
 							<button class="btn" type="submit">Log In</button>
 							<br>
 							<a style="color: #444444; font-size: 15px; margin: 15px;" href="signup.php">Create an Account?</a>
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