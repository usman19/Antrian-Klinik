<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>klinik dokter sumanto</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 

		if (isset($_POST['tambah'])){
			include('koneksi.php');
			$nama = $_POST['nama'];
			$tgl_lhr = $_POST['tgl_lhr'];
			$alamat = $_POST['alamat'];
			$pekerjaan = $_POST['pekerjaan'];
			$no_telp = $_POST['no_telp'];
			$username = $_POST['username'];
			$password = $_POST['password'];	

			$input =  mysqli_query($conn,"INSERT INTO tb_daftar (nama,tgl_lhr,alamat,pekerjaan,no_telp,username,password) VALUES ('$nama','$tgl_lhr','$alamat','$pekerjaan','$no_telp','$username','$password')");
			if ($input){
				echo 'DATA anda sudah masuk <br> ';
					echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
		      </div>
		      <div class="modal-body">
		       
		       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ratione animi, suscipit sint, pariatur minus officiis quam quis explicabo alias deleniti neque itaque cumque. At veritatis dolor, consequuntur a nulla.
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
		        <a href="login_user.php" class="btn btn-primary">YA</a>
		      </div>
		    </div>
		  </div>
		</div></br></br></br>';
					echo '<a href="home_user.html" class="btn btn-warning"> kembali halaman utama</a>';
			}else {
				echo 'gagal';
			}
		}else {
				echo'<script>window.history.back()</script>';
		}


 ?>	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>














