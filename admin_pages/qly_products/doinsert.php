<?php
    //comment these two lines when code started working fine
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $con = mysqli_connect("localhost", "root", "", "bakeryshopdb");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if (isset($_POST["submit"])) {
    	$cate = $_POST["cate"];
        $name =     $_POST["name"];
        $price =    $_POST["price"];
        $image = $_POST["img"];
        $descript = $_POST["descript"];
        $statement = mysqli_prepare($con, "INSERT INTO `product` (`calalog_id`, `name`, `price`, `image_link`, `description`) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($statement, "dsdss", $cate, $name, $price, $image, $descript); // i need to be s
        $response = array();
        if(mysqli_stmt_execute($statement)){
            header("Location:product.php");  
        }else{
            $response["message"] = "error";  
        }
        echo json_encode($response);
    }
?>