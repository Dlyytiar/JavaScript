<?php
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $id_katalog = $_POST['id_katalog'];
    $harga_pinjam = $_POST['harga_pinjam'];

    include "../../config/connection.php";

    $query = "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `harga_pinjam`)
              VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$harga_pinjam')";

    if (mysqli_query($koneksi, $query)) {
        header("Location:../../buku.php");
        exit;
        echo "Gagal menambahkan data buku: " . mysqli_error($koneksi);
    }
?>
