<?php
	///Establish Database connection
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "phpcrud";
	//$port = "3306";
	define('ROOTPATH', dirname(__FILE__));
	$connection = new mysqli($server,$username,$password,$database);
	
	if($connection->connect_error){
		die("Awaiting Resources");
	}
	//echo connection info
	//echo "Connected successfully (".$connection->host_info.")";
?>