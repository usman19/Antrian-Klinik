
<?php 
error_reporting(0);
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="header">
		<a href="masukan.php" class="nav-trigger">
			<span>Klinik Dokter Sumanto</span>
		</a>
	</div>
	<div class="side-nav">
		<nav>
			<ul>

				<li>
					<a href="masukan.php" target="showframe">
						<span><i class="glyphicon glyphicon-plus"></i></span>
						<span>Input Data</span>
					</a>
				</li>

				<li>
					<a href="admin.php" target="showframe">
						<span><i class="glyphicon glyphicon-user"></i></span>
						<span>Cek Status Antrian</span>
					</a>
				</li>
				

				<li>
					<a href="cek_data.php" target="showframe">
						<span><i class="glyphicon glyphicon-dashboard">
						</i>
						</span>
						<span>Cek Data Pasien</span>
					</a>
				</li>

				<li>
					<a href="proses_logout.php" target="showframe">
						<span><i class="glyphicon glyphicon-log-out">
						</i>
						</span>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
<br>
<br>
<div class="main-content">
	<div class="container">
	<form action="" method="POST">
	<div class="col-xs-2">
		<input type="text" name="query" placeholder="cari data ?">
	</div>
		<input type="submit" name="cari" value="cari aja" class="btn btn-success  btn-sm">
	</form>

<br>
 <table class="table table-hover">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>TGL_LAHIR</th>
			<th>PEKERJAAN</th>
		</tr>

		<?php 
		$no =1;

		$query = $_POST ['query'];
		if ($query != '') {
			$select = mysqli_query($conn, "SELECT * FROM tb_daftar  WHERE nama LIKE '%".$query."%'	OR pekerjaan LIKE '%".$query."%'");
		}else{
			$select = mysqli_query($conn, "SELECT * FROM tb_daftar");
		}
			
			while($baris = mysqli_fetch_array($select)){
		 ?>

		<tr>
			<th><?php echo $no++ ?></th>
			<th><?php echo $baris['nama'] ?></th>
			<th><?php echo $baris['tgl_lhr'] ?></th>
			<th><?php echo $baris['pekerjaan'] ?></th>
			
		</tr>
		<?php } ?>
	</table>				
	</div>

</div>
	
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>					
</body>	
</html>