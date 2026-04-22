<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Tambah Buku</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php include 'nav.php'; ?>
    <form action="proses_tambah.php" method="post">

        <center><h3>Form Tambah Buku</h3><br></center>
        
        <label for="buku">Masukan Nama Buku :</label><br>
        <input type="text" id="buku" required name="judul"> <br><br>

        <label for="penulis">Masukan Nama Penulis :</label><br>
        <input type="text" id="penulis" required name="penulis"> <br><br>

        <label for="tahun">Masukan Tahun Terbit :</label><br>
        <input type="number" id="tahun" required name="tahun_terbit"> <br><br>

        <label for="harga">Masukan Harga Buku :</label><br>
        <input type="number" id="harga" required name="harga"> <br><br>

        <label for="stok">Masukan Stok Buku :</label><br>
        <input type="number" id="stok" required name="stok"> <br><br>


        <center><button type="submit">Kirim</button></center>
    </form>
</body>
</html>