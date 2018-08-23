<?php
	include 'koneksi.php';

	$id = $_GET['id'];

	mysqli_query($koneksi, "DELETE FROM tbl_crud WHERE id='$id'");

	header("location: user_page.php");
?>