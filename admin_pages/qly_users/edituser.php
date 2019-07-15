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
	$sql = "SELECT * FROM users WHERE id='$id' ";
	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_array($result)) {
		$id = $row['id'];
		$name = $row['name'];
		$mail = $row['email'];
		$pass = $row['password'];  
		$address = $row['address'];


		?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-aequiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Edit User</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		</head>
			<style>
				#navbar{
					margin-top:50px;}
					#tbl-first-row{
						font-weight:bold;}	
						#logout{
							padding-right:30px;}	
						</style>
	<body>

						<div class="container">
							<div id="navbar" class="row">
								<div class="col-sm-12">
									<nav class="navbar navbar-default">
										<div class="container-fluid">
											<ul class="nav navbar-nav">
												<li><a href="../index.html">Home</a></li>
												<li><a href="user.php">Users</a></li>
												<li><a href="adduser.html">Add user</a></li>
											</ul> 
										</div>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6"> 
									<form   action="updateprocess.php" method="post">
										<div class="form-group" >
											<label>ID</label>
											<input class="form-control" type="text" readonly name="id" value="<?php echo $id;?>">

										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" name="name" class="form-control"  value="<?php echo $name; ?>"   />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="text" name="pass" class="form-control"   value="<?php echo $pass; ?>"   />
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="text" name="mail" class="form-control"  value="<?php echo $mail; ?>"   />
										</div>

										<div class="form-group">
											<label>Address</label>
											<input type="text" name="addr" class="form-control"   value="<?php echo $address; ?>"   />
										</div>

										<input type="submit" name="submit" value="Edit" class="btn btn-primary" />
									</form>
								</div>
							</div>
						</div>

					</body>
					</html>
		<?php

	}

}