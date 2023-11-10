<?php
include '../../config/connection.php';

$isbn = $_GET['isbn'];
$judul = $_GET['judul'];
$tahun = $_GET['tahun'];
$id_penerbit = $_GET['id_penerbit'];
$id_pengarang = $_GET['id_pengarang'];
$id_katalog = $_GET['id_katalog'];
$harga_pinjam = $_GET['harga_pinjam'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data Buku</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Data Buku</h1>
        <form action="../../process/buku/edit.php" method="POST">
            <!-- Gunakan input type="hidden" untuk menyimpan nilai yang tidak perlu ditampilkan atau diubah oleh user -->
            <input type="hidden" name="isbn" value="<?php echo $isbn; ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun; ?>">
            </div>
            <div class="mb-3">
                <label for="id_penerbit" class="form-label">ID Penerbit</label>
                <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?php echo $id_penerbit; ?>">
            </div>
            <div class="mb-3">
                <label for="id_pengarang" class="form-label">ID Pengarang</label>
                <input type="text" class="form-control" id="id_pengarang" name="id_pengarang" value="<?php echo $id_pengarang; ?>">
            </div>
            <div class="mb-3">
                <label for="id_katalog" class="form-label">ID Katalog</label>
                <input type="text" class="form-control" id="id_katalog" name="id_katalog" value="<?php echo $id_katalog; ?>">
            </div>
            <div class="mb-3">
                <label for="harga_pinjam" class="form-label">Harga Pinjam</label>
                <input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
