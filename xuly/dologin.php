<?php 

session_start();

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
				$uname = $_POST['uname'];
				$pass = $_POST['pass'];

   		$query  = "SELECT name, password FROM users ";

   		 $result = mysqli_query($con , $query);
   		 $row = mysqli_fetch_array($result);

	   if ($pass === $row['password'] && $uname === $row['name']) {
	         $_SESSION ['username']=$uname; 
	        header("Location:../product.php");
	        exit;
		    }  else { 
		    
		    	echo "<script   >";
                    echo "alert('That user does not exist');";
                    echo "history.back();";
            	echo "</script>";
			}
			 

mysqli_close($con);


 ?>