<?php /* 

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

<?php */ ?>



<?php
include 'koneksi.php';

$limit = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$offset = ($page - 1) * $limit;

$search_judul = $_GET['judul'] ?? '';
$search_tahun = $_GET['tahun_terbit'] ?? '';

// query dasar
$where = "WHERE 1=1";

if ($search_judul !== '') {
    $where .= " AND judul LIKE '%" . $conn->real_escape_string($search_judul) . "%'";
}

if ($search_tahun !== '') {
    $where .= " AND tahun_terbit = " . intval($search_tahun);
}

$total_result = $conn->query("SELECT COUNT(*) as total FROM buku $where");
$total_row = $total_result->fetch_assoc();
$total_data = $total_row['total'];

$total_page = ceil($total_data / $limit);

$sql = "SELECT * FROM buku $where LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

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

    <!-- js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


    <!-- css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Buku</title>
</head>

<body>

    <?php include 'nav.php'; ?>

    <div class="container mt-4">
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

        <h2>Daftar Buku</h2>

        <form method="get" class="row g-3 mb-4">
            <div class="col-md-5">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($search_judul) ?>">
            </div>

            <div class="col-md-3">
                <label>Tahun</label>
                <input type="number" name="tahun_terbit" class="form-control" value="<?= htmlspecialchars($search_tahun) ?>">
            </div>

            <div class="col-md-2 align-self-end">
                <button class="btn btn-primary">Cari</button>
            </div>

            <div class="col-md-2 align-self-end">
                <a href="index.php" class="btn btn-secondary">Reset</a>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['judul']) ?></td>
                        <td><?= htmlspecialchars($row['penulis']) ?></td>
                        <td><?= $row['tahun_terbit'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <ul class="pagination justify-content-center mt-4">

            <li class="page-item <?= ($page == 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
            </li>

            <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php } ?>

            <li class="page-item <?= ($page == $total_page) ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
            </li>

        </ul>

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