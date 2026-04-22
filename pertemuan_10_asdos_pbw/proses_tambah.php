

<?php 
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$harga = $_POST['harga'];
$tahun_terbit = $_POST['tahun_terbit'];
$stok = $_POST['stok'];

$stmt = $conn->prepare(

"INSERT  INTO buku(judul, penulis, tahun_terbit, harga, stok)
VALUES (?, ? , ?, ?, ?)"
);

$stmt->bind_param("ssiii", $judul, $penulis, $tahun_terbit, $harga ,$stok);

if ($stmt->execute()) {
        header("location:index.php?status=sukses");
    } else {
        header("location:index.php?status=gagal");
    }
    exit;

?>