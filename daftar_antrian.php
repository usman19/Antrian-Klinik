<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>daftar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
            <a href="index.php" class="navbar-brand">Klinik Dokter Sumanto</a>
        </div>
        <div class="collapse navbar-collapse" id="target-list">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a> </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="Contact.html">Contac</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
     
      <li><a href="p_logout_user.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
        </div>
        </div>
    </nav>
<br>
<br>
<br>
<marquee behavior="" direction="right">
	<h1>Silahkan masukan data diri anda untuk mendaftar antrian brobat</h1>
</marquee>
<div class="container">
				<form action="p_user_tambah.php" method="post" class="form-horizontal">
						<div class="form-group">
						<label for="" class="col-xs-2" style="color: white;">NAMA LENGKAP</label>
							<div class="col-sm-3">
									<input type="text" class="form-control" name="nama" placeholder="Masukan Nama Anda">
							</div>
						</div>

						<div class="form-group">
						<label for="" class="col-xs-2" style="color: white;">UMUR</label>
							<div class="col-sm-3">
									<input type="text" class="form-control" name="umur" placeholder="Masukan Umur Anda">
							</div>	
						</div>

					    <div class="form-group">
					    <label for="" class="col-xs-2" style="color: white;">ALAMAT</label>
					    	<div class="col-sm-3">
							<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Anda">
							</div>
						</div>

						<input type="submit" name="tambah" value="KLIK" class="btn btn-warning">
						
				</form>
	</div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</body>
</html>