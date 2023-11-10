<?php
include '../../config/connection.php';

$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$id_penerbit = $_POST['id_penerbit'];
$id_pengarang = $_POST['id_pengarang'];
$id_katalog = $_POST['id_katalog'];
$harga_pinjam = $_POST['harga_pinjam'];

$query = "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn'";

if (mysqli_query($koneksi, $query)) {
    header("Location:../../buku.php");
    exit;
} else {
    echo "Gagal memperbarui data buku: " . mysqli_error($koneksi);
}
?>
