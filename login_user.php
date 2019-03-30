<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/test.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
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
            <a href="home_user.html" class="navbar-brand">Klinik Dokter Sumanto</a>
        </div>
        <div class="collapse navbar-collapse" id="target-list">
            <ul class="nav navbar-nav">
                <li><a href="home_user.html">Home</a> </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contac</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
      <li><a href="input_user.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
        </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
	<div class="container">
			<form action="p_user.php" class="form-horizontal" method="POST">
			<div class="form-group">
               <label for="username" class="col-xs-2" style="color: white;">Username</label>
               <div class="col-sm-3">
                   <input type="text" name="username" class="form-control" placeholder="Username Anda">
               </div>
           </div>

           <div class="form-group">
               <label for="no" class="col-xs-2" style="color: white;">password</label>
               <div class="col-sm-3">
                   <input type="password" name="password" class="form-control" placeholder="Password Anda">
               </div>
           </div>
			<div  class="col-xs-10 col-xs-offset-2">
                <button type="submit" class="btn btn-warning" name="login">Kirim</button>
            </div>
			</form>
	</div>

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>