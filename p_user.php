<?php 
include('koneksi.php');
		if(isset($_POST['login'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = mysqli_query($conn,"SELECT * FROM  tb_daftar  WHERE username = '$username' AND password = '$password' ");
			$hasil = mysqli_fetch_array($query);
			$cek = mysqli_num_rows($query);
			if ($cek > 0)
			{
				  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=daftar_antrian.php">';
			} else {
				echo "gagal";
			}
		}

 ?>