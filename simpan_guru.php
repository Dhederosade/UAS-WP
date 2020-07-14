<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_lengkap       = $_POST['nama_lengkap'];
$nip                = $_POST['nip'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$mata_pelajaran     = $_POST['mata_pelajaran'];         
$alamat             = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO tbl_guru SET nama_lengkap='$nama_lengkap',nip='$nip',jenis_kelamin='$jenis_kelamin',mata_pelajaran='$mata_pelajaran',alamat='$alamat'";
mysqli_query($db, $query);
// mengalihkan ke halaman table siswa
header("location:table_guru.php");
?>