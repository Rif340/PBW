<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Pendaftaran Sederhana</title>

    <!-- Hayoh ngapain :) -->
</head>

<body>
    <h3>Membuat Form Pendaftaran Sederhana</h3>

    <form action="dashboard.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" placeholder="Masukan Nama..." maxlength="30" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Masukan Email..." maxlength="50" required><br><br>

        <label for="jenis_kelamin">Jenis kelamin :</label><br>

        <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki">
        <label for="laki-laki">Laki-laki</label>

        <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
        <label for="perempuan">perempuan</label><br><br>

        <label for="hobi">Hobi :</label><br>

        <input id="musik" name="hobi[]" value="musik" type="checkbox">
        <label for="musik">Musik</label><br>

        <input id="olahraga" name="hobi[]" value="olahraga" type="checkbox">
        <label for="olahraga">Anime</label><br>

        <input id="membaca" name="hobi[]" value="membaca" type="checkbox">
        <label for="membaca">Membaca</label><br><br>

        <label for="pilih_kota">Pilih kota :</label>
        <select id="pilih_kota" name="pilih_kota">
            <option value="shibuya">tokyo</option>
            <option value="malang">malang</option>
            <option value="cikampek">cikampek</option>
        </select><br><br>

        <label for="upload_foto">Upload Foto profile</label><br>
        <input id="upload_foto" name="foto_profile" type="file" accept="image/*">

        <br><br><input type="submit" value="Daftar">
    </form>
</body>
</html>