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

        .contact-info i {
            font-size: 24px;
            color: #0d6efd;
        }

        .contact-info h5 {
            color: #333;
            margin-top: 10px;
        }

        .map-container {
            height: 400px;
            width: 100%;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<header class="bg-gradient shadow-sm py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="<?= base_url('assets/img/polda.png'); ?>" alt="Logo" class="me-2" style="width: 40px;">
            <h4 class="mb-0 text-black-50">News<span class="fw-bold">BhayangkaraAceh</span></h4>
        </div>
        <nav class="d-flex align-items-center">
            <ul class="nav me-3">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('home'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('profil'); ?>">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('home/pelayanan'); ?>">Pelayanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="<?= site_url('berita'); ?>">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-primary" href="<?= site_url('kontak'); ?>">Kontak</a>
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
            <h2 class="section-title">Kontak Kami</h2>
            <p class="text-muted">Kami siap membantu Anda. Silakan hubungi kami melalui form berikut atau langsung datang ke lokasi.</p>
        </div>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <h4 class="section-title">Formulir Kontak</h4>
                <form action="<?= site_url('kontak/submit'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6">
                <h4 class="section-title">Informasi Kontak</h4>
                <div class="contact-info">
                    <div class="mb-4">
                        <i class="fas fa-phone-alt"></i>
                        <h5>+62 812 345 6789</h5>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-envelope"></i>
                        <h5>contact@rsbhayangkaraaceh.com</h5>
                    </div>
                    <div class="mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                        <h5>Jl. Raya Bhayangkara No. 123, Banda Aceh</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps Embed -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98765.7890!2d95.322301!3d5.5792755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3030f6f3b61e432d%3A0xaabbccdd22eeff!2sRS%20Bhayangkara%20Aceh!5e0!3m2!1sid!2sid!4v1638872833851!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</main>

<footer class="bg-dark text-white pt-5 pb-4">
	<div class="container">
		<div class="row">
			<!-- Logo & Instansi -->
			<div class="col-md-4 mb-4 mb-md-0 d-flex align-items-center">
				<img src="<?= base_url('assets/img/logo_rs.jpg'); ?>" alt="Logo RS" style="width: 60px; height: auto;" class="me-3">
				<div>
					<h5 class="fw-bold mb-1">RS Bhayangkara Aceh</h5>
					<p class="small mb-0">Memberikan pelayanan kesehatan terbaik dan terpercaya untuk masyarakat Aceh dan sekitarnya.</p>
				</div>
			</div>

			<!-- Kontak -->
			<div class="col-md-4 mb-4 mb-md-0">
				<h6 class="fw-bold">Kontak Kami</h6>
				<ul class="list-unstyled small">
					<li><i class="fas fa-map-marker-alt me-2"></i> Jl. Teuku Umar No.45, Banda Aceh</li>
					<li><i class="fas fa-phone me-2"></i> (0651) 123456</li>
					<li><i class="fas fa-envelope me-2"></i> info@rsbhayangkaraaceh.id</li>
				</ul>
			</div>

			<!-- Sosial Media -->
			<div class="col-md-4 text-md-end">
				<h6 class="fw-bold">Ikuti Kami</h6>
				<div class="mt-2">
					<a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
					<a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>

		<hr class="border-secondary my-4">

		<div class="text-center small">
			&copy; <?= date('Y'); ?> RS Bhayangkara Aceh. All rights reserved.
		</div>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
