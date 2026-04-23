<?php
include 'koneksi.php';

try {
    $tanggal_pesanan = date('Y-m-d');
    $pelanggan_id = $_POST['pelanggan_id'];
    $total_harga = 0;

    $conn->begin_transaction();

    $stmt = $conn->prepare("
        INSERT INTO pesanan (tanggal_pesanan, pelanggan_id, total_harga) 
        VALUES (?, ?, ?)
    ");
    $stmt->bind_param("sid", $tanggal_pesanan, $pelanggan_id, $total_harga);
    $stmt->execute();

    $pesanan_id = $conn->insert_id;

    foreach ($_POST['buku'] as $buku) {
        $buku_id = $buku['id'];
        $kuantitas = $buku['kuantitas'];

        $stmt = $conn->prepare("SELECT harga, stok FROM buku WHERE id = ?");
        $stmt->bind_param("i", $buku_id);
        $stmt->execute();
        $stmt->bind_result($harga_per_satuan, $stok);
        $stmt->fetch();
        $stmt->close();

        if ($stok < $kuantitas) {
            throw new Exception("Stok buku ID $buku_id tidak cukup.");
        }

        $stmt = $conn->prepare("
            INSERT INTO detail_pesanan (pesanan_id, buku_id, kuantitas, harga_per_satuan) 
            VALUES (?, ?, ?, ?)
        ");
        $stmt->bind_param("iiid", $pesanan_id, $buku_id, $kuantitas, $harga_per_satuan);
        $stmt->execute();

        $total_harga += $kuantitas * $harga_per_satuan;

        $stmt = $conn->prepare("UPDATE buku SET stok = stok - ? WHERE id = ?");
        $stmt->bind_param("ii", $kuantitas, $buku_id);
        $stmt->execute();
    }

    $stmt = $conn->prepare("UPDATE pesanan SET total_harga = ? WHERE id = ?");
    $stmt->bind_param("di", $total_harga, $pesanan_id);
    $stmt->execute();

    $conn->commit();

    header("Location: lihat_transaksi.php?status=sukses");
    exit;
} catch (Exception $e) {
    $conn->rollback();
    header("Location: lihat_transaksi.php?status=gagal");
    exit;
}
