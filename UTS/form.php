<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Belanja Alat Tulis</title>

    <link rel="stylesheet" href="form.css">
</head>

<body>
    <form action="proses.php" method="post">
        <h2>form Pendaftaran Belanja Alat Tulis</h2><br>

        <label for="nama">Nama Mahasiswa :</label><br>
        <input type="text" required min="1" max="125" name="nama" class="nama"><br><br>

        <label for="nim">Nim :</label><br>
        <input type="number" required min="1" name="nim" class="nim"><br><br>

        <label for="email">Email :</label><br>
        <input type="email" required min="1" max="125" name="email" class="email"><br><br>

        <label for="Jenis_layanan">Jenis Layanan :</label><br>
        <select name="jenis_layanan" id="jenis_layanan" class="jenis_layanan">
            <option value="Reguler">Reguler</option>
            <option value="Prioritas">Prioritas</option>
        </select><br><br>

        <label for="Daftar_Barang">Daftar Barang :</label><br><br>

        <input type="checkbox" id="penghapus" name="barang[]" value="penghapus">
        <label for="penghapus">Penghapus</label><br>
        <input class="jumlah" type="number" name="jumlah[penghapus]" min="1" max="10" placeholder="Masukan Jumlahnya..."><br><br>

        <input type="checkbox" id="pensil" name="barang[]" value="pensil">
        <label for="pensil">pensil</label><br>
        <input class="jumlah" type="number" name="jumlah[pensil]" min="1" max="10" placeholder="Masukan Jumlahnya..."><br><br>

        <input type="checkbox" id="buku" name="barang[]" value="buku">
        <label for="buku">buku</label> <br>
        <input class="jumlah" type="number" name="jumlah[buku]" min="1" max="10" placeholder="Masukan Jumlahnya..."><br><br>

        <center>
            <button type="submit">Kirim</button>
        </center>
    </form>


</body>

</html>