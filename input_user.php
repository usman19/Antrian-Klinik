<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="css/test.css" rel="stylesheet">
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
            <a href="index.php" class="navbar-brand">Klinik Dokter Sumanto</a>
        </div>
        <div class="collapse navbar-collapse" id="target-list">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a> </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contac</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
      <li><a href="input_user.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login_user.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
        </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <form class="form-horizontal" method="post" action="input_user.php">
            <div class="form-group">
                <label for="nama" class="col-xs-2" style="color: white;">Nama</label>
                <div class="col-sm-3">
                    <input type="text" name="nama" class="form-control" placeholder="Nama anda" />
                </div>
            </div>
            <div class="form-group">
                <label for="tgl"  class="col-xs-2" style="color: white;">Tanggal Lahir</label>
                <div class="col-sm-3">                  
                  <input type="date"  class="form-control" placeholder="Tanggal lahir anda"  name="tgl_lhr" />
                </div>
            </div>
            <div class="form-group">
                <label for="alamat"  class="col-xs-2" style="color: white;">Alamat</label>
                <div class="col-sm-3">
                    <input type="text" name="alamat" class="form-control" placeholder="alamat anda" />
                </div>
            </div>

           <div class="form-group">
               <label for="pekerjaan" class="col-xs-2" style="color: white;">Pekerjaan</label>
               <div class="col-sm-3">
                   <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan  Anda">
               </div>
           </div>

           <div class="form-group">
               <label for="no" class="col-xs-2" style="color: white;">No Telepon/Handphone</label>
               <div class="col-sm-3">
                   <input type="text" name="no_telp" class="form-control" placeholder="No Telepon/ Handphone">
               </div>
           </div>

           <div class="form-group">
               <label for="user" class="col-xs-2" style="color: white;">Username</label>
               <div class="col-sm-3">
                   <input type="text" name="username" class="form-control" placeholder="Username">
               </div>
           </div>

           <div class="form-group">
               <label for="pass" class="col-xs-2" style="color: white;">Password</label>
               <div class="col-sm-3">
                   <input type="Password" name="password" class="form-control" placeholder="Password">
               </div>
           </div>
            <div  class="col-xs-10 col-xs-offset-2">
                <button type="submit" class="btn btn-warning" name="tambah" data-toggle="modal" data-target="#myModal">Kirim</button>
  
            </div>
        </form>
    </div> <!-- /container -->
    <br>
    <br>
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
       
          echo ' <button type="button" class="btn btn-success" name="tambah" data-toggle="modal" data-target="#myModal">Data Anda sudah msauk silahkan klik tombol ini untuk login</button>
 

    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
           
           DATA ANDA SUDAH MASUK, consectetur adipisicing elit. Hic ratione animi, suscipit sint, pariatur minus officiis quam quis explicabo alias deleniti neque itaque cumque. At veritatis dolor, consequuntur a nulla.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            <a href="login_user.php" class="btn btn-primary">YA</a>
          </div>
        </div>
      </div>
    </div>';
          
      }else {
        echo 'gagal';
      }
    } ?>
   
 <footer>
      <div class="site-footer">
      <div class="container">
        <div class="row">
        <p>ini futer kami </p>
        </div>
        <div class="bottom-footer">
          <div class="dol-md-5">@ copyright wahyu usman</div>
        </div>
      </div>
      </div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>