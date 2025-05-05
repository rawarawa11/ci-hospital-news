<?php $this->load->view('layout/header'); ?>

<main class="py-5 bg-light">
	<div class="container">
		<div class="text-center mb-5">
			<h2 class="section-title">Profil RS Bhayangkara Aceh</h2>
			<p class="text-muted">Informasi lengkap mengenai sejarah, visi, misi, dan layanan unggulan rumah sakit.</p>
		</div>

		<div class="row">
			<div class="col-md-6 mb-4">
				<img src="<?= base_url('assets/img/instansi 2.jpg'); ?>" alt="RS Bhayangkara" class="img-fluid rounded shadow-sm">
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

<?php $this->load->view('layout/footer'); ?>