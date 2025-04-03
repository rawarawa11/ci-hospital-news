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
			<img src="<?= base_url("assets/img/newspaper_9772011.png") ?>" alt="NewsOne logo" class="me-2"
				 style="width: 40px; height: auto;"/>
			<h4 class="mb-0 text-dark">News<span class="fw-bold">One</span></h4>
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
			<?php if (isset($post->thumbnail)) : ?>
				<img src="<?= base_url('upload/thumbnail/' . $post->thumbnail); ?>" alt="<?= $post->post_title; ?>"
					 class="img-fluid rounded mb-4 align-content-center">
			<?php else : ?>
				<img src="https://placehold.co/800x400?text=No+Image" alt="No Image Available"
					 class="img-fluid rounded mb-4">
			<?php endif; ?>

			<h1 class="h2"><?= $post->post_title; ?></h1>
			<p class="text-muted"><i
					class="fas fa-calendar-alt"></i> <?= date('d M Y', strtotime($post->created_at)); ?></p>
			<div class="article-content">
				<p><?= nl2br($post->post_content); ?></p>
			</div>
		</div>
	</div>
</div>

<footer class="bg-dark text-white py-4 mt-5">
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
