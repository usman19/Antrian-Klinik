<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form </title>
    <link rel="stylesheet" href="css/">
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    
    <div class="container">

    <form class="form-horizontal" method="POST" action="insert.php">
            <div class="form-group">
                <label for="nama" class="col-xs-2">Nama</label>
                <div class="col-sm-3">
                    <input type="text" name="nama" class="form-control" placeholder="Nama anda" />
                </div>
            </div>

            <div class="form-group">
                <label for="tgl"  class="col-xs-2">Tanggal Lahir</label>
                <div class="col-sm-3">
                    <input type="date" name="tgl_lhr" class="form-control" placeholder="Email anda" />
                </div>
            </div>


            <div class="form-group">
                <label for="alamat"  class="col-xs-2">Alamat</label>
                <div class="col-sm-3">
                    <input type="text" name="alamat" class="form-control" placeholder="No Tlp anda" />
                </div>
            </div>

           <div class="form-group">
               <label for="pekerjaan" class="col-xs-2">Pekerjaan</label>
               <div class="col-sm-3">
                   <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan  Anda">
               </div>
           </div>

           <div class="form-group">
               <label for="no" class="col-xs-2">No Telepon/Handphone</label>
               <div class="col-sm-3">
                   <input type="text" name="no" class="form-control" placeholder="No Telepon/ Handphone">
               </div>
           </div>

           <div class="form-group">
               <label for="user" class="col-xs-2">Username</label>
               <div class="col-sm-3">
                   <input type="text" name="user" class="form-control" placeholder="Username">
               </div>
           </div>

           <div class="form-group">
               <label for="pass" class="col-xs-2">Password</label>
               <div class="col-sm-3">
                   <input type="Password" name="pass" class="form-control" placeholder="Password">
               </div>
           </div>
            <div  class="col-xs-10 col-xs-offset-2">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>