<?php
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $tgl_entry = $_POST['tgl_entry']; 

    include "../../config/connection.php"; 

    $query = "INSERT INTO `anggota` (`id_anggota`, `nama`, `username`, `email`, `telp`, `alamat`, `tgl_entry`) 
              VALUES ('$id_anggota', '$nama', '$username', '$email', '$telp', '$alamat', '$tgl_entry')";

    if (mysqli_query($koneksi, $query)) {
        header("Location:../../index.php");
        exit;
    } else {
        echo "Gagal menambahkan data anggota: " . mysqli_error($koneksi);
    }

?>
