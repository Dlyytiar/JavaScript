<?php
include '../../config/connection.php';

if (isset($_GET['id'])) {
    $id_anggota = $_GET['id'];

    $sql = "DELETE FROM anggota WHERE id_anggota = $id_anggota";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}
?>
