<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_guru = $_POST['id_guru'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nip = $_POST['nip'];
    $jk = $_POST['jenis_kelamin'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $alamat = $_POST['alamat'];

    // buat query update
    $sql = "UPDATE tbl_guru SET nama_lengkap='$nama_lengkap', nip='$nip', jenis_kelamin='$jk', mata_pelajaran='$mata_pelajaran', alamat='$alamat' WHERE id_guru=$id_guru";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: table_guru.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>