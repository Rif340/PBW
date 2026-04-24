<?php
include 'koneksi.php';

// Query data pesanan
$query = "
    SELECT 
        pesanan.id AS pesanan_id, 
        pelanggan.nama AS nama_pelanggan, 
        pesanan.tanggal_pesanan,
        pesanan.total_harga 
    FROM pesanan
    JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id
";

$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PERBAIKAN: link CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Pesanan</title>
</head>

<body>

    <?php include 'nav.php'; ?>

    <!-- Alert Sukses -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses'): ?>
        <div class="alert alert-success text-center mx-auto" style="width:50%;">
            Pesanan berhasil dibuat!
        </div>
    <?php endif; ?>

    <!-- Alert Gagal -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'gagal'): ?>
        <div class="alert alert-danger text-center mx-auto" style="width:50%;">
            Gagal membuat pesanan!
        </div>
    <?php endif; ?>

    <div class="container mt-4">
        <h2>Daftar Pesanan</h2>

        <!-- Tabel Daftar Pesanan -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Pesanan</th>
                    <th>Total Harga</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['pesanan_id'] ?></td>
                        <td><?= htmlspecialchars($row['nama_pelanggan']) ?></td>
                        <td><?= $row['tanggal_pesanan'] ?></td>
                        <td>Rp<?= number_format($row['total_harga'], 2) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
<?php $conn->close(); ?>