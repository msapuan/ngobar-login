<?php 
	include 'koneksi.php';

	$nama		= $_POST['nama'];
	$alamat		= $_POST['alamat'];
	$pekerjaan	= $_POST['pekerjaan'];

	mysqli_query($koneksi, "INSERT INTO tbl_crud VALUES('', '$nama', '$alamat', '$pekerjaan')");

	header("location: user_page.php");
?>