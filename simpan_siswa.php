<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_lengkap       = $_POST['nama_lengkap'];
$nama_panggilan     = $_POST['nama_panggilan'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$agama              = $_POST['agama'];         
$alamat             = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO tb_siswa SET nama_lengkap='$nama_lengkap',nama_panggilan='$nama_panggilan',jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat'";
mysqli_query($db, $query);
// mengalihkan ke halaman table siswa
header("location:table_siswa.php");
?>