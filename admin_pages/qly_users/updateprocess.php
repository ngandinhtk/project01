<?php 
		    $con = mysqli_connect("localhost", "root", "", "bakeryshopdb");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
header('Content-Type: text/html; charset=UTF-8');
mysqli_set_charset($con, 'UTF8');
 
   	// truy xuat cac phan tu trong update.php
				$id = $_POST['id'];
				$name = $_POST['name'];
				$pass = $_POST['pass'];
				$mail = $_POST['mail'];  
				$addr = $_POST['addr'];

   		$sql = "UPDATE users SET  `name` = '$name', `password`='$pass', `email` = '$mail', `address` = '$addr' WHERE id=$id";

   		if (mysqli_query($con, $sql)) {
   			# code...
   			header("location:user.php");
   		}

mysqli_close($con);


 ?>