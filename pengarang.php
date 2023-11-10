<?php
include 'config/connection.php';

$sql = "SELECT * FROM pengarang";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pengarang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 800px; 
            margin: 10px 0;
            font-size: 1em;
            min-width: 200px;
            border-radius: 3px 3px 0 0;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.15);
        }
        table thead tr {
            background-color: #386CD8; 
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }
        table th,
        table td {
            padding: 12px 15px;
        }
        table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        table tbody tr.active-row {
            font-weight: bold;
            color: #386CD8;
        }
        
        .navbar {
            background-color: #386CD8; 
        }

        .navbar-brand {
        font-size: 24px; 
        }

        .navbar-nav .nav-link {
            font-size: 18px; 
        }
        .navbar-nav .nav-item .nav-link {
            color: #ffffff;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark justify-content-center">
        <a class="navbar-brand mx-3" href="pengarang.php">Pengarang</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link mx-3" href="index.php">Anggota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-3" href="buku.php">Buku</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-4">
    <a href="page/insert/pengarang.php" class="btn btn-primary mb-3 mp-3">Tambah Data Pengarang</a>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pengarang</th>
                    <th>Nama Pengarang</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $row["id_pengarang"];?></td>
                    <td><?php echo $row["nama_pengarang"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["telp"];?></td>
                    <td><?php echo $row["alamat"];?></td>
                    <td>
                        <a href='page/edit/pengarang.php?id=<?php echo $row['id_pengarang']; ?>&nama=<?php echo urlencode($row['nama_pengarang']); ?>&email=<?php echo urlencode($row['email']); ?>&telp=<?php echo $row['telp']; ?>&alamat=<?php echo urlencode($row['alamat']); ?>' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='process/pengarang/delete.php?id=<?php echo $row['id_pengarang']; ?>' class='btn btn-danger btn-sm' onclick='return confirm("Apakah Anda yakin ingin menghapus data?")'>Delete</a>
                    </td>
                </tr>
                <?php 
                    $no++; 
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
</script>
