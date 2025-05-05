<?php $this->load->view('layout/header'); ?>

<div class="container mt-4">
	<div class="row">
		<div class="col-lg-8 col-md-12 mx-auto">
			<div class="shadow rounded p-5 bg-white mx-auto">

				<!-- Tombol Kembali -->
				<?php 
					// Mendapatkan referer (halaman asal)
					$referrer = $_SERVER['HTTP_REFERER'] ?? ''; 
					
					// Menentukan URL untuk tombol kembali
					$backUrl = $referrer ? $referrer : base_url();
				?>
				<a href="<?= $backUrl; ?>" class="btn btn-primary mb-4"><i class="fas fa-arrow-left"></i> Kembali</a>

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

<?php $this->load->view('layout/footer'); ?>
