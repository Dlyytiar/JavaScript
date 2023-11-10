<?php
include '../../config/connection.php';

if (isset($_GET['id'])) {
    $id_pengarang = $_GET['id'];

    $sql = "DELETE FROM pengarang WHERE id_pengarang = '$id_pengarang'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: ../../pengarang.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>
