<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Halaman User</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<style>
			body {
			  padding-top: 50px;
			}
			h3.title {
				margin-top: 0;
				margin-bottom: 0;
				line-height: 50px;
				color: #fff;
			}
			p.user {
				color: #fff;
				line-height: 50px;
				margin-top: 0;
				margin-bottom: 0;
			}
			table tr, th, td {
				text-align: center;
			}
			h1.user {
				margin-bottom: 30px;
				line-height: 50px;
				border-bottom: 1px solid #eee;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <h3 class="title">Ngobar CRUD</h3>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
		        <ul class="nav navbar-nav navbar-right">
			      <li><p class="user"><span class="glyphicon glyphicon-user"></span> Hai, Noob</p></li>
			      <li><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
			    </ul>
			</div>
	      </div>
	    </nav>

	    <div class="container">
	    	<h1 class="text-center user"><strong>CRUD menggunakan Bootstrap dengan PHP MySQLi</strong></h1>

			<br>

			<h3 class="text-center"><strong>Input Data Baru</strong></h3>

			<br>

			<form class="form-horizontal" method="POST" action="input-aksi.php">
			  <div class="form-group">
			    <label class="col-sm-4 control-label">Nama</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-4 control-label">Alamat</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-4 control-label">Pekerjaan</label>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-4 col-sm-offset-4">
			      <button type="submit" class="btn btn-success">Simpan</button>
			      <button type="reset" class="btn btn-warning">Reset</button>
			    </div>
			  </div>
			</form>

	    </div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>