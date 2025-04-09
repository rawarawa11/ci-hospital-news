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

<div class="container py-5">
    <h2 class="text-center text-primary fw-bold mb-4">Layanan yang Tersedia</h2>

    <!-- Kartu Pilihan Layanan -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-4 mb-3">
            <div class="card h-100 text-center p-3 layanan-card" data-target="jadwal">
                <div class="card-body">
                    <i class="fas fa-user-md fa-2x text-success mb-3"></i>
                    <h5 class="card-title">Jadwal Dokter</h5>
                    <p class="text-muted">Lihat jadwal dokter umum dan spesialis kami.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 text-center p-3 layanan-card" data-target="igd">
                <div class="card-body">
                    <i class="fas fa-ambulance fa-2x text-danger mb-3"></i>
                    <h5 class="card-title">Pelayanan IGD</h5>
                    <p class="text-muted">Informasi tentang layanan gawat darurat 24 jam.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100 text-center p-3 layanan-card" data-target="apotek">
                <div class="card-body">
                    <i class="fas fa-pills fa-2x text-info mb-3"></i>
                    <h5 class="card-title">Informasi Apotek</h5>
                    <p class="text-muted">Cek ketersediaan obat dan jam buka apotek.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Detail Layanan -->
    <div class="mt-4">
        <div id="jadwal" class="layanan-detail" style="display: none;">
            <h4 class="text-success fw-bold mb-3">Jadwal Dokter</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Hari</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>dr. Aisyah</td><td>Umum</td><td>Senin - Jumat</td><td>08:00 - 14:00</td></tr>
                    <tr><td>dr. Budi</td><td>Anak</td><td>Selasa & Kamis</td><td>10:00 - 13:00</td></tr>
                </tbody>
            </table>
        </div>

        <div id="igd" class="layanan-detail" style="display: none;">
            <h4 class="text-danger fw-bold mb-3">Pelayanan IGD</h4>
            <p>IGD kami siap 24 jam dengan fasilitas lengkap dan tenaga medis profesional.</p>
            <ul>
                <li>Ambulans siaga</li>
                <li>Dokter & perawat terlatih</li>
                <li>Ruangan emergency lengkap</li>
            </ul>
        </div>

        <div id="apotek" class="layanan-detail" style="display: none;">
            <h4 class="text-info fw-bold mb-3">Informasi Apotek</h4>
            <p>Apotek rumah sakit kami menyediakan berbagai kebutuhan medis.</p>
            <ul>
                <li>Jam buka: 08.00 - 21.00 WIB</li>
                <li>Konsultasi farmasi gratis</li>
                <li>Obat generik & paten tersedia</li>
            </ul>
        </div>
    </div>
</div>

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


<!-- Bootstrap & FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
    document.querySelectorAll('.layanan-card').forEach(card => {
        card.addEventListener('click', function () {
            let targetId = this.getAttribute('data-target');

            // Sembunyikan semua detail layanan
            document.querySelectorAll('.layanan-detail').forEach(section => {
                section.style.display = 'none';
            });

            // Tampilkan layanan yang diklik
            const target = document.getElementById(targetId);
            if (target) {
                target.style.display = 'block';
            }
        });
    });
</script>

</body>
</html>
