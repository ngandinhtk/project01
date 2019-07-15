<?php 
$con = mysqli_connect("localhost","root", "", "bakeryshopdb");
header('Content-Type: text/html; charset=UTF-8');
mysqli_set_charset($con, 'UTF8');
// kiem tra ket noi co thanh công không
   if (!$con) { 
   	# code...
   	 	die("Connect failed!");
   	 	exit();
   } 
   	// truy xuat cac phan tu trong login.html
   				$message ='';
				$id = $_POST['id'];
				$pass = $_POST['pass'];

   		$query  = "SELECT id, password FROM admin WHERE id = '$id'";

   		 $result = mysqli_query($con , $query);
   		 $row = mysqli_fetch_array($result);

	   if ($pass === $row['password'] && $id === $row['id']) {
	        header("Location:index.html");
	        exit;
	    } else {
	    	 echo "<p style='color: red; '>Tên Tài Khoản/Mật Khẩu không đúng!</p>";
	    }
mysqli_close($con);


 ?>