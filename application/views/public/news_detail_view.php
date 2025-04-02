<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f3f4f6;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 800px;
			margin: 20px auto;
			padding: 20px;
			background-color: white;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
		}

		.article-title {
			font-size: 28px;
			font-weight: bold;
			color: #2b6cb0;
			margin-bottom: 10px;
		}

		.article-meta {
			color: #666;
			font-size: 14px;
			margin-bottom: 20px;
		}

		.article-img {
			width: 100%;
			height: auto;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		.article-content {
			font-size: 16px;
			line-height: 1.6;
			color: #333;
		}

		.back-button {
			display: block;
			margin-top: 20px;
			padding: 10px 20px;
			background-color: #2b6cb0;
			color: white;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			text-align: center;
		}

		.back-button:hover {
			background-color: #1e4e8c;
		}
	</style>
</head>
<body>
<div class="container">
	<?php if (isset($post->thumbnail)) : ?>
		<img src="<?= base_url('upload/thumbnail/' . $post->thumbnail); ?>" alt="<?= $post->post_title; ?>"
			 class="article-img">
	<?php else : ?>
		<img src="https://placehold.co/800x400?text=No+Image" alt="No Image Available" class="article-img">
	<?php endif; ?>

	<h1 class="article-title"><?= $post->post_title; ?></h1>
	<p class="article-meta">Diterbitkan pada <?= date('d M Y', strtotime($post->created_at)); ?></p>
	<div class="article-content">
		<?= nl2br($post->post_content); ?>
	</div>

	<button class="back-button" onclick="window.location.href='<?= site_url('home'); ?>'">&larr; Kembali ke Berita
	</button>
</div>
</body>
</html>
