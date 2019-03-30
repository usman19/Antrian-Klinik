<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/makan.css">
</head>
<body style="background-color: #ff8000;">

	<div class="tengah">
	<div></div>
		<form action="proses.php" class="form-horizontal" method="POST">
					<h3>Login Admin</h3>
				<div class="input-group col-sm-6">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" name="email" placeholder="Masukan Email Anda" class="form-control">
				</div>
				<div class="input-group col-sm-6">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" name="pass" class="form-control" placeholder="Masukan Password Anda">
				</div> <br>
				<div class="input-group">
				<input type="submit" name="login" value="tekan" class="btn btn-primary">
				</div>
				</form>
	</div>
		
	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</body>
</html>