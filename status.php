<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="refresh" content="3">
	<title>USER PAGE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #808080;">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Klinik Dokter Sumanto</a>
        </div>
        <div class="collapse navbar-collapse" id="target-list">
            <ul class="nav navbar-nav">
                <li><a href="home_user.html">Home</a> </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contac</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
     
      <li><a href="p_logout_user.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
        </div>
        </div>
    </nav>
<br>
<br>

<div class="container">
<h3>DATA dan NOMER ANTRIAN ANDA</h3><br>
<div>
	<img src="" alt="">
</div>
<div>
	<img src="" alt="">
</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<table  class="table table-bordered" style="color: white;">
			<tr>
				<th>No</th>
				<th>Id</th>
				<th>Nama</th>
				<th>Umur</th>
				<th>Status</th>
			</tr>
			
				<?php 
				include ('koneksi.php');
				$queri = mysqli_query($conn,"SELECT * FROM tb_pasien");
					$no=0;
				while ($data = mysqli_fetch_array($queri)) {
					$no++;
					if ($data['status']=='1') {
						
						$status = "<span><img src='red.png' style='width:50px; height:50px;'></img></span>";
					}else{
						
						$status = "<span><img src='green.png' style='width:50px; height:50px;'></img></span>";
					}
					echo "
					<tr>
					<td>$no</td>
					<td>".$data['id_pasien']."</td>
					<td>".$data['nama']."</td>
					<td>".$data['umur']."</td>
					<td>$status</td>
					";					
				}

				 ?>
			
		</table>
		</div>
	</div>
</div>
</body>
</html>