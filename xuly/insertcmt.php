<?php
    //comment these two lines when code started working fine
    error_reporting(E_ALL);
    ini_set('display_errors',1);

	header('Content-type:text/html;charset=UTF-8');
    $con = mysqli_connect("localhost", "root", "", "bakeryshopdb");
	mysqli_set_charset($con,'utf8');
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if (isset($_POST["submit"])) {
        $name =     $_POST["name"];
        $email =    $_POST["email"];
        $cmt = $_POST["cmt"];
        $statement = mysqli_prepare($con, "INSERT INTO `comment` ( `name`, `email`, `content`) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($statement, "sss", $name, $email, $cmt ); // i need to be s
        $response = array();
        if(mysqli_stmt_execute($statement)){
              echo "<script   >";
                    echo "alert('Comment has sent');";
                    echo "history.back();";
            	echo "</script>";

        }else{
            $response["message"] = "error";  
        }
        echo json_encode($response);
    }
?>