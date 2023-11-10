<?php
include '../../config/connection.php';

$id = $_POST['id'];
$nama_pengarang = $_POST['nama_pengarang'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$query = "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location:../../pengarang.php");
    exit;
} else {
    echo "Gagal memperbarui data pengarang: " . mysqli_error($koneksi);
}
?>
