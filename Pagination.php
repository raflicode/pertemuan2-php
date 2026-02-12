<?php
// Total data (misalnya ada 10 data)
$total_data = 10;

// Jumlah data per halaman
$limit = 3;

// Ambil halaman sekarang
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Hitung total halaman
$total_pages = ceil($total_data / $limit);

// Tentukan data awal
$start = ($page - 1) * $limit + 1;
$end = min($start + $limit - 1, $total_data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagination Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3>Contoh Pagination Sederhana</h3>

    <!-- Tampilkan Data -->
    <ul class="list-group mb-3">
        <?php for ($i = $start; $i <= $end; $i++) : ?>
            <li class="list-group-item">
                Data ke-<?= $i ?>
            </li>
        <?php endfor; ?>
    </ul>

    <!-- Pagination -->
    <nav>
        <ul class="pagination">

            <!-- Previous -->
            <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
            </li>

            <!-- Nomor Halaman -->
            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>">
                        <?= $i ?>
                    </a>
                </li>
            <?php endfor; ?>

            <!-- Next -->
            <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
            </li>

        </ul>
    </nav>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
