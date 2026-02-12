<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa | Sistem Akademik</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<?php include __DIR__ . '/navbar.php'; ?>

<div class="container mt-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="belajar.php">Home</a></li>
            <li class="breadcrumb-item"><a href="tabel.php">Tabel</a></li>
            <li class="breadcrumb-item active">Input Data</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Form Data Mahasiswa</h4>
                </div>

                <div class="card-body">
                    <form method="POST">

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Program Studi</label>
                            <select name="prodi" class="form-control" required>
                                <option value="">Pilih Program Studi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">
                                Simpan
                            </button>
                            <button type="reset" class="btn btn-outline-secondary btn-block">
                                Bersihkan
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="mt-3 text-center">
                <a href="belajar.php" class="btn btn-link">← Kembali ke Belajar</a>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Proses data form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = htmlspecialchars($_POST['nama']);
    $nim    = htmlspecialchars($_POST['nim']);
    $prodi  = htmlspecialchars($_POST['prodi']);
    $alamat = htmlspecialchars($_POST['alamat']);

    echo "
    <div class='container mt-4'>
        <div class='alert alert-info'>
            <h5>Data Berhasil Dikirim</h5>
            <ul class='mb-0'>
                <li><b>Nama:</b> $nama</li>
                <li><b>NIM:</b> $nim</li>
                <li><b>Prodi:</b> $prodi</li>
                <li><b>Alamat:</b> $alamat</li>
            </ul>
        </div>
    </div>
    ";
}
?>
