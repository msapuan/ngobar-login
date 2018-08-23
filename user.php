<?php
	session_start();
	if(empty($_SESSION)){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ngobar Login</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			body {
				background-color:#eee;
			}
			.row {
				margin:100px auto;
				width:300px;
				text-align:center;
			}
			.login {
				background-color:#fff;
				padding:20px;
				margin-top:20px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h2>Login Berhasil</h2>
				<div class="login">
					<p>Anda berhasil login dengan detail sebagai berikut:</p>
					<p>
						Username: <?php echo $_SESSION['username']; ?> <br>
						Level: <?php echo $_SESSION['level']; ?>
					</p>
					<p>
						<a href="logout.php" class="btn btn-primary" onclick="return confirm('Yakin ingin Logout?')">
							Log out
						</a>
					</p>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>