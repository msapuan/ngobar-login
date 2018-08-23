<?php
    if(isset($_POST['register'])) {
        include "koneksi.php";

        $username   = $_POST['username'];
        $password   = md5($_POST['password']);
        $nama       = $_POST['nama'];
        $level      = $_POST['level'];

        mysqli_query($koneksi, "INSERT INTO users VALUES('', '$username', '$password', '$nama', '$level')");

        header("location: index.php");
    }
?>

