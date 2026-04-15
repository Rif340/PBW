<?php
define("PAJAK", 0.15);

$harga = [
    "pensil" => 2000,
    "buku" => 5000,
    "penghapus" => 1000
];

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$layanan = $_POST['jenis_layanan'];

$subtotal = 0;

if (isset($_POST['barang'])) {
    foreach ($_POST['barang'] as $item) {
        $subtotal += $harga[$item] * $_POST['jumlah'][$item];
    }
}

$pajak = $subtotal * PAJAK;

if ($layanan == "Prioritas") {
    $biaya_layanan = 5000;
} else {
    $biaya_layanan = 0;
}

$total = $subtotal + $pajak + $biaya_layanan;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belanja Alat Tulis</title>
    <link rel="stylesheet" href="proses.css">
</head>

<body>

    <div class="pembungkus_utama">

        <h2>Daftar Belanja Alat Tulis</h2>
        <hr><br>

        <p>Nama : <?php echo $nama; ?></p>
        <p>NIM : <?php echo $nim; ?></p>
        <p>Email : <?php echo $email; ?></p>
        <p>Layanan : <?php echo $layanan; ?></p>

        <br>

        <p>Barang dibeli :</p>
        <?php
        if (isset($_POST['barang'])) {
            foreach ($_POST['barang'] as $item) {
                echo "<p>- " . $item . " (" . $_POST['jumlah'][$item] . ")</p>";
            }
        } else {
            echo "<p>Tidak ada barang dipilih</p>";
        }
        ?>

        <br>

        <p>Subtotal : <?php echo $subtotal; ?></p>
        <p>Pajak (15%) : <?php echo $pajak; ?></p>
        <p>Biaya Layanan : <?php echo $biaya_layanan; ?></p>

        <b><p>Total Bayar : Rp. <?php echo $total; ?></p></b>

    </div>
</body>

</html>