<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}

include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM buku WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("location:index.php?status=hapus_sukses");
    } else {
        header("location:index.php?status=hapus_gagal");
    }

    $stmt->close();
} else {
    header("location:index.php?status=invalid");
}

$conn->close();
exit;
