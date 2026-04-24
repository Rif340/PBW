<style>
    .navbar .nav-link {
        color: white !important;
    }

    .navbar .nav-link:hover {
        color: blue !important;
    }
</style>

<!-- js boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


<!-- css boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: salmon;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Rif340 Buku</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah.php">Tambah Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi.php">Buat Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lihat_transaksi.php">Lihat Transaksi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>