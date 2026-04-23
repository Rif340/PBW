<?php
include 'koneksi.php';

$search_judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$search_tahun = isset($_GET['tahun_terbit']) ? $_GET['tahun_terbit'] : '';

$query = "SELECT * FROM buku WHERE 1=1";

if (!empty($search_judul)) {
    $query .= " AND judul LIKE '%" . $conn->real_escape_string($search_judul) . "%'";
}

if (!empty($search_tahun)) {
    $query .= " AND tahun_terbit = " . intval($search_tahun);
}

$result = $conn->query($query);
