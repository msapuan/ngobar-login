<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ngobar Register</title>
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
			.register {
				background-color:#fff;
				padding:20px;
				margin-top:20px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h2>Register User</h2>
				<div class="register">
					<form role="form" action="register-aksi.php" method="post">
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
						</div>
                        <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required autofocus />
                        </div>
						<div class="form-group">
							<select name="level" class="form-control" required>
								<option value="">-- Pilih Level User --</option>
								<option value="1">Administrator</option>
								<option value="2">User</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" name="register" class="btn btn-success btn-block">
								<span class="glyphicon glyphicon-ok"> Register</span>
							</button>
                            <button type="reset" name="reset" class="btn btn-danger btn-block">
                            	<span class="glyphicon glyphicon-remove"> Reset</span>
                            </button>
						</div>
						<p> Already have an account ? Login <a href="index.php"> here </a> </p>
					</form>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>