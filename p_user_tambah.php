<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<br>

	<div class="container">
<?php 

		if (isset($_POST['tambah'])){
			include('koneksi.php');
			$nama = $_POST['nama'];
			$umur = $_POST['umur'];
			$alamat = $_POST['alamat'];


				$input =  mysqli_query($conn,"INSERT INTO tb_pasien (nama,umur,alamat)VALUES ('$nama','$umur','$alamat')");
			if ($input){
				
					echo '<a href="status.php" class="btn btn-success">Lihat status antrian anda</a>';
			}else {
				echo 'gagal';
			}
		}else {
				echo'<script>window.history.back()</script>';
		}


 ?>	
 </div>
</body>
</html>



