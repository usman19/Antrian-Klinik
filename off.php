<?php 
include ('koneksi.php');

$id=$_GET['id'];
$update = mysqli_query($conn,"UPDATE tb_pasien SET status='0' WHERE id_pasien = $id");
header("location:admin.php");