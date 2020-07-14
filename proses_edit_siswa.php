<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_siswa = $_POST['id_siswa'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    // buat query update
    $sql = "UPDATE tb_siswa SET nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', jenis_kelamin='$jk', agama='$agama', alamat='$alamat' WHERE id_siswa=$id_siswa";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: table_siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>