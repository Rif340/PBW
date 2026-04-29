<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $harga = $_POST['harga'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];
    $id = $_POST['id'];

    $stmt = $conn->prepare(
        "UPDATE buku SET judul=?, penulis=?, tahun_terbit=?, harga=?, stok=? WHERE id=?"
    );

    $stmt->bind_param("ssiiii", $judul, $penulis, $tahun_terbit, $harga, $stok, $id);

    if ($stmt->execute()) {
        header("location:index.php?status=edit_sukses");
    } else {
        header("location:index.php?status=edit_gagal");
    }

    $stmt->close();
    $conn->close();
    exit;
} else {
    header("location:index.php?status=invalid");
    exit;
}

