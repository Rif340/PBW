<?php

include 'koneksi.php';

$sql = "SELECT * from buku";

$result = $conn->query($sql);

if (!$result) {
    die("Query gagal :" . $conn->error);
}

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Detail Buku</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- css -->
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include 'nav.php'; ?>

    <!-- tambah -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
        <div class="alert alert-success text-center mx-auto" style="width:50%;">
            Data berhasil ditambahkan!
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'gagal'): ?>
        <div class="alert alert-danger text-center mx-auto" style="width:50%;">
            Gagal menambahkan data!
        </div>
    <?php endif; ?>

    <!-- hapus -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'hapus_sukses'): ?>
        <div class="alert alert-success text-center mx-auto" style="width:50%;">
            Data berhasil dihapus!
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'hapus_gagal'): ?>
        <div class="alert alert-danger text-center mx-auto" style="width:50%;">
            Gagal menghapus data!
        </div>
    <?php endif; ?>
    
    <!-- update -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'edit_sukses'): ?>
        <div class="alert alert-success text-center mx-auto" style="width:50%;">
            Data berhasil diupdate!
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'edit_gagal'): ?>
        <div class="alert alert-danger text-center mx-auto" style="width:50%;">
            Gagal mengupdate data!
        </div>
    <?php endif; ?>
    

    <?php if (isset($_GET['status']) && $_GET['status'] == 'invalid'): ?>
        <div class="alert alert-warning text-center mx-auto" style="width:50%;">
            ID tidak valid!
        </div>
    <?php endif; ?>

    <center>
        <h1>Dashboard Detail Buku</h1><br>
    </center>

    <div class="container mt-5">
        <table class="table text-left table-striped" id="tabel_detail">

            <thead>
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok Buku</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <th scope="row"><?= $row['id'] ?></th>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $row['penulis'] ?></td>
                        <td><?= $row['tahun_terbit'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td><?= $row['stok'] ?></td>
                        <td>
                            <a class="edit" href="edit.php?id=<?= $row['id'] ?>"><i class="bi bi-pencil-fill"></i></a>

                            <a class="hapus" href="hapus.php?id=<?= $row['id'] ?>"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        setTimeout(function() {
            let alert = document.querySelector('.alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 3000);
    </script>

</body>

</html>