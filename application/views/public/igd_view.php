<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Layanan IGD | RS Bhayangkara Aceh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        footer {
            background-color: #212529;
            color: white;
        }
        .footer-info {
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="bg-light border-bottom py-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="<?= base_url('assets/img/logo_rs.png'); ?>" alt="Logo RS" style="width: 50px; height: auto;" class="me-3">
            <div>
                <h4 class="mb-0 text-dark">RS <span class="fw-bold text-success">Bhayangkara Aceh</span></h4>
                <small class="text-muted">Pelayanan Kesehatan Terbaik untuk Masyarakat</small>
            </div>
        </div>
        <a href="<?= site_url('home'); ?>" class="btn btn-outline-success">Beranda</a>
    </div>
</header>

<!-- Konten -->
<div class="container mb-5">
    <h2 class="text-danger fw-bold text-center mb-4">Layanan IGD 24 Jam</h2>
    <p class="text-center text-muted">Pelayanan Gawat Darurat kami tersedia setiap hari, siap membantu dalam keadaan darurat medis.</p>

    <ul class="list-group list-group-flush shadow-sm">
        <li class="list-group-item"><i class="fas fa-ambulance text-danger me-2"></i>Ambulans siaga 24 jam</li>
        <li class="list-group-item"><i class="fas fa-user-md text-success me-2"></i>Dokter & perawat profesional dan terlatih</li>
        <li class="list-group-item"><i class="fas fa-hospital text-primary me-2"></i>Fasilitas emergency lengkap dan modern</li>
    </ul>

    <div class="text-center mt-4">
        <a href="<?= site_url('home/pelayanan'); ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i> Kembali ke Pelayanan
        </a>
    </div>
</div>

<!-- Footer -->
<footer class="pt-4 pb-3">
    <div class="container">
        <div class="row footer-info">
            <div class="col-md-6 mb-3">
                <h5 class="text-white">RS Bhayangkara Aceh</h5>
                <p class="mb-0">Jl. Teuku Umar No.45, Banda Aceh</p>
                <p class="mb-0">Telp: (0651) 123456</p>
                <p>Email: info@rsbhayangkaraaceh.id</p>
            </div>
            <div class="col-md-6 text-md-end">
                <h6 class="text-white">Ikuti Kami</h6>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
        <hr class="border-secondary my-3">
        <div class="text-center small text-muted">
            &copy; <?= date('Y'); ?> RS Bhayangkara Aceh. All rights reserved.
        </div>
    </div>
</footer>

</body>
</html>
