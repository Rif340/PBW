<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'nav.php';
    ?>

    <form action="proses_tambah.php" method="post">

        <h3>Form Tambah Buku</h3>

        <label>Masukan Nama Buku :</label>
        <input type="text" name="judul" required>

        <label>Masukan Nama Penulis :</label>
        <input type="text" name="penulis" required>

        <label>Masukan Tahun Terbit :</label>
        <input type="number" name="tahun_terbit" required>

        <label>Masukan Harga Buku :</label>
        <input type="number" name="harga" required>

        <label>Masukan Stok Buku :</label>
        <input type="number" name="stok" required>

        <button type="submit">Kirim</button>

    </form>

</body>

</html>