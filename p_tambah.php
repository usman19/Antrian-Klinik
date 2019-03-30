<?php 

		if (isset($_POST['tambah'])){
			include('koneksi.php');
			$nama = $_POST['nama'];
			$umur = $_POST['umur'];
			$alamat = $_POST['alamat'];


				$input =  mysqli_query($conn,"INSERT INTO tb_pasien (nama,umur,alamat)VALUES ('$nama','$umur','$alamat')");
			if ($input){
				echo 'DATA anda sudah masuk ';
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';
			}else {
				echo 'gagal';
			}
		}else {
				echo'<script>window.history.back()</script>';
		}


 ?>