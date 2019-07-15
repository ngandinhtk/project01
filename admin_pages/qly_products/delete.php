<?php 


$con = mysqli_connect("localhost", "root", "", "bakeryshopdb");

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
$id = $_GET["id"];
$sql = "DELETE FROM product WHERE id=?";

$stmt = mysqli_prepare($con,$sql);

mysqli_stmt_bind_param($stmt,"s",$id);

if (mysqli_stmt_execute($stmt)) {
	echo "delete successfull";
	header("Location:product.php");

} else {
	echo "delete fail";
}
mysqli_stmt_close($stmt);
mysqli_close($con);

?>