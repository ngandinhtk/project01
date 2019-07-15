<?php
    //comment these two lines when code started working fine
   session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

$con = mysqli_connect("localhost", "root", "", "bakeryshopdb");

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

if (isset($_POST["submit"])) {
	
	$uname =     $_POST["uname"];
	$email =    $_POST["email"];
	$password = $_POST["pass"];
	$phone = $_POST['phone'];
	$address = $_POST["address"];
	$statement = mysqli_prepare($con, "INSERT INTO `users` ( `name`, `email`, `phone`, `password`, `address`) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($statement, "sssss", $uname, $email, $password, $phone, $address ); // i need to be s
        $response = array();
        if(mysqli_stmt_execute($statement)){
        	$_SESSION['username'] = $uname;
        	header("Location:../index.php");  
        }else{
        	$response["message"] = "error";  
        }
        echo json_encode($response);
    }
    ?>