<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Sistem PHP</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            border-radius: 12px;
        }
        .hero p {
            text-align: justify;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">

    <div class="hero p-5 shadow">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="fw-bold">Sistem Informasi Sederhana</h1>
                <p class="mt-3">
                    Website ini dibuat menggunakan PHP dan Bootstrap sebagai latihan
                    dasar pengembangan web. Halaman ini berfungsi sebagai beranda
                    untuk mengakses fitur lain yang tersedia di dalam sistem.
                </p>
                <!-- <a href="tabel.php" class="btn btn-light mt-2">
                    Kelola Data
                </a> -->
            </div>

            <div class="col-md-4 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2721/2721296.png"
                     class="img-fluid" width="200" alt="icon">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5><a href="form.php">Form Data Mahasiswa</a></h5>
                    <p class="text-muted">Digunakan untuk mengelola logic backend.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5><a href="Pagination.php">Pagination</a></h5>
                    <p class="text-muted">Digunakan untuk tampilan agar responsif.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5><a href="tabel.php">Tabel</a></h5>
                    <p class="text-muted">Sebagai database penyimpanan data.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
