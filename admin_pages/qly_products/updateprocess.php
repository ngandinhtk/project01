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
				$price = $_POST['price'];
				$img = $_POST['img']; 
				$catelog = $_POST['cate'];
				$desc = $_POST['descript'];

   		$sql = "UPDATE product SET `calalog_id` ='$catelog', `name` = '$name', `price`='$price', `image_link` ='$img', `description` = '$desc' WHERE id=$id";

   		if (mysqli_query($con, $sql)) {
   			# code...
   			header("location:product.php");
   		}

mysqli_close($con);


 ?>