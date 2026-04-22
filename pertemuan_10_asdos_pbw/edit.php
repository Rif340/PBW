<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Update Buku</title>

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

        <center><h3>Form Update Buku</h3></center><br>

        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label for="buku">Masukan Nama Buku :</label><br>
        <input type="text" name="judul" value="<?= $data['judul']; ?>"> <br><br>

        <label for="penulis">Masukan Nama Penulis :</label><br>
        <input type="text" name="penulis" value="<?= $data['penulis']; ?>"> <br><br>

        <label for="tahun">Masukan Tahun Terbit :</label><br>
        <input type="number" name="tahun_terbit" value="<?= $data['tahun_terbit']; ?>"><br><br>

        <label for="harga">Masukan Harga Buku :</label><br>
        <input type="number" name="harga" value="<?= $data['harga']; ?>"><br><br>

        <label for="stok">Masukan Stok Buku :</label><br>
        <input type="number" name="stok" value="<?= $data['stok']; ?>"> <br><br>


        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>