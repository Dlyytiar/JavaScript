<?php
include '../../config/connection.php';

$id = $_GET['id'];
$nama = $_GET['nama'];
$username = $_GET['username'];
$email = $_GET['email'];
$telp = $_GET['telp'];
$alamat = $_GET['alamat'];
$tgl_entry = $_GET['tgl_entry'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data Anggota</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Data Anggota</h1>
        <form action="../../process/anggota/edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
            </div>
            <div class="mb-3">
                <label for="tgl_entry" class="form-label">Tanggal Entry</label>
                <input type="text" class="form-control" id="tgl_entry" name="tgl_entry" value="<?php echo $tgl_entry; ?>" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
