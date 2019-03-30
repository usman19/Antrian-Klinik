<?php 
	include 'koneksi.php';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<div class="main-content">
		<div class="container">
				<form action="masukan.php" method="post" class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-3">
								<label for="" class="col-xs-2">NAMA LENGKAP</label>
									<input type="text" class="form-control" name="nama">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-3">
								<label for="" class="col-xs-2">UMUR</label>
									<input type="text" class="form-control" name="umur">
							</div>	
						</div>

					    <div class="form-group">
					    	<div class="col-sm-3">
							<label for="" class="col-xs-2">ALAMAT</label>
							<input type="text" class="form-control" name="alamat">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-3">
							<label for="" class="col-xs-2">NO TELPN/HP</label>
							<input type="text" class="form-control" name="no_telpn">
							</div>
						</div>
						<input type="submit" name="tambah" value="KLIK" class="btn btn-info">
						
				</form>
	</div>
</div>
<?php 

		if (isset($_POST['tambah'])){
			include('koneksi.php');
			$nama = $_POST['nama'];
			$umur = $_POST['umur'];
			$alamat = $_POST['alamat'];
			$no_telpn = $_POST['no_telpn'];


				$input =  mysqli_query($conn,"INSERT INTO tb_pasien (nama,umur,alamat,no_telpn)VALUES ('$nama','$umur','$alamat','$no_telpn')");
			if ($input){
				echo 'DATA anda sudah masuk ';
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
			}else {
				echo 'gagal';
			}
		}

 ?>	
</body>
</html>