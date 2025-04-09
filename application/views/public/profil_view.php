<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Profil - RS Bhayangkara Aceh</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
	<style>
		body {
			font-family: 'Poppins', sans-serif;
		}
		.section-title {
			font-weight: bold;
			color: #0d6efd;
			margin-bottom: 1rem;
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
			<h2 class="section-title">Profil RS Bhayangkara Aceh</h2>
			<p class="text-muted">Informasi lengkap mengenai sejarah, visi, misi, dan layanan unggulan rumah sakit.</p>
		</div>

		<div class="row">
			<div class="col-md-6 mb-4">
				<img src="<?= base_url('assets/img/rs_bhayangkara.jpg'); ?>" alt="RS Bhayangkara" class="img-fluid rounded shadow-sm">
			</div>
			<div class="col-md-6">
				<h4 class="fw-bold mb-3 text-primary">Sejarah Singkat</h4>
				<p class="text-muted" style="text-align: justify;">
					RS Bhayangkara Aceh didirikan untuk mendukung pelayanan kesehatan kepada anggota Polri dan masyarakat umum. Seiring waktu, rumah sakit ini berkembang menjadi pusat layanan medis yang profesional dan terpercaya di wilayah Aceh.
				</p>

				<h4 class="fw-bold mt-4 mb-3 text-primary">Visi</h4>
				<p class="text-muted fst-italic">"Menjadi Rumah Sakit Pilihan Utama yang Profesional dan Humanis."</p>

				<h4 class="fw-bold mt-4 mb-3 text-primary">Misi</h4>
				<ul class="text-muted">
					<li>Menyediakan pelayanan kesehatan yang berkualitas tinggi.</li>
					<li>Menjunjung tinggi etika profesi dan nilai kemanusiaan.</li>
					<li>Meningkatkan kompetensi SDM secara berkelanjutan.</li>
					<li>Menjalin kerja sama dengan berbagai pihak untuk pengembangan layanan.</li>
				</ul>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col">
				<h4 class="fw-bold text-primary mb-3">Fasilitas Unggulan</h4>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">✔ Instalasi Gawat Darurat 24 Jam</li>
					<li class="list-group-item">✔ Ruang Rawat Inap Nyaman dan Modern</li>
					<li class="list-group-item">✔ Laboratorium & Radiologi</li>
					<li class="list-group-item">✔ Klinik Spesialis & Subspesialis</li>
					<li class="list-group-item">✔ Farmasi dan Apotek</li>
				</ul>
			</div>
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
