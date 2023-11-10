<?php
    $id_pengarang = $_POST['id_pengarang'];
    $nama_pengarang = $_POST['nama_pengarang'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include "../../config/connection.php";

    $query = "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`)
              VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat')";

    if (mysqli_query($koneksi, $query)) {
        header("Location:../../pengarang.php");
        exit;
    } else {
        echo "Gagal menambahkan data pengarang: " . mysqli_error($koneksi);
    }
?>
