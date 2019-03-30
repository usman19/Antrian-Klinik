<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
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
				<table class="table table-bodered">
					<tr>
						<th>No</th>
						<th>Id</th>
						<th>Nama</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>NO TELP/HP</th>
						<th>Status</th>
						<th colspan="2">Update Status</th>
					</tr>
					


						<?php 
						
						include('koneksi.php'); 
						
						$queri = mysqli_query($conn,"SELECT * FROM tb_pasien");

						$no=0;


						while ($data = mysqli_fetch_array($queri)) {
							$no++;
							if ($data['status']=='1') {
								
								$status = "<span><img src='red.png' style='width:50px; height:50px;'></img></span>";
							}else{
								
								$status = "<span><img src='green.png' style='width:50px; height:50px;'></img></span>";
							}
							$id= $data['id_pasien'];
							echo "
							<tr>
							<td>$no</td>
							<td>".$id."</td>
							<td>".$data['nama']."</td>
							<td>".$data['umur']."</td>
							<td>".$data['alamat']."</td>
							<td>".$data['no_telpn']."</td>
							<td>$status</td>
							<td>
								<a href='on.php?id=$id' class='btn btn-danger'>On</a>
								<a href='off.php?id=$id' class='btn btn-success'>Off</a>
								<a href='hapus.php?id=$id' class='btn btn-warning'>DELETE</a>

							</td>
							";
							
							
						}


						 ?>
					
				</table>



	</div>
	 </div>
		
</body>
</html>