<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Update Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM buku WHERE id=$id";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    ?>

    <?php include 'nav.php'; ?>


    <form action="proses_edit.php" method="post">

        <h3>Form Update Buku</h3>

        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>Masukan Nama Buku :</label>
        <input type="text" name="judul" value="<?= $data['judul']; ?>">

        <label>Masukan Nama Penulis :</label>
        <input type="text" name="penulis" value="<?= $data['penulis']; ?>">

        <label>Masukan Tahun Terbit :</label>
        <input type="number" name="tahun_terbit" value="<?= $data['tahun_terbit']; ?>">

        <label>Masukan Harga Buku :</label>
        <input type="number" name="harga" value="<?= $data['harga']; ?>">

        <label>Masukan Stok Buku :</label>
        <input type="number" name="stok" value="<?= $data['stok']; ?>">

       <button type="submit" name="submit">Kirim</button>

    </form>
</body>

</html>
<?php $conn->close(); ?>