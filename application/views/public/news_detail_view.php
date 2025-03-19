<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Berita</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
	<h1 class="mb-4">Detail Berita</h1>
	<?php if ($post): ?>
		<h2><?= $post->post_title ?></h2>
		<small class="text-muted">Kategori: <?= $post->post_cat_id ?>
			| <?= date('d M Y', strtotime($post->created_at)) ?></small>
		<hr>
		<p><?= $post->post_content ?></p>
		<a href="<?= site_url('home') ?>" class="btn btn-primary">Kembali</a>
	<?php else: ?>
		<p class="text-muted">Berita tidak ditemukan.</p>
		<a href="<?= site_url('home') ?>" class="btn btn-primary">Kembali</a>
	<?php endif; ?>
</div>
</body>
</html>
