<?php
	$host 		= "localhost";
	$user 		= "root";
	$password 	= "";
	$database 	= "ngobar_login";

	$koneksi = mysqli_connect($host, $user, $password, $database);

	if(mysqli_connect_error()){
		echo 'Database gagal terhubung : '. mysqli_connect_error();
	}
?>

