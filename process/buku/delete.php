<?php
include '../../config/connection.php';

if (isset($_GET['id'])) {
    $isbn = $_GET['id'];

    $sql = "DELETE FROM buku WHERE isbn = '$isbn'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: ../../buku.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>
