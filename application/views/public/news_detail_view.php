<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<header class="bg-gradient shadow-sm py-3">
	<div class="container d-flex justify-content-between align-items-center">
		<div class="d-flex align-items-center">
			<img src="<?= base_url("assets/img/polda.png") ?>" alt="NewsOne logo" class="me-2"
				 style="width: 40px; height: auto;"/>
			<h4 class="mb-0 text-black-50">News<span class="fw-bold">BhayangkaraAceh</span></h4>
		</div>
		<nav class="d-flex justify-content-center">
			<a href="<?= site_url('home'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left me-2"> </i>Back
			</a>
		</nav>
	</div>
</header>

<div class="container mt-4">
	<div class="row">
		<div class="col-lg-8 col-md-12 mx-auto">
			<div class="shadow rounded p-5 bg-white mx-auto">
				<?php if (isset($post->thumbnail)) : ?>
					<img src="<?= base_url('upload/thumbnail/' . $post->thumbnail); ?>" alt="<?= $post->post_title; ?>"
						 class="img-fluid rounded mb-4 d-block mx-auto">
				<?php else : ?>
					<img src="https://placehold.co/800x400?text=No+Image" alt="No Image Available"
						 class="img-fluid rounded mb-4 d-block mx-auto">
				<?php endif; ?>

				<h1 class="display-4 mb-3"><?= $post->post_title; ?></h1>
				<p class="text-muted mb-4"><i class="fas fa-calendar-alt"></i> <?= date('d M Y', strtotime($post->created_at)); ?></p>

				<div class="article-content">
					<p class="lead"><?= nl2br($post->post_content); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

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
