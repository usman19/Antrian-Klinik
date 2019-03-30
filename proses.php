<?php 
include('koneksi.php');
		if(isset($_POST['login'])){
			$email = $_POST['email'];
			$pass = $_POST['pass'];

			$query = mysqli_query($conn,"SELECT * FROM  admin  WHERE email= '$email' AND pass= '$pass' ");
			$hasil = mysqli_fetch_array($query);
			$cek = mysqli_num_rows($query);
			if ($cek > 0)
			{
				  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=masukan.php">';
			} else {
				echo "gagal";
			}
		}

 ?>