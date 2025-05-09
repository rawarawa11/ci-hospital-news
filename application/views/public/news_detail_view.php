<?php $this->load->view('layout/header'); ?>

<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-lg-9 col-md-12">
			<div class="bg-white shadow-lg rounded-4 p-5 position-relative overflow-hidden">

				<!-- Tombol Kembali -->
				<?php 
					$referrer = $_SERVER['HTTP_REFERER'] ?? ''; 
					$backUrl = $referrer ? $referrer : base_url();
					$currentUrl = current_url();
				?>
				<a href="<?= $backUrl; ?>" class="btn btn-outline-secondary mb-4 rounded-pill px-4">
					<i class="fas fa-arrow-left me-2"></i> Kembali
				</a>

				<!-- Gambar Thumbnail -->
				<?php if (isset($post->thumbnail)) : ?>
					<img src="<?= base_url('upload/thumbnail/' . $post->thumbnail); ?>" alt="<?= $post->post_title; ?>"
						 class="img-fluid rounded-4 mb-4 w-100" style="object-fit: cover; max-height: 400px;">
				<?php else : ?>
					<img src="https://placehold.co/800x400?text=No+Image" alt="No Image Available"
						 class="img-fluid rounded-4 mb-4 w-100" style="object-fit: cover; max-height: 400px;">
				<?php endif; ?>

				<!-- Judul Artikel -->
				<h1 class="display-5 fw-bold text-dark mb-3"><?= $post->post_title; ?></h1>

				<!-- Tanggal -->
				<p class="text-muted mb-4"><i class="fas fa-calendar-alt me-2"></i><?= date('d M Y', strtotime($post->created_at)); ?></p>

				<!-- Konten -->
				<div class="article-content fs-5 lh-lg text-dark">
					<?= nl2br($post->post_content); ?>
				</div>

				<!-- Share Button -->
				<div class="mt-5">
					<h5 class="mb-3">Bagikan ke:</h5>
					<div class="d-flex gap-3">
						<a href="https://wa.me/?text=<?= urlencode($post->post_title . ' - ' . $currentUrl); ?>" 
						   target="_blank" class="btn btn-success">
							<i class="fab fa-whatsapp me-1"></i> WhatsApp
						</a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($currentUrl); ?>" 
						   target="_blank" class="btn btn-primary">
							<i class="fab fa-facebook-f me-1"></i> Facebook
						</a>
						<a href="https://twitter.com/intent/tweet?text=<?= urlencode($post->post_title); ?>&url=<?= urlencode($currentUrl); ?>" 
						   target="_blank" class="btn btn-info text-white">
							<i class="fab fa-twitter me-1"></i> X (Twitter)
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php $this->load->view('layout/footer'); ?>
