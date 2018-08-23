<?php
	session_start();
	if(empty($_SESSION)) {
		header("location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Halaman Administrator</title>
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
			      <li><p class="user"><span class="glyphicon glyphicon-user"></span> 
			      	<?php echo "Hai, " . $_SESSION['username']; ?></p></li>
			      <li><a href="logout.php" onclick="return confirm('Yakin ingin Logout?')"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
			    </ul>
			</div>
	      </div>
	    </nav>

	    <div class="container">
	    	<h1 class="text-center user"><strong>CRUD menggunakan Bootstrap dengan PHP MySQLi</strong></h1>

			<a href="input.php" class="btn btn-primary">
				<span class="glyphicon glyphicon-plus"></span> 
				Tambah Data
			</a>

			<br>
			<br>
			
			<div class="table-responsive">
		    	<table class="table table-bordered">
		    		<tr>
		    			<th>No</th>
		    			<th>Nama</th>
		    			<th>Alamat</th>
		    			<th>Pekerjaan</th>
		    			<th>Aksi</th>
		    		</tr>

		    		<?php
			            include "koneksi.php";
			            $no = 1;
			            $query = mysqli_query($koneksi, "SELECT * FROM tbl_crud");
			            while($data = mysqli_fetch_array($query)) {
			        ?>

		    		<tr>
		    			<td> <?php echo $no++; ?> </td>
		    			<td> <?php echo $data['nama']; ?> </td>
		    			<td> <?php echo $data['alamat']; ?> </td>
		    			<td> <?php echo $data['pekerjaan']; ?> </td>
		    			<td>
		    				<a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-info">
		    					<span class="glyphicon glyphicon-edit"></span> 
		    					Edit
		    				</a>
		    				<a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">
		    					<span class="glyphicon glyphicon-trash"></span> 
		    					Delete
		    				</a>
		    			</td>
		    		</tr>

		    		<?php } ?>
		    		
		    	</table>
			</div>
	    </div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>