<!-- hayoh ngapain -->

<?php

$npm = "";
$nama = "";
$prodi = "";
$semester = "";
$ukt = "";

$diskon = 0;
$potongan = 0;
$bayar = 0;


if (isset($_POST['npm'])) {

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $semester = (int) $_POST['semester'];
    $ukt = (int) $_POST['ukt'];

    if ($ukt >= 5000000 && $semester > 8) {
        $diskon = 0.15;
    } elseif ($ukt >= 5000000) {
        $diskon = 0.10;
    } else {
        $diskon = 0;
    }

    $potongan = $ukt * $diskon;
    $bayar = $ukt - $potongan;
}   



?>


<head>
    <title>Diskon UKT Mahasiswa</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <link rel="stylesheet" href="menu_diskon.css" />
</head>

<body>

    <form method="post" action="">
        <h2>Form Diskon Pembayaran UKT</h2><br>

        NPM :
        <input type="number" name="npm" value="<?php echo $npm; ?>" required><br><small>Masukkan NPM mahasiswa</small><br><br>

        Nama :<input type="text" onkeypress="return (event.charCode < 48 || event.charCode > 57)" name="nama" value="<?php echo $nama; ?>" required><br><small>Masukkan nama lengkap mahasiswa</small><br><br>

        Prodi :<input type="text" onkeypress="return (event.charCode < 48 || event.charCode > 57)" name="prodi" value="<?php echo $prodi; ?>" required><br><small>Masukkan program studi mahasiswa</small><br><br>

        Semester :<input type="number" min="1" max="14" name="semester" value="<?php echo $semester; ?>" required><br><small>Masukkan semester yang sedang ditempuh dalam rentang 1-14</small><br><br>

        Biaya UKT :<input type="number" min="500000" max="6900000" name="ukt" value="<?php echo $ukt; ?>" required><br><small>Masukkan nominal biaya UKT dari rentang 500.000 - 6.900.000</small><br><br>

        <input type="submit" value="Proses">

        <br><br>
        <hr><br>

        <p>NPM : <?php echo $npm; ?></p>
        <p>NAMA : <?php echo $nama; ?></p>
        <p>PRODI : <?php echo $prodi; ?></p>
        <p>SEMESTER : <?php echo $semester; ?></p>
        <p>BIAYA UKT : Rp. <?php echo $ukt; ?></p>
        <p>DISKON : <?php echo $diskon * 100; ?>%</p>
        <p>YANG HARUS DIBAYAR : Rp. <?php echo $bayar; ?></p>
    </form>

</body>

</html>