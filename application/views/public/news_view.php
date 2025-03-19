<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Public News</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
	<h1 class="mb-4">Berita Terbaru</h1>
	<?php if (!empty($posts)): ?>
		<div class="list-group">
			<?php foreach ($posts as $post): ?>
				<a href="<?= site_url('home/detail/' . $post->id) ?>" class="list-group-item list-group-item-action">
					<h5 class="mb-1"> <?= $post->post_title ?> </h5>
					<small class="text-muted">Kategori: <?= $post->cat_title ?>
						| <?= date('d M Y', strtotime($post->created_at)) ?></small>
				</a>
			<?php endforeach; ?>
		</div>
	<?php else: ?>
		<p class="text-muted">Tidak ada berita yang tersedia.</p>
	<?php endif; ?>
</div>
</body>
</html>
