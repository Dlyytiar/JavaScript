<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data Buku</h1>
        <form action="../../process/buku/insert.php" method="POST">
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required="">
            </div>
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required="">
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="number" class="form-control" id="tahun" name="tahun" required="">
            </div>
            <div class="form-group">
                <label for="id_penerbit">ID Penerbit:</label>
                <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" required="">
            </div>
            <div class="form-group">
                <label for="id_pengarang">ID Pengarang:</label>
                <input type="text" class="form-control" id="id_pengarang" name="id_pengarang" required="">
            </div>
            <div class="form-group">
                <label for="id_katalog">ID Katalog:</label>
                <input type="text" class="form-control" id="id_katalog" name="id_katalog" required="">
            </div>
            <div class="form-group">
                <label for="harga_pinjam">Harga Pinjam:</label>
                <input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" required="">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</body>
</html>
