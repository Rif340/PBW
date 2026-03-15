<!-- hayoh ngapain 🗿 -->

<?php
const pajak = 0.10;

$barang = array("Buku The wealth of nations by Smith, Adam, 1723-1790", 10000);

$jumlah_beli = 2;

$harga_sebelum = $barang[1] * $jumlah_beli;

$harga_pajak = $harga_sebelum * pajak;

$total = $harga_sebelum + $harga_pajak;
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perhitungan Total Pembelian (Dengan Array)</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="pembungkus_utama">
    <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
    <hr><br>

    <p>Nama barang : <?php echo $barang[0]?></p>
    <p>Harga Satuan : <?php echo $barang[1]?></p>
    <p>Jumlah Beli : <?php echo $jumlah_beli?></p>
    <p>Total Harga (sebelum pajak) : <?php echo $harga_sebelum?></p>
    <p>pajak (10%) : <?php echo $harga_pajak?></p>
    <b><p>Total Bayar :Rp.<?php echo $total?></p></b>
  </div>
</body>
  
</html>