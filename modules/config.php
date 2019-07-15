<?php 
	$maychu = "localhost";
	$tentk = "root";
	$pass = "";
	$csdl = "bakeryshopdb";

	$conn = mysql_connect($maychu, $tentk, $pass, $csdl) or die ("Can't connect to database "); 
	if(!$conn)
	{
		die("Unable to select database");
	}
	mysql_select_db($csdl,$conn);
	mysql_query("SET NAMES 'utf8'");
		
 ?>