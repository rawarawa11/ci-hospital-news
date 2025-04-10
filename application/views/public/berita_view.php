<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .section-title {
            font-weight: bold;
            color: #0d6efd;
            margin-bottom: 1rem;
        }

        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-body {
            flex-grow: 1;
        }

        .card img {
            object-fit: cover; 
        }

    </style>
</head>

<body>

<header class="bg-gradient shadow-sm py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="<?= base_url('assets/img/newspaper_9772011.png'); ?>" alt="Logo" class="me-2" style="width: 40px;">
            <h4 class="mb-0 text-black-50">News<span class="fw-bold">BhayangkaraAceh</span></h4>
        </div>
        <nav class="d-flex align-items-center">
            <ul class="nav me-3">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-primary" href="<?= site_url('profil'); ?>">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('home/pelayanan'); ?>">Pelayanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('berita'); ?>">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('kontak'); ?>">Kontak</a>
                </li>
            </ul>
            <a href="<?= site_url('login'); ?>" class="btn btn-warning d-flex align-items-center px-4 py-2 rounded-3">
                <i class="fas fa-sign-in-alt me-2"></i> Login
            </a>
        </nav>
    </div>
</header>

<main class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Berita Terbaru</h2>
            <p class="text-muted">Informasi terkini mengenai kegiatan dan perkembangan di RS Bhayangkara Aceh.</p>
        </div>

        <div class="row">
            <?php foreach ($articles as $b): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="<?= base_url('uploads/' . $b->thumbnail); ?>" class="card-img-top" alt="<?= $b->post_title; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $b->post_title; ?></h5>
                        <p class="card-text"><?= character_limiter(strip_tags($b->post_content), 150); ?></p>
                        <a href="<?= site_url('home/detail/' . $b->id); ?>" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <img src="<?= base_url('assets/img/rs_logo.png'); ?>" alt="RS Logo" style="width: 60px;" class="mb-2">
        <p class="mb-0">RS Bhayangkara Aceh - Melayani dengan Profesionalisme & Kasih Sayang</p>
        <div class="mt-2">
            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
