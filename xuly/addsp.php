<?php 
 include"../modules/config.php";

session_start(); 
// session_destroy();
	if (isset($_GET['id'])) {

		$id = $_GET['id'];

		$sqldetail ="SELECT * FROM product WHERE id =".$id;
		$result = mysql_query($sqldetail);
		$data = mysql_fetch_array($result);
		
	
		if (!empty($_SESSION['cart'])) {
			// kiem tra lan 2 mua hang da on tai chua
			if (array_key_exists($id, $_SESSION['cart'] )) {
				$_SESSION['cart'][$id] = array(
					"qty" => (int)$_SESSION['cart'][$id]["qty"]+1,
					"price" => $data[3],
					"name" => $data[2],
					"img" => $data[4],
					"id" => $data[0],
				);
			} else {
				//cho 1 san phan vao gio hang net la lan mua dan tien
				$_SESSION['cart'][$id] = array(
					"qty" => 1,
					"price" => $data[3],
					"name" => $data[2],
					"img" => $data[4],
					"id" => $data[0]
				);
			}
		} else {
			// lan dau tien mua hang
			$_SESSION['cart'][$id] = array(
				"qty" => 1,
				"price" => $data[3],
				"name" => $data[2],
				"img" => $data[4],
				"id" => $data[0],
			);
		}
	} else{
	}
		// echo "<pre>";

		   echo "<script>";    
            echo "history.back();";
	    	echo "</script>";
 ?>