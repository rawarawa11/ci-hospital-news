<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?= $title; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
	<style>
		body {
			font-family: 'Poppins', sans-serif;
		}

		.card {
			transition: transform 0.3s ease-in-out;
		}

		.card:hover {
			transform: translateY(-10px);
			box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
		}

		.bg-gradient {
			background: linear-gradient(to right, #ff7e5f, #feb47b);
		}

		.nav-link.active {
			font-weight: bold;
			color:rgb(15, 80, 232) !important; /* warna kuning Bootstrap */
			transition: all 0.3s ease-in-out;
		}

		.nav-link {
			transition: all 0.2s ease;
		}

		.nav-link:hover {
			color:rgb(58, 84, 215) !important;
		}

	</style>
</head>
<body>
<header class="bg-gradient shadow-sm py-3">
	<div class="container d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center">
			<img src="assets/img/newspaper_9772011.png" alt="NewsOne logo" class="me-2"
				 style="width: 40px; height: auto;"/>
			<h4 class="mb-0 text-black-50">News<span class="fw-bold">BhayangkaraAceh</span></h4>
		</div>
		<nav class="d-flex align-items-center">
			<ul class="nav me-3">
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home'); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home/profil'); ?>">Profil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home/pelayanan'); ?>">Pelayanan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark fw-semibold" href="<?= site_url('home'); ?>">Berita</a>
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


<main>
	<section class="text-white py-5" style="background: linear-gradient(to right, #6a11cb, #2575fc);">
		<?php if (isset($hero_news) && !empty($hero_news)) : ?>
			<div class="hero-image position-relative text-white text-center d-flex align-items-center" style="
				background: url('<?= base_url('upload/thumbnail/' . $hero_news->thumbnail); ?>') no-repeat center center;
				background-size: cover;
				min-height: 400px;
			">
				<div class="container position-relative z-2">
					<span class="badge bg-warning text-dark">TRENDING</span>
					<h1 class="mt-3 fw-bold"><?= $hero_news->post_title; ?></h1>
					<p class="lead">
						<?= isset($hero_news->post_content) ? substr(strip_tags($hero_news->post_content), 0, 100) . '...' : 'Konten tidak tersedia'; ?>
					</p>
					<a href="<?= site_url('home/detail/' . $hero_news->id); ?>" class="btn btn-warning text-dark">Read More</a>
				</div>
				<div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5); z-index:1;"></div>
			</div>
		<?php else : ?>
			<div class="container text-center py-5">
				<h1>Belum ada berita terbaru</h1>
				<p>Silakan cek kembali nanti.</p>
			</div>
		<?php endif; ?>
	</section>

	<!-- Sekilas Tentang Instansi -->
	<section class="py-5 bg-white border-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 mb-4 mb-md-0">
					<img src="assets/img/instansi.jpg" class="img-fluid rounded shadow" alt="Tentang Instansi">
				</div>
				<div class="col-md-6">
					<h2 class="text-primary fw-bold">Sekilas Tentang Kami</h2>
					<p class="text-muted mt-3">
						BhayangkaraAceh adalah institusi kepolisian yang berkomitmen dalam memberikan pelayanan terbaik kepada masyarakat. Melalui platform ini, kami hadir untuk menyampaikan informasi terpercaya, layanan kepolisian, serta berita aktual seputar kegiatan kami di wilayah Aceh.
					</p>
					<a href="<?= site_url('home/profil'); ?>" class="btn btn-outline-primary mt-3">Selengkapnya</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Pelayanan yang Tersedia -->
	<section class="py-5 bg-light border-top">
		<div class="container">
			<h2 class="text-center text-primary fw-bold mb-5">Pelayanan yang Tersedia</h2>
			<div class="row g-4">
				<!-- Card Jadwal Dokter -->
				<div class="col-md-4">
					<div class="card h-100 shadow-sm border-0">
						<div class="card-body">
							<h5 class="card-title fw-bold text-dark"><i class="fas fa-user-md me-2 text-primary"></i>Jadwal Dokter</h5>
							<p class="card-text text-muted">Informasi lengkap mengenai jadwal praktik dokter umum dan spesialis yang bertugas setiap hari.</p>
							<a href="<?= site_url('pelayanan/jadwal_dokter'); ?>" class="btn btn-outline-primary">Lihat Jadwal</a>
						</div>
					</div>
				</div>

				<!-- Card Pelayanan IGD -->
				<div class="col-md-4">
					<div class="card h-100 shadow-sm border-0">
						<div class="card-body">
							<h5 class="card-title fw-bold text-dark"><i class="fas fa-ambulance me-2 text-danger"></i>Pelayanan IGD</h5>
							<p class="card-text text-muted">Pelayanan Instalasi Gawat Darurat yang siaga 24 jam untuk penanganan medis darurat.</p>
							<a href="<?= site_url('pelayanan/igd'); ?>" class="btn btn-outline-danger">Info IGD</a>
						</div>
					</div>
				</div>

				<!-- Card Informasi Apotek -->
				<div class="col-md-4">
					<div class="card h-100 shadow-sm border-0">
						<div class="card-body">
							<h5 class="card-title fw-bold text-dark"><i class="fas fa-pills me-2 text-success"></i>Informasi Apotek</h5>
							<p class="card-text text-muted">Dapatkan informasi mengenai stok obat, jam operasional apotek, dan layanan farmasi lainnya di rumah sakit kami.</p>
							<a href="<?= site_url('pelayanan/apotek'); ?>" class="btn btn-outline-success">Lihat Info</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Latest Articles -->
	<section class="py-5 bg-light border-top">
		<div class="container">
			<h2 class="mb-4 text-primary fw-bold text-center">Berita Terbaru</h2>
			<div class="row g-4">
				<?php
				$displayLimit = 6;
				$count = 0;
				if (!empty($articles)) :
					foreach ($articles as $article) :
						if ($count >= $displayLimit) break;
						$count++;
				?>
					<div class="col-md-4 d-flex">
						<div class="card shadow-sm border-0 rounded-4 w-100">
							<img src="<?= base_url('upload/thumbnail/' . $article->thumbnail); ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="<?= $article->post_title; ?>">
							<div class="card-body">
								<h5 class="card-title">
									<a href="<?= site_url('home/detail/' . $article->id); ?>" class="text-decoration-none text-dark fw-bold">
										<?= $article->post_title; ?>
									</a>
								</h5>
								<p class="card-text text-muted"><?= substr(strip_tags($article->post_content), 0, 90); ?>...</p>
								<a href="<?= site_url('home/detail/' . $article->id); ?>" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<p class="text-muted text-center">Tidak ada artikel yang tersedia.</p>
			<?php endif; ?>
			</div>

			<?php if (!empty($articles) && count($articles) > $displayLimit) : ?>
				<div class="text-center mt-5">
					<a href="<?= site_url('berita'); ?>" class="btn btn-primary px-4 py-2">Lihat Semua Berita</a>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>

<footer class="bg-dark text-white pt-5 pb-4">
	<div class="container">
		<div class="row">
			<!-- Logo & Instansi -->
			<div class="col-md-4 mb-4 mb-md-0 d-flex align-items-center">
				<img src="<?= base_url('assets/img/logo_rs.png'); ?>" alt="Logo RS" style="width: 60px; height: auto;" class="me-3">
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
