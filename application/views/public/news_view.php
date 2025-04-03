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
	</style>
</head>
<body>
<header class="bg-gradient shadow-sm py-3">
	<div class="container d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center">
			<img src="assets/img/newspaper_9772011.png" alt="NewsOne logo" class="me-2"
				 style="width: 40px; height: auto;"/>
			<h4 class="mb-0 text-black-50">News<span class="fw-bold">One</span></h4>
		</div>
		<nav>
			<a href="login" class="btn btn-warning d-flex align-items-center px-4 py-2 rounded-3">
				<i class="fas fa-sign-in-alt me-2"></i> Login
			</a>
		</nav>
	</div>
</header>


<main>
	<section class="text-white py-5" style="background: linear-gradient(to right, #6a11cb, #2575fc);">
		<div class="container text-center">
			<?php if (isset($hero_news) && !empty($hero_news)) : ?>
				<span class="badge bg-warning text-dark">TRENDING</span>
				<h1 class="mt-3 fw-bold"> <?= $hero_news->post_title; ?></h1>
				<p class="lead"> <?= isset($hero_news->post_content) ? substr(strip_tags($hero_news->post_content), 0, 100) . '...' : 'Konten tidak tersedia'; ?></p>
				<a href="<?= site_url('home/detail/' . $hero_news->id); ?>" class="btn btn-warning text-dark">Read
					More</a>
			<?php else : ?>
				<h1>Belum ada berita terbaru</h1>
				<p>Silakan cek kembali nanti.</p>
			<?php endif; ?>
		</div>
	</section>

	<section class="py-5 bg-light">
		<div class="container">
			<h2 class="mb-4 text-primary fw-bold">Latest Articles</h2>
			<div class="row g-4">
				<?php if (!empty($articles)) : ?>
					<?php foreach ($articles as $article) : ?>
						<div class="col-md-4">
							<div class="card shadow-sm border-0 rounded-lg overflow-hidden">
								<img src="<?= base_url('upload/thumbnail/' . $article->thumbnail); ?>"
									 class="card-img-top" alt="<?= $article->post_title; ?>">
								<div class="card-body" style="background: linear-gradient(to right, #ff9a9e, #fad0c4);">
									<h5 class="card-title">
										<a href="<?= site_url('home/detail/' . $article->id); ?>"
										   class="text-decoration-none text-dark fw-bold"> <?= $article->post_title; ?></a>
									</h5>
									<p class="card-text text-dark"> <?= substr(strip_tags($article->post_content), 0, 80); ?>
										...</p>
									<a href="<?= site_url('home/detail/' . $article->id); ?>" class="btn btn-danger">Read
										More</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
					<p class="text-muted text-center">Tidak ada artikel yang tersedia.</p>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<footer class="bg-dark text-white py-4">
	<div class="container text-center">
		<p class="mb-0">&copy; 2025 NewsOne. All rights reserved.</p>
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
