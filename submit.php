<?php
include 'connect.php';
// menyimpan data kedalam variabel
$nama            = $_POST['nama'];
$email           = $_POST['email'];
$pesan        = $_POST['pesan'];
// query SQL untuk insert data
$query="INSERT INTO pesan SET nama='$nama',email='$email',pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>